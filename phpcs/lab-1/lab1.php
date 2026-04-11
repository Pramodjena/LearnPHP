<?php


//TODO : Create an array and access each element using for loop.

// $users = ["LIT", 16, "Bhubaneswar", 751023];

// for ($i = 0; $i < sizeof($users); $i++) {
//     echo "My details are $users[$i] <br>";
// }

// foreach ($users as $x) {
//     echo "My details are: $x <br>";
// }

// TODO : Create an array of elements and filter out those elements starting letter "P";

// $cars =  ["Ponda", "Pia", "Hyundai", "PaPa", "Mahindra", "PG"];

// foreach ($cars as $car) {

//     if ($car[0] === "P") {
//         echo $car . "<br>";
//     }
// echo $car;
// }


// TODO : [10,20,30,40,50] find Total, Average , Max value, Min Value.

// $numbers = [10, 20, 30, 40, 50];

// $sum = 0;
// $max = $numbers[0];

// foreach ($numbers as $num) {
//     $sum += $num;

//     if ($num > $max) {
//         $max = $num;
//     }
// }

// $avg = $sum / sizeof($numbers);
// $avg = $sum / count($numbers);

// echo "The total sum : $sum <br>";
// echo "The average is: $avg <br>";
// echo "The max no is: $max <br>"; 


// TODO : Search for a number in ana array and print it's index.


// $numbers = [10, 20, 30, 40, 50];
// $search = 20;

// $found = false;

// foreach ($numbers as $index => $value) {
//     if ($value === $search) {
//         echo "Found at $index";
//         $found = true;
//         break;
//     }
// }
// if (!$found) {
//     echo "Not found";
// }


// TODO : Create a cart array :
//?1. Add 
//?2. Remove last item
//?3. Print total items 

$cart = ["Lip-gloss", "Ear-rings"];

// Add 
$cart[] = "R15";

// Remove
array_pop($cart);


// Count 
echo "Items:" . count($cart) . "<br>";

foreach ($cart as $item) {
    echo $item . "<br>";
}

// print_r($cart);
