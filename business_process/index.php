<?php
	session_start();
	if (isset($_POST['out']))
	{
		$output="До новых встреч";
		include '../includes/output.php';
		exit();
	}
	include '../includes/dbconnect.php';
	if (isset($_GET['Add']))
	{
		include 'add_client.html';
		exit();
	}
	
	if (isset($_POST['send']))
	{
		include 'insert.php';
	}
	if (isset($_POST['delete']))
	{
		include 'delete.php';
	}
	if (isset($_POST['edit']))
	{
		$upd=$_POST['cl_id'];
		$sur=$_POST['edit1_surname'];
		$birth=$_POST['edit1_birthday'];
		$prof=$_POST['edit1_profession'];
		$entdate=$_POST['edit1_entdate'];
		$brdate=$_POST['edit1_brdate'];
		$sql="Update mobile_service.Client set Surname=:edit1_surname, Birthday=:edit1_birthday, 
			Profession=:edit1_profession, Date_enter=:edit1_entdate, Date_break=:edit1_brtdate
			where Contract_number='$upd'";
		$s=$pdo->prepare($sql);
		$s->bindValue(':edit1_surname', $sur);
		$s->bindValue(':edit1_birthday', $birth);
		$s->bindValue(':edit1_profession', $prof);
		$s->bindValue(':edit1_entdate', $entdate);
		$s->bindValue(':edit1_brtdate', $brdate);
		$s->execute();
	}
	$sql="Select Contract_number, Surname, Birthday, Profession, Date_enter, Date_break from Client";
	include '../includes/select1.php';
	$numb=$result->rowcount();
	$edit_clients=$result->fetchAll();
	include 'edit_form.php';
	exit();
?>