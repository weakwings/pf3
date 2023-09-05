<?php
include 'connection.php';

if (isset($_GET['email']) && isset($_GET['permission'])) {
    $email = $_GET['email'];
    $permission = $_GET['permission'];

    if ($permission == 'admin') {
        $query = "DELETE FROM admin WHERE email = ?";
    } elseif ($permission == 'student') {
        $query = "DELETE FROM student WHERE email = ?";
    } elseif ($permission == 'teacher') {
        $query = "DELETE FROM teacher WHERE email = ?";
    } else {
        echo "Invalid permission.";
        exit;
    }

    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user.";
        }
    } else {
        echo "Error in database query.";
    }
} else {
    echo "Email or permission were not provided.";
}

header("Location: ../src/users/adm/dashboard.php");
