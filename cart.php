<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Single Products - RedStore</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!------------ Connection To Database ------------>
    <?php require'database/connect.php'; ?>

    <!------------ navigation bar ------------>
    <div class="container">
        <?php require('header.php') ?>
    </div>

    <!------------ php section ------------>
    <?php

    /***************  insert to cart  **************/
    if(isset($_GET['product'])){

        $product = $_GET['product'];

        // check if the product exist in the products
        $ProCheckSql = 'SELECT * FROM products WHERE products.ID = "'.$product.'"';
        $ProCheckQue = mysqli_query($connect,$ProCheckSql);
        $ProCheckRes = mysqli_num_rows($ProCheckQue);
        if($ProCheckRes == 0){
            header("Location: index.php?error=NoSuchProductWereFound");
            exit();
        }

        // check if the product exist in the cart
        $CartCheckSql = 'SELECT * FROM cart WHERE cart.ID = "'.$product.'"';
        $CartCheckQue = mysqli_query($connect,$CartCheckSql);
        $CartCheckRes = mysqli_num_rows($CartCheckQue);
        if($CartCheckRes == 0){
            $sql1 = 'INSERT INTO cart (ID) VALUES ("'.$product.'")';
            $query1 = mysqli_query($connect,$sql1);
            if(!$query1){
                header("Location: index.php?error=Couldn'tInsertIntoCart");
                exit();
            }
        }
    }

    /***************  remove from cart  **************/
    if(isset($_GET['remove'])){

        $delete = $_GET['remove'];

        // check if the product exist in the cart
        $CartCheckSql = 'SELECT * FROM cart WHERE ID = "'.$delete.'"';
        $CartCheckQue = mysqli_query($connect,$CartCheckSql);
        $CartCheckRes = mysqli_num_rows($CartCheckQue);
        if($CartCheckRes >= 1){
            $sql1 = 'DELETE FROM cart WHERE ID= '.$delete.';';
            $query1 = mysqli_query($connect,$sql1);
            if(!$query1){
                header("Location: index.php?error=Couldn'tDeleteFromCart");
                exit();
            }
        }
    }

    /***************  display cart  **************/
    $sql2 = 'SELECT products.ID, name1, details, price, quantity FROM products , cart WHERE cart.ID = products.ID';
    $query2 = mysqli_query($connect,$sql2);
    $row2 = mysqli_num_rows($query2);
    if($row2 == 0){
        echo '<h1 style="color: red; margin-left: 30px ">Your cart is empty!</h1>';
    }

    ?>

    <!--------- cart items details --------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php
            $subTotal = 0;
            $tax = 0;
            $total = 0;
            while($row = mysqli_fetch_assoc($query2)){
                echo'
                <tr>
                    <td>
                        <div class="cart-info">
                            <a href="product-details.php?product='.$row['name1'].'"><img src="images/'.$row['name1'].'.jpg"></a>
                            <div>
                                <p>'.$row['details'].'</p>
                                <small>Price: $'.$row['price'].'</small>
                                <br>
                                <a href="cart.php?remove='.$row['ID'].'">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" min="1" max="'.$row['quantity'].'"></td>
                    <td>$'.$row['price'].'</td>
                </tr>
                ';
                $subTotal += $row['price'];
            }
            ?>
            
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo $subTotal?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$<?php $tax = $subTotal*0.1; echo $subTotal*0.1?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$<?php $total = $subTotal + $tax; echo $total?></td>
                </tr>
            </table>
        </div>
    </div>
    <!--------- footer --------->
    <?php require 'footer.php' ?>

    <!-- js for toggle menu-->
    <script src="javascript/toggle-script.js"></script>
    
</body>
</html>