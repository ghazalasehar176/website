<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

  <style>
   
  body {
  background-color: #333333;
  font-family: 'Times New Roman', Times, serif;
 
}
.mainbox {
  background-color:  #fff3e9;
  height: 500px;
}
.welcome{
  color:#ffd7be;
  position: absolute;
  bottom :160px;
  margin-left:80px;
  font-size:50px;
}

h2 {
  font-weight: bold;
  text-align: center;
}

.circle-left {
  position: absolute;
  width: 400px;
  height: 400px;
  background-color:rgb(165, 53, 53);
  border-radius: 50%;
  top: -10px;
  right: 10px;
  z-index: 0;
  opacity: 0.9;
}

.circle-right {
  position: absolute;
  width: 450px;
  height: 450px;
  background-color: #333333;
  border-radius: 50%;
  bottom:-170px;
  left:-130px;
  opacity: 0.9;
}
button{
  background-color:rgb(165, 53, 53);
  padding:7px;
  color:white;
}
button:hover{
  background-color:rgb(144, 45, 45);
}

  </style>
<?php
include('db.php');
?>
</head>
<body>
 

        <div class="container">
  <div class="row justify-content-center text-center" style="color:black; margin-top: 7%; padding:10px;">
    <div class="col-12 mainbox d-flex align-items-center">
      <div class="col-md-8 position-relative">
        <div class="circle-left"></div>
        
        <div class="circle-right">

<h1 class = "welcome">WELCOME BACK!</h1>

        </div>
      </div>

      <div class="col-md-4">
        <h2>LOGIN PAGE</h2>
        <br>
        <form method="post">
          <input type="username" placeholder="Enter username" class="form-control" name="username">
          <br>
          <input type="password" placeholder="Enter password" class="form-control" name="password">
          <br>
          <button name="btn_login" class="w-100">LOGIN</button>
        </form>
      </div>

    </div>
  </div>
</div>

</body>
</html>
<?php

session_start();


if(isset($_SESSION['username'])){
 header('location:welcome.php');
}

if(isset($_POST['btn_login'])){
$username =  $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM register where username = '$username' AND password = '$password'" ;
$query_run = mysqli_query($con , $query);


  if (mysqli_num_rows($query_run) > 0) {
    $fetch = mysqli_fetch_assoc($query_run);

 $_SESSION['username'] = $username;
 setcookie( "username" , $username , time() + 60*60);
  header('location:welcome.php');  
 
}
else{
   echo "
<div style='position: fixed; top: 10px; width: 100%; z-index: 9999;'>
  <div class='alert alert-danger alert-dismissible fade show text-center mx-auto w-50' role='alert' style='color:white; background-color:rgb(246, 60, 60); border:none;'>
    <strong> Invalid username or password</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
</div>
";


  

    ;
}
}?>





