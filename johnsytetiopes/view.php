<!DOCTYPE html>
<html>
<head>
	<title>all users of records</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>All users of records</strong></center></span>	
		<span class="pull-left"><a class="btn btn-info" href="add.php"><i class="glyphicon glyphicon-plus"></i> Add user</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
			</thead>
			<tbody>
			<?php
				include('config.php');
				
				$query=mysqli_query($conn,"SELECT * FROM `users`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo ucwords($row['id']); ?></td>
						<td><?php echo ucwords($row['name']); ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="delete.php?id=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>