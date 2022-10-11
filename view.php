<?php

	$con = mysqli_connect('localhost', 'root');
	mysqli_select_db($con, 'mydatabase');
	$q = "select * from materiel";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	mysqli_close($con);

?>


<!DOCTYPE html>
<html>

<head>
	<title>View Materials</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>

<body>
	<div class="all">
		<div class="a">
			<img src="photo.jpg">
		</div>

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
			for ($i = 1; $i <= $num; $i++) {

				$row = mysqli_fetch_array($result);

			?>


				<tr>
					<td> <?php echo $row['ID'];  ?> </td>
					<td> <?php echo $row['Nom'];  ?> </td>
					<td> <?php echo $row['Type'];  ?> </td>
					<td> <?php echo $row['Modele'];  ?> </td>
					<td> <?php echo $row['Numero'];  ?> </td>
					<td> <?php echo $row['Contrat'];  ?> </td>
					<td> <?php echo $row['Acquisition'];  ?> </td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>

	<ul>
		<li class="home"><a href="home.html">HOME</a></li>
	</ul>
</body>

</html>