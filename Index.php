<?php
require_once('Classes/Autoloader.php');
spl_autoload_register('Autoloader::autoload');

echo "<h2>Simple Twitter API Test</h2>";

$settings = array(
    'oauth_access_token' => "2844037900-HArLlGMUhbwJgVDMsdLcRWGUs3VXe6ipYKfYnJj",
    'oauth_access_token_secret' => "3jFfowWmCcEqOZQyQrt8fRZliRyzJ9VAJOwJRfuBECAVs",
    'consumer_key' => "Pqh0FejmsnCcpX9aiamMzhmVc",
    'consumer_secret' => "Gcy9DNEzARrK4cOMMsSq7T0v9JopBW0bZeyd9vP7i75XEPsWjA"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$requestMethod = "GET";
 
$getfield = '?screen_name=iagdotme&count=20';
 
$twitter = new Classes\Twitter\TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>