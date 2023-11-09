<?php
class Student{
    public static $grades = ['freshman', 'sophomore', 'junior', 'Senior'];
    private static $total_students = 0;

    public static function motto(){
        return "to learn php OOP!";
    }   

    public static function count(){
        return self::$total_students;
    }

    public static function add_student(){
        self::$total_students++;
    }
}

echo Student::$grades[1] . "<br>";
echo Student::motto() . "<br>";

echo Student::count() . "<br>";
Student::add_student()  ;
echo Student::count() . "<br>";



//static properties and methods are inherited
class partTimestudent extends Student{ 
}


echo partTimestudent::$grades[1] . "<br>";
echo partTimestudent::motto() . "<br>";

//changes are shared too
partTimestudent::$grades[] = "Alumni" . '<br>';
echo implode(" , ", Student::$grades);

//more examples
Student::add_student() . "<br>";
Student::add_student() . "<br>";
Student::add_student() . "<br>";
partTimestudent::add_student() . "<br>";

echo Student::count() . "<br>" ;
echo partTimestudent::count();






?>