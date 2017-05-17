<?php
   require_once('Sindesi/conection.php');

    if( isset($myUser) && isset($myPass) )
    {
	$Authendication = " select id, password, user_id, active_account, Name, surname from student_user
                            where id='".$myUser."' and password='".md5($myPass)."' ";

	/*xrisi md5 gia ton prosdiorismo tou kwdikou*/	

        $effects = mysql_query($Authendication);

//execute the SQL query and return records
       
        $numRows = mysql_num_rows($effects); 
		
	  if( $numRows == 1)
	   {
		$effects = mysql_fetch_array(mysql_query($Authendication))
                        or die(mysql_error());   /*Returns the error text from the last MySQL function*/
			
			$_SESSION['myUser'] = $effects['id'];
			$_SESSION['user'] = $effects['user_id'];
			$_SESSION['active_account'] = $effects['active_account'];
			$_SESSION['Name'] = $effects['Name'];
			$_SESSION['surname'] = $effects['surname'];
			$_SESSION['login'] = true;
			
			$myUser = $_SESSION['myUser'];
			$user = $_SESSION['user'];
			$active_account = $_SESSION['active_account'];
			$Name = $_SESSION['Name'];
			$surname = $_SESSION['surname'];
			$Login = $_SESSION['login'];
	    }

	    else
		{
			$errors[0] = "you have no access";
		}
      }
	
?>