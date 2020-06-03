<?php
session_start();

$user_id= $_SESSION['user_id'];
$course_id = $_POST['course_id'];

require_once('db.php');
try{
$q = $db->prepare("DELETE from `usercourses` WHERE `course_id` = '$course_id' AND `user_id` = '$user_id'");
$q->execute();
echo 'Delete number of rows: '. $q->rowCount();
}catch(PDOException $ex){
    echo $ex;
}
header("Location: ../user-courses.php");
?>

