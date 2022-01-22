<?php
require_once(dirname(__DIR__).'/Facebook/autoload.php');
define('APP_ID', '230596139152078');
define('APP_SECRET', '3e66ee1d15fba9cc1d18ecfce7b548e4');
define('API_VERSION', 'v12.0');
define('FB_BASE_URL','http://localhost:8080/PhoneStore/Admin');
define('BASE_URL', 'http://localhost:8080/PhoneStore/Home');

if(!session_id()){
    session_start();
}
$fb = new Facebook\Facebook([
    'app_id' => APP_ID,
    'app_secret' =>APP_SECRET,
    'default_graph_version' => API_VERSION,
    ]);
    // Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();


// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token']))
		{$accessToken = $_SESSION['facebook_access_token'];}
	else
		{$accessToken = $fb_helper->getAccessToken();}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
     echo 'Facebook API Error: ' . $e->getMessage();
      exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
      exit;
}

?>