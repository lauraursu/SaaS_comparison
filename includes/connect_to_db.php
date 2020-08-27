<?php
// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!";


// $conn = mysqli_connect("localhost", "root", "");
// if (!$conn) {
// 	echo "Unable  to connect to database";

// } else

// //	echo "Connected to database!";
// mysqli_select_db($conn, "saas_db");

?>