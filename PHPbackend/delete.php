<?php
require_once('db.php');
try{
    $id = $_GET['id'];
    echo 'Delete user with id:'. $id;
$q = $db->prepare('DELETE FROM users WHERE id = :id');
$q->bindValue(':id', $id);
$q->execute();
echo 'Delete number of rows: '. $q->rowCount();
}catch(PDOException $ex){
    echo $ex;
}