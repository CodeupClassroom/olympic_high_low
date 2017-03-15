<?php
// input: starting and a ending value
fwrite(STDOUT, 'Enter a starting number' . PHP_EOL);
$starting = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter an ending number' . PHP_EOL);
$ending = trim(fgets(STDIN));

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
