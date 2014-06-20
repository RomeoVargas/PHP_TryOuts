<?php
echo "<h1>Data Types and NULL</h1>";
echo "<hr/>";

function echothis($something){
	echo $something . "<br/>";
}

////////INTEGERS///////////
	echo "<h2>Integers</h2>";
	echothis(1998);	// a literal integer
	echothis(-641);	// a negative integer
	echothis(+33);	// a positive integer
	echothis(0755);	// octal number starts with a 0 and is converted to integer as an output
	echothis(+010);	// octal number with a positive sign
	echothis(0xFF);	// hexadecimals starts with 0x and is also converted to integer as an output
	echothis(0x10);	// another hexadecimal
	echothis(-0xDAD1); // a hexadecimal with a negative sign
	
	// is_int() checks if the argument given is an int
		if(is_int(1998)){
			echothis ("<u>These are all strings</u>");
		}

echo "<hr/>";
////////FLOATS///////////
	$pi = 3.14;	
	$pi2 = 0.314E1;
	echo "<h2>Floating-Point Numbers</h2>";
	echothis($pi);
	echothis(0.07);		// regular floating point number
	echothis(-7.7);
	echothis($pi2);
	echothis(70.0E-3);	// floating point number in scientific notation
	
	// the intval function returns the integer value of a variable
		if(intval($pi * 1000) == intval($pi2 * 1000)){
			echothis ("<b>{$pi} and {$pi2} are equal to three 
			decimal places </b>");
		}
	
	// the is_float() checks if the argument given is a float
		if(is_float($pi)){
			echothis ("<u>These are all floating-point numbers</u>");
		}

echo "<hr/>";
////////STRINGS///////////
	$a = "Interpolated word";
	$b = 'another word';
	echo "<h2>Strings</h2>";
	echothis('Single quoted strings');
	echothis('Single quoted strings with $a'); // single quotes doesn't support interpolation
	echothis('Single quoted strings with \\ and \''); // single quotes recognize \\ for a backslash and \' for a single quote
	echothis("Double quoted strings");
	echothis("Double quoted strings with $a"); // double quotes support interpolation
	echothis("Double quoted strings with \""); // literal double quotes
	echothis("Double quoted strings with \n"); // a newline though not seen in the output it is seen in the command line
	echothis("Double quoted strings with \r"); // a carriage return still not seen
	echothis("Double quoted strings with \t"); // a tab and not seen again
	echothis("Double quoted strings with \\"); // a literal backslash
	echothis("Double quoted strings with \$"); // a literal dollar sign
	echothis("Double quoted strings with \077"); // ASCII character represented by octal value
	echothis("Double quoted strings with \xFF"); // ASCII character represented by hexadecimal value
	
	// checks if two strings are the same
	if($a == $b){
		echothis("<b>\"$a\" and \"$b\" are the same</b>");
	}else{
		echothis("<b>\"$a\" and \"$b\" are not the same</b>");	
	}
	
	// the is_string() checks if a value is a string
	if(is_string($a)){
		echothis("<u>These are all strings</u>");
	}

echo "<hr/>";
////////BOOLEANS///////////

	echo "<h2>Booleans</h2>";
	// the following evaluates to FALSE or FALSE VALUE
	echothis(false);
	echothis(0);
	echothis(0.0);
	echothis("");
	echothis(array());
	echothis(null);
	// the following evaluates to TRUE or TRUE VALUE
	echothis(true);	
	echothis(1);
	
	// the is_bool() checks if a value is a boolean
	if(is_bool(true)){
		echothis("<u>These are all booleans</u>");
	}

echo "<hr/>";
////////ARRAYS///////////

	echo "<h2>Arrays</h2>";
	$arr1 = array ("This", "is", "a", "Typical Array");
	$arr2 = array (	'Part1' => "This is",
			'Part2' => "an",
			'Part3' => "Associative Array");
	echothis("{$arr1[0]} {$arr1[1]} {$arr1[2]} {$arr1[3]}");
	echothis("{$arr2['Part1']} {$arr2['Part2']} {$arr2['Part3']}");
		
	// the is_array() test whether a value is an array
	if(is_array($arr1)){
		echothis("<u>These are all arrays</u>");
	}	

echo "<hr/>";
////////NULL///////////

	echo "<h2>Null</h2>";
	$a = "has value";
	echothis("\$a = {$a}");
	$a = null; // $a's value is now gone
	echothis("Now \$a = {$a}");

	// is_null() checks whether a variable is NULL or has value
	if(is_null($a)){
		echothis("<u>\$a has no more value now</u>");
	}
?>
