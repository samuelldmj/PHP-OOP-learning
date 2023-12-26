<?php 
//connecting to database using PDO
//DSN is a format that specify the database,
//we would specify the database first e.g "MYSQL"
//

//connecting to database
$pdo = new PDO(dsn: 'mysql:host=localhost;dbname=php_course', username:'root', password: '');

//insert
//the exec function can count the number of times a row was inserted and input a data in the db table
//exec func doesnot protect from sql injection, hence your website can be hacked.
// $count = $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("samuel")' );
//adding another value and counting the row
// $count = $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("Kemi")' );
//it get the count, and as well consider the last row inserted and get it id
// $lastid = $pdo->lastInsertId();
//i can get the count again
// echo "$count rows were affected and the last inserted id is $lastid";

//if we want to add multiple rows
//we use the transaction function
// $pdo->beginTransaction();
// $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("second php")' );
// $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("github")' );
// $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("youtube")' );
// $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("linkedin")' );
// $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("twitter")' );
// //this will commit all the transaction
// $pdo->commit();

//using prepare method to add value to a column
// $name = "another one";
// $stm = $pdo->prepare(query: 'INSERT INTO sample (name) VALUES(?)');
// //this convert the values into strings and dismiss any form of sql injections
// $stm->bindValue(1, $name);
// //it then execute the above statement in the db
// $stm->execute();

//updating database
// $pdo->exec(statement: 'UPDATE sample SET name = "sam updated" where id = 1');
// $name = "sam updated";
// $id = 1;
// $stm = $pdo->prepare(query: 'UPDATE sample SET name = ? where id = ? ');
// $stm->bindValue(1, $name);
// $stm->bindValue(2, $id);
// // $stm->execute();

//deleting a row

// $stm = $pdo->prepare(query: 'DELETE FROM sample where id = 1');
// $id = 8;
// $stm = $pdo->prepare(query: 'DELETE FROM sample where id = ?');
// $stm->bindValue(1, $id);
// $stm->execute();


//SELECTING DATA FROM DB
// $statement  = $pdo->query('SELECT * FROM sample');
// $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($rows as $row){
//     echo $row['id'] . "  "  . $row['name'] . "<br>";
// }

//searching for all youtube values
$name = 'youtube';
$stm = $pdo->prepare('SELECT * FROM sample where name = ?');
$stm->bindValue(1, $name);
$stm->execute();
$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    echo $row['id'] . "  "  . $row['name'] . "<br>";
}
















?>