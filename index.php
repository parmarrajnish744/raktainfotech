<?php
/**
 * Rakta Infotech - Master Website Page
 * Production-ready corporate portfolio built with PHP, Bootstrap 5, and modern web standards.
 * Clean White + Deep Navy + Electric Blue Visual System
 */

session_start();
require_once __DIR__ . '/includes/config.php';
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/navbar.php';
?>

<!-- ==========================================================================
     HERO SECTION
     ========================================================================== -->
<section class="hero-section" id="home">
  <div class="hero-ambient-glow"></div>
  <div class="container position-relative">
    <div class="row align-items-center g-5">
      
      <!-- Hero Left: Pitch, USPs, and CTAs -->
      <div class="col-lg-6">
        <div class="hero-badge">
          <i class="bi bi-patch-check-fill text-blue"></i>
          <span>🚀 WordPress Development Experts</span>
        </div>

        <h1 class="hero-title">
          Build a Website That <span class="text-blue">Grows Your Business.</span>
        </h1>

        <p class="hero-lead">
          We create fast, modern and conversion-focused WordPress websites for businesses, entrepreneurs and online stores.
        </p>

        <!-- USPs Highlight Pills (Strictly 3 Benefits) -->
        <div class="hero-usp-pills">
          <div class="usp-pill">
            <i class="bi bi-check2-circle"></i>
            <span>Mobile Responsive</span>
          </div>
          <div class="usp-pill">
            <i class="bi bi-check2-circle"></i>
            <span>SEO Ready</span>
          </div>
          <div class="usp-pill">
            <i class="bi bi-check2-circle"></i>
            <span>Fast &amp; Secure</span>
          </div>
        </div>

        <!-- Action CTAs -->
        <div class="d-flex flex-wrap gap-3 pt-1">
          <a href="#contact" class="btn btn-rakta-primary btn-lg">
            <span>Get Free Consultation</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I would like to get a free website demo.'); ?>" target="_blank" class="btn btn-whatsapp-cta btn-lg">
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp Us</span>
          </a>
        </div>

        <!-- Trust Line -->
        <div class="d-flex align-items-center gap-2 mt-4 text-muted small">
          <span class="text-warning fs-6"><i class="bi bi-star-fill"></i></span>
          <span class="fw-semibold text-navy">Trusted by businesses across India</span>
        </div>

        <!-- Human Founder Trust Badge Near Hero -->
        <div class="hero-founder-trust">
          <img src="assets/images/founder-portrait.jpg" alt="Rakta Infotech Lead Developer &amp; Founder" class="founder-mini-avatar">
          <span class="hero-founder-trust-text">Built by people who understand your business.</span>
        </div>
      </div>

      <!-- Hero Right: Realistic Laptop Website Mockup with Subtle Floating Cards -->
      <div class="col-lg-6">
        <div class="hero-mockup-container">
          <div class="laptop-mockup-wrapper">
            <!-- Realistic Laptop UI Mockup -->
            <img src="assets/images/hero-laptop-mockup.jpg" alt="Rakta Infotech Modern Website Mockup" class="laptop-mockup-img img-fluid">
            
            <!-- Floating Card 1: 95+ Performance -->
            <div class="floating-metric-card card-perf">
              <div class="floating-icon-wrap perf">
                <i class="bi bi-lightning-charge-fill"></i>
              </div>
              <div>
                <div class="floating-metric-text">⚡ 95+ Performance</div>
                <div class="floating-metric-sub">Google Core Web Vitals</div>
              </div>
            </div>

            <!-- Floating Card 2: SEO Ready -->
            <div class="floating-metric-card card-seo">
              <div class="floating-icon-wrap seo">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div>
                <div class="floating-metric-text">📈 SEO Ready</div>
                <div class="floating-metric-sub">Rank High on Google</div>
              </div>
            </div>

            <!-- Floating Card 3: Secure & Reliable -->
            <div class="floating-metric-card card-secure">
              <div class="floating-icon-wrap secure">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <div class="floating-metric-text">🔒 Secure &amp; Reliable</div>
                <div class="floating-metric-sub">SSL &amp; UPI Protected</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     CORE VALUE PROPOSITIONS BAR
     ========================================================================== -->
<section class="container py-4">
  <div class="trust-bar">
    <div class="row g-3">
      <div class="col-lg-3 col-6">
        <div class="trust-item">
          <div class="trust-icon-box">
            <i class="bi bi-lightning-charge"></i>
          </div>
          <div>
            <h4>Fast 2-Sec Speed</h4>
            <p>Guaranteed 95+ performance scores.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="trust-item">
          <div class="trust-icon-box">
            <i class="bi bi-credit-card-2-front"></i>
          </div>
          <div>
            <h4>UPI &amp; Payment Ready</h4>
            <p>Razorpay, PhonePe &amp; cards enabled.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="trust-item">
          <div class="trust-icon-box">
            <i class="bi bi-phone"></i>
          </div>
          <div>
            <h4>100% Mobile Responsive</h4>
            <p>Flawless experience on all screen sizes.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="trust-item">
          <div class="trust-icon-box">
            <i class="bi bi-headset"></i>
          </div>
          <div>
            <h4>Lifetime Support</h4>
            <p>Ongoing technical assistance via WhatsApp.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     WEBSITE IN ACTION: Premium Responsive 16:9 Video Experience
     ========================================================================== -->
