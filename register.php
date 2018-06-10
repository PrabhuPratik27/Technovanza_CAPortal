<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">

		  <!--Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            
        <!-- library -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Your css here -->
        <link rel="stylesheet" href="login.css">

        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Popper js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		
		    <link rel="stylesheet" href="css/register.css">

		<title>CA Portal</title>
	</head>

	<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

		<!--Navigation-->

    <?php include 'navigation.php';?>

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

            <center>
              <a href="#" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
              </a><br><br>
              <a href="#" class="twitter btn">
                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
              </a><br><br>
              <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                </i> Login with Google+
              </a><br><br>
            </center>

            </style> 

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