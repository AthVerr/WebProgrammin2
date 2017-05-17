<?php	

     $myServer = 'localhost'; 
     $myUser = 'root';
     $myPass = '';
     $mydb='Department_of_Bicycle_Design_Engineering';
	
	//connection to the database
		
     @mysql_connect($myServer, $myUser, $myPass) 

       or die('Something went wrong while connecting to MSSQL');
           
//select a database to work with

     @mysql_select_db($mydb) 
        or die("Couldn't open database $myDB");

?>