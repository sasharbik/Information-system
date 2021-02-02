<?php
if (!isset($_SESSION['Gr1']))
{
	try
	{
		$dbname='mobile_service';
		$login='checker';
		$password='checker123';
		$pdo=new PDO("mysql:host=Localhost; dbname=$dbname", $login, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$output='kek'.$e->getMessage();
		include 'err_output.php';
		exit();
	}
	catch(PDOexception $e)
	{
		$output='Невозможно подключиться к серверу БД'.$e->getMessage();
		include 'err_output.php';
		exit();
	}
}
else
{
	try
	{
		$dbname='mobile_service';
		$login=$_SESSION['Gr1'];
		$password=$_SESSION['Pas1'];
		$pdo=new PDO("mysql:host=Localhost; dbname=$dbname", $login, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOexception $e)
	{
		$output='Невозможно подключиться к серверу БД'.$e->getMessage();
		include 'err_output.php';
		exit();
	}
}/*try
	{
		$dbname='mobile_service';
		$login='checker';
		$password='checker123';
		$pdo=new PDO("mysql:host=Localhost; dbname=$dbname", $login, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOexception $e)
	{
		$output='Невозможно подключиться к серверу БД'.$e->getMessage();
		include 'err_output.php';
		exit();
	}*/

?>