<?php
//Checks whether the user is in session or not
if(!isset($_SESSION["user"]) and false){
	header("Location: "."/Technovanza_CAPortal/index.php");
	die();
}
$GLOBALS['page_title'] = "Profile";
$GLOBALS['css_includes']=array('css/profile.css');
?>

<?php require "/Technovanza_CAPortal/php/pages/profile_template.php" ?>
