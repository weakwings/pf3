<?php
require 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['psswrd'])) {
    $email = $_POST['email'];
    $psswrd = $_POST['psswrd'];

    $query = "SELECT * FROM admin WHERE email=?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['psswrd'];

            if (password_verify($psswrd, $storedPassword)) {
                $_SESSION['user_login'] = true;
                $_SESSION['user_tipe'] = 'admin';
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header('Location: /src/users/adm/dashboard.php');
                exit;
            } else {
                echo "Invalid password";
                exit;
            }
        }

        $stmt->close();
    }

    $query = "SELECT * FROM student WHERE email=?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['psswrd'];

            if (password_verify($psswrd, $storedPassword)) {
                $_SESSION['user_login'] = true;
                $_SESSION['user_tipe'] = 'student';
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header('Location: /src/users/student/dashboard.php');
                exit;
            } else {
                echo "Invalid password";
                exit;
            }
        }

        $stmt->close();
    }

    $query = "SELECT * FROM teacher WHERE email=?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['psswrd'];

            if (password_verify($psswrd, $storedPassword)) {
                $_SESSION['user_login'] = true;
                $_SESSION['user_tipe'] = 'teacher';
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header('Location: /src/users/teacher/dashboard.php');
                exit;
            } else {
                echo "Invalid password";
                exit;
            }
        } else {
            echo "Email not found";
            exit;
        }

        $stmt->close();
    }

    echo "Email not found for any user type";
}
