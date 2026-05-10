/**
 * Pretext Layout Engine — Magazine-style editorial text flow
 *
 * Uses @chenglou/pretext for DOM-free text measurement and
 * variable-width line layout (text flowing around shapes).
 *
 * Sections managed:
 *   - Hero: text flows around portrait photo
 *   - About: bio text flows around video element
 *   - Case Studies: alternating left/right image spreads
 *   - Contact: text flows around form
 */
(function () {
    'use strict';

    var MIN_WIDTH = 480; // Below this, fall back to default CSS layout
    var DEBOUNCE_MS = 100;

    var sections = []; // Registered section configs
    var currentTheme = '2026';
    var resizeTimer = null;
    var initialized = false;

    // ========================================
    // Helpers
    // ========================================

    function getComputedFont(el) {
        var cs = window.getComputedStyle(el);
        var weight = cs.fontWeight || '400';
        var size = cs.fontSize || '16px';
        var family = cs.fontFamily || 'sans-serif';
        return weight + ' ' + size + ' ' + family;
    }

    function getLineHeight(el) {
        var cs = window.getComputedStyle(el);
        var lh = cs.lineHeight;
        if (lh === 'normal') {
            return parseFloat(cs.fontSize) * 1.5;
        }
        return parseFloat(lh);
    }

    /**
     * Given exclusion rects and a Y position + container width,
     * return the available line width and X offset for that line.
     */
    function getLineConstraints(y, lineHeight, containerWidth, exclusions) {
        var leftInset = 0;
        var rightInset = 0;

        for (var i = 0; i < exclusions.length; i++) {
            var ex = exclusions[i];
            // Check if this line overlaps the exclusion vertically
            if (y + lineHeight > ex.top && y < ex.bottom) {
                leftInset = Math.max(leftInset, ex.left || 0);
                rightInset = Math.max(rightInset, ex.right || 0);
            }
        }

        return {
            x: leftInset,
            width: Math.max(containerWidth - leftInset - rightInset, 100)
        };
    }

    // ========================================
    // Text Flow Renderer
    // ========================================

    /**
     * Flow text around exclusion shapes using pretext's layoutNextLine.
     *
     * @param {HTMLElement} textEl - The text element to reflow
     * @param {number} containerWidth - Available width
     * @param {Array} exclusions - Shape rects [{top, right, bottom, left}]
     * @param {Object} opts - { startY: offset from container top }
     * @returns {Object} { height: total text height, lines: line data }
     */
    function flowText(textEl, containerWidth, exclusions, opts) {
        opts = opts || {};
        var startY = opts.startY || 0;

        var text = textEl.textContent || '';
        if (!text.trim()) return { height: 0, lines: [] };

        var font = getComputedFont(textEl);
        var lineHeight = getLineHeight(textEl);

        // Use pretext to prepare text with segment data
        var prepared = Pretext.prepareWithSegments(text, font);

        // LayoutCursor is { segmentIndex, graphemeIndex }, not an integer
        var cursor = { segmentIndex: 0, graphemeIndex: 0 };
        var y = startY;
        var lines = [];
        var maxIter = 200; // Safety limit

        // Walk line by line with variable widths
        while (maxIter-- > 0) {
            var constraints = getLineConstraints(y, lineHeight, containerWidth, exclusions);
            var result = Pretext.layoutNextLine(prepared, cursor, constraints.width);

            if (!result) break; // No more lines

            lines.push({
                text: result.text || '',
                x: constraints.x,
                y: y,
                width: result.width,
                maxWidth: constraints.width
            });

            // Advance cursor — end becomes the start of the next line
            cursor = result.end;
            y += lineHeight;
        }

        return {
            height: y - startY,
            lines: lines,
            lineHeight: lineHeight,
            font: font
        };
    }

    // ========================================
    // Section: Hero
    // ========================================

    function layoutHero() {
        // Hero keeps its native flexbox layout — no absolute positioning.
        // We just ensure it doesn't get broken by other pretext operations.
        var section = document.querySelector('.hero-section');
        if (section) section.setAttribute('data-pretext', 'active');
    }

    function resetHero() {
        var section = document.querySelector('.hero-section');
        if (section) section.removeAttribute('data-pretext');
    }

    // ========================================
    // Section: About
    // ========================================

    function layoutAbout() {
        var section = document.querySelector('.about-section');
        if (!section) return;

        var inner = section.querySelector('.about-inner');
        var photo = section.querySelector('.about-photo');
        var content = section.querySelector('.about-content');
        if (!inner || !photo || !content) return;

        var containerWidth = inner.offsetWidth;
        if (containerWidth < MIN_WIDTH) {
            resetAbout();
            return;
        }

        var shapes = window.PretextShapes || {};
        var themeShapes = shapes[currentTheme] || shapes['2026'];
        if (!themeShapes || !themeShapes.about) return;

        var exclusions = themeShapes.about(containerWidth);

        // Switch to block layout — photo becomes absolute inset
        inner.style.display = 'block';
        inner.style.position = 'relative';

        photo.style.position = 'absolute';
        photo.style.top = '0';
        photo.style.left = '0';
        photo.style.zIndex = '2';
        photo.style.width = (exclusions[0] ? exclusions[0].left : 250) + 'px';

        // Content fills full width, text flows around photo
        content.style.width = '100%';
        content.style.flex = 'none';

        var heading = content.querySelector('.about-heading');
        var bios = content.querySelectorAll('.about-bio');
        var strengths = content.querySelector('.about-strengths');

        var y = 0;
        var marginBetween = 16;

        // Heading
        if (heading) {
            var headingResult = flowText(heading, containerWidth, exclusions, { startY: y });
            applyTextFlow(heading, headingResult, containerWidth);
            y += headingResult.height + marginBetween;
        }

        // Bio paragraphs
        for (var i = 0; i < bios.length; i++) {
            var bioResult = flowText(bios[i], containerWidth, exclusions, { startY: y });
            applyTextFlow(bios[i], bioResult, containerWidth);
            y += bioResult.height + marginBetween;
        }

        section.setAttribute('data-pretext', 'active');
    }

    function resetAbout() {
        var section = document.querySelector('.about-section');
        if (!section) return;
        section.removeAttribute('data-pretext');

        var inner = section.querySelector('.about-inner');
        var photo = section.querySelector('.about-photo');
        var content = section.querySelector('.about-content');
        if (inner) { inner.style.display = ''; inner.style.position = ''; }
        if (photo) {
            photo.style.position = '';
            photo.style.top = '';
            photo.style.left = '';
            photo.style.width = '';
            photo.style.zIndex = '';
        }
        if (content) { content.style.width = ''; content.style.flex = ''; }
    }

    // ========================================
    // Section: Case Studies
    // ========================================

    function layoutCaseStudies() {
        var cards = document.querySelectorAll('.case-study-card');
        if (!cards.length) return;

        var shapes = window.PretextShapes || {};
        var themeShapes = shapes[currentTheme] || shapes['2026'];
        if (!themeShapes || !themeShapes.caseStudy) return;

        for (var i = 0; i < cards.length; i++) {
            var card = cards[i];
            var image = card.querySelector('.case-study-image');
            var body = card.querySelector('.case-study-body');
            if (!image || !body) continue;

            var containerWidth = card.offsetWidth;
            if (containerWidth < MIN_WIDTH) {
                resetCaseStudyCard(card);
                continue;
            }

            var exclusions = themeShapes.caseStudy(containerWidth, 0, i);
            var side = i % 2 === 0 ? 'left' : 'right';

            // Magazine spread: image on alternating sides
            card.style.position = 'relative';
            card.style.display = 'block';

            image.style.position = 'absolute';
            image.style.top = '0';
            image.style[side] = '0';
            image.style[side === 'left' ? 'right' : 'left'] = 'auto';
            image.style.zIndex = '2';
            image.style.width = (exclusions[0] ? Math.max(exclusions[0].left, exclusions[0].right) - 16 : 250) + 'px';

            // Body text flows around the image
            body.style.width = '100%';

            // .project-link intentionally excluded — it's a CTA button (inline-flex,
            // sized to content), not flowing body text. Including it caused pretext
            // to inject a 274px-wide float div inside the button, bloating its width.
            var textEls = body.querySelectorAll('.slide-label, .project-title, .structure-item');
            var y = 0;
            var margin = 10;

            for (var j = 0; j < textEls.length; j++) {
                var result = flowText(textEls[j], containerWidth, exclusions, { startY: y });
                applyTextFlow(textEls[j], result, containerWidth);
                y += result.height + margin;
            }

            card.setAttribute('data-pretext', 'active');
            card.setAttribute('data-spread', side);
        }
    }

    function resetCaseStudyCard(card) {
        card.removeAttribute('data-pretext');
        card.removeAttribute('data-spread');
        card.style.position = '';
        card.style.display = '';

        var image = card.querySelector('.case-study-image');
        var body = card.querySelector('.case-study-body');
        if (image) {
            image.style.position = '';
            image.style.top = '';
            image.style.left = '';
            image.style.right = '';
            image.style.width = '';
            image.style.zIndex = '';
        }
        if (body) { body.style.width = ''; }
    }

    // ========================================
    // Section: Contact
    // ========================================

    function layoutContact() {
        var section = document.querySelector('.contact-section');
        if (!section) return;

        var inner = section.querySelector('.contact-inner');
        var info = section.querySelector('.contact-info');
        var form = section.querySelector('.contact-form');
        if (!inner || !info || !form) return;

        var containerWidth = inner.offsetWidth;
        if (containerWidth < MIN_WIDTH) {
            resetContact();
            return;
        }

        var shapes = window.PretextShapes || {};
        var themeShapes = shapes[currentTheme] || shapes['2026'];
        if (!themeShapes || !themeShapes.contact) return;

        var exclusions = themeShapes.contact(containerWidth);

        // Form becomes absolute inset on right
        inner.style.display = 'block';
        inner.style.position = 'relative';

        form.style.position = 'absolute';
        form.style.top = '0';
        form.style.right = '0';
        form.style.width = (exclusions[0] ? exclusions[0].right - 16 : 300) + 'px';
        form.style.zIndex = '2';

        // Info text flows around the form
        info.style.width = '100%';
        info.style.flex = 'none';

        var heading = info.querySelector('.phosphor-text');
        var openTo = info.querySelector('.contact-open-to');
        var desc = info.querySelector('.contact-desc');
        var link = info.querySelector('.sidebar-link');
        var actions = info.querySelector('.contact-actions');

        var y = 0;
        var margin = 12;
        // Text-flow only the prose elements; .contact-actions is a flex
        // row of buttons and is laid out as a regular block underneath.
        var els = [heading, openTo, desc, link];
        for (var i = 0; i < els.length; i++) {
            if (!els[i]) continue;
            var result = flowText(els[i], containerWidth, exclusions, { startY: y });
            applyTextFlow(els[i], result, containerWidth);
            y += result.height + margin;
        }
        if (actions) {
            // Position the button row below the flowed prose, clear of the form column.
            actions.style.marginTop = margin + 'px';
        }

        // Ensure inner is tall enough for the form
        var formHeight = form.offsetHeight;
        if (y < formHeight) {
            inner.style.minHeight = formHeight + 'px';
        }

        section.setAttribute('data-pretext', 'active');
    }

    function resetContact() {
        var section = document.querySelector('.contact-section');
        if (!section) return;
        section.removeAttribute('data-pretext');

        var inner = section.querySelector('.contact-inner');
        var form = section.querySelector('.contact-form');
        var info = section.querySelector('.contact-info');
        if (inner) { inner.style.display = ''; inner.style.position = ''; inner.style.minHeight = ''; }
        if (form) {
            form.style.position = '';
            form.style.top = '';
            form.style.right = '';
            form.style.width = '';
            form.style.zIndex = '';
        }
        if (info) { info.style.width = ''; info.style.flex = ''; }
        var actions = info && info.querySelector('.contact-actions');
        if (actions) { actions.style.marginTop = ''; }
    }

    // ========================================
    // Text Flow Application
    // ========================================

    /**
     * Apply the pretext-calculated flow to a DOM element.
     *
     * Uses CSS shape-outside simulation: we set per-line padding/margin
     * via a generated pseudo-element approach, or more simply,
     * use the modern CSS shape-outside with a polygon.
     *
     * For maximum compatibility, we render the text flow by setting
     * a CSS clip-path polygon on a spacer float element.
     */
    function applyTextFlow(el, flowResult, containerWidth) {
        if (!flowResult || !flowResult.lines || !flowResult.lines.length) return;

        // Detect flow type: left inset (x > 0) or right inset (maxWidth < containerWidth)
        var hasLeftFlow = false;
        var hasRightFlow = false;
        var maxRightInset = 0;

        for (var i = 0; i < flowResult.lines.length; i++) {
            if (flowResult.lines[i].x > 0) hasLeftFlow = true;
            var rightInset = containerWidth - flowResult.lines[i].maxWidth - flowResult.lines[i].x;
            if (rightInset > 5) { // 5px threshold to avoid rounding noise
                hasRightFlow = true;
                maxRightInset = Math.max(maxRightInset, rightInset);
            }
        }

        if (!hasLeftFlow && !hasRightFlow) {
            removeFlowFloat(el);
            return;
        }

        var existingFloat = el.querySelector('.pretext-float');
        if (!existingFloat) {
            existingFloat = document.createElement('div');
            existingFloat.className = 'pretext-float';
            existingFloat.setAttribute('aria-hidden', 'true');
            el.insertBefore(existingFloat, el.firstChild);
        }

        var lineHeight = flowResult.lineHeight;
        var totalHeight = flowResult.lines.length * lineHeight;

        if (hasRightFlow && !hasLeftFlow) {
            // Right-side exclusion: float right with shape-outside
            var points = [];
            for (var j = 0; j < flowResult.lines.length; j++) {
                var line = flowResult.lines[j];
                var inset = containerWidth - line.maxWidth - line.x;
                // shape-outside polygon: measured from the float element's box
                // Float is on the right, so 0 = right edge of float, inset = how far left the shape goes
                points.push((maxRightInset - inset) + 'px ' + (j * lineHeight) + 'px');
                points.push((maxRightInset - inset) + 'px ' + ((j + 1) * lineHeight) + 'px');
            }
            // Close polygon
            points.push(maxRightInset + 'px ' + totalHeight + 'px');
            points.push(maxRightInset + 'px 0px');

            existingFloat.style.cssText = [
                'float: right',
                'width: ' + maxRightInset + 'px',
                'height: ' + totalHeight + 'px',
                'shape-outside: polygon(' + points.join(', ') + ')',
                'pointer-events: none',
                'margin: 0',
                'padding: 0'
            ].join('; ');
        } else {
            // Left-side exclusion: float left with shape-outside
            var points2 = [];
            var prevX = 0;
            for (var k = 0; k < flowResult.lines.length; k++) {
                var line2 = flowResult.lines[k];
                if (line2.x !== prevX) {
                    points2.push(line2.x + 'px ' + (k * lineHeight) + 'px');
                }
                points2.push(line2.x + 'px ' + ((k + 1) * lineHeight) + 'px');
                prevX = line2.x;
            }
            points2.push('0px ' + totalHeight + 'px');
            points2.push('0px 0px');

            var maxIndent = 0;
            for (var m = 0; m < flowResult.lines.length; m++) {
                maxIndent = Math.max(maxIndent, flowResult.lines[m].x);
            }

            existingFloat.style.cssText = [
                'float: left',
                'width: ' + maxIndent + 'px',
                'height: ' + totalHeight + 'px',
                'shape-outside: polygon(' + points2.join(', ') + ')',
                'pointer-events: none',
                'margin: 0',
                'padding: 0'
            ].join('; ');
        }
    }

    function removeFlowFloat(el) {
        var existing = el.querySelector('.pretext-float');
        if (existing) existing.remove();
    }

    // ========================================
    // Reset all sections
    // ========================================

    function resetAll() {
        resetHero();
        resetAbout();
        resetContact();

        var cards = document.querySelectorAll('.case-study-card');
        for (var i = 0; i < cards.length; i++) {
            resetCaseStudyCard(cards[i]);
        }

        // Remove all float spacers
        var floats = document.querySelectorAll('.pretext-float');
        for (var j = 0; j < floats.length; j++) {
            floats[j].remove();
        }
    }

    // ========================================
    // Layout orchestration
    // ========================================

    function layoutAll() {
        if (window.innerWidth < MIN_WIDTH) {
            resetAll();
            return;
        }

        if (typeof Pretext === 'undefined') return;

        layoutHero();
        // About + Contact sections keep their native flexbox single-column layout —
        // Pretext absolute positioning would re-introduce the right-rail floats.
        layoutCaseStudies();
    }

    function reflow() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            resetAll();
            layoutAll();
        }, DEBOUNCE_MS);
    }

    // ========================================
    // Public API
    // ========================================

    function init() {
        if (initialized) return;
        if (typeof Pretext === 'undefined') {
            console.warn('[pretext-layout] Pretext library not loaded');
            return;
        }

        initialized = true;

        // Detect current theme
        var theme = document.documentElement.getAttribute('data-theme');
        currentTheme = theme || '80s';

        // Initial layout after a short delay to ensure fonts are loaded
        setTimeout(layoutAll, 200);

        // Reflow on resize
        window.addEventListener('resize', reflow);
    }

    function applyTheme(themeId) {
        currentTheme = themeId;
        if (initialized) {
            resetAll();
            // Short delay for theme CSS/fonts to load
            setTimeout(layoutAll, 150);
        }
    }

    function destroy() {
        resetAll();
        window.removeEventListener('resize', reflow);
        initialized = false;
    }

    window.PretextLayout = {
        init: init,
        applyTheme: applyTheme,
        reflow: reflow,
        destroy: destroy,
        layoutAll: layoutAll,
        resetAll: resetAll
    };
})();
