<?php
	session_start();
?>
<html>
	<head>
		<title> Исходная форма редактирования </title>
		<style>
		.buttonmin
			{
				cursor:	pointer;
				background: #FFA07A;
				border: 1px solid #C0C0C0;
				border-radius: 5px;
				text-align: center;
				height: 20px;
				width: 100px;
				margin-top: 10px;
			}
		.buttonmin:hover {background: #FF4500;}	
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
				<p class="headline">Список клиентов компании:</p>
				<p><a href="?Add">Добавить нового клиента</a></p>
				<table border=0>
					<tbody>
						<?php foreach($edit_clients as $edit_client):?>	
							<tr height=40px>
							<form action="?" method="post">
								<td align=center>
									<input type="hidden" name="cl_id" value=<?php echo $edit_client['Contract_number'];?>>
								</td>
								<td align=center width=100px><input type=text name="edit1_surname" value=<?php echo $edit_client['Surname'];?>></td>
								<td align=center width=150px><input type=date name="edit1_birthday" value=<?php echo $edit_client['Birthday'];?>></td>
								<td align=center width=100px><input type=text name="edit1_profession" value=<?php echo $edit_client['Profession'];?>></td>
								<td align=center width=150px><input type=date name="edit1_entdate" value=<?php echo $edit_client['Date_enter'];?>></td>
								<td align=center width=150px><input type=date name="edit1_brdate" value=<?php echo $edit_client['Date_break'];?>></td>
								<td align=center width=150px>
									<input class="buttonmin" type="submit" value="Редактировать" name="edit">
									<base target="_top">
								</td>
								<td align=center width=150px>
									<input class="buttonmin" type="submit" value="Удалить" name="delete">
								</td>
							</form>
							</tr>
						<?php endforeach;?>						
					</tbody>
				</table>
				<table border=0>
					<tbody>
						<tr height=60px>
							<td width=250px>
								<form  align=center action="../mainmenu/mainmenu3.html">
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
</html>