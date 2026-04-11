<?php

// Goto : 
// The  goto statement in PHP is used to move from one part of the program to another using a label.

// Example :

// echo "Start <br>";

// goto skip;
// echo "This will skip";
// echo "This will skip";
// echo "This will skip";

// skip:
// echo "End <br>";


// Todo : Check user pass or fail 

$marks = 50;

// if ($marks >= 40) {
//     echo "Pass";
// } else {
//     echo "Fail";
// }


// echo $marks >= 40 ? "Pass" : "Fail";


if ($marks < 40) {
    goto fail;
}


echo "You passed";

fail:
echo "You failed";
