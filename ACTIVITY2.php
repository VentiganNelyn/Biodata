<!DOCTYPE html>
<html>
<head>
	<title>NelynAia</title>
</head>
<body style="background-color: aqua; margin-left: 30px; font-family: sans-serif;">


		<?php
if(isset($_POST['submit'])){

echo "Name:".$_POST["name"]."<br>";

echo "Present Address:".$_POST["present"]."<br>";

echo "Permanent Address:".$_POST["permanent"]."<br>";

echo "Date of Birth:".$_POST["birth"]."<br>";

echo "Civil Status:".$_POST["status"]."<br>";

echo "Citizenship:".$_POST["citizen"]."<br>";

echo "Place of Birth:".$_POST["place"]."<br>";

echo "Name of Father:".$_POST["father"]."<br>";

echo "Name of Mother:".$_POST["mother"]."<br>";

echo "Address:".$_POST["add"]."<br>";

echo "Language or Dialects Spoken:".$_POST["spoken"]."<br>";

echo "Person to be notified In Case of Emergency:".$_POST["person"]."<br>";

echo "Religion:".$_POST["religion"]."<br>";

echo "Age:".$_POST["age"]."<br>";

echo "Weight:".$_POST["weight"]."<br>";

echo "Height:".$_POST["height"]."<br>";




//Educational Background

echo "Elementary:".$_POST["elem"]."<br>";
echo "Year Graduated:".$_POST["ele"]."<br>";

echo "High School:".$_POST["high"]."<br>";
echo "Year Graduated:".$_POST["hig"]."<br>";

echo "College:".$_POST["college"]."<br>";
echo "Year Graduated:".$_POST["col"]."<br>";

echo "Course:".$_POST["course"]."<br>";
echo "Special Skills:".$_POST["skills"]."<br><br>";

}
?>




	<table style="font-size: 20px; font-family: roboto;">
	<h2 style="text-align:center;color: yellow; background-color: black;font-family: roboto">.................................................................................................. 													BIODATA ..................................................................................................</h2> <br>

	<form action="ACTIVITY2.php" method="POST">
	
			<tr>
				<td>
					Name:			&nbsp;&nbsp;&nbsp;
				</td>
				<td> <input type="text" placeholder size="50" name="name"></td>
				<tr>
					<td>
						Present Address:
					</td>
					<td> <input type="text" placeholder size="50" name="present"></td>
				</tr>
				<tr>
					<td>
						Permanent Address:
					</td>

					<td><input type="text" placeholder size="50"name="permanent"></td>
					</tr>
					<tr>
						<td>
						Date of Birth:
					</td>
					<td><input type="text" placeholder size="50"name="birth"></td>

					<td>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Religion:</td>
					<td><input type="text" name="religion"></td>
			</tr>
			<tr>
						<td>
						Civil Status:
					</td>
					<td><input type="text" placeholder size="50"name="status"></td>
					<td>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Age:</td>
					<td><input type="number" name="age"></td>
			</tr>
			<tr>
						<td>
						Citizenship:
					</td>
					<td><input type="text" placeholder size="50"name="citizen"></td>
					<td>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Weight:</td>
					<td><input type="number" name="weight"></td>
			</tr>
			<tr>
						<td>
						Place of Birth:
					</td>
					<td><input type="text" placeholder size="50"name="place"></td>
					<td>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Height:</td>
					<td><input type="number" name="height"></td>
			</tr>
			<tr>
						<td>
						Name of Father:
					</td>
					<td><input type="text" placeholder size="50"name="father"></td>
			</tr>
			<tr>
						<td>
						Name of Mother:
					</td>
					<td><input type="text" placeholder size="50"name="mother"></td>
			</tr>
			<tr>
						<td>
						Address:
					</td>
					<td><input type="text" placeholder size="50"name="add"></td>
			</tr>
			<tr>
						<td>
						Language or Dialects Spoken:
					</td>
					<td><input type="text" placeholder size="50"name="spoken"></td>
			</tr>
			<tr>
						<td>
						Person to be notified In Case of Emergency:
					</td>
					<td><input type="text" placeholder size="50"name="person"></td>
			</tr>
</table><br>

<center>
		<h3 style="text-align:center;color: yellow; background-color: black;font-family: roboto">.........................................................................................EDUCATIONAL BACKGROUND......................................................................................</h3>
</center>
<br>
<table style="margin-left: 250px;font-size: 20px; font-family:roboto;">

		<tr>
			<td>Elementary:</td>
			<td><input type="text"  placeholder size="30" name="elem"></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year Graduated:</td>
			<td><input type="number" placeholder size="30" name="ele"></td>
		
		</tr>

			<tr>
			<td>HighSchool:</td>
			<td><input type="text" placeholder size="30" name="high"></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year Graduated:</td>
			<td><input type="number" placeholder size="30" name="hig"></td>
		</tr>
	
		<tr>
			<td>College:</td>
			<td><input type="text" placeholder size="30" name="college"></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year Graduated:</td>
			<td><input type="number" placeholder size="30" name="col"></td>
		</tr>
		
		<tr>
			<td>Course:</td>
			<td><input type="text" placeholder size="30" name="course"></td>
		</tr>
	
		<tr>
			<td>Special Skills:</td>
			<td><input type="text" placeholder size="30" name="skills"></td>
		</tr>	
</table>
<h3 style="text-align:center;color: yellow; background-color: black;">
.............................................................................................................................................................................................................................................................................................</h3>
<br><br>

			<button style="margin-left: 620px; background-color: yellow; padding: 10px; border-radius: 10px;">
			<input type="submit" name="submit">
		
</form>

</body>
</html>
