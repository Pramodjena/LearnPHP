<?php

// date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();
// echo date("Y-m-d H:i:s");

// Date 
// echo date("Y-m-d");

// Common Format Characters
// Format	Meaning	Example
// Y	Full year	2026
// y	Short year	26
// m	Month (01–12)	04
// d	Day	20
// l	Day name	Monday
// h	Hour (12h)	07
// H	Hour (24h)	19
// i	Minutes	45
// s	Seconds	30
// a	am/pm	pm

// echo date("d-m-Y h:i:s a");

// Timestamp = seconds since Jan 1, 1970
// echo time();
// echo date("Y-m-d", time());  // convert time stamp to date 
// echo date("Y-m-d", strtotime("tomorrow"));  // Convert human-readable string → timestamp
// echo date("Y-m-d", strtotime("+2 days"));
// echo date("Y-m-d", strtotime("-1 week"));
// echo date("Y-m-d", strtotime("next Sunday"));

// Count tour age 
// $birthDate = "1999-08-21";

// $age = date("Y") - date("Y", strtotime($birthDate));

// echo "Age: " . $age;


// $date1 = date_create("2024-01-01");
// $date2 = date_create("2026-01-01");

// $diff = date_diff($date1, $date2);

// echo $diff->format("%y years");


date_default_timezone_set("Asia/Kolkata");

echo date("l, d F Y");
