<?php

// Array : 

// Array is a data structure to store or hold multiple types of data under a single variable name.

$name1 = "Manmaya";
$name2 = "Biswajeet";
$name = "Laxmi";

$names = ["Manamaya", "Biswajeet", "Laxmi"];
// echo $names;
// var_dump($names);
// print_r($names);

//1. Indexed array(index always starts from 0)
//2. Associative array(key -> value pairs) 
//3. Multidimensional array 

$bikes = array("Honda", "Triumph", "Suzuki", "TVS");
// print_r($bikes);


$cars = ["brand" => "BMW", "model" => "X7", "price" => "5cr"];
// print_r($cars);


echo $bikes[1];
$bikes[3] = "Hero";
$bikes[] = "Ducati";
array_push($bikes, "BMW", "MV");
print_r($bikes);
 