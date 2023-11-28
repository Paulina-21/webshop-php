<?php
$servername = 'webshop.mysql.database.azure.com';
$username = 'WebShop';
$password = 'Admin123';
$database = 'WebShop';
$chrs = 'utf8mb4';
$attr = "mysql:host=$servername;dbname=$database;charset=$chrs";
$opts =
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

// Create connection
$conn = new PDO($attr, $username, $password, $opts);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
?>
