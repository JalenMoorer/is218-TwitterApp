<?php

namespace Classes\html;

class htmltable
{
	public static function print_html_table_timeline($array) //passes an array and outputs the results in html table format
	{
		$table_head = TRUE;
		$length = count($array);

		for($i=0; $i < $length; $i++)
		{	if($table_head == TRUE)
			{
				$string = "<table class=\"table\">";
				$string .= "<thead>
							<th>Row</th>
							<th>Name</th>
							<th>Tweet</th>
							";
				$table_head = FALSE;
			}
			$string .= "
				<tr>
				<td>".$i."</td>
				<td>". $array[$i]->user->name. "</td>
				<td>" . $array[$i]->text . "</td></tr>"
				;
		}

		$string .= "</table>";
		return $string;
	}

		public static function print_html_table_tweets($array) //passes an array and outputs the results in html table format
	{
		$table_head = TRUE;
		$length = count($array);

		for($i=0; $i < $length; $i++)
		{	if($table_head == TRUE)
			{
				$string = "<table class=\"table\">";
				$string .= "<thead>
							<th>Row</th>
							<th>Name</th>
							<th>Tweet</th>
							";
				$table_head = FALSE;
			}
			$string .= "
				<tr>
				<td>".$i."</td>
				<td>". $array[$i]->user->name. "</td>
				<td>" . $array[$i]->text . "</td></tr>"
				;
		}

		$string .= "</table>";
		return $string;
	}

	public static function print_html_table_followers($array) //passes an array and outputs the results in html table format
	{
		$table_head = TRUE;
		$length = count($array);

		for($i=0; $i <= $length; $i++)
		{	if($table_head == TRUE)
			{
				$string = "<table class=\"table\">";
				$string .= "<thead>
							<th>Row</th>
							<th>Name</th>
							<th>Screen Name</th>
							<th>Number of Followers</th>
							<th>Number of Friends</th>
							<th>Description</th>
							";
				$table_head = FALSE;
			}
			$string .= "
				<tr>
				<td>".$i."</td>
				<td>". $array->users[$i]->name. "</td>
				<td>". $array->users[$i]->screen_name. "</td>
				<td>". $array->users[$i]->followers_count. "</td>
				<td>". $array->users[$i]->friends_count. "</td>
				<td>".$array->users[$i]->description."</td></tr>"
				;
		}

		$string .= "</table>";
		return $string;
	}
}