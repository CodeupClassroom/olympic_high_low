<?php
if ($argc == 3) {
    // make sure the arguments are numbers
    if (is_numeric($argv[1]) && is_numeric($argv[2])) {
        $min = $argv[1];
        $max = $argv[2];
    } else {
        // prompt the user for a numeric minimum until they provide a numeric minimum
        do {
            fwrite(STDOUT, "Please input a minimum number. Input must be numeric" . PHP_EOL);
            $min = trim(fgets(STDIN));
        } while(!is_numeric($min));

        // prompt for a maximum that is numeric
        do {
            fwrite(STDOUT, "Please input a maximum number. Input must be numeric" . PHP_EOL);
            $max = trim(fgets(STDIN));
        } while(!is_numeric($max));
    }
} else {
    $min = 1;
    $max = 100;
}

// if min > max, swap them
if ($min > $max) {
    $min = $argv[2];
    $max = $argv[1];
}

$random = mt_rand($min, $max);

do {
    // input
    // user guess
    // refactor this to a function called getNumber()
    do {
        fwrite(STDOUT, "Please guess a number between $min and $max" . PHP_EOL);
        $guess = trim(fgets(STDIN));
    } while (!is_numeric($guess));

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
