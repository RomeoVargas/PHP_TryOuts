<html>
<head><title>Name Combiner</title></head>
<body>
	<h1>Find Out Your <br/>
		Combined Name <br/>
		with a Partner</h1>
	<form method='post' action='<?= $_SERVER['PHP_SELF'];?>'>
		<input type='text' name='name1' placeholder='Enter name1'
		value='<?= (isset($_POST['name1'])) ? $_POST['name1'] : "";?>'>
		<br/>
		<input type='text' name='name2' placeholder='Enter name2'
		value='<?= (isset($_POST['name2'])) ? $_POST['name2'] : "";?>'>
		<br/><input type='submit'>
	</form>
	<?php
		if(isset($_POST['name1']) && isset($_POST['name2'])){
			$name1 = $_POST['name1'];
			$name2 = $_POST['name2'];
			$len_Of_name1 = strlen($name1);
			$len_Of_name2 = strlen($name2);

			if($len_Of_name1<=$len_Of_name2){
				$combined = array('combined_name' => $name1);
				for($i=(int)($len_Of_name1/2) ; $i <= $len_Of_name1 ; $i++)
				{
					$combined['combined_name'][$i] = $name2{$i};
				}
			}
			else{
				$combined = array('combined_name' => $name2);
				for($i=(int)($len_Of_name2/2) ; $i <= $len_Of_name2 ; $i++)
				{
					$combined['combined_name'][$i] = $name1{$i};
				}
			}

			print_r($combined);
		}
	?>
</body>
</html>
