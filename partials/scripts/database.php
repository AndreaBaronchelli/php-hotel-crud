<?php
// DATABASE CONNECTIONS

// Conncection info
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'db_hotel';

// Open connection
$conn = new mysqli($host, $user, $password, $db_name);

// Check
if($conn && $conn->connect_error) {
    echo "Error connecting to DB";
}    