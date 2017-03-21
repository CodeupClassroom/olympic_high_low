<?php 

// Specify file name or path
$file = "restaurants.txt";

// Create a file pointer and opens a stream resource object
$handle = fopen($file, "r");

/*
	"Streams are the way of generalizing file, network, data compression, and other operations which share a common set of functions and uses. In its simplest definition, a stream is a resource object which exhibits streamable behavior. That is, it can be read from or written to in a linear fashion..."

																								- PHP Documentation
*/



// Determine how many characters contained in the file
echo filesize($file) . PHP_EOL;


// Read contents of file stream at the specified handle and up to the indicated size (all of the file)
$contents = fread($handle, filesize($file));

// echo($contents);


// ECHO OUT RESTAURANTS IN ALL CAPS AND IN ALPHABETICAL ORDER

function parseFileToOrderedCaps($string) 
{
	$contentsArr = explode("\n", $string);
	sort($contentsArr);
	foreach($contentsArr as $content) {
		echo strtoupper($content) . PHP_EOL;
	}


}

parseFileToOrderedCaps($contents);





// Close file pointer to avoid security breaches and free the file up to be used by another program execution
fclose($handle);


// File reading recap

$file = "restaurants.txt";
$handle = fopen($file, "r");
$contents = fread($handle, filesize($file));
// do somethine
fclose($handle);


