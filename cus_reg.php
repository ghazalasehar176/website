<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>CUSTOMER REGISTRATION PAGE</title>
  <style>
   
body{
    background-color:#333333;
    font-family: 'Times New Roman', Times, serif;

}
.mainbox{
    background-color:#fff3e9;
    height: 500px;
    
}
h2{
    font-weight: bold;
    text-align: center;
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

  <div class="container" >
    <div class="row justify-content-center" style="color: black; margin-top: 10%;">
      <div class="col-12 mainbox">
<br>
<div class="col-md-6">
<img src = "img/makeupp2.jpg" width = "100%" height = "450px">
</div>
<div class="col-md-6">
   <h2>REGISTRATION FORM</h2>
   <br>

        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="form-group">
            <button type="submit" class="w-100" name="btn_submit">Submit</button>
          </div>
        </form>
        <div>
           <h4 class="text-center ">already have an Account? <a href="login.php">login here</a></h4>
        </div>

</div>
         </div>  
  </div>
  </div>
</body>

</html>
<?php
 
 if(isset($_POST['btn_submit'])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


// $password = password_hash($_POST['password'] ,PASSWORD_DEFAULT );


$query = "INSERT into register(username ,email , password)values('$username' , '$email' , '$password')";
$query_run = mysqli_query($con , $query);


if($query_run){
  echo "<script>alert('succesfully login')</script>";
}
}



 
 ?>