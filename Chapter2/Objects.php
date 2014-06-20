<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
	Enter a word/s to output: <input type="text" name="words"><br/>
	<input type="submit">
</form>
<?php
class Romz{
	public $word = ''; // initialization of the word property
	function says ($aword = NULL)
		{
			if(!is_null($aword)){
				$this->says = $aword;
			}
			echo $this->says;
		}	
}
if(!empty($_POST['words'])){
	$Romz = new Romz; // Romz object is created
	$Romz->says($_POST['words']); // the object Romz called the function says inside the Romz class	
}
?>
