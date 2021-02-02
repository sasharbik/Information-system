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
		include 'zapros5.html';
		exit();
	}
	$d1=$_POST['date1'];
	$d2=$_POST['date2'];
	$sql="	SELECT Phone_number
			FROM subscriber left join (select*
										from on_off_service
										where year(date_on)=$d1 and month(date_on)=$d2) A2017
			using (imsi)
			where A2017.imsi is null";
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'otchet5.php';
	exit();
?>