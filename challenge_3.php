<?php

class Bicycle{

    //created some properties here
public $brand;
public $model;
public $description;
public $year;
private $weight_kg;
protected $wheels = 2;

//created some methods
public function set_weight_kg($value){
    return $this->weight_kg = floatval($value) / 2.2046226218 ; 
}

public function get_weight_kg(){
    return $this->weight_kg . " kg";
}
public function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218 . " lbs";
}

public function Name() {
    return $this->brand. "<br>". $this->year . "<br>". $this->model;
}

public function wheel_details(){
          
    return $this->wheels= "Bicycle has 2 wheels";
} 


}

class Unicycle extends Bicycle{

    protected $wheels = 1;
    public function wheel_details(){

       return $this->wheels= "Unicycle has 1 wheel";
   } 
}


//created two bicycle instances or object.
$cycle1 = new Bicycle;
$cycle2 = new Unicycle; 


//referencing the attributes/properties with the instances here and inserting a value.
$cycle1->brand = "Bicycle_1_brand: suzuki";
$cycle1->year = "Bicycle_1_year: " . "(" . 2022 .")";
$cycle1->model= "Bicycle_1_model: Flash breeze";
// $cycle1->weight_kg= 3;
$cycle1->description= "Used bike";

//referencing the attributes/properties with the instances here and inserting a value.
$cycle2->brand = "Unicycle_2_brand: yamaha";
$cycle2->year = "Unicycle_2_year: " . "(" . 2023 .")";
$cycle2->model= "Unicycle_2_model: rough spike";
$cycle2->description= "New bike";
// $cycle2->weight_kg= 7;

//i am outputing the properties here calling the name methods and as well as outputting the weight_kg using the weight methods.
echo "cycle one features" ."<br>";
echo $cycle1->Name() . "<br>";
echo $cycle1->description . "<br>";
echo $cycle1->weight_lbs() . "<br>";
echo $cycle1->set_weight_kg(7) . "<br>";
echo $cycle1->get_weight_kg() . "<br>" ;
echo $cycle1->wheel_details()  ;
echo "<hr/>";
echo "<br>";
echo "cycle two features" ."<br>";
echo $cycle2->Name() . "<br>";
echo $cycle2->description . "<br>" ;
echo $cycle2->weight_lbs() . "<br>";
echo $cycle2->set_weight_kg(20) . "<br>";
echo $cycle2->get_weight_kg() . "<br>";
echo $cycle2->wheel_details() . "<br>";

 




?>