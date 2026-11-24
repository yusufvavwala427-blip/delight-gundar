<?php
/**
 * DELIGHT GUNDAR - About Us Page
 * Dedicated page detailing brand history, purity process, nutritional benefits, and traditional heritage.
 */

require_once __DIR__ . '/includes/config.php';

$page_title = 'About Us | ' . SITE_NAME . ' – Heritage, Purity & Tradition';
$meta_desc = 'Learn about Delight Gundar: our generational commitment to pure, handpicked edible gum (Gond), sustainable tree harvesting, and authentic Indian culinary heritage.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Page Inner Banner -->
<section class="py-5 bg-dark-brown text-center position-relative" style="background: var(--brown-gradient); border-bottom: 2px solid var(--gold-primary);">
    <div class="container py-4">
        <span class="section-tag" style="background: rgba(232, 212, 138, 0.15); color: var(--gold-light); border-color: rgba(232, 212, 138, 0.4);">
            <i class="bi bi-book"></i> Our Heritage
        </span>
        <h1 class="display-5 fw-bold text-white mb-2">About Delight Gundar</h1>
        <p class="lead text-gold-light mb-0">Generations of Uncompromised Purity &amp; Traditional Care</p>
    </div>
</section>

<!-- Main About Content Section -->
<section class="py-5">
    <div class="container py-4">
        
        <!-- Story Row -->
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6">
                <div class="about-image-frame shadow-lg">
                    <img src="assets/images/products/product2.jpg" alt="Delight Gundar Harvest" class="img-fluid rounded-3">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-tag"><i class="bi bi-clock-history"></i> The Brand Story</span>
                <h2 class="section-title">Rooted in Authenticity &amp; Culinary Reverence</h2>
                <div class="gold-separator justify-content-start ms-0">
                    <span class="sep-line"></span><span class="sep-diamond"></span><span class="sep-line"></span>
                </div>
                <p>
                    <strong>Delight Gundar</strong> was born out of a profound passion for authentic Indian culinary ingredients. For generations, edible gum (known as <em>Gundar</em> in Gujarati and <em>Gond</em> across India) has been celebrated as nature's ultimate winter superfood—a staple in festive delicacies like Gond Pak, Gond ke Laddu, and ayurvedic revitalizing preparations.
                </p>
                <p>
                    Yet, in modern markets, finding 100% natural, unpolished, and thoroughly clean Gundar had become a rare privilege. Delight Gundar was founded to bridge this gap: connecting families, sweet artisans, and ayurvedic connoisseurs with pristine, handpicked edible gum directly from responsible, natural sources.
                </p>
                <p>
                    We believe true taste begins with honesty. That is why our products contain zero artificial coatings, chemical bleaches, or foreign matter—just pure, amber-gold crystals that blossom into delightful crunchy pearls when cooked in pure desi ghee.
                </p>
            </div>
        </div>

        <!-- The Science & Tradition of Gundar -->
        <div class="p-5 rounded-4 mb-5" style="background: var(--cream-surface); border: 1px solid rgba(201, 162, 39, 0.3);">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <span class="section-tag"><i class="bi bi-heart-pulse"></i> Nutritional Heritage</span>
                    <h3 class="fs-2 fw-bold text-dark mb-3">Why Gundar Has Been Treasured for Centuries</h3>
                    <p>
                        Harvested from the sap of sacred acacia and babool trees, edible gum is rich in soluble dietary fiber and natural polysaccharides. In Ayurveda, it is honored for:
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex align-items-start gap-2">
                            <i class="bi bi-check-circle-fill text-gold mt-1"></i>
                            <div><strong>Joint Lubrication &amp; Bone Strength:</strong> Known traditionally to nourish connective tissue and ease joint stiffness during cold winter months.</div>
                        </li>
                        <li class="mb-2 d-flex align-items-start gap-2">
                            <i class="bi bi-check-circle-fill text-gold mt-1"></i>
                            <div><strong>Postpartum Recovery:</strong> A time-tested dietary staple given to new mothers in nutritional laddus to restore stamina and vitality.</div>
                        </li>
                        <li class="mb-2 d-flex align-items-start gap-2">
                            <i class="bi bi-check-circle-fill text-gold mt-1"></i>
                            <div><strong>Digestive Warmth &amp; Energy:</strong> Provides sustained thermal comfort and deep nutritional fuel for the body.</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="p-4 rounded-3 shadow-sm bg-white border" style="border-color: rgba(201, 162, 39, 0.4) !important;">
                        <i class="bi bi-gem text-gold" style="font-size: 3.5rem;"></i>
                        <h4 class="mt-3 text-dark fw-bold">100% Edible Gum</h4>
                        <p class="text-muted small mb-0">Grade A+ Sun-Dried Crystals with Maximum Swell &amp; Crispness</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quality & Harvesting Process -->
        <div class="text-center mb-5">
            <span class="section-tag"><i class="bi bi-gear-wide-connected"></i> Our Meticulous Process</span>
            <h2 class="section-title">From Tree Sap to Golden Crystals</h2>
            <div class="gold-separator">
                <span class="sep-line"></span><span class="sep-diamond"></span><span class="sep-line"></span>
            </div>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-3 col-sm-6">
                <div class="p-4 rounded-3 h-100 bg-white border" style="border-color: rgba(201, 162, 39, 0.25) !important;">
                    <div class="fs-1 text-gold mb-3"><i class="bi bi-tree"></i></div>
                    <h5 class="fw-bold text-dark">1. Sustainable Sap Tapping</h5>
                    <p class="small text-muted mb-0">Responsibly tapped without harming trees, allowing natural exuding of golden resin.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="p-4 rounded-3 h-100 bg-white border" style="border-color: rgba(201, 162, 39, 0.25) !important;">
                    <div class="fs-1 text-gold mb-3"><i class="bi bi-brightness-high"></i></div>
                    <h5 class="fw-bold text-dark">2. Pure Sun-Drying</h5>
                    <p class="small text-muted mb-0">Cured under the open sun on hygienic drying beds to stabilize moisture naturally.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="p-4 rounded-3 h-100 bg-white border" style="border-color: rgba(201, 162, 39, 0.25) !important;">
                    <div class="fs-1 text-gold mb-3"><i class="bi bi-hand-index-thumb"></i></div>
                    <h5 class="fw-bold text-dark">3. Manual Hand-Sorting</h5>
                    <p class="small text-muted mb-0">Meticulously sorted by eye and hand to remove any bark, sand, or dark discolored pieces.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="p-4 rounded-3 h-100 bg-white border" style="border-color: rgba(201, 162, 39, 0.25) !important;">
                    <div class="fs-1 text-gold mb-3"><i class="bi bi-box-seam"></i></div>
                    <h5 class="fw-bold text-dark">4. Sealed Protection</h5>
                    <p class="small text-muted mb-0">Packed in moisture-locked containers ready to deliver pristine crispness to your kitchen.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="mt-5 p-5 rounded-4 text-center text-white" style="background: var(--brown-gradient); border: 2px solid var(--gold-primary);">
            <h3 class="display-6 fw-bold text-gold-light mb-3">Experience True Purity Today</h3>
            <p class="text-muted-cream max-w-600 mx-auto mb-4" style="max-width: 650px;">
                Have questions about our grades or want advice on selecting the right Gundar for your recipes? Connect directly with our founder on WhatsApp.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold py-3 px-4">
                    <i class="bi bi-whatsapp fs-5"></i>
                    <span>Chat Directly on WhatsApp</span>
                </a>
                <a href="contact.php" class="btn btn-gold-outline py-3 px-4">
                    <i class="bi bi-envelope"></i>
                    <span>Contact Information</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
