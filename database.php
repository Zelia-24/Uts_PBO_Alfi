<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "uts_pbo_alfi";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>