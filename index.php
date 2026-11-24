<?php
/**
 * DELIGHT GUNDAR - Premium Informational Website Homepage
 * Technologies: PHP 8+, HTML5, CSS3, Vanilla JS, Bootstrap 5
 */

require_once __DIR__ . '/includes/config.php';

$page_title = SITE_NAME . ' | ' . SITE_TAGLINE;
$meta_desc = SITE_DESCRIPTION;

require_once __DIR__ . '/includes/header.php';
?>

<!-- ========================================================================
     HERO SECTION - FIVE-IMAGE SLIDER
     ======================================================================== -->
<section class="hero-slider-section" id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="5500" data-bs-pause="hover">
        
        <!-- Five Navigation Indicators -->
        <div class="hero-indicators">
            <?php foreach ($hero_slides as $index => $slide): ?>
                <button type="button" 
                        data-bs-target="#heroCarousel" 
                        data-bs-slide-to="<?= $index ?>" 
                        class="<?= ($index === 0) ? 'active' : '' ?>" 
                        aria-current="<?= ($index === 0) ? 'true' : 'false' ?>" 
                        aria-label="Slide <?= $index + 1 ?>">
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Carousel Slides -->
        <div class="carousel-inner">
            <?php foreach ($hero_slides as $index => $slide): ?>
                <div class="carousel-item hero-slide-item <?= ($index === 0) ? 'active' : '' ?>">
                    <img src="<?= e($slide['image']) ?>" alt="<?= e($slide['title']) ?>" class="hero-slide-img">
                    <div class="hero-overlay">
                        <div class="container">
                            <div class="hero-content mx-auto">
                                <div class="hero-badge">
                                    <i class="bi bi-patch-check-fill text-gold"></i>
                                    <span><?= e($slide['badge']) ?></span>
                                </div>
                                <h1 class="hero-title">
                                    WELCOME TO <span class="title-accent">DELIGHT GUNDAR</span>
                                </h1>
                                <p class="hero-subtitle">
                                    <?= e($slide['subtitle']) ?>
                                </p>
                                <p class="hero-description">
                                    <?= e($slide['desc']) ?>
                                </p>
                                <div class="hero-buttons">
                                    <a href="#about" class="btn btn-gold">
                                        <span>Explore More</span>
                                        <i class="bi bi-arrow-down-circle"></i>
                                    </a>
                                    <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold-outline">
                                        <i class="bi bi-whatsapp"></i>
                                        <span>Inquire on WhatsApp</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Manual Previous / Next Arrows -->
        <button class="hero-nav-arrow prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous Slide">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button class="hero-nav-arrow next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next Slide">
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>
</section>

<!-- ========================================================================
     ABOUT US SECTION (Two-Column Layout)
     ======================================================================== -->
