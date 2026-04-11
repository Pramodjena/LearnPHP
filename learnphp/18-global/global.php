<?php


// Global and Local variable :

// global :
// Global variable in php is declared outside any function and can be accessed anywhere in the script but directly not inside functions unless specified.

// Example:
// $y = 20;
 
// function globalVariable()
// {
    // global $y;
    // echo $y;    // Error: undefined variable 
    // echo  $GLOBALS['y'];   // $GLOBALS :  is a super global associative array that stores all global variables.
// }

// globalVariable();
// echo $y;


// local : 
//  A local variable in php is declared inside a function and can be used inside only the function.

// Example:
// function localVariable()
// {
//     $x = 10;
//     echo $x;
// }

// localVariable();
// echo $x;  // error : undefined variable 
