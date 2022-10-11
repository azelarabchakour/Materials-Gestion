<?php 
	$size=sizeof($_POST);
	$records=$size/7;

	for($i=1;$i<=$records;$i++)
	{
		$index1="ID".$i;
		$ID[$i]=$_POST[$index1];
		$index2="Nom".$i;
		$Nom[$i]=$_POST[$index2];
		$index3="Type".$i;
		$Type[$i]=$_POST[$index3];
		$index4="Modele".$i;
		$Modele[$i]=$_POST[$index4];
		$index5="Numero".$i;
		$Numero[$i]=$_POST[$index5];
		$index6="Contrat".$i;
		$Contrat[$i]=$_POST[$index6];
		$index7="Date".$i;
		$Date[$i]=$_POST[$index7];

	}

	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'Mydatabase');

	for($i=1;$i<=$records;$i++)
	{
	$q="update materiel SET Nom='$Nom[$i]', Type='$Type[$i]', Modele='$Modele[$i]', Numero='$Numero[$i]', Contrat='$Contrat[$i]', Acquisition='$Date[$i]' where ID=$ID[$i]";

	mysqli_query($con,$q);
	}
	mysqli_close($con);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>updation</title>
 	<link rel="stylesheet" type="text/css" href="css3.css">
 </head>
 <body>
 	<img src="photo.jpg">
 	<p>
 		<?php 
 			echo $size."Material updated ";

 		 ?>
 	</p>

 	 <ul>
  <li class="home"><a href="home.html">HOME</a></li>
</ul>
 </body>
 </html>