<?php
include ('connect.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM registration ");

echo "<table border='1' bgcolor='#99cc00'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>Email</th>
<th>Location</th>
<th colspan='3'>Action</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>Update</td>";
echo "<td><a href='userDelete.php?id='". $row['id']."Delete</a></td>";
echo "<td>More</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>