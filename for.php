<?php

// take in command line arguments for starting and ending number
if(isset($argv[1], $argv[2]) && (is_numeric($argv[1]) && is_numeric($argv[2]))) {
	$starting = $argv[1];
	$ending = $argv[2];
} else {

	do {
		// input: starting and a ending value
		fwrite(STDOUT, 'Enter a starting number' . PHP_EOL);
		$starting = trim(fgets(STDIN));
	} while(!is_numeric($starting));

	do {
		fwrite(STDOUT, 'Enter an ending number' . PHP_EOL);
		$ending = trim(fgets(STDIN));
	} while(!is_numeric($ending));

}

fwrite(STDOUT, 'Enter an increment value' . PHP_EOL);
$increment = trim(fgets(STDIN));

// if there's crummy data for the incrementer, default $increment to 1
if(empty($increment) || !is_numeric($increment)) {
	$increment = 1;
}

// if ending is less than start, swap values
if($ending < $starting) {
	$oldEnd = $ending;
	$oldStart = $starting;
	$starting = $oldEnd;
	$ending = $oldStart;
}

// if incrementer is negative, then change it to a positive w/ absolute value
if($increment < 0) {
	$increment = abs($increment);
}

// process: show the numbers between the starting and ending values
// output:
for (
    /* initialization */
    $i = $starting;
    /* condition to continue*/
    $i <= $ending;
    /* increment / counter*/
    $i += $increment
) {
    fwrite(STDOUT, $i . PHP_EOL);
}
