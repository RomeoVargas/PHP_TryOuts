<h1>Operators</h1>
<hr>
<h3>Operator Precedence</h3>
<?php
	function echothis($what){
		echo "{$what} <br/>";
	}
	echothis (1 + 2 * 3);
	echothis (3 + 4 / 2 * 4 - 3);
	echothis ((1 + 3) / 4 * 3);
?>
<hr/>
<h3>Implicit Casting</h3>
<?php
	echothis(4 . 3.7);
	echothis("10 bands" - 3);
	echothis("1.154 something" + 4);
	echothis("100 spartans." / 4);
	echothis("5E2 Phone home" * 3);
?>
<hr/>
<h3>Auto-increment and Auto-decrement Operators</h3>
<?php
	$num = 7;
	echothis("The original number is {$num}");
	echothis("The Post-increment number is " . $num++);
	$num = 7;
	echothis("The Pre-increment number is " . ++$num);
	$num = 7;
	echothis("The Post-decrement number is " . $num--);
	$num = 7;
	echothis("The Pre-decrement number is " . --$num);

	$stringChars = array("a", "z", "rzz", "R9", "AA", "ZZ");	
?>
<table border=1>
	<tr>
		<th>Original String</th>
		<th>Post-increment</th>
		<th>Pre-increment</th>
		<th>Post-decrement</th>
		<th>Pre-decrement</th>
	</tr>
<?php
	foreach ($stringChars as $rec){
		echo "	<tr>
				<td>{$rec}</td>
				<td>" . $rec++ . "</td>
				<td>" . ++$rec . "</td>
				<td>" . $rec-- . "</td>
				<td>" . --$rec . "</td>
			</tr> ";
	} 
?>
</table>
<hr/>














