<?php
$lesson_id = $_POST['lesson_id'];
require_once('db.php');

try{
$q = $db->prepare("SELECT lessons.lesson_id, lessons.lesson_name, lessons.topic, lessons.title, lessons.text_content, lessons.lesson_award_text, lessons.img_path, lessons.completed FROM lessons WHERE lessons.lesson_id='$lesson_id'");
$q->execute();
$data = $q->fetchAll(); // it's giving array with json objects BUT IT'S NOT JSON[{},{}]
}catch(PDOException $ex){
    echo $ex;
}
$sLessonsBox = '';
  foreach($data as $jData){
        $sLessonsBox .= "
        <form id='mainForm'>
        <ul id='progressbar'>
        <li>Product</li>
        <li data-field='progress' class='>Your Information</li>
        <li data-field='progress$jData->lesson_id' class=''>Payment</li>
      </ul>

     <h1>lesson id is: $jData->lesson_id</h1>
        <fieldset data-field='fieldset$jData->lesson_id' id='fieldset$jData->lesson_id' class='hidden'>
            <div class='container'>
        <div>
        <h1>$jData->lesson_name</h1>
<img src='$jData->img_path'>
<h2>$jData->title</h2>
<p>$jData->text_content</p>
        <form action='' method='POST'>
        <input type='hidden' name='completed' value='$jData->completed'>
        <button value='$jData->lesson_award_text' type='submit'>Mark Lesson As Completed</button>
          </form>
          </li>
        </ul>
      </div>
      <input type='button' id='check' name='continue' data-field='continueBtn$jData->lesson_id' class='continueActionBtn' value='Continue' />
        </div>
            </fieldset>
      <form>";
      }
     
  require_once('../user-access.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <!-- <link rel="stylesheet" href="../main-style.css"> -->
  <link rel="stylesheet" href="../user.css">

  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Lit Tech LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Databases</a>
          <a class="dropdown-item" href="#">Game Design</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Web Development</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">About</a>
      </li>
    </ul>
    <ul class="navbar-nav ">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROFILE IMAGE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">My Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="user-logout.php">Logout</a>
        </div>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="user-courses.php">My Courses</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
       <?= $sLessonsBox ?>
      </div>





<!-- my js -->
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../js/user-panel.js"></script>
</body>
</html>