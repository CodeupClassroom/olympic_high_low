<?php
// input
// user guess
$random = 10;
$guess = 10;

// process
if ($guess == $random) {
    $message = 'GUESS!';
}

// output
// message that can be higher, lower, guess!
fwrite(STDOUT, $message . PHP_EOL);
