<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php echo $GLOBALS['page_title']; ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Popper js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<?php
	define('CSSDIR', 'http://localhost/Technovanza_CAPortal/css/');
	define('JSDIR' , 'http://localhost/Technovanza_CAPortal/js/');
	
	if(isset($GLOBALS['css_includes'])){
		//Custom CSS
		$cssIncludesCount = count($GLOBALS['css_includes']);
		
		for($x = 0; $x < $cssIncludesCount; $x++) {
			echo "<link rel=\"stylesheet\" href=\"".CSSDIR.$GLOBALS['css_includes'][$x]."\">";
		}
	}

	if(isset($GLOBALS['js_includes'])){
		//Custom JS
		$jsIncludesCount = count($GLOBALS['js_includes']);
		
		for($x = 0; $x < $jsIncludesCount; $x++) {
			echo "<script src=\"".JSDIR.$GLOBALS['js_includes'][$x]."\"></script>";
		}
	}
	?>

	<!-- Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Google Icons-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>