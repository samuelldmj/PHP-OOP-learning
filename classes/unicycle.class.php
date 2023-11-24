<?php  
class Unicycle extends Bicycle{

protected static $wheels = 1;  

// public function bug_test(){
//     //trying to check if the subclass property truely inheritted the private property variable
//     return $this->weight_kg;
// }

public static function set_weight_kg($value)
{
    echo "The weight of ";
    parent::$weight_kg = floatval($value) ; 
    echo "is light";
}
}




?>