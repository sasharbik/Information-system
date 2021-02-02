<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	include '../includes/dbconnect.php';
	$sql="Select Surname, Birthday, Profession, Date_enter, Date_break 
			FROM client
			where birthday=(select max(Birthday)
							from client)";
	include '../includes/select1.php';
	$otchet=$result->fetch();
	include 'otchet2.php';
	exit();
?>