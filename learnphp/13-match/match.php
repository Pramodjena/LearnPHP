<?php

// The PHP Match Expression
//   The match expression evaluates an expression against multiple alternatives (using strict comparison) and returns a value. 



// Here are the key differences between match and switch:

// A match expression has a more readable syntax than switch
// A match expression returns a value, while switch does not
// A match expression breaks automatically after a match, while switch requires break;
// A match expression has strict comparison (===), while switch uses loose comparison (==)

// $result = match ($expression) {
//     condition1 => returnvalue1,
//     condition2 => returnvalue2,
//     condition3, condition4 => returnvalue3,
//     default => defaultvalue,
// }
// Tip: The default arm catches all expressions that are not matched.


// $favcolor = "re";

// $text = match ($favcolor) {
//     "red" => "Your favorite color is red!",
//     "blue" => "Your favorite color is blue!",
//     "green" => "Your favorite color is green!",
//     default => "Your favorite color is neither red, blue, nor green!",
// };

// echo $text;


$d = 3;

$text = match ($d) {
    1, 2, 3, 4, 5 => "The week feels so long!",
    6, 0 => "Weekends are best!",
    default => "Invalid day",
};

echo $text;
