<!DOCTYPE html>
 <html lang="en">
 <head>
    <title>WELCOME PAGE</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
     <?php
session_start();
?>
     <style>
    
body {
  background-color: #2c2c2c;
  font-family: 'Times New Roman', Times, serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url('img/makeup1.webp');
  background-size: cover;
  background-repeat: no-repeat;
}

.welcome_box {
  width: 300px;
  padding: 40px;
  background-color: #fff3e9; /* Softer peach */
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.welcome_box h2 {
  color: #4b0000; /* Deep maroon */
}

a {
  background-color: #800000; /* Mehrun */
  padding: 7px 15px;
  color: #ffffff;
  text-decoration: none;
  border: none;
  display: inline-block;
  margin: 5px 5px;
  border-radius: 5px;
}

a:hover {
  background-color: #990000; /* Slightly lighter mehrun */
}

.cookei_box {
  margin-top: 20px;
  background-color: #ffccd5; /* Soft pink */
  padding: 10px;
  border-radius: 10px;
  font-size: 14px;
  color: #4b0000;
}
</style>

    
 </head>
 <body>
    <div class="welcome_box">
        <h2>Welcome, <?php echo $_SESSION['username']?>!</h2>
        <p>What would you like to do?</p>
          
          <a href="add_to_cart/atc_index.php">Our Products</a>
          <a href="logout.php"  >Logout</a>
        <div class="cookei_box">
            <?php
            if(isset($_COOKIE['username'])){
                echo "Cookei name: <strong>".$_COOKIE['username']."</strong>";
            }
            else{
                      echo "No Cookei Found"; 
            }
            ?>
        </div>
    </div>
 </body>
 </html>
 

 