<?php

// echo date_default_timezone_get();
date_default_timezone_set("Asia/Kolkata");

// echo date("Y-m-d");
// echo date("h:i:s a");

// echo time(); // Jan 1 1970 

echo date("l, y-m-d h:i:s a");
echo "<br>";


// let's go to the future 
// echo "I am in future" . date("y-m-d", strtotime("+10 days"));
// echo "I am in future : " . date("y-m-d", strtotime("tomorrow"));
echo "I am in future : " . date("y-m-d", strtotime("next monday"));
