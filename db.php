<?php

$host = "sql305.infinityfree.com";
$username = "if0_42483734";
$password = "123456";
$database = "if0_42483734_usersdb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
