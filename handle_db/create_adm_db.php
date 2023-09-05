<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admin (name, email, psswrd) VALUES (?, ?, ?)";

    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("sss", $name, $email, $hashedPassword);
        if ($stmt->execute()) {
            echo "New admin successfully created.";
        } else {
            echo "Error creating new admin: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "SQL query error: " . $mysqli->error;
    }
}
header("Location: ../src/index.php");
