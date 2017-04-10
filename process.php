<?php

$status = "";

if (isset($_POST['subject'])
	&& isset($_POST['name'])
	&& isset($_POST['email'])
	&& isset($_POST['message'])) {

	include('includes/mysql.php');

	$query = "INSERT INTO Contact (Subject, Name, Email, Message) VALUES (?,?,?,?)";
	$insert = $mysqli->prepare($query);
	$insert->bind_param("ssss", $_POST['subject'],
		$_POST['name'], $_POST['email'], $_POST['message']);

	if ($insert->execute()) {
		$status = "?submitted";
	} else {
		$status = "?error=".$insert->error;
	}
	
	$insert->close();
	
	include('includes/mysql_deinit.php');
}

header('location: contact.php'.$status);
