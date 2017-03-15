<?php

// input: starting and a ending value
fwrite(STDOUT, 'Enter a starting number' . PHP_EOL);
$starting = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter an ending number' . PHP_EOL);
$ending = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter an increment value' . PHP_EOL);
$increment = trim(fgets(STDIN));

// if there's crummy data for the incrementer, default $increment to 1
if(empty($increment) || !is_numeric($increment)) {
	$increment = 1;
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
