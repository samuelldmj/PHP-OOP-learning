<?php 
//a class can only extend only one class
// if you want to inherit multiple classes and have thier functionalities, trait is the answer.

//you define it like this

trait speak{
        //you can have properties and methods here just like a normal class.
        public function speaking(){
            echo "I am speaking";
        }

};

//when you create a class rather than use extends you use "USE"

class humane{
    use speak;
}


$sam = new humane();
$sam->speaking()






























?>