<?php
try {
    $hostmae = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";

    $mysqli = new mysqli($hostmae, $username, $password, $dbname);

} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
    
}