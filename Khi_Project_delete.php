<?php
// include ('connection_islamabad.php');
// include('connection_faisal.php');
include('conkhi.php');

$id = $_GET['id'];
$DelSql = "DELETE FROM `project` WHERE id=$id";
// $res_islamabad = mysqli_query($connection_islamabad, $DelSql);
// $res_faisalabad = mysqli_query($connection_faisalabad, $DelSql);
$res = mysqli_query($conkhi, $DelSql);


if( $res){
	header('location: Khi_Project_index.php');
}else{
	echo "Failed to delete";
}
?>