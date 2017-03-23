<?php 

	require("controller.php");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1>Hi there</h1>

 	<?php

 		 echo (sayHi());

 		 if(shower()){
 		 	echo "<b> You have to shower </b>";
 		 }else{
 		 	echo "<i> You don't have to shower today</i>";
 		 }

 	?>

 	<h3>List</h3>
 	<ul>
	 	<?php foreach (getInstructorsNames() as $name) {
	 		echo "<li>" . $name . "</li>";
	 	} ?>
 	</ul>
 	<h3>Table</h3>
 	<table border=1>
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Names</th>
 			</tr>
 		</thead>
 		<tbody>
 			
 				<?php
 					foreach (getInstructorsNames() as $key => $name) {
 						echo "<tr>
 								<td>" . ($key+1) . "</td>
 								<td>" . $name . "</td>
  							</tr>";
 					}
 				?>
 				 
 			

 		</tbody>
 	</table>


 </body>
 </html>