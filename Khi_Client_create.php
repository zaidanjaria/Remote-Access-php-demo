<?php
include ('connection_islamabad.php');
 include('connection_faisal.php');
include('conkhi.php');

if(isset($_POST) & !empty($_POST)){
	$id = mysqli_real_escape_string($conkhi,$_POST['id']);
	$name = mysqli_real_escape_string($conkhi,$_POST['name']);
	$project_id = mysqli_real_escape_string($conkhi,$_POST['project_id']);


	$CreateSql = "INSERT INTO `client` (id,name, project_id) VALUES ('$id', '$name', '$project_id')";
	
	$res_islamabad = mysqli_query($connection_islamabad, $CreateSql) or die(mysqli_error($connection_islamabad));
	$res_faisalabad = mysqli_query($connection_faisalabad, $CreateSql) or die(mysqli_error($connection_faisalabad));
	$res = mysqli_query($conkhi,$CreateSql) or die(mysql_error($conkhi));

	if($res_islamabad && $res_faisalabad && $res){
		$smsg = "Successfully inserted data in islamabad and faisalabad, Insert New data.";
		
	}else{
		$fmsg = "Data not inserted, please try again later.";
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
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>ByteCo-KARACHI<h2><br>
		<h2>Create Client</h2><br>
					<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">id</label>
			    <div class="col-sm-10">
			      <input type="number" name="id"  class="form-control" id="id" placeholder="" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name"  class="form-control" id="name" placeholder="" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Project_id</label>
			    <div class="col-sm-10">
			      <input type="text" name="project_id"  class="form-control" id="project_id" placeholder="" />
			    </div>

		
			
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10"  value="submit" />
			<a class="btn btn-primary" href="Khi_Client_index.php">Back To Main</a>

			
		</form>
	</div>
</div>
</body>
</html>