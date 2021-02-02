<?php
	session_start();
?>
<html>
	<head>
		<title>Результат запроса 5</title>
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
				<p class="headline">Услуги, которые еще не были подключены ни одним абонентом.</p>
				<table border=3>
					<tbody>
						<tr height=40px>
							<td align=center width=100px> <b>Название услуги</b> </td>
						</tr>
						<?php foreach($otchets as $otchet):?>
						<tr height=40px>
							<td align=center width=100px> <?php echo $otchet['Name'];?></td>
						</tr>
						<?php endforeach ?>
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