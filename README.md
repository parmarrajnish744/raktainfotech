# Rakta Infotech — Business-Ready Corporate Portfolio Website

> **"Your Website Partner for a Better Tomorrow"**  
> WordPress Development Experts &bull; E-Commerce Stores &bull; Fast 2-Sec Speed &bull; UPI Ready &bull; SEO Optimized

This repository contains the complete, production-ready corporate website for **Rakta Infotech**. Engineered with clean **PHP 8+**, **Bootstrap 5.3**, **HTML5**, **Modern CSS3**, and **Vanilla JavaScript**, designed for instant zero-hassle deployment to any hosting provider.

---

## 🌟 Key Highlights & Features

- **Brand-Accurate Identity**: Features official Rakta Infotech logo, graphics, color accents, and key selling propositions.
- **Fast 2-Sec Speed Guarantee**: Clean code structure with built-in asset caching and Gzip/Brotli compression rules.
- **Payment & UPI Ready**: Prominent showcases for WooCommerce, UPI (Google Pay, PhonePe, Paytm, QR), and global payment gateways.
- **Interactive Project Cost Calculator**: Clients can dynamically configure their website type, page count, and add-on features to calculate an instant quote and submit directly to WhatsApp with 1 click.
- **Dynamic Portfolio Showcase**: Interactive filterable tabs (E-Commerce, Birthday Wishes, Blogs, Corporate Agency) with direct "Order Similar" buttons.
- **Lead Capture & WhatsApp Integration**:
  - AJAX contact form with CSRF and anti-spam protection.
  - Inquiries automatically logged to `data/leads.json` and optionally sent to email.
  - Pre-filled WhatsApp trigger (`+91 76003 65880`) for instant client consultation and free website demo.
- **Clean Modern Aesthetic**: White/off-white canvas (#F8FAFC), deep navy (#0B1F3A), electric blue (#146EF5), and WhatsApp green (#20C878).
- **AI & Automation**: AI lead capture, WhatsApp workflow automation, and analytics tracking.

---

## 📁 Project Directory Structure

```text
rakta-infotech/
├── assets/
│   ├── css/
│   │   ├── bootstrap.min.css          # Bootstrap 5.3 styling (local copy)
│   │   ├── bootstrap-icons.min.css    # Bootstrap Icons
│   │   ├── style.css                  # Custom responsive design system & animations
│   │   └── fonts/                     # Icon font files (woff2, woff)
│   ├── js/
│   │   ├── bootstrap.bundle.min.js    # Bootstrap 5.3 JavaScript
│   │   └── main.js                    # Filter, calculator, AJAX lead submission & WhatsApp
│   └── images/
│       ├── logo.jpg                   # Official Rakta Infotech logo
│       ├── banner-wordpress.jpg       # WordPress device showcase
│       ├── banner-ecommerce.jpg       # E-Commerce & luxury watch showcase
│       ├── portfolio-ecommerce.jpg    # E-commerce store mockup
│       ├── portfolio-birthday.jpg     # Birthday wishes & greetings mockup
│       ├── portfolio-blog.jpg         # Clean editorial & news blog mockup
│       └── portfolio-corporate.jpg    # Enterprise IT & SaaS corporate mockup
├── includes/
│   ├── config.php                     # Central brand info, phone (+91 76003 65880), social links
│   ├── header.php                     # SEO meta tags, top announcement bar, stylesheets
│   ├── navbar.php                     # Sticky header with WhatsApp consultation button
│   └── footer.php                     # Corporate footer with services, links, and floating WhatsApp
├── data/
│   ├── leads.json                     # Local JSON storage for customer inquiries
│   └── .htaccess                      # Security rule blocking direct HTTP access to leads
├── contact-handler.php                # Secure backend handler for form submissions
├── index.php                          # Primary dynamic PHP application
├── index.html                         # Static fallback for static CDN hosting (Netlify/Vercel/GitHub Pages)
├── .htaccess                          # Apache production configuration (caching, Gzip, security)
├── Dockerfile                         # Container definition (PHP 8.2 + Apache)
├── docker-compose.yml                 # 1-command Docker launcher
└── README.md                          # Comprehensive documentation
```

---

## 🚀 Easy Deployment in Any Source

### Option 1: cPanel / Shared Hosting (Hostinger, GoDaddy, Bluehost, Namecheap, etc.)
1. Compress all files in this project folder into a `.zip` archive.
2. Log in to your cPanel or hosting control panel.
3. Open **File Manager** and navigate to `public_html` (or your domain's root folder).
4. Upload and **Extract** the `.zip` file into `public_html`.
5. Ensure the `data/` directory has write permissions (`755` or `777`).
6. Your website is live immediately at your domain!

### Option 2: Localhost PHP Development Server
To preview or test locally on your computer:
```bash
# Open terminal in the project folder and run:
php -S localhost:8000
```
Open [http://localhost:8000](http://localhost:8000) in your browser.

### Option 3: Docker Deployment
Run using Docker Compose with zero configuration:
```bash
docker-compose up -d
```
Your website will be available at [http://localhost:8080](http://localhost:8080).

### Option 4: Static Hosting (Netlify, Vercel, GitHub Pages)
If deploying to a static-only CDN host:
1. Simply deploy the folder directly. The pre-rendered `index.html` will load automatically.
2. The contact form and calculator include intelligent client-side fallbacks that format customer inquiries and launch directly into WhatsApp chat with Rakta Infotech (`+91 76003 65880`).

### Option 5: Ubuntu / Debian VPS with Apache / Nginx
```bash
# Copy files to webroot
sudo cp -r . /var/www/html/
sudo chown -R www-data:www-data /var/www/html/
sudo chmod -R 755 /var/www/html/
sudo chmod -R 777 /var/www/html/data/
```

---

## ⚙️ Updating Brand Settings & Contact Numbers

To change phone numbers, email, or social media links, edit `includes/config.php`:
```php
// Brand Information
define('SITE_NAME', 'Rakta Infotech');
define('PHONE_NUMBER', '+91 76003 65880');
define('WHATSAPP_NUMBER', '917600365880');
define('CONTACT_EMAIL', 'info@raktainfotech.com');
```

---

## 🛡️ Security & Performance

- **Data Privacy**: The `data/` folder is protected with `.htaccess` and cannot be accessed or downloaded via web browsers.
- **Anti-Spam**: Includes honeypot inputs to prevent automated spam bot submissions.
- **Core Web Vitals**: Images are optimized, styles use modern CSS variables, and layout shifts (CLS) are minimized.

---

&copy; Rakta Infotech. Let's Build Your Online Success.
