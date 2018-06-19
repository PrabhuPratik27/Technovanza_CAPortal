<?php
	require_once("config.php");

	$redirectURL = "http://localhost/CAPortal/php/pages/fb_callback.php";

	$loginURL = $helper->getLoginUrl($redirectURL);
?>
<!DOCTYPE html>
<html>

  <head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <meta name="google-signin-client_id" content="5546944844-9f4r2a96u385nq9c78qlu1udgfcght47.apps.googleusercontent.com" />

  </head>

  <?php require "php/components/headers.php" ?>

	<body>


		<!--Navigation-->
  <?php include 'php/components/navigation.php';?>
    	<div class="container-fluid w-100 align-content-sm-center d-flex justify-content-center p-0 m-0">
    		<div class="p-0 align-middle main-logo-div">
    			<img class="cent" src="/Technovanza_CAPortal/images/techno-logo.png" />
    		</div>

    	</div>
    	<div class="container-fluid w-100 align-content-sm-center d-flex justify-content-center p-0 m-0">
    		<div class="p-0 align-middle main-logo-div">
				<h1 class="ml14 text-center">
					<span class="text-wrapper">
					<span class="letters">Campus Ambassador</span><br/>
					<span class="letters">Technovanza</span>
					<span class="line"></span>
					</span>
				</h1>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container">
            
<!--             <p class="post1">If your actions inspire others to dream more, learn more,<br>
                        do more and become more, <br>
                        <b>You are a leader!</b>
                      </p>
-->
                <a href="<?php echo $loginURL; ?>" class="fb btn">
                  <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <div class="g-signin2 btn" data-longtitle="true" data-width="200" data-theme="dark" data-onsuccess="onSignIn"></div>

                <a href="#" onclick="signOut();">Sign out</a>

                <a href="<?php echo 'http://localhost/CAPortal/php/pages/fb_callback_logout.php'; ?>">Log out of Facebook</a>
			</div>
		</div>


    <!-- Sign In Scripts-->
    <script>
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        //console.log('Name: ' + profile.getName());
        //console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        var id_token = googleUser.getAuthResponse().id_token;
        var xhttpreq = new XMLHttpRequest();
        xhttpreq.open('POST', 'http://localhost/Technovanza_CAPortal/php/pages/tokensignin.php');
        xhttpreq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhttpreq.onload = function() {
          console.log('Signed in with user id: ' + xhttpreq.responseText);
        };
        xhttpreq.send('id_token=' + id_token);
      };
    </script>
    <script>
      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
        console.log('User signed out.');
        });
      }
    </script>
	</body>
</html>