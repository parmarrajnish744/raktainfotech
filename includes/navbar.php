<?php
require_once __DIR__ . '/config.php';
?>
<!-- Main Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-rakta sticky-top" id="mainNavbar">
  <div class="container">
    <!-- Brand Logo & Identity -->
    <a class="navbar-brand brand-logo-wrap" href="#home">
      <img src="assets/images/logo.jpg" alt="<?php echo SITE_NAME; ?> Logo" class="brand-logo-img">
      <div>
        <span class="brand-name">RAKTA <span>INFOTECH</span></span>
        <span class="brand-sub">Website Partner for Tomorrow</span>
      </div>
    </a>

    <!-- Mobile Hamburger Toggle -->
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links & Action CTA -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#automation">AI &amp; Automation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pricing">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQ</a>
        </li>
      </ul>

      <!-- Action Button Group -->
      <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode(WHATSAPP_DEFAULT_MSG); ?>" target="_blank" class="btn btn-whatsapp-cta btn-sm">
          <i class="bi bi-whatsapp"></i>
          <span>WhatsApp Us</span>
        </a>
        <a href="#contact" class="btn btn-rakta-primary btn-sm d-none d-sm-inline-flex">
          <span>Get Free Consultation</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
