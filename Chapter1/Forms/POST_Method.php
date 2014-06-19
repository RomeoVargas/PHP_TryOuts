<html>
<head>
<title>Trying Out Forms via POST Method</title>
</head>
<body>
	<center>
		<h1>Trying Out Forms via POST Method</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Enter your name: <input type="text" name="name" />
		<input type="submit" />
		</form>
		<?php 
		if(!empty($_POST['name'])) 
			{
				echo "Greetings \"<b>{$_POST['name']}</b>\" and welcome.";
			} 
		?>
	</center>
</body>
</html>

