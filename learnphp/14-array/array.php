<?php

#PHP Array Types
// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays

// Indexed array has index number 
// $cars = array("Volvo", "BMW", "Toyota");
// $cars[1] = "Ford";
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// foreach ($cars as $x) {
//     echo "$x <br>";
// }


// Associative arrays use named keys, instead of numeric indices.
// $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// var_dump($car);


$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// $car["year"] = 2024;
// echo $car["year"];

foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