<section class="website-action-section" id="action-showcase">
  <div class="action-ambient-glow"></div>
  <div class="container position-relative">
    
    <!-- Section Header: Clean, Spacious, Premium -->
    <div class="text-center mb-5">
      <span class="section-tag">
        <i class="bi bi-play-circle-fill text-blue me-1"></i> Interactive Showcase
      </span>
      <h2 class="section-title">Website in Action: Fast, Clean &amp; Conversion-Ready</h2>
      <p class="section-lead mx-auto" style="max-width: 680px;">
        See how your business website performs in the real world. Lightning-fast page loads, intuitive navigation, and high-converting modern layouts tailored for Indian businesses.
      </p>
    </div>

    <!-- Modern Browser Window Frame -->
    <div class="browser-window-frame">
      <!-- Browser Chrome Toolbar -->
      <div class="browser-chrome-header">
        <!-- Window Control Dots -->
        <div class="browser-dots" aria-hidden="true">
          <span class="browser-dot browser-dot-red" title="Close"></span>
          <span class="browser-dot browser-dot-yellow" title="Minimize"></span>
          <span class="browser-dot browser-dot-green" title="Expand"></span>
        </div>

        <!-- Address Bar with SSL & Lock -->
        <div class="browser-address-bar">
          <div class="browser-address-text">
            <i class="bi bi-lock-fill text-blue" title="SSL Encrypted Connection"></i>
            <span>https://<strong class="domain-name">raktainfotech</strong><span class="domain-tld">.com</span></span>
          </div>
          <span class="browser-ssl-badge">
            <i class="bi bi-shield-check"></i>
            <span>SSL Secured</span>
          </span>
        </div>

        <!-- Browser Actions -->
        <div class="browser-actions" aria-hidden="true">
          <button type="button" class="browser-action-icon" id="videoReloadBtn" title="Replay from start">
            <i class="bi bi-arrow-clockwise"></i>
          </button>
          <button type="button" class="browser-action-icon" id="videoFullscreenBtn" title="Toggle Fullscreen">
            <i class="bi bi-arrows-fullscreen"></i>
          </button>
        </div>
      </div>

      <!-- 16:9 Responsive Video Viewport -->
      <div class="browser-video-viewport" id="showcaseViewport">
        <!-- Live Website Preview Badge -->
        <div class="live-preview-badge" aria-label="Live Website Preview Badge">
          <span class="live-pulse-dot" aria-hidden="true"></span>
          <span>Live Website Preview</span>
        </div>

        <!-- Video Element -->
        <video 
          id="raktaActionVideo" 
          class="action-showcase-video" 
          autoplay 
          muted 
          loop 
          playsinline 
          preload="metadata" 
          poster="assets/images/video-poster.jpg"
          aria-label="Rakta Infotech live website interactive video demo">
          <source src="assets/videos/rakta-website-in-action.mp4" type="video/mp4">
          <source src="assets/videos/rakta-website-in-action.webm" type="video/webm">
          Your browser does not support HTML5 video.
        </video>

        <!-- Watch Demo & Playback Overlay -->
        <div class="watch-demo-overlay">
          <button type="button" class="btn btn-watch-demo" id="watchDemoBtn" aria-label="Watch interactive demo">
            <i class="bi bi-play-circle-fill"></i>
            <span>Watch Demo</span>
          </button>
          <button type="button" class="btn-video-ctrl" id="videoPlayPauseToggle" aria-label="Pause or play video" title="Pause / Play">
            <i class="bi bi-pause-fill" id="playPauseIcon"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Quick Navigation Section Jump Bar -->
    <div class="action-jump-bar">
      <span class="action-jump-label">Showcase Sections:</span>
      <a href="#home" class="action-jump-pill">
        <i class="bi bi-house-door"></i>
        <span>Homepage</span>
      </a>
      <a href="#services" class="action-jump-pill">
        <i class="bi bi-gear-wide-connected"></i>
        <span>Services</span>
      </a>
      <a href="#portfolio" class="action-jump-pill">
        <i class="bi bi-briefcase"></i>
        <span>Portfolio</span>
      </a>
      <a href="#pricing" class="action-jump-pill">
        <i class="bi bi-tag"></i>
        <span>Pricing</span>
      </a>
      <a href="#contact" class="action-jump-pill">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </div>

  </div>
</section>

<!-- ==========================================================================
     SERVICES SECTION: Solutions for Every Business
     ========================================================================== -->
<section class="py-5" id="services">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">What We Build</span>
      <h2 class="section-title">Solutions for Every Business</h2>
      <p class="section-subtitle">
        High-performance websites engineered to turn visitors into paying customers and accelerate your brand growth.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Service 1: Business Websites -->
      <div class="col-lg-3 col-md-6">
        <div class="service-box-card">
          <div class="service-box-header">
            <div class="service-box-icon">
              <i class="bi bi-briefcase"></i>
            </div>
            <span class="service-price-pill">Starting ₹5,999</span>
          </div>
          <h3>Business Websites</h3>
          <p class="service-box-desc">
            Professional websites that turn visitors into customers with high-credibility presentation.
          </p>
          <ul class="service-box-features">
            <li><i class="bi bi-check2"></i> 100% Mobile &amp; Tablet Ready</li>
            <li><i class="bi bi-check2"></i> High-Conversion Lead Forms</li>
            <li><i class="bi bi-check2"></i> Fast 2-Second Page Load</li>
            <li><i class="bi bi-check2"></i> Google Maps &amp; WhatsApp Integration</li>
          </ul>
          <a href="#contact" class="btn btn-outline-primary rounded-pill w-100 fw-semibold mt-auto">
            <span>Get Started</span>
            <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 2: E-commerce Websites -->
      <div class="col-lg-3 col-md-6">
        <div class="service-box-card">
          <div class="service-box-header">
            <div class="service-box-icon">
              <i class="bi bi-cart3"></i>
            </div>
            <span class="service-price-pill">Starting ₹12,999</span>
          </div>
          <h3>E-commerce Websites</h3>
          <p class="service-box-desc">
            Sell products online with WordPress + WooCommerce. Fluid checkout and inventory management.
          </p>
          <ul class="service-box-features">
            <li><i class="bi bi-check2"></i> WooCommerce Product Catalog</li>
            <li><i class="bi bi-check2"></i> UPI QR, Cards &amp; NetBanking</li>
            <li><i class="bi bi-check2"></i> Automated WhatsApp Notifications</li>
            <li><i class="bi bi-check2"></i> Real-time Stock Tracking</li>
          </ul>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I am interested in building an E-Commerce / WooCommerce Store.'); ?>" target="_blank" class="btn btn-outline-primary rounded-pill w-100 fw-semibold mt-auto">
            <span>Request Demo</span>
            <i class="bi bi-whatsapp ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 3: Landing Pages -->
      <div class="col-lg-3 col-md-6">
        <div class="service-box-card">
          <div class="service-box-header">
            <div class="service-box-icon">
              <i class="bi bi-bullseye"></i>
            </div>
            <span class="service-price-pill">Starting ₹3,999</span>
          </div>
          <h3>Landing Pages</h3>
          <p class="service-box-desc">
            High-converting landing pages built specifically for Meta Ads and Google Ads ROI.
          </p>
          <ul class="service-box-features">
            <li><i class="bi bi-check2"></i> Ad-Specific Conversion UI</li>
            <li><i class="bi bi-check2"></i> Fast Click-to-WhatsApp Flow</li>
            <li><i class="bi bi-check2"></i> Meta Pixel &amp; Event Tracking</li>
            <li><i class="bi bi-check2"></i> High Opt-In Lead Form</li>
          </ul>
          <a href="#contact" class="btn btn-outline-primary rounded-pill w-100 fw-semibold mt-auto">
            <span>Build Landing Page</span>
            <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 4: AI & Automation -->
      <div class="col-lg-3 col-md-6">
        <div class="service-box-card">
          <div class="service-box-header">
            <div class="service-box-icon">
              <i class="bi bi-cpu"></i>
            </div>
            <span class="service-price-pill">Starting ₹7,999</span>
          </div>
          <h3>AI &amp; Automation</h3>
          <p class="service-box-desc">
            Smart websites with AI-powered lead capture, automated routing, and instant WhatsApp follow-up.
          </p>
          <ul class="service-box-features">
            <li><i class="bi bi-check2"></i> AI Lead Qualification Bots</li>
            <li><i class="bi bi-check2"></i> Direct Google Sheets Sync</li>
            <li><i class="bi bi-check2"></i> Instant Auto-Responder Setup</li>
            <li><i class="bi bi-check2"></i> Smart Notification Alerts</li>
          </ul>
          <a href="#automation" class="btn btn-outline-primary rounded-pill w-100 fw-semibold mt-auto">
            <span>Explore AI Tools</span>
            <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     AI & AUTOMATION SECTION: More Than Just a Website
     ========================================================================== -->
