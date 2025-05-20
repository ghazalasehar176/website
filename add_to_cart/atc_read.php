<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD TO CART (Read)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #333333;
            font-family: 'Times New Roman', Times, serif;
            padding: 30px;
        }
        h1 {
            color: #fff3e9;
            font-weight: bold;
        }
        
        .table-container {
    background-color: #fff3e9;
    padding: 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 1000px;
    margin: auto; 
}


        

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        tbody tr:hover {
            background-color:rgb(246, 228, 215);
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
  background-color: #990000; 
}

    </style>
    <?php include("db.php"); ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
 <h1 class="text-center">All products</h1>
            <table class="table-container" >
                <thead>
                    <tr>
                        <th>S_NO</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Description</th>
                        <th>Stock</th>
                        <th>Product Image</th>
                        <th>Edit & Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM view_pro";
                    $query_run = mysqli_query($con, $query);
                    // $count = 1;
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['price']."</td>
                            <td>".$row['description']."</td>
                            <td>".$row['stock']."</td>
                            <td><img src='image/".$row['image']."' width='70%' height='80px'></td>
                          
                                <td><a href='atc_edit.php?id=".$row['id']."' >Edit</a><a href='atc_delete.php?id=".$row['id']."'>Delete</a></td>
                     
                        </tr>";
                        // $count++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
                </div>
              
</body>
</html>
 