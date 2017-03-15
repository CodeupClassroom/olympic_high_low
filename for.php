<?php
// input: starting and a ending value
$starting = 10;
$ending = 15;

// process: show the numbers between the starting and ending values
// output:
for (
    /* initialization */
    $i = $starting;
    /* condition to continue*/
    $i <= $ending;
    /* increment / counter*/
    $i += 1
) {
    fwrite(STDOUT, $i . PHP_EOL);
}