<section class="about-section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Premium Brand Imagery with Golden Frame -->
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <div class="about-image-frame">
                        <img src="assets/images/products/product1.jpg" alt="Delight Gundar - Premium Quality Edible Gum Crystals">
                    </div>
                    <!-- Floating Gold Quality Badge -->
                    <div class="about-floating-badge">
                        <i class="bi bi-award-fill badge-icon"></i>
                        <div>
                            <h4 class="badge-title">100% Pure &amp; Natural</h4>
                            <p class="badge-sub">Heritage Quality Guaranteed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Brand Introduction & Story -->
            <div class="col-lg-6">
                <div class="about-content ps-lg-3">
                    <span class="section-tag">
                        <i class="bi bi-gem"></i> About Delight Gundar
                    </span>
                    <h2 class="section-title">
                        Tradition, Purity &amp; Supreme Taste in Every Crystal
                    </h2>
                    
                    <div class="gold-separator justify-content-start ms-0">
                        <span class="sep-line"></span>
                        <span class="sep-diamond"></span>
                        <span class="sep-line"></span>
                    </div>

                    <p class="lead text-dark fw-medium mb-3">
                        Welcome to <strong>DELIGHT GUNDAR</strong>, your trusted destination for genuine, unadulterated edible gum (Gond) selected with utmost care and generational expertise.
                    </p>

                    <p>
                        In Indian culinary and wellness traditions, Gundar has held an exalted place for centuries—treasured in nutritious winter recipes like Gond Pak, fragrant Gond Laddu, and restorative ayurvedic tonics. At Delight Gundar, we honor this heritage by sourcing only pure, sun-dried gum crystals directly from nature.
                    </p>

                    <p>
                        Every batch is thoroughly cleaned, sorted, and graded to ensure clear amber translucency, unmatched crispness when fried in pure ghee, and optimal nutritional potency with zero chemicals or artificial polishing.
                    </p>

                    <!-- Feature Highlights List -->
                    <div class="about-features mt-4">
                        <div class="about-feature-item">
                            <div class="about-feature-icon">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fs-6 fw-bold text-dark">Sun-Dried &amp; Chemical Free</h5>
                                <p class="small text-muted mb-0">Naturally harvested from healthy trees and dried under natural sunlight without synthetic additives.</p>
                            </div>
                        </div>

                        <div class="about-feature-item">
                            <div class="about-feature-icon">
                                <i class="bi bi-fire"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fs-6 fw-bold text-dark">Exceptional Puffing Quality</h5>
                                <p class="small text-muted mb-0">Puffs effortlessly into light, crispy, melt-in-the-mouth golden popcorn-like crystals in warm ghee.</p>
                            </div>
                        </div>

                        <div class="about-feature-item">
                            <div class="about-feature-icon">
                                <i class="bi bi-chat-heart"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fs-6 fw-bold text-dark">Direct Owner Connect</h5>
                                <p class="small text-muted mb-0">Speak directly with our owner on WhatsApp for custom grades, cooking tips, or wholesale requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-2 d-flex gap-3 flex-wrap">
                        <a href="about.php" class="btn btn-gold">
                            <span>Read Full Story</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold-outline text-dark-brown" style="border-color: var(--dark-brown); color: var(--dark-brown) !important;">
                            <i class="bi bi-whatsapp"></i>
                            <span>Chat with Owner</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================================
     OUR PRODUCTS SECTION (Informational Showcase)
     ======================================================================== -->
