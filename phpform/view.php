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
			$sql = "select first_name,
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
			</tr>
	<?php
			while ($row = mysql_fetch_assoc($result)) {
	?>
		
			<tr class="alt">
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
			</tr>
	<?php		
			}
	?>	
			</table>
</center>