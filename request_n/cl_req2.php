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
	$sql="SELECT Phone_number, Current_balance
		FROM Subscriber join Client using(Contract_number)
		where Surname='$log'";
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'cl_otchet2.php';
	exit();
?>