<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];

?> 
<!DOCTYPE html> 
	<title> Viewing Requests </title> 
	<style>
      table {
        border-collapse: collapse;
      }
      table, th, td {
        border: 1px solid black;
      }
    </style>
	
<?php


	$config = parse_ini_file('/home/mahmed29/public_html/Final_Project/InternetProgrammingFinal/src/config.ini'); 
	
	$conn = MySQLi_Connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
	
	$sql = "SELECT Name, Email, Idea FROM Request";
	
	$result = $conn->query($sql);
		$result = $conn->query($sql);
      if ($result->num_rows > 0) {
        echo "<table><tr><th>Name</th><th>Email</th><th>Idea</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Idea"]."</td></tr>";
      }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close(); 
		
		?>
		
	
	
	
	
	

</html> 