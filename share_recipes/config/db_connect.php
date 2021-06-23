<?php

// connect to the database
$dbHost = 'sql4.freesqldatabase.com';
$dbName = 'sql4420916';
$dbUsername = 'sql4420916';
$dbPassword = 'SfQm61PiN7';
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// check connection
if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
