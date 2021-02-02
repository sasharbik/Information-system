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
		include 'zapros3.html';
		exit();
	}
	$d1=$_POST['date1'];
	$d2=$_POST['date2'];
	if ($d2=='01' or $d2=='03' or $d2=='05' or $d2=='07' or $d2=='08' or $d2=='10' or $d2=='12')
	{
		$sql="SELECT Service_number, Name, sum((31-day(date_on))*pay_per_day) Profit
		from on_off_service join paid_services using(Service_number)
		where year(date_on)='$d1' and month(date_on)='$d2'
		group by Service_number";
	}
	if ($d2=='02')
	{
		$sql="SELECT Service_number, Name, sum((29-day(date_on))*pay_per_day) Profit
		from on_off_service join paid_services using(Service_number)
		where year(date_on)='$d1' and month(date_on)='$d2'
		group by Service_number";
	}
	if ($d2=='04' or $d2=='06' or $d2=='09' or $d2=='11')
	{
		$sql="SELECT Service_number, Name, sum((30-day(date_on))*pay_per_day) Profit
		from on_off_service join paid_services using(Service_number)
		where year(date_on)='$d1' and month(date_on)='$d2'
		group by Service_number";
	}
	include '../includes/select1.php';
	$otchets=$result->fetchAll();
	include 'otchet3.php';
	exit();
?>