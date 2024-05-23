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
    <title>Signs - Neonly</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!------------ Connection To Database ------------>
    <?php require'database/connect.php'; ?>

    <!------------ navigation bar ------------>
    <div class="container">
        <?php require('header.php') ?>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>All Signs</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort By Price</option>
                <option>Sort By Type</option>
                <option>Sort By Rating</option>
                <option>Sort By Latest</option>
            </select>
        </div>
        <div class="row">
            <?php

            $sql = 'SELECT * FROM signs';
            $query = mysqli_query($connect,$sql);
            $row = mysqli_num_rows($query);
            if ($row > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $rate = $row['rate'];
                    echo
                        '<div class="col-4">
                            <a href="product-details.php?product='.$row['name'].'"><img src="images/neonly/'.$row['image'].'.jpeg" alt=""></a>
                            <a href="product-details.php?product='.$row['name'].'"><h4>'.$row['name'].'</h4></a>
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
                echo '<h1>No Signs to be displayed</h1>';
            };
            ?>

        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
    
    <!--------- footer --------->
    <?php require 'footer.php' ?>
    
    <!-- js for toggle menu-->
    <script src="javascript/toggle-script.js"></script>

</body>
</html>