<?php
$mysqli = new mysqli('localhost', '1520', 'Pitt2174', '1520');

if ($mysqli->connect_errno) {
	echo "Failed to access database<br />".$mysqli->connect_error;
	exit;
}

