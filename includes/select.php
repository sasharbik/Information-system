<?php
try
	{
	$result=$pdo->query($sql);
	$prava=$result->fetch();
	$group=$prava['P_group']; 
	$pass=$prava['P_password'];  
	}
catch(PDOexception $e)
	{
	$output='Ошибка при извлечении данных'.$e->getMessage(); 
	include 'err_output.php';
	exit();
	}
?>
