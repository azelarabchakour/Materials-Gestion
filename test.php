<?php

$con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'mydatabase');

$q="delete from materiel where ID="b1;
 		mysqli_query($con,$q);


mysqli_close($con);
?>