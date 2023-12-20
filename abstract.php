<?php 
//just like an interface, you can define methods and but may not be implemented
//it can also work like normal class that can be implemented, without use the implementation keyword
//abstract class can have properties but interface cant
//interface methods should be public
//we use extends in the abstract class not implement
//we cant have multiple extended abstract classes

abstract class furniture{
    private $name;

    public function size(){
        echo "what size?";
    }

    //it can be implemented later as well like the interface, use the abstract keyword
    //the abstract keyword cannot be private, but can be protected or public
    //the access modifier can be protected or public when trying to implement it
    //when the the abstract method or property is public before implementing it, you cant make it protected.

    //this will be implemented by the children which extends this class
    abstract protected function type();
}

class bed extends furniture {
         protected function type(){
        echo "What is the name of the bed?";
    }
}






?>