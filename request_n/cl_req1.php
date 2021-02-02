<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	include '../includes/dbconnect.php';
	$log=$_SESSION['Authlogin'];
	$sql="SELECT Phone_number, Count(*)
		FROM Subscriber join Client using(Contract_number) join on_off_service using(IMSI)
		where Surname='$log' and (Date_off is NULL)
		group by Phone_number";
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'cl_otchet1.php';
	exit();
?>