<?php
include_once 'testdb.php';
if(isset($_POST['save']))
{	 
	 $First_Name =$_POST['First_Name'];
	 $Last_Name = $_POST['Last_Name'];
	 $Email = $_POST['Email'];
	 $Date_of_Birth = $_POST['Date_of_Birth'];
	 $Mobile = $_POST['Mobile'];
	 $Designation = $_POST['Designation'];
	 $Gender = $_POST['Gender'];
	 $Hobbies = $_POST['Hobbies'];
	 $sql = "INSERT INTO user_info (First_Name , Last_Name , Email , Date_of_Birth , Mobile , Designation , Gender , Hobbies)
	 VALUES ('$First_Name','$Last_Name','$Email','$Date_of_Birth','$Mobile','$Designation','$Gender','$Hobbies')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>