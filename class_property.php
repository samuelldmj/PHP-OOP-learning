<?php

class Student {

    //created a property
    var $first_name;
    var $last_name;
    var $country = 'None';

    
}

//creating instance of a class.

new Student; // we cant reference this class, because it has no object.

//doing instantiation for student 1 here.
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

//echoing the value of the properties
echo $student1->first_name . "  ". $student1->last_name ."<br>";
echo $student2->first_name . "  ". $student2->last_name ."<br>";

//using the properties or attributes functions.
$class_vars = get_class_vars('Student');
echo "Class vars: <br>";
echo "<pre>";
print_r($class_vars);
echo "</pre> <br>";


$object_vars = get_object_vars($student1);
echo "Object vars: <br>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";


if(property_exists('Student', 'first_name')){
    echo "First_name exist in Student Class . <br>";
}else {
    echo "First_name does not exist in Student Class . <br>";
}




?>


