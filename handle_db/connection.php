<?php

session_start();

try {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pf3";

    $mysqli = new mysqli($hostname, $username, $password, $dbname);

} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
    
}