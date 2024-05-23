<?php

$ServerName = 'localhost';
$Username = 'root';
$Password = '';
$Database = 'neonly';

$connect = mysqli_connect($ServerName,$Username,$Password,$Database);

if(!$connect){
    header('Location: index.php?error=DatabaseConnectionErrorInConnect.php');
    exit();
}