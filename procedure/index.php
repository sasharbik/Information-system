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
		include 'zaprosproc.html';
		exit();
	}
	$d1=$_POST['date1'];
	$sql="	SELECT *
			FROM History_of_balance_change
			where Date_newbalance='$d1'";
	include '../includes/select1.php';
	$numb=$result->rowcount();	
	if ($numb>0)
	{
		echo "Такой отчет уже существует<br><br><br>";
		$otchets=$result->fetchAll();
		
	}
	else
	{
		$pdo->exec("call balance('$d1')");
		$sql="SELECT *
			FROM History_of_balance_change
			where Date_newbalance='$d1'";

		try
		{
			$result=$pdo->query($sql);
		}
		catch (PDOException $e)
		{
			echo "Ошибка при выполнении селект-запроса".$e->getMessage();
			exit();
		}
		$otchets=$result->fetchAll(); 
	}
	include 'otchetproc.php';
	exit();
?>