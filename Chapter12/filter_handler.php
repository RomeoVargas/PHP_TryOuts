<?php
echo "<center>";
error_reporting(0);
/*----PROPER FILTERING IN A FORM------*/
$clean = array();
	switch ($_POST['user_level']){
		case 'Admin':
		case 'Staff':
			$clean['user_level'] = $_POST['user_level'];
			break;
		default:
			die("<h1>The user level passed is not acceptable</h1>");
			break;
	}
	$username = $_POST['username'];
	$uname_len = mb_strlen($username);
	if(preg_match('/[A-Za-z0-9_]/', $username) && ($uname_len > 0) && ($uname_len <= 32)){
		
		$clean['username'] = $username;
	}
	else{
		die("<h1>The username passed is not acceptable</h1>");
	}

	$fullname = $_POST['full_name'];
	if(preg_match('/([a-zA-Z -\'])/', $fullname)){
		$clean['full_name'] = $fullname;
	}else{
		die("<h1>The Full Name passed is not acceptable</h1>");
	}

Echo "<h1>All is Good</h1>";

?>