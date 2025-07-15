<?php
$host = 'localhost';
$dbname = 'voiceoftenkasi';
$username = 'root';
$password = ''; // Default in Laragon

$charset = 'utf8mb4'; // Proper for Unicode (e.g., Tamil)

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Show detailed error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch as associative array
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements
];

try {
    $conn = new PDO($dsn, $username, $password, $options);
    $conn->exec("SET NAMES 'utf8mb4'");
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
