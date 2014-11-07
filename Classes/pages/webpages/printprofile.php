<?php

class printprofile extends mainpage
{
	public function ConstructPage()
	{
		$connection = parent::ConstructTwitter();
		$content = $connection->get('account/verify_credentials');
		//print_r($content);
		$string = $this->get($content);
		$this->Section = $string;
	}

	public function get($string){
		$string = "<p>You are viewing the profile of ". $string->name. 
		".  The Twitter Id for this user is ". $string->id.
		" and their screen name is " . $string->screen_name. 
		".  </p><br><ul><p>Number of followers: </p><li>".$string->followers_count.
		"</li><p>Number of friends : </p><li>".$string->friends_count."</li></ul><br>
		<h2>This profile was created at ". $string->created_at."</h3>
		";
		return $string;
	}
}