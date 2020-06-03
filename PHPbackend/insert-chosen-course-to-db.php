<?php

session_start();
$user_id= $_SESSION['user_id'];
$course_id = $_POST['course_id'];
// now send data to sql:
require_once('db.php');
try{
    $q = $db->prepare('INSERT INTO usercourses VALUES(:course_id, :user_id)');
    $q->bindValue(':course_id', $course_id);
    $q->bindValue(':user_id', $user_id);
    $q->execute();
    // echo "added user_id" . $user_id . "and course_id" . $course_id;
}catch(PDOException $ex){
    echo $ex;
} 
header("Location: ../user-panel.php");
?>

