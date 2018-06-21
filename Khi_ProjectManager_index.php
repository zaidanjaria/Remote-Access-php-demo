<?php
include('conkhi.php');
$ReadSql = "SELECT * FROM `project_manager`";
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
	<h2>ByteCo-Karachi</h2><br>
    <table><tr><td><a class="btn btn-primary" href="Khi_Project_index.php">Go To Projects</a></td>
    <td><a class="btn btn-primary" href="Khi_Client_index.php">Go To Clients</a></td></tr></table>
	<h2>Project Managers List</h2><br>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Full Name</th> 
				

			</tr> 
		</thead> 
		<tbody> 
		<?php 
		while($r = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<th scope="row"><?php echo $r['id']; ?></th> 
				<td><?php echo $r['Name']; ?></td> 
				

				<td>
					<a class="btn btn-info" href="Khi_ProjectManager_update.php?id=<?php echo $r['id']; ?>">update</a>

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
					          <a href="Khi_ProjectManager_delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Delete</button></a>
					        </div>
					      </div>
					      
					    </div>
					  </div>

				</td>
			</tr> 
		<?php } ?>
		</tbody> 
		<tr><td><a class="btn btn-info" href="Khi_ProjectManager_create.php">Create New Project Manager</a></td></tr>
		</table>
	</div>
</div>
</body>
</html>