<section class="py-5 automation-section" id="automation">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Next-Generation Growth</span>
      <h2 class="section-title">More Than Just a Website</h2>
      <p class="section-subtitle">
        We build websites that work for your business — capturing leads, answering inquiries, and automating your daily operations.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Feature 1: AI Lead Capture -->
      <div class="col-lg-3 col-md-6">
        <div class="automation-card">
          <div class="automation-icon">
            <i class="bi bi-robot"></i>
          </div>
          <h4>AI Lead Capture</h4>
          <p>
            Automatically collect, categorize, and qualify high-intent prospective leads 24/7 without manual intervention.
          </p>
        </div>
      </div>

      <!-- Feature 2: WhatsApp Integration -->
      <div class="col-lg-3 col-md-6">
        <div class="automation-card">
          <div class="automation-icon">
            <i class="bi bi-whatsapp text-success"></i>
          </div>
          <h4>WhatsApp Integration</h4>
          <p>
            Turn casual site visitors into direct customer conversations with seamless 1-click WhatsApp messaging.
          </p>
        </div>
      </div>

      <!-- Feature 3: Lead Automation -->
      <div class="col-lg-3 col-md-6">
        <div class="automation-card">
          <div class="automation-icon">
            <i class="bi bi-diagram-3"></i>
          </div>
          <h4>Lead Automation</h4>
          <p>
            Instantly route inquiries into your email, Google Sheets, or CRM system so no prospect ever slips through.
          </p>
        </div>
      </div>

      <!-- Feature 4: Analytics & Tracking -->
      <div class="col-lg-3 col-md-6">
        <div class="automation-card">
          <div class="automation-icon">
            <i class="bi bi-bar-chart-line"></i>
          </div>
          <h4>Analytics &amp; Tracking</h4>
          <p>
            Gain complete visibility into customer acquisition sources, conversion events, and ad return on ad spend (ROAS).
          </p>
        </div>
      </div>

    </div>

    <!-- Smart Automation Callout -->
    <div class="mt-5 p-4 rounded-4 bg-light border d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
      <div class="d-flex align-items-center gap-3">
        <div class="rounded-circle bg-primary bg-opacity-10 p-3 text-primary fs-3">
          <i class="bi bi-magic"></i>
        </div>
        <div>
          <h5 class="mb-1 fw-bold text-navy">Want Automated WhatsApp Leads Directly on Your Phone?</h5>
          <p class="mb-0 text-muted small">We set up direct notification triggers so you receive lead details via WhatsApp within seconds of submission.</p>
        </div>
      </div>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I want to integrate AI lead capture and WhatsApp automation into my website.'); ?>" target="_blank" class="btn btn-whatsapp-cta flex-shrink-0">
        <i class="bi bi-whatsapp"></i>
        <span>Consult on WhatsApp</span>
      </a>
    </div>

  </div>
</section>

<!-- ==========================================================================
     PRICING SECTION: Clean & Transparent
     ========================================================================== -->
