<?php

include_once('config.php');

?>

<?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['sumbit'])) {
    // Retrieve form data
    // Retrieve form data
	
   
    $cname = $_POST['cname'];
    $no = $_POST['no'];
    $tno = $_POST['tno'];
    $date = $_POST['date'];
	$total = $_POST["amount"];
  }
	}



    // Insert the data into the database
    $sql = "insert into Withdraw( name, from_account_number, to_account_number ,date , total_amount )
            values ( '$cname', '$no', '$tno', '$date' , '$total')";

	
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
