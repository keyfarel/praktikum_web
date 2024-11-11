<?php
session_start();
header('Content-Type: application/json');

// Mengirimkan Token Keamanan
if (empty($_SESSION['csrf_token'])) {
    try {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    } catch (\Random\RandomException $e) {
        die($e->getMessage());
    }
}

// Mengambil Header
$headers = apache_request_headers();
if (isset($headers['Csrf-Token'])) {
    if ($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {
        exit(json_encode(['error' => 'Wrong CSRF token.']));
    }
} else {
    exit(json_encode(['error' => 'No CSRF token.']));
}

// Jika token valid
echo json_encode(['success' => 'CSRF token is valid.']);
