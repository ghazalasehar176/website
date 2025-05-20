<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #333333;
            font-family: 'Times New Roman', Times, serif;
            padding: 30px 0;
        }

        h1 {
            color: #fff3e9;
        }

        .table-container {
            background-color: #fff3e9;
            padding: 20px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            background-color: #fff3e9;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

       tbody tr:hover {
            background-color:rgb(246, 228, 215);
        }

        .grand-total-row td {
            font-weight: 600;
            font-size: 1.1rem;
            background-color: #ffccd5;
        }
    </style>
    <?php
        include("db.php");
        session_start();
        $session_id = session_id();
    ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h1 class="text-center"><b>Your Cart</b></h1>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Product</th>
                                <th>Price (Rs.)</th>
                                <th>Quantity</th>
                                <th>Total (Rs.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM cart c INNER JOIN view_pro p ON p.id = c.pro_id WHERE c.session_id = '$session_id'";
                            $query_run = mysqli_query($con, $query);
                            $grand_total = 0;
                            $s_no = 1;
                            while($fetch = mysqli_fetch_assoc($query_run)){
                            ?>
                            <tr>
                                <td><?php echo $s_no++; ?></td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="image/<?php echo htmlspecialchars($fetch['image']); ?>" alt="<?php echo htmlspecialchars($fetch['name']); ?>" width="70" height="60" class="me-3" />
                                        <span><?php echo htmlspecialchars($fetch['name']); ?></span>
                                    </div>
                                </td>
                                <td><?php echo number_format($fetch['price'], 2); ?></td>
                                <td><?php echo intval($fetch['qty']); ?></td>
                                <td><?php 
                                    $total = $fetch['qty'] * $fetch['price']; 
                                    echo number_format($total, 2);
                                ?></td>
                            </tr>
                            <?php
                                $grand_total += $total;
                            } 
                            ?>
                            <tr class="grand-total-row">
                                <td colspan="3"></td>
                                <td>Grand Total</td>
                                <td><?php echo number_format($grand_total, 2); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
