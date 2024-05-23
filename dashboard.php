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
    <title>Neonly | Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    
    <!------------ Connection To Database ------------>
    <?php require 'database/connect.php'; ?>


    <!------------ navigation bar ------------>
    <div class="container">
        <?php require 'header.php' ?>
    </div>
    <h1 style="text-align: center; margin-bottom: 40px; margin-top: 40px; color: blue">Welcome back Boss!</h1>


    <!--------- Latest Signs --------->

    <div class="small-container">
        <h2 class="title">Latest Requests</h2>
        <div class="row">

            <!--------- php section --------->
            <?php

            $sql = 'SELECT * FROM requests';
            $query = mysqli_query($connect, $sql);
            $row = mysqli_num_rows($query);
            if ($row > 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo
                    '<div class="col-4">
                        <img src="images/neonly/' . $row['sign_name'] . '.jpeg" alt="">
                        <h4>' . $row['username'] . '</h4>
                    <div class="rating">';

                    echo 
                    '</div>
                        <p>phone: ' . $row['phone'] . '</p>
                    </div>';
                }
            }

            ?>

        </div>
    </div>


    <!--------- footer --------->
    <?php require 'footer.php' ?>

    <!-- js for toggle menu
    <script src="javascript/toggle-script.js"></script> -->

</body>

</html>