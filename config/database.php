<?php
$host = "localhost";
$username = "root";
$password = "20032010Nour";
$dbname = "my_data";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");