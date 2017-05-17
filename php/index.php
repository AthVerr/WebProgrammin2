<?php

  session_start();


   if( isset($_SESSION['login'])  == true )
	{

	$myUser = $_SESSION['myUser'];
	$user = $_SESSION['user'];
	$active_account = $_SESSION['active_account'];
	$Name = $_SESSION['Name'];
	$surname = $_SESSION['surname'];
	$Login = $_SESSION['login'];
	
        }
    else
	{
	$Login = false;
	$user = -1;
	}
	
	$errors = array();
	$values = array();
	
	
    if( isset($_GET['logout']) )
     {
	session_destroy();  /*destroys all of the data associated with the current session, session_start() has to be called.*/
	header('Location: /podylata/index.php');
     }


   else
	{
		
	if((isset($_POST['submit']))&&($_POST['submit'] == "Login") && ($_SERVER['REQUEST_METHOD'] == "POST")) 

 /*is used to collect values in a form with method="post".*/
	
{
     

			
	if( ( !empty($_POST['myUser']) ) && ( !empty($_POST['myPass']) ) )
	{
		require('Sindesi/Authedication.php');
		if($Login == true)
				{


                                     if( $_SESSION['user_student'] == 1 )
					{
						header('Location: admin/index.php');
					}
					else if( $_SESSION['user_student'] == 2 )
					{
						header('Location: kathigitis/index.php');
					}
					else if( $_SESSION['user_student'] == 3 )
					{
						header('Location: fotititis/index.php');
					}
                                  }                                



	}

	else
	{
		if( empty($_POST['myUser']) )
		{
		   $errors[1] = "it has to be completed";
		}
		if( empty($_POST['myPass']) )
		{
			$errors[2] = "it has to be completed";
		
		}	
			$value[0] = $_POST['myUser'];
			$value[1] = $_POST['myPass'];
		}		
	}
	}
//$_SESSION['login']=false;
	
?>



<div id="wrap">  

    <?php require_once('header/header!.php');?>

	<?php if(isset($errors[0])) echo $errors[0];?>
	
	
	<div id="loginform">

		<form method="POST" action="index.php">
 

		    <fieldset >
				<legend>Give your information </legend>
					
		
		
<p><label>Username: </label><input type="text" name="myUser"" value="<?php if(isset($value[0])) echo $value[0]; ?>"/>&nbsp<?php if(isset($errors[1])) echo $errors[1];?></p>
	
<p><label>Password:&nbsp </label><input type="password" name="myPass" "value="<?php if(isset($value[1])) echo $value[1]; ?>"/>&nbsp <?php if(isset($errors[2])) echo $errors[2];?></p>
				

<p><label>&nbsp;</label><input class="btn" type="submit" name="submit" value="Login" /></p>
			

                   </fieldset>
		</form>
</div>
    <div id="footer">
        <?php
        require_once("header/footer.php");
        ?>			
    </div>
	</div>
	
</div>
