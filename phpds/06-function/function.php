<?php

# Function : A function is a reusable block of code to do a specific task.
# A function is not executed automatically when a page loads.
# A function is executed only when it is called or invoked.

// Syntax :
/*
function dataScience()
{
    echo "Hey data science";
}


dataScience();
*/


/*
function dataScience()
{
    return "Hey data science";
    echo "Will it work";
}


$res = dataScience();
echo $res;
*/


//todo wap in php to add two nums using default params

// function addTwo($num1 = 50)
// {
//     return $num1;
// }


// $res = addTwo();
// echo $res;

// Todo : Print your name six times in php 

// echo "LIT <br>";
// echo "LIT <br>";
// echo "LIT <br>";
// echo "LIT <br>";
// echo "LIT <br>";
// echo "LIT <br>";


// for ($i = 0; $i < 6; $i++) {
//     echo "LIT <br>";
// };


// function printNameSixTimes()
// {
//     for ($i = 0; $i < 6; $i++) {
//         return "LIT <br>";
//     };
// }

// $res = printNameSixTimes();
// echo $res;


// Default params :

// function getAge($age = 1)
// {
//     return $age;
// }

// $res = getAge(27);
// echo $res;
// echo "My age is : " . $res;   // concatenation
// echo "My age is : $res";
// echo sprintf("My age is : %f", getAge(27.5));


// Variadic Functions in PHP (Using ... Operator)
// The ... (called spread / variadic operator) tells PHP:


// function addTwo($a, ...$b)
// {
//     return $b;
// }

// $res =  addTwo(5, 6, 7, 8, 9);
// echo $res;

// Strict Type Checking — PHP will enforce exact data types instead of automatically converting them.
// declare(strict_types=1);

// declare(strict_types=1);

// function addTwo(string $a, string $b)
// {
//     return $a + $b;
// }

// $res =  addTwo("5.1", "6");
// echo $res;
