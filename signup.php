
<?php 
require_once('main-topnavbar.php');
?>
        <div class="container first-row">
        <div class="row">
<div class="col">
<img src="img/cover2.png" id="cover2" alt="cover">

</div>

<div class="col">
     <form id="signup-form" action="./PHPbackend/create-new-user.php" method="POST">
      <ul id="signup-list">
      <li><h4>Create Free Account</h4></li>
          <br>
          <li>
            <li><label for="username">Username</label></li>
          <input
            type="text"
            name="username"
            placeholder="Username"
          /></li>
          <br>
          <li>
          <li><label for="password">Password</label></li>
          <input
            type="password"
            name="password"
            placeholder="Password"
          /></li>
          <br>
          <li>
            <li>
            <label for="name">Name</label></li>
          <input
            type="text"
            name="name"
            placeholder="Name"
          /></li>
          <br>
          <li>
<li><label for="Email">Email</label></li>
          <input
            type="text"
            name="email"
            placeholder="Email"
          /></li>
          <br>
          <li><input
            type="submit"
            class="signUpBtn"
            value="Create Account"
          /></li>
          <li><a href="login.php">Login</a></li>
</ul>
      </form>
      <div class="otherInfoBox">
      <p style="font-size:10px">By signing up for Courses online, you agree to Lit Tech online Terms of Service & Privacy Policy.</p>
      <div id="list-box">
  <p style="font-weight:500" >Use another account to login:</p>
<ul id="login-icons">
<li><img src="img/fb.png" alt="fb logo"></li>
<li><img src="img/google.png" alt="google logo"></li>
<li><img src="img/github.png" alt="github logo"></li>
                </ul></div>
                </div>
      </div>
      </div>
</div>
      <?php 
require_once('main-bottom.php');
?>