<section class="py-5 pricing-section" id="pricing">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Transparent Investment</span>
      <h2 class="section-title">Simple, Honest Pricing For Every Stage</h2>
      <p class="section-subtitle">
        Zero hidden charges. Complete clarity upfront. Choose the package that suits your current goals.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Starter Tier -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card">
          <div class="pricing-tier-name">Starter</div>
          <div class="pricing-tier-desc">Perfect for service businesses, consultants &amp; local shops.</div>
          
          <div class="pricing-price-wrap">
            <div class="pricing-price">₹5,999</div>
            <div class="text-muted small">/ one-time</div>
          </div>

          <ul class="pricing-features-list">
            <li><i class="bi bi-check2"></i> 1 to 5 Custom Pages</li>
            <li><i class="bi bi-check2"></i> 100% Mobile &amp; Tablet Responsive</li>
            <li><i class="bi bi-check2"></i> 2-Second Speed Optimization</li>
            <li><i class="bi bi-check2"></i> WhatsApp Quick Chat Button</li>
            <li><i class="bi bi-check2"></i> Contact &amp; Inquiry Form</li>
            <li><i class="bi bi-check2"></i> Basic On-Page SEO Setup</li>
            <li><i class="bi bi-check2"></i> Free SSL &amp; Setup Assistance</li>
          </ul>

          <a href="#contact" class="btn btn-rakta-secondary w-100 py-3 mt-auto">
            <span>Get Starter Package</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Growth Tier (Featured) -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card featured">
          <div class="featured-badge">Most Popular</div>
          <div class="pricing-tier-name">Growth</div>
          <div class="pricing-tier-desc">Complete business website with lead capture and pro SEO.</div>
          
          <div class="pricing-price-wrap">
            <div class="pricing-price text-blue">₹9,999</div>
            <div class="text-muted small">/ one-time</div>
          </div>

          <ul class="pricing-features-list">
            <li><i class="bi bi-check2 text-blue"></i> 6 to 12 Custom Pages</li>
            <li><i class="bi bi-check2 text-blue"></i> Advanced Lead Generation Funnel</li>
            <li><i class="bi bi-check2 text-blue"></i> Google Analytics &amp; Meta Pixel Setup</li>
            <li><i class="bi bi-check2 text-blue"></i> Fast 2-Sec Speed &amp; Core Web Vitals 95+</li>
            <li><i class="bi bi-check2 text-blue"></i> Form Sync to Google Sheets / Email</li>
            <li><i class="bi bi-check2 text-blue"></i> Comprehensive On-Page SEO</li>
            <li><i class="bi bi-check2 text-blue"></i> 3 Months Priority WhatsApp Support</li>
          </ul>

          <a href="#contact" class="btn btn-rakta-primary w-100 py-3 mt-auto">
            <span>Choose Growth Package</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- E-commerce Tier -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card">
          <div class="pricing-tier-name">E-commerce</div>
          <div class="pricing-tier-desc">Full online store with WooCommerce, products &amp; UPI gateway.</div>
          
          <div class="pricing-price-wrap">
            <div class="pricing-price">₹12,999<span class="fs-4 fw-bold text-muted">+</span></div>
            <div class="text-muted small">/ one-time</div>
          </div>

          <ul class="pricing-features-list">
            <li><i class="bi bi-check2"></i> WooCommerce Online Store Setup</li>
            <li><i class="bi bi-check2"></i> UPI QR &amp; Razorpay / PhonePe Gateway</li>
            <li><i class="bi bi-check2"></i> Up to 50 Initial Product Uploads</li>
            <li><i class="bi bi-check2"></i> Automated WhatsApp Order Alerts</li>
            <li><i class="bi bi-check2"></i> Inventory &amp; Shipping Configuration</li>
            <li><i class="bi bi-check2"></i> Customer Account &amp; Order Tracking</li>
            <li><i class="bi bi-check2"></i> Lifetime Technical Guidance</li>
          </ul>

          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I want to get the E-commerce Package for my online store.'); ?>" target="_blank" class="btn btn-rakta-secondary w-100 py-3 mt-auto">
            <span>Launch Store</span>
            <i class="bi bi-whatsapp text-success ms-1"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Custom Quote Callout Box -->
    <div class="custom-quote-box">
      <div class="row align-items-center g-3">
        <div class="col-lg-8 text-lg-start text-center">
          <h4 class="fw-bold mb-1 text-navy">Have Custom Requirements or Complex Workflow?</h4>
          <p class="text-muted mb-0 small">
            Need custom web portals, API integrations, multi-vendor marketplaces, or bespoke software development? We provide custom scopes and quotes.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end text-center">
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I have custom project requirements and need a tailored quote.'); ?>" target="_blank" class="btn btn-rakta-primary">
            <span>Get a Custom Quote</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     INTERACTIVE PROJECT COST CALCULATOR
     ========================================================================== -->
<section class="py-5" id="calculator">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Instant Estimator</span>
      <h2 class="section-title">Calculate Your Website Project Cost</h2>
      <p class="section-subtitle">
        Customize your desired specifications below for instant upfront transparency, then forward your estimate directly to WhatsApp.
      </p>
    </div>

    <div class="calculator-box" id="project-calculator">
      <div class="row g-4">
        
        <!-- Left Options Picker -->
        <div class="col-lg-7">
          
          <!-- Step 1: Select Website Type -->
          <div class="mb-4">
            <label class="form-label fw-bold text-navy mb-2">
              <span class="badge bg-primary rounded-pill me-2">1</span> Select Website Category:
            </label>
            <div class="row g-2">
              <div class="col-sm-6">
                <div class="calc-option-card calc-type-card selected" data-calc-type="ecommerce">
                  <i class="bi bi-cart-check fs-3 text-blue d-block mb-1"></i>
                  <div class="fw-bold text-navy">E-Commerce Store</div>
                  <small class="text-muted">WooCommerce + UPI</small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="calc-option-card calc-type-card" data-calc-type="corporate">
                  <i class="bi bi-briefcase fs-3 text-primary d-block mb-1"></i>
                  <div class="fw-bold text-navy">Corporate / Business</div>
                  <small class="text-muted">High-Lead Company Site</small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="calc-option-card calc-type-card" data-calc-type="birthday">
                  <i class="bi bi-cake2 fs-3 text-danger d-block mb-1"></i>
                  <div class="fw-bold text-navy">Birthday Wishes Portal</div>
                  <small class="text-muted">Viral WhatsApp Sharing</small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="calc-option-card calc-type-card" data-calc-type="blog">
                  <i class="bi bi-newspaper fs-3 text-success d-block mb-1"></i>
                  <div class="fw-bold text-navy">Blog &amp; Media Website</div>
                  <small class="text-muted">SEO &amp; AdSense Ready</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 2: Page Scale -->
          <div class="mb-4">
            <label class="form-label fw-bold text-navy mb-2">
              <span class="badge bg-primary rounded-pill me-2">2</span> Number of Pages / Scope:
            </label>
            <div class="row g-2">
              <div class="col-4">
                <div class="calc-option-card calc-page-card selected" data-calc-pages="1-5">
                  <div class="fw-bold text-navy">1 - 5 Pages</div>
                  <small class="text-muted">Standard</small>
                </div>
              </div>
              <div class="col-4">
                <div class="calc-option-card calc-page-card" data-calc-pages="6-12">
                  <div class="fw-bold text-navy">6 - 12 Pages</div>
                  <small class="text-muted">+₹3,000</small>
                </div>
              </div>
              <div class="col-4">
                <div class="calc-option-card calc-page-card" data-calc-pages="15+">
                  <div class="fw-bold text-navy">15+ Pages</div>
                  <small class="text-muted">+₹6,500</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 3: Add-on Features -->
          <div class="mb-2">
            <label class="form-label fw-bold text-navy mb-2">
              <span class="badge bg-primary rounded-pill me-2">3</span> Add-on Performance Features:
            </label>
            <div class="row g-2">
              <div class="col-sm-6">
                <div class="form-check p-2 ps-4 rounded border bg-light">
                  <input class="form-check-input calc-addon-check" type="checkbox" value="upi_payment" id="chkUpi" checked>
                  <label class="form-check-label text-navy small" for="chkUpi">
                    <strong>Payment &amp; UPI Ready</strong> (+₹2,500)
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check p-2 ps-4 rounded border bg-light">
                  <input class="form-check-input calc-addon-check" type="checkbox" value="speed_seo" id="chkSeo" checked>
                  <label class="form-check-label text-navy small" for="chkSeo">
                    <strong>2-Sec Speed &amp; SEO Pro</strong> (+₹2,000)
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check p-2 ps-4 rounded border bg-light">
                  <input class="form-check-input calc-addon-check" type="checkbox" value="whatsapp_viral" id="chkWa">
                  <label class="form-check-label text-navy small" for="chkWa">
                    <strong>Viral WhatsApp Integration</strong> (+₹1,500)
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check p-2 ps-4 rounded border bg-light">
                  <input class="form-check-input calc-addon-check" type="checkbox" value="domain_hosting" id="chkHost">
                  <label class="form-check-label text-navy small" for="chkHost">
                    <strong>1-Year SSD Cloud Hosting</strong> (+₹2,000)
                  </label>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Right Summary Card -->
        <div class="col-lg-5">
          <div class="calc-summary-card h-100 d-flex flex-column justify-content-between">
            <div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-white-50 text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.1em;">Estimated Quote</span>
                <span class="badge bg-success"><i class="bi bi-shield-check"></i> Lifetime Support</span>
              </div>
              
              <div class="calc-price-display mb-1" id="calc-price-num">₹17,499</div>
              <div class="text-white-50 small mb-4">All-inclusive estimate &bull; Zero surprise fees</div>

              <div class="border-top border-white border-opacity-10 pt-3 mb-4">
                <div class="d-flex justify-content-between text-white-50 small mb-2">
                  <span>Selected Package:</span>
                  <strong class="text-white" id="calc-summary-type">E-Commerce / WooCommerce Store</strong>
                </div>
                <div class="d-flex justify-content-between text-white-50 small mb-2">
                  <span>Page Scope:</span>
                  <strong class="text-white" id="calc-summary-pages">1 to 5 Pages</strong>
                </div>
                <div class="d-flex justify-content-between text-white-50 small mb-2">
                  <span>Features Included:</span>
                  <strong class="text-info" id="calc-summary-addons">2 Features Included</strong>
                </div>
                <div class="d-flex justify-content-between text-white-50 small">
                  <span>Delivery Time:</span>
                  <strong class="text-warning">Fast 4 to 7 Days Delivery</strong>
                </div>
              </div>
            </div>

            <div>
              <a href="#" id="calc-wa-quote-btn" target="_blank" class="btn btn-whatsapp-cta w-100 py-3 fw-bold mb-2">
                <i class="bi bi-whatsapp fs-5"></i>
                <span>Send This Quote to WhatsApp</span>
              </a>
              <p class="text-center text-white-50 small mb-0">
                <i class="bi bi-headset me-1"></i> Get custom discounts &amp; instant consultation.
              </p>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     ABOUT SECTION: Human Element & Founder Trust
     ========================================================================== -->
