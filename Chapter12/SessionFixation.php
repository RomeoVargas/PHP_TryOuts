<?php
echo "<center><h1>";
	$unset = "</h1><br/><br/>Unset password <a href='".$_SERVER['PHP_SELF']."?unset'>here</a><h1>";
	session_start();	
	$_SESSION['auth'] = FALSE;

	if(isset($_GET['unset'])){
		session_unset();
		session_destroy();
		header("location: filter_page.php");
	}	
	
	$password = md5($_POST['input4']);	
		if(!isset($_SESSION['pw'])){
			$_SESSION['pw'] = $password;

				ECHO "Password is now Set";		
				echo $unset;		
		}

		else if(empty($password)){
			die("<font color=red>Please enter an input</font>");
		}

		else{	

			if($password === $_SESSION['pw']){
				$_SESSION['auth'] = TRUE;
				session_regenerate_id();
				ECHO "HELLO";
				echo $unset;				
			}

			else{
				die("<font color=red>Password is not permitted</font>");
			}
		}
echo "</h1>";	

?>