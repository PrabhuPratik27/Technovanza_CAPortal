<?php
	require_once("config.php");

	try{
		$accessToken = $helper->getAccessToken();
		$_SESSION['accessToken'] = $accessToken->getValue();
	}catch (\Facebook\Exceptions\FacebookSDKException $e){
		echo $e->getMessage();
		exit();
	}catch (\Facebook\Exceptions\FacebookResponseException $e){
		echo $e->getMessage();
		exit();
	}
	

	if(!$accessToken){
		header("location:register.php");
	}

	$oAuth2Client = $FB->getOAuth2Client();

	$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

	$response = $FB->get("/me?fields=id",$accessToken);

	$userData = $response->getGraphNode()->asArray();

	$_SESSION['id'] = $userData['id'];
	header("location:http://localhost/CAPortal/register.php");
	
?>