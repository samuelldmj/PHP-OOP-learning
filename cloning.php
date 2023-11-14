<?php 
class Beverage {

    public $name;

    function __construct(){
        echo "New beverage was created" . "<br>";
    }

    function __clone(){
        echo "Existing beverage was copied" . "<br>";
    }
}

//we get the construct method called
$a = new Beverage;
$a->name = "coffee";

echo $a->name . "<br>";

echo "<hr>";

//we get the clone method called
$b = clone $a;
echo $a->name . "<br>";
echo $b->name . "<br>";

echo "<hr>";
$b->name  = "tea". "<br>";
echo $a->name . "<br>";
echo $b->name . "<br>";





?>