<section class="products-section" id="products">
    <div class="container">
        
        <!-- Section Header -->
        <div class="section-header text-center">
            <span class="section-tag">
                <i class="bi bi-stars"></i> Curated Selections
            </span>
            <h2 class="section-title">Our Signature Products &amp; Wellness Profile</h2>
            
            <div class="gold-separator">
                <span class="sep-line"></span>
                <span class="sep-diamond"></span>
                <span class="sep-line"></span>
            </div>

            <p class="section-subtitle">
                Discover our pure, handpicked edible gum crystals. <strong>Hover or tap over any product image</strong> to explore the 5 time-honored traditional health, digestive, and vitality benefits.
            </p>
        </div>

        <!-- Product Grid (Exclusive 2-Product Showcase) -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($products as $item): ?>
                <div class="col-lg-6 col-md-10">
                    <div class="product-card">
                        
                        <!-- Image Container with Interactive Benefits Hover Overlay -->
                        <div class="product-image-container" tabindex="0" role="region" aria-label="Product Image and Benefits">
                            <img src="<?= e($item['image']) ?>" alt="<?= e($item['name']) ?>" class="product-img">
                            <span class="product-badge"><?= e($item['badge']) ?></span>
                            <span class="product-category-tag"><?= e($item['category']) ?></span>

                            <!-- Floating Hover / Tap Hint -->
                            <div class="hover-hint-badge">
                                <i class="bi bi-hand-index-thumb-fill text-gold me-1"></i> Hover or Tap to View 5 Nutritional Benefits
                            </div>

                            <!-- Detailed Benefits Overlay on Hover -->
                            <div class="product-hover-overlay">
                                <div class="hover-overlay-header">
                                    <div>
                                        <span class="badge-pill-gold mb-1"><i class="bi bi-gem me-1"></i> Traditional Profile</span>
                                        <h4 class="hover-overlay-title">Benefits of Delight Gundar</h4>
                                    </div>
                                    <button type="button" class="btn-close-overlay" aria-label="Close details" title="Close overlay">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                <!-- Scrollable 5 Benefits Details -->
                                <div class="hover-benefits-scroll">
                                    <?php if (!empty($item['benefits'])): ?>
                                        <?php foreach ($item['benefits'] as $benefit): ?>
                                            <div class="hover-benefit-item">
                                                <div class="hover-benefit-icon">
                                                    <i class="bi <?= e($benefit['icon']) ?>"></i>
                                                </div>
                                                <div class="hover-benefit-content">
                                                    <h5 class="hover-benefit-title"><?= e($benefit['title']) ?></h5>
                                                    <div class="hover-benefit-subtitle"><?= e($benefit['subtitle']) ?></div>
                                                    <p class="hover-benefit-desc"><?= e($benefit['desc']) ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <!-- Footer Notice -->
                                <div class="hover-disclaimer">
                                    <i class="bi bi-shield-check text-gold me-1"></i>
                                    <span>Rooted in time-honored traditional &amp; Ayurvedic culinary heritage. Treasured as wholesome nourishment.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="product-body">
                            <h3 class="product-title"><?= e($item['name']) ?></h3>
                            <p class="product-desc"><?= e($item['short_desc']) ?></p>

                            <!-- Highlights -->
                            <ul class="product-highlights">
                                <?php foreach ($item['highlights'] as $highlight): ?>
                                    <li><i class="bi bi-check-lg text-gold-dark"></i> <?= e($highlight) ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <!-- Interactive Button to Toggle Hover Details on Click / Touch -->
                            <button type="button" class="btn btn-toggle-overlay w-100 mb-3" aria-label="View Detailed Nutritional & Health Benefits">
                                <i class="bi bi-stars text-gold me-1"></i>
                                <span>Click to View 5 Detailed Health Benefits</span>
                            </button>

                            <!-- WhatsApp Direct Inquiry Button -->
                            <div class="mt-auto">
                                <a href="<?= e(get_whatsapp_url($item['inquiry_msg'])) ?>" target="_blank" rel="noopener noreferrer" class="btn-product-inquire" title="Inquire on WhatsApp about <?= e($item['name']) ?>">
                                    <i class="bi bi-whatsapp fs-6"></i>
                                    <span>Inquire on WhatsApp</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Informational Note Banner -->
        <div class="mt-5 p-4 rounded-3 text-center" style="background: rgba(201, 162, 39, 0.12); border: 1px dashed var(--gold-primary);">
            <p class="mb-1 fw-bold text-dark">
                <i class="bi bi-info-circle-fill text-gold me-2"></i> Custom Quantities &amp; Bulk Orders
            </p>
            <p class="small text-muted mb-0">
                Looking for specific crystal sizes, festive gift packaging, or commercial wholesale supply? 
                <a href="<?= e(get_whatsapp_url('Hello Delight Gundar! I am looking for custom quantity / wholesale supply.')) ?>" target="_blank" rel="noopener noreferrer" class="text-gold-dark fw-bold text-decoration-underline ms-1">
                    Contact us directly on WhatsApp <i class="bi bi-arrow-right"></i>
                </a>
            </p>
        </div>

    </div>
</section>

<!-- ========================================================================
     WHY CHOOSE US SECTION
     ======================================================================== -->
