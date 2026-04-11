<?php

// && 
// || 
// !
// and 
// or 
// xor 

$age =  22;
/*
if ($age >= 18 && $age <= 20) {
    echo "Your are eligible";
} else {
    echo "Not eligible";
}
*/

if ($age >= 18 xor $age <= 21) {
    echo "Your are eligible";
} else {
    echo "Not eligible";
}

// xor operator returns false if both value true or false (if either of them true then return false)

