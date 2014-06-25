<?php
header("Content-Type: image/jpg");
	if($_GET['pic']==="1")
		$image = imagecreatefrompng("pic1.png");
	else if($_GET['pic']==="2")
		$image = imagecreatefromjpeg("pic2.jpg");
imagejpeg($image);
?>
