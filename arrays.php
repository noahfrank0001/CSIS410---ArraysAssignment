<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Reports</title>
</head>
<body>
	<!-- This nav bar is for navigating between the home, about us, php configuration, and contact pages -->
	<nav class="nav-bar">
		<a href="index.html" class="nav-item">Home</a>
		<a href="aboutus.php" class="nav-item">About Us</a>
		<a href="configuration.php" class="nav-item">PHP Configuration</a>
		<a href="contactus.php" class="nav-item">Contact</a>
	</nav>
	<!-- This link bar is for navigating between the 8 assignments submitted throughout the course -->
	<div class="link-bar">
		<a href="foundations.php" class="nav-item">Module 1: Week 1 Foundations</a>
		<a href="variables.php" class="nav-item">Module 1: Week 1 Variables</a>
		<a href="forms.php" class="nav-item">Module 2: Week 2 Forms</a>
		<a href="arrays.php" class="nav-item">Module 3: Week 3 Arrays</a>
		<a href="sessions.php" class="nav-item">Module 4: Week 4 Sessions</a>
		<a href="cms_sessions.php" class="nav-item">Module 5: Week 5 CMS Sessions</a>
		<a href="database.php" class="nav-item">Module 6: Week 6 Database</a>
		<a href="cms_database.php" class="nav-item">Module 8: Week 8 CMS Database</a>
	</div>
	<br>
	<h1>Update Employee Information</h1>
	<br>

	<form method="post" action="" id="form1">
		<!-- The user selects the employee who's information they wish to update -->
		<label for="selectEmployees">Select an Employee: </label>
		<select name="selectEmployees" id="selectEmployees">
			<option value="jamessmith.php">James Smith</option>
			<option value="angelakennedy.php">Angela Kennedy</option>
			<option value="hannahcruise.php">Hannah Cruise</option>
		</select><br><br>

		<!-- The user then inputs the new information for the employee -->
		<label for="position">Position: </label>
		<input type="text" name="position" required><br><br>
		<label for="degree">Degree: </label>
		<input type="text" name="degree" required><br><br>
		<label for="school">School: </label>
		<input type="text" name="school" required><br><br>
		<label for="favoriteColor">Favorite Color: </label>
		<input type="text" name="favoriteColor" required><br><br>

		<br><br>
		<!-- This uses the submitAction() JavaScript function, which is defined below the form -->
		<input type="submit" value="Submit" onclick="submitAction()">
		<br><br>
	</form>

	<!-- The function in this script is used by the Submit button -->
	<script type="text/javascript">
		function submitAction()
		{
			// This singles out the drop-down menu
			var x = document.getElementById("selectEmployees");
			// This stores the value of the users input from the drop down menu. For intance, if a user selects "James Smith" from the dropdown, this will be "jamessmith.php"
			var actionOfForm = x.value;
			// This sets the action of the form to the value of actionOfForm, which is the user's selection from the drop down menu
			document.getElementById("form1").action = actionOfForm;
		}
	</script>
	

	<br>
	<footer id="footer">
		<!-- This shows when the page was last modified -->
		<?php echo "Page last changed: ".date("F d Y H:i:s.", filemtime("changelog.txt")); ?>
		<!-- This displays the validation icons for the webpage -->
		<div>
			<img src="https://www.w3.org/Icons/valid-html401-blue">
			<img src="https://www.w3.org/Icons/valid-css-blue">
		</div>
	</footer>
</body>
</html>