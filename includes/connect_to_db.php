<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
	echo "Unable  to connect to database";

} else

//	echo "Connected to database!";
mysqli_select_db($conn, "saas_db");

?>