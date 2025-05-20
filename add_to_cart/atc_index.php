<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Products</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #333333;
      font-family: 'Times New Roman', Times, serif;
    }
    h1{
        color:#fff3e9
    }
    
    button {
      background-color: rgb(165, 53, 53);
      padding: 5px 10px;
      color: white;
      border-radius: 8px;
      border: none;
    }
    button:hover {
      background-color: rgb(144, 45, 45);
    }
  </style>
</head>
<body>

<?php include('db.php'); ?>

<section class="container py-5">
  <div class="row">
    <div class="col-12 text-center mb-4">
      <h1><b>Shop Your Favorite Products</b></h1>
    </div>

    <?php
    $query = "SELECT * from view_pro";
    $queryRun = mysqli_query($con, $query);
    while ($fetch = mysqli_fetch_assoc($queryRun)) {
      if ($fetch['stock'] > 0) {
        $stock = '<form action="atc.php" method="post">
                  <input type="hidden" name="product_id" value="'.$fetch['id'].'">
                  <input name="qty" type="number" value="1" min="1" max="'.$fetch['stock'].'">
                  <button type="submit">Add to cart</button>
                  </form>';
      } else {
        $stock = "<p class='text-danger fw-bold'>OUT OF STOCK</p>";
      }

      echo '<div class="col-md-3 mb-4" >
              <div class="card h-100" style = "background-color:#fff3e9">
                <img src="image/'.$fetch['image'].'" class="card-img-top w-100" alt="product" height="250px;" >
                <div class="card-body text-center">
                  <h5 class="card-title"><b>'.$fetch['name'].'</b></h5>
                  <p class="card-text">Rs '.$fetch['price'].'</p>
                  '.$stock.'
                </div>
              </div>
            </div>';
    }
    ?>
  </div>
</section>

</body>
</html>