<section class="py-5 about-section" id="about">
  <div class="container py-4">
    <div class="row align-items-center g-5">
      
      <!-- Founder Photo Card -->
      <div class="col-lg-5">
        <div class="about-founder-card">
          <img src="assets/images/founder-portrait.jpg" alt="Rakta Infotech Lead Architect &amp; Founder" class="about-founder-img">
          <div class="founder-overlay-card">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h5 class="mb-0 fw-bold text-white">Rakta Infotech</h5>
                <small class="text-white-50">Direct Developer Accountability</small>
              </div>
              <span class="badge bg-success rounded-pill"><i class="bi bi-check-circle-fill me-1"></i> 100% Dedicated</span>
            </div>
          </div>
        </div>
      </div>

      <!-- About Pitch & Credentials -->
      <div class="col-lg-7">
        <span class="section-tag">About Rakta Infotech</span>
        <h2 class="section-title">Built by People Who Understand Your Business</h2>
        <p class="lead text-navy fw-semibold mb-3">
          We don’t believe in generic templates, confusing jargon, or outsourcing delays. You work directly with developers who care about your bottom line.
        </p>
        <p class="text-muted mb-4">
          Every website we deliver is built around your specific business objectives: whether you need customers to buy products directly via UPI, book consultation appointments, or message your sales team on WhatsApp within 10 seconds.
        </p>

        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3">
              <div class="rounded-circle bg-primary bg-opacity-10 p-2 text-primary fs-4">
                <i class="bi bi-chat-dots-fill"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold text-navy">Direct Communication</h6>
                <small class="text-muted">15-Minute WhatsApp response</small>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3">
              <div class="rounded-circle bg-primary bg-opacity-10 p-2 text-primary fs-4">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold text-navy">No Hidden Charges</h6>
                <small class="text-muted">Transparent fixed agreements</small>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-3">
          <a href="#contact" class="btn btn-rakta-primary">
            <span>Discuss Your Project With Us</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I would like to speak directly with the founder regarding a website project.'); ?>" target="_blank" class="btn btn-whatsapp-cta">
            <i class="bi bi-whatsapp"></i>
            <span>Talk on WhatsApp</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     PORTFOLIO SHOWCASE SECTION
     ========================================================================== -->
