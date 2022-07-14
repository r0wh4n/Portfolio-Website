<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "login_register";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>