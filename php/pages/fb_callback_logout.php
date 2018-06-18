<?php
	require_once("config.php");

	if(isset($_SESSION['accessToken'])){
		$logoutUrl = $helper->getLogoutUrl($_SESSION['accessToken'],"http://localhost/CAPortal/register.php");
	}
	
	session_destroy();
	header("location:".$logoutUrl);
?>