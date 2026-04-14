<?php


// Function : 

// function greet($num1, $num2)
// {
// echo "Hello Naren and Soumya";
// return "Hello Naren and Soumya";
// echo "Hello Naren and Soumya";
//     return $num1 + $num2;
// }


// greet();
// $res =  "greet";
// echo $res(5, 6);


// Default params :
// function setTitle($title = "ChikiMiki")
// {
//     return $title;
// }

// $res = setTitle("Galua");
// echo $res;


// Spread operator --> Indexed array inside a function.

// function getMore($x, ...$y)
// {

// return [$x, $y];
//     echo $x;
//     echo "<br>";
//     print_r($y);
// }

// $res = getMore(6, 7, 8, 9, 11, 255, 5);
// echo $res;
// print_r($res);



//  Declare() :

declare(strict_types=1);  // PHP Version above 7.0

function addTwo(int $num1, float $num2)
{
    return $num1 + $num2;
}

$res = addTwo(5, 6.5);
echo $res;
