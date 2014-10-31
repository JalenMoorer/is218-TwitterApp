<?php


class printprofile extends mainpage
{
	public function ConstructPage()
	{
		$connection = parent::ConstructTwitter();
		$content = $connection->get('account/verify_credentials');
		//print_r($content);
		$this->get($content);
	}

	public function get($array){
		echo $array->id;
		echo $array->name;
		echo $array->screen_name;
		echo $array->followers_count;
		echo $array->friends_count;
	}
}