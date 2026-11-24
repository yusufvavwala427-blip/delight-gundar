/**
 * DELIGHT GUNDAR - Premium Vanilla JavaScript
 * Handles: Navbar scroll effects, 5-slide carousel controls, touch swipe,
 * gallery lightbox, WhatsApp contact submission, back-to-top button.
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // -------------------------------------------------------------
    // 1. STICKY NAVBAR SCROLL EFFECT
    // -------------------------------------------------------------
    const mainNav = document.getElementById('mainNav');
    function updateNavbarOnScroll() {
        if (window.scrollY > 40) {
            mainNav.classList.add('scrolled');
        } else {
            mainNav.classList.remove('scrolled');
        }
    }
    window.addEventListener('scroll', updateNavbarOnScroll, { passive: true });
    updateNavbarOnScroll();

    // -------------------------------------------------------------
    // 2. MOBILE NAVBAR AUTO-CLOSE ON LINK CLICK
    // -------------------------------------------------------------
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.getElementById('navbarContent');
    if (navbarCollapse) {
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            });
        });
    }

    // -------------------------------------------------------------
    // 3. FIVE-IMAGE HERO CAROUSEL INITIALIZATION & TOUCH SWIPE
    // -------------------------------------------------------------
    const heroCarouselEl = document.getElementById('heroCarousel');
    if (heroCarouselEl && typeof bootstrap !== 'undefined') {
        const carouselInstance = new bootstrap.Carousel(heroCarouselEl, {
            interval: 5500,
            pause: 'hover',
            ride: 'carousel',
            wrap: true
        });

        // Touch Swipe Support for Mobile/Tablet
        let touchStartX = 0;
        let touchEndX = 0;

        heroCarouselEl.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        heroCarouselEl.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            handleCarouselSwipe();
        }, { passive: true });

        function handleCarouselSwipe() {
            const swipeThreshold = 45;
            if (touchEndX < touchStartX - swipeThreshold) {
                // Swiped Left -> Next Slide
                carouselInstance.next();
            }
            if (touchEndX > touchStartX + swipeThreshold) {
                // Swiped Right -> Prev Slide
                carouselInstance.prev();
            }
        }
    }

    // -------------------------------------------------------------
    // 4. GALLERY LIGHTBOX MODAL FUNCTIONALITY
    // -------------------------------------------------------------
    const galleryItems = document.querySelectorAll('.gallery-grid-item');
    const lightboxModalEl = document.getElementById('galleryLightboxModal');
    const lightboxImg = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxCat = document.getElementById('lightboxCategory');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');

    let currentGalleryIndex = 0;
    const galleryData = [];

    // Harvest gallery item data
    galleryItems.forEach(function (item, index) {
        const imgSrc = item.getAttribute('data-full-img') || item.querySelector('img').getAttribute('src');
        const title = item.getAttribute('data-title') || 'Delight Gundar Gallery';
        const category = item.getAttribute('data-category') || 'Pure Edible Gum';

        galleryData.push({ src: imgSrc, title: title, category: category });

        item.addEventListener('click', function () {
            openLightbox(index);
        });
    });

    let lightboxModal = null;
    if (lightboxModalEl && typeof bootstrap !== 'undefined') {
        lightboxModal = new bootstrap.Modal(lightboxModalEl);
    }

    function openLightbox(index) {
        if (galleryData.length === 0 || !lightboxModal) return;
        currentGalleryIndex = index;
        updateLightboxContent();
        lightboxModal.show();
    }

    function updateLightboxContent() {
        const data = galleryData[currentGalleryIndex];
        if (!data) return;
        lightboxImg.src = data.src;
        lightboxImg.alt = data.title;
        lightboxTitle.textContent = data.title;
        lightboxCat.textContent = data.category;
    }

    function showNextLightboxImage() {
        currentGalleryIndex = (currentGalleryIndex + 1) % galleryData.length;
        updateLightboxContent();
    }

    function showPrevLightboxImage() {
        currentGalleryIndex = (currentGalleryIndex - 1 + galleryData.length) % galleryData.length;
        updateLightboxContent();
    }

    if (lightboxNext) {
        lightboxNext.addEventListener('click', showNextLightboxImage);
    }
    if (lightboxPrev) {
        lightboxPrev.addEventListener('click', showPrevLightboxImage);
    }

    // Keyboard navigation for lightbox
    document.addEventListener('keydown', function (e) {
        if (!lightboxModalEl || !lightboxModalEl.classList.contains('show')) return;
        if (e.key === 'ArrowRight') {
            showNextLightboxImage();
        } else if (e.key === 'ArrowLeft') {
            showPrevLightboxImage();
        }
    });

    // -------------------------------------------------------------
    // 5. BACK-TO-TOP BUTTON VISIBILITY & SCROLL
    // -------------------------------------------------------------
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 350) {
                backToTopBtn.style.opacity = '1';
                backToTopBtn.style.visibility = 'visible';
            } else {
                backToTopBtn.style.opacity = '0.6';
            }
        }, { passive: true });

        backToTopBtn.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // -------------------------------------------------------------
    // 6. CONTACT FORM DIRECT WHATSAPP INTEGRATION
    // -------------------------------------------------------------
    const contactForm = document.getElementById('inquiryForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = (document.getElementById('formName')?.value || '').trim();
            const phone = (document.getElementById('formPhone')?.value || '').trim();
            const product = (document.getElementById('formProduct')?.value || '').trim();
            const message = (document.getElementById('formMessage')?.value || '').trim();
            const targetPhone = contactForm.getAttribute('data-whatsapp-number') || '919876543210';

            if (!name || !message) {
                alert('Please provide your name and message to continue.');
                return;
            }

            // Construct clean formatted WhatsApp message
            let waText = `*Delight Gundar - Website Inquiry*\n\n`;
            waText += `*Name:* ${name}\n`;
            if (phone) waText += `*Phone:* ${phone}\n`;
            if (product) waText += `*Interested In:* ${product}\n`;
            waText += `*Message:* ${message}\n\n`;
            waText += `_Sent via Delight Gundar website inquiry form._`;

            const waUrl = `https://wa.me/${targetPhone}?text=${encodeURIComponent(waText)}`;

            // Open in new window/tab safely
            window.open(waUrl, '_blank', 'noopener,noreferrer');
        });
    }

    // -------------------------------------------------------------
    // 7. PRODUCT BENEFITS HOVER & TAP TOGGLE
    // -------------------------------------------------------------
    const toggleButtons = document.querySelectorAll('.btn-toggle-overlay');
    const closeButtons = document.querySelectorAll('.btn-close-overlay');

    toggleButtons.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            const card = btn.closest('.product-card');
            const overlay = card ? card.querySelector('.product-hover-overlay') : null;
            if (overlay) {
                overlay.classList.toggle('active');
            }
        });
    });

    closeButtons.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            const overlay = btn.closest('.product-hover-overlay');
            if (overlay) {
                overlay.classList.remove('active');
            }
        });
    });

    // Tap on image container on touch screens to open benefits
    const productContainers = document.querySelectorAll('.product-image-container');
    productContainers.forEach(function (container) {
        container.addEventListener('click', function (e) {
            // Don't trigger if clicked on close button or scroll inside
            if (e.target.closest('.btn-close-overlay') || e.target.closest('.hover-benefits-scroll')) {
                return;
            }
            const overlay = container.querySelector('.product-hover-overlay');
            if (overlay && !overlay.classList.contains('active')) {
                overlay.classList.add('active');
            }
        });
    });

    // Close overlays when clicking outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.product-card')) {
            document.querySelectorAll('.product-hover-overlay.active').forEach(function (ov) {
                ov.classList.remove('active');
            });
        }
    });

});
