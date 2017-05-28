<?php
if(isset($_COOKIE['PageViews'])){
	$PageViews = $_COOKIE['PageViews'];
}else{
	$PageViews = 0;
}
setcookie('PageViews',++$PageViews);

echo $PageViews
?>