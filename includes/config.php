<?php
/**
 * Rakta Infotech - Website Configuration
 * Central configuration file for brand information, contact details, and site settings.
 */

// Brand Information
define('SITE_NAME', 'Rakta Infotech');
define('SITE_TAGLINE', 'Your Website Partner for a Better Tomorrow');
define('SITE_SUBTITLE', 'WordPress & E-Commerce Development Experts');

// Contact Details (from official brand information)
define('PHONE_NUMBER', '+91 76003 65880');
define('PHONE_RAW', '917600365880');
define('WHATSAPP_NUMBER', '917600365880');
define('WHATSAPP_DEFAULT_MSG', 'Hello Rakta Infotech, I would like to get a free website demo and consultation.');
define('CONTACT_EMAIL', 'info@raktainfotech.com');
define('CONTACT_ADDRESS', 'India');

// Working Hours & Response Time
define('BUSINESS_HOURS', 'Mon - Sat: 9:00 AM - 8:00 PM IST');
define('RESPONSE_TIME', 'Fast Response within 15 Minutes');

// USPs & Highlights
define('USP_SPEED', 'Fast 2-Sec Speed');
define('USP_PAYMENT', 'Payment & UPI Ready');
define('USP_SEO', 'SEO Optimized');
define('USP_SATISFACTION', '100% Client Satisfaction');
define('USP_PRICING', 'Affordable & Transparent Pricing');
define('USP_SUPPORT', 'Lifetime Technical Support');

// Social Media Links (can be adjusted as needed)
$social_links = [
    'whatsapp' => 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . urlencode(WHATSAPP_DEFAULT_MSG),
    'facebook' => 'https://facebook.com/raktainfotech',
    'instagram' => 'https://instagram.com/raktainfotech',
    'linkedin' => 'https://linkedin.com/company/raktainfotech',
    'github' => 'https://github.com/raktainfotech'
];

// Helper function to sanitize input
if (!function_exists('clean_input')) {
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        return $data;
    }
}
