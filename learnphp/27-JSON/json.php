<?php

$data = array("name" => "Pramod", "age" => 36, "college" => "LIT");
// print_r($data);

// Encode 
$jsonData =  json_encode($data);
// echo $jsonData;

// Decode 
// $jsonData = json_decode($jsonData, true);  // if we remove true it will print an object
print_r($jsonData);


// Creating object 
// $obj = new stdClass();

// $obj->name = "Pramod";
// $obj->age = 36;
// $obj->college = "LIT";

// echo $obj->name;

// Production  ready :
// class Student
// {
//     public $name;
//     public $age;
//     public $college;
// }

// $student1 = new Student();

// $student1->name = "Pramod";
// $student1->age = 36;
// $student1->college = "LIT";

// echo $student1->name;


// Using constructor :
// class Student
// {
//     public $name;
//     public $age;
//     public $college;

//     public function __construct($name, $age, $college)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->college = $college;
//     }
// }

// $student1 = new Student("Pramod", 36, "LIT");

// echo $student1->college;

// __construct() = auto-called when object is created
// It is automatically called when an object is created
// It is used to initialize properties
// public,private,protected is an access modifier — it defines who can access properties/methods
class Student
{
    public $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$s1 = new Student("Pramod", 36);

echo $s1->name;
echo "<br>";       // ✅
echo $s1->getAge();   // ✅
// echo $s1->age;
