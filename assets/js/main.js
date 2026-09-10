/**
 * Rakta Infotech - Main Application Script
 * Dynamic interactions, portfolio filtering, project cost calculator, and AJAX lead submission.
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbarScroll();
  initBackToTop();
  initPortfolioFilter();
  initCostCalculator();
  initContactForm();
  initWebsiteActionShowcase();
});

/* ==========================================================================
   1. Navbar Scroll Effect & Active Link Observer
   ========================================================================== */
function initNavbarScroll() {
  const navbar = document.querySelector('.navbar-rakta');
  if (!navbar) return;

  const handleScroll = () => {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // Close mobile navbar on nav link click
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
  const navbarCollapse = document.querySelector('.navbar-collapse');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) bsCollapse.hide();
      }
    });
  });
}

/* ==========================================================================
   2. Back To Top Button
   ========================================================================== */
function initBackToTop() {
  const btn = document.querySelector('.back-to-top');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 350) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  }, { passive: true });

  btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ==========================================================================
   3. Portfolio Filter
   ========================================================================== */
function initPortfolioFilter() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  if (!filterBtns.length || !portfolioItems.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterValue = btn.getAttribute('data-filter');

      portfolioItems.forEach(item => {
        const category = item.getAttribute('data-category');
        if (filterValue === 'all' || category === filterValue) {
          item.style.display = 'block';
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'scale(1)';
          }, 20);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.95)';
          setTimeout(() => {
            item.style.display = 'none';
          }, 250);
        }
      });
    });
  });
}

/* ==========================================================================
   4. Interactive Project Cost Calculator
   ========================================================================== */
function initCostCalculator() {
  const calcRoot = document.getElementById('project-calculator');
  if (!calcRoot) return;

  const baseRates = {
    'ecommerce': { title: 'E-Commerce / WooCommerce Store', basePrice: 12999 },
    'corporate': { title: 'Corporate / Business Website', basePrice: 7999 },
    'birthday':  { title: 'Birthday Wishes & Greetings Viral Site', basePrice: 4999 },
    'blog':      { title: 'Content & News Blog Website', basePrice: 5999 }
  };

  const pageRates = {
    '1-5': 0,
    '6-12': 3000,
    '15+': 6500
  };

  const addOnRates = {
    'upi_payment': 2500,
    'speed_seo': 2000,
    'whatsapp_viral': 1500,
    'domain_hosting': 2000
  };

  let selectedType = 'ecommerce';
  let selectedPages = '1-5';
  let activeAddons = ['upi_payment', 'speed_seo'];

  const typeCards = calcRoot.querySelectorAll('.calc-type-card');
  const pageCards = calcRoot.querySelectorAll('.calc-page-card');
  const addonChecks = calcRoot.querySelectorAll('.calc-addon-check');
  const priceDisplay = document.getElementById('calc-price-num');
  const typeSummary = document.getElementById('calc-summary-type');
  const pagesSummary = document.getElementById('calc-summary-pages');
  const addonsSummary = document.getElementById('calc-summary-addons');
  const waQuoteBtn = document.getElementById('calc-wa-quote-btn');

  function calculateTotal() {
    let total = baseRates[selectedType].basePrice;
    total += pageRates[selectedPages];

    activeAddons.forEach(addon => {
      if (addOnRates[addon]) {
        total += addOnRates[addon];
      }
    });

    // Format Indian Rupee representation (e.g. ₹17,499)
    if (priceDisplay) {
      priceDisplay.textContent = '₹' + total.toLocaleString('en-IN');
    }

    if (typeSummary) {
      typeSummary.textContent = baseRates[selectedType].title;
    }

    if (pagesSummary) {
      pagesSummary.textContent = selectedPages === '1-5' ? '1 to 5 Pages' : (selectedPages === '6-12' ? '6 to 12 Pages' : '15+ Custom Pages');
    }

    if (addonsSummary) {
      addonsSummary.textContent = activeAddons.length > 0 ? activeAddons.length + ' Features Included' : 'Standard Package';
    }

    // Update WhatsApp link with pre-filled quote message
    if (waQuoteBtn) {
      const waMsg = `Hi Rakta Infotech, I used your Website Cost Calculator:\n` +
                    `• Package: ${baseRates[selectedType].title}\n` +
                    `• Pages: ${pagesSummary ? pagesSummary.textContent : selectedPages}\n` +
                    `• Features: ${activeAddons.join(', ')}\n` +
                    `• Estimated Price: ₹${total.toLocaleString('en-IN')}\n\n` +
                    `Please let me know how we can proceed with this order!`;
      waQuoteBtn.href = `https://wa.me/917600365880?text=${encodeURIComponent(waMsg)}`;
    }
  }

  // Type selection
  typeCards.forEach(card => {
    card.addEventListener('click', () => {
      typeCards.forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
      selectedType = card.getAttribute('data-calc-type');
      calculateTotal();
    });
  });

  // Pages selection
  pageCards.forEach(card => {
    card.addEventListener('click', () => {
      pageCards.forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
      selectedPages = card.getAttribute('data-calc-pages');
      calculateTotal();
    });
  });

  // Addon selection
  addonChecks.forEach(box => {
    box.addEventListener('change', () => {
      activeAddons = [];
      addonChecks.forEach(b => {
        if (b.checked) {
          activeAddons.push(b.value);
        }
      });
      calculateTotal();
    });
  });

  // Initial calculation
  calculateTotal();
}