<section class="why-us-section" id="why-us">
    <div class="container position-relative">
        
        <!-- Section Header -->
        <div class="section-header text-center">
            <span class="section-tag" style="background: rgba(232, 212, 138, 0.15); color: var(--gold-light); border-color: rgba(232, 212, 138, 0.4);">
                <i class="bi bi-shield-check"></i> Pure Distinction
            </span>
            <h2 class="section-title title-light">Why Choose Delight Gundar</h2>
            
            <div class="gold-separator">
                <span class="sep-line"></span>
                <span class="sep-diamond"></span>
                <span class="sep-line"></span>
            </div>

            <p class="section-subtitle subtitle-light">
                Discover the foundational principles that make our edible gum the preferred choice for connoisseurs, sweet artisans, and health-conscious families.
            </p>
        </div>

        <!-- 6 Feature Cards Grid -->
        <div class="row g-4">
            
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon-box">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4 class="why-title">Unmatched Purity</h4>
                    <p class="why-desc">
                        100% natural, hand-cleaned crystals free from adulterants, dust, synthetic polishes, or chemical bleaching agents.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon-box">
                        <i class="bi bi-sun"></i>
                    </div>
                    <h4 class="why-title">Natural Sun-Drying</h4>
                    <p class="why-desc">
                        Cured naturally under clear sunlight to preserve maximum nutritional vitality, essential minerals, and wholesome crunch.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon-box">
                        <i class="bi bi-fire"></i>
                    </div>
                    <h4 class="why-title">Superior Puffing Rate</h4>
                    <p class="why-desc">
                        Guaranteed to pop evenly in hot desi ghee without turning sticky or hard, delivering authentic melt-in-mouth sweetness.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon-box">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4 class="why-title">Ayurvedic Nourishment</h4>
                    <p class="why-desc">
                        Revered in ancient wellness traditions for bolstering stamina, promoting joint comfort, and restoring seasonal strength.
                    </p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon-box">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4 class="why-title">Trust &amp; Fresh Packaging</h4>
                    <p class="why-desc">
                        Sealed in moisture-barrier food-grade packaging to protect natural aroma, shelf life, and crystal freshness all year round.
                    </p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon-box">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h4 class="why-title">Direct Owner Service</h4>
                    <p class="why-desc">
                        Personalized customer care via WhatsApp and Instagram. No automated bots—talk directly with knowledgeable leadership.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Reviews Section -->
 <section class="Reviews-section" id="Reviews">
    <div class="container position-relative">
        <div class="section-header text-center">
            <span class="section-tag"><i class="bi bi-chat-left-quote"></i> Customer Reviews</span>
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="gold-separator">
                <span class="sep-line"></span>
                <span class="sep-diamond"></span>
                <span class="sep-line"></span>
            </div>
            <p class="section-subtitle">Genuine feedback from delighted users of Delight Gundar.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Review 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="review-card p-4 rounded-3 bg-light shadow-sm h-100">
                    <h5 class="mb-2">Kherunben Kothari</h5>
                    <div class="mb-2"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                    <p class="mb-0">"Excellent quality Gundar! The product was clean, fresh and properly packed. Very happy with the quality."</p>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="review-card p-4 rounded-3 bg-light shadow-sm h-100">
                    <h5 class="mb-2">Aliasgar Dahodwala</h5>
                    <div class="mb-2"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                    <p class="mb-0">"Really impressed with the quality. Perfect for traditional recipes and everyday use. Highly recommended!"</p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="review-card p-4 rounded-3 bg-light shadow-sm h-100">
                    <h5 class="mb-2">Zainabben Cyclewala</h5>
                    <div class="mb-2"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                    <p class="mb-0">"Good quality product with nice packaging. The Gundar looks pure and well maintained. Great experience!"</p>
                </div>
            </div>

            <!-- Review 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="review-card p-4 rounded-3 bg-light shadow-sm h-100">
                    <h5 class="mb-2">Mahesh Makvana</h5>
                    <div class="mb-2"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                    <p class="mb-0">"I loved the product quality. It is exactly what I was looking for. Will definitely order again."</p>
                </div>
            </div>

            <!-- Review 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="review-card p-4 rounded-3 bg-light shadow-sm h-100">
                    <h5 class="mb-2">Jumanaben</h5>
                    <div class="mb-2"><span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9733;</span></div>
                    <p class="mb-0">"Amazing product and satisfying quality. A great option for anyone looking for good-quality Gundar."</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================================
     CONTACT SECTION (With Direct WhatsApp & Instagram Integration)
     ======================================================================== -->
