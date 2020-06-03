<?php
require_once('db.php');
try{
$q = $db->prepare('SELECT * FROM courses');
$q->execute();
$data = $q->fetchAll(); // it's giving array with json objects BUT IT'S NOT JSON[{},{}]

}catch(PDOException $ex){
    echo $ex;
}
$sCourseBox = '';
  foreach($data as $jdata){
    $sCourseBox .= "
    <div id='courseBox' class='course-box col-sm'>
    <ul id='genre-list'>
    <li><p class='course-genre'>$jdata->course_genre</p></li>
    <li id='tickIcon$jdata->course_id'></li>
    </ul>
   <img class='courses-img' src='$jdata->img_path'>
    <h4>$jdata->course_name</h4>
    <p>$jdata->short_description</p>
    <form action='./PHPbackend/insert-chosen-course-to-db.php' method='POST' data-icon='tickIcon$jdata->course_id' onsubmit='addTickIcon(event);'>
    <button  class='formBtns' id='formBtn$jdata->course_id'><input type='hidden' name='course_id' value='$jdata->course_id'>
   Add To Cart</button>
      </form>
  </div>
  ";
  }
  echo $sCourseBox;
  ?>
