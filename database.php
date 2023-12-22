<?php 
//connecting to database using PDO
//DSN is a format that specify the database,
//we would specify the database first e.g "MYSQL"
//

//connecting to database
$pdo = new PDO(dsn: 'mysql:host=localhost;dbname=php_course', username:'root', password: '');

//insert
$count = $pdo->exec(statement: 'INSERT INTO sample (name) VALUES("samuel")' );
echo "$count rows were affected";

























?>