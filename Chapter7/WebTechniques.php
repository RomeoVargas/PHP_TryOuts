<h1>Web Techniques</h1>
<hr/>
<h3>Global Arrays that contain EGPCS info</h3>
	<?php
	function say($what){
		echo $what . "<br/>";
	}
	say((isset($_COOKIE['PHP_SELF']))
		? "\$_COOKIE['PHP_SELF'] is " . $_COOKIE['PHP_SELF']
		: "There is no \$_COOKIE['PHP_SELF']");

	say((isset($_GET['PHP_SELF']))
		? "\$_GET['PHP_SELF'] is " . $_GET['PHP_SELF']
		: "There is no \$_GET['PHP_SELF']");

	say((isset($_POST['PHP_SELF']))
		? "\$_POST['PHP_SELF'] is " . $_POST['PHP_SELF']
		: "There is no \$_POST['PHP_SELF']");

	say((isset($_SERVER['PHP_SELF']))
		? "\$_SERVER['PHP_SELF'] is " . $_SERVER['PHP_SELF']
		: "There is no \$_SERVER['PHP_SELF']");

	say((isset($_ENV['PHP_SELF']))
		? "\$_ENV['PHP_SELF'] is " . $_ENV['PHP_SELF']
		: "There is no \$_ENV['PHP_SELF']");

	say((isset($_FILES['PHP_SELF']))
		? "\$_FILES['PHP_SELF'] is " . $_FILES['PHP_SELF']
		: "There is no \$_FILES['PHP_SELF']");
?>
<hr/>
<h3>Server Information (entries in $_SERVER)</h3>
<?php
	say((isset($_SERVER['PHP_SELF']))
		? "\$_SERVER['PHP_SELF'] is " . $_SERVER['PHP_SELF']
		: "There is no \$_SERVER['PHP_SELF']");

	say((isset($_SERVER['SERVER_SOFTWARE']))
		? "\$_SERVER['SERVER_SOFTWARE'] is " . $_SERVER['SERVER_SOFTWARE']
		: "There is no \$_SERVER['SERVER_SOFTWARE']");

	say((isset($_SERVER['SERVER_NAME']))
		? "\$_SERVER['SERVER_NAME'] is " . $_SERVER['SERVER_NAME']
		: "There is no \$_SERVER['SERVER_NAME']");

	say((isset($_SERVER['GATEWAY_INTERFACE']))
		? "\$_SERVER['GATEWAY_INTERFACE'] is " . $_SERVER['GATEWAY_INTERFACE']
		: "There is no \$_SERVER['GATEWAY_INTERFACE']");

	say((isset($_SERVER['SERVER_PROTOCOL']))
		? "\$_SERVER['SERVER_PROTOCOL'] is " . $_SERVER['SERVER_PROTOCOL']
		: "There is no \$_SERVER['SERVER_PROTOCOL']");

	say((isset($_SERVER['SERVER_PORT']))
		? "\$_SERVER['SERVER_PORT'] is " . $_SERVER['SERVER_PORT']
		: "There is no \$_SERVER['SERVER_PORT']");

	say((isset($_SERVER['REQUEST_METHOD']))
		? "\$_SERVER['REQUEST_METHOD'] is " . $_SERVER['REQUEST_METHOD']
		: "There is no \$_SERVER['REQUEST_METHOD']");

	say((isset($_SERVER['PATH_INFO']))
		? "\$_SERVER['PATH_INFO'] is " . $_SERVER['PATH_INFO']
		: "There is no \$_SERVER['PATH_INFO']");

	say((isset($_SERVER['PATH_TRANSLATED']))
		? "\$_SERVER['PATH_TRANSLATED'] is " . $_SERVER['PATH_TRANSLATED']
		: "There is no \$_SERVER['PATH_TRANSLATED']");

	say((isset($_SERVER['SCRIPT_NAME']))
		? "\$_SERVER['SCRIPT_NAME'] is " . $_SERVER['SCRIPT_NAME']
		: "There is no \$_SERVER['SCRIPT_NAME']");

	say((isset($_SERVER['QUERY_STRING']))
		? "\$_SERVER['QUERY_STRING'] is " . $_SERVER['QUERY_STRING']
		: "There is no \$_SERVER['QUERY_STRING']");

	say((isset($_SERVER['REMOTE_HOST']))
		? "\$_SERVER['REMOTE_HOST'] is " . $_SERVER['REMOTE_HOST']
		: "There is no \$_SERVER['REMOTE_HOST']");

	say((isset($_SERVER['REMOTE_ADDR']))
		? "\$_SERVER['REMOTE_ADDR'] is " . $_SERVER['REMOTE_ADDR']
		: "There is no \$_SERVER['REMOTE_ADDR']");

	say((isset($_SERVER['AUTH_TYPE']))
		? "\$_SERVER['AUTH_TYPE'] is " . $_SERVER['AUTH_TYPE']
		: "There is no \$_SERVER['AUTH_TYPE']");

	say((isset($_SERVER['REMOTE_USER']))
		? "\$_SERVER['REMOTE_USER'] is " . $_SERVER['REMOTE_USER']
		: "There is no \$_SERVER['REMOTE_USER']");

	say((isset($_SERVER['REMOTE_IDENT']))
		? "\$_SERVER['REMOTE_IDENT'] is " . $_SERVER['REMOTE_IDENT']
		: "There is no \$_SERVER['REMOTE_IDENT']");

	say((isset($_SERVER['CONTENT_TYPE']))
		? "\$_SERVER['CONTENT_TYPE'] is " . $_SERVER['CONTENT_TYPE']
		: "There is no \$_SERVER['CONTENT_TYPE']");

	say((isset($_SERVER['CONTENT_LENGTH']))
		? "\$_SERVER['CONTENT_LENGTH'] is " . $_SERVER['CONTENT_LENGTH']
		: "There is no \$_SERVER['CONTENT_LENGTH']");

	say((isset($_SERVER['HTTP_USER_AGENT']))
		? "\$_SERVER['HTTP_USER_AGENT'] is " . $_SERVER['HTTP_USER_AGENT']
		: "There is no \$_SERVER['HTTP_USER_AGENT']");

	say((isset($_SERVER['HTTP_REFERER']))
		? "\$_SERVER['HTTP_REFERER'] is " . $_SERVER['HTTP_REFERER']
		: "There is no \$_SERVER['HTTP_REFERER']");
?>
