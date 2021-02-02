<?php
/*
	session_start(); 
	if (isset($_SESSION['Gr1']))
	{
		unset($_SESSION['Gr1']); 
		unset($_SESSION['Pas1']);
		unset($_SESSION['Authlogin']);
		session_destroy();
	}
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	if (!isset($_POST['send']))
	{
		include 'authorization.html';
		exit();
	}
	include '../includes/dbconnect.php';	
	$log=$_POST['pname'];
	$pas=$_POST['ppas'];
	$sql="Select P_group, P_password
		from Users
		where Login='$log' and Password='$pas'";
	include '../includes/select.php';
	
	$_SESSION['Gr1']=$group;
	$_SESSION['Pas1']=$pass;
	$_SESSION['Authlogin']=$log;
	header('Location: ../mainmenu/index.php');
	exit();
*/
	include 'new1.html';
	exit();
?>