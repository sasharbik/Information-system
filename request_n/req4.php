<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	include '../includes/dbconnect.php';
	$sql="SELECT Name
			FROM paid_services left join on_off_service A1 using(service_number)
			where A1.Service_number is Null";
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'otchet4.php';
	exit();
?>