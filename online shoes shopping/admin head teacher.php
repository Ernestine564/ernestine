<?php
include ('welcome admin.php');
include ('connect.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM account_created ");

echo "<table border='1' bgcolor='#99cc00'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>School name</th>
<th>Username</th>
<th>Password</th>
<th colspan='3'>Manage</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['SchoolName'] . "</td>";
echo "<td>" . $row['UserName'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td>Update</td>";
echo "<td><a href='userDelete.php?id='". $row['id']."Delete</a></td>";
echo "<td>More</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>