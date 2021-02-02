<?php
	session_start();
?>
<html>
<head>
	<title>Результат процедуры</title>
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
		<div>
			<center>
				<p class="headline">Отчет о выполнении процедуры:</p>
				<table border=3>
					<tbody>
						<tr>
							<td align=center> <b>H_id</b> </td>
							<td align=center> <b>Reason</b> </td>
							<td align=center> <b>Old_balance</b> </td>
							<td align=center> <b>New_balance</b> </td>
							<td align=center> <b>Time_newbalance</b> </td>
							<td align=center> <b>Date_newbalance</b> </td>
							<td align=center> <b>IMSI</b> </td>
						</tr>
						<?php foreach($otchets as $otchet):?>
						<tr>
							<td align=center> <?php echo $otchet['H_id'];?></td>
							<td align=center> <?php echo $otchet['Reason'];?></td>
							<td align=center> <?php echo $otchet['Old_balance'];?></td>
							<td align=center> <?php echo $otchet['New_balance'];?></td>
							<td align=center> <?php echo $otchet['Time_newbalance'];?></td>
							<td align=center> <?php echo $otchet['Date_newbalance'];?></td>
							<td align=center> <?php echo $otchet['IMSI'];?></td>
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