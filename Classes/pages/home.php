<?php
namespace Classes\pages;
	class home extends mainpage
	{
		function ConstructPage()
		{	
			$tweet = "";
			$this->Header = "";
			$this->Title = "\t\t<title>Twitter App</title>\n";
			$this->Header .= "
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

		                            <form role=\"form\" action=\"index.php\" method=\"post\">
		                            <div class=\"form-group\">
									<label for=\"tweet\">Insert your tweet here </label>
									<input type=\"text\" class=\"form-control\" id=\"tweet\" placeholder=\"Enter tweet\" 
									name=\"tweet\"><br>
									<button type=\"submit\" class=\"btn btn-default\">Submit</button>
									</form>
		                          </div>
		                    </div>
		                </div>
		            </section>
		        </div>
			";
			

			if (!empty($_POST['tweet'])) 
			{
				$this->Header = "<h4>Tweet has been sent<h4><br>
				<p>click <a href=index.php>here</a> to return.</p>
				";
				$tweet = $_POST['tweet'];
			}

			//$connection = parent::ConstructTwitter();
			//$connection->post('statuses/update', array('status' => $tweet, 'in_reply_to_status_id' => 123456));
			
		}
	}
?>