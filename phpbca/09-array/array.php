<?php

// Array :  

// An array is an data structure that can hold multiple values under a single variable name.

//1. Index array 
//2. Associative array 
//3. Multidimensional array 

// $one = "Honds";
// $two = "Triumph";


// $bikes = ["Honda", "Triumph", "Suzuki", "Hero", "Bajaj", "TVS"];

// echo $bikes;
// print_r($bikes);
// var_dump($bikes);

// $bikes = array("Honda", "Triumph", "Suzuki", "Hero", "Bajaj", "TVS");
// print_r($bikes);

// Accessing :
// echo $bikes[2];

// Modify 
// $bikes[4] = "BMW";
// print_r($bikes);


// Associative array :

$cars =  [
    "brand" => "BMW",
    "series" => "7",
    "model" => "x7",
];

// $cars =  array(
//     "brand" => "BMW",
//     "series" => "7",
//     "model" => "x7",
// );

// print_r($cars);

// $cars["model"] = "x9";
// print_r($cars);

$bikes = ["Honda", "Triumph", "Suzuki", "Hero", "Bajaj", "TVS"];
// $bikes[] = "Kawasaki";
// $bikes[] = "Ducati";


// array_push($bikes, "Kawasaki", "Ducati");
// array_unshift($bikes, "Kawasaki", "Ducati");
// print_r($bikes);

// array_splice($bikes, 0, 3, "Aprilia");
// print_r($bikes);

$mergeArray = array_merge($bikes, $cars);
print_r($mergeArray);
