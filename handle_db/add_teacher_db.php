<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $rawPassword = $_POST['psswrd'];
    $address = $_POST['address'];
    $dbirth = $_POST['dbirth'];
    $dclass = $_POST['dclass'];


    $checkQuery = "SELECT COUNT(*) as count FROM teacher WHERE email = '$email'";
    $result = $mysqli->query($checkQuery);
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        echo "This email is already in use. Please use another email.";
    } else {

        $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);


        $query = "INSERT INTO teacher (name, email, psswrd, address, dbirth, dclass) VALUES ('$name', '$email', '$hashedPassword', '$address', '$dbirth', '$dclass')";

        if ($mysqli->query($query)) {

            header('Location: ../src/users/adm/dashboard.php');
            exit();
        } else {

            echo "Error adding teacher: " . $mysqli->error;
        }
    }
}
