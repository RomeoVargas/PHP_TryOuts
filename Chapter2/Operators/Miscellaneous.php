<h1>Miscellaneous Operators</h1>
<hr>
<?php
function say($romz){
	echo $romz . "<br/>";
}
	say("<h3>Execution Operator (`...`)</h3>");
	say(`ls` . "<hr/>");

	say("<h3>Conditional Operator ( ?  : )</h3>");
	say(("1" === 1) 
	? "\"1\" === 1 is TRUE" 
	: "\"1\" === 1 is FALSE");
?>
