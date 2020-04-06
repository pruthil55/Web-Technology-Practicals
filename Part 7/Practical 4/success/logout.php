<?php

session_start();

	if( isset($_SESSION['name']) && !empty($_SESSION['name']) ){
	    session_unset($_SESSION['name']);
	    session_destroy();
	    $_SESSION = array();
	    header("Location: http://localhost/p7_pr4/login/login.php");
	}
	/*else{
		header("Location: http://localhost/p7_pr4/login/login.php");
	}*/

?>