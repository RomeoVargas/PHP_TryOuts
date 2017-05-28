<form enctype="multipart/form-data"
action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">


File name: <input name="uploadthis" type="file" /><br/>

<input type="submit" value="Upload" />
</form>

	<?php
		// test if upload is success
		require('upload_handler.php');
		$ls = `ls uploadedFiles`;
		if($ls >= 1){
			$directory = scandir('uploadedFiles');
	?>
<form enctype="multipart/form-data"
action="<?= $_SERVER['PHP_SELF'] . "?action=delete"; ?>" method="POST">


File to be deleted: <select name='whatToDelete'>
	<?php
		foreach($directory as $file){
			echo "<option>$file</option>";
		}
	?>
</select><br/>

<input type="submit" value="Delete" />
</form>
	<?php
		}
	?>