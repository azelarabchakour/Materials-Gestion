<?php 

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'mydatabase');
$q= "select * from materiel";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Materials</title>
	<link rel="stylesheet" type="text/css" href="css3.css">
</head>
<body>
	<form action="updation.php" method="POST">
		<img src="photo.jpg">
	<table class="view">
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>Type</th>
			<th>Modele</th>
			<th>Numero</th>
			<th>Contrat</th>
			<th>Date D'acquisition</th>
		</tr>

		 <?php 
		 for ($i=1; $i<=$num ; $i++) { 

		 	$row=mysqli_fetch_array($result);

		 ?>
		 

		 <tr>
		 	<td> <?php echo $row['ID'];  ?><input type="hidden" name="ID<?php echo $i; ?>" value="<?php echo $row['ID'];  ?>"> </td>
		 	<td> <input type="text" name="Nom<?php echo $i; ?>" value="<?php echo $row['Nom'];  ?>"> </td>
		 	<td> <input type="text" name="Type<?php echo $i; ?>" value="<?php echo $row['Type'];  ?>"> </td>
		 	<td> <input type="text" name="Modele<?php echo $i; ?>" value="<?php echo $row['Modele'];  ?>"> </td>
		 	<td> <input type="text" name="Numero<?php echo $i; ?>" value="<?php echo $row['Numero'];  ?>"> </td>
		 	<td> <input type="text" name="Contrat<?php echo $i; ?>" value="<?php echo $row['Contrat'];  ?>"> </td>
		 	<td> <input type="text" name="Date<?php echo $i; ?>" value="<?php echo $row['Acquisition'];  ?>"> </td>
		 </tr>	
		 <?php  
		 }
		?> 
	</table>
	<input class="b" type="submit" value="Update">
	</form>
	<ul>
	<li class="home"><a href="home.html">HOME</a></li>
</ul>
</body>
</html>