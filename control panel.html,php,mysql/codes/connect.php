<?php 
//PHP Code goes here 

//connect to database--conned the whole databassees not just the table!
$conn = mysqli_connect('localhost', 'root', '', 'control');

//check connection
if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}


if (isset($_POST['backward'])){
	echo "<p align=center>backward</p> ";
	mysqli_query($conn,"INSERT INTO`control panel` SET `Backward` = '-y'");
}

if (isset($_POST['forward'])){
	echo "<p align=center>forward</p> ";
	mysqli_query($conn,"INSERT `control panel` SET `Farward` = '+y'");
}

if (isset($_POST['right'])){
	echo "<p align=center>right</p> ";
	mysqli_query($conn,"INSERT `control panel` SET `Right` = '+x'");
}

if (isset($_POST['left'])){
	echo "<p align=center>left</p> ";
	mysqli_query($conn,"INSERT `control panel` SET `Left` = '-x'");
}
if (isset($_POST['stop'])){
	echo "<p align=center>stop</p> ";
	mysqli_query($conn,"INSERT `control panel` SET `Stop` = 'zero'");
}



?>
<!DOCTYPE HTML>

<html>
<head></head>

<body style= "background-color:pink";>
<center>
<form>
  <input type="button" value="Go back!" onclick="history.back()">
</form>
</center>
</body>



</html>