<?php
require_once './models/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $address = trim($_POST['address']);
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if (empty($fullName) || empty($email) || empty($contact) || empty($address) || empty($gender) || empty($dob)) {
        die("All fields are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format!");
    }

    $user = new marathon2025($pdo);
    if ($user->register($fullName, $email, $contact, $address, $gender, $dob)) {
        header("Location: ./views/success.php");
        exit();
    } else {
        die("Registration failed.");
    }
}
?>
