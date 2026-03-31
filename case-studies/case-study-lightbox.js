/* Case Study Lightbox - Gallery Image Viewer */
(function () {
    'use strict';

    let overlay, imgEl, closeBtn, prevBtn, nextBtn;
    let images = [];
    let currentIndex = 0;

    function createLightbox() {
        overlay = document.createElement('div');
        overlay.className = 'lightbox-overlay';
        overlay.setAttribute('role', 'dialog');
        overlay.setAttribute('aria-label', 'Image viewer');

        imgEl = document.createElement('img');
        imgEl.className = 'lightbox-img';
        imgEl.alt = '';

        closeBtn = document.createElement('button');
        closeBtn.className = 'lightbox-close';
        closeBtn.innerHTML = '&times;';
        closeBtn.setAttribute('aria-label', 'Close lightbox');

        prevBtn = document.createElement('button');
        prevBtn.className = 'lightbox-prev';
        prevBtn.innerHTML = '&#8249;';
        prevBtn.setAttribute('aria-label', 'Previous image');

        nextBtn = document.createElement('button');
        nextBtn.className = 'lightbox-next';
        nextBtn.innerHTML = '&#8250;';
        nextBtn.setAttribute('aria-label', 'Next image');

        overlay.appendChild(imgEl);
        overlay.appendChild(closeBtn);
        overlay.appendChild(prevBtn);
        overlay.appendChild(nextBtn);
        document.body.appendChild(overlay);

        // Events
        closeBtn.addEventListener('click', closeLightbox);
        prevBtn.addEventListener('click', showPrev);
        nextBtn.addEventListener('click', showNext);

        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) closeLightbox();
        });

        document.addEventListener('keydown', function (e) {
            if (!overlay.classList.contains('lightbox-active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showPrev();
            if (e.key === 'ArrowRight') showNext();
        });
    }

    function openLightbox(index) {
        currentIndex = index;
        updateImage();
        overlay.classList.add('lightbox-active');
        document.body.style.overflow = 'hidden';

        // Show/hide nav arrows
        var showNav = images.length > 1;
        prevBtn.style.display = showNav ? '' : 'none';
        nextBtn.style.display = showNav ? '' : 'none';

        // Analytics
        if (typeof gtag === 'function') {
            gtag('event', 'lightbox_open', {
                event_category: 'gallery',
                event_label: images[currentIndex].src
            });
        }
    }

    function closeLightbox() {
        overlay.classList.remove('lightbox-active');
        document.body.style.overflow = '';
    }

    function showPrev() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
    }

    function showNext() {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
    }

    function updateImage() {
        imgEl.src = images[currentIndex].src;
        imgEl.alt = images[currentIndex].alt || 'Gallery image ' + (currentIndex + 1) + ' of ' + images.length;
    }

    function init() {
        images = Array.from(document.querySelectorAll('.case-study-gallery img'));
        if (images.length === 0) return;

        createLightbox();

        images.forEach(function (img, i) {
            img.addEventListener('click', function () {
                openLightbox(i);
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
