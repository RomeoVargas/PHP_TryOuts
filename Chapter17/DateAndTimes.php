<?php
$timeZone = date_default_timezone_get();
$dateTimeZone = new DateTimeZone($timeZone);
$NOW = new DateTime("now", $dateTimeZone);
print_r($NOW);
echo "<br/>" . $NOW->format("F d,Y");
echo "<br/>" . $NOW->format("Y-m-d H:i:s A");

$myBday = new DateTime("1993-09-30", $dateTimeZone);
$formattedBday = $myBday->format("F d, Y");
$myAge = $myBday->diff($NOW);
echo "<br/>I was born on {$formattedBday} and today is ".$NOW->format("F d, Y")."<br/>";
echo "I am now is " . $myAge->format("%y years, %m months, %d days, %H hours, %i minutes, and %s seconds old");
?>