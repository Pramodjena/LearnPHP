<?php

// Strings in PHP :
// Using " " --> The variable returns the value.
// Using '' --> The variable normally works as a string. 

// $name = "Pramod";

// echo "My name is $name";
// echo 'My name is $name';

// String functions :
// strlen()
// echo strlen($name);
// echo str_word_count("Hello world!");
// $txt = "I really love PHP!";
// var_dump(str_contains($txt, "love"));
// Note: This function performs a case-sensitive search.
// If you will type Love it will return you false.


// The strpos() function searches for a specific text within a string.
// echo strpos("Hello world!", "world");
// The str_starts_with() function checks if a string starts with a specific substring.

// $txt = "I really love PHP!";
// var_dump(str_starts_with($txt, "I really"));

// $txt = "I really love PHP!";
// var_dump(str_ends_with($txt, "PHP!"));

// The strtoupper() function returns a string in upper case.
// $x = "Hello World!";
// echo strtoupper($x);

// The strtolower() function returns a string in lower case.
// $x = "Hello World!";
// echo strtolower($x);

// The str_replace() function replaces some characters with some other characters in a string.

// $x = "Hello World!";
// echo str_replace("World", "Dolly", $x);

// The strrev() function reverses a string.
// $x = "Hello World!";
// echo strrev($x);
// The trim() function removes any whitespace from the beginning or the end.
// $x = "    Hello World! ";
// echo trim($x);

// The explode() function splits a string into an array.
// $x = "Hello lovely World!";
// $y = explode(" ", $x);

//Use print_r() to display the result
// print_r($y); used for array and object 

// The substr() function is used to extract a part of a string (slice a string).
$x = "Hello World!";
echo substr($x, 6, 5);

// Start the slice at index 6 and go all the way to the end:

$x = "Hello World!";
echo substr($x, 6);

// Get the 3 characters, starting from the "o" in world (index -5):

$x = "Hello World!";
echo substr($x, -5, 3);

// From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).

// Should end up with "ow are y":

$x = "Hi, how are you?";
echo substr($x, 5, -3);

// Escape characters 
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;