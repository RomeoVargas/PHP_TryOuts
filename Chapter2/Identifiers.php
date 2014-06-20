<?php
///////////////////////Variable Names////////////////////////
	$variables = "<h1>Variable names </h1>";
	$always = "are case-sensitive <br/>";
	$begins = "and could start <br/>";
	$with = "with letters <br/>";
	$a = "or an underscore <br/>";
	$dollar = "without any spaces <br/>";
	$sign = "or other special characters";

	echo $variables . $always . $begins . $with . $a . $dollar . $sign;
	echo "<hr/>";
///////////////////////Function Names////////////////////////	
	function sampleFunc(){
		echo "<h1>Function names</h1>
		are Case-<b>IN</b>sensitive";
	}
	SamPLefUnC();	
	echo "<hr/>";
///////////////////////Class Names////////////////////////	
	class sampleClass{
		public $saythis;
		function __construct($saythis = NULL){
			$this->saythis = "<h1>Class names</h1>
		are also Case-<b>IN</b>sensitive";
			return $this->saythis;
		}
	}
	$sampClass = new sampleClass;
	echo $sampClass->saythis;
	echo "<hr/>";
////////////////////////KEYWORDS/////////////////////////////////
	echo "<h3>\"A keyword (or reserved word) is a word set aside by 
<br/>	the language for its core functionality. You cannot give a 
<br/>	variable, function, class, or constant the same name as a 	
<br/>	keyword\"</h3>";
?>
















