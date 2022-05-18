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
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','root','','suai-web');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

print($q);

$sql="SELECT * FROM neural_network WHERE name LIKE '%".$q."%'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>name</th>
<th>year</th>
<th>author_first_name</th>
<th>author_last_name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" . $row['author_first_name'] . "</td>";
  echo "<td>" . $row['author_last_name'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>