<?php 
class Student {

}

$classes = get_declared_classes(); //this returns all declared class in php
echo "Classes: " . implode(' , ', $classes) . "<br>"; //implode turns an object to a string and seperate it by comma

$class_names = ['Product', 'Student', 'student'];// tyring to check which is  a class or not
foreach($class_names as $class_name){
    if(class_exists(nl2br($class_name))){
        echo "{$class_name} is a declared class . <br>";
    }else{
        echo "{$class_name} is not a declared . <br>";
    }
}// Student and student is a class, class is case insensitive. product is not a class because it hasnt been declared as one yet.





?>



