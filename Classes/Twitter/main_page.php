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
		        <script src=\"js/vendor/bootstrap.min.js\"></script>
		        <script src=\"js/plugins.js\"></script>
		        <script src=\"js/main.js\"></script>
			";

			//Where CSS is stored
			$this->CSSLibraries = "
				<link rel=\"stylesheet\" href=\"css/normalize.css\">
        		<link rel=\"stylesheet\" href=\"css/vendor/bootstrap.min.css\">
				<link rel=\"stylesheet\" href=\"css/vendor/font-awesome.min.css\">
				<link rel=\"stylesheet\" href=\"css/main.css\">
				<script src=\"js/vendor/modernizr-2.7.1.min.js\"></script>

			";
			$this->Nav = "
				<nav class=\"nav navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
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
		            </div>
		        </nav> <br><br>
			";

			$this->Footer = "
			<div class="footer">
      			<div class="container">
        			<p class="text-muted">Place sticky footer content here.</p>
      			</div>
    		</div>
			";

			$this->Modals = "";

			$this->ConstructPage();

}





?>