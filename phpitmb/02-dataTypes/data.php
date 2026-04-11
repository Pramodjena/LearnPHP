<?php


// Data Types in PHP 
#1. int(integer)
#2. float(decimal like 0.5 etc)
#3. bool(boolean true/false)
#4. string(all textual data enclosed within ""/'')
#5. array
#6. object(class) 
#7. null
#8. resource(external resources)


// To check the data type 
//1. var_dump() --> checks both type and value 
//2. gettype() --> checks only type use echo 



// todo : WAP in php to add two numbers 

// $num1 = 15;
// $num2 = -15;
// $result =  $num1 + $num2;

// echo "The sum result is", $num1 + $num2, "<br>";
// echo "The sum result is $result";

// echo gettype($result), "<br>";
// var_dump($num1);


// $num1 = 2.2;
// $num2 = 3.3;
// $result = $num1 + $num2;

// echo "sum the result: $result", "<br>";
// echo gettype($result), "<br>";
// var_dump($result);

// $name = "Pramod";
// var_dump($name);
// $name = null;
// var_dump($name);
// $name = true;
// var_dump($name);
// $name = array(0, 1, 2, 3);
// var_dump($name);


// Type casting : 
// $a = 10;
// var_dump($a);

// To string 
// $a =  (string) $a;
// var_dump($a);

// $a = NULL;
// var_dump($a);
// To bool
// To float 
// To NULL (Tricky one PHP 8.0.0 and above it was deprecated)
// To array 

// Type juggling 
// echo "10" + 0;
// echo "10" + "0";
// echo 10 * 0 + "0";
