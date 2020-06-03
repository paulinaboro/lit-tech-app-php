<?php
try{
$dbUserName = 'root';
$dbPassword = '';
$connection = 'mysql:host=localhost; dbname=littechphp; charset=utf8mb4';
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];
$db = new PDO($connection, $dbUserName, $dbPassword, $options);
}catch(PDOException $ex){
echo $ex;
}


