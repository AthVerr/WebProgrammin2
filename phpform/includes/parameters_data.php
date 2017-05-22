<?php
				$sql = "SELECT f_year,
						       semester_type,
							   semester_type_evaluation,
							   f_year_evaluation,
							   evaluation_status,
							   training_objectives_status,
							   matter_status
						from parameters_general";
              
				$result = mysql_query($sql) or die(header("Location: error.php?msg=dat_er")); 
				$num = mysql_num_rows($result);
				if ( $num != 0 ) {
						$temp = mysql_fetch_array($result);
						$f_year = $temp['f_year'];
						$semester_type = $temp['semester_type'];
						$evaluation_status = $temp['evaluation_status'];
						$matter_status = $temp['matter_status'];
						$training_objectives_status = $temp['training_objectives_status'];
						$f_year_admin = $temp['f_year_evaluation'];
						$semester_type_admin = $temp['semester_type_evaluation'];
				}
				else
				{
				echo "problem";
				}

?>