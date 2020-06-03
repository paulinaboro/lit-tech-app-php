<?php
  // Validation
//   if( isset($_POST['txtEmail']) && 
//       isset($_POST['txtPassword'])
//   ){
//     // Connect to the database
//     // $sCorrectEmail      = 'a@a.com';
//     // $sCorrectPassword   = '1';

//     $sData = file_get_contents('administrators-data.json');
//     $jData = json_decode($sData);
//     // Connect to the database
//     $sCorrectEmail      = $jData->email;
//     $sCorrectPassword   = $jData->password;

//     $sUserEmail         = $_POST['txtEmail'];
//     $sUserPassword      = $_POST['txtPassword'];

//     if( $sCorrectEmail ==  $sUserEmail &&
//         $sCorrectPassword == $sUserPassword
//     ){
//       // To start using sessions/cookies 
//       session_start();
//       // You can put anything in the session
//       $_SESSION['sEmail'] = $sUserEmail;
//       header('Location: admin-page.php');
//       exit();
//     }
//   }
/////////////////////////////////////////////////////////////////////////
require_once('db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$userData ='';

$query = "select * from users where username='$username' and password='$password'"; 
$result= $db->query($query);
$rowCount=$result->num_rows;
      
 if($rowCount>0)
 {
     $userData = $result->fetch_object();
     $user_id=$userData->user_id;
     $userData = json_encode($userData);
     echo '{"userData":'.$userData.'}';

 }
 else 
 {
     echo '{"error":"Wrong username and password"}';
 }
 /////////////////////////////////////////////////////
 /////////////////////////////////////////////////////



?>