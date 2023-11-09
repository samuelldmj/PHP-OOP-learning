<?php



class Bicycle{

    //created some properties here
public $brand;
public $model;
public $description; 
public $year;
private $weight_kg = 0.0;
protected $wheels = 2;

//created some methods

public function Name() {
    return $this->brand. "<br>". $this->year . "<br>". $this->model;
}

public function wheel_details(){
        $wheel_strings = $this->wheels == 1 ? "1 wheel" : " {$this->wheels} wheels";
        return "it has" . $wheel_strings . " . ";
} 

public function set_weight_kg($value){
    $this->weight_kg = floatval($value) ; 
}

public function weight_kg(){
    return $this->weight_kg . " kg";
}


public function set_weight_lbs($value){
    $this->weight_kg = floatval($value) / 2.2046226218 ;
}

public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218 ;
    return $weight_lbs . " lbs";
}

}

class Unicycle extends Bicycle{

    protected $wheels = 1;  
    // public function bug_test(){

    // }
}

//created two cycle instances or object.
$cycle1 = new Bicycle;
$cycle2 = new Unicycle;

//referencing the attributes/properties with the instances here and inserting a value.
$cycle1->brand = "Bicycle_1_brand: suzuki";
$cycle1->year = "Bicycle_1_year: " . "(" . 2022 .")";
$cycle1->model= "Bicycle_1_model: Flash breeze";
$cycle1->description= "Used bike";

//referencing the attributes/properties with the instances here and inserting a value.
$cycle2->brand = "Unicycle_2_brand: yamaha";
$cycle2->year = "Unicycle_2_year: " . "(" . 2023 .")";
$cycle2->model= "Unicycle_2_model: rough spike";
$cycle2->description= "New bike";

//i am outputing the properties here calling the name methods and as well as outputting the weight_kg using the weight methods.
echo "cycle one features" ."<br>";
//i placed the setter for private weight_kg at the top so it can work with other methods below.
$cycle1->set_weight_kg(1) . "<br>";
echo $cycle1->weight_lbs() . "<br>";
echo $cycle1->weight_kg() . "<br>" ;   
echo $cycle1->wheel_details()  ;

echo "<hr/>";

echo "cycle two features" ."<br>";
//i placed the setter for private weight_kg at the top so it can work with other methods below. since the methods below depends on the setter above.git    
$cycle2->set_weight_lbs(2) . "<br>"; 
echo $cycle2->weight_lbs() . "<br>";
echo $cycle2->weight_kg() . "<br>";
echo $cycle2->wheel_details() . "<br>";







?>