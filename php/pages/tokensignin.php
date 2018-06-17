<?php
require_once '../../vendor/autoload.php';

// Get ID Token via HTTPS POST.
$id_token = $_POST["id_token"];

$client = new Google_Client(['client_id' => "5546944844-9f4r2a96u385nq9c78qlu1udgfcght47.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
$received_payload = $client->verifyIdToken($id_token);
if ($received_payload) {
  $user_id = $received_payload['sub'];
  echo $user_id;
} else {
  // Invalid ID token
  echo "Invalid user info";
}?>