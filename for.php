<?php
// input: A pair of numbers: min and max for a range
fwrite(STDOUT, 'Enter the start of the range: ');
$start = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter the end of the range: ');
$end = trim(fgets(STDIN));

//  process: modulus
/*initialization*/
for ($i = $start; $i <= $end ;$i++) {
    echo $i, PHP_EOL;
}

// output: only even numbers
