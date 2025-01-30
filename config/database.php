<?php
$host = 'localhost';
$dbname = 'Marathon2025';
$username = 'Marathon2025';
$password = 'MCg7J1pGiKl}';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
