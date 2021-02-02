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
		header('Location: ../request_n/cl_req1.php');
		exit();
	}
	if (isset($_GET['req2']))
	{
		header('Location: ../request_n/cl_req2.php');
		exit();
	}
	if (isset($_GET['req3']))
	{
		header('Location: ../request_n/cl_req3.php');
		exit();
	}
	include 'cl_requests.html';
	exit();
?>