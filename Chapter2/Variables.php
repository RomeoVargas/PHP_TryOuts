<?php
echo "<h1>Variables</h1>";
	echo "<hr>
	<h3>Valid Variable Names</h3>";
	$small = "These";
	$Proper = "are";
	$_score = "valid";
	$ALL_CAPS = "Variable names";
	echo "$small $Proper $_score $ALL_CAPS <br/>";
/////////////////////////////////////////////////////////////////////////
	echo "<hr>
	<h3>Variable Variables</h3>";
	$a = "Romz";
	$$a = "made this";
	echo "$a $Romz <br/>";
/////////////////////////////////////////////////////////////////////////
	echo "<hr>
	<h3>Variable References</h3>";
	$b =& $a; // creates an $b variable which is an alias of the $a variable
	$a .= " Vargas"; // appends or adds text to the $a variable
	echo "\$a is $a <br/>";
	echo "\$b is $b <br/>";

	$a = "Changed it now";
	$b = "Romz $b";
	echo "\$a is $a <br/>";
	echo "\$b is $b <br/>";
	unset($b); // unsets the alias
	echo $b; // this returns to an error because now there is no $b variable
/////////////////////////////////////////////////////////////////////////
	echo "<hr>
	<h3>LOCAL Variable Scope</h3>";
	$c = "A text<br/>";
	echo $c; // this is a GLOBAL variable
	function sampleFunc(){
		echo $c; // this returns an error because it cannot read GLOBAL variables
		$c = "Changed text";
	}
	sampleFunc();
	echo $c; // prints out $c outside the function
/////////////////////////////////////////////////////////////////////////
	echo "<hr>
	<h3>GLOBAL Variable Scope</h3>";
	function sampleFunc2(){
		global $c; // initialize the GLOBAL variable $c
		echo $c; // echoes the GLOBAL variable $c
		$c = "Changed text <br/>"; // changes the value of $c
	}
	sampleFunc2();
	echo $c;
/////////////////////////////////////////////////////////////////////////
	echo "<hr>
	<h3>STATIC Variable Scope</h3>";
	$num = 7;
	function changeNum(){
		static $num;
		$num++;
		echo "Static \$num is now $num<br/>";
	}
	echo $num . "<br/>";
	changeNum();

?>
