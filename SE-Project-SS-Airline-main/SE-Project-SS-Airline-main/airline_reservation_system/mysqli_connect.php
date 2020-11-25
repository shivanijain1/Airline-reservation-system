<?php
DEFINE('DB_USER','shivani');
DEFINE('DB_PASSWORD','12345');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','spedia');

$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR dies('Could not connect to MySQL:' .
	mysqli_connect_error());
?>
