<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Neonly | Lebanon</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <!------------ Connection To Database ------------>
    <?php require 'database/connect.php'; ?>


    <div class="header">
        <div class="container">
            <!------------ navigation bar ------------>
            <?php require 'header.php' ?>

            <!------------ Message Error/Success ------------>
            <?php 
            if(isset($_GET['error']) && $_GET['error'] == "db_insert_error" ) echo '<h1 style="color:red;">Your request was not sent! try again.</h1>' ;
            if(isset($_GET['success']) && $_GET['success'] == "db_insert_success" ) echo '<h1 style="color:blue;">Your request was sent successfully!</h1>' ;
            ?>

            <!------------ Landing Screen ------------>

            <div class="row">
                <div class="col-1">
                    <h1 class="font-bold mb-12 text-4xl">Give Your Home<br>A New Style!</h1>
                    <p>Success isn't always about greatness. It's
                        about consistency. Consistent<br>hard work gains success.
                        Greatness will come.
                    </p>
                    <a href="signs.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/neon-bg-3.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--------- featured categories --------->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/neonly/f-1.jpeg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/neonly/f-2.jpeg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/neonly/f-3.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--------- featured Signs --------->
    <div class="small-container">
        <h2 class="title">Featured Design</h2>
        <div class="row">

            <!--------- php section --------->
            <?php

            $sql = 'SELECT * FROM signs WHERE featured = "1"';
            $query = mysqli_query($connect, $sql);
            $row = mysqli_num_rows($query);
            if ($row > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $rate = $row['rate'];
                    echo
                    '<div class="col-4">
                            <a href="sign-details.php?sign=' . $row['name'] . '"><img src="images/neonly/' . $row['image'] . '.jpeg" alt=""></a>
                            <a href="sign-details.php?sign=' . $row['name'] . '"><h4>' . $row['name'] . '</h4></a>
                            <div class="rating">
                                ';
                    for ($i = 0; $i < $rate; $i++) {
                        echo '<i class="fa fa-star"></i>';
                    };
                    echo '   </div>
                            <p>Color: ' . $row['color'] . '</p>
                        </div>';
                }
            }

            ?>
        </div>
    </div>

    <!--------- Latest Signs --------->

    <div class="small-container">
        <h2 class="title">Latest Signs</h2>
        <div class="row">

            <!--------- php section --------->
            <?php

            $sql = 'SELECT * FROM signs';
            $query = mysqli_query($connect, $sql);
            $row = mysqli_num_rows($query);
            if ($row > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $rate = $row['rate'];
                    echo
                    '<div class="col-4">
                            <a href="sign-details.php?sign=' . $row['name'] . '"><img src="images/neonly/' . $row['image'] . '.jpeg" alt=""></a>
                            <a href="sign-details.php?sign=' . $row['name'] . '"><h4>' . $row['name'] . '</h4></a>
                            <div class="rating">
                                ';
                    for ($i = 0; $i < $rate; $i++) {
                        echo '<i class="fa fa-star"></i>';
                    };
                    echo '   </div>
                            <p>Color: ' . $row['color'] . '</p>
                        </div>';
                }
            }

            ?>

        </div>
    </div>

    <!--------- offer --------->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/neonly/23.jpeg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Make your home your heaven with a LED neon sign!</p>
                    <h1>Get your custom neon sign now! ⚡</h1>
                    <small>
                        Best customer service and value for money. Free design and quote! Find out more! 😍
                    </small><br>
                    <a href="sign-details.php?sign=New Design 2020 23" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!--------- testimonial --------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Imsum is simply dummy text of printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-4.jpg">
                    <h3>Charlie Mufphy</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Imsum is simply dummy text of printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-6.png">
                    <h3>Cillian Murfy</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Imsum is simply dummy text of printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-5.jpg">
                    <h3>Mad Man</h3>
                </div>
            </div>
        </div>
    </div>
    <!--------- brands --------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>
    <!--------- footer --------->
    <?php require 'footer.php' ?>

    <!-- js for toggle menu-->
    <script src="javascript/toggle-script.js"></script>

</body>

</html>