<?php

// echo "Hello world!";
// echo "Hello world!";
// echo "Hello world!";
// echo "Hello world!";

//practise 1
// (1) we want to count the number of adults(18+ years) and children
//(2)make a list of people between 22 and 30 who can apply for the job
// echo "<pre>";
// $people = [
//     ['name'=> 'joseph', 'age' => 25], 
//     ['name'=> 'saph', 'age' => 5], 
//     ['name'=> 'bap', 'age' => 18], 
//     ['name'=> 'dan', 'age' => 23],
//     ['name'=> 'frank', 'age' => 30],
//     ['name'=> 'carlos', 'age' => 28], 
//     ['name'=> 'zee', 'age' => 22], 
//     ['name'=> 'bard', 'age' => 24],
//     ['name'=> 'kat', 'age' => 21], 
//     ['name'=> 'natty', 'age' => 24],  
//     ['name'=> 'emma', 'age' => 29],
//     ['name'=> 'kun', 'age' => 9],
//     ['name'=> 'sam', 'age' => 3],    

// ];
// echo "<pre>";
// //solution 1

// $countChildren = 0;
// $countadult = 0;
// $eligibleCandidate = [];

// foreach ($people as $person){
//     //obtaining the age key and value here
//     $age = $person['age'];
//     if ($age >= 18){
//         //counting the number of adult
//         $countadult++;
//     if ($age >= 22 && $age <= 30){
//         //making a list eligible adult
//          $eligibleCandidate[] = $person;
//     }
// } else{
//     //counting the number of children
//     $countChildren++;
// }
// }
// echo "The number of children are  " . $countChildren . PHP_EOL;
// echo "The number of adult are  " . $countadult . PHP_EOL ;
// echo "The number eligible canditate are   " . PHP_EOL; 
// print_r( $eligibleCandidate)  ;

//solution 2 
// $count = 0;
// for( $i = 0; $i < count($people); $i++ ) {
//     $element = $people[$i];
//     if($element['age'] >= 18 ){
//         $count++;
//     }
// }
// echo $count . "<br>";


// foreach($people as $person){
//     if ($person ['age'] >= 22){
//         print_r($person);
//     }
// }


//practise 2
//we want to calculate the age of person in days
//we will get a date and then print out the numbers of days since birthday
//for example there are 10136 days since my birthday 



?>