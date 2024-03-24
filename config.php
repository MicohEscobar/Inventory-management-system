<?php
$servername = "localhost";
$username = "micoh";
$password = "4321";
$database = "inventory";

//Creating connection
$conn = new mysqli($servername, $username, $password, $database);

//Checking connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>