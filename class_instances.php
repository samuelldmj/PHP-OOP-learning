<?php 
class Student {

}

//creating instance of a class.

new Student; // we cant reference this class, because it has no object.


$student1 = new Student; // we can reference this class.
$student2 = new Student;

echo get_class($student1) ."<br>";
$class_names = ['Product', 'Student', 'student'];// tyring to check which is  a class or not
foreach($class_names as $class_name){
    if(is_a($student1, $class_name)){
        echo "student1 is a {$class_name} class . <br>";
    }else{
        echo "student1 is not a {$class_name} class. <br>";
    }
}

?>