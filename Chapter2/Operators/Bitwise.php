<h1>Bitwise Operators</h1>
<hr/>
<?php
	function echothis($what){
		echo $what . "<br/>";
	}
	$string1 = "Romz";
	$string2 = "vargas";
	$num1 = 0x70;
	$num2 = 0462;
/////////////////////////////////////////////////////////////////////
	echo "<h3>Bitwise Negation (~)</h3>";
	echothis("The original \$string1 is {$string1}");
	echothis("<b>The negated \$string1 is " . ~$string1 . "</b>");
	echo "<br/>";
	echothis("The original \$string2 is {$string2}");
	echothis("<b>The negated \$string2 is " . ~$string2 . "</b>");
	echo "<br/>";
	echothis("The original \$num1 is {$num1}");
	echothis("<b>The negated \$num1 is " . ~$num1 . "</b>");
	echo "<br/>";
	echothis("The original \$num2 is {$num2}");
	echothis("<b>The negated \$num2 is " . ~$num2 . "</b>");
///////////////////////////////////////////////////////////////////////
	echo "<hr/>";
	echo "<h3>Bitwise AND (&)</h3>";
	echothis("\$string1 is {$string1}");
	echothis("\$string2 is {$string2}");
	echothis("<b>Their Bitwise AND is " 
	. ($string1 & $string2) .
	"</b>");
	echo "<br/>";
	echothis("\$num1 is {$num1}");
	echothis("\$num2 is {$num2}");
	echothis("<b>Their Bitwise AND is " 
	. ($num1 & $num2) .
	"</b>");
//////////////////////////////////////////////////////////////////////
	echo "<hr/>";
	echo "<h3>Bitwise OR (|)</h3>";
	echothis("\$string1 is {$string1}");
	echothis("\$string2 is {$string2}");
	echothis("<b>Their Bitwise OR is " 
	. ($string1 | $string2) .
	"</b>");
	echo "<br/>";
	echothis("\$num1 is {$num1}");
	echothis("\$num2 is {$num2}");
	echothis("<b>Their Bitwise OR is " 
	. ($num1 | $num2) .
	"</b>");
///////////////////////////////////////////////////////////////////////	
	echo "<hr/>";
	echo "<h3>Bitwise XOR (^)</h3>";
	echothis("\$string1 is {$string1}");
	echothis("\$string2 is {$string2}");
	echothis("<b>Their Bitwise XOR is " 
	. ($string1 ^ $string2) .
	"</b>");
	echo "<br/>";
	echothis("\$num1 is {$num1}");
	echothis("\$num2 is {$num2}");
	echothis("<b>Their Bitwise XOR is " 
	. ($num1 ^ $num2) .
	"</b>");
///////////////////////////////////////////////////////////////////////	
	echo "<hr/>";
	echo "<h3>Left Shift (<<)</h3>";
	echothis("The original \$string1 is {$string1}");
	echothis("<b>Shifted by 1 \$string1 is " 
	. ($string1 << 1) . "</b>");
	echo "<br/>";
	echothis("The original \$string2 is {$string2}");
	echothis("<b>Shifted by 1 \$string2 is " 
	. ($string2 << 1) . "</b>");
	echo "<br/>";
	echothis("The original \$num1 is {$num1}");
	echothis("<b>Shifted by 1 \$num1 is " 
	. ($num1 << 1) . "</b>");
	echo "<br/>";
	echothis("The original \$num2 is {$num2}");
	echothis("<b>Shifted by 1 \$num2 is " 
	. ($num2 << 1) . "</b>");
/////////////////////////////////////////////////////////////////////
	echo "<hr/>";
	echo "<h3>Right Shift (>>)</h3>";
	echothis("The original \$string1 is {$string1}");
	echothis("<b>Shifted by 1 \$string1 is " 
	. ($string1 >> 1) . "</b>");
	echo "<br/>";
	echothis("The original \$string2 is {$string2}");
	echothis("<b>Shifted by 1 \$string2 is " 
	. ($string2 >> 1) . "</b>");
	echo "<br/>";
	echothis("The original \$num1 is {$num1}");
	echothis("<b>Shifted by 1 \$num1 is " 
	. ($num1 >> 1) . "</b>");
	echo "<br/>";
	echothis("The original \$num2 is {$num2}");
	echothis("<b>Shifted by 1 \$num2 is " 
	. ($num2 >> 1) . "</b>");
?>








