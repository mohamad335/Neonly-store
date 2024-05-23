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
    <title>Single Sign - Neonly</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!------------ Connection To Database ------------>
    <?php require'database/connect.php'; ?>

    <!------------ navigation bar ------------>
    <div class="container">
        <?php require 'header.php' ?>
    </div>

    <!-------------- single sign details --------------->
    <?php
    $sign = $_GET['sign'];
    if(!isset($sign)){
        header("Location: index.php?error=AccessDenied");
        exit();
    }
    $sql = 'SELECT * FROM signs WHERE name="'.$sign.'"';
    $query = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($query);
    if($row <= 0){
        header("Location: index.php?error=NoSignWasFound");
        exit();
    }
    $row = mysqli_fetch_assoc($query);
    ?>

    <?php 
        if(isset($_GET['error']) && $_GET['error'] == 'db_insert_error'){
            echo '<p style="color: red;">Database Insertion Error!</p>';
        }
        if(isset($_GET['success']) && $_GET['success'] == 'db_insert_success'){
            echo '<p style="color: blue;">Your request was successfully sent!</p>';
        }
    ?>
    
    <div class="small-container single-product">
        <div class="row">

            <div class="col-2">
                <img src="images/neonly/<?php echo $row['image'] ?>.jpeg" width="100%" id="ProductImg">
            </div>
            <div class="col-2">
                <h1><?php echo $row['name'] ?></h1>
                <h4><?php echo 'Color: '.$row['color'] ?></h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <h3>Product Details <i class="fa fa-indent"></i></h3><br>
                <p><?php 
                    if(isset($row['description'])){
                        echo $row['description'];
                    }
                    ?></p><br>
                <form action="send-request.php" style="display: grid;" method="get">
                    <h3 style="display: inline-block">Please enter your name and phone number</h3><br>
                    <input type="text" name="sign" value="<?php echo $row['id']; ?>" hidden>
                    <label for="username">Full Name:</label>
                    <input type="text" name="username" autocomplete="off">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" autocomplete="off">
                    <?php 
                        if(isset($_GET['error']) && $_GET['error'] == 'not-numeric-phone'){
                            echo '<p style="color: red;">Please Enter a valid phone number (only numbers)!</p>';
                        }
                    ?>
                    <button class="btn" style="height: 50px;" type="submit">Send Request</button>
                </form>
            </div>
        </div>
    </div>

    <!-------------- title --------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="products.php">
            <p>View More</p></a>
        </div>
    </div>

    <!-------------- products --------------->
    <div class="small-container">
        <div class="row">
            <?php
            $sql = 'SELECT * FROM signs WHERE color="'.$row['color'].'"';
            $query = mysqli_query($connect,$sql);
            $row = mysqli_num_rows($query);
            if ($row > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $rate = $row['rate'];
                    echo
                        '<div class="col-4">
                            <a href="sign-details.php?sign='.$row['name'].'"><img src="images/neonly/'.$row['image'].'.jpeg" alt=""></a>
                            <a href="sign-details.php?sign='.$row['name'].'"><h4>'.$row['name'].'</h4></a>
                            <div class="rating">
                                ';
                                for ($i=0; $i < $rate; $i++) { 
                                    echo'<i class="fa fa-star"></i>';
                                };
                    echo'   </div>
                            <p>Color: '.$row['color'].'</p>
                        </div>';
                }
            }else{
                echo '<h1>No Products to be displayed</h1>';
            };
            ?>
        </div>
    </div>

    <!--------- footer --------->
    <?php require 'footer.php' ?>

    <!-- js for toggle menu-->
    <script src="javascript/toggle-script.js"></script>

    <!-- js for product gallery-->
    <!-- <script src="javascript/toggle-gallery.js"></script> -->

</body>
</html>