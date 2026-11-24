<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
$is_home = (basename($_SERVER['PHP_SELF']) === 'index.php' || basename($_SERVER['PHP_SELF']) === '');
$home_prefix = $is_home ? '' : 'index.php';
?>

    <!-- Premium Footer -->
    <footer class="site-footer pt-5 pb-3">
        <div class="footer-top pb-5">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    
                    <!-- Column 1: Brand Info -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-brand mb-4">
                            <a href="<?= e($home_prefix) ?>#top" class="d-inline-block mb-3">
                                <img src="<?= e(SITE_LOGO_FOOTER) ?>" alt="<?= e(SITE_NAME) ?> Logo" class="footer-logo-img">
                            </a>
                            <p class="footer-desc text-muted-cream">
                                <?= e(SITE_DESCRIPTION) ?>
                            </p>
                            <div class="footer-badges d-flex gap-2 flex-wrap mt-3">
                                <span class="badge-pill-gold"><i class="bi bi-patch-check-fill me-1"></i> 100% Pure</span>
                                <span class="badge-pill-gold"><i class="bi bi-shield-lock-fill me-1"></i> Quality Assured</span>
                                <span class="badge-pill-gold"><i class="bi bi-sun-fill me-1"></i> Sun-Dried</span>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-2 col-md-6 col-6">
                        <h5 class="footer-title">Quick Links</h5>
                        <ul class="footer-links list-unstyled">
                            <li><a href="<?= e($home_prefix) ?>#top"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
                            <li><a href="about.php"><i class="bi bi-chevron-right me-1"></i> About Us</a></li>
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Our Products</a></li>
                            <li><a href="<?= e($home_prefix) ?>#why-us"><i class="bi bi-chevron-right me-1"></i> Why Choose Us</a></li>
                            <li><a href="<?= e($home_prefix) ?>#Reviews"><i class="bi bi-chevron-right me-1"></i> Reviews </a></li>
                            <li><a href="contact.php"><i class="bi bi-chevron-right me-1"></i> Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Product Highlights -->
                    <div class="col-lg-3 col-md-6 col-6">
                        <h5 class="footer-title">Our Selections</h5>
                        <ul class="footer-links list-unstyled">
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Royal Amber Crystals</a></li>
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Pure Babool Edible Gum</a></li>
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Ayurvedic Special Gond</a></li>
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Fine Crystal Granules</a></li>
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Festive &amp; Gifting Packs</a></li>
                            <li><a href="<?= e($home_prefix) ?>#products"><i class="bi bi-chevron-right me-1"></i> Wholesale Supply</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact & Connect -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="footer-title">Direct Connect</h5>
                        <p class="small text-muted-cream mb-3">Connect directly with the brand owner for authentic guidance, product inquiries, and wholesale orders.</p>
                        
                        <div class="contact-card-mini mb-3">
                            <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="footer-direct-btn whatsapp-btn mb-2">
                                <i class="bi bi-whatsapp fs-5"></i>
                                <div>
                                    <div class="btn-subtext">Chat on WhatsApp</div>
                                    <div class="btn-maintext"><?= e(WHATSAPP_DISPLAY_NUMBER) ?></div>
                                </div>
                            </a>
                            <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener noreferrer" class="footer-direct-btn instagram-btn">
                                <i class="bi bi-instagram fs-5"></i>
                                <div>
                                    <div class="btn-subtext">Follow on Instagram</div>
                                    <div class="btn-maintext"><?= e(INSTAGRAM_HANDLE) ?></div>
                                </div>
                            </a>
                        </div>

                        <div class="footer-contact-details small text-muted-cream">
                            <div class="mb-1"><i class="bi bi-geo-alt-fill text-gold me-2"></i><?= e(BUSINESS_ADDRESS) ?></div>
                            <div><i class="bi bi-clock-fill text-gold me-2"></i><?= e(BUSINESS_HOURS) ?></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Gold Divider -->
        <div class="footer-divider-line"></div>

        <!-- Footer Bottom: Copyright & Legal -->
        <div class="footer-bottom pt-4">
            <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
                <p class="mb-0 text-muted-cream small">
                    &copy; <?= date('Y') ?> <strong><?= e(SITE_NAME) ?></strong>. All rights reserved. Premium Traditional Edible Gum.
                </p>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted-cream small">Crafted with Purity &amp; Tradition</span>
                    <a href="#top" class="back-to-top-btn" id="backToTopBtn" aria-label="Back to Top">
                        <i class="bi bi-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Direct Button -->
    <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp-btn" id="floatingWhatsapp" aria-label="Chat directly on WhatsApp" title="Chat directly with Delight Gundar">
        <span class="whatsapp-tooltip">Chat with us on WhatsApp!</span>
        <div class="whatsapp-icon-wrapper">
            <i class="bi bi-whatsapp"></i>
        </div>
        <span class="whatsapp-pulse"></span>
    </a>

    <!-- Universal Gallery Lightbox Modal -->
    <div class="modal fade lightbox-modal" id="galleryLightboxModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-body p-0 position-relative text-center">
                    <button type="button" class="btn-lightbox-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                    <div class="lightbox-img-container">
                        <img src="" alt="Enlarged Gallery Image" id="lightboxImage" class="img-fluid rounded-3">
                    </div>
                    <div class="lightbox-caption py-3">
                        <h5 id="lightboxTitle" class="text-gold mb-1"></h5>
                        <p id="lightboxCategory" class="text-cream small mb-0"></p>
                    </div>
                    <div class="lightbox-nav-buttons">
                        <button class="lightbox-nav-btn prev" id="lightboxPrev" aria-label="Previous image"><i class="bi bi-chevron-left"></i></button>
                        <button class="lightbox-nav-btn next" id="lightboxNext" aria-label="Next image"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Main Script -->
    <script src="assets/js/script.js"></script>
</body>
</html>
