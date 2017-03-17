<?php

// write some code in each function that makes sure both arguments are numeric
// write some code in functions that could have a divide by zero problem that catches it

function throwErrorMessage($a, $b) {
	return "$a and $b must both be numeric inputs." . PHP_EOL;
}

function argsAreNumeric($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		return false;
	}
}

function add($a, $b)
{	
	if(argsAreNumeric($a, $b)) {
    	return $a + $b;
	} else {
		return throwErrorMessage($a, $b);
	}	
}

function subtract($a, $b)
{	
	if(argsAreNumeric($a, $b)) {
    	return $a + $b;
	} else {
		return throwErrorMessage($a, $b);
	}	
}

function multiply($a, $b)
{	
	if(argsAreNumeric($a, $b)) {
    	return $a * $b;
	} else {
		return throwErrorMessage($a, $b);
	}	
}

function divide($a, $b)
{	
	if(argsAreNumeric($a, $b)) {
		if($b == 0) {
			return "Cannot divide by 0" . PHP_EOL;
		}
    	return $a / $b;
	} else {
		return throwErrorMessage($a, $b);
	}	
}

function modulo($a, $b) 
{	
	if(argsAreNumeric($a, $b)) {
		if($b == 0) {
			return "Cannot divide by 0" . PHP_EOL;
		}
		return $a % $b;
	} else {
		return throwErrorMessage($a, $b);
	}	
}


// Add code to test your functions here
echo add(2.5, 2.5) . PHP_EOL;
echo subtract(6, 10) . PHP_EOL;
echo multiply(4, 3) . PHP_EOL;
echo divide(1, 2) . PHP_EOL;
echo divide("Jane", "Bob");
echo divide("John", "Yoko");
echo divide("Sonny", "Cher");