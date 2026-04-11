<?php

// Numbers 
// 1. Integer 
// 2. Float 
// 3. Numeric Strings
// 4. Infinity
// 5. NaN 

// Define a integer and Float in PHP
$roll_no = 101; // Integer 
$price = 19.9;  // float

$age = "25"; // numeric string 

// To check data type and value 
// var_dump($roll_no, $price, $age);
// echo gettype($roll_no); // to get only type 


// is_int() 
// is_float()
// echo is_int($roll_no);


$infin = 1.8e4455;
// var_dump(is_finite($infin));

$nan = acos(12);
// var_dump(is_nan($nan));


// PHP_INT_MAX
// PHP_INT_MIN

// echo 15.99 + "25";   // Type Juggling 

// Round integer 
echo intval(15.99 + "25"); 