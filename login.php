<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    h2.dil{

      text-align: center;
      font-size: 120;
      color: 
    }
  </style>
  <title>Hangman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
@error_reporting(2);
  $user_array = array("rohan@gmail.com"=>"abcxyz");
  //echo $user_array['rohan@gmail.com'];
global $firstname, $lastname, $email, $gender, $pwd;
$abc = $_POST['email'];
$xyz = $_POST['pwd'];
echo $abc;
echo $xyz;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = $_POST["email"];
   }
   if (empty($_POST["pwd"])) {
     $pwdErr = "password is required";
   } else {
     $pwd = $_POST["pwd"];
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
  if(isset($user_array[$email])){
    if (strcmp($pwd, $user_array[$email]) == 0) { //log user in if password is correct
    session_start();        //create a session
    $_SESSION['email'] = $email;    //add details to the session
    header('Location:cate.html');
    }
    else {
    $passerr='incorrect password';
    }
  }
  else{
    $namerr='incorrect email';
  }

?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header col-lg-3">
      <a class="navbar-brand" href="#"><span style="color:red">HANGMAN</span></a>
    </div>
    <ul class="nav navbar-nav">
      
      <li ><a href="home.html">Home</a></li>
      <li ><a href="register.html">Signup</a></li>
      <li class="active"><a href="login.html">Login</a></li>
      <li ><a href="instr.html">Instructions</a></li>
  
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron">

      <h2 class="dil">WELCOME TO HANGMAN</h2>
 
 #<form class="form-inline" role="form" method="POST" action="login.php">
    <div class="form-group">
      <label for="email" autofocus>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div><br><br>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div><br><br>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div><br><br>
   <input type="submit" ></input>
  </form>

</body>
</html>