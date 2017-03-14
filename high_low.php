<?php
// input
// user guess
$random = 10;
$guess = 8;

// process
if ($guess == $random) {
    $message = 'GUESS!';
} elseif ($guess < $random) {
    $message = 'HIGHER';
}

// output
// message that can be higher, lower, guess!
fwrite(STDOUT, $message . PHP_EOL);
