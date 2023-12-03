<?php include_once("header1.php") ?>	
<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/Withdraw.css">
	<script src ="js/Payment.js"></script>

</head>
<body class="body">
    
	
 
	<center>
	<div class="container" ><br><br>
	
	<h2> Add Payment Details</h2><br>
	
	<form action="Withdraw.php" method="POST">
	<p>Please select your payment Method:</p><br>
 		<input type="radio" id="payment" name="payment" value="Online"  onclick="redirectToOnline()">
 		<label for="Withdraw">Online</label>

 		<input type="radio" id="payment" name="payment" value="Withdraw" checked >
 		<label for="Withdraw">Bank Account Withdraw</label>

 		<input type="radio" id="payment" name="payment" value="Pay Pal" onclick="redirectToPaypal()">
 		<label for="Pay pal">Pay Pal</label><br><br>

	</form>
	
	
	
	
	
		<form class="Login" action="Withdraw.php" method="POST"><br><br>
	
	
	<h2> Add Bank Details</h2><br><br>
	
	

	<label for="caname" > Name on the Account  :  </label>
    <input type="text" id="cname" name="cname" placeholder="Enter Name" pattern="[A-Za-z\s]+" required><br><br>
           
	<label for="cno" >From Account Number  :</label>
    <input type="text" id="no" name="no" placeholder="xxxxxxxxxx " pattern="[0-9]+" required><br><br>
	
	<label for="an" class="text5">To  Account Number    :</label>
    <input type="text" id="tno" name="tno" placeholder="xxxxxxxxxx" pattern="[0-9]+" required> <br><br> 
	
	 
	<label for="tda" class="text7" >Transaction date   :</label>
    <input type="text"  id="date" name="date" placeholder="(DD/MM/YY)" pattern="(0[1-9]|1[0-9]|2[0-9]|3[0-1])/(0[1-9]|1[0-2])/\d{2}" required><br><br><br>
	
	 
	<h3>
	<label id="totalA" name="totalA" class="label1" >Total Amount :</label>
    <b><label id="totalAmount"  name = "totalAmount" class="label1" > </b></label><br> <br>
    </h3>

	<label for="reamount" class="text7">Re-enter amount :</label>
    <input type="text" id="amount" name="amount" placeholder="only the number"><br><br>


	<div style="color: black;"><b>
    Please note that you will need to enter the correct amount to proceed with the payment.

    Ex: $60.00 = 60</b>
</div><br>
	

     <br><br>
      <label>
        <input type="checkbox"  name="remember" required> I agree Terms and Conditions
      </label> 
	 <button type="submit"  id = "sumbit" name="sumbit" class ="button5">Sumbit</button>
	  
    </div>
	
			
		

 
	</div>
	</center>



    
</body>
</html>

<?php include_once("footer.php"); ?>