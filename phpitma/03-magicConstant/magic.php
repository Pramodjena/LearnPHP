<?php

// Magic constants 
// PHP has 9 predefined constants that change value depending on where they are used, also called the magic constants.

// The magic constants provide information about the current state of the script, such as file name , dir name etc..

// The magic constants always start with double underscores(__)

//1. __CLASS__
//2. __DIR__
//3. __FILE__
//4. __FUNCTION__
//5. __LINE__
//6. __METHOD__
//7. __NAMESPACE__
//8. __TRAIT__
//9. ClassName::class

// echo __DIR__, "<br>";
// echo __FILE__, "<br>";
// echo __LINE__;
// echo  __NAMESPACE__;


# __CLASS__ 
// It is used to get the class name inside a class.
// echo __CLASS__;

#__DIR__
// To get the directory of the file 
// echo __DIR__ . "<br>";

#__FILE__
// To get the full path including file name 
// echo __FILE__;

#__FUNCTION__
// It is used to get the function name inside a function.

#__LINE__
// To get the current execution line 
// echo __LINE__;

#__METHOD__

#__NAMESPACE__
// If used inside a namespace , the namespace returns 
