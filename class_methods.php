<?php

class Student {

    //created a property
    var $first_name;
    var $last_name;
    var $country = 'None';

    //created a method
    function say_hello(){
        return 'Hello world';
    }

    function full_name(){
        //this is used to reference an instance in the class
        return $this->first_name . "  ". $this->last_name;
    }
}

//creating instance of a class.

new Student; // we cant reference this class, because it has no object.

//doing instantiation for student 1 here.
//new is used to reference an instance outside a class
$student1 = new Student; // we can reference this class.
//referencing the attribute/properties with the instances here.
$student1 ->first_name = 'Anna';
$student1 ->last_name = 'Zak';
$student1 ->country;

//doing instantiation for student here.
$student2 = new Student;
//referencing the attribute/properties with the instances here.
$student2 ->first_name = 'Brad';
$student2 ->last_name = 'wan';
$student2 ->country = 'Congo';

//echoing the value of the properties using methods
echo $student1->full_name() . "<br>";
echo $student2->full_name() ."<br>";

//using the methods functions.
$class_method = get_class_methods('Student');
echo "Class methods:" ." " .implode(' , ', $class_method) . "<br>";





if(method_exists('Student', 'say_hello')){
    echo "method say_hello() exist in Student Class . <br>";
}else {
    echo "method say_hello() does not exist in Student Class . <br>";
}

//trying to display the methods
echo $student1->say_hello() . "<br>";
echo $student2->say_hello(). "<br>";


?>