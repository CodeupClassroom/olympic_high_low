<?php
// input
// user guess
$random = 10;

do {
    fwrite(STDOUT, 'Guess the number' . PHP_EOL);
    $guess = trim(fgets(STDIN));

    // process
    if ($guess == $random) {
        $message = 'GUESS!';
    } elseif ($guess < $random) {
        $message = 'HIGHER';
    } else {
        $message = 'LOWER';
    }

    // output
    // message that can be higher, lower, guess!
    fwrite(STDOUT, $message . PHP_EOL);
} while ($guess != $random);
