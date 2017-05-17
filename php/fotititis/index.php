<?php

session_start();
require('../Sindesi/conection.php');

 $query_retrieve_data = "select epitixoi_mathimata.le_id, lessons.title,students_lessons.declaration_date, students_lessons.exams_date, students_lessons.passed, students_lessons.grade  from students_lessons, lessons 
where  epitixoi_mathimata.le_id = lessons.id and epitixoi_mathimata.st_id='".$_SESSION['myUser']."'" ;
	
	
$effects = mysql_query($query_retrieve_data);
	
	echo "<table>";

	echo "<tr><th>lesson_code</th> <th>Title</th><th>declaration_date</th><th>Exam_date</th><th>Success</th><th>Gradation</th></tr>";
		
		
   while($row=mysql_fetch_array($effects))
	{
		
	 echo '<td align="center"><input name="Lesson_code" value="'.$row['le_id'].'" readonly="readonly"/></td>';
         echo '<td align="center"><input name="Title" value="'.$row['title'].'" readonly="readonly"/></td>';
         echo '<td align="center"><input name="Declaration_date" value="'.$row['declaration_date'].'" readonly="readonly"/></td>';
         echo '<td align="center"><input name="Exams_date" value="'.$row['exams_date'].'" readonly="readonly"/></td>';
         echo '<td align="center"><input name="Passed" value="'.$row['passed'].'" readonly="readonly"/></td>';
         echo '<td align="center"><input name="Gradation" value="'.$row['grade'].'" readonly="readonly"/></td>';
         
	}
	
	
	

//upload fwtografias

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
    {
        echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
        " has been uploaded";
    } 

else{
    echo "There was an error uploading the file, please try again!";
    }


?>