<?php include_once("header1.php") ?>	
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/Online.css">
	<script src ="js/Payment.js"></script>
	<script src ="js/Online.js"></script>
	

</head>
<body class="body">
    
	<center>
	<div class="container" ><br><br>
	
	<h2> Add Payment Details</h2><br>
	
	<form  action="Online.php" method="POST">
	
	<p>Please select your payment Method:</p><br>
	
 		<input type="radio" id="payment" name="payment" value="Online" checked>
 		<label for="Withdraw">Online</label>

 		<input type="radio" id="payment" name="payment" value="Withdraw" onclick="redirectToBank()">
 		<label for="Withdraw">Bank Account Withdraw</label>

 		<input type="radio" id="payment" name="payment" value="Pay Pal" onclick="redirectToPaypal()">
 		<label for="Pay pal">Pay Pal</label><br><br>

	</form>
	
	
	
	
	
	<form class="Login"  action="Online.php" method="POST" id= "loginForm" onsubmit="return validateForm()"><br><br>
	
	
	<h2> Add Card Details</h2><br>
	
	<p>Card Type :</p><br><br>
	
		<input type="radio" id="ctype" name="ctype" value="Visa" checked>
		<img src="Images/visa.png" width ="14%" height="5%" >

		<input type="radio" id="ctype" name="ctype" value="Master"  >
		<img src="Images/Master.png" width ="14%" height="5%">
	
		<input type="radio" id="ctype" name="ctype" value="Amex">
 		<img src="Images/amex.jpg" width ="14%" height="5%"><br><br><br>


		<label for="caname" > Name on Card :  </label>
		<input type="text" id="cname" name="cname" placeholder="Enter Name"  ><br><br>
			   
		<label for="cno" >Card Number  :</label>
		<input type="text" id="no" name="no" placeholder="xxxx xxxx xxxx xxxx" ><br><br>
		
		<label for="ex" >Expires Date  :</label>
		<input type="text" id="date" name="date" placeholder="(MM/YY)" ><br><br> 
	
		
		<label for="sec" >Security code  :</label>
		<input type="text" id="code" name="code" placeholder="CCV"  > <br><br> <br>
		
		<h3>
	<label id="totalA" name="totalA" class="label1" >Total Amount :</label>
    <b><label id="totalAmount"  name = "totalAmount" class="label1" > </b></label><br> <br>
    </h3>
		<label for="reamount" class="text1">Re-enter amount :</label>
    <input type="text" id="amount" name="amount" placeholder="only the number"><br><br>


	<div style="color: black;"><b>
    Please note that you will need to enter the correct amount to proceed with the payment.

    Ex: $60.00 = 60</b>
</div><br>
	
		<br><br>
		  <label>
			<input type="checkbox"  name="remember" required > I agree Terms and Conditions
		  </label> 
		<button type="submit" class ="button5"  id = "sumbit" name="sumbit" >Sumbit</button>
	  
    </div>
	</div>
	</center>
	</form>


</body>
</html>

<?php include_once("footer.php"); ?>	

