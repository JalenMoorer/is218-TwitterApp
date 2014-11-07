<?php

namespace Classes\pages;
class printtweets extends mainpage{
	public function ConstructPage()
	{
		$connection = parent::ConstructTwitter();
		$content = $connection->get('statuses/user_timeline');
		//print_r($content);
		//$this->get($content);
		$table = Classes\html\htmltable::print_html_table_timeline($content);
		$this->Section = $table;
		
	}


}	