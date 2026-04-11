<?php

// Todo : Create an array of 5 elements and print each elements using echo statement 

$bikes = ["Honda", "TVS", "Bajaj", "Triumph", "Suzuki"];

// echo $bikes;
// print_r($bikes);

// echo $bikes[0], "<br>";
// echo $bikes[1], "<br>";


// for ($i = 0; $i < sizeof($bikes); $i++) {
//     echo $bikes[$i] . "<br>";
// }


// foreach 
foreach ($bikes as $bike) {
    echo $bike, "<br>";
}
 