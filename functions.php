<?php


function sayHello($input = "Bob") {
	return "Hi there, $input!" . PHP_EOL;
}

$name = "Luis";
echo sayHello($name);

$name = "Ryan";
echo sayHello($name);


echo sayHello();