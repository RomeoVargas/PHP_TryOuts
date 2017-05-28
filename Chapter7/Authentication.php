<?php
error_reporting(0);
$authOK = false;
$user = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
if (isset($user) && isset($password)) {
	$authOK = true;
}
if (!$authOK) {
	header('WWW-Authenticate: Basic realm="Top Secret Files"');
	header('HTTP/1.0 401 Unauthorized');
		unset($user);
		unset($password);
		echo "<center><h1>You are not authorized to view this site</h1></center>";
	die();
}

	Echo "All password protected documents are typed here";
?>