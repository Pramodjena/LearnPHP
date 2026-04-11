<?php


// Function : A function is a reusable block of code designed to perform a specific task. It runs only when called, can take input (parameters), and may return an output. Functions help make code cleaner, modular, and easier to maintain.

// Syntax : 

// function functionName($params1, $params2)
// {
//     return $params1;
// }

// functionName(args1, args2);


// function printNo($num = 10)
// {
//     return $num;
// }


// function printNo($name = 15.5)
// {
//     return $name;
// }

// $res =  sprintf("My name is : %s", printNo());
// echo $res;

# 1 Way :
// $res = "The result is : " . printNo(20);
// $res = "The result is :  printNo(20)";
// echo $res;

# 2 way :
// $value = printNo();
// $res =  "The result is : $value";
// echo $res; 


# 3 way :

// $res =  sprintf("The result is: %d", printNo());
// echo $res; 

/*

| Placeholder | Meaning | Example |
| ----------- | ------- | ------- |
| `%d`        | Integer | 10      |
| `%f`        | Float   | 10.5    |
| `%s`        | String  | "Hello" |
| `%x`        | Hex     | 1a      |
| `%b`        | Binary  | 1010    |

*/

// Variadic Functions in PHP (Using ... Operator)
// The ... (called spread / variadic operator) tells PHP:

// Strict Type Checking — PHP will enforce exact data types instead of automatically converting them.

// declare(strict_types=1);

// echo "5" + 5;

// function add(int $a, int $b)
// {
//     return $a + $b;
// }

// echo "The result is :  ", add(5, 4);

// echo "The result is :  " . add(5, 4);

// echo sprintf("The result is :  %d", add(5, 4));

// $res = add(5, 4);
// echo "The result is : $res";

// Variable function :
// Store the function as a variable 

// 1st way :
// function  greet($user)
// {
//     echo "Hello $user";
// }

// $res =  "greet";
// $res("Pramod");

//2nd way :
// $greet = function ($user) {
//     echo "My name is $user";
// };

// $greet("Pramod");


// RECURSIVE FUNCTION :
// A recursive function is a function that repeats itself on smaller inputs until a stopping condition is met.

// function countNo($num)
// {
//     if ($num > 5) {
//         return; // Base case (stop recursion)
//     }

//     echo "The no is $num <br>";
//     countNo($num + 1); // Recursive call
// }

// countNo(1);


// Todo : Find the factorial of 5 
// n! = n × (n-1) × (n-2) × ... × 1

function factorial($n)
{
    // Base condition
    if ($n === 0 || $n === 1) {
        return 1;
    }

    // Recursive call
    return $n * factorial($n - 1);
}

// Example
echo factorial(5); // 120

/*
n! = n × (n-1) × (n-2) × ... × 1
f(5)
= 5 * f(4)
= 5 * (4 * f(3))
= 5 * (4 * (3 * f(2)))
= 5 * (4 * (3 * (2 * f(1))))
= 5 * (4 * (3 * (2 * 1)))
= 120
*/
