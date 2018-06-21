<?php
$connection_islamabad = mysqli_connect('ip address isl', 'remote', 'remote');
if (!$connection_islamabad){
    die("Database connection_islamabad Failed" . mysqli_error($connection_islamabad));
}



$select_db = mysqli_select_db($connection_islamabad, 'byteco_islamabad');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection_islamabad));
}