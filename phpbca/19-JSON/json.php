<?php


// JSON :

// Javascript object notation 

// Associative array
// $user = array("name" => "Pramod", "age" => 51, "college" => "LIT");

// Convert into JSON
// $jsonUser = json_encode($user);
// echo $jsonUser;

// Convert back to original
// $jsonUser = json_decode($jsonUser, true);
// print_r($jsonUser);



// Class Object :
// Creating object :

// $user = new stdClass();
// print_r($user);
// $user->name = "Pramod";
// $user->age = 26;
// $user->college = "LIT";
// print_r($user);

// Production level :
class Student
{
    public $name;
    public $age;
    public $college;
    private $married;

    public function getMarried()
    {
        return $this->married;
    }
}

$student1 = new Student();
$student1->name = "Pramod";
$student1->age = 26;
$student1->college = "LIT";
// $student1->married = false;
$student1->getMarried();

print_r($student1);
