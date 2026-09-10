<?php
require_once __DIR__ . '/config.php';
?>
<!-- Corporate Footer -->
<footer class="footer-rakta">
  <div class="container">
    <div class="row g-4 justify-content-between">
      
      <!-- Company Branding & Mission -->
      <div class="col-lg-4 col-md-6 footer-brand">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img src="assets/images/logo.jpg" alt="<?php echo SITE_NAME; ?>" class="rounded-2" style="height: 44px;">
          <h4 class="mb-0 text-white fw-bold">RAKTA <span class="text-primary">INFOTECH</span></h4>
        </div>
        <p class="mb-3">
          Your trusted website development partner. We build lightning-fast, conversion-focused WordPress &amp; E-Commerce websites equipped with UPI payments, top-tier SEO, and lifetime technical support.
        </p>
        <div class="d-flex align-items-center gap-2 mb-4">
          <span class="badge bg-primary-subtle text-primary border border-primary px-3 py-2 rounded-pill">
            <i class="bi bi-shield-check me-1"></i> 100% Client Satisfaction
          </span>
          <span class="badge bg-info-subtle text-info border border-info px-3 py-2 rounded-pill">
            <i class="bi bi-lightning-charge me-1"></i> 2-Sec Speed
          </span>
        </div>
        <div class="footer-socials">
          <a href="<?php echo $social_links['whatsapp']; ?>" target="_blank" class="social-icon-btn" aria-label="WhatsApp">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="<?php echo $social_links['facebook']; ?>" target="_blank" class="social-icon-btn" aria-label="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="<?php echo $social_links['instagram']; ?>" target="_blank" class="social-icon-btn" aria-label="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" class="social-icon-btn" aria-label="LinkedIn">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6 col-6">
        <h5 class="footer-title">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="#home"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
          <li><a href="#services"><i class="bi bi-chevron-right me-1"></i> Services</a></li>
          <li><a href="#automation"><i class="bi bi-chevron-right me-1"></i> AI &amp; Automation</a></li>
          <li><a href="#portfolio"><i class="bi bi-chevron-right me-1"></i> Portfolio</a></li>
          <li><a href="#pricing"><i class="bi bi-chevron-right me-1"></i> Pricing</a></li>
          <li><a href="#about"><i class="bi bi-chevron-right me-1"></i> About</a></li>
          <li><a href="#faq"><i class="bi bi-chevron-right me-1"></i> FAQ</a></li>
          <li><a href="#contact"><i class="bi bi-chevron-right me-1"></i> Contact</a></li>
        </ul>
      </div>

      <!-- Web Solutions -->
      <div class="col-lg-3 col-md-6 col-6">
        <h5 class="footer-title">Our Solutions</h5>
        <ul class="footer-links">
          <li><a href="#services"><i class="bi bi-check2 me-1 text-primary"></i> Business Websites</a></li>
          <li><a href="#services"><i class="bi bi-check2 me-1 text-primary"></i> E-Commerce &amp; WooCommerce</a></li>
          <li><a href="#services"><i class="bi bi-check2 me-1 text-primary"></i> Meta Ads Landing Pages</a></li>
          <li><a href="#automation"><i class="bi bi-check2 me-1 text-primary"></i> AI Lead Qualification</a></li>
          <li><a href="#automation"><i class="bi bi-check2 me-1 text-primary"></i> WhatsApp Flow Automation</a></li>
          <li><a href="#services"><i class="bi bi-check2 me-1 text-primary"></i> UPI &amp; Payment Gateways</a></li>
          <li><a href="#services"><i class="bi bi-check2 me-1 text-primary"></i> Lifetime Support &amp; Speed</a></li>
        </ul>
      </div>

      <!-- Contact Details -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-title">Get In Touch</h5>
        <ul class="footer-links text-white-50">
          <li class="d-flex align-items-start gap-2 mb-3">
            <i class="bi bi-telephone-fill text-primary mt-1"></i>
            <div>
              <div class="small text-white-50">Call / Phone</div>
              <a href="tel:<?php echo PHONE_RAW; ?>" class="text-white fw-bold"><?php echo PHONE_NUMBER; ?></a>
            </div>
          </li>
          <li class="d-flex align-items-start gap-2 mb-3">
            <i class="bi bi-whatsapp text-success mt-1"></i>
            <div>
              <div class="small text-white-50">WhatsApp Direct</div>
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="text-white fw-bold"><?php echo PHONE_NUMBER; ?></a>
            </div>
          </li>
          <li class="d-flex align-items-start gap-2 mb-3">
            <i class="bi bi-envelope-fill text-info mt-1"></i>
            <div>
              <div class="small text-white-50">Email Support</div>
              <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="text-white"><?php echo CONTACT_EMAIL; ?></a>
            </div>
          </li>
          <li class="d-flex align-items-start gap-2">
            <i class="bi bi-geo-alt-fill text-warning mt-1"></i>
            <div>
              <div class="small text-white-50">Location &amp; Availability</div>
              <span class="text-white">Serving Clients Globally &amp; Across India</span>
            </div>
          </li>
        </ul>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom text-center d-flex flex-column flex-md-row justify-content-between align-items-center">
      <p class="mb-2 mb-md-0 text-muted">
        &copy; <?php echo date('Y'); ?> <strong class="text-white"><?php echo SITE_NAME; ?></strong>. All rights reserved. Let's Build Your Online Success.
      </p>
      <div class="d-flex gap-3 text-muted small">
        <span>Fast 2-Sec Speed</span>
        <span>&bull;</span>
        <span>Payment &amp; UPI Ready</span>
        <span>&bull;</span>
        <span>Lifetime Support</span>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Quick Button -->
<a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I would like to get a free website demo.'); ?>" target="_blank" class="floating-whatsapp" title="Chat on WhatsApp" aria-label="Chat with Rakta Infotech on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Back to Top Button -->
<a href="#home" class="back-to-top" title="Scroll to top" aria-label="Back to Top">
  <i class="bi bi-chevron-up"></i>
</a>

<!-- Core JavaScript Libraries -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
