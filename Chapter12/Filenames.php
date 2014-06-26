<?php
echo "<center><h1>";
$input = $_POST['input3'];
$not_a_path = basename(realpath($input));
	if(!empty($input)){
		if($input !== $not_a_path){
			die("This is a path, stop it!");
		}else{
			echo "This is safe to use and is not a path";
		}
	}else{
		die("Please enter an input");
	}
echo "</h1>";
?>