<?php
	function say($what){
		echo $what . "<br/>";
	}
?>

<h1>Flow-Control Statements</h1>
<h3>If-Else Statement</h3>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method='post'>

<?php
	// checks if $_POST['something'] is set to something
	if(isset($_POST['something']) and 
	!empty($_POST['something'])){

		$submitbutton = "Submit my Answer";

		say("Now Enter it again (If you still remember it):
		<input type='text' name='myans'>");

		say("<input type='hidden' name='answer'
		value='{$_POST['something']}'>");

	}
	// checks if an answer is sent
	else if(isset($_POST['answer']) 
	and !empty($_POST['answer'])){

		$submitbutton = "Try Again";
		say(	(strtolower($_POST['myans']) 
			=== strtolower($_POST['answer'])	)
		? "You're guess is correct"
		: "You're running low on memory, please try again");

	}else{
		$submitbutton = "Submit";
		say("Enter a word/s: 
		<input type='text' name='something'>");
	}
?>
<input type='submit' value="<?= $submitbutton; ?>">
<hr/>
<h3>Switch Case Statement</h3>
	<select name='color' onchange='submit()'>
		<option>Red</option>
		<option>Blue</option>
		<option>Green</option>
		<option>Yellow</option>
		<option>Black</option>
		<option>White</option>
	</select>
	<?php
		if(isset($_POST['color'])){
			switch($_POST['color']){
				case 'Red':
					say ("You chose Red");
					break;
				case 'Blue':
					say ("You chose Blue");
					break;
				case 'Green':
					say ("You chose Green");
					break;
				case 'Yellow':
					say ("You chose Yellow");
					break;
				case 'Black':
					say ("You chose Black");
					break;
				case 'White':
					say ("You chose White");
					break;				
			}
		}
	?>
<hr>
<h3>While Statement</h3>
	<?php
		$num = 10;
		say("\$num is $num");
		while ($num != 0){
			$num--;	
			say("\$num is now $num");
		}
	?>
<hr>
<h3>Do-While Statement</h3>
	<?php
		$num = 10;
		say("\$num is $num");
		do{
			$num--;	
			say("\$num is now $num");			
		}
		while ($num != 0);
	?>
<hr>
<h3>For Loop</h3>
	<?php
		for($i = 0 ; $i <= 10 ; $i ++){
			say("\$i is now $i");
		}
	?>
<hr>
<h3>Foreach Loop</h3>
	<?php
		$anArr = array(0,1,2,3,4,5,6,7,8,9,10);
		foreach ($anArr as $j){
			say("\$j is now $j");
		}
	?>
</form>
