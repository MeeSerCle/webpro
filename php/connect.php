<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "workout";

$cn = mysqli_connect($servername,$username,$password);
$result = mysqli_select_db($cn,$dbname);
if(!$result)
	echo "fail to connect db";
?>
