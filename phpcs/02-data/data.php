<?php

// Variable in PHP 

// echo "Hello my name is php <br>";

// echo "Hello my name is php <br>";

// $name = "PHP";

// echo "Hello my name is" . $name . "<br>";
// echo "Hello my name is" . $name . "<br>";


// . for concatenation 
// , for multiple segments 

// echo "hello", "Bye", "<br>";

// echo and print: is used for printing 
// print "hello","PHP BRO"; 
// In print we cannot print multiple segments 

// Define constant variable 

// Constant variable 

# define(name,value,case-insensitive)
# can't use $ sign 

// define("MYNAME", "Pramod");

// print MYNAME . "<br>";
// echo MYNAME . "<br>";


// Which two of the following is  valid ?

// $1name 
// $_name 
// $user_name 
// $user name 

// $_name  = "Correct";
// echo $_name;
// $user_name  = "Correct also";
// echo $user_name;

// $name$email = "hello"; invalid 


// Data type 

// $x = NULL;
// echo $x, "<br>";


// $x = "Dynamic";
// $x = true;
// $x = 22.550014841;
// $x = 1545454545;
// $x = array(25, 56, 78, 90, "Pramod");
// var_dump($x); // to check data types 

// define("SITE_NAME", "My Website", true);

// echo SITE_NAME;
// echo "<br>";
// echo site_name;

// const COLLEGE = "Constant";
// echo COLLEGE;
// COLLEGE = "Okay";


// Variable :

// $myName = "Pramod";
// print $myName,"<br>"; // one segment only 
// echo $myName, "<br>";  // multiple segment 

// Constants(UPPERCASE)
//1. define("name",value,case-insensitive)

// define("MYNAME", "PRATIKSHYA");
// echo MYNAME, "<br>";

//2. using const 
// const MYAGE = 25;
// echo MYAGE;

// const VAR = "Bhubaneswar";
// echo VAR;

// Type Casting :

$num = 10;
var_dump($num);
$num = (string) $num;

var_dump($num);
$num = (bool) $num;
var_dump($num);

$num = NULL;
var_dump($num);
$num = (bool) $num;
var_dump($num);

$num =  (array) $num;
var_dump($num);

echo "10" + 10;
echo 10 + "10";
