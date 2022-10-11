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
	<title>Delete Materials</title>
	<link rel="stylesheet" type="text/css" href="css4.css">
</head>
<body>
	<form action="deletion.php" method="post">
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
			<th>Select</th>
		</tr>

		 <?php 
		 for ($i=1; $i<=$num ; $i++) { 

		 	$row=mysqli_fetch_array($result);

		 ?>
		 

		 <tr>
		 	<td> <?php echo $row['ID'];  ?> </td>
		 	<td> <?php echo $row['Nom'];  ?> </td>
		 	<td> <?php echo $row['Type'];  ?> </td>
		 	<td> <?php echo $row['Modele'];  ?> </td>
		 	<td> <?php echo $row['Numero'];  ?> </td>
		 	<td> <?php echo $row['Contrat'];  ?> </td>
		 	<td> <?php echo $row['Acquisition'];  ?> </td>
		 	<td> <input type="checkbox" value="<?php echo $row['ID']; ?>" name="b"<?php echo $i; ?> /> </td>
		 </tr>	
		 <?php  
		 }
		?> 

		
	</table>
	<input class="b" type="submit" value="Delete">
	</form>
<ul>
	<li class="home"><a href="home.html">HOME</a></li>
</ul>
</body>
</html>