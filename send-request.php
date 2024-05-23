<?php

if(!isset($_GET['sign'])){
    header("Location: index.php?error=Send-request-signNotDetected");
    exit();
}

if(!isset($_GET['username'])){
    header("Location: index.php?error=Send-request-usernameNotDetected");
    exit();
}

if(!isset($_GET['phone'])){
    header("Location: index.php?error=Send-request-phoneNotDetected");
    exit();
}

$sign_name = $_GET['sign'];
$username = $_GET['username'];
$phone = $_GET['phone'];

if(!is_numeric($phone)){
    header("Location: sign-details.php?error=not-numeric-phone");
    exit();
}

require 'database/connect.php';

$sql = 'INSERT INTO requests(sign_name,username,phone) 
        VALUES ("'.$sign_name.'","'.$username.'","'.$phone.'")' ;
$query = mysqli_query($connect, $sql);

if($query == 1){
    header("Location: index.php?success=db_insert_success");
    exit();
}else{
    header("Location: index.php?error=db_insert_error");
    exit();
}
