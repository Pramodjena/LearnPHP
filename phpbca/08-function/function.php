<?php

// Function : A function is a reusable block of code designed to perform a specific task. It runs only when called, can take input (parameters), and may return an output. Functions help make code cleaner, modular, and easier to maintain. 



// function  printName()
// {

//     echo "Hey Gyana";
// }

// printName();   // function call

// echo "Pramod";
// echo "Pramod";
// echo "Pramod";
// echo "Pramod";
// echo "Pramod";
// echo "Pramod";

// for ($i = 0; $i < 6; $i++) {
//     echo "Pramod <br>";
// }


// function printName6times()
// {
//     for ($i = 0; $i < 6; $i++) {
//         echo "Pramod <br>";
//     }
// }

// printName6times();


// using return :
// function printName6times()
// {
//     for ($i = 0; $i < 6; $i++) {
//         return "Pramod <br>";
//     }
// }

// $res =  printName6times();
// echo $res;


// Default params :

// function  getAge($age = 1)
// {
//     return $age;
// }


// $res = getAge();
// echo $res;
// echo "My current age is : $res";
// echo sprintf("My current age is %d", getAge());

// Recursive function :
// A recursive function is a function that calls itself to solve a problem by breaking it down into smaller similar sub-problems. Until it reaches a base condition that stops further calls.

#1. Base case :
//1. Prevents infinite calls
//2. Example n ===0
#2. Recursive case(self call)
//1. Function call itself with a smaller inputs.

// $printNo = function ($num) {

//     echo "The number is $num";
// };

// $printNo(5);

// function printNo($num)
// {

//     echo "The number is $num";
// };

// $res =  printNo(5);
// echo $res;

// $res =  "printNo";
// $res(5);

// function printNo($num)
// {
//     if ($num > 0) {
//         printNo($num - 1);
//         echo "The number is $num <br>";
//     }
// };

// printNo(5);

//Todo : Find the factorial of 5! 

// function  factorial($n)
// {
//     if ($n === 0 || $n === 1) {
//         return 1;
//     }
//     return $n * factorial($n - 1);
// };

// $res =  "factorial";
// echo $res(5);
