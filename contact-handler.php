<?php
/**
 * Rakta Infotech - Contact & Lead Handler
 * Processes consultation requests, saves them securely, and generates instant WhatsApp triggers.
 */

session_start();
require_once __DIR__ . '/includes/config.php';

// Set response header for AJAX requests
$is_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') || 
           (isset($_SERVER['CONTENT_TYPE']) && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) ||
           (isset($_POST['ajax_mode']) && $_POST['ajax_mode'] === '1');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
        exit;
    }
    header('Location: index.php');
    exit;
}

// Honeypot anti-spam check (if bot fills this hidden field, reject)
if (!empty($_POST['website_url_hp'])) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Spam detected.']);
        exit;
    }
    header('Location: index.php?status=spam');
    exit;
}

// Extract and sanitize inputs
$name    = isset($_POST['name']) ? clean_input($_POST['name']) : '';
$phone   = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
$email   = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$service = isset($_POST['service']) ? clean_input($_POST['service']) : 'General Website Inquiry';
$budget  = isset($_POST['budget']) ? clean_input($_POST['budget']) : 'Standard';
$message = isset($_POST['message']) ? clean_input($_POST['message']) : '';

// Validation
$errors = [];
if (empty($name) || strlen($name) < 2) {
    $errors[] = 'Please provide your full name.';
}

if (empty($phone) && empty($email)) {
    $errors[] = 'Please provide either a phone/WhatsApp number or an email address so we can contact you.';
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (!empty($errors)) {
    if ($is_ajax) {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => implode(' ', $errors)]);
        exit;
    }
    $_SESSION['form_errors'] = $errors;
    header('Location: index.php?status=error#contact');
    exit;
}

// Create lead entry
$lead_entry = [
    'id'         => 'LEAD-' . date('Ymd-His') . '-' . rand(100, 999),
    'timestamp'  => date('Y-m-d H:i:s'),
    'name'       => $name,
    'phone'      => $phone,
    'email'      => $email,
    'service'    => $service,
    'budget'     => $budget,
    'message'    => $message,
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
    'user_agent' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 150)
];

// Save to data/leads.json
$leads_file = __DIR__ . '/data/leads.json';
$leads_data = [];

if (file_exists($leads_file)) {
    $current_content = file_get_contents($leads_file);
    $decoded = json_decode($current_content, true);
    if (is_array($decoded)) {
        $leads_data = $decoded;
    }
}

// Prepend newest lead
array_unshift($leads_data, $lead_entry);

// Limit leads to latest 500 for storage sanity
if (count($leads_data) > 500) {
    $leads_data = array_slice($leads_data, 0, 500);
}

@file_put_contents($leads_file, json_encode($leads_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);

// Format WhatsApp notification URL for immediate click
$wa_text = "👋 *New Website Inquiry for Rakta Infotech*" . "\n"
         . "👤 *Name:* " . $name . "\n"
         . "📱 *Phone:* " . $phone . "\n"
         . (!empty($email) ? "📧 *Email:* " . $email . "\n" : "")
         . "🚀 *Service:* " . $service . "\n"
         . "💰 *Budget:* " . $budget . "\n"
         . (!empty($message) ? "💬 *Message:* " . $message . "\n" : "")
         . "⚡ *Ref:* " . $lead_entry['id'];

$whatsapp_url = 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . urlencode($wa_text);

// Optional: send email to business owner if mail server is configured
$email_sent = false;
if (function_exists('mail') && !empty(CONTACT_EMAIL)) {
    $to = CONTACT_EMAIL;
    $subject = "New Lead from {$name} - Rakta Infotech Website";
    $headers = "From: no-reply@" . ($_SERVER['SERVER_NAME'] ?? 'raktainfotech.com') . "\r\n";
    $headers .= "Reply-To: " . (!empty($email) ? $email : CONTACT_EMAIL) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $body = "New consultation request received on " . date('Y-m-d H:i:s') . ":\n\n"
          . "Name: {$name}\n"
          . "Phone: {$phone}\n"
          . "Email: {$email}\n"
          . "Service: {$service}\n"
          . "Budget: {$budget}\n"
          . "Message: {$message}\n\n"
          . "Lead ID: {$lead_entry['id']}\n";
          
    @mail($to, $subject, $body, $headers);
}

if ($is_ajax) {
    header('Content-Type: application/json');
    echo json_encode([
        'status'       => 'success',
        'message'      => 'Thank you! Your request has been received. Our team will contact you within 15 minutes.',
        'whatsapp_url' => $whatsapp_url,
        'lead_id'      => $lead_entry['id'],
        'client_name'  => $name
    ]);
    exit;
}

$_SESSION['form_success'] = 'Thank you! Your request has been received. We will contact you shortly.';
$_SESSION['whatsapp_url'] = $whatsapp_url;
header('Location: index.php?status=success#contact');
exit;
