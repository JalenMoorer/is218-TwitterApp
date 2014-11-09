<?php

/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */ //ini_set('display_errors',1);  error_reporting(E_ALL);

session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');

require_once('Autoloader.php');
spl_autoload_register('Autoloader::autoload');



		if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) 
		{
   			 header('Location: ./clearsessions.php');
		}

		$access_token = $_SESSION['access_token'];

		$connection = new twitteroauth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

		

$page = 'home';

			$Arg = NULL;

			if(isset($_REQUEST['page']))
			{
				$page = $_REQUEST['page']; 
				//echo $page;
			}

			if(isset($_REQUEST['Arg']))
			{
				$Arg = $_REQUEST['Arg'];
				//echo $Arg;
			}
			$class = "Classes\pages\\$page";

			$page = new $class($Arg, $connection);








