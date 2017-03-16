<?php
$students = [
    ['name' => 'Virginia Potts', 'age' => 29, 'password' => '1234'],
    ['name' => 'Elon Musk', 'age' => 42, 'password' => 'ilovemyjob'],
    ['name' => 'Rasmus Lerdorf', 'age' => 45, 'password' => 'changeme'],
    ['name' => 'Marissa Mayer', 'age' => 38, 'password' => 'codeup'],
];

foreach ($students as $student) {
    foreach ($student as $key => $info) {
        if ($key !== 'password') {
            echo "$key: $info", PHP_EOL;
        }
    }
}
