<?php
namespace Classes\pages;
abstract class page
	{
		public $HTML;
		public $Head;
		public $Body;

		//Head Elements
		public $Title;
		public $Meta;
		public $JavaScriptLibraries;
		public $CSSLibraries;

		//HTML5 Page Archiecture
		public $Header;
		public $Nav;
		public $Section;
		public $Footer;

		//Misc
		public $Modals;
		public $SlideShow;
		public $Twitter;

		function ConstructBasePage(){} 
		function ConstructPage(){}
		function ConstructTwitter(){}

		function __construct($object1, $object2){
			$this->Twitter = $object2;
			//print_r($this->Twitter);
		}

		function ConstructHTML() 
		{
			$this->Head = "\t<head>\n".$this->Title.$this->Meta.$this->JavaScriptLibraries.$this->CSSLibraries."\t</head>\n";
			$this->Body = "\t<body>\n".$this->Nav.$this->SlideShow.$this->Header."<div class=\"container\">".$this->Section."</div>".$this->Footer."</body>\n";
			$this->HTML = "<!DOCTYPE html>\n<html>".$this->Head.$this->Body."\n</html>";
		}

		function __destruct()//Will send and print it to the browser
		{
			$this->ConstructMainPage();
			$this->ConstructTwitter();
			$this->ConstructPage();
			$this->ConstructHTML();
			echo $this->HTML;
		}
	}