<?php


// Array : 
// Array is a data structure where we can store multiple types of data under a single variable name.


// Types of array :
//1. Indexed array
//2. Associative array  
//3. Multi-dimensional array 


// Indexed array :

$fruits = ["Apple", "Banana", "Grapes", "Pineapple"];
// Index always starts from 0;

// print_r($fruits);
// var_dump($fruits);

$user = ["LIT", 16, false, "Bhubaneswar"];
// var_dump($user);

// echo "The total length is" . " " . sizeof($fruits) . "<br>";
// echo $fruits[sizeof($fruits) - 1];


$fruits[3] = "Mango";
// print_r($fruits);

// add one value last 
$fruits[] = "Orange";
$fruits[] = "Blueberry";

// Multiple values 
array_push($fruits, "X", "Y", "Z");
array_unshift($fruits, "Jaha b");
// print_r($fruits);


$names = array("A", "B", "C", "D");
// print_r($names);


//2. Associative array 

$cars = ["brand" => "TaTa", "model" => "Safari", "price" => "29l"];

// print_r($cars);
// echo $cars["brand"];
// $cars["price"] = "30l";
// print_r($cars);

foreach ($cars as $key => $value) {
    echo "$key : $value <br>";
}
 