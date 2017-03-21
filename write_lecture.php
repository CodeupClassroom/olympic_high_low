<?php 

	$filename = "fruits.txt";
	$fruits = ['apple', 'strawberry', 'kiwi', 'grape', 'mango'];

	$names = ['Fer', 'Luis', 'Ryan', 'Justin'];

	function write($filename, $array){

		$handle = fopen($filename, 'a');

		foreach ($array as $item) {
	    	fwrite($handle, $item . PHP_EOL);
		}

		fwrite($handle, "this is the end". PHP_EOL);
		fwrite($handle, "IP: ".getHostByName(getHostName())

);

		fclose($handle);

	}

	write($filename, $fruits);
	write('instructors.txt', $names);


 ?>