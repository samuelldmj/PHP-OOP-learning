<?php
class Human{

    private $name;
    private $age;

    public function setName($name){
        $this->name = ucfirst($name);
        return $this;
    }

    public function setAge($age){
        $this->age = $age;
        return $this;
    }

    public function introduction(){
       return "Hello! my name is  $this->name, i am $this->age years old ";

    }

}
$sam = new Human;
// $sam->setName('samuel');
// $sam->setAge(21);
// echo $sam->introduction();


//method_chaining
//to make it work, you would need to add or use the return keyword
echo $sam->setName('samuel')->setAge(21)->introduction();

?>