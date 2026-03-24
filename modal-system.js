/**
 * Modern Modal System
 * Data-driven modal rendering and management
 */
(function() {
    'use strict';

    // Configuration
    const CONFIG = {
        animationDuration: 300,
        escapeToClose: true,
        clickOutsideToClose: true
    };

    // State
    let activeModal = null;
    let currentCarouselIndex = 0;
    let modalContainer = null;

    /**
     * Initialize the modal system
     */
    function init() {
        // Create modal container if it doesn't exist
        modalContainer = document.getElementById('modal-container');
        if (!modalContainer) {
            modalContainer = document.createElement('div');
            modalContainer.id = 'modal-container';
            document.body.appendChild(modalContainer);
        }

        // Bind global event listeners
        bindGlobalEvents();

        // Bind trigger clicks
        bindTriggers();
    }

    /**
     * Bind global keyboard and click events
     */
    function bindGlobalEvents() {
        // Escape key to close
        if (CONFIG.escapeToClose) {
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && activeModal) {
                    closeModal();
                }
            });
        }

        // Click outside to close
        if (CONFIG.clickOutsideToClose) {
            document.addEventListener('click', (e) => {
                if (e.target.classList.contains('modal') && activeModal) {
                    closeModal();
                }
            });
        }

        // Arrow keys for carousel navigation
        document.addEventListener('keydown', (e) => {
            if (!activeModal) return;
            if (e.key === 'ArrowLeft') {
                navigateCarousel(-1);
            } else if (e.key === 'ArrowRight') {
                navigateCarousel(1);
            }
        });
    }

    /**
     * Bind click handlers to modal triggers
     */
    function bindTriggers() {
        // Find all elements with data-modal-id or legacy openModal IDs
        document.querySelectorAll('[data-modal-id]').forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const modalId = parseInt(trigger.dataset.modalId, 10);
                openModal(modalId);
            });
        });

        // Support legacy openModal# IDs
        for (let i = 1; i <= 16; i++) {
            const trigger = document.getElementById(`openModal${i}`);
            if (trigger) {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    openModal(i);
                });
            }
        }

        // Support "View More" links with onclick
        document.querySelectorAll('.view-more').forEach(link => {
            const onclickAttr = link.getAttribute('onclick');
            if (onclickAttr && onclickAttr.includes('openModal')) {
                const match = onclickAttr.match(/openModal(\d+)/);
                if (match) {
                    const modalId = parseInt(match[1], 10);
                    link.removeAttribute('onclick');
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        openModal(modalId);
                    });
                }
            }
        });
    }

    /**
     * Get portfolio item by ID
     */
    function getPortfolioItem(id) {
        if (typeof window.portfolioData === 'undefined') {
            console.error('portfolioData not loaded');
            return null;
        }
        return window.portfolioData.find(item => item.id === id);
    }

    /**
     * Helper: create element with attributes and text
     */
    function el(tag, attrs, textContent) {
        var node = document.createElement(tag);
        if (attrs) {
            for (var k in attrs) {
                if (k === 'dataset') {
                    for (var d in attrs[k]) node.dataset[d] = attrs[k][d];
                } else {
                    node.setAttribute(k, attrs[k]);
                }
            }
        }
        if (textContent != null) node.textContent = textContent;
        return node;
    }

    /**
     * Build modal DOM from data (no innerHTML — XSS-safe)
     */
    function buildModal(item) {
        var hasCarousel = item.images && item.images.length > 0;

        var modal = el('div', { id: 'modal-' + item.id, class: 'modal', role: 'dialog', 'aria-modal': 'true', 'aria-labelledby': 'modal-' + item.id + '-title' });
        var content = el('div', { class: 'modal-content' });
        modal.appendChild(content);

        var closeBtn = el('span', { class: 'close', 'aria-label': 'Close modal', dataset: { close: '' } });
        closeBtn.textContent = '\u2297';
        content.appendChild(closeBtn);

        content.appendChild(el('h2', { id: 'modal-' + item.id + '-title' }, item.company));
        content.appendChild(el('p', null, item.role));
        content.appendChild(el('p', null, item.dates));
        content.appendChild(el('p', null, item.description));

        if (item.bullets && item.bullets.length > 0) {
            var ul = el('ul');
            item.bullets.forEach(function(b) {
                ul.appendChild(el('li', null, b));
            });
            content.appendChild(ul);
        }

        if (hasCarousel) {
            var carousel = el('div', { class: 'carousel', dataset: { carousel: '' } });
            item.images.forEach(function(imgSrc, i) {
                var img = el('img', {
                    src: imgSrc,
                    alt: item.company + ' image ' + (i + 1),
                    class: i === 0 ? 'active' : '',
                    loading: 'lazy'
                });
                carousel.appendChild(img);
            });
            content.appendChild(carousel);

            var nav = el('div', { class: 'carousel-nav' });
            nav.appendChild(el('button', { class: 'prevBtn', 'aria-label': 'Previous image', dataset: { carouselPrev: '' } }, 'BACK'));
            nav.appendChild(el('span', { class: 'carousel-counter', dataset: { carouselCounter: '' } }, '1 / ' + item.images.length));
            nav.appendChild(el('button', { class: 'nextBtn', 'aria-label': 'Next image', dataset: { carouselNext: '' } }, 'NEXT'));
            content.appendChild(nav);
        }

        return modal;
    }

    /**
     * Open modal by ID
     */
    function openModal(id) {
        const item = getPortfolioItem(id);
        if (!item) {
            console.error(`Portfolio item ${id} not found`);
            return;
        }

        // Close any existing modal
        if (activeModal) {
            closeModal(false);
        }

        // Build and insert modal (DOM-based, no innerHTML)
        var modal = buildModal(item);
        modalContainer.textContent = '';
        modalContainer.appendChild(modal);

        if (!modal) return;

        // Store reference
        activeModal = modal;
        currentCarouselIndex = 0;

        // Bind modal-specific events
        bindModalEvents(modal, item);

        // Show modal with animation
        requestAnimationFrame(() => {
            modal.style.display = 'block';
            modal.classList.add('modal-open');
            document.body.style.overflow = 'hidden';
        });

        // Focus trap - focus the close button
        const closeBtn = modal.querySelector('[data-close]');
        if (closeBtn) {
            closeBtn.focus();
        }
    }

    /**
     * Bind events specific to the open modal
     */
    function bindModalEvents(modal, item) {
        // Close button
        const closeBtn = modal.querySelector('[data-close]');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => closeModal());
            closeBtn.addEventListener('touchend', (e) => {
                e.preventDefault();
                closeModal();
            });
        }

        // Carousel navigation
        const prevBtn = modal.querySelector('[data-carousel-prev]');
        const nextBtn = modal.querySelector('[data-carousel-next]');

        if (prevBtn) {
            prevBtn.addEventListener('click', () => navigateCarousel(-1));
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', () => navigateCarousel(1));
        }

        // Touch swipe for carousel
        const carousel = modal.querySelector('[data-carousel]');
        if (carousel && item.images && item.images.length > 1) {
            let touchStartX = 0;
            let touchEndX = 0;

            carousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            carousel.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        navigateCarousel(1);
                    } else {
                        navigateCarousel(-1);
                    }
                }
            }, { passive: true });
        }
    }

    /**
     * Navigate carousel
     */
    function navigateCarousel(direction) {
        if (!activeModal) return;

        const images = activeModal.querySelectorAll('[data-carousel] img');
        if (!images.length) return;

        // Remove active from current
        images[currentCarouselIndex].classList.remove('active');

        // Update index
        currentCarouselIndex += direction;
        if (currentCarouselIndex < 0) currentCarouselIndex = images.length - 1;
        if (currentCarouselIndex >= images.length) currentCarouselIndex = 0;

        // Add active to new
        images[currentCarouselIndex].classList.add('active');

        // Update counter
        const counter = activeModal.querySelector('[data-carousel-counter]');
        if (counter) {
            counter.textContent = `${currentCarouselIndex + 1} / ${images.length}`;
        }
    }

    /**
     * Close modal
     */
    function closeModal(animate = true) {
        if (!activeModal) return;

        const modal = activeModal;

        if (animate) {
            modal.classList.remove('modal-open');
            modal.classList.add('modal-closing');

            setTimeout(() => {
                modal.style.display = 'none';
                modalContainer.textContent = '';
                document.body.style.overflow = '';
            }, CONFIG.animationDuration);
        } else {
            modal.style.display = 'none';
            modalContainer.textContent = '';
            document.body.style.overflow = '';
        }

        activeModal = null;
        currentCarouselIndex = 0;
    }

    // Public API
    window.ModalSystem = {
        init,
        open: openModal,
        close: closeModal
    };

    // Auto-initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
