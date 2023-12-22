<?php 
//connecting to database using PDO
//DSN is a format that specify the database,
//we would specify the database first e.g "MYSQL"
//

//connecting to database
$pdo = new PDO(dsn: 'mysql:host=localhost;dbname=php_course', username:'root', password: '');

//insert
//the exec function can count the number of times a row was inserted and input a data in the db table
// $count = $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("samuel")' );
//adding another value and counting the row
$count = $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("Kemi")' );
//it get the count, and as well consider the last row inserted
$lastid = $pdo->lastInsertId();
//i can get the count again
echo "$count rows were affected and the last inserted id is $lastid";

//if we want to add multiple rows
//we use the transaction function
























?>