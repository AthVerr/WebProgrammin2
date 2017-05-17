<div id="header">
    
	<title>Department_of_Bicycle_Design_Engineering <?php if(isset($_SESSION['your_name']) && isset($_SESSION['login']) && $_SESSION['login'] == true) echo ': '.$_SESSION['your_name']; ?></title>

	<div>
		<table class="headerTable">
			<tr>
				<td>
					<img src="university-cycles-logog.jpg" ALIGN="LEFT" width="50" height="50"/>
				</td>
				<td class=title>
					<font class=university>Department_of_Bicycle_Design_Engineering</font><br/>
					
				</td>
				<td>
					<?php if(isset($_SESSION['logn']) && $_SESSION['login'] == true) echo "<a href=\"/Department_of_Bicycle_Design_Engineering/index.php?logout\">Logout</a>"; ?>
				</td>
			</tr>
		</table>
	</div>
</div>

