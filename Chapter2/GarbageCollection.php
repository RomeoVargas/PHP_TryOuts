<h1>Garbage Collection</h1>
<hr>
<?php
$arr1 = array (0,1,2,3); // creates an array of integers
$arr2 = $arr1; // creates a variable that points to the same chunk of memory that $arr1 is pointing

echo "\$arr1 is ";print_r($arr1);
echo "<br/>";
echo "\$arr2 is ";print_r($arr2);
echo "<br/>";

echo "<br/>";
$arr1[0]=1;
$arr1[1]=2;
$arr1[2]=3;
$arr1[3]=4;
echo "<br/>";
//since changes are made to $arr1 the array with no changes is now copied
echo "\$arr1 is ";print_r($arr1);
echo "<br/>";
echo "\$arr2 is ";print_r($arr2);
echo "<br/>";

echo "<br/>";
unset($arr1); // unset or remove $arr1's value

// isset() checks if a variable has a value or not
if(isset($arr2)){
	echo "\$arr2 is set to ";print_r($arr2);
}else{
	echo "\$arr2 is not set to anything";
}
echo "<br/>";

if(isset($arr1)){
	echo "\$arr1 is set to ";print_r($arr2);
}else{
	echo "\$arr1 is not set to anything";
}
?>
