<?php
	header("Content-Type: image/jpg");
	// the imagebox
	$image = imagecreate(200, 200);
	// the colors
	$purple = imagecolorallocate($image, 0x4A, 0x21, 0xA1);
	$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
	$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
	$yellow = imagecolorallocate($image, 0xFF, 0xFF, 0x00);
	// a pixel in the image
	imagesetpixel($image, 120, 80, $white);
	// draw a line
	imageline($image, 5, 12, 90, 180, $white);
	// draw a dashed line
	imagedashedline($image, 190, 120, 9, 18, $white);
	// draw a filled rectangle
	$fill = imagefilledrectangle($image, 50, 50, 150, 150, $black);
	// eyes
	imagearc($image, 80, 90, 20, 20, 0, 360, $white);
	imagearc($image, 120, 90, 20, 20, 0, 360, $white);
	// mouth
	imagearc($image, 100, 110, 50, 50, 0, 180, $white);
	// color of left eye
	imagefill($image, 80, 90, $yellow);
	// color of right eye
	imagefilltoborder($image, 120, 90, $white, $yellow); // fills yellow up to white border
	$rotated = imagerotate($image, 45, 1); // 1 is the 2nd color declare, 0 is first
	
	imagejpeg($rotated);
?>