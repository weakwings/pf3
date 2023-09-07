<?php
include 'connection.php';

if (isset($_POST['student_id']) && isset($_POST['DNI']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['psswrd']) && isset($_POST['address']) && isset($_POST['dbirth'])) {
    $student_id = $_POST['student_id'];
    $DNI = $_POST['DNI'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rawPassword = $_POST['psswrd'];
    $address = $_POST['address'];
    $dbirth = $_POST['dbirth'];


    if (!empty($rawPassword)) {
        
        $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

        $query = "UPDATE student SET DNI = ?, name = ?, email = ?, psswrd = ?, address = ?, dbirth = ? WHERE id = ?";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param("ssssssi", $DNI, $name, $email, $hashedPassword, $address, $dbirth, $student_id);
            $stmt->execute();
            echo "Student updated successfully";
            $stmt->close();
        } else {
            echo "Error updating student: " . $mysqli->error;
        }
    } else {
        
        $query = "UPDATE student SET DNI = ?, name = ?, email = ?, address = ?, dbirth = ? WHERE id = ?";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param("sssssi", $DNI, $name, $email, $address, $dbirth, $student_id);
            $stmt->execute();
            echo "Student updated successfully";
            $stmt->close();
        } else {
            echo "Error updating student: " . $mysqli->error;
        }
    }
}

header("Location: ../src/users/student/dashboard.php");
?>
