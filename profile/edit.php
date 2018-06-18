<?php
//Checks whether the user is in session or not
if(!isset($_SESSION["user"]) and false){
	//Redirect
	header("Location: "."/Technovanza_CAPortal/");
	die();
}
$GLOBALS['page_title'] = "Edit Profile";
$GLOBALS['css_includes']=array('profile.css');
?>

<?php require "../php/pages/edit_profile_template.php" ?>
