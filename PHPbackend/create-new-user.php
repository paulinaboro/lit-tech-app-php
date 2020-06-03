<?php
require_once('db.php');

// if(!isset($username)){
//     echo "<div>'Fill the username field'</div>
//     <a href='../signup.php'>
//     <button>go back</button></a>";
// }
//  else if(!isset($password)){
//     echo "<div>'Fill the password field'</div>
//     <a href='../signup.php'>
//     <button>go back</button></a>";
// } else if(!isset($name)){
//     echo "<div>'Fill the name field'</div>
//     <a href='../signup.php'>
//     <button>go back</button></a>";
// } else if(!isset($email)){
//     echo "<div>'Fill the email field'</div>
//     <a href='../signup.php'>
//     <button>go back</button></a>";
// } else {

$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

//The email we are looking for.
$username = $_POST['username'];
 
//The SQL query.
$sql = "SELECT COUNT(*) AS num FROM `users` WHERE username = :username";
 
//Prepare the SQL statement.
$stmt = $db->prepare($sql);
 
//Bind our email value to the :email parameter.
$stmt->bindValue(':username', $username);
 
//Execute the statement.
$stmt->execute();
 
//Fetch the row / result.
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
//If num is bigger than 0, the email already exists.
if($row['num'] > 0){
echo "<div>'Username exists, please choose another username'</div>
<a href='../signup.php'>
<button>go back</button></a>";
}
 else{
//   'Row does not exist!';
    try{
            $q = $db->prepare('INSERT INTO users VALUES(:id, :username, :password , :name, :email )');
            $q->bindValue(':id', null);
            $q->bindValue(':username', $username);
            $q->bindValue(':password', $password);
            $q->bindValue(':name', $name);
            $q->bindValue(':email', $email);
            $q->execute();
            header("Location: ../login.php");
        }catch(PDOException $ex){
            echo $ex;
        }  
}
?>
