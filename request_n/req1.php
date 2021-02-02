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
		include 'zapros1.html';
		exit();
	}
	$d1=$_POST['date1'];
	$d2=$_POST['date2'];
	$sql="SELECT Service_number, Name, Count(*)
		FROM on_off_service join paid_services using(service_number)
		where year(date_on)='$d1' and month(date_on)='$d2'
		group by service_number";
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'otchet1.php';
	exit();
?>