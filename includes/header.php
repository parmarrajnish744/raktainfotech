<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary SEO Meta Tags -->
  <title><?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?> | WordPress & E-Commerce Experts</title>
  <meta name="title" content="<?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?>">
  <meta name="description" content="Rakta Infotech provides high-performance custom WordPress websites, WooCommerce e-commerce stores, birthday wish portals, and SEO-optimized business websites. Fast 2-sec speed, UPI payment ready, 100% satisfaction.">
  <meta name="keywords" content="Rakta Infotech, WordPress Development, E-Commerce Website, WooCommerce, Birthday Wishes Website, UPI Payment Website, Fast 2 Second Speed, SEO Friendly Website">
  <meta name="author" content="Rakta Infotech">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://raktainfotech.com/">
  <meta property="og:title" content="<?php echo SITE_NAME; ?> - <?php echo SITE_TAGLINE; ?>">
  <meta property="og:description" content="Professional WordPress Websites for Your Business. Modern, Responsive, SEO Friendly & Affordable.">
  <meta property="og:image" content="assets/images/hero-laptop-mockup.jpg">

  <!-- Twitter Meta -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="<?php echo SITE_NAME; ?> - Professional WordPress Solutions">
  <meta property="twitter:description" content="Fast 2-Sec Speed, UPI Ready & SEO Optimized WordPress Websites.">
  <meta property="twitter:image" content="assets/images/hero-laptop-mockup.jpg">

  <!-- Favicon -->
  <link rel="icon" type="image/jpeg" href="assets/images/logo.jpg">
  
  <!-- Google Fonts Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Stylesheets (Local with CDN fallback) -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Top Announcement Bar -->
  <div class="top-bar d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center gap-3">
        <span><i class="bi bi-clock me-1 text-info"></i> <?php echo BUSINESS_HOURS; ?></span>
        <span class="top-bar-badge"><i class="bi bi-lightning-charge-fill"></i> Fast 2-Sec Speed Guaranteed</span>
      </div>
      <div class="d-flex align-items-center gap-4">
        <a href="tel:<?php echo PHONE_RAW; ?>" class="text-decoration-none">
          <i class="bi bi-telephone-fill me-1 text-primary"></i> <?php echo PHONE_NUMBER; ?>
        </a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I would like to get a free website demo.'); ?>" target="_blank" class="text-success fw-bold">
          <i class="bi bi-whatsapp me-1"></i> Get a Free Website Demo
        </a>
      </div>
    </div>
  </div>
