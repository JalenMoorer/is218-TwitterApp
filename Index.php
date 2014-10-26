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
 if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "iagdotme";}
if (isset($_GET['count'])) {$user = $_GET['count'];} else {$count = 20;}
$getfield = "?screen_name=$user&count=$count";
 
$twitter = new Classes\Twitter\TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(), $assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
    }
?>