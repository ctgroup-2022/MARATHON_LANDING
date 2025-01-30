<?php
require_once '../config/database.php';

class marathon2025 {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function register($fullName, $email, $contact, $address, $gender, $dob) {
        $stmt = $this->pdo->prepare("INSERT INTO users (full_name, email, contact, address, gender, dob) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$fullName, $email, $contact, $address, $gender, $dob]);
    }
}
?>
