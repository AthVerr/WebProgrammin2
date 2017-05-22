<center>
	
	<?php
		include ("database.php");
	?>
	<?php
		include ("includes/header.php");
	?>
	<?php
		include ("includes/menu.php");
	?>

	
	<?php
			//------------------delete xristi----------------------------
				if ((isset($_GET['user_id'])) && ($_GET['status']=='delete')) {
				$user_id=$_GET['user_id'];
				mysql_query("START TRANSACTION");
				$sql = "delete FROM users
									WHERE
						user_id = '$user_id'";
										  
				$result = mysql_query($sql) or $msg[]="dat_er";
				if ($result) {
					mysql_query("COMMIT");
					echo "<font color=\"#3300FF\"><strong><br>Η διαγραφή του χρήστη ολοκληρώθηκε με επιτυχία!!!<br></strong>";
				}
				else {
					mysql_query("ROLLBACK");
				}
			}
	?>
	
	
	
	<?php
			$sql = "select user_id,
							first_name,
							last_name,
							email,
							address
					from users";
			
			$result = mysql_query($sql) or die(header("Location: error.php?msg=dat_er"));
	
	?>
            <br>
			<table class="view">
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Delete</th>
			</tr>
	<?php
			while ($row = mysql_fetch_assoc($result)) {
	?>
		
			<tr class="alt">
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td align="center"><a onClick="return confirm('Είσαι σίγουρος ότι θες να διαγράψεις τον χρήστη <?php echo $row['first_name']." ".$row['last_name']; ?> ?')" href="delete.php?status=delete&user_id=<?php echo $row['user_id']; ?>"><img src="icons/delete.png"></a></td>
			</tr>
	<?php		
			}
	?>	
			</table>
</center>