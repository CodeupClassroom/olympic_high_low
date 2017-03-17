<?php
// calculator with the common arithmetic operations + - * /
do {
    echo "a) Add", PHP_EOL;
    echo "b) Subtract", PHP_EOL;
    echo "c) Multiply", PHP_EOL;
    echo "d) Divide", PHP_EOL;
    echo "q) Quit", PHP_EOL;
    echo "Enter an option (a, b, c, d, q): ";
    $option = trim(fgets(STDIN));

    switch ($option) {
        case 'a':
            echo 'enter the first number';
            $a = trim(fgets(STDIN));
            echo 'enter the second number';
            $b = trim(fgets(STDIN));
            echo "the result is " . ($a + $b);
            break;
        case 'b':
            echo 'enter the first number';
            $a = trim(fgets(STDIN));
            echo 'enter the second number';
            $b = trim(fgets(STDIN));
            echo "the result is " . ($a - $b);
            break;
        case 'c':
            echo 'enter the first number';
            $a = trim(fgets(STDIN));
            echo 'enter the second number';
            $b = trim(fgets(STDIN));
            echo "the result is " . ($a * $b);
            break;
        case 'd':
            echo 'enter the first number';
            $a = trim(fgets(STDIN));
            echo 'enter the second number';
            $b = trim(fgets(STDIN));
            echo "the result is " . ($a / $b);
            break;
        case 'q':
            echo 'bye!';
            break;
    }
} while ($option !== 'q');