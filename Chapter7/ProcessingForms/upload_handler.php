<?php

if(isset($_FILES['uploadthis']['tmp_name']) && !empty($_FILES['uploadthis']['name']))
{
	 if ($_FILES["uploadthis"]["error"] > 0)
    {
    	echo "Return Code: " . $_FILES["uploadthis"]["error"] . "<br>";
    }
    else
	{
		move_uploaded_file($_FILES["uploadthis"]["tmp_name"]
			, "uploadedFiles/" . $_FILES["uploadthis"]["name"]);
		echo $_FILES["uploadthis"]["name"] . "<br/>is uploaded in the uploadedFiles Folder<br/><br/>";
		echo "If you want to delete it click <a href='" 
		. $_SERVER['PHP_SELF'] . "?action=delete&file="
		. $_FILES["uploadthis"]["name"] . "'>here</a><br/><br/>" ;
	}
}
if(isset($_GET['action']) && $_GET['action']=='delete'){
	if(isset($_GET['file'])){
		unlink("uploadedFiles/" . $_GET['file']);
	}else if(isset($_POST['whatToDelete'])){
		unlink("uploadedFiles/" . $_POST['whatToDelete']);		
	}
}

?>