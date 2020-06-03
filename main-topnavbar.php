<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <link rel="stylesheet" href="main-style.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav id="main-navbar" class="navbar navbar-expand-lg">
    <img src="img/logo.png" id="logo" alt="logo">
  <a class="navbar-brand" href="#">LitTech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    </span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <!-- <li>  <img src="img/thick-icon.png" alt="thick icon"></li> -->
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Databases</a>
          <a class="dropdown-item" href="#">Web Development</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Game Design</a>
        </div>
      </li>
      <li class="nav-item">
       
       <a class="nav-link" href="login.php"><p>About</p></a>
     </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       
        <a class="nav-link" href="login.php"> <button id="loginBtn1" class="generalBtns">Log In</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php"><button class="greenBtns">Sign Up</button></a>
      </li>
     
    
  </div>
</nav>
