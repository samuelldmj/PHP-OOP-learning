<?php

class Student {

    //created a property, used the public modifier to explicitly define the instance variable.
    public $first_name;
    public $last_name;
    public $country = 'None';
    protected $registration_id;
    private $tuition = 500.00;

    //created a method
   
    public function full_name(){
        //this is used to reference an instance in the class
        return $this->first_name . "  ". $this->last_name;
    }

    protected function hello_family(){
        return 'Hello family';
    }

    private function hello_me(){
        return 'Hello me';
    }

    public function hello_world(){
        return 'Hello world';
    }

    public function tuition_fmt(){
        return "$"  . $this->tuition;
    }

}

class PartTimeStudent extends Student{
    public function hello_parent(){
        return $this->hello_family();
        
    }
    
  
}

//creating instance of a class.

new Student; // we cant reference this class, because it has no object.

//doing instantiation for student 1 here.
//new is used to reference an instance outside a class
//$student1 = new Student; // we can reference this class.
$student1= new PartTimeStudent;
//referencing the attribute/properties with the instances here.
$student1 ->first_name = 'Anna';
$student1 ->last_name = 'Zak';
$student1 ->country;


//echoing the value of the properties using methods
echo $student1->full_name() . "<br>";
echo $student1->hello_world() . "<br>";
// echo $student1->hello_family() . "<br>";
// echo $student1->hello_me() . "<br>";
// echo $student1->registration_id;
// echo $student1->tuition;
echo $student1->hello_parent(). "<br>";
  

//overloding bewARE OF it.
$student1->tuition = 1000 . "<br>";
echo $student1->tuition;
echo $student1->tuition_fmt();


?>