<section class="py-5" id="portfolio">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Our Proven Work</span>
      <h2 class="section-title">Built With Precision, Speed &amp; Impact</h2>
      <p class="section-subtitle">
        Explore recent websites delivered by Rakta Infotech. Every project is optimized for 2-second speed, seamless checkout, and search engines.
      </p>

      <!-- Category Filter Tabs -->
      <div class="portfolio-filter-nav mt-4">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="ecommerce">E-Commerce &amp; Stores</button>
        <button class="filter-btn" data-filter="birthday">Birthday &amp; Greetings</button>
        <button class="filter-btn" data-filter="blog">Blogs &amp; Content</button>
        <button class="filter-btn" data-filter="corporate">Corporate &amp; Agency</button>
      </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="row g-4" id="portfolio-grid">
      
      <!-- Project 1: Luxury Watches & Jewelry Store -->
      <div class="col-lg-6 portfolio-item" data-category="ecommerce">
        <div class="portfolio-card">
          <div class="portfolio-img-wrap">
            <img src="assets/images/portfolio-ecommerce.jpg" alt="Luxury Jewelry E-Commerce" class="portfolio-img" loading="lazy">
            <span class="portfolio-overlay-badge">
              <i class="bi bi-lightning-charge-fill text-warning me-1"></i> Fast 2-Sec Speed
            </span>
          </div>
          <div class="portfolio-body">
            <div class="portfolio-tags">
              <span class="tech-tag">WordPress</span>
              <span class="tech-tag">WooCommerce</span>
              <span class="tech-tag text-success">UPI &amp; Razorpay</span>
              <span class="tech-tag text-primary">Luxury UI</span>
            </div>
            <h4 class="mb-2 text-navy">Aurum &amp; Co. — Luxury Watch &amp; Jewelry Store</h4>
            <p class="text-muted small mb-3">
              High-converting boutique e-commerce platform equipped with instant UPI QR checkout, real-time inventory management, and ultra-fast responsive design.
            </p>
            <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
              <span class="small text-muted"><i class="bi bi-check2 text-success"></i> 2-Sec Speed Tested</span>
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I want a website like Aurum & Co. Luxury Watch Store.'); ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill">
                <span>Order Similar</span> <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 2: BirthdayJoy Viral Portal -->
      <div class="col-lg-6 portfolio-item" data-category="birthday">
        <div class="portfolio-card">
          <div class="portfolio-img-wrap">
            <img src="assets/images/portfolio-birthday.jpg" alt="Birthday Wishes Portal" class="portfolio-img" loading="lazy">
            <span class="portfolio-overlay-badge">
              <i class="bi bi-whatsapp text-success me-1"></i> Viral 1-Tap Share
            </span>
          </div>
          <div class="portfolio-body">
            <div class="portfolio-tags">
              <span class="tech-tag">WordPress Custom</span>
              <span class="tech-tag text-danger">Birthday Wishes</span>
              <span class="tech-tag text-info">Photo Greeting Cards</span>
              <span class="tech-tag">AdSense Ready</span>
            </div>
            <h4 class="mb-2 text-navy">BirthdayJoy — Viral Wishes &amp; Greeting Cards</h4>
            <p class="text-muted small mb-3">
              Engaging festive portal allowing users to create custom birthday greetings, cake names, and photo cards with 1-click viral WhatsApp sharing.
            </p>
            <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
              <span class="small text-muted"><i class="bi bi-check2 text-success"></i> 100K+ Viral Hits</span>
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I want a demo for a Birthday Wishes Website!'); ?>" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill">
                <span>Get Demo</span> <i class="bi bi-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 3: The Current Editorial & News Blog -->
      <div class="col-lg-6 portfolio-item" data-category="blog">
        <div class="portfolio-card">
          <div class="portfolio-img-wrap">
            <img src="assets/images/portfolio-blog.jpg" alt="The Current Magazine Blog" class="portfolio-img" loading="lazy">
            <span class="portfolio-overlay-badge">
              <i class="bi bi-graph-up-arrow text-info me-1"></i> SEO Top Ranking
            </span>
          </div>
          <div class="portfolio-body">
            <div class="portfolio-tags">
              <span class="tech-tag">WordPress CMS</span>
              <span class="tech-tag text-success">SEO Schema</span>
              <span class="tech-tag">Editorial Typography</span>
              <span class="tech-tag">Newsletter Integration</span>
            </div>
            <h4 class="mb-2 text-navy">The Current — Lifestyle, Tech &amp; Travel Blog</h4>
            <p class="text-muted small mb-3">
              Clean, distraction-free digital publication with structured category taxonomy, author profiles, and high Google Core Web Vitals performance.
            </p>
            <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
              <span class="small text-muted"><i class="bi bi-check2 text-success"></i> 98% SEO Score</span>
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I want a blog website like The Current.'); ?>" target="_blank" class="btn btn-sm btn-outline-success rounded-pill">
                <span>Order Similar</span> <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Project 4: Synapse Digital Corporate IT Agency -->
      <div class="col-lg-6 portfolio-item" data-category="corporate">
        <div class="portfolio-card">
          <div class="portfolio-img-wrap">
            <img src="assets/images/portfolio-corporate.jpg" alt="Corporate Agency Website" class="portfolio-img" loading="lazy">
            <span class="portfolio-overlay-badge">
              <i class="bi bi-shield-check text-primary me-1"></i> Enterprise Grade
            </span>
          </div>
          <div class="portfolio-body">
            <div class="portfolio-tags">
              <span class="tech-tag">WordPress Enterprise</span>
              <span class="tech-tag text-primary">SaaS Consulting</span>
              <span class="tech-tag">Lead Intake</span>
            </div>
            <h4 class="mb-2 text-navy">Synapse Digital — Enterprise Cloud Consulting</h4>
            <p class="text-muted small mb-3">
              Modern corporate website with high-converting case study showcases, interactive metric counters, and automated CRM lead capture.
            </p>
            <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
              <span class="small text-muted"><i class="bi bi-check2 text-success"></i> High Conversion UI</span>
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I need an Enterprise Corporate Website like Synapse.'); ?>" target="_blank" class="btn btn-sm btn-outline-dark rounded-pill">
                <span>Order Similar</span> <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     WHY CHOOSE RAKTA INFOTECH (COMPARISON TABLE)
     ========================================================================== -->
<section class="py-5 bg-light" id="why-us">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Why We Are Different</span>
      <h2 class="section-title">Rakta Infotech vs. Standard Agencies</h2>
      <p class="section-subtitle">
        See why businesses choose us as their long-term website partner for speed, security, and affordability.
      </p>
    </div>

    <div class="comparison-table-wrap table-responsive">
      <table class="table comparison-table mb-0">
        <thead>
          <tr>
            <th style="width: 35%;">Features &amp; Deliverables</th>
            <th class="highlight-rakta-col" style="width: 35%;">
              <i class="bi bi-star-fill text-warning me-1"></i> Rakta Infotech
            </th>
            <th style="width: 30%;">Traditional Freelancers / Agencies</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Page Loading Speed</strong></td>
            <td class="highlight-rakta-col">
              <span class="badge bg-success-subtle text-success border border-success me-2">Guaranteed</span>
              <strong>Under 2 Seconds</strong> (Core Web Vitals 90+)
            </td>
            <td class="text-muted">Often 5 to 9 seconds with bloated code</td>
          </tr>
          <tr>
            <td><strong>Payment &amp; UPI Integration</strong></td>
            <td class="highlight-rakta-col">
              <strong class="text-success"><i class="bi bi-check-circle-fill me-1"></i> Included</strong> (Google Pay, PhonePe, Paytm QR + Cards)
            </td>
            <td class="text-muted">Charged as expensive separate add-ons</td>
          </tr>
          <tr>
            <td><strong>Transparent Pricing</strong></td>
            <td class="highlight-rakta-col">
              <strong class="text-success"><i class="bi bi-check-circle-fill me-1"></i> Fixed Upfront Pricing</strong> with Zero Hidden Fees
            </td>
            <td class="text-muted">Unpredictable hourly billing or inflated packages</td>
          </tr>
          <tr>
            <td><strong>Mobile Responsiveness</strong></td>
            <td class="highlight-rakta-col">
              <strong class="text-success"><i class="bi bi-check-circle-fill me-1"></i> 100% Pixel-Perfect</strong> on All Mobile &amp; Tablets
            </td>
            <td class="text-muted">Desktop-first, often broken on mobile screens</td>
          </tr>
          <tr>
            <td><strong>Turnaround Time</strong></td>
            <td class="highlight-rakta-col">
              <strong class="text-success"><i class="bi bi-check-circle-fill me-1"></i> Fast 3 to 7 Days</strong> Delivery
            </td>
            <td class="text-muted">Takes 4 to 8 weeks with endless delays</td>
          </tr>
          <tr>
            <td><strong>Ongoing Technical Support</strong></td>
            <td class="highlight-rakta-col">
              <strong class="text-success"><i class="bi bi-check-circle-fill me-1"></i> Lifetime Support</strong> &amp; 15-Minute WhatsApp Assistance
            </td>
            <td class="text-muted">Gone once the final invoice is paid</td>
          </tr>
          <tr>
            <td><strong>SEO Architecture</strong></td>
            <td class="highlight-rakta-col">
              <strong class="text-success"><i class="bi bi-check-circle-fill me-1"></i> Built-in Pro SEO</strong>, Schema &amp; Fast Indexing
            </td>
            <td class="text-muted">Basic or requires hiring a separate agency</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</section>

