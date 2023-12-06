<!-- Hello world, i'm samuel akin.
Hello world, i'm dan akin. -->

<?php 
//function
//function has a name, it should be defined in a code block inside a curly bracket.
//arguments data types can be defined


// function test(int $a, int $b){
//     echo $a + $b;
// }
// test( 5, "10");

//you can determine what data type a function can return
// function test_1( $x, $y) : int{
//     //this return an integer value, anything else throws an error
//     return $x + $y;
// }
// test_1( 5, "10");


//practise 
//Distance calculator
//we want to write a function to calculate the distance between two places with their longitude and latitude
//steps to calculate the distance
//calculate the difference of the longitude of the second place and the first place
///calculating the sine of both converted latitudes
//and then calculate its cosines
//convert the latitude of both places to radians
//calculate the sine and cosine of both converted latitudes
//sine of converted latitude multiplied plus cosine multiplied


//solution

// function distance_cal( array $place_A, array $place_B , $HumanReadble = True) {

//     //difference in longitude of place_A and palce_B
// $diff = $place_A['longitude'] - $place_B['longitude'];

// //converting the diff to radian
// $diffToRadian = deg2rad($diff);

// //converting the radian to cos
// $diffRadian = cos($diffToRadian);

// //converting the latitude to radians
// $latitudeToradianA = deg2rad($place_A['latitude']);
// $latitudeToradianB = deg2rad($place_B['latitude']);

// //calculating the sine of both converted latitudes
// $cal_sine_of_latitude_A = sin($latitudeToradianA);
// $cal_sine_of_latitude_B = sin($latitudeToradianB);

// //calculating the cosine of both converted latitudes
// $cal_cos_of_latitude_A = cos($latitudeToradianA);
// $cal_cos_of_latitude_B = cos($latitudeToradianB);

// $dist =  ($cal_sine_of_latitude_A * $cal_sine_of_latitude_B) + ($cal_cos_of_latitude_A * $cal_cos_of_latitude_B);


// if(!$HumanReadble){
//     return "Dist " . $dist . '<br>';
// }

// //finding the distance in kilometers
// $arcCosdist = acos($dist);
// $earthRadiusKM = 6364.963;

// $readableDist = $arcCosdist * $earthRadiusKM;
// return "Readable Distance " . $readableDist . "km";
    
// }

// // Ondo state
// $place_A = ['longitude' => 4.841694, 
//             'latitude' => 7.100005];

// // Zaria
// $place_B = ['longitude' => 7.7254, 
//             'latitude' => 11.1247 ];

// $dist = distance_cal($place_A , $place_B, false);
// echo $dist;


//isset and empty
//they both check the existence of a a variable or a value
//The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
// This function returns true if the variable exists and is not NULL, otherwise it returns false.
// $name = ' ';
// echo var_dump(isset($gun));

//The empty keyword acts as a function which returns true if a variable does not exist, or if its value is considered empty.
//The empty keyword also evaluates expressions which are not in a variable. 0, null, false and emptystring are regarded as empty
// $name = ' ' ;
// echo var_dump(empty($name)); 

//not empty
$name = 3165 ;
echo var_dump(!empty($name)); 


?>