<!DOCTYPE html>
<html>
<head>
	<title>all users of records</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/crudstyle.css">
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:white"><center><strong>All users of records</strong></center></span>	
		<span class="pull-left"><a class="button" href="add.php"><i class="fa fa-plus"></i> Add user</a></span>
		<div style="height:50px;"></div>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Action</th>
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
							<a href="edit.php?id=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a> || 
							<a href="delete.php?id=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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