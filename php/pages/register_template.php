<?php
	require_once("config.php");

	$redirectURL = "http://localhost/CAPortal/php/pages/fb_callback.php";

	$loginURL = $helper->getLoginUrl($redirectURL);
?>
<!DOCTYPE html>
<html>

  <head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <meta name="google-signin-client_id" content="5546944844-9f4r2a96u385nq9c78qlu1udgfcght47.apps.googleusercontent.com">

  </head>

  <?php require "php/components/headers.php" ?>

	<body>

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

		<!--Navigation-->

    <?php include 'php/components/navigation.php';?>

    <br><br><br>

		<div class="conatiner-fluid">
      <div class="desc">

        <div class="row">

          <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2"></div>

          <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
            <p class="post"><u><b>Campus Ambassador</b></u></p><br><br>
            <p class="post1">If your actions inspire others to dream more, learn more,<br>
                        do more and become more, <br>
                        <b>You are a leader!</b></p>

            <br><br>

            <div class="col1">
              <center>
                <a href="<?php echo $loginURL; ?>" class="fb btn">
                  <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a><br><br><br>

                <div class="g-signin2 btn" data-longtitle="true" data-width="200" data-theme="dark" data-onsuccess="onSignIn"></div><br><br>

                <a href="#" onclick="signOut();">Sign out</a><br>

                <a href="<?php echo 'http://localhost/CAPortal/php/pages/fb_callback_logout.php'; ?>">Log out of Facebook</a>

                  <script>
                    function signOut() {
                      var auth2 = gapi.auth2.getAuthInstance();
                      auth2.signOut().then(function () {
                      console.log('User signed out.');
                      });
                    }
                  </script>

              </center>
            </div> 

          </div>

          <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2"></div>

      </div>

      </div>  
    </div>

	</body>

  <style type="text/css" media="screen">
    body{
      background-color: #000;
    }  
  </style>
</html>