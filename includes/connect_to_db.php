<?php

$hostname = getenv('hostname');
$username = getenv('username');
$password = getenv('password');
$database = getenv('database');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection was successfully established!";


?>