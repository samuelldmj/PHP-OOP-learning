<?php  

//can be used to validate, given a specific pattern.
//we can use the preg_match function
//the paramater is a variable of the desired pattern and the email var to match the desired pattern
// preg_match($pattern, $email);

//we can also use the filter function to validate
//filter_var function
//using the email validate flag we validate email from the email field

// $var = 'samuelldmj5@gmail.com';
// if(!filter_var($var , FILTER_VALIDATE_EMAIL)){
//     echo "invalid email";
// }else {
//     echo "email is valid";
// }

//sanitization 
//using the filter_var function and it flag.
$var = '<p>"Hello" world! </p>';
$var = 'samuelldmj5gmail.com';
// $flag = FILTER_SANITIZE_STRING;
// $flag = FILTER_SANITIZE_EMAIL;
$flag = FILTER_SANITIZE_URL;
$sanitizedData = filter_var($var, $flag);
echo $sanitizedData;































?>