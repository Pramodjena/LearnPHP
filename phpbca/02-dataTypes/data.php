<?php

// Data types in PHP 

#1. int(Integer)
#2. float(decimal)
#3. string(All the textual data)
#4. bool(boolean)
#5. array 
#6. object(class)
#7. null 
#8. resource(external resource)


// To check data type 
#1. var_dump() --> type and value 
#2. gettype() --> only type use echo


// todo : WAP in php to add two numbers 

// $num1 = 15;
// $num2 = 19;
// $result = $num1 + $num2;

// echo "The sum result is $result";
// echo "The sum result is $num1+$num2";


// echo gettype($result), "<br>";
// var_dump($result);


// $num1 = 15.5;
// $num2 = 19.9;
// $result = $num1 + $num2;
// var_dump($num1);
// var_dump($result);
// echo gettype($result);


// $username = null;
// echo $username;
// var_dump($username);
// $username = array(1, "Pramod", 25, 25.5, true);
// var_dump($username);

/*
class Bike
{
    public $brand;
    public $model;
}

$myBike = new Bike("Triumph", "speed 400");
var_dump($myBike);
*/

// $file = fopen("01-introPHP", "r");
// var_dump($file);


$result = [];
// echo $result;

$result = (string) $result; 
$result = (bool) $result;
$result = (array) $result;
$result = (array) $result;
// echo $result;
var_dump($result);

  
