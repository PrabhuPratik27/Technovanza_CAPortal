<?php
require_once '../../vendor/autoload.php';

// Get $id_token via HTTPS POST.
$id_token = $_POST["idtoken"];

$client = new Google_Client(['client_id' => "5546944844-9f4r2a96u385nq9c78qlu1udgfcght47.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  echo $userid;
  // If request specified a G Suite domain:
  //$domain = $payload['hd'];
} else {
  // Invalid ID token
  echo "Invalid user info";
}?>