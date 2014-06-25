<?php
$lastpage = $_POST['form_page'];
$name = $_POST['name'];
	if(empty($name)){
		header("location: " . $lastpage . "?name=empt_name");	
	}else{
		header("location: " . $lastpage . "?name={$name}");		
	}
		
?>