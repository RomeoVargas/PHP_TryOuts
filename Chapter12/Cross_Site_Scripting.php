<?php

echo "<center>";
	$html = array();
	$mysql = array();
	$input = $_POST['input1'];
	if(!empty($input)){
		// for html character escape / encoding
		echo "<h1>Cross-Site Scripting</h1>";
		$html['input'] = htmlentities($input, ENT_QUOTES, 'UTF-8');
		echo $html['input'];

		// for SQL Injection protection
		echo "<h1>SQL Injection</h1>";
		// escapes data and interpreted as data
		$mysql['input'] = mysql_real_escape_string($input);

			$db = new PDO ("mysql:host=localhost;dbname=try","root","2966231512");
			$sql = $db->prepare("SELECT * FROM try WHERE NAME = :Name");
			$sql->bindParam(":Name",$mysql['input'],PDO::PARAM_STR,32);
			$sql->execute();
			if(count($sql->fetch())==0){

			}else{
				die("<h1 style='color:red'>NOT FOUND</h1>");
			}
			while ($row = $sql->fetch()){
				echo "<br/>FOUND " . $row['NAME'];
			}

	}else{
		die("<h1>Please enter an input</h1>");
	}
?>