<!-- ==========================================================================
     CLIENT REVIEWS & TESTIMONIALS
     ========================================================================== -->
<section class="py-5" id="reviews">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Client Feedback</span>
      <h2 class="section-title">Trusted By Business Owners &amp; Creators</h2>
      <p class="section-subtitle">
        Here is what our clients say about their experience working with Rakta Infotech.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
          <div class="d-flex text-warning mb-3">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="text-muted mb-4">
            "Rakta Infotech built our jewelry e-commerce website with UPI payment integration. The 2-second speed is real! Our mobile orders doubled in the first month. Excellent support!"
          </p>
          <div class="d-flex align-items-center gap-3 mt-auto">
            <div class="rounded-circle bg-primary text-white fw-bold d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
              RK
            </div>
            <div>
              <h6 class="mb-0 fw-bold text-navy">Rajesh Kumar</h6>
              <small class="text-muted">Jewelry &amp; Luxury Goods Store</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
          <div class="d-flex text-warning mb-3">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="text-muted mb-4">
            "We ordered a viral birthday wishes and greeting website. Their direct demo won us over immediately. Delivered in just 4 days and already getting massive traffic."
          </p>
          <div class="d-flex align-items-center gap-3 mt-auto">
            <div class="rounded-circle bg-danger text-white fw-bold d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
              PS
            </div>
            <div>
              <h6 class="mb-0 fw-bold text-navy">Pooja Sharma</h6>
              <small class="text-muted">Digital Creator &amp; Publisher</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
          <div class="d-flex text-warning mb-3">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="text-muted mb-4">
            "True professionals. Affordable pricing with zero hidden costs. Whenever we have a doubt, they respond on WhatsApp in minutes. Highly recommended for corporate WordPress sites!"
          </p>
          <div class="d-flex align-items-center gap-3 mt-auto">
            <div class="rounded-circle bg-success text-white fw-bold d-flex align-items-center justify-content-center" style="width: 46px; height: 46px;">
              AP
            </div>
            <div>
              <h6 class="mb-0 fw-bold text-navy">Amit Patel</h6>
              <small class="text-muted">Consulting Services Director</small>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     FAQ ACCORDION
     ========================================================================== -->
<section class="py-5 bg-light" id="faq">
  <div class="container py-4">
    
    <div class="text-center mb-5">
      <span class="section-tag">Got Questions?</span>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-subtitle">
        Everything you need to know about our web development process and guarantee.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion accordion-rakta" id="raktaFaq">
          
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How fast will my website be designed and launched?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#raktaFaq">
              <div class="accordion-body">
                Standard business and landing pages are typically completed within <strong>3 to 5 business days</strong>. Custom E-Commerce stores or multi-feature applications take approximately <strong>5 to 7 days</strong>. We guarantee fast turnaround without compromising on speed or design quality.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                How does the UPI &amp; Payment Gateway integration work?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#raktaFaq">
              <div class="accordion-body">
                We integrate certified Indian payment gateways like <strong>Razorpay, PhonePe, and Cashfree</strong>. Your customers can pay effortlessly via Google Pay, PhonePe, Paytm, dynamic UPI QR codes, Debit/Credit Cards, and NetBanking. Funds settle directly into your verified bank account.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Can I edit text, products, and images myself after delivery?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#raktaFaq">
              <div class="accordion-body">
                <strong>Yes, absolutely!</strong> We build on WordPress with an intuitive visual dashboard. You can update text, add new products, modify prices, or change images without writing code. We also provide a free video walkthrough guide.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                What is included in "Lifetime Support"?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#raktaFaq">
              <div class="accordion-body">
                Lifetime Support covers technical assistance, bug fixes, troubleshooting, security advice, and minor layout tweaks whenever you need assistance. You have our direct WhatsApp line for 15-minute quick answers.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                How do I get a free website demo?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#raktaFaq">
              <div class="accordion-body">
                Simply click the WhatsApp button or reach out to our official number <strong>+91 76003 65880</strong>. Our team will share live interactive demo links tailored to your industry!
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     CONTACT & LEAD CAPTURE SECTION
     ========================================================================== -->
