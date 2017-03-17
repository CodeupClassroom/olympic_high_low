<?php
// create a game
// should show a sequence of number it should stop at a random value
// your player is going guess when a sequence of numbers is going to stop

$random = mt_rand(1, 100);

for ($i = 1; $i <= 100; $i++) {
    if ($i === $random) {
        break;
    }
    echo $i, PHP_EOL;
    //sleep(2);
}

$i = 1;
while ( $i <= 100) {
    if ($i === $random) {
        break;
    }
    echo $i, PHP_EOL;
    $i++;
}

foreach (range(1, 100) as $i) {
    if ($i === $random) {
        break;
    }
    echo $i, PHP_EOL;
}


// Show all the products with a price of less than 100 dolars.
$prices = [
    56, 48, 78, 12, 52, 120, 99, 71, 90,
];
foreach ($prices as $price) {
    if ($price >= 100) {
        continue; // with the next element
    }
    echo $price, PHP_EOL;
}


$numbers = [1, 2, 3, 4, 5];
// Loop 1
foreach ($numbers as $key => $value) {
    echo "{$value}\n";
    // Loop 2
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            echo "{$i}\n";
            break 2;
        }
    }
}
