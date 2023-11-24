<?php  



class Bicycle{

    //created some properties here
    public static $instance_count = 0;

public $brand;
public $model;
public $description; 
public $category;
public $year;
private static $weight_kg = 0.0;
protected static $wheels = 2;

public const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'Bmx'] ;



//created some methods

public function Name() {
    return $this->brand. "<br>". $this->year . "<br>". $this->model;
}

public static function wheel_details(){
        $wheel_strings = static::$wheels == 1 ? "1 wheel" : static::$wheels . "  wheels";
        return "it has " . $wheel_strings . " . ";
} 

public  static function set_weight_kg($value){
    Bicycle::$weight_kg = floatval($value) ; 
}

public static function weight_kg(){
    return Bicycle::$weight_kg . " kg";
}


public function set_weight_lbs($value){
    $this->weight_kg = floatval($value) / 2.2046226218 ;
}

public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218 ;
    return $weight_lbs . " lbs";
}

public static function Create(){
    self::$instance_count++;
    $name_class = get_called_class();
    $new_ins = new $name_class;
    return $new_ins;

}

}





















?>