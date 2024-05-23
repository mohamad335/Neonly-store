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
            
            <?php 
            if(isset($_POST['password']) && $_POST['password'] == 'ali123'){
                header("Location: dashboard.php");
                exit();
            }
            ?>

            <form action="confirm.php" method="post" style="height: 300px; margin-top:30px">
                Please enter your admin password:
                <input type="password" name="password" class="input">
                <input type="submit" class="btn">
            </form>

        </div>
    </div>


    
   
    <!--------- footer --------->
    <?php require 'footer.php' ?>

</body>

</html>