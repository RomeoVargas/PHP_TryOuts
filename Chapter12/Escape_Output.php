<?php
echo "<center>";
	$html = array();
	$url = array();
	$clean = array();
	$input = $_POST['input2'];
	// filter it first
	if(preg_match('/(^[a-zA-Z0-9])/',$input)){
		$clean['input'] = $input;
	}else if (empty($input)){
		die("<h1>Please enter an input</h1>");
	}else{
		die("<h1>The input passed is not acceptable</h1>");
	}
	// now Escape Output
	$html['input'] = htmlentities($clean['input']);
	$url['input'] = urlencode($clean['input']);

	echo "htmlentities of input is <h3>" 
		. $html['input'] . "</h3>";
	echo "urlencode of input is <h3>" 
		. $url['input'] . "</h3>";

?>