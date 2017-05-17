<?php
  require('../Sindesi/conection.php');
  
   $lessons_id = array();
	
   $lessons_list = "select * from lessons 
   where lessons.professor='".$_SESSION['myUser']."'";
	

   if( !( $effects = mysql_query($lessons_list) ) )
    {
      die(mysql_error());
    }
   else
   {
	while( $row = mysql_fetch_array($effects) )
         {
	   $lessons_list[$row['id']] = $row['title'];
         }
   }



	
	
$student_id = array();
	

$student_list = "select student_user.id,Name,surname from student_user ."'";
	
  if( !( $effects = mysql_query($student_list) ) )
    {
	die(mysql_error());
    }
   else
    {
	while( $row = mysql_fetch_array($effects) )
	  {
		$student_id[$row['id']] = $row['Name']." ".$row['surname'];
	  }
     }
?>