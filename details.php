<?php 
require_once __DIR__ . '/partials/scripts/get_single_room.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/partials/templates/head.php' ?>

<body>
    <h2>ROOM N.<?php echo $room['room_number'] ?></h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Floor</th>
                <th>Beds</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $room['id'] ?></td>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td><?php echo $room['beds'] ?></td>
            </tr>
        </tbody>
    </table>
    <a href="./index.php">Back to Rooms</a>
</body>
</html>