<?php

session_start();

require('../Sindesi/conection.php');


//diaxeirisi xreistwn

	
	
if(isset($_POST['insert_data']) && ($_POST['insert_data']=="Insert data"))
	
        {
		$student_user_id = $_POST['student_user_id'];
		$student_user_user_id = $_POST['student_user_user_id'];
		$student_user_active_account = $_POST['student_user_active_account'];
		$student_user_Name = $_POST['student_user_Name'];
		$student_user_surname = $_POST['student_user_surname'];
                $student_user_birthdate = $_POST['student_user_birthdate'];
		$student_user_email = $_POST['student_user_email'];
	}

else if(isset($_POST['update_data']) && $_POST['update_data']=="Update Data")
	
        {
		$student_user_id = $_POST['student_user_id'];
		$student_user_user_id = $_POST['student_user_user_id'];
		$student_user_active_account = $_POST['student_user_active_account'];
		$student_user_Name = $_POST['student_user_Name'];
		$student_user_surname = $_POST['student_user_surname'];
                $student_user_birthdate = $_POST['student_user_birthdate'];
		$student_user_email = $_POST['student_user_email'];
		
	}

else(isset($_POST['delete_data']) && ($_POST['delete_data']=="Delete Data"))
	
       
		$student_user_id = $_POST['student_user_id'];
		
		
       




//diaxeirisi mathimatwn

 if(isset($_POST['insert_data']) && ($_POST['insert_data']=="Insert data"))
	
        {
		$lesson_id = $_POST['lesson_id'];
		$lesson_secretariat = $_POST['lesson_secretariat'];
		$lesson_title = $_POST['lesson_title'];
		$lesson_professor = $_POST['lesson_professor'];
	        $lesson_ECTS = $_POST['lesson_ECTS'];
		$lesson_semester = $_POST['lesson_semester'];		
		$lesson_start_date = $_POST['lesson_start_date'];
		$lesson_end_date = $_POST['lesson_end_date'];


        }

else if(isset($_POST['update_data']) && $_POST['update_data']=="Update Data")
	
        {
		$lesson_id = $_POST['lesson_id'];
		$lesson_secretariat = $_POST['lesson_secretariat'];
		$lesson_title = $_POST['lesson_title'];
		$lesson_professor = $_POST['lesson_professor'];
	        $lesson_ECTS = $_POST['lesson_ECTS'];
		$lesson_semester = $_POST['lesson_semester'];		
		$lesson_start_date = $_POST['lesson_start_date'];
		$lesson_end_date = $_POST['lesson_end_date'];
		
		
		
	}


else(isset($_POST['delete_data']) && ($_POST['delete_data']=="Delete Data"))
	
        {
		$le_id = $_POST['le_id'];
		
		
	}
?>


//vevaiwsi apo tin grammatia


<div id="wrap"> 

<p>Vevewsi apo tin grammatia tou tmimatos podilatwn oti o foitits

<?php echo $_POST['st_id']?>

spoudazei sto tmima gia to ejamino <?php echo $_POST['semester']?>

’–œ√—¡÷«

</p>