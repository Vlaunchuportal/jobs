<?php

//start session on web page
if(!isset($_SESSION)) {
    session_start();
}

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('869209380921-81jtr6btteij9ng3ua2hgr5j80m4e18n.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/jobs/cr.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 

