<?php
/**
 * DELIGHT GUNDAR - Contact Us Page
 * Direct touchpoints with owner via WhatsApp, Instagram, email, inquiry form, and Google Maps.
 */

require_once __DIR__ . '/includes/config.php';

$page_title = 'Contact Us | ' . SITE_NAME . ' – Direct WhatsApp & Business Information';
$meta_desc = 'Get in touch with Delight Gundar. Reach out directly on WhatsApp or Instagram for product inquiries, wholesale orders, and traditional recipe consultations.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Inner Banner -->
<section class="py-5 bg-dark-brown text-center position-relative" style="background: var(--brown-gradient); border-bottom: 2px solid var(--gold-primary);">
    <div class="container py-4">
        <span class="section-tag" style="background: rgba(232, 212, 138, 0.15); color: var(--gold-light); border-color: rgba(232, 212, 138, 0.4);">
            <i class="bi bi-chat-dots"></i> Get in Touch
        </span>
        <h1 class="display-5 fw-bold text-white mb-2">Contact Delight Gundar</h1>
        <p class="lead text-gold-light mb-0">Direct Connect with the Owner on WhatsApp &amp; Instagram</p>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-5">
    <div class="container py-4">
        
        <div class="row g-5">
            <!-- Left Column: Business Details -->
            <div class="col-lg-5">
                <div class="contact-info-card h-100">
                    <h3 class="fs-4 fw-bold mb-4 text-dark">Business Information</h3>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Brand Name</h6>
                            <p><?= e(SITE_NAME) ?></p>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Owner's WhatsApp</h6>
                            <p>
                                <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="text-gold-dark fw-bold">
                                    <?= e(WHATSAPP_DISPLAY_NUMBER) ?>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Instagram Profile</h6>
                            <p>
                                <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener noreferrer" class="text-gold-dark fw-bold">
                                    <?= e(INSTAGRAM_HANDLE) ?>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Registered Address</h6>
                            <p><?= e(BUSINESS_ADDRESS) ?></p>
                        </div>
                    </div>

                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Customer Care Hours</h6>
                            <p><?= e(BUSINESS_HOURS) ?></p>
                        </div>
                    </div>

                    <div class="contact-direct-actions mt-4">
                        <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="contact-btn-social whatsapp">
                            <i class="bi bi-whatsapp fs-5"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener noreferrer" class="contact-btn-social instagram">
                            <i class="bi bi-instagram fs-5"></i>
                            <span>View Instagram</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Inquiry Form -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 class="fs-4 fw-bold mb-2 text-dark">Send an Instant Message</h3>
                    <p class="small text-muted mb-4">
                        Have a question regarding product availability, minimum wholesale quantities, or home shipping? Complete this simple form and it will connect directly to our WhatsApp with your pre-formatted message.
                    </p>

                    <form id="inquiryForm" data-whatsapp-number="<?= e(WHATSAPP_NUMBER) ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="formName" class="form-label-gold">Your Name *</label>
                                <input type="text" class="form-control form-control-gold" id="formName" placeholder="e.g. Anand Sharma" required>
                            </div>
                            <div class="col-md-6">
                                <label for="formPhone" class="form-label-gold">Phone / Mobile (Optional)</label>
                                <input type="tel" class="form-control form-control-gold" id="formPhone" placeholder="e.g. +91 98765 00000">
                            </div>
                            <div class="col-12">
                                <label for="formProduct" class="form-label-gold">Select Category / Purpose</label>
                                <select class="form-select form-control-gold" id="formProduct">
                                    <option value="General Inquiry">General Product Inquiry</option>
                                    <option value="Royal Golden Gundar (Grade A+)">Royal Golden Gundar (Grade A+)</option>
                                    <option value="Select Babool Gundar">Select Babool Gundar</option>
                                    <option value="Ayurvedic Wellness Gond">Ayurvedic Wellness Gond</option>
                                    <option value="Fine Crystal Granules">Fine Crystal Granules</option>
                                    <option value="Festive Gifting Packs">Festive Gifting Packs</option>
                                    <option value="Bulk / Wholesale Requirement">Commercial Wholesale / B2B Supply</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formMessage" class="form-label-gold">Your Inquiry or Message *</label>
                                <textarea class="form-control form-control-gold" id="formMessage" rows="5" placeholder="Please share your questions, desired quantity, or city..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-gold w-100 py-3">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                    <span>Send Message via WhatsApp</span>
                                </button>
                                <p class="text-center small text-muted mt-2 mb-0">
                                    <i class="bi bi-shield-check text-gold me-1"></i> Quick reply directly from Delight Gundar team.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
