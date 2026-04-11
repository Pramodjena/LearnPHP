<?php


# Operator :
// Arithmetic
// + , - , * , / , ** , %


# Increment and decrement 
//++$a(pre-increment)
//$a++(post increment)
//--$a
//$a--



# Assignment operator 
// = 
// += ($a = $a + $b)
// -=
// %= 


# Comparison
// ==
// === 
// != or <>
// !== 
// >
// < 
// <=> (spaceship operator)(returns -1(less than),0(equal),1(greater than))

# Logical 
// AND(&&) --> ALL CONDITIONS TRUE
// OR(||) --> AT LEAST ONE CONDITION TRUE
// NOT(!) --> TRUE BECOMES FALSE AND VICE VERSA 
// XOR(exclusive or) --> True only when one either true or false and return false when both are the same. 


// Todo : write a php program to add two numbers
// $num1 = 234;
// $num2 = 976;
// $add = $num1 + $num2;
// echo "The sum of num1 and num2 is =", $add;

// todo: WAP to find the reminder when 25 is divided by 4.

//$remder = 25 % 4;
//echo $remder;

//TODO : write a php program using preincrement,post increment,pre decrement, post decrement and use the short-hand addition operator
// $num1=12;
// echo ++$num1, "<br>"; #pre increment 13
// echo $num1++,"<br>"; # post increment 13+1
// echo --$num1,"<br>"; #pre decrement 14-1
// echo $num1--,"<br>"; #post increment 13
// echo $num1; #13-1=12


// Tod= : Compare two values 

// $a = 20;
// $b = "30";
// var_dump($a <=> $b);
// var_dump($a <> $b); // true 

// Todo: 

$a = 5;
$b = 10;

// $result = ($a > 5) && ($b < 10);

// var_dump($result);
// echo $result;


$result = ($a > $b) && ($b > $a);
echo $result;  // it will print you nothing in case of false 
var_dump($result);  // use only var_dump()

echo (5 < 2) || (10 === "10");  // In echo true-1 false-0(empty screen)

// XOR 
$result =  (5 < 2) xor (10 === "10");
echo !$result;
