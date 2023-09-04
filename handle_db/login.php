<?php
include 'connection.php';

if (isset($_POST['email']) && isset($_POST['psswrd'])) {
    $email = $_POST['email'];
    $psswrd = $_POST['psswrd'];

    $query = "SELECT * FROM admin WHERE email='$email' AND psswrd='$psswrd'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        header('Location: /src/users/adm/dashboard.php');
    } else {
        $query = "SELECT * FROM student WHERE email='$email' AND psswrd='$psswrd'";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            header('Location: /src/users/student/dashboard.php');
        } else {
            $query = "SELECT * FROM teacher WHERE email='$email' AND psswrd='$psswrd'";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                header('Location: /src/users/teacher/dashboard.php');
            } else {
                echo "Invalid email or password";
            }
        }
    }
}
?>
