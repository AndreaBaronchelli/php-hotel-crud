<?php
// SCRIPT TO GET ALL ROOMS

// Import DB
require_once __DIR__ . '/database.php';

// GET ID
$id = empty($_GET['id']) ? false : $_GET['id'];

// Create query
if($id) {
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        
        $room = $result->fetch_assoc();
        
    } else {
        echo "query error";
    };
}

// Close connection
$conn->close();