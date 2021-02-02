<?php
	session_start();
?>
<html>
	<head>
		<title>Результат запроса 2</title>
		<style type="text/css">
		.button
		{
			cursor:	pointer;
			background: #FFA07A;
			border: 1px solid #C0C0C0;
			border-radius: 5px;
			text-align: center;
			height: 50px;
			width: 200px;
			margin-top: 5px;
		}
		.button:hover {background: #FF4500;}
		.headline
		{
			text-align: center;
			font-size: 30px;
			font-weight: bold;
		}
	</style>
	</head>
	<body style="background: #FFFFF0;">
	<base target="_top">
		<div>
			<center>
				<p class="headline">Самый молодой клиент компании</p>
				<table border=3>
					<tbody>
						<tr height=40px>
							<td align=center width=100px> <b>Фамилия</b> </td>
							<td align=center width=100px> <b>Дата рождения</b> </td>
							<td align=center width=100px> <b>Профессия</b> </td>
							<td align=center width=100px> <b>Дата заключения договора</b> </td>
							<td align=center width=100px> <b>Дата расторжения договора</b> </td>
						</tr>
					
						<tr height=40px>
							<td align=center width=100px> <?php echo $otchet['Surname'];?></td>
							<td align=center width=100px> <?php echo $otchet['Birthday'];?></td>
							<td align=center width=100px> <?php echo $otchet['Profession'];?></td>
							<td align=center width=100px> <?php echo $otchet['Date_enter'];?></td>
							<td align=center width=100px> <?php echo $otchet['Date_break'];?></td>
						</tr>

					</tbody>
				</table><br><br>
				<table border=0>
					<tbody>
						<tr height=60px>
							<td width=250px>
								<form  align=center action="../mainmenu/mainmenu2.html">
									<input class="button" type=submit value='Главное меню'>
								</form>
							</td>
							<td width=250px>
								<form  align=center action="" method="post">
									<input class="button" type=submit value='Выйти из системы' name=out>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</center>
		</div>
	</body>
<?php
	exit();
?>
</html>