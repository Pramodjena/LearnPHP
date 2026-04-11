<?php

// ==, ===, <>, !=, !==, <, >, <=, >=
// spaceship operator <=>
//-1 if left < right 
// 0 if left = right 
// 1 if left > right 

$a = 30;
$b = '10';
$c = 20;

// var_dump($a === $b);

// echo $a == $c ;  // 1 --> true 
// echo $a === $b ; // empty space --> false 


var_dump(0 == false);  // true
var_dump("" == false); // true
var_dump(null == false); // true
echo $a <=> $c;
