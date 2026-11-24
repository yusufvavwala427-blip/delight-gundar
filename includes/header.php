<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$page_title = $page_title ?? (SITE_NAME . ' | ' . SITE_TAGLINE);
$meta_desc = $meta_desc ?? SITE_DESCRIPTION;
$current_page = basename($_SERVER['PHP_SELF']);
$is_home = ($current_page === 'index.php' || $current_page === '');
$home_prefix = $is_home ? '' : 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary SEO Meta Tags -->
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($meta_desc) ?>">
    <meta name="keywords" content="Delight Gundar, Gundar, Edible Gum, Babool Gond, Gond Katira, Pure Gond, Winter Sweets, Ayurvedic Gum, Gond Pak, Gond Laddu">
    <meta name="author" content="Delight Gundar">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="http://localhost/delight-gundar/<?= e($current_page) ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($meta_desc) ?>">
    <meta property="og:image" content="assets/images/hero/slide1.jpg">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($page_title) ?>">
    <meta name="twitter:description" content="<?= e($meta_desc) ?>">
    <meta name="twitter:image" content="assets/images/hero/slide1.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/images/logo/favicon.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Premium Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="top">

    <!-- Top Announcement Bar -->
    <div class="top-announcement-bar py-2">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-3 announcement-text">
                <span><i class="bi bi-gem text-gold me-1"></i> 100% Pure &amp; Handpicked Edible Gum</span>
                <span class="d-none d-md-inline separator">•</span>
                <span class="d-none d-md-inline"><i class="bi bi-truck text-gold me-1"></i> Inquire Direct for Wholesale &amp; Retail</span>
            </div>
            <div class="d-flex align-items-center gap-3 top-social-links">
                <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener noreferrer" class="top-social-item" title="Delight Gundar on Instagram">
                    <i class="bi bi-instagram"></i> <span class="d-none d-sm-inline"><?= e(INSTAGRAM_HANDLE) ?></span>
                </a>
                <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="top-social-item" title="Contact on WhatsApp">
                    <i class="bi bi-whatsapp"></i> <span class="d-none d-sm-inline"><?= e(WHATSAPP_DISPLAY_NUMBER) ?></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top main-navbar" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= e($home_prefix) ?>#top">
                <img src="<?= e(SITE_LOGO) ?>" alt="<?= e(SITE_NAME) ?> Logo" class="brand-logo-img">
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>

            <!-- Nav Items -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?= ($is_home) ? 'active' : '' ?>" href="<?= e($home_prefix) ?>#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page === 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= e($home_prefix) ?>#products">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= e($home_prefix) ?>#why-us">Why Choose Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= e($home_prefix) ?>#Reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page === 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="<?= e(get_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold-nav d-inline-flex align-items-center">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
