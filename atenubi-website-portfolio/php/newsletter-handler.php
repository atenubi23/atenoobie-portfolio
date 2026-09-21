<?php
/**
 * Handles the newsletter signup POST from index.php.
 * Expects JSON: { email }
 * Responds with JSON: { success: bool, message: string }
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true) ?? $_POST;
$email = trim($data['email'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

require_once __DIR__.'/config.php';
$pdo = getDbConnection();

if ($pdo) {
    try {
        $stmt = $pdo->prepare('INSERT INTO newsletter_subscribers (email) VALUES (:email)');
        $stmt->execute([':email' => $email]);
    } catch (PDOException $e) {
        // Duplicate email (unique constraint) — treat as a friendly success, not an error.
        if ($e->getCode() !== '23000') {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Something went wrong. Please try again.']);
            exit;
        }
    }
} else {
    $logDir = __DIR__.'/../data/_local';
    if (!is_dir($logDir)) { mkdir($logDir, 0755, true); }
    file_put_contents($logDir.'/newsletter_subscribers.log', date('c')." | $email".PHP_EOL, FILE_APPEND | LOCK_EX);
}

echo json_encode(['success' => true, 'message' => "You're subscribed — thanks for following along."]);
