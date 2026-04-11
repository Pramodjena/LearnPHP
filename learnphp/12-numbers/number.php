<?php

// Numbers :
//1. Integer 
//2. Float 
//3. Numeric Strings 

// Additional 
//1. NAN
//2. Infinity 


// $a = 10;
// var_dump(($a));

// echo is_int($a);

// PHP has the following predefined constants for integers:

// PHP_INT_MAX - The largest integer supported
// PHP_INT_MIN - The smallest integer supported
// PHP_INT_SIZE -  The size of an integer in bytes

// echo PHP_INT_MAX;

// is_float() function checks if the type of a variable is float.
// echo is_float(15.5);

// PHP has the following predefined constants for floats (from PHP 7.2):

// PHP_FLOAT_MAX - The largest representable floating point number
// PHP_FLOAT_MIN - The smallest representable positive floating point number
// PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
// PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0


// PHP Infinity
// The PHP is_finite() function checks whether a value is finite or not. A value is finite if it is within the allowed range for a PHP float on this platform.

// The PHP is_infinite() function checks whether a value is infinite or not. A value is infinite if it is outside the allowed range for a PHP float on this platform.



// $x = 1.9e411;
// var_dump(is_infinite($x));


// PHP NAN and is_nan() Function
// NAN stands for "Not A Number".

// NAN is returned for invalid mathematical operations.

// The is_nan() function is used to check if a value is "Not A Number" (NAN).

// $x = acos(8);
// var_dump($x);

// Check if value is not a number (NaN)
// var_dump(is_nan($x));


// The is_numeric() function is used to check whether a variable is a number or a numeric string.
// $x = 5985;
// var_dump(is_numeric($x));

// $x = "5985";
// var_dump(is_numeric($x));
// $x = "59.85" + 100;
// var_dump(is_numeric($x));

// $x = "Hello";
// var_dump(is_numeric($x));

// The intval() function is used to get the integer value of a variable.

// $x = 23465.768;
// echo intval($x);

// echo "<br>";

// $x = "23465.768";
// echo intval($x);
