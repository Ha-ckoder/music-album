<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		h2.dil{

			text-align: center;
			font-size: 120;
			color: 
		}
    div{

      text-align: center;

    }
    h2{
      text-align: center;
      color: green;
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
// define variables and set to empty values
@error_reporting(2);
 $user_array = array("rohan@gmail.com"=>"abcxyz");

//$firstnameErr,$lastnameErr, $emailErr,$genderErr, $pwdErr;
global $firstname,$lastname, $email , $gender ,$pwd;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["firstname"])) {
     $firstnameErr = "Name is required";
   } else {
     $firstname = test_input($_POST["firstname"]);
   }
    if (empty($_POST["lastname"])) {
     $lastnameErr = "Name is required";
   } else {
     $lastname = test_input($_POST["lastname"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
   if (empty($_POST["pwd"])) {
     $pwdErr = "password is required";
   } else {
     $pwd = test_input($_POST["pwd"]);
   }
     


     $gender = test_input($_POST["gender"]);
}
/*if (!isset($user_array[$email])) {  
  $user_array[$email]=$pwd;
  header('location:login.html')

}
else {
  $emailErr="email already exists";
  header('location:reg.html');
}*/
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header  col-lg-3">
      <a class="navbar-brand" href="#"><span style="color:red">HANGMAN</span></a>
    </div>
    <ul class="nav navbar-nav">
    	
      <li ><a href="home.html">Home</a></li>
      <li class="active"><a href="register.html">Signup</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="instr.html">Instructions</a></li>
  
    </ul>
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
    <h2 style="color:green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration</h2><br><br>
    <form method="POST" action="register.php" >
      First Name:
    <input type="text" name="firstname" autofocus><br><br>
    <span class="error">* <?php echo $firstnameErr;?></span>
    Last Name:
    <input type="text" name="lastname"><br><br>
    <span class="error">* <?php echo $lastnameErr;?></span>
    Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" name="email"><br><br>
    <span class="error">* <?php echo $emailErr;?></span>
    Password:
    <input type="password" name="pwd"><br>
    <br>
    <span class="error">* <?php echo $pwdErr;?></span>
    Gender:
    <input type="radio" name="sex" value="male">Male
    <input type="radio" name="sex" value="female">Female<br><br>
   
    <input type="submit"></input>
    </form>
    </div> 
  </div>
</body>
</html>