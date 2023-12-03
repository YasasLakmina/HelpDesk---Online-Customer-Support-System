<?php

include_once'config.php';

?>

<?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['sumbit'])) {
    // Retrieve form data
	
    
    $name = $_POST['cname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $date = $_POST['date'];
	$total = $_POST["amount"];
	
  }
}

    // Insert the data into the database
    $sql = "insert into paypal( name, email, password, date ,total_amount )
            values ( '$name', '$email', '$password', '$date' ,'$total' )";

	
	//ececute the query
	
	
	if(mysqli_query($con, $sql)) {
		
		echo "<script>alert('Record Inserted Successfully')</script>";
		echo "<script>window.location.href = 'Pricing.php';</script>";
		
	} 	
	else {
		
		echo "<script>alert('Error in insertion')</script>";
	}
	

	//close the connection
	
	mysqli_close($con);

?>
