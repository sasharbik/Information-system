<?php
try
	{
	$result=$pdo->query($sql);
	}
catch(PDOexception $e)
	{
	$output='Ошибка при извлечении данных'.$e->getMessage();
	include '../includes/err_output.php';
	exit();
	}
?>