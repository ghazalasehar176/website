<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD TO CART (Edit)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333333;
            font-family: 'Times New Roman', Times, serif;
            padding: 30px;
        }
        h1 {
            
           color: #fff3e9;
           font-weight:bold;
           
        }
        .form-box {
            background-color: #fff3e9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #00000040;
        }
        .form-control {
            margin-bottom: 15px;
        }
        button {
  background-color: #800000; /* Mehrun */
  padding: 7px 15px;
  color: #ffffff;
  text-decoration: none;
  border: none;
  display: inline-block;
  margin: 5px 5px;
  border-radius: 5px;
  width:100%;
}

button:hover {
  background-color: #990000; /* Slightly lighter mehrun */
}

    </style>
</head>
<?php
include("db.php");
    $id = $_GET['id'];
    echo "<script>alert('User id is : ".$id."')</script>";

    $query = "SELECT * FROM view_pro WHERE id = $id";
    $query_run = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($query_run);
 
?>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center ">EDIT THE PRODUCT</h1>
            <div class="col-6 form-box">
                <form method="post" enctype="multipart/form-data">
                    <input type="text" class="form-control" placeholder="Enter product name" name="name" value="<?php echo $fetch['name']; ?>">
                    <input type="text" class="form-control" placeholder="Enter product price" name="price" value="<?php echo $fetch['price']; ?>">
                    <input type="text" class="form-control" placeholder="Enter product description" name="description" value="<?php echo $fetch['description']; ?>">
                    <input type="text" class="form-control" placeholder="Enter product stock" name="stock" value="<?php echo $fetch['stock']; ?>">
                    <input type="file" class="form-control" name="file">
                    <button name="btn_edit">Edit The Product</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['btn_edit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    $allow_type = ['image/jpeg', 'image/jpg', 'image/avif', 'image/webp'];

    if (in_array($file_type, $allow_type)) {
        $location = "image/";
        if (move_uploaded_file($tmp_name, $location . $file_name)) {
            echo "<script>alert('File uploaded successfully')</script>";

             echo "<img src='image/".$file_name."' width='20%' height= '200px'>";
        } else {
            echo "File not found";
        }
    } else {
        echo "Only these types of files are allowed (jpg, jpeg, webp, avif)";
    }

    $query = "UPDATE view_pro SET
                name = '$name',
                price = '$price',
                description = '$description',
                stock = $stock,
                image = '$file_name'
              WHERE id = $id";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        header("Location: atc_read.php");
    }
}
?>

 
