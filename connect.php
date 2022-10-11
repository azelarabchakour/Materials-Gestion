<?php
$username=$_POST['nom'];
$password=$_POST['mdp'];

$con=mysqli_connect('localhost', 'root'	);
mysqli_select_db($con,'mydatabase');

$result=mysql_query("select * from login where nom='$username' and pass='$password'")
	or die("failed to query database" .mysql_error());

$row= mysql_fetch_array($result);

if ($row[username] == $username && $row['password'] == $password) {
	
	echo "success";
	}	else{
		echo"failed !!!";
	}

  ?>