<h1>Arrays</h1>
<hr/>
	<h3>Indexed Arrays</h3>
<?php
function say($what = NULL){
	echo $what . "<br/>";
}
	$indexed1 = array ("Romz</br>", "Tan</br>", "Keith</br>", "Lemuel</br>");
	$indexed2 = array ("PHP</br>", "PHP</br>", "IOS</br>", "Android</br>");
	$associative = array(
			'name' => $indexed1,
			'specialization' => $indexed2
		);
	print_r($indexed1);
	say();
	print_r($indexed2);
/////////////////////////////////////////////////////////
	echo "<hr><h3>Associative Arrays</h3>";
	print_r($associative);
/////////////////////////////////////////////////////////
	echo "<hr><h3>Identifying Elements of an Array</h3>";
	define('web',1);
	$field1 = "special";
	say($associative["{$field1}ization"][web]);
////////////////////////////////////////////////////////
	echo "<hr><h3>Storing Data in Arrays</h3>";
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['Address']='Mandaluyong'; // creates an Address key having 'Mandaluyong' as its value
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['Address']='Cavite'; // overlaps the value inside Address key
	say();
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['Address'][0]='Mandaluyong'; // does not create a 2d array
	$associative['Address'][1]='Cavite'; // instead just joins with whatever is inside Address
	say();
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['Address'] = array('Mandaluyong','Cavite'); // creates a 2d array
	say();
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['EmpID'] = range(0,3); // creates a EmpID key with an array of values 0,1,2,3
	say();
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['EmpID'] = range('a', 'd'); // values a,b,c,d
	say();
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['EmpID'] = range(3,0); // values 3,2,1,0
	say();
	print_r($associative);
	say();
/*---------------------------------------------------------------------------------------------------------------*/	
	$associative['EmpID'] = range('aaa', 'ddd'); // values a,b,c,d same as range('a', 'd');
	say();
	print_r($associative);
	say();
////////////////////////////////////////////////////////
	echo "<hr><h3>Getting the Size of Arrays</h3>";
	// count function only counts the keys which determines the size, this is not appropriate for associative arrays
	say("The size of the associative array (\$associative) is " . count($associative)); 
	say("The size of the indexed array (\$indexed1) is " . count($indexed1)); 
////////////////////////////////////////////////////////
	echo "<hr><h3>Padding an Array</h3>";
	$padthis = array("Romz","Vargas");	
	say("The array_pad(\$padthis,5,0) of <b>");	// adds 0s in the right
	print_r($padthis);
	echo "</b> is: <br/>";		
	print_r(array_pad($padthis,5,0));
	say("<br/>");

	say("The array_pad(\$padthis,-5,0) of <b>"); // adds 0 in the left
	print_r($padthis);
	echo "</b> is: <br/>";		
	print_r(array_pad($padthis,-5,0));
////////////////////////////////////////////////////////
	echo "<hr><h3>Extracting Multiple Values</h3>";
	say("The array is : ");
	print_r($padthis);
	say("<br/>");
	list($fname,$lname) = $padthis;	// puts the values of $padthis inside $fname and $lname
	say("Now \$fname is $fname");
	say("and \$lname is $lname");
////////////////////////////////////////////////////////
	echo "<hr><h3>Slicing an Array</h3>";
	list($romz,$tan) = array_slice($indexed1,0,2); // array slice cuts the array from index 0, 2 keys forward
	say("Trainees under PHP Specialization are:");
	preg_match('/(\w*)/',$romz,$romzname);
	preg_match('/(\w*)/',$tan,$tanname);
	say($romzname[1]);
	say($tanname[1]);
////////////////////////////////////////////////////////
	echo "<hr><h3>Splitting an Array into Chunks</h3>";
	print_r(array_chunk($padthis,1)); // array_chunk turns an array into a multidimensional array 
////////////////////////////////////////////////////////
	echo "<hr><h3>Keys and Values</h3>";
	print_r(array_keys($associative)); // array_keys returns only the keys
	say();
	print_r(array_values($associative)); // array_values returns only the values
	say();
	if(array_key_exists('specialization', $associative)){	// checks if a key exists
		say ("specialization key exists in the \$associative array");
	}
	if(isset($associative['specialization'])){	// checks if a key is set
		say ("specialization key exists in the \$associative array");
	}
////////////////////////////////////////////////////////
	echo "<hr><h3>Removing and Inserting Elements in an Array</h3>";
	$array1 = array("isa","dalawa","tatlo","apat");
	$array2 = array("lima","anim","pito");
	$newArray = array();
	$removed_pt1 = array_splice($array1,2,2);

	print_r($removed_pt1);
	say();print_r($array1);say();

	$removed_pt2 = array_splice($array2,1);

	print_r($removed_pt2);
	say();print_r($array2);

	array_splice($array1,2,0,$removed_pt1);
	say();print_r($array1);

	array_splice($array2,1,0,$removed_pt2);
	say();print_r($array2);

	array_splice($newArray,0,0,$array2);
	array_splice($newArray,0,0,$array1);
	say();print_r($newArray);

	$assoc1 = array('name' => 'Romz', 'specialization' => 'PHP');
	$assoc2 = array('address' => 'Mandaluyong', 'age' => '20');
	say();print_r($assoc1);say();print_r($assoc2);
	array_splice($assoc1,2,0,$assoc2); // $assoc2 is turned into an indexed array
	say();print_r($assoc1);
