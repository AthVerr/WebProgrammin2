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
			$first_name = "";
			$last_name = "";
			$email = "";
			$address = "";
	?>
	
	<?php
		if ( isset($_POST['submit']) && $_POST['submit'] == "Insert") {
			//get new values to insert
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
								$sql = "insert into users
													(first_name,
													 last_name,
													 email,
													 address
													)
													values
													('$first_name',
													 '$last_name',
													 '$email',
													 '$address'
													)";

								  $result = mysql_query($sql) or die(header("Location: error.php?msg=dat_er")); 
								  if ($result) {     
												mysql_query("COMMIT");
												echo "<font color=\"#3300FF\"><strong><br>Η εισαγωγή ολοκληρώθηκε με επιτυχία!!!<br></strong>";
											  }
								  else {
												mysql_query("ROLLBACK");
												echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω προβλήματος!!!<br></strong></font>";
											  }
			}
		}
	?>
	
				<br>	
				<form name="contactform" method="post" action="insert.php">
						
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
								</tr>
								</tr>
								<tr>
									<td valign="top" align="right"></td>
									<td align=left><input type="submit" name="submit" value="Insert"></td>
								</tr>
						</table>
						
				</form>

</center>