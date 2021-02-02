<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	if ($_SESSION['Gr1']=="client")
	{
		include 'mainmenu1.html';
		exit();
	}
	if ($_SESSION['Gr1']=="techworker")
	{
		include 'mainmenu2.html';
		exit();
	}
	if ($_SESSION['Gr1']=="admin")
	{	
		include 'mainmenu3.html';
		exit();
	}	
?>