<?php 

	require("model.php");
	
	function getInstructorsNames(){
		return getNames();
	}

	// DON'T DO THIS ONE, WE DON'T ENCOURAGE BUILDING HTML IN 
	function sayHi(){
		$message = "<h1> Hi today is: " . date("Y-m-d") . " and it's sunny outsite" . "</h1>"; 
		return $message;
	}

	function shower(){
		return true;
	}

 ?>