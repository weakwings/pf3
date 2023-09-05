<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $rawPassword = $_POST['psswrd'];
    $address = $_POST['address'];
    $dbirth = $_POST['dbirth'];
    $DNI = $_POST['DNI'];


    $checkQuery = "SELECT COUNT(*) as count FROM student WHERE email = '$email'";
    $result = $mysqli->query($checkQuery);
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        echo "This email is already in use. Please use another email.";
    } else {

        $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);


        $query = "INSERT INTO student ( DNI, name, email, psswrd, address, dbirth) VALUES ('$DNI', '$name', '$email', '$hashedPassword', '$address', '$dbirth')";

        if ($mysqli->query($query)) {

            header('Location: ../src/users/adm/dashboard.php');
            exit();
        } else {

            echo "Error adding student: " . $mysqli->error;
        }
    }
}
