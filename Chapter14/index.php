<center>
<h3>Determining the Platform</h3>
<?php
define('EOL','<br/>');
function say($what){
	echo $what.EOL;
}
	if(PHP_OS == "HP-UX"){
		say("PHP is running in HP-UX OS");
	}else if(PHP_OS == "Darwin"){
		say("PHP is running in Darwin OS");
	}else if(PHP_OS == "Linux"){
		say("PHP is running in Linux OS");
	}else if(PHP_OS == "SunOS"){
		say("PHP is running in SunOS");
	}else if(PHP_OS == "WIN32" || PHP_OS == "WINNT"){
		say("PHP is running in Windows OS");
	}
	
?>