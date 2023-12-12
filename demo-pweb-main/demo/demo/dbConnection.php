<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "coursePweb";

$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Set charset to utf8
$mysqli->set_charset("utf8");
?>
