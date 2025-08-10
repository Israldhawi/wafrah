<?php
$host = "localhost";
$user = "root"; // or your MySQL username
$pass = "";     // or your MySQL password
$dbname = "wafrah_db";

$conn = new mysqli($host, $user, $pass, $dbname);

// Add this line for debugging errors
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>
