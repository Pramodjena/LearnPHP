<?php

#Numbers : 

// 1. Integer 
// 2. Float 
// 3. Numeric Strings
// 4. Infinity
// 5. NaN 

// Define a integer and Float in PHP
// $roll_no = 101; // Integer 
// $price = 19.9;  // float

// $age = "25"; // numeric string 

// To check data type and value 
// var_dump($roll_no, $price, $age);
// echo gettype($roll_no); // to get only type 


// is_int() 
// is_float()
// echo is_int($roll_no);


// $infin = 1.8e4455;
// var_dump(is_finite($infin));

// $nan = acos(12);
// var_dump(is_nan($nan));


// PHP_INT_MAX
// PHP_INT_MIN

// echo 15.99 + "25";   // Type Juggling 

// Round integer 
// echo intval(15.99 + "25"); 

/*
1. PHP_INT_MAX

👉 Maximum integer value supported

64-bit system: 9223372036854775807
32-bit system: 2147483647
2. PHP_INT_MIN

👉 Minimum integer value supported

64-bit system: -9223372036854775808
32-bit system: -2147483648
3. PHP_INT_SIZE

👉 Size of an integer in bytes      

64-bit system: 8
32-bit system: 4
*/

// echo "Max: " . PHP_INT_MAX . "\n";
// echo "Min: " . PHP_INT_MIN . "\n";
// echo "Size: " . PHP_INT_SIZE . " bytes\n";


// echo  is_int(5);
// var_dump(is_int(5.101));
// var_dump(is_float(5.101));


// Infinity 
// var_dump(is_finite(1.54484845e55));
// var_dump(is_finite(0 / 1));
// var_dump(is_infinite(1 / 0));


// var_dump(is_nan(10.55));
// echo is_nan(10.55);

// var_dump(is_numeric("LIT"));
// var_dump(is_numeric("50"));

echo PHP_INT_MAX . "\n";
echo PHP_INT_MIN . "\n";
echo PHP_INT_SIZE . "\n";