/* ==========================================================================
   5. Contact Form Handling (AJAX + WhatsApp Fallback)
   ========================================================================== */
function initContactForm() {
  const form = document.getElementById('rakta-contact-form');
  if (!form) return;

  const statusContainer = document.getElementById('form-status-msg');
  const submitBtn = form.querySelector('button[type="submit"]');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // Basic validation
    const nameInput = form.querySelector('[name="name"]');
    const phoneInput = form.querySelector('[name="phone"]');
    const emailInput = form.querySelector('[name="email"]');

    if (!nameInput || !nameInput.value.trim()) {
      showStatus('Please enter your name.', 'danger');
      if (nameInput) nameInput.focus();
      return;
    }

    if ((!phoneInput || !phoneInput.value.trim()) && (!emailInput || !emailInput.value.trim())) {
      showStatus('Please enter your phone number or email.', 'danger');
      if (phoneInput) phoneInput.focus();
      return;
    }

    // Set loading state
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';

    const formData = new FormData(form);
    formData.append('ajax_mode', '1');

    try {
      // Determine if running on PHP server or static host
      const isPhpServer = window.location.protocol.startsWith('http') && 
                          (window.location.pathname.endsWith('.php') || !window.location.pathname.endsWith('.html'));

      let responseHandled = false;

      if (isPhpServer) {
        try {
          const response = await fetch('contact-handler.php', {
            method: 'POST',
            body: formData,
            headers: {
              'X-Requested-With': 'XMLHttpRequest'
            }
          });

          if (response.ok) {
            const data = await response.json();
            if (data.status === 'success') {
              showSuccessWithWhatsApp(data.message, data.whatsapp_url);
              form.reset();
              responseHandled = true;
            } else {
              showStatus(data.message || 'There was an error processing your inquiry.', 'danger');
              responseHandled = true;
            }
          }
        } catch (fetchErr) {
          console.warn('PHP handler failed or running static. Falling back to direct WhatsApp link.', fetchErr);
        }
      }

      // Fallback for static servers or fetch error
      if (!responseHandled) {
        const name = nameInput ? nameInput.value.trim() : '';
        const phone = phoneInput ? phoneInput.value.trim() : '';
        const email = emailInput ? emailInput.value.trim() : '';
        const serviceSelect = form.querySelector('[name="service"]');
        const service = serviceSelect ? serviceSelect.value : 'Website Development';
        const msgInput = form.querySelector('[name="message"]');
        const message = msgInput ? msgInput.value.trim() : '';

        const clientWaText = `👋 *Website Inquiry from ${name}*\n` +
                             `📱 Phone: ${phone}\n` +
                             (email ? `📧 Email: ${email}\n` : '') +
                             `🚀 Service: ${service}\n` +
                             (message ? `💬 Note: ${message}\n` : '');

        const directWaUrl = `https://wa.me/917600365880?text=${encodeURIComponent(clientWaText)}`;

        showSuccessWithWhatsApp('Thank you! Your request details are prepared. Click below to connect instantly on WhatsApp:', directWaUrl);
        form.reset();
      }
    } finally {
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalBtnText;
    }
  });

  function showStatus(text, type) {
    if (!statusContainer) return;
    statusContainer.className = `alert alert-${type} mt-3 mb-0 rounded-3`;
    statusContainer.innerHTML = text;
    statusContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function showSuccessWithWhatsApp(msgText, waUrl) {
    if (!statusContainer) return;
    statusContainer.className = 'alert alert-success mt-3 mb-0 rounded-3 text-center p-3 shadow-sm';
    statusContainer.innerHTML = `
      <div class="mb-2">
        <i class="bi bi-check-circle-fill fs-3 text-success d-block mb-1"></i>
        <strong>${msgText}</strong>
      </div>
      <a href="${waUrl}" target="_blank" class="btn btn-whatsapp-cta btn-sm mt-2 px-4 shadow-sm">
        <i class="bi bi-whatsapp me-1"></i> Open WhatsApp Chat Now
      </a>
    `;
    statusContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }
}

