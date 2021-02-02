<?php
	session_start();
?>
<html>
	<head>
		<style>
		body
		{
			background-color: rgba(1,1,1,0.9);
		}
		.button
		{
			cursor:	pointer;
			background: #FFA07A;
			border: 1px solid #C0C0C0;
			border-radius: 5px;
			padding: 6px 24px;
			width: 200px;
			height: 40px;
			position: relative;
			bottom: 0;
		}
		.button:hover {background: #FF4500;}
		#window
		{
			background: white;
			width: 400px;
			height: 230px;
			top: 10%;
			left: 35%;
			border-radius: 15px;
			padding-top: 20px;
			position: absolute;
			text-align: center;
			font-family: serif;
			font-size: 15px;
		}
				
		</style>
	</head>
	<body>
		<div id="window">
			<div>
		    <?php
				echo $output;
			?>
			</div>
			<br><br>
			<input class="button" type=button value='На главную' onclick="openwindow('../authorization/index.php')">
		</div>
		
		<script>
			function openwindow(path) 
			{	
				window.open(path, "_self");
			}
		</script>
	</body>
	<?php
		if (isset($_SESSION['Gr1']))
		{
			unset($_SESSION['Gr1']); 
			unset($_SESSION['Pas1']);
			unset($_SESSION['Authlogin']);
			session_destroy(); 
			exit();
		}
	?>
</html>
