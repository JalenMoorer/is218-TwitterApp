<?php
	//include "/DB/DBPageQuery.php";
	class home extends mainpage
	{
		function ConstructPage()
		{
			$this->Title = "\t\t<title>Twitter App</title>\n";
			$this->Header = "
				<div class=\"jumbotron\">
		            <section class=\"container\">
		                <div class=\"row\">
		                    <h1>Welcome to my Twitter App.  Click on a link to test any operation</h1>
		                </div>
		                <div class=\"row\">
		                    
		                </div>
		                <div class=\"row\">
		                    <div class=\"col-sm-3\">
		                        <div class=\"row\" id=\"Quote\">
		                            <a href=\"http://web.njit.edu/~jmm77/is218/Twitter/index.php?page=printtimeline\" class=\"btn btn-md btn-block btn-success\">Print Timeline</a>
		                            <a href=\"http://web.njit.edu/~jmm77/is218/Twitter/index.php?page=printfollowers\" class=\"btn btn-md btn-block btn-success\">Print Followers</a>
		                            <a href=\"http://web.njit.edu/~jmm77/is218/Twitter/index.php?page=printprofile\" class=\"btn btn-md btn-block btn-success\">Print Profile</a>
		                            <a href=\"http://web.njit.edu/~jmm77/is218/Twitter/index.php?page=printtweets\" class=\"btn btn-md btn-block btn-success\">Print Tweets</a>
		                            <a href=\"http://web.njit.edu/~jmm77/is218/Twitter/index.php?page=posttweet\" class=\"btn btn-md btn-block btn-success\">Post a Tweet</a>

		                        </div>
		                    </div>
		                </div>
		            </section>
		        </div>
			";
			$this->Section = "";


			
		}
	}
?>