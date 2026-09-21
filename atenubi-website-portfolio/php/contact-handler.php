<?php
/**
 * Handles the contact form POST from about.php.
 * Expects JSON: { name, email, subject, message }
 * Responds with JSON: { success: bool, message: string, errors?: object }
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true) ?? $_POST;

$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$subject = trim($data['subject'] ?? 'General inquiry');
$message = trim($data['message'] ?? '');

// Avoids a hard dependency on the mbstring extension, which isn't
// enabled in every default PHP install.
$strlen = function_exists('mb_strlen') ? 'mb_strlen' : 'strlen';

$errors = [];
if ($name === '' || $strlen($name) > 120) {
    $errors['name'] = 'Please enter your name.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}
if ($message === '' || $strlen($message) < 10) {
    $errors['message'] = 'Message should be at least 10 characters.';
}
if ($strlen($message) > 5000) {
    $errors['message'] = 'Message is too long.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please fix the highlighted fields.', 'errors' => $errors]);
    exit;
}

require_once __DIR__.'/config.php';
$pdo = getDbConnection();

if ($pdo) {
    $stmt = $pdo->prepare(
        'INSERT INTO contact_messages (name, email, subject, message) VALUES (:name, :email, :subject, :message)'
    );
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message,
    ]);
} else {
    // Fallback so the form still works before MySQL is set up.
    $logDir = __DIR__.'/../data/_local';
    if (!is_dir($logDir)) { mkdir($logDir, 0755, true); }
    $entry = date('c')." | $name <$email> | $subject | ".str_replace("\n", ' ', $message).PHP_EOL;
    file_put_contents($logDir.'/contact_messages.log', $entry, FILE_APPEND | LOCK_EX);
}

echo json_encode(['success' => true, 'message' => "Thanks, $name — your message is in. I'll reply within a couple of days."]);
