<!DOCTYPE HTML>
<html>
<head>
<h1>Registration</h1>
</head>
<body>

	<form action="testrecord.php" method="post">
		First Name: <input type="text" name="First_Name"><br>
		Last Name: <input type="text" name="Last_Name"><br>
		Email: <input type="varchar" name="Email"><br>
		Date of Birth: <input type="varchar" name="Date_of_Birth"><br>
		Mobile: <input type="INTERGER" name="Mobile"><br>
		Designation: <input type="text" name="Designation"><br>
		Gender: <input type="radio" id="male" name="Gender" value="male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="Gender" value="female">
				<label for="female">Female</label>
				<input type="radio" id="other" name="Gender" value="other">
				<label for="other">Other</label><br>
				
		Hobbies:<input type="checkbox" id="a" name="Hobbies" value="hobbie">
				<label for="a">Playing games</label>
				<input type="checkbox" id="b" name="Hobbies" value="hobbie">
				<label for="b">Reading books</label>
				<input type="checkbox" id="c" name="Hobbies" value="hobbie">
				<label for="c">Adventure</label>
				<input type="checkbox" id="d" name="Hobbies" value="hobbie">
				<label for="c">Listening Music</label><br>
		<input type="submit" name="save" value="submit">
	</form>

</body>
</html>