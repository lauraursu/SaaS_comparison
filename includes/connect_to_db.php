<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
	echo "Unable  to connect to database";

} else

	echo "Connected to database!";
mysqli_select_db($conn, "saas_db");



$select1 = "select typeID from servicetype";
$res = mysqli_query($conn, $select1);
$row = mysqli_fetch_array($res);
echo $row['typeID'];
?>