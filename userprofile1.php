<?php include_once("header1.php") ?>


<?php
$__servername = "localhost";
$__username = "root";
$__password = "";
$__dbname = "helpdesk";
$__page_error = "";

try {
	$__conn = new mysqli($__servername, $__username, $__password, $__dbname);
} catch (mysqli_sql_exception $__e) {
	$_redtitle = 'Database Not Connected';
	$_redmsg = 'This happened sometimes when the server is down or the database is not operational.';
	header("location:./redirect.php?title=$_redtitle&msg=$_redmsg");
	return;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['sumbit'])) {
		// Retrieve form data

		$cname = $_POST["cname"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
	}
}

// Insert the data into the database
$sql = "insert into user(user_name, first_name, last_name, email ,password )
            values ('$cname', '$fname', '$lname', '$email', '$pwd')";


//ececute the query


if (mysqli_query($__conn, $sql)) {

	echo "<script>alert('Record Inserted Successfully')</script>";
	echo "<script>window.location.href = 'Pricing.html';</script>";
} else {

	echo "<script>alert('Error in insertion')</script>";
}



//close the connection

mysqli_close($__conn);

?>
