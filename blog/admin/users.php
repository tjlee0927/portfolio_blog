<?php require_once("../includes/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/clean-blog.min.css">
	<link rel="stylesheet" href="css/style.css">

	<title></title>
</head>

<body>
	
	<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//display message from add/ edit page
	if(isset($_GET['action'])) {
		echo '<h3> User ' .$_GET['action']. '.</h3>';
	};
	?>

	<table>
	  <tr>
	  	<th>Username</th>
	  	<th>Email</th>
	  	<th>Action</th>
	  </tr>

<?php
		try {

			$stmt = $db->query('SELECT memberID, username, email FROM blog_members ORDER BY username');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['username'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				?>

				<td>
					<a href="edit_user.php?id=<?php echo $row['memberID'];?>">Edit</a> 
					<?php if($row['memberID'] != 1){?>
						| <a href="javascript:deluser('<?php echo $row['memberID'];?>','<?php echo $row['username'];?>')">Delete</a>
					<?php } ?>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>

		<p><a href="add_user.php">Add User</a></p>
	</div>

</body>
</html>