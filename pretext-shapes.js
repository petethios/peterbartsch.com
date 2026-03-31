/**
 * Pretext Shape Definitions — per-theme exclusion zones
 *
 * Each theme defines shapes that text flows around in each section.
 * A shape is a function(containerWidth, containerHeight) => array of
 * { top, bottom, left, right } rects representing exclusion zones.
 *
 * The pretext-layout module uses these to calculate variable line widths
 * via layoutNextLine().
 */
(function () {
    'use strict';

    // Utility: create an exclusion rect
    function rect(top, right, bottom, left) {
        return { top: top, right: right, bottom: bottom, left: left };
    }

    // Common: portrait shape (top-right corner exclusion)
    function portraitShape(w, h, opts) {
        var size = opts.size || 220;
        var padding = opts.padding || 16;
        var side = opts.side || 'right';
        var totalW = size + padding;
        if (side === 'right') {
            return rect(0, totalW, size + padding, 0);
        }
        return rect(0, 0, size + padding, totalW);
    }

    // Common: inset media shape (left or right embedded element)
    function insetShape(w, h, opts) {
        var insetW = opts.width || 280;
        var insetH = opts.height || 280;
        var padding = opts.padding || 20;
        var side = opts.side || 'left';
        var topOffset = opts.topOffset || 0;
        var totalW = insetW + padding;
        if (side === 'left') {
            return rect(topOffset, 0, topOffset + insetH + padding, totalW);
        }
        return rect(topOffset, totalW, topOffset + insetH + padding, 0);
    }

    // ========================================
    // Theme Shape Definitions
    // ========================================

    var SHAPES = {

        // 80s: Sharp rectangles, pixel-aligned, rigid terminal columns
        '80s': {
            hero: function (w) {
                return [portraitShape(w, 0, { size: 200, padding: 20, side: 'right' })];
            },
            about: function (w) {
                return [insetShape(w, 0, { width: 250, height: 250, padding: 24, side: 'left', topOffset: 0 })];
            },
            caseStudy: function (w, h, index) {
                var side = index % 2 === 0 ? 'left' : 'right';
                return [insetShape(w, 0, { width: 250, height: 250, padding: 20, side: side })];
            },
            contact: function (w) {
                return [insetShape(w, 0, { width: 300, height: 400, padding: 20, side: 'right' })];
            }
        },

        // 90s: Chaotic, irregular shapes — sticker-like exclusions
        '90s': {
            hero: function (w) {
                // Portrait + a random "sticker" decoration
                return [
                    portraitShape(w, 0, { size: 200, padding: 24, side: 'right' }),
                ];
            },
            about: function (w) {
                return [insetShape(w, 0, { width: 260, height: 260, padding: 30, side: 'left', topOffset: 0 })];
            },
            caseStudy: function (w, h, index) {
                var side = index % 2 === 0 ? 'left' : 'right';
                return [insetShape(w, 0, { width: 250, height: 250, padding: 28, side: side })];
            },
            contact: function (w) {
                return [insetShape(w, 0, { width: 300, height: 400, padding: 24, side: 'right' })];
            }
        },

        // 2000s: Smooth rounded rects, generous whitespace — glossy magazine
        '2000s': {
            hero: function (w) {
                return [portraitShape(w, 0, { size: 220, padding: 28, side: 'right' })];
            },
            about: function (w) {
                return [insetShape(w, 0, { width: 270, height: 270, padding: 32, side: 'left', topOffset: 0 })];
            },
            caseStudy: function (w, h, index) {
                var side = index % 2 === 0 ? 'left' : 'right';
                return [insetShape(w, 0, { width: 260, height: 260, padding: 30, side: side })];
            },
            contact: function (w) {
                return [insetShape(w, 0, { width: 300, height: 420, padding: 28, side: 'right' })];
            }
        },

        // 2010s: Circular/blob exclusion zones — organic flow
        '2010s': {
            hero: function (w) {
                // Circular portrait exclusion (larger padding for blob feel)
                return [portraitShape(w, 0, { size: 220, padding: 32, side: 'right' })];
            },
            about: function (w) {
                return [insetShape(w, 0, { width: 270, height: 270, padding: 36, side: 'left', topOffset: 0 })];
            },
            caseStudy: function (w, h, index) {
                var side = index % 2 === 0 ? 'left' : 'right';
                return [insetShape(w, 0, { width: 260, height: 260, padding: 32, side: side })];
            },
            contact: function (w) {
                return [insetShape(w, 0, { width: 300, height: 400, padding: 32, side: 'right' })];
            }
        },

        // 2026: Precise grid-aligned rectangles, monospace grid snapping
        '2026': {
            hero: function (w) {
                return [portraitShape(w, 0, { size: 200, padding: 24, side: 'right' })];
            },
            about: function (w) {
                return [insetShape(w, 0, { width: 250, height: 250, padding: 24, side: 'left', topOffset: 0 })];
            },
            caseStudy: function (w, h, index) {
                var side = index % 2 === 0 ? 'left' : 'right';
                return [insetShape(w, 0, { width: 250, height: 250, padding: 24, side: side })];
            },
            contact: function (w) {
                return [insetShape(w, 0, { width: 300, height: 400, padding: 24, side: 'right' })];
            }
        },

        // Matrix: Dynamic exclusion zones — text "decodes" around shapes
        'matrix': {
            hero: function (w) {
                return [portraitShape(w, 0, { size: 200, padding: 20, side: 'right' })];
            },
            about: function (w) {
                return [insetShape(w, 0, { width: 250, height: 250, padding: 24, side: 'left', topOffset: 0 })];
            },
            caseStudy: function (w, h, index) {
                var side = index % 2 === 0 ? 'left' : 'right';
                return [insetShape(w, 0, { width: 250, height: 250, padding: 20, side: side })];
            },
            contact: function (w) {
                return [insetShape(w, 0, { width: 300, height: 400, padding: 20, side: 'right' })];
            }
        }
    };

    window.PretextShapes = SHAPES;
})();
