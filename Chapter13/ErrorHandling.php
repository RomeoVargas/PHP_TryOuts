<?php
function displayError($error, $errorString, $filename, $line, $symbols)
{
	echo "<p>Error '<b>{$errorString}</b>' occurred.<br />";
	echo "-- in file '<i>{$filename}</i>', line $line.</p>";
}
set_error_handler('displayError');
echo @(2/0); // error is suppressed
trigger_error("This is a notice", E_USER_NOTICE);
trigger_error("This is a warning", E_USER_WARNING);
trigger_error("This is an error", E_USER_ERROR);
error_reporting(0);
?>