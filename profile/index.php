<?php
//Checks whether the user is in session or not
if(!isset($_SESSION["user"]) and false){
	//Redirect
	header("Location: "."/Technovanza_CAPortal/");
	die();
}
$GLOBALS['page_title'] = "Profile";
$GLOBALS['css_includes']=array('profile.css');
?>

<?php require "../php/pages/profile_template.php" ?>
