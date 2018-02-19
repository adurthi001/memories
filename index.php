<?php
include "includes/connect.php";
session_start();
if(isset($_POST["signupsubmit"])){
    $userid=$_POST["userid"];
    $email=$_POST["email"];
    $password=$_POST["pwd"];
    $qry="INSERT INTO users(username,email,password) VALUES ('$userid','$email','$password')";
    mysqli_query($conn,$qry) or die("connection failed: ".mysqli_error($conn));
    header("location:login.php");
}
if(isset($_POST["loginsubmit"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>

<body>
   <form method="post" action="">
   <div class="satya">
      <input class="defaultTextBox" name="userid" type="text" placeholder="     userid"/><br><p></p>
      <input class="defaultTextBox" name="email" type="email" placeholder="    Your Email"/><br><p></p>
      <input class="defaultTextBox" name="pwd" type="password" placeholder="     PASSWORD"/><br><p></p>
      <input class="button" type="submit" name="sub"/>
      <br/>
	  </div>
   </form>
        </form>
        </div>
        <form method="post" action="">
        <div class="satya">
            <h3>Already have an account?</h3>
            <input class="button" type="submit" name="loginsubmit" value="LogIn">
        </div>
        </form>
        </div>
    </div>
</body>

</html>