<section class="py-5 contact-section" id="contact">
  <div class="container py-4">
    
    <div class="row g-5">
      
      <!-- Left Column: Contact Cards & WhatsApp Direct -->
      <div class="col-lg-5">
        <div class="contact-info-card">
          <div>
            <span class="section-tag bg-white bg-opacity-10 text-white mb-3">Let's Connect</span>
            <h2 class="text-white fw-bold h2 mb-3">Get Free Consultation for Your Website</h2>
            <p class="text-white-50 mb-4">
              Ready to launch or have questions? Reach out to Rakta Infotech today. We reply within 15 minutes!
            </p>

            <!-- Phone -->
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div>
                <div class="small text-white-50">Direct Phone Call</div>
                <a href="tel:<?php echo PHONE_RAW; ?>" class="text-white fw-bold fs-5 text-decoration-none">
                  <?php echo PHONE_NUMBER; ?>
                </a>
              </div>
            </div>

            <!-- WhatsApp -->
            <div class="contact-info-item">
              <div class="contact-info-icon" style="background: rgba(32, 200, 120, 0.2); color: #20C878;">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div>
                <div class="small text-white-50">WhatsApp Direct</div>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, I would like to get a free website demo.'); ?>" target="_blank" class="text-white fw-bold fs-5 text-decoration-none">
                  <?php echo PHONE_NUMBER; ?>
                </a>
                <span class="d-block small text-success">Quick WhatsApp Consultation</span>
              </div>
            </div>

            <!-- Email -->
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <div class="small text-white-50">Official Email</div>
                <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="text-white fw-bold text-decoration-none">
                  <?php echo CONTACT_EMAIL; ?>
                </a>
              </div>
            </div>

            <!-- Highlights -->
            <div class="border-top border-white border-opacity-10 pt-4 mt-2">
              <div class="row g-2 text-white-50 small">
                <div class="col-6"><i class="bi bi-check-circle text-info me-1"></i> Fast 2-Sec Speed</div>
                <div class="col-6"><i class="bi bi-check-circle text-info me-1"></i> Payment &amp; UPI Ready</div>
                <div class="col-6"><i class="bi bi-check-circle text-info me-1"></i> 100% Satisfaction</div>
                <div class="col-6"><i class="bi bi-check-circle text-info me-1"></i> Lifetime Support</div>
              </div>
            </div>

          </div>

          <div class="mt-4 pt-3">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hello Rakta Infotech, let us connect!'); ?>" target="_blank" class="btn btn-whatsapp-cta w-100 py-3">
              <i class="bi bi-whatsapp fs-5"></i>
              <span>Open WhatsApp Quick Chat</span>
            </a>
          </div>

        </div>
      </div>

      <!-- Right Column: Interactive Consultation Lead Form -->
      <div class="col-lg-7">
        <div class="contact-form-card">
          <h3 class="fw-bold mb-2 text-navy">Request a Free Proposal</h3>
          <p class="text-muted small mb-4">
            Fill out the brief details below. We'll evaluate your project and prepare a tailored demonstration with estimated costs.
          </p>

          <!-- Response Message Placeholder -->
          <div id="form-status-msg">
            <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
              <div class="alert alert-success mt-2 mb-3 rounded-3 text-center">
                <i class="bi bi-check-circle-fill fs-4 text-success d-block mb-1"></i>
                <strong>Thank you! Your request has been received.</strong>
                <p class="small mb-2">Our team will reach out to you within 15 minutes.</p>
                <?php if (!empty($_SESSION['whatsapp_url'])): ?>
                  <a href="<?php echo $_SESSION['whatsapp_url']; ?>" target="_blank" class="btn btn-whatsapp-cta btn-sm mt-1 px-4">
                    <i class="bi bi-whatsapp me-1"></i> Connect on WhatsApp Now
                  </a>
                <?php endif; ?>
              </div>
            <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
              <div class="alert alert-danger mt-2 mb-3 rounded-3">
                <i class="bi bi-exclamation-triangle-fill me-1"></i> Please check your inputs and try again.
              </div>
            <?php endif; ?>
          </div>

          <form action="contact-handler.php" method="POST" id="rakta-contact-form">
            <!-- Honeypot Anti-Spam (hidden from real users) -->
            <div style="display:none !important;" aria-hidden="true">
              <input type="text" name="website_url_hp" tabindex="-1" autocomplete="off">
            </div>

            <div class="row g-3">
              
              <!-- Full Name -->
              <div class="col-md-6">
                <label class="form-label fw-semibold small text-navy">Full Name <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                  <input type="text" name="name" class="form-control" placeholder="e.g. Rahul Sharma" required>
                </div>
              </div>

              <!-- Phone / WhatsApp -->
              <div class="col-md-6">
                <label class="form-label fw-semibold small text-navy">Phone / WhatsApp Number <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-whatsapp text-success"></i></span>
                  <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                </div>
              </div>

              <!-- Email Address -->
              <div class="col-md-6">
                <label class="form-label fw-semibold small text-navy">Email Address</label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                  <input type="email" name="email" class="form-control" placeholder="name@company.com">
                </div>
              </div>

              <!-- Service Type -->
              <div class="col-md-6">
                <label class="form-label fw-semibold small text-navy">Service Needed</label>
                <select name="service" class="form-select">
                  <option value="Business Website (₹5,999)">Business Website (Starting ₹5,999)</option>
                  <option value="E-Commerce Website (WooCommerce + UPI)" selected>E-Commerce Website (Starting ₹12,999)</option>
                  <option value="Landing Page for Ads (₹3,999)">Landing Page for Ads (Starting ₹3,999)</option>
                  <option value="AI & Automation Integration (₹7,999)">AI &amp; Automation Integration (Starting ₹7,999)</option>
                  <option value="Custom Project / Other">Custom Project / Other</option>
                </select>
              </div>

              <!-- Budget Range -->
              <div class="col-12">
                <label class="form-label fw-semibold small text-navy">Estimated Budget Range</label>
                <select name="budget" class="form-select">
                  <option value="₹5,000 - ₹10,000 (Starter / Business / Landing Page)">₹5,000 - ₹10,000 (Starter / Business / Landing Page)</option>
                  <option value="₹10,000 - ₹20,000 (Growth / E-Commerce)">₹10,000 - ₹20,000 (Growth / E-Commerce)</option>
                  <option value="₹20,000+ (Premium Custom Solution)">₹20,000+ (Premium Custom Solution)</option>
                  <option value="Need Consultation on Budget">Need Consultation on Budget</option>
                </select>
              </div>

              <!-- Message / Project Details -->
              <div class="col-12">
                <label class="form-label fw-semibold small text-navy">Project Details &amp; Requirements</label>
                <textarea name="message" class="form-control" rows="4" placeholder="Tell us about your business, specific pages, or any reference websites you like..."></textarea>
              </div>

              <!-- Submit Button -->
              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-rakta-primary btn-lg w-100 py-3">
                  <span>Send Inquiry &amp; Get Free Demo</span>
                  <i class="bi bi-send-fill"></i>
                </button>
                <div class="text-center mt-2">
                  <small class="text-muted">
                    <i class="bi bi-lock-fill text-success me-1"></i> Your information is kept 100% confidential. No spam ever.
                  </small>
                </div>
              </div>

            </div>
          </form>

        </div>
      </div>

    </div>

  </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
