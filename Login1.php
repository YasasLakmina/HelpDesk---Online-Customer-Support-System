<?php

session_start();
include_once("config.php");
?>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["loginsubmit"])) {


		// Validate the form data
		$username = $_POST['uname'];
		$password = $_POST['psw'];
	}
}


$sql = "SELECT userName , pw FROM register where userName='$username'"; //get the password  

$result = $con->query($sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		if ($row['pw'] == $password && $row['userName'] == $username) //
		{
			// Set session variables
			$_SESSION['uName'] = $username;

			header("Location:home.php?name=$row[userName]");
			
		} else {
			echo "<script> alert('Incorrect Password.Please re-enter')</script>";
			echo "<script>window.location.href='Login.php'</script>";
		}
	}
} else {
	echo "<script> alert('Incorrect username.Please re-enter')</script>";
	echo "<script>window.location.href='Login.php'</script>";
}
$con->close();

?>