////////////////////////////////////////////////////////
	echo "<hr><h3>Converting Between Arrays and Variables</h3>";
	extract($assoc2); // turned the keys into variables
	print_r($assoc2); // extracted only but still set
	say("<br/>Address : $address");
	say("Age: $age");
	$assoc3 = compact("address","age"); // turned variables into keys
	print_r($assoc3);
////////////////////////////////////////////////////////
	echo "<hr><h3>Traversing Arrays</h3>";
	// USING THE FOREACH CONSTRUCT
	foreach($associative as $key => $value){	
		say("The key {$key} has a value of: ");
			foreach($value as $indexedVal){
				say("&nbsp&nbsp&nbsp&nbsp$indexedVal");
			}
	}
	// USING THE ITERATOR FUNCTIONS
	reset($associative);
	while(list($key,$value) = each($associative)){	
		say("The key {$key} has a value of: ");
			while(list($innerkey,$innervalue) = each($value)){
				say("&nbsp&nbsp&nbsp&nbsp$innervalue");
			}
	}
	// USING FOR LOOP
	$size1 = count($indexed1);
	for($i = 0; $i < $size1 ; $i++){	// this is used only for indexed arrays
		$value = $indexed1[$i];
		say($indexed1[$i]);
	}
	// Calling a Function for Each Array Element
	function PrintEachElement ($value, $key, $added){
		say("The key {$key} has a value of: ");
			foreach($value as $indexedVal){
				say("$added $indexedVal");
			}
		}
	array_walk($associative, "PrintEachElement" , "&nbsp&nbsp&nbsp&nbsp");
////////////////////////////////////////////////////////
	echo "<hr><h3>Searching for Values</h3>";
	foreach($associative as $key => $value){	
		$keysOfVal = array_keys($value);
		$ValuesOfVal = array_values($value);
			if(in_array("Romz<br/>", $keysOfVal)){ // searches for a value Romz<br/> for every key
				say("Romz is here");
				$whatkey = array_search("Romz<br/>", $keysOfVal); // searches for a value and returns its key
				say ("found at {$whatkey}");
			}
			if(in_array(0, $ValuesOfVal)){ // searches for a key 0 for every value
				say("Romz is not here");
			}
	}
	$whereis = array_search($indexed1,$associative);
	say("The array \$indexed1 is in " . $whereis . " of \$associative");
////////////////////////////////////////////////////////
	echo "<hr><h3>Sorting</h3>";
	function userSort($a, $b){}


	sort($indexed1);	// sort by values ascending and reassigns its indices
	print_r($indexed1);say();

	rsort($indexed1);	// sort by descending and reassigns its indices
	print_r($indexed1);say();

	usort($indexed1, 'userSort');	// user-defined sorting and reassigns its indices
	print_r($indexed1);say();

	asort($indexed1);	// sort array by values ascending
	print_r($indexed1);say();

	arsort($indexed1);	// sort by values descending
	print_r($indexed1);say();

	uasort($indexed1, 'userSort');	// sort by values user-defined
	print_r($indexed1);say();

	ksort($indexed1);	// sort by keys ascending
	print_r($indexed1);say();

	krsort($indexed1);	// sort by keys descending
	print_r($indexed1);say();

	uksort($indexed1, 'userSort');	// sort by keys user-defined
	print_r($indexed1);say();

	natsort($indexed1);	// natural sort includes all alphanumeric characters
	print_r($indexed1);say();

	natcasesort($indexed1);	// case sensitive natural sort
	print_r($indexed1);say();

	array_multisort($indexed1,SORT_ASC,$indexed2,SORT_DESC); // sorts multiple arrays
	for ($i = 0; $i < count($indexed1); $i++) {
	say("{$indexed1[$i]}^{$indexed2[$i]}");
	}

	echo "Original was: ";
	print_r($indexed1);
	echo "<br/> Reversed is: ";
	print_r(array_reverse($indexed1));
	echo "<br/> Flipped is: ";
	print_r(array_flip($indexed1));
	echo "<br/> Shuffled is: ";
	shuffle($indexed1);
	print_r($indexed1);
////////////////////////////////////////////////////////
	echo "<hr><h3>Acting on Entire Arrays</h3>";
	function isODD($value){
		return $value % 2;	// if 1 it returns to true and 0 for false
	}
	$assoc1 = array('name' => 'Romz', 'specialization' => 'PHP');
	$assoc2 = array('name' => 'Mandaluyong', 'age' => '20');
	print_r(array_merge($assoc1,$assoc2));	// merged $assoc1 and $assoc2, if there are values that have the same keys, the 2nd param overlaps the 1st's value
	say();
	$numArray1 = range(1,15);
	$numArray2 = range(11,20);
	say("The sum of values in \$numArray1 is " . array_sum($numArray1));
	say("The sum of values in \$numArray2 is " . array_sum($numArray2));
	print_r(array_diff($assoc1,$assoc2));	// shows what the 2 arrays do not have in common
	say();say();
	say("The ODD numbers in 1-10 are: ");
	print_r(array_filter($numArray1, 'isODD')); // filters an array using a function called in the 2nd param
	say();
////////////////////////////////////////////////////////
	echo "<hr><h3>UNION of Arrays</h3>";
	$union = array_merge($assoc1,$assoc2,$numArray1,$numArray2);
	say("The array_merge(\$assoc1,\$assoc2,\$numArray1,\$numArray2) is: ");
	print_r($union); 
	say();say();

	$union = array_unique($union);
	say("The array_unique of \$union is: ");
	
	print_r($union);
?>