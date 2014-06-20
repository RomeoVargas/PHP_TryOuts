<h1>Casting Operators</h1>
<hr/>
<?php
	function say($what){
		echo $what . "<br/>";
	}
	$original = "10 tons of steel";
	$anArray = array('part1' => "this is a text",
			'part2' => "another text");
	$toInt = (int) $original; // converts string to int
	$toBool = (bool) $original; // converts string to boolean value
	$toFloat = (float) $original; // converts string to float
	$toArray = (array) $original; // converts string to an indexed array
	$toObject = (object) $anArray; // converts an associative array to an object
	say($original);
	say($toInt);
	say($toBool);
	say($toFloat);
	say($toArray);
	say($toObject->part1);
?>

