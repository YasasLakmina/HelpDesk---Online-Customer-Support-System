<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" href="css/login.css">
	<script src="js/Login.js"></script>
	<?php include_once("header1.php") ?>

</head>

<body class="body">


	<center>

		<div class="container"><br><br>

			<img src="Images/avtar.png" class="avatar">

			<h1> Log in to Help Desk </h1><br>

			<form class="Login1" method="POST" action="Login1.php" id="loginForm" onsubmit="return validateForm()"><br>

				<label for="uname" class="text"><b>Username</b></label><br>
				<input type="text" class="textbox" placeholder="Enter Username" id="uname" name="uname" required><br><br>

				<label for="psw" class="text"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" class="textbox" id="psw" name="psw" required><br><br>

				<button type="submit" id="loginsubmit" name="loginsubmit" class="button5">Log in</button>

		</div>


		<div class="sign1" class="container"> <br>

			<span> New to HelpDesk? </span>

			<a href="register.php" class="a1">
				Create an account.</a><br><br>

		</div>
		</form>

		</div>

	</center><br>
</body>

</html>

<?php include_once("footer.php") ?>

<?php
if (isset($_GET['msg'])) {
	$alertMessage = $_GET['msg'];
	echo "<script>alert('$alertMessage');</script>";
}



?>

