<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	include '../includes/dbconnect.php';
	if (!isset($_POST['send']))
	{
		include 'cl_zapros3.html';
		exit();
	}
	$number=$_POST['num'];
	$sql="SELECT Name
		FROM Paid_services join on_off_service using(Service_number) join Subscriber using(IMSI)
		where Phone_number='$number' and Date_off is NULL";
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'cl_otchet3.php';
	exit();
?>