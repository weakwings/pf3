<?php
require '../../../handle_db/connection.php';

$query = "SELECT id, subject FROM class";
$result = $mysqli->query($query);
$items = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($items);
?>
