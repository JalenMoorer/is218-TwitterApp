<?php

namespace Classes\html;

class htmltable implements htmltableInterface
{

	public static function print_html_table($array) //passes an array and outputs the results in html table format
	{
		$table_head = TRUE;
		foreach($array as $items)
		{	if($table_head == TRUE)
			{
				echo "<table border=\"1\" style=\"width:50%\";>";
				$table_head = FALSE;
			}
			echo "<tr>" . "<td> Username</td>" 
				. "<td>" . $items->screen_name . "</td>" . "</tr>"; 
		}
		echo "</table>";
	}
}