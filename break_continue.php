<?php
foreach (range(1, 100) as $number) {
    if ($number % 2 !== 0) {  // skip the odd numbers
        continue;
    }
    echo $number, PHP_EOL;
}

foreach (range(1, 100) as $number) {
    if ($number > 10) {
        break;
    }
    echo $number, PHP_EOL;
}
