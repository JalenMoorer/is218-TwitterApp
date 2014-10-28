<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');

require_once('Classes/Autoloader.php');
spl_autoload_register('Autoloader::autoload');

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$html = new Classes\html\htmltable();
/* If method is set change API call made. Test is called by default. */
//$content = $connection->get('account/verify_credentials');

/* Some example calls */
//$content = $connection->get('followers/list');
$content= $connection->get('followers/list');



//$connection->get('users/show', array('screen_name' => 'KingJalenStatus'));
//$account = $connection->get('account/verify_credentials');
//$status = $connection->post('statuses/update', array('status' => 'My first time using twitter is from a school project.  Go figure.', 'in_reply_to_status_id' => 123456));
//$status = $connection->delete('statuses/destroy/12345');
//$connection->post('statuses/update', array('status' => date(DATE_RFC822)));
//$connection->post('statuses/destroy', array('id' => 5437877770));
//$connection->post('friendships/create', array('id' => 9436992));
//$connection->post('friendships/destroy', array('id' => 9436992));

/* Include HTML to display on the page */
include('html.inc');
