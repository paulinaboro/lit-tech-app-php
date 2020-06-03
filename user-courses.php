<?php
  // To start using sessions/cookies 
  require_once('user-access.php');
//   $username = $_SESSION['username'];
//   $id = $_SESSION['user_id'];
  require_once('user-navbar-top.php');
?>

<div class="container">
        <div class="row">
          <div class="col-3">
            <ul class="menu-list">
            <li>
                <a href="user-courses.php"><p class="active">My Courses</p></a>
              </li>
              <li>
                <a href="user-panel.php"><p>All Courses</p></a>
              </li>
            </ul>
          </div>
          <div class="col-9">
          <div class="container">
        <!-- <div class=" row">
            <div class="col-6"> -->
            <!-- here fetch saved user courses: -->
            <?= require_once('./PHPbackend/fetch-saved-user-courses.php'); ?>
            </div>
<!--          
        </div>
      </div> -->

          </div>
        </div>
      </div>

      !-- my js -->
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="./js/user-panel.js"></script>
</body>
</html>
