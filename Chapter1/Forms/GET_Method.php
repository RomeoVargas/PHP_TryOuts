<html>
<head>
<title>Trying Out Forms via POST Method</title>
</head>
<body>
	<center>
		<h1>Trying Out Forms via GET Method</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
		Enter your name: <input type="text" name="name" />
		<input type="submit" />
		</form>
		<?php 
		if(!empty($_GET['name'])) 
			{
				echo "Now the value in your URL \"<u>{$_GET['name']}</u>\" 
				is shown here.";
			} 
		?>
	</center>
</body>
</html>

