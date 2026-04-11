<?php


// TODO: WAP simulation of traffic signal 

$signal = "orange";

// if ($signal === "red") {
//     echo "Stop";
// } else if ($signal === "orange") {
//     echo "Ready";
// } else if ($signal === "green") {
//     echo "Go";
// } else {
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
    "red" => "Stop",
    "orange" => "Ready",
    "green" => "Go",
    default => "Invalid",
};

// echo $res;


$age = 15;

// Ternary opeartor (?)

echo $age > 18 ? "Adult" : "Minor";
