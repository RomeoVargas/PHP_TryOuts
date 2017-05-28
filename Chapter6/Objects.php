<h1>Objects</h1>
<hr/>
<?php
	// Class - template for building objects
	Class MyClass 
	{
		public $myValue; 				// Properties - data associated with an object
		function justEcho(){			// Methods - functions associated with an object
			echo $this->myValue."<br/>";
		}
		final function setValue($newValue){
			$this->myValue = $newValue;
		}
		static function saySomething(){
			echo 'Something<br/>';
		}
		protected function youCantAccessMe(){
			echo 'Nice Try';
		}
	}

	// Inheritance - superclass --> subclass
	Class otherClass extends MyClass
	{
		static $myAge = 20;
		const specialization = 'PHP';
		public $otherValue;
		function accessSomething(){
			parent::youCantAccessMe();	// protected methods can also be accessed by subclasses
		}
		//function setValue($newValue){			// subclasses cannot override a final method in the parent class
		//	$this->myValue = "Mr" . $newValue;	
		//}
		function incrementVal(){
			$this->myValue++;	// a subclass can access properties in parent class
		}
	}

$object = new MyClass; // Objects - instance or occurrence of a class
$otherobject = new otherClass;

//$otherobject->setValue("Romz");	--> this returns an error because final methods cannot be overrided in subclasses

MyClass::saySomething();	// Calls to a static method, static methods do not have the $this variable
$object->setValue("Romz");
$object->justEcho();

//MyClass::youCantAccessMe();	// protected methods cant be called outside the class

$otherobject->accessSomething();

Echo $object->myValue."<br/>";
Echo $otherobject->myValue;

$otherobject->incrementVal();
$otherobject->saySomething(); // a subclass can access static method in parent class

Echo $otherobject->myValue;

$otherobject->justEcho(); // the value of myValue in MyClass and otherClass is not the same, the property is only inherited, not the value

Echo otherClass::$myAge;	// call to a static variable
Echo otherClass::specialization;	// call to a constant variable
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
echo "<hr><h3>Interfaces</h3>";
interface quickEcho
{
	const br = '<br/>';
	function say($what);
}
class SampleClass implements quickEcho
{
	function say($what){
		echo $what . self::br;
	}
}

$try = new SampleClass;
$try->say("haha");
$try->say("haha");
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
echo "<hr><h3>Constructor and Destructor</h3>";

class ConstructDestruct
{
	public $name;
	public $age;
	public $specialty;
	function __construct($name,$age,$specialty){
		$this->name = $name;
		$this->age = $age;
		$this->specialty = $specialty;	
	}
	function echoThis($what){
		echo $what . "<br/>";
	}
	function __destruct(){
		unset($this->name);
		unset($this->age);
		unset($this->specialty);
		echo "<br/><br/>Everything in <b>class ConstructDestruct</b> is now unset :) <br/>";
	}
}

class Part2 extends ConstructDestruct{
	public $color;
	public $language;
	function __construct($name,$age,$specialty,$color,$language){
		parent::__construct($name,$age,$specialty);
		$this->color = $color;
		$this->language = $language;
	}
}
$myObject = new Part2('Romz','20','PHP','brown','Tagalog');

?>
<form method='post' action='<?= $_SERVER['PHP_SELF']; ?>'>
	<input type='text' name='text' 
	value='<?= isset($_POST['text']) ? $_POST['text']
	: "";?>' placeholder='Enter Text Here'><br/>
	<input type='submit'><br/>
</form>
<?php
	$myObject::echoThis((isset($_POST['text']))?$_POST['text']:"Nothing is entered yet");
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
echo "<hr><h3>Introspection</h3>";
$doesClassExists = class_exists('ConstructDestruct');
$classes = get_declared_classes();
$doesClassExists2 = in_array('ConstructDestruct',$classes);
$methods = get_class_methods('ConstructDestruct');
$parent = get_parent_class('Part2');
$classvars = get_class_vars('Part2');

echo "<h3>class_exists()</h3>";
var_dump($doesClassExists);
echo "<br/>";

echo "<h3>get_declared_classes()</h3>";
print_r($classes);
echo "<br/>";

echo "<h3>in_array()</h3>";
var_dump($doesClassExists2);
echo "<br/>";

echo "<h3>get_class_methods(class_name)</h3>";
print_r($methods);
echo "<br/>";

echo "<h3>get_parent_class())</h3>";
print_r($parent);
echo "<br/>";

echo "<h3>get_class_vars()</h3>";
print_r($classvars);
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
echo "<hr><h3>Examining an Object</h3>";
$isObject = is_object($myObject);

echo "<h3>is_object()</h3>";
var_dump($isObject);
echo "<br/>";
/*---------------------------------------------------------------------------------------------------------------------------------------------------------*/
echo "<hr><h3>Serialization</h3>";

$encoded = serialize($myObject);
echo "The serialized version of the object \$myObject is :<br/>";
print_r($encoded);

$decoded = unserialize($encoded);
echo "<br/><br/>The unserialized version of the object \$myObject is :<br/>";
print_r($decoded);

?>