<?php
$connection_faisalabad = mysqli_connect('ip-address faisalabad', 'remote', 'remote');
if (!$connection_faisalabad){
    die("Database connection_faisalabad Failed" . mysqli_error($connection_faisalabad));
}

$select_db = mysqli_select_db($connection_faisalabad, 'byteco_faisalabad');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection_faisalabad));
}