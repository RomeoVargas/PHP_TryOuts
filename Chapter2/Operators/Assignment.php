<h1>Assignment Operator</h1>
<hr>
<?php
function say($romz){
	echo $romz . "<br/>";
}
$num = 7;
	say("\$num += 7 is " . $num += 7); // $num = $num + 7
	say("\$num -= 7 is " . $num -= 7); // $num = $num - 7
	say("\$num /= 7 is " . $num /= 7); // $num = $num / 7
	say("\$num *= 7 is " . $num *= 7); // $num = $num * 7
	say("\$num %= 7 is " . $num %= 7); // $num = $num % 7
	say("\$num ^= 7 is " . $num ^= 7); // $num = $num ^ 7
	say("\$num &= 7 is " . $num &= 7); // $num = $num & 7
	say("\$num |= 7 is " . $num |= 7); // $num = $num | 7
	say("\$num .= 7 is " . $num .= 7); // $num = $num . 7
?>
