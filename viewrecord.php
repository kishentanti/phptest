<?php
include_once 'testdb.php';
$result = mysqli_query($conn,"SELECT * FROM user_info");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> View Record</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <td>Date of birth</td>
	<td>Mobile</td>
	<td>Designation</td>
	<td>Gender</td>
	<td>Hobbies</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["First_Name"]; ?></td>
    <td><?php echo $row["Last_Name"]; ?></td>
    <td><?php echo $row["Email"]; ?></td>
    <td><?php echo $row["Date_of_Birth"]; ?></td>
	<td><?php echo $row["Mobile"]; ?></td>
	<td><?php echo $row["Designation"]; ?></td>
	<td><?php echo $row["Gender"]; ?></td>
	<td><?php echo $row["Hobbies"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>