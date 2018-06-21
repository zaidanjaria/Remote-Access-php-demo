<?php

include('connection_islamabad.php');
include('connection_faisal.php');
include('conkhi.php')

$id = $_GET['id'];
$SelSql = "SELECT * FROM `project` WHERE id=$id";

$res = mysqli_query($conkhi, $SelSql);
$r = mysqli_fetch_assoc($res);

if(isset($_POST) & !empty($_POST)){
	$id = mysqli_real_escape_string($conkhi,$_POST['id']);
	$name = mysqli_real_escape_string($conkhi,$_POST['name']);
	$Technology = mysqli_real_escape_string($conkhi,$_POST['Technology']);
	$PM_id = mysqli_real_escape_string($conkhi,$_POST['PM_id']);


	$UpdateSql = "UPDATE `project` SET name='$name', Technology='$Technology' WHERE id=$id";

	$res_islamabad = mysqli_query($connection_islamabad, $UpdateSql);
	$res_faisalabad = mysqli_query($connection_faisalabad, $UpdateSql);
	$res = mysqli_query($conkhi, $UpdateSql);
	
	if($res_islamabad && $res_faisalabad && $conkhi){
		header('location: Khi_Project_index.php');
	}else{
		$fmsg = "Failed to update data.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ByteCo</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>ByteCo-Islamabad</h2><br>
		<h2>Update Project</h2><br>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Id</label>
			    <div class="col-sm-10">
			      <input type="text" name="id"  class="form-control" id="id"  value="<?php echo $r['id']; ?>" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name"  class="form-control" id="name" value="<?php echo $r['name']; ?>" placeholder="" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Technology</label>
			    <div class="col-sm-10">
			      <input type="text" name="Technology"  class="form-control" id="Technology" value="<?php echo $r['Technology']; ?>" placeholder="" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Project Manager Id</label>
			    <div class="col-sm-10">
			      <input type="number" name="PM_id"  class="form-control" id="PM_id" value="<?php echo $r['PM_id']; ?>" placeholder="" />
			    </div>
			</div>
<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />

		</form>
	</div>
</div>
</body>
</html>