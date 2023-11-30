<?php

include("connection.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num > 0){
        echo'<script>alert("email already exists!")</script>';
    }

else{
    $insert="INSERT INTO signup(email,password)VALUES('$email','$password')";
    mysqli_query($conn,$insert);
    header("location:patientlogin.php");
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" contents="width=device-width, initial-scale=1">
    <title>Pharmacy management system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="signup">
  <div class="background">
    <h1>sign up</h1>
    <form  method="POST">
        
        <label>email</label>
        <input type="email" name="email" required>
        <label>password</label>
        <input type="password" name="password" required>
        <input type="submit" name="submit" value="submit">
        </form>
        <p>Already have an account? <a href="patientlogin.php">login here</a></p>
  </div></div>
  </body>
  </html>
