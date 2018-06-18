<?php
	session_start();

	require_once("Facebook/autoload.php");

	$FB = new \Facebook\Facebook(
		[
			'app_id' => '222082471908629',
			'app_secret' => '6cb6eb724d1d55f9dde4f31efe0cc98f',
			'default_graph_version' => 'v2.10'
		]
	);

	$helper = $FB->getRedirectLoginHelper();

?>