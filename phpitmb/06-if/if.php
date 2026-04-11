<?php

// IF statement :
// Todo : WAP to simulate the traffic light signal 

$signal = "green";

// if($signal === "red"){
//     echo "Stop";
// }else if($signal === "orange"){
//     echo "Ready";
// }else if($signal === "green"){
//     echo "Go";
// }else {
//     echo "Invalid";
// }



// switch ($signal) {
//     case "red":
//         echo "Stop";
//         break;
//     case "orange":
//         echo "Ready";
//         break;
//     case "green":
//         echo "Go";
//         break;
//     default:
//         echo "Invalid";
// }


$res = match ($signal) {
    "red"  => "Stop",
    "orange" => "Ready",
    "green" => "Go",
    default => "Invalid",
};

echo $res;


// Ternary operator(?)
$age = 16;

echo $age > 18 ? "Adult" : "Minor";
 
