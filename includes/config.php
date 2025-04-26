<?php

$DB_HOST = 'localhost'; // Database host
$DB_USER = 'root'; // Database user
$DB_PASS = 'arka'; // Database password
$DB_NAME = 'photo_gallery'; // Database name

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
