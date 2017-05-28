<?php
require("fillTemplate.php");
$bindings['DESTINATION'] = $_SERVER['PHP_SELF'];
if (isset($_POST['fname'])
	|| isset($_POST['mname'])
	|| isset($_POST['lname'])) {
// values passed by the form
$template = "show_info.template";
$bindings['fname'] = $_POST['fname'];
$bindings['mname'] = $_POST['mname'];
$bindings['lname'] = $_POST['lname'];
}
else {
$template = "registration.template";
}
echo fillTemplate($template, $bindings);
?>