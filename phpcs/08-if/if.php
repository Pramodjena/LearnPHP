<?php



// Todo : WAP to simulate the traffic signal 


$signal = "red";

// if ($signal === "red") {
//     echo "Stop";
// } else if ($signal === "orange") {
//     echo "Ready";
// } else if ($signal === "green") {
//     echo "Go";
// } else {
//     echo "Invalid Inputs";
// }


// switch ($signal) {
//     case "red":
//         echo "stop";
//         break;

//     default:
//         echo "Invalid Inputs";
// }


$res = match ($signal) {
    "red" => "stop",
    "orange" => "ready",
    "green" => "go",
    default => "Invalid inputs",
};

echo $res;
