 <?php
$servername = "localhost";
$username = "jc325";
$password = "password";
$dbname = "dagobah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM `ccdb_xls`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   // output data of each row
  
	
	while($row = $result->fetch_assoc()) {
    echo "Last_Name_Grantor_1: " . $row["Last_Name_Grantor_1"]. " First_Name_Grantor_1: " . $row["First_Name_Grantor_1"]." Last_Name_Grantee_1: " . $row["Last_Name_Grantee_1"]. "<br>";
    }
} else {
  echo "0 results";
}

?> 