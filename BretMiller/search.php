<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$search = $_GET ['search'];

$servername = "localhost";
$username = "phplink";
$password = "phpsqllink";
$db = "landdeeds";
$table = "landdeeds";

$con = mysqli_connect($servername,$username,$password);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$db);
$sql="SELECT * FROM $table WHERE Last_Name_Grantor_1 LIKE '%$search%'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Date</th>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DATE'] . "</td>";
  echo "<td>" . $row['Last_Name_Grantor_1'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
  <a href='form.html'>Return</a>
</body>
</html> 
