<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/adminlogin.css">
	<?php include_once("header1.php") ?>

</head>

<body class="body">


	<center>

		<div class="container"><br><br>

			<img src="Images/avtar.png" class="avatar">

			<h1> Admin Login </h1><br>

			<form class="Login" method="POST" action="adminProcess.php"><br>

				<label for="uname" class="text"><b>Username</b></label><br>
				<input type="text" placeholder="Enter Username" class="textbox" id="name" name="adminUserName" required><br><br>

				<label for="psw" class="text"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" class="textbox" name="adminPassword" required><br><br>

				<button type="submit" class="button5" name="admin_login">Log in</button>

		</div>



	</center><br>

	<?php include_once("footer.php") ?>