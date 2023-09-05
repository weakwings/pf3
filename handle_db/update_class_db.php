<?php
include 'connection.php';

if (isset($_POST['dclass']) && isset($_POST['teacher_id'])) {
    $dclass = $_POST['dclass'];
    $teacher_id = $_POST['teacher_id'];

    $query = "UPDATE teacher SET dclass = ? WHERE id = ?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("ii", $dclass, $teacher_id);
        $stmt->execute();
        echo "Subject updated successfully";
        $stmt->close();
    } else {
        echo "Error updating subject";
    }
}
