<?php
	try
	{
		$del=$_POST['cl_id'];
		$sql='Delete from Client where Contract_number=:cl_id';
		$s=$pdo->prepare($sql);
		$s->bindValue(':cl_id', $del);
		$s->execute();
	}
	catch(PDOexception $e)
	{
		$output='Ошибка при удалении клиента'.$e->getMessage();
		include '../includes/output.php';
		exit();
	}
?>