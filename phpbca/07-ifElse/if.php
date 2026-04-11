<?php
/*
    if(condition){
        code execute
    }else {
       code execute
    }

    when the condition becomes true if block code will execute and in false the else block code will execute.
    */


//Todo : Write a php program to display the traffic light simulation 

// $signal = "orange";

// if ($signal === "red") {
//     echo "Stop";
// } else if ($signal === "orange") {
//     echo "Ready";
// } else if ($signal === "green") {
//     echo "Go";
// } else {
//     echo "Invalid Inputs";
// }

// Todo : Write a php program to find out even and odd 

// $num = 1.1115e566;

// if ($num % 2 === 0) {
//     echo "The no is even, $num";
// } else {
//     echo "The no is odd, $num";
// }


// Switch statement :

// $day = "z";

// switch ($day) {
//     case "a":
//         echo "Monday";
//         break;
//     case "b":
//         echo "Tuesday";
//         break;
//     default:
//         echo "Invalid";
// }


// $signal = "orange";


// switch ($signal) {
//     case "red":
//         echo "Stop";
//         break; 
//     case "orange";
//         echo "Ready";
//         break;
//     case "green";
//         echo "Go";
//         break;
//     default:
//         echo "INVALID";
// }


// Match statement 

$signal = "red";

$res =  match ($signal) {
    "red" => "Stop",
    "orange" => "Ready",
    "green" => "Go",

    default => "Invalid",
};

echo $res;

// ignoring break statement. 
