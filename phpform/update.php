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
		//define the variables
			$user_id = "";
			$first_name = "";
			$last_name = "";
			$email = "";
			$address = "";
	?>
	
	<?php
			//------------------update xristi----------------------------
				if ((isset($_GET['user_id'])) && ($_GET['status']=='update')) {
				$user_id=$_GET['user_id'];
				
				$sql = "select user_id,
								first_name,
								last_name,
								email,
								address
						from users where user_id = '$user_id'";				
				$result = mysql_query($sql) or die(header("Location: error.php?msg=dat_er"));
				
				$row = mysql_fetch_assoc($result);
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$email = $row['email'];
				$address = $row['address'];
			}
	?>
	
	<?php
			//------------------update xristi----------------------------
				if ( isset($_POST['submit']) && $_POST['submit'] == "update1") {
				$user_id=$_POST['user_id'];
				
				$sql = "select user_id,
								first_name,
								last_name,
								email,
								address
						from users where user_id = '$user_id'";				
				$result = mysql_query($sql) or die(header("Location: error.php?msg=dat_er"));
				
				$row = mysql_fetch_assoc($result);
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$email = $row['email'];
				$address = $row['address'];
			}
	?>	
	
	<?php
		if ( isset($_POST['submit']) && $_POST['submit'] == "Update") {
			//get new values to insert
			$user_id = $_POST['user_id'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			
			$error = 0;
			
			//check first_name
			if ($first_name == "") {
			echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το Όνομα!<br></font>";
			$error = 1;
			}

			//check last_name
			if ($last_name == "") {
			echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το επώνυμο!<br></font>";
			$error = 1;
			}
			
			//check address
			if ($address == "") {
			echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε την διεύθυνση!<br></font>";
			$error = 1;
			}
			
			if ($error) {
						echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω λαθών στα στοιχεία εισόδου!!!<br></strong></font>";
			}
			else { 
						//kane eisagogi tis times stin vasi
										
								mysql_query("START TRANSACTION");
								$sql = "update users set
													first_name = '$first_name',
													last_name = '$last_name',
													email = '$email',
													address = '$address'
										where user_id = '$user_id'";

								  $result = mysql_query($sql) or die(header("Location: error.php?msg=dat_er")); 
								  if ($result) {     
												mysql_query("COMMIT");
												echo "<font color=\"#3300FF\"><strong><br>Η επεξεργασία ολοκληρώθηκε με επιτυχία!!!<br></strong>";
											  }
								  else {
												mysql_query("ROLLBACK");
												echo "<font color=\"#FF0000\"><strong><br>Η επεξεργασία δεν ολοκληρώθηκε λόγω προβλήματος!!!<br></strong></font>";
											  }
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
								<th>Update</th>
								</tr>
						<?php
								while ($row = mysql_fetch_assoc($result)) {
						?>
							
								<tr class="alt">
								<td><?php echo $row['first_name']; ?></td>
								<td><?php echo $row['last_name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td valign="center" align="center">
								<form name="updateform" method="post" action="update.php">
								<input type="hidden" name="status" value="update">
								<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
								<BUTTON TYPE="submit" name="submit" value="update1" CLASS="image1"></BUTTON>
								</form>
								</tr>
						<?php		
								}
						?>	
								</table>
	
	
				<br>	
				<form name="contactform" method="post" action="update.php">
						
						<table width="50%" class=form>
								<tr>
									<td class=form_subheader>Όνομα: *</td>
									<td><input type="text" name="first_name" maxlength="50" size="30" value=<?php echo $first_name ?>></td>
								</tr>
								<tr>
									<td class=form_subheader>Επώνυμο: *</td>
									<td><input type="text" name="last_name" maxlength="50" size="30" value=<?php echo $last_name ?>> </td>
								</tr>
								<tr>
									<td class=form_subheader>Email: </td>
									<td><input type="text" name="email" maxlength="80" size="30" value=<?php echo $email ?>></td>
								</tr>
								<tr>
									<td class=form_subheader>Διεύθυνση: *</td>
									<td><input type="text" name="address" maxlength="30" size="30" value=<?php echo $address ?>></td>
									<input type="hidden" name="user_id" value=<?php echo $user_id ?>>
								</tr>
								</tr>
								<tr>
									<td valign="top" align="right"></td>
									<td align=left><input type="submit" name="submit" value="Update"></td>
								</tr>
						</table>
						
				</form>

</center>