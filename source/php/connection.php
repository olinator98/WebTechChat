<?php
$servername = "localhost";
$username = "aitec";
$password = "dachs";

// Create connection
$conn = new mysqli($servername, $username, $password);

$pdo = new PDO('mysql:host=localhost;dbname=db_webchat', $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>