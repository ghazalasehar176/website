<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD TO CART(create)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #333333;
            color: black;
            font-family: 'Times New Roman', Times, serif;
        }
        .form-container {
            background-color: #fff3e9;
            padding: 30px;
            border-radius: 10px;
            margin-top: 40px;
        }
        h1 {
            font-weight: bold;
            color: #fff3e9;
          
        }
          button{
             background-color:rgb(165, 53, 53);
             padding:7px;
             color:white;
             border-radius:8px;
             width:100%;
       }
        button:hover{
             background-color:rgb(144, 45, 45);
       }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
               <h1 class="text-center"><b>Create User</b></h1>
            <div class="col-12 col-md-8 col-lg-6 form-container">
                <form method="post" enctype="multipart/form-data">
                    <input type="text" class="form-control mb-3" placeholder="Enter product name" name="name" required>
                    <input type="text" class="form-control mb-3" placeholder="Enter product price" name="price" required>
                    <input type="text" class="form-control mb-3" placeholder="Enter product description" name="description" required>
                    <input type="number" class="form-control mb-3" placeholder="Enter product stock" name="stock" required>
                    <input type="file" class="form-control mb-3" name="file" required>
                    <button name="btn_create"  >Create</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include("db.php");
if(isset($_POST['btn_create'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];

    $allow_type = ['image/jpeg', 'image/jpg', 'image/avif', 'image/webp'];

    if(in_array($file_type, $allow_type)){
        $location = "image/";
        if(move_uploaded_file($tmp_name, $location . $file_name)){
            echo "<script>alert('File uploaded successfully');</script>";

           echo "<img src='image/".$file_name."' width='20%' height= '200px'>";

        } else {
            echo "File not found";
        }
    } else {
        echo "Only JPG, JPEG, AVIF, WEBP files are allowed.";
    }

    $query = "INSERT INTO view_pro(name, price, description, image, stock) 
              VALUES('$name', '$price', '$description', '$file_name', $stock)";
    $query_run = mysqli_query($con, $query);

    // if($query_run){
    //     echo "<script>alert('User created successfully');</script>";
    // }
}
?>
