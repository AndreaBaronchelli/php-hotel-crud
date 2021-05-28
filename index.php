<?php 
require_once __DIR__ . '/partials/scripts/get_rooms.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/partials/templates/head.php' ?>

<body>
    <header>
        <h2>Hotel's Rooms</h2>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rooms as $room) { ?>
                <tr>
                    <td><?php echo $room['id'] ?></td>
                    <td><?php echo $room['room_number'] ?></td>
                    <td><a href="./details.php?id=<?php echo $room['id'] ?>">Details</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>