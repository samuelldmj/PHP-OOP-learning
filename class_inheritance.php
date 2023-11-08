<?php

class User{
  
    //created some properties
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    //created some methods
    function full_name(){
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User {
    var $country;
    var $city;
    var $state;

    function location(){
        return  $this->state . " ," .$this->city . " ,"  . $this->country;
    }

}

class Useradmin extends User{
    var $is_admin = True;

    function full_name(){
        return $this->first_name . " " . $this->last_name . $this->username. " (Admin)";
    }

}

$u = new User;
$u->first_name = "Jerry";
$u ->last_name = 'Grandos';
$u->username = 'jgrandos';

$u2 = new Customer;
$u2->first_name = "Terry";
$u2 ->last_name = 'Bryan';
$u2->username = 'tbryan';
$u2->country= 'USA';
$u2->city = 'New York';
$u2->state = 'New York';

$u3 = new Useradmin;
$u3->first_name = "Craig";
$u3 ->last_name = 'Zlatan' . "<br>";
$u3->username = 'czla';



//echoing the value of the properties using methods
echo $u->full_name() . "<br>";
echo $u2->full_name() . "<br>" ;
echo $u2->location() . "<br>" ;

echo $u3->is_admin;
echo $u3->full_name();


//using the functions of inheritance.
echo get_parent_class($u) . "<br>";
echo get_parent_class($u2) . "<br>";

if(is_subclass_of($u2, 'User')){
    echo "Instance is a subclass of User" . "<br>";
}else{
    echo "Instance is not a subclass of User" . "<br>";
}

$parent = class_parents($u2);
echo implode(' , ', $parent) . "<br>";

















?>

