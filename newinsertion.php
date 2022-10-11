<!DOCTYPE html>
 <html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css2.css">
 </head>
 <body>
  <img src="photo.jpg">
 <br> Vous voulez insérer Plus de matériels <a href="insertForm.php">ADD</a>

 <ul>
  <li class="home"><a href="home.html">HOME</a></li>
</ul>
 </body>
 </html>


<?php 

  $nom=filter_input(INPUT_POST, 'name');
  $type=filter_input(INPUT_POST, 'type');
  $modele=filter_input(INPUT_POST, 'modele');
  $NDS=filter_input(INPUT_POST, 'numero');
  $contrat=filter_input(INPUT_POST, 'contrat');
  $date=filter_input(INPUT_POST, 'date');



  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "Mydatabase";

  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO materiel (nom, type, modele, numero, contrat, acquisition) values ('$nom','$type','$modele',$NDS,'$contrat','$date')";}

  if ($conn->query($sql))
    echo "";
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
?>