<section class="contact-section" id="contact">
    <div class="container">
        
        <!-- Section Header -->
        <div class="section-header text-center">
            <span class="section-tag">
                <i class="bi bi-telephone-inbound"></i> Direct Touchpoint
            </span>
            <h2 class="section-title">Connect with Delight Gundar</h2>
            
            <div class="gold-separator">
                <span class="sep-line"></span>
                <span class="sep-diamond"></span>
                <span class="sep-line"></span>
            </div>

            <p class="section-subtitle">
                Have inquiries about product grades, wholesale pricing, or traditional recipe tips? Reach out to the owner directly through WhatsApp or Instagram.
            </p>
        </div>

        <div class="row g-5">
            
            <!-- Left Column: Business Details & Social Connect -->
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <h3 class="fs-4 fw-bold mb-4 text-dark">Business Information</h3>

                    <!-- Brand Name -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Brand Name</h6>
                            <p><?= e(SITE_NAME) ?></p>
                        </div>
                    </div>

                    <!-- Owner WhatsApp -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Direct WhatsApp</h6>
                            <p><a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="text-gold-dark"><?= e(WHATSAPP_DISPLAY_NUMBER) ?></a></p>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Official Instagram</h6>
                            <p><a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener noreferrer" class="text-gold-dark"><?= e(INSTAGRAM_HANDLE) ?></a></p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Business Address</h6>
                            <p><?= e(BUSINESS_ADDRESS) ?></p>
                        </div>
                    </div>

                    <!-- Operating Hours -->
                    <div class="contact-detail-row">
                        <div class="contact-detail-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-detail-content">
                            <h6>Operating Hours</h6>
                            <p><?= e(BUSINESS_HOURS) ?></p>
                        </div>
                    </div>

                    <!-- Instant Connect Buttons -->
                    <div class="contact-direct-actions">
                        <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="contact-btn-social whatsapp">
                            <i class="bi bi-whatsapp fs-5"></i>
                            <span>WhatsApp Us</span>
                        </a>
                        <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener noreferrer" class="contact-btn-social instagram">
                            <i class="bi bi-instagram fs-5"></i>
                            <span>Instagram</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Inquiry Form (Constructs WhatsApp Message) -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 class="fs-4 fw-bold mb-2 text-dark">Send an Instant Inquiry</h3>
                    <p class="small text-muted mb-4">
                        Fill in your inquiry details below. When you click send, it will automatically connect you to our official WhatsApp chat with your formatted message ready!
                    </p>

                    <form id="inquiryForm" data-whatsapp-number="<?= e(WHATSAPP_NUMBER) ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="formName" class="form-label-gold">Your Full Name *</label>
                                <input type="text" class="form-control form-control-gold" id="formName" placeholder="e.g. Rajesh Patel" required>
                            </div>
                            <div class="col-md-6">
                                <label for="formPhone" class="form-label-gold">Phone Number (Optional)</label>
                                <input type="tel" class="form-control form-control-gold" id="formPhone" placeholder="e.g. +91 98765 00000">
                            </div>
                            <div class="col-12">
                                <label for="formProduct" class="form-label-gold">Product or Requirement of Interest</label>
                                <select class="form-select form-control-gold" id="formProduct">
                                    <option value="General Inquiry">General Brand Inquiry</option>
                                    <option value="Royal Golden Gundar (Grade A+)">Royal Golden Gundar (Grade A+)</option>
                                    <option value="Select Babool Gundar">Select Babool Gundar</option>
                                    <option value="Ayurvedic Wellness Gundar">Ayurvedic Wellness Gundar</option>
                                    <option value="Fine Crystal Gundar Granules">Fine Crystal Gundar Granules</option>
                                    <option value="Festive Gifting Pack">Festive Gifting Pack</option>
                                    <option value="Bulk / Wholesale Requirement">Bulk / Wholesale Requirement</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formMessage" class="form-label-gold">Your Message / Requirement Details *</label>
                                <textarea class="form-control form-control-gold" id="formMessage" rows="4" placeholder="Tell us about the quantity you need, your city, or any specific questions about our edible gum..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-gold w-100 py-3">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                    <span>Send Inquiry via WhatsApp</span>
                                </button>
                                <p class="text-center small text-muted mt-2 mb-0">
                                    <i class="bi bi-shield-check text-gold me-1"></i> Fast response directly from the owner. No spam.
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
