<?php

// Strings :

// Strings is a sequence of characters enclosed within " " or ' '.

//? Define a string in PHP 
// $name = "Ritesh Sahoo";

// echo "My name is $name";
// echo 'My name is $name';

# Length :
// echo strlen($name);
// echo str_word_count($name);

# To uppercase and lowercase
// echo strtoupper($name);
// echo strtolower($name);

# To replace 
// echo str_replace("Sahoo", "Mohanty", $name);

# To reverse 
// echo strrev($name);

# To trim 
// $string = "  l i t   ";
// echo trim($string);  // start and end space exclude

# To array conversion 

// $arrayStr = explode(" ", $string);

// Use print_r() to display array 
// print_r($arrayStr);

# Substring 
// $newVar = "Hi my name is lit";
// echo substr($newVar, 13, 16);
// echo substr($newVar, 13);

// Escape character 
// $escape = "We are the so called \"LITIANS\" in India";
// echo $escape;


$myname = "Pramod Kumar";

// echo "My name is $myname \n";
// echo 'My name is $myname \n';

// length :
// echo strlen($myname);

// echo str_word_count($myname); // word count 

$txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, voluptatum?";


echo str_contains($txt, "ipsum");
var_dump(str_contains($txt, "Ipsum"));
