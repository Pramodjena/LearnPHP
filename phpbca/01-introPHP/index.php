<?php

// echo "Hello BCA", "<br>";


# single line comment 
// single line comment 
/* 
multiline comment 
*/

// echo vs print 

// echo --> It accepts multiple segments 
// print --> It accepts only one segment 

// comma(,) --> It's a separator
// dot(.) --> Concatenation / merging 


// echo "Hello" . " " . "World" . " " . "PHP" . " " . "Programme";
// echo "<h1>Hello world</h1>";

# print 

// print "Hello" , " " . "World" , " " . "PHP" , " " . "Programme";

// Variables :

//1. Starts with $ 
//2. Starts with a letter or underscore(_)
//3. Cannot start with a number 
//4. Cannot contain spaces or special characters 
//5. Case-sensitive ($age !== $AGE)

// Use camelCase naming convention(My preferred one)

// $myName = "Pramod";
// $myAge =  25;
// $myCity = "Bhubaneswar";
// $myState = "Odisha";
// $myCode = 751013;

// echo "My name is" . " " . $myName . " " . "and my age is" . " " . $myAge;


// Embedded in HTML 
// echo "<h1> $myName </h1>";

// Constants(global scope) 
//1. define("VARIABLE NAME",value,case-insensitive(false/true))
// By default --> false

//2. const keyword --> VARIABLE NAME
// in constants the naming convention --> UPPERCASE

// define("MYNAME", "Pramod", true); // PHP older version

// print MYNAME;
// print myname;

// const MYAGE = 25;
// print MYAGE;

// const VAR = "Var";
// const MYAGE = 26;

