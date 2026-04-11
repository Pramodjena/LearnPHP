<?php

// $num = 1;

// while ($num <= 10) {
//     # code...
//     echo "The num is:" . " ", $num, "<br>";

//     # increment 
//     $num++;
// }

# Nested loop 

// for ($i = 1; $i <= 100; $i += 10) {
//     for ($j = $i; $j < $i + 10; $j++) {
//         echo $j . " ";
//     }
//     echo "<br>";
// }

# Break and Continue statement 

// for ($i = 1; $i <= 10; $i++) {
//     # code...
//     if ($i === 5) continue;

//     echo "The number is:" . $i . "<br>";
// }

for ($i = 1; $i <= 10; $i++) {
    # code...
    if ($i === 5) break;

    echo "The number is:" . $i . "<br>";
}
