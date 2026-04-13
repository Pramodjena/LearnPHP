<?php

// Function : 
// Function is a reusable block of code to do a specific task.
// Function cannot execute automatically.
// Function can be executed by calling itself.

// Function contains parameters, arguments and return.

// function greet($name)
// {
// echo "Hello $name ITM People!!";
// return "<h1>Hello ITM People</h1>";
// }

// echo greet();
// $res =  greet();
// echo $res;
// $res = "greet";
// echo $res("LIT");


// Default parameters :

// function setAge($age = 20)
// {
//     if ($age > 18) {
//         echo "Adult";
//     } else {
//         echo "Minor";
//     }
// }

// setAge(18);

// Spread operator :
// Variadic func
// ... --> array 
// function printNum($num, ...$z)
// {
//     echo $num;
//     echo "<br>";
//     print_r($z);
//     // foreach ($num as $n) {
//     //     echo "Numbers are: $n <br>";
//     // }
// }

// printNum(5, 6, 8, 546687, 1.0, 2.5555);


// Declare() --> strict type 

declare(strict_types=1);

function addTwo(int $a, string $b)
{
    echo $a + $b;
}
addTwo(5, "6");
