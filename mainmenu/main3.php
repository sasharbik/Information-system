<?php
	session_start();
?>
<html>
	<head>
		<title>Приветствие для администратора</title>
		<style type="text/css">
			#layer1 
			{
				width: 560px;
				height: 380px;
				background: #FFFFF0;
				text-align: center;
				border-radius: 15px;
				padding: 10px;
				opacity: 0.7;
			}
			.button
			{
				cursor:	pointer;
				background: #FFA07A;
				border: 1px solid #C0C0C0;
				border-radius: 5px;
				text-align: center;
				height: 50px;
				width: 200px;
				position: absolute;
				bottom: 50px;
				left: 35%;
			}
			.button:hover {background: #FF4500;}
   </style>
	</head>
	<body>
		<font face="times new roman" size="+1">
		<center>
		
		<div id="layer1">
		<b>
			<?php
				$log1=$_SESSION['Authlogin'];
				echo "Здравствуйте, ".$log1."!";
			?>
			<br><br>
			Добро пожаловать в систему мобильного оператора "БауманЛайн"!<br><br><br>
			Вам, как администратору, доступно редактирование списка клиентов компании.<br><br>
			Чтобы найти необходимую Вам информацию, перейдите по ссылкам меню слева.<br><br>
		</b>
		<form  align=center action="index.php" method="post">
			<input class="button" type=submit value='Выйти из системы' name=out>
			<base target="_top">
		</form>
		</div>
		
		</center>
		</font>
	</body>
	<?php
		exit();
	?>
</html>	