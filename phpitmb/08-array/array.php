<?php

// Array : 
// Array is a data structure where we can store multiple types of value under a single variable name.


// Types of array 
//1. Indexed array(index)
//2. Associative array(key-value)
//3. Multi-dimensional array 


$names =  ["Siri", "Panda", "Nandi", "Tanu", "Sai", "Luri", "Ayesha"];

// print_r($names);
// var_dump($names);

// Access :
// echo $names[0] . "<br>";
// echo $names[1], "<br>";

// Add one element from the last 
$names[] = "Suuu";
$names[] = "Adi";
// print_r($names);

// Multiple elements 
// array_push($names, "Pablo", "Anamika", "Dipora", "Bbablu", "Chameli");
// print_r($names);

// array_unshift($names, "Susss");
// print_r($names);

// Modify 
// $names[2] = "Nandu";
// print_r($names);


// Associative array 

$users =  [
    "name" => "Satya",
    "age" => 20,
    "college" => "LIT",
    "isSingle" => "No",
];

// print_r($users);

// for ($i = 0; $i < sizeof($names); $i++) {
//     echo "The names are : $names[$i] <br>";
// }


// foreach ($names as $name) {
//     echo "The names are : $name <br>";
// }

// foreach ($users as $key => $value) {
//     echo "The names are => $key : $value <br>";
// }
