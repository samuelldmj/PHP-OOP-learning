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
//meaning of timestamp: it is a time in seconds from 1st of january 1970, it can be formatted to a date later.
//strtotime function output timestamps

//we want to calculate the age of person in days
//we will get a date and then print out the numbers of days since birthday
//for example there are 10136 days since my birthday 

//solution 1
// $b_d = '1997-03-27';
// $t_d = date(format: 'Y-m-d');
// $diff = strtotime($t_d) - strtotime($b_d);
// $cal = (60*60*24);
// $nomOfdays = $diff / $cal;
// echo "there are $nomOfdays days since my $b_d";


//practise 3
//reading and writing files

//To open the files and reading a file. r is the flag to read lines
// $file = fopen("./example.txt", "r");


//files aRE READ line by line. the function to read a line is fgets()
//when it get to the end of a line, an attempt to read another which is not available will return false
// $first_line = fgets($file);
// $second_line = fgets($file);

//to read through multiple lines, we use loop.
// $file = fopen("./example.txt", "r");
// $line = fgets($file);
// while ($file != false) {
//     echo $line;
//     $line = fgets($file);
// }
// fclose($file);

// writing a file
//you can write multiple lines using fwrite multiple times, to break lines
//use \n or php_Eol func
// $file = fopen("./example.txt", "w");
// echo fwrite($file, "Hello world, i'm samuel akin." . PHP_EOL) ;
// echo fwrite($file, "Hello world, i'm dan akin." . PHP_EOL) ;
// fclose($file);

//closing file
//do not forget to close your file
// fclose($file);


//working with csv
// $file = fopen("./example.txt", "r");
// //you pass four argument here: the file, the lenght(how much char you want to view), seperator(it can be comma or tab depending on the files), 
// //below will output array, with each item represent a column
// $line = fgetcsv($file);
// while($line != false) {
//     //the line is an array
//     //obtaining the first row
//     $id = $line[0];
//     //obtaining data on the same in the first line
//     $name = $line[1];
//     echo "the id for the website with the name of $name is $id" . "<br>";
//     $line = fgetcsv($file);
// }
// fclose($file);

//writing in csv
//below will output array, with each item represent a column
// $file = fopen("./example.txt", "a");
// $line = fputcsv($file, ["6", "github"]);
// fclose($file);



?>