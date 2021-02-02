<?php
	try
	{
		$sql='Insert into Client set
		Surname=:edit_surname, Birthday=:edit_birthday, Profession=:edit_profession, Date_enter=:edit_entdate, Date_break=:edit_brdate';
		$s=$pdo->prepare($sql);
		$s->bindValue(':edit_surname', $_POST['edit_surname']);
		$s->bindValue(':edit_birthday', $_POST['edit_birthday']);
		$s->bindValue(':edit_profession', $_POST['edit_profession']);
		$s->bindValue(':edit_entdate', $_POST['edit_entdate']);
		$s->bindValue(':edit_brdate', $_POST['edit_brdate']);
		$s->execute();
	}
	catch(PDOexception $e)
	{
		$output='Ошибка при добавлении клиента'.$e->getMessage();
		include '../includes/err_output.php';
		exit();
	}
?>