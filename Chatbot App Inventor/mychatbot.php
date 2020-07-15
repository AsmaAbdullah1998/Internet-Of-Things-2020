<?php



$connect = mysqli_connect("localhost", "root", "");
$dbs=mysqli_select_db($connect, 'chatbot');

//$meLabel2 = $_SESSION['meLabel2'] ?? '';
//$RobotLabel1 = $_SESSION['RobotLabel1'] ?? '';

//$meLabel2 = $_REQUEST["MeTextBox2"];
//$RobotLabel1 = $_GET["RobotTextBox1"];

//mysqli_query($connect, "INSERT INTO mychatbot(meLabel2, RobotLabel1) VALUES('$meLabel2', '$RobotLabel1')");

$meLabel2 = mysqli_real_escape_string($connect, $_GET['meLabel2']);
$RobotLabel1 = mysqli_real_escape_string($connect, $_GET['RobotLabel1']);

$query="INSERT INTO mychatbot (meLabel2, RobotLabel1) VALUES ('$meLabel2', '$RobotLabel1')";


$result = mysqli_query($connect, $query) or trigger_error("Query MySQL Error: ".mysqli_error($connect));


mysqli_close($connect);






?>

