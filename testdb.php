<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($localhost, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

/*$sql = "CREATE DATABASE testdb";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE user_info (
First_Name VARCHAR(30) NOT NULL,
Last_Name VARCHAR(30) NOT NULL,
Email VARCHAR(50),
Date_of_Birth DATE,
Mobile INT(10) NOT NULL,
Designation VARCHAR(20) NOT NULL,
Gender TEXT(10) NOT NULL,
Hobbies TEXT(20) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table testtable created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/
$conn->close();
?>
	
