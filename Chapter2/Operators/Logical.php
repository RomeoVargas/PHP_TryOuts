<h1>Logical Operators</h1>
<?php
$a = 6;
$b = 2;
$c = 6;
	function say($what){
		echo $what . "<br/>";
	}
	say("\$a=$a , \$b=$b, \$c=$c");
?>
<hr/>
	<h3>Logical AND (&&, and)</h3>
		<?php
			if(($a==$b) and ($a==$b) and ($a==$c)){
				say("($a==$b) AND 
				($a==$b) AND ($a==$c) is TRUE");
			}else{
				say("($a==$b) AND 
				($a==$b) AND ($a==$c) is FALSE");
			}
		?>
<hr/>
	<h3>Logical OR (||, or)</h3>
		<?php
			if(($a==$b) or ($a==$b) or ($a==$c)){
				say("($a==$b) OR 
				($a==$b) OR ($a==$c) is TRUE");
			}else{
				say("($a==$b) OR 
				($a==$b) OR ($a==$c) is FALSE");
			}
		?>
<hr/>
	<h3>Logical XOR (xor)</h3>
		<?php
			if(($a==$b) xor ($a==$b) xor ($a==$c)){
				say("($a==$b) XOR 
				($a==$b) XOR ($a==$c) is TRUE");
			}else{
				say("($a==$b) XOR 
				($a==$b) XOR ($a==$c) is FALSE");
			}
		?>
<hr/>
	<h3>Logical negation (!)</h3>
		<?php
			if(!($a==$b)){
				say("!($a==$b) is TRUE");
			}else{
				say("!($a==$b) is FALSE");
			}
		?>

