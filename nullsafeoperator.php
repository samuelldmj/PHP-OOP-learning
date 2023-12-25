<?php 
class person {
    //this read the value on the left hand side 
    public ?Home $home = null;
}

class Home{
    public $address = 'here';
}

$person = new person;

echo $person->home?->address;















?>