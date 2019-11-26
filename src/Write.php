<?php 
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Idea = $_POST['Idea']; 
$documemt_root = __DIR__; 

?>
<!DOCTYPE html>
  <head>
   <title>Mushmak's Final Project - Request Form</title>
  </head>
  	<h1> Thanks for sending in your idea. </h1>

 <?php


	$config = parse_ini_file('/home/mahmed29/public_html/Final_Project/InternetProgrammingFinal/src/config.ini'); 
	
	$conn = MySQLi_Connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	$sql = "INSERT INTO mahmed29.Request (Name, Email, Idea) 
	VALUES ('$Name', '$Email', '$Idea')"; 
	
	if (mysqli_query($conn, $sql)) {
		echo " record created" ; 
	}
	else 
	{
		echo " error" . $sql . "<br>" . mysqli_error($conn); 
	}
	mysqli_close($conn);
 ?>


</html>

