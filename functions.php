<?php


function sayHello($input) {
	return "Hi there, $input!" . PHP_EOL;
}

$input = "Bob";
// 

$name = "Luis";
echo sayHello($name);

$name = "Ryan";
echo sayHello($name);

