<?php

include_once("header1.php");

include_once("../website/Admin/config1.php");

//$regID = 44;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['update'])) {
		// Retrieve form data
		$uname = $_SESSION["uName"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
		// $reGID = // Retrieve the regID from the session

		// Update the data in the database
		$sql = "UPDATE register SET fname='$fname', lname='$lname', mail='$email', pw='$pwd' WHERE userName='$uname'";

		// Execute the query
		if (mysqli_query($__conn, $sql)) {
			echo "<script>alert('Profile Updated Successfully')</script>";
			echo "<script>window.location.href = 'userprofile.php';</script>";
		} else {
			echo "<script>alert('Error in updating profile')</script>";
		}
	}
}


?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/user.css">
</head>

<body class="body">
	<center>
		<div class="container"><br><br>
			<form class="Login1" action="" method="POST"><br>
				<h2>Account Information</h2><br>
				<label for="fname">First Name:</label>
				<input type="text" id="fname" name="fname" placeholder="Enter First Name" pattern="[A-Za-z\s]+" required><br><br>
				<label for="lname">Last Name:</label>
				<input type="text" id="lname" name="lname" placeholder="Enter Last Name" pattern="[A-Za-z\s]+" required><br><br>
				<div class="email">
					<label for="e">Email:</label>
					<input type="text" id="e" name="email" placeholder="Enter Email" required><br><br>
				</div>
				<label for="pwd">Password:</label>
				<input type="password" id="pwd" name="pwd" placeholder="Enter Password" required><br><br>
				<button type="submit" id="update" name="update" class="button5">Update Profile</button>
			</form>
		</div>
	</center>
	<?php include_once("footer.php") ?>
</body>

</html>