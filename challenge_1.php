<?php

class Bicycle{

    //created some properties here
var $brand;
var $model;
var $description;
var $year;
var $weight_kg;

//created some methods
function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
}

function Name() {
    return $this->brand. "<br>". $this->year . "<br>". $this->model;
}

function set_weight_lbs($value){
    return $this->weight_kg = floatval($value) / 2.2046226218 ;
}


}
//created two bicycle instances or object.
$bicycle1 = new Bicycle;
$bicycle2 = new Bicycle;

//referencing the attributes/properties with the instances here and inserting a value.
$bicycle1->brand = "Bicycle_1_brand: suzuki";
$bicycle1->year = "Bicycle_1_year: " . "(" . 2022 .")";
$bicycle1->model= "Bicycle_1_model: Flash breeze";
$bicycle1->weight_kg= 3;
$bicycle1->description= "Used bike";

//referencing the attributes/properties with the instances here and inserting a value.
$bicycle2->brand = "Bicycle_2_brand: yamaha";
$bicycle2->year = "Bicycle_2_year: " . "(" . 2023 .")";
$bicycle2->model= "Bicycle_2_model: rough spike";
$bicycle2->weight_kg= 7;
$bicycle2->description= "New bike";

//i am outputing three properties here calling the name methods and as well as outputting the weight_kg using the weight methods.
echo "Bicycle one features" ."<br>";
echo $bicycle1->Name() . "<br>";
echo $bicycle1->description . "<br>";
echo $bicycle1->weight_lbs() . ' pounds'. "<br>";
echo $bicycle1->set_weight_lbs(7) .' kg'. "<br>"; 
echo "<br> <br>";
echo "Bicycle two features" ."<br>";
echo $bicycle2->Name() . "<br>";
echo $bicycle2->description . "<br>" ;
echo $bicycle2->weight_lbs() .' pounds'. "<br>";
echo $bicycle2->weight_kg ."(" . "kg" . ")" . "<br>";
echo $bicycle1->set_weight_lbs(20) .' kg' . "<br>"; 




?>