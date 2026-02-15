<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "mysql_functions_db.sql";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>