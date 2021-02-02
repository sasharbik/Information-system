<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	include '../includes/dbconnect.php';
	if (isset($_GET['req1']))
	{
		header('Location: ../request_n/req1.php');
		exit();
	}
	if (isset($_GET['req2']))
	{
		header('Location: ../request_n/req2.php');
		exit();
	}
	if (isset($_GET['req3']))
	{
		header('Location: ../request_n/req3.php');
		exit();
	}
	if (isset($_GET['req4']))
	{
		header('Location: ../request_n/req4.php');
		exit();
	}
	if (isset($_GET['req5']))
	{
		header('Location: ../request_n/req5.php');
		exit();
	}
	include 'requests.html';
	exit();
?>