<?php

class Autoloader { //Autoloader recursively adds and includes php files through any subdirectory under the current one

	static public function autoload($className)
	{
	    $className = ltrim($className, '\\');
	    $fileName  = '';
	    $namespace = '';
	    if ($lastNsPos = strripos($className, '\\')) {
	        $namespace = substr($className, 0, $lastNsPos);
	        $className = substr($className, $lastNsPos + 1);
	        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	    }
	    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
	 
	    require $fileName;
	}
}




?>