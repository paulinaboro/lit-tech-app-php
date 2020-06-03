<?php
  // To start using sessions/cookies 
  require_once('user-access.php');
  $username = $_SESSION['username'];
  $id = $_SESSION['user_id'];
  require_once('user-navbar-top.php');
?>

<div class="container">
        <div class="row">
          <div class="col-3">
            <ul class="menu-list">
              <li>
                <a href="#"><p class="active">All Courses</p></a>
              </li>
              <li>
                <a href="user-courses.php"><p>My Courses</p></a>
              </li>
              <li>
                <a href="#"><p>Forum</p></a>
              </li>
              <li><p>Databases</p></li>
              <li><p>Design</p></li>
              <li><p>Game Development</p></li>
              <li><p>HTML</p></li>
              <li><p>CSS</p></li>
            </ul>
          </div>
          <div class="col-9">
          <div class="container">
<?= require_once('./PHPbackend/fetch-courses-data.php'); ?>
            </div>
          </div>
        </div>
      </div>

<?php
  require_once('user-bottom.php');
?>
