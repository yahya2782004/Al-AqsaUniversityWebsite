<?php
// DB connection (XAMPP defaults)
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'application'; // <-- change to your database name

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

    // Set error mode to Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: emulate prepares off for better security
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//    echo "Connected successfully (PDO)";
} catch (PDOException $e) {
    die("DB connect error: " . $e->getMessage());
}

