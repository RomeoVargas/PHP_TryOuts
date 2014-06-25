<?php
	function say($what){
		echo $what . "<br/>";
	}
?>
<html>
	<head>
		<title>Romz Forms</title>
		<style>
			body{
				backgound-color:blue;				
			}
		</style>
	</head>
	<body>
		<form method='post' action='form_handler.php' enctype='multipart/form-data'>
			<input type='text' name='name' placeholder='Enter a name'
			value='<?= (isset($_POST['name'])) ?
				$_POST['name'] : ""; ?>'>
			<input type='hidden' name='form_page'
			value='<?= $_SERVER['PHP_SELF'] ?>'>
			<input type='submit'>
		</form>
		<?php

			$name = (isset($_GET['name'])) ?
				$_GET['name'] : "";
			switch ($name){
				case 'empt_name':
					$msg = "Please enter a name in the textbox";
					break;
				case '':
					$msg = "";
					break;
				default:
					$msg = "The name you entered is {$name}<br/>
					In the URL it is encoded <b>" . rawurlencode($name) ."</b><br/>
					In a query it is encoded <b>" . urlencode($name) ."</b>";
					break;
			}
			say($msg);

		?>
	</body>
</html>