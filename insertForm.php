<!DOCTYPE html>
<html>
<head>
	<title>Insert Material</title>
	<link rel="stylesheet" type="text/css" href="css2.css">
</head>
<body>
	<form action="newinsertion.php" method="post">

		<img src="photo.jpg">
		<div class="form">
	<table>

		<tr>
			<td>Nom</td>
			<td><input type="text" name="name" required ></td>
		</tr>

		<tr>
			<td>Type</td>
			<td><input type="text" name="type" required ></td>
		</tr>

		<tr>
			<td>Modèle</td>
			<td><input type="text" name="modele" required></td>
		</tr>

		<tr>
			<td>Numéro de série</td>
			<td><input type="text" name="numero" required></td>
		</tr>

		<tr>
			<td>Contrat</td>
			<td><input type="text" name="contrat" required></td>
		</tr>

		<tr>
			<td>Date d'acquisition</td>
			<td><input type="text" name="date"></td>
		</tr>

		</table>

				<input class="b" type="submit" value="insérer">

	
	</div>

	</form>

<ul>
	<li class="home"><a href="home.html">HOME</a></li>
</ul>
</body>
</html>