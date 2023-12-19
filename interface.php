<?php 
//interface
//it is like a skeleton for a class
//it doesn't implement a function, it just tell what a function is needed in a class and what argument they should have

interface Man{
    public function sayName();
    public function sayAge(int $Yearborn);
}

interface Developer{
    public function programmingLanguage();
}


//if you are creating a Human you should have those functions and argument
//to implement the interface keyword
//you need to create a class and then use the implement keyword to link it with the interface

// class Zed implements Man {
//     public function sayName(){
//         echo "my name is Samuel";
//     }

//     public function sayAge(int $Yearborn){
//         echo 'i am  . "(date(format: "Y") - $Yearborn )" . years old ' ;
//     }

// }

// $zed = new ZEd;
// $zed->sayAge(1994);


//Multiple interfaces
class Zed implements Man , Developer {
    public function sayName(){
        echo "my name is Samuel";
    }

    public function sayAge(int $Yearborn){
        echo 'i am  . "(date(format: "Y") - $Yearborn )" . years old ' ;
    }

    public function programmingLanguage(){
        echo "i am a programmer";
    }

}

$zed = new ZEd;
$zed->sayAge(1994);




?>