<?php

class printfollowers extends mainpage
{
	public function ConstructPage()
	{
		$connection = parent::ConstructTwitter();
		$content = $connection->get('followers/list');
		//print_r($content);
		$this->get($content);
	}

	public function get($array){
		$i=0;
		foreach($array)
		{
		echo $array->users[$i]->name;
		}
	}
}