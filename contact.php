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
    <title>RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    h1{
        color: #EC3944;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        font-weight: 500;
        line-height: 1.2;
        font-size: 2rem;
    }
    h2{
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        background: -webkit-linear-gradient(-40deg,#00002D, #00ADDB);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 500;
        line-height: 1.2;
        font-size: 2rem;
    }
</style>
<body>

    <!------------ navigation bar ------------>
    <div class="container">
        <?php require 'header.php' ?>
    </div>
    
    <div class="space"></div>
    <div class="wrapper">
        <!-- <section class="your-mentor-wrap"> -->
        <div class="container">
            <!-- <div class="row"> -->
            <section class="strategic-wrap">
                <div style="text-align: center; padding-top: 50px;" class="container">
                    <div class="strategic-content">
                        <h1>NEED TO GET IN TOUCH?</h1><br><br>
                        <h2>Just send us an email</h2>
                        <a class="btn">boodi@gmail.com</a>
                        <h2>Or you can give us a call on</h2>
                        <a class="btn">+(961) 789 779 93</a>
                    </div>
                    
                </div>
            </section>
            <!-- </div> -->
        </div>
    </div>
    <div class="space"></div>
    <!--------- footer --------->
    <?php require 'footer.php' ?>
    
    <!-- js for toggle menu-->
    <script src="javascript/toggle-script.js"></script>
    
</body>
</html>