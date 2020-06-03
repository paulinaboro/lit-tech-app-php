<?php
  session_start();
  if(  !isset($_SESSION['user_id']) ){
    header('Location: user-panel.php');
    exit();
  }
?>