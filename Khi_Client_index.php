<?php
include('conkhi.php');
$ReadSql = "SELECT * FROM `client`";
$res = mysqli_query($conkhi, $ReadSql);
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
	<div class="row">
	<h2>ByteCo-KARACHI</h2><br>
    <table><tr><td><a class="btn btn-primary" href="Khi_Project_index.php">Go To Projects</a></td>
    <td><a class="btn btn-primary" href="Khi_ProjectManager_index.php">Go To Project Managers</a></td></tr></table>

	<h2>Clients List</h2><br>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Full Name</th> 
				<th>Project Id</th> 

			</tr> 
		</thead> 
		<tbody> 
		<?php 
		while($r = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<th scope="row"><?php echo $r['id']; ?></th> 
				<td><?php echo $r['name']; ?></td> 
				<td><?php echo $r['project_id']; ?></td> 

				<td>
					<a class="btn btn-info" href="Khi_Client_update.php?id=<?php echo $r['id']; ?>">update</a>

					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>

					<!-- Modal -->
					  <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Delete File</h4>
					        </div>
					        <div class="modal-body">
					          <p>Are you sure?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					          <a href="Khi_Client_delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Delete</button></a>
					        </div>
					      </div>
					      
					    </div>
					  </div>

				</td>
			</tr> 
		<?php } ?>
		</tbody> 
		<tr><td><a class="btn btn-info" href="Khi_Client_create.php">Create New Client</a></td></tr>
		</table>
	</div>
</div>
</body>
</html>