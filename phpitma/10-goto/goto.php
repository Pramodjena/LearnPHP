<?php

// Goto : 
// goto statement in php move from one part of the program to another part of the program using a label.

// Example :

// echo "Start";
// echo "1";
// echo "2";

// goto end;
// echo "Skip";

// end:
// echo "End";

$age = 15;

if ($age < 18) {
    goto x;
}

echo "Adult <br>";

x:
echo "Minor <br>";
