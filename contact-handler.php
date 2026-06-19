<?php
/**
 * Contact form endpoint for the homepage form (#contactForm).
 *
 * Accepts a form-encoded POST (name, email, message, plus the honeypot field
 * "website"), validates, and relays via PHP mail() to the portfolio inbox.
 * Responds with JSON: {"ok": true} or {"ok": false, "error": "..."}.
 *
 * Deliverability on DreamHost requires From: to be an address on a domain
 * hosted in the panel, so From: is noreply@petebartsch.com and the visitor's
 * address goes in Reply-To.
 */

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo json_encode(['ok' => false, 'error' => 'POST only']);
    exit;
}

// Honeypot: humans never see this field. Pretend success so bots move on.
if (trim((string)($_POST['website'] ?? '')) !== '') {
    echo json_encode(['ok' => true]);
    exit;
}

$name    = trim((string)($_POST['name'] ?? ''));
$email   = trim((string)($_POST['email'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

// Strip header-injection vectors from anything that touches mail headers.
$name  = preg_replace('/[\r\n]+/', ' ', $name);
$email = preg_replace('/[\r\n]+/', '', $email);

$errors = [];
if ($name === '' || strlen($name) > 100) {
    $errors[] = 'name';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) {
    $errors[] = 'email';
}
if ($message === '' || strlen($message) > 5000) {
    $errors[] = 'message';
}

if ($errors) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'invalid: ' . implode(', ', $errors)]);
    exit;
}

$to      = 'peter@peterbartsch.com';
$from    = 'noreply@petebartsch.com';
$subject = 'Portfolio contact from ' . $name;
if (preg_match('/[^\x20-\x7E]/', $subject) && function_exists('mb_encode_mimeheader')) {
    $subject = mb_encode_mimeheader($subject, 'UTF-8');
}

$body = "Name: {$name}\nEmail: {$email}\n\n{$message}\n\n--\nSent from the petebartsch.com contact form\n";

$headers = implode("\r\n", [
    'From: Portfolio Contact <' . $from . '>',
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
]);

$sent = mail($to, $subject, $body, $headers, '-f' . $from);

if (!$sent) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'mail failed']);
    exit;
}

echo json_encode(['ok' => true]);
