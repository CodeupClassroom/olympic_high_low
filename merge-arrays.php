<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Fer'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// This works for arrays of diff sizes
function combine_arrays($array1, $array2){
	$arrayResult = [];

	foreach ($array1 as $key => $name) {
		if(isset($array2[$key])){
			if($name == $array2[$key] ){
				array_push($arrayResult, $name);
			}else{
				array_push($arrayResult, $name);
				if(isset($array2[$key])){
					array_push($arrayResult, $array2[$key]);
				}
			}
		}else{
			array_push($arrayResult, $name);
		}

	}

	return $arrayResult;
}

// this doesn't take 2 arrays of diff sizes
function combine_arrays_without_bonus($array1, $array2){
	$arrayResult = [];

	foreach ($array1 as $key => $name) {
	
		if($name == $array2[$key] ){
			array_push($arrayResult, $name);
		}else{
			array_push($arrayResult, $name);
			array_push($arrayResult, $array2[$key]);
		}

	}

	return $arrayResult;
}

print_r(combine_arrays($names, $compare));
echo "Without the bonus". PHP_EOL;
print_r(combine_arrays_without_bonus($names, $compare));

