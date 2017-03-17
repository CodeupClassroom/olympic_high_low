<?php

$value = [];

if (true === is_int($value)) {
    echo '$value is an integer';
} elseif (true === is_float($value)) {
    echo '$value is a float';
} elseif (true === is_bool($value)) {
    echo '$value is a boolean';
} elseif (true === is_array($value)) {
    echo '$value is an array';
} elseif (true === is_null($value)) {
    echo '$value is null';
} elseif (true === is_string($value)) {
    echo '$value is a string';
}

switch (true) {
    case is_int($value):
        echo '$value is an integer';
        break;
    case is_float($value):
        echo '$value is a float';
        break;
    case is_bool($value):
        echo '$value is a boolean';
        break;
    case is_array($value):
        echo '$value is an array';
        break;
    case is_null($value):
        echo '$value is null';
        break;
    case is_string($value);
        echo '$value is a string';
        break;
}

$value = 'Hello!';
switch (gettype($value)) {
    case 'integer':
        echo '$value is an integer';
        break;
    case 'float':
        echo '$value is a float';
        break;
    case 'boolean':
        echo '$value is a boolean';
        break;
    case 'array':
        echo '$value is an array';
        break;
    case 'null':
        echo '$value is null';
        break;
    case 'string':
        echo '$value is a string';
        break;
}

if (gettype($value) === 'integer') {
    echo '$value is an integer';
} elseif (gettype($value) === 'float') {
    echo '$value is a float';
} elseif (gettype($value) === 'boolean') {
    echo '$value is a boolean';
} elseif (gettype($value) === 'array') {
    echo '$value is an array';
} elseif (gettype($value) === 'null') {
    echo '$value is null';
} elseif (gettype($value) === 'string') {
    echo '$value is a string';
}
