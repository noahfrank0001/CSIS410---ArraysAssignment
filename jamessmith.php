<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>James Smith</title>
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
		<a href="" class="nav-item">Module 2: Week 2 Forms</a>
		<a href="" class="nav-item">Module 3: Week 3 Arrays</a>
		<a href="" class="nav-item">Module 4: Week 4 Sessions</a>
		<a href="" class="nav-item">Module 5: Week 5 CMS Sessions</a>
		<a href="" class="nav-item">Module 6: Week 6 Database</a>
		<a href="" class="nav-item">Module 8: Week 8 CMS Database</a>
	</div>

	<!-- Stores the variables necessary for the webpage -->
	<?php 
		$photo = "jamessmithimage.jpg";
		$name = "James Smith";
		$position = $_POST['position'];
		$degree = $_POST['degree'];
		$school = $_POST['school'];
		$favoritecolor = $_POST['favoriteColor'];
	?>

	<!-- Displays the employee's image -->
	<br> <img src="<?php echo $photo ?>" width="300"> <br>

	<!-- Displays employee information -->
	<?php 
		echo "<h2><b>$name</b></h2><br>";
		echo "$position <br>";
		echo "$degree from $school <br>";
		echo "Favorite Color: $favoritecolor";
	?>

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