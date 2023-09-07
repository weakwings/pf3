<?php
include 'connection.php';

if (isset($_POST['teacher_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['psswrd']) && isset($_POST['address']) && isset($_POST['dbirth']) && isset($_POST['dclass'])) {
    $teacher_id = $_POST['teacher_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rawPassword = $_POST['psswrd'];
    $address = $_POST['address'];
    $dbirth = $_POST['dbirth'];
    $dclass = $_POST['dclass'];

    if (!empty($rawPassword)) {

        $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

        $query = "UPDATE teacher SET name = ?, email = ?, psswrd = ?, address = ?, dbirth = ?, dclass = ? WHERE id = ?";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param("sssssii", $name, $email, $hashedPassword, $address, $dbirth, $dclass, $teacher_id);
            $stmt->execute();
            echo "Professor atualizado com sucesso";
            $stmt->close();
        } else {
            echo "Erro ao atualizar professor: " . $mysqli->error;
        }
    } else {
        
        $query = "UPDATE teacher SET name = ?, email = ?, address = ?, dbirth = ?, dclass = ? WHERE id = ?";
        if ($stmt = $mysqli->prepare($query)) {
            $stmt->bind_param("ssssii", $name, $email, $address, $dbirth, $dclass, $teacher_id);
            $stmt->execute();
            echo "Professor atualizado com sucesso";
            $stmt->close();
        } else {
            echo "Erro ao atualizar professor: " . $mysqli->error;
        }
    }
}

header("Location: ../src/users/adm/dashboard.php");
