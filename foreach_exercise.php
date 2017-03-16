<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//  PHP: count($things)
// JS: $things.length

/*for ($i = 0; $i < count($things); $i++) {
    $thing = $things[$i];

}*/

foreach ($things as $thing) {
    if (is_array($thing)) {
        echo 'Array (';
        foreach ($thing as $i => $innerThing) {
            // echo = language construct
            if ($i === count($thing) - 1) {
                echo $innerThing;
            } else {
                echo $innerThing, ', ';
            }
        }
        echo ')', PHP_EOL;
    } else {
        echo $thing, PHP_EOL;
    }
}
