<?php
require_once('db.php');
  $id = $_SESSION['user_id'];

try{

$q = $db->prepare("SELECT courses.course_name, courses.course_genre, courses.img_path, courses.course_name, courses.short_description,courses.course_id FROM usercourses,courses,users 
WHERE usercourses.course_id=courses.course_id AND usercourses.user_id='$id' AND '$id'=users.user_id
ORDER BY courses.course_id");
$q->execute();
$data = $q->fetchAll(); // it's giving array with json objects BUT IT'S NOT JSON[{},{}]
}catch(PDOException $ex){
    echo $ex;
}

$sChosenCourseBox = '';
  foreach($data as $jData){
    $sChosenCourseBox .= "
    <div class='chosenCourseBoxes course-box col-sm'>
    <ul id='genre-list'>
    <li><p class='course-genre'>$jData->course_genre</p></li>
    <li>
    <form action='./PHPbackend/remove-course.php' method='POST'>
    <input type='hidden' name='course_id' value='$jData->course_id'>
    <button class='x-btn' type='submit'><img id='x-icon' src='img/x-icon.png'></button>
      </form><li>
    </ul>
   <img class='courses-img' src='$jData->img_path'>
    <h4>$jData->course_name</h4>
    <p>$jData->short_description</p>
    <form action='./PHPbackend/fetch-course-lessons.php' method='POST'>
    <input type='hidden' name='course_id' value='$jData->course_id'>
    <button class='formBtns' type='submit'>Resume</button>
    </form>
    </div>
    ";
    }
  echo $sChosenCourseBox;
  ?>
