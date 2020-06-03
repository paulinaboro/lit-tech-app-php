<?php 
// 1stway
require_once('main-topnavbar.php');
require_once('./PHPbackend/db.php');


//  // Validation
 if( isset($_POST['username']) && 
 isset($_POST['password'])
){
$username = $_POST['username'];
$password = $_POST['password'];

$query = $db->prepare("SELECT `user_id` FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
$query->execute();
$id = $query->fetchColumn();

 if(isset($id)){
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['user_id'] = $id;
   header('Location: user-panel.php');
   exit();
 }
 }
?>
<div className="row " id="Body">
  <div class="container">
    <div class="row">
    <div class="col">
              <img
              id="cover-img"
                className="CoverImg"
                src="./img/login-cover1.jpg"
                alt="Landing Page Photo"
              />
            </div>  
            <div id="blue-banner"><h1>Start building
your skills today<h1></div>
              <div class="col">
                <div id="rightCol">
              <h3>Start Learning for free</h3>
                <form id="login-form" action="login.php" method="POST">
                <label for="username"><p>Username</p></label>
                <input
                  type="text"
                  name="username"
                  placeholder="Username"
                />
                <label for="password"><p>Password</p></label>
                <input
                  type="password"
                  name="password"
                  placeholder="Password"
                />
                <input
                  type="submit"
                  id="loginBtn"
                  value="Login"
                />
                </form>
                <a href="signup.php">Sign Up</a></div>
<div id="list-box">
  <br>
  <p>Use another account to login:</p>
<ul id="login-icons">
<li><img src="img/fb.png" alt="fb logo"></li>
<li><img src="img/google.png" alt="google logo"></li>
<li><img src="img/github.png" alt="github logo"></li>
                </ul></div>
              </div>  
      </div>
      <?php 
require_once('main-bottom.php');
?>