/* ==========================================================================
   6. Website in Action - Video Showcase Player & Controls
   ========================================================================== */
function initWebsiteActionShowcase() {
  const video = document.getElementById('raktaActionVideo');
  if (!video) return;

  const playPauseBtn = document.getElementById('videoPlayPauseToggle');
  const playPauseIcon = document.getElementById('playPauseIcon');
  const watchDemoBtn = document.getElementById('watchDemoBtn');
  const reloadBtn = document.getElementById('videoReloadBtn');
  const fullscreenBtn = document.getElementById('videoFullscreenBtn');
  const viewport = document.getElementById('showcaseViewport');

  const updatePlayPauseState = () => {
    if (!playPauseIcon) return;
    if (video.paused) {
      playPauseIcon.className = 'bi bi-play-fill';
      if (playPauseBtn) playPauseBtn.setAttribute('title', 'Play Showcase');
    } else {
      playPauseIcon.className = 'bi bi-pause-fill';
      if (playPauseBtn) playPauseBtn.setAttribute('title', 'Pause Showcase');
    }
  };

  if (playPauseBtn) {
    playPauseBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      if (video.paused) {
        video.play();
      } else {
        video.pause();
      }
    });
  }

  if (reloadBtn) {
    reloadBtn.addEventListener('click', () => {
      video.currentTime = 0;
      video.play();
    });
  }

  if (watchDemoBtn) {
    watchDemoBtn.addEventListener('click', () => {
      video.currentTime = 0;
      video.play();
      if (viewport && viewport.requestFullscreen && window.innerWidth > 768) {
        viewport.requestFullscreen().catch(() => {});
      }
    });
  }

  if (fullscreenBtn && viewport) {
    fullscreenBtn.addEventListener('click', () => {
      if (!document.fullscreenElement) {
        if (viewport.requestFullscreen) {
          viewport.requestFullscreen().catch(() => {});
        } else if (video.webkitEnterFullscreen) {
          video.webkitEnterFullscreen();
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        }
      }
    });
  }

  video.addEventListener('play', updatePlayPauseState);
  video.addEventListener('pause', updatePlayPauseState);

  // Performance Optimization: Autoplay when in viewport, pause when scrolled away
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          if (video.paused) {
            video.play().catch(() => {});
          }
        } else {
          if (!video.paused) {
            video.pause();
          }
        }
      });
    }, { threshold: 0.25 });

    observer.observe(video);
  }
}

