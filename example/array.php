<?php  
/* 
Callback Functions

A callback function (often referred to as just "callback")
is a function which is passed as an argument into another function.
Any existing function can be used as a callback function. 
To use a function as a callback function, pass a string containing the name of
the function as the argument of another function: 
*/

//example
// function my_callback($item) {
//     return strlen($item);
//   }
  
//   $strings = ["apple", "orange", "banana", "coconut"];
//   $lengths = array_map("my_callback", $strings);
//   print_r($lengths);
  

//array functions
//ampersand operators
/* The &(ampersand) operator tells PHP not to copy the array when passing it to the function. Instead,
a reference to the array is passed into the function,
thus the function modifies the original array instead of a copy. */

//array_filter
// function odd($var)
// {
//     // returns whether the input integer is odd
//     return $var & 1;
// }

// function even($var)
// {
//     // returns whether the input integer is even
//     return !($var & 1);
// }

// $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
// $array2 = [6, 7, 8, 9, 10, 11, 12];

// echo "Odd :\n";
// print_r(array_filter($array1, "odd"));
// echo "Even:\n";
// print_r(array_filter($array2, "even"));


//array_merge
/*  Merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one.
It returns the resulting array. If the input arrays have the same string keys,
then the later value for that key will overwrite the previous one.(the example below on line 59)
If, however, the arrays contain numeric keys,
the later value will not overwrite the original value,
but will be appended. Values in the input arrays with numeric keys
will be renumbered with incrementing keys starting from zero in the result array. */

//example
 /* $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result); */


// ?>









?>