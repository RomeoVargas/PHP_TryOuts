<?php

session_start();
$_SESSION['PageViews'] += 1;
echo "This page has been viewed {$_SESSION['PageViews']} times.";


?>