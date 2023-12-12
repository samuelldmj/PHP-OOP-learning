<?php 

// Cookies
//they are files or content a site or webserver embed to our computers through our browsers.
//creating cookies

//we can use the built function to create a cookies
// $expires = time() + (60 * 60 * 24 * 30  );
// setcookie("crast", 'this is a cookie', $expires, "/", 'localhost', true );

//reading a cookie
//to read a cookie you will need to use the global variable $_COOKIE[]
// if(isset($_COOKIE['test'])){
//     echo $_COOKIE['test'];
// }else {
//     echo "No cookie buddy!";
// }

//updating cookie
//if the cookie already exist it will overwrite the existing one 
// $expires = time() + (60 * 60 * 24 * 30  );
// setcookie("crast", 'this is a cookie', $expires, "/", 'localhost');

//deleting a cookie
//set the cookie name, leave the value empty, change the time
// setcookie("crast", '', time() - 3600, "/");


//session


?>