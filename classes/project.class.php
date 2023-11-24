<?php 

//creating a class for bicycle
class projBicycle{

    //constant for bicycle projects
public const CAT = ['road', 'BMX', 'mountain', 'hybrid', 'cruiser', 'city' ];
public const Gender = ['mens', 'womens', 'unisex'];
protected const CONDITION_OPTIONS = [1 => 'Beat up', 2 => 'Decent', 3 => 'Good', 4 => 'Great', 5 => 'Like New'];


//properties for the bicycle project
public  $brand;
public  $model;
public  $year;
public  $category;
public  $color;
public   $description;
public  $gender;
public  $price;

protected $condition_id ;

protected $weight_kg;

public function __construct($arg = []){
   
    $this->$arg['brand'] ?? '';
    $this->$arg['model'] ?? '';
    $this->$arg['year'] ?? '';
    $this->$arg['category'] ?? '';
    $this->$arg['description'] ?? '';
    $this->$arg['gender'] ?? '';
    $this->$arg['price'] ?? 0.0;
    $this->$arg['condition_id'] ?? 3;
    $this->$arg['weight_kg'] ?? 0.0;


}

public static function set_weight_kg($value){
    Bicycle::$weight_kg = floatval($value) ; 
}

public static function get_weight_kg(){
    return Bicycle::$weight_kg . "KG";
}

public static function set_weight_lbs($value){
    Bicycle::$weight_kg = floatval($value) / 2.2046226218;
}

public static function get_weight_lbs(){
    $weight_lbs = floatval(Bicycle::$weight_kg) * 2.2046226218 ;
    return $weight_lbs . " lbs";

}

public function condition($id){
    foreach($condition_id as $con)
    if($id == 1){
        echo "condition options: " . $this->condition_id[0];
    }elseif($id == 2){
        echo "condition options: " . $this->condition_id[1];
    }elseif($id == 3){
        echo "condition options: " . $this->condition_id[2];
    }elseif($id == 4){
        echo "condition options: " . $this->condition_id[3];
    }elseif($id == 5){
    echo "condition options: " . $this->condition_id[4];
}


}




















?>