<?php

ini_set('display_errors', 0); // Disable error display
ini_set('log_errors', 1); // Enable error logging
ini_set('error_log', __DIR__ . '/logs/db_connect.log'); // Log errors to a file

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if (!isset($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME'])) {
    $response = [
        'status' => false,
        'message' => 'Required Environment Variables Are Missing Or Misconfigured.'
    ];
    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}

$DB_HOST = $_ENV['DB_HOST'];
$DB_USER = $_ENV['DB_USER'];
$DB_PASS = $_ENV['DB_PASS'];
$DB_NAME = $_ENV['DB_NAME'];

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$DB_HSOT;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_ASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $response = [
        'status' => true,
        'message' => 'Database Connection Successful.'
    ];
} catch (PDOException $e) {
    $response = [
        'status' => false,
        'message' => 'Database connection failed: ' . $e->getMessage()
    ];
}

header("Content-Type: application/json");
echo json_encode($response);
