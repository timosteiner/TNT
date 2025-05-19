<?php
// config.php
$host = 'web.fhgr.education';
$db   = '550530_3_1';  // Change to your DB name
$user = '550530_3_1';   // Change to your DB user
$pass = 'zgYkAsjnlG@C';       // Change to your DB pass if needed

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    // Optional: Set error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection error: " . $e->getMessage();
    exit;
}
?>