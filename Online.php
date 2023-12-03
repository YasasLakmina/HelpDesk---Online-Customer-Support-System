<?php

include_once('config.php');


?>

<?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['sumbit'])) {
    // Retrieve form data
	
    $ctype = $_POST["ctype"];
    $cname = $_POST["cname"];
    $no = $_POST["no"];
    $date = $_POST["date"];
    $code = $_POST["code"];
	$total = $_POST["amount"];
	
	
	
	
  }
}

    // Insert the data into the database
    $sql = "insert into online(card_type, name_on_card, card_number, expires_date, security_code ,total_amount )
            values ('$ctype', '$cname', '$no', '$date', '$code', '$total' )";

	
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
