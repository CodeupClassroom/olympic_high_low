<?php
// arguments count $argc
// arguments values $argv

// guard clause
if ($argc < 3) {
    fwrite(STDERR, 'You need to pass two values to this command: arguments.php 2 7');
    exit(1);
}

// guard clause
if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    fwrite(STDERR, 'You need to pass two numeric values: arguments.php 2 7');
    exit(1);
}

$i = $argv[1];
while ($i <= $argv[2]) {
    echo $i, PHP_EOL;
    $i++;
}
