<?php
include 'connection.php';

if (isset($_POST['student_id']) && isset($_POST['grades'])) {
    $student_id = $_POST['student_id'];
    $grades = $_POST['grades'];

    $query = "UPDATE student SET grades = ? WHERE id = ?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("si", $grades, $student_id);
        if ($stmt->execute()) {
            echo "Grades updated successfully.";
        } else {
            echo "Error updating grades.";
        }
    } else {
        echo "Error in database query.";
    }
} else {
    echo "student_id or grades were not provided.";
}
header("Location: ../src/users/teacher/dashboard.php");
