<?php
	echo "<h1>Functions</h1>";
	function say($what){ 	//defines a function named say()
		echo  $what . "<br/>";
	}
	$someValue = say("This is an argument passed"); // calls the say() function
	echo $someValue . "<hr/>";
/*-----------------------------------------------------------------------------------------*/
	echo("<h3>Nested Functions</h3>");	
	function outer($outer){	// sample nested function
		function inner($inner){
			return "$inner";
		}
		return "$outer ";
	}
	say(outer("You cannot call the inner function"));
	say(inner("without calling the outer function first")); // if inner function is called without calling the outer first, it will result to an error
/*-----------------------------------------------------------------------------------------*/
	echo("<hr/>
	<h3>Variable Scopes</h3>");
	$a = 7;
	function observeScopes(){
		$a++;//this returns an error because $a is not declared within the function
		return $a;
	}
	function GlobalScope(){
		global $a; // this refers to global $a which is 7
		$a++; // now global $a's value has changed
		return $a;
	}
	function StaticScope(){
		static $a; // this refers to $a within this function
		$a++;
		return $a;
	}
	say(observeScopes());
	say(GlobalScope());
	say(StaticScope());
	say ($a);
/*-----------------------------------------------------------------------------------------*/
	echo("<hr/><h3>Function Parameters</h3>");	
	$num = 7;
	function passByValue($num){ // copies the value of the passed parameter to a variable $num
		$num++; // changes the value of the passed value
	}
	function passByReference(&$num){ //takes the reference of the argument
		$num++; // changes the value of the passed value
	}
	say($num);
	passByValue($num);
	say($num);
	passByReference($num);
	say($num);
	function defaultParams($num1 = 7){ // if no arguments are passed 7 is the default		
		say($num1);
	}
	defaultParams();
	function variableParams(){
		$argsPassed = func_get_args();
		$firstArg = func_get_arg(0);
		$numArgs = func_num_args();
		$argNum = 0;
		echo "<br/>The arguments passed are (";
		foreach ($argsPassed as $args){
			$argNum++;
			echo "$args";
			if($argNum != $numArgs){
				echo ", ";
			}
		}
		say(")");
		say("func_get_args() is {$argsPassed}");
		say("\$argsPassed[1] is {$argsPassed[1]}");
		say("func_get_arg(0) is {$firstArg}");
		say("func_num_args() is {$numArgs}");
	}
	variableParams(1,2,3);
	function missingParams($arg1, $arg2){
		if(isset($arg1)){
			say("There is an \$arg1 and it is {$arg1}");
		}
		if(isset($arg2)){
			say("There is an \$arg2 and it is {$arg2}");
		}
	}
	say("Two arguments are passed here : ");
	missingParams(7,3);
	say("One argument is passed here: ");
	missingParams(7); // a warning will show that there should be a 2nd argument
/*-----------------------------------------------------------------------------------------*/
	echo("<hr/><h3>Type Hinting</h3>");
	class Romz{
		public $somename = "Romz";
		function __contruct($somename){
			return $this->somename;
		}
	}
	function FromClassRomz(Romz $name){
		say ("The instance \$somename in class Romz is {$name->somename}"); 
	}
	FromClassRomz(new Romz);

	$anArray = array (1,2,3);
	function FromAnArray(array $array){
		echo "This contains {$array} (";
		foreach ($array as $rec){
			echo $rec . " ";
		}
		echo ")";
	}
	FromAnArray($anArray);
/*-----------------------------------------------------------------------------------------*/
	echo("<hr/><h3>Return Values</h3>");
	function returnOneValue($arg1,$arg2,$arg3){
		return $arg1;
	}
	function returnMultiple($arg1,$arg2,$arg3){
		return array($arg1,$arg2,$arg3);
	}
	$OneVal = returnOneValue(1,2,3);
	$MultVal = returnMultiple(1,2,3);
	say($OneVal);
	say($MultVal);
	$VariableFunc = "say";
	$VariableFunc("I used this variable to call the say() function");
/*-----------------------------------------------------------------------------------------*/
	echo("<hr/><h3>Anonymous Function</h3>");
	$string1 = "Romz";
	say("The length of the string \"Romz\" is " . strlen($string1));
	say("This is a random number " . rand(1,50));
?>
