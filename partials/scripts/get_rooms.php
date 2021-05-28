<?php
// SCRIPT TO GET ALL ROOMS

// Import DB
require_once __DIR__ . '/database.php';

// Create query
$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    // create rooms array
    $rooms = [];
    
    // populate rooms array
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
    
} else {
    echo "query error";
};

// Close connection
$conn->close();