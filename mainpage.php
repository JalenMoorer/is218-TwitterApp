<?php


abstract class mainpage extends page {

	function ConstructMainPage()
		{
			$this->Meta = "
				<meta charset=\"utf-8\">
		        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
		        <meta name=\"description\" content=\"\">
		        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
			";
			$this->JavaScriptLibraries = "
				<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
		        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.0.min.js\"><\/script>')</script>
		        <script src=\"js/bootstrap.min.js\"></script>
			";

			//Where CSS is stored
			$this->CSSLibraries = "
        		<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        		<link rel=\"stylesheet\" href=\"css/sticky-footer.css\">
				<script src=\"js/vendor/modernizr-2.7.1.min.js\"></script>

			";
			$this->Nav = "<nav class=\"nav navbar navbar-inverse\" role=\"navigation\">
		            <div class=\"container\">
		                <div class=\"navbar-header\">
		                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#NavCollapse\">
		                        <span class=\"sr-only\">Navigation</span>
		                        <!--Number of links-->
		                        <span class=\"icon-bar\"></span>
		                        <span class=\"icon-bar\"></span>
		                        <span class=\"icon-bar\"></span>
		                    </button>
		                    <a href=\"index.php?Page=HomePage\" class=\"navbar-brand\">Twitter App</a>
		                </div>
		                <div class=\"collapse navbar-collapse\"  id=\"NavCollapse\">
			                <ul class=\"nav navbar-nav navbar-right\">
			                	<li class=\"\"><a href=\"clearsessions.php\" class=\"success\">Logout</a></li>
			                </ul>
		                </div>
		            </div>
		        </nav> <br><br>
			";

			$this->Footer = "
			<div class=\"footer\">
      			<div class=\"container\">
        			<p class=\"text-muted\">Place sticky footer content here.</p>
      			</div>
    		</div>
			";

			$this->Modals = "";
	}

	function ConstructTwitter()
	{
		if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) 
		{
   			 header('Location: ./clearsessions.php');
		}

		$access_token = $_SESSION['access_token'];

		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

		return $connection;
	}
}


?>