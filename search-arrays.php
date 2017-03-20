<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Michael', 'Fer'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// returns true or false if the name exist in the array
function checkArrays($array, $name){
	// echo array_search($name, $array);
	if(array_search($name, $array) !== FALSE){
		return TRUE;
	}else{
		return FALSE;
	}
}

 // echo checkArrays($names, 'Mike');
 // echo checkArrays($names, 'Tina');
 // echo checkArrays($names, 'Fer');

// compares and counts how many names are in the second array
 function compareArrays($listOfNames, $arrayToCompare){
 	$c = 0;
 	
 	foreach ($listOfNames as $name) {
 		if(checkArrays($arrayToCompare, $name)){
 			$c++;
 		}
 	}

 	return $c;

 }

 echo "Repeated times: " . compareArrays($names, $compare).PHP_EOL;

