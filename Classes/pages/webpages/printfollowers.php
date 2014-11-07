<?php

class printfollowers extends mainpage
{
	public function ConstructPage()
	{
		$connection = parent::ConstructTwitter();
		$content = $connection->get('followers/list');
		//print_r($content);
		$table = Classes\html\htmltable::print_html_table_followers($content);
		$this->Section = $table;
	}

}