<?php
require_once('db.php');
try{
$q = $db->prepare('SELECT * FROM users');
$q->execute();
$data = $q->fetchAll(); // it's giving array with json objects [{},{}]
echo json_encode($data); 
// we can also use
//  print_r(data)
//   var_dump(data)
}catch(PDOException $ex){
    echo $ex;
}