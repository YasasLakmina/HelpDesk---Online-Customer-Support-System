<?php include_once("header1.php") ?>	

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/Paypal.css">
	<script src ="js/Payment.js"></script>

</head>
<body class="body">
    
	
	
 
	<center>
	<div class="container" ><br><br>
	
	<h2> Add Payment Details</h2><br>
	
	<form action="Paypal.php" method="POST">
	<p>Please select your payment Method:</p><br>
	
 		<input type="radio" id="payment" name="payment" value="Online" onclick="redirectToOnline()">
 		<label for="Withdraw">Online</label>

 		<input type="radio" id="payment" name="payment" value="Withdraw" onclick="redirectToBank()">
 		<label for="Withdraw">Bank Account Withdraw</label>

 		<input type="radio" id="payment" name="payment" value="Pay Pal"  checked >
 		<label for="Pay pal">Pay Pal</label><br><br>

	</form>
	
	<form class="Login" action="Paypal.php" method="POST"><br><br>
	
	
	<h2> Add PayPal Details</h2><br>
	
	

	<label for="caname" class="text6" > Name  :  </label>
		<input type="text" id="cname" name="cname" placeholder="Enter Name" pattern="[A-Za-z\s]+" required><br><br>
           
	<label for="cname" class="text5"> Paypal email  :  </label>
    <input type="text" id="email" name="email" placeholder="Enter email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required><br><br>

	<label for="psw"> Paypal Password :</label>
		 <input type="password" id="pwd" name="pwd" placeholder="Enter Password" required><br><br>
	
	<label for="tda" class="text3" >Transaction date   :</label>
    <input type="text"  id="date" name="date" placeholder="(DD/MM/YY)" pattern="(0[1-9]|1[0-9]|2[0-9]|3[0-1])/(0[1-9]|1[0-2])/\d{2}" required><br><br><br>
	
	<h3>
	<label id="totalA" name="totalA" class="label1" >Total Amount :</label>
    <b><label id="totalAmount"  name = "totalAmount" class="label1" > </b></label><br><br> 
    </h3>
	<label for="reamount">Re-enter amount :</label>
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