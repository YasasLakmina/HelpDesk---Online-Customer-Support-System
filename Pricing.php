<?php include_once("header1.php") ?>

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/pricing.css">
	<script src ="js/Payment.js"></script>

</head>
<body class="body">
  

    
	
	
	<div class="pricing-wrapper clearfix">

    <h1 class="pricing-table-title">Type of Packages </h1>

    <div class="pricing-table">
      <h3 class="pricing-title">Basic</h3>
      <div class="price">$60<sup>/month</sup></div>
   
      <ul class="table-list">
        <li>3 Incoming email accounts<span></span></li>
        <li>3 Outgoing email accounts<span></span></li>
        <li>2 Live chat buttons<span></span></li>
        <li>1 Knowledge base<span></span></li>
        <li>50 Event rules<span></span></li>
        <li>10 departments<span></span></li>
      </ul>
      
      <div class="table-buy">
        <p>$60<sup>/ month</sup></p>
        <a href="Online1.php" class="pricing-action a1" onclick="passValue(60)">Buy Now</a>
      </div>
    </div>
    
    <div class="pricing-table recommended">
      <h3 class="pricing-title">Premium</h3>
      <div class="price">$100<sup>/month</sup></div>
     
      <ul class="table-list">
        <li>10 Incoming email accounts<span></span></li>
        <li>5 Outgoing email accounts<span></span></li>
        <li>4 Live chat buttons<span><span></li>
        <li>3 Knowledge base<span ></span></li>
        <li>Event rules <span class="unlimited"> unlimited</span></li>
        <li>25 departments<span></span></li>
      </ul>
      
      <div class="table-buy">
        <p>$100<sup>/month</sup></p>
        <a href="Online1.php" class="pricing-action a1" onclick="passValue(100)">Buy Now</a>
      </div>
    </div>

    <div class="pricing-table">
      <h3 class="pricing-title">Ultimate</h3>
      <div class="price">$200<sup>/month</sup></div>
      
      <ul class="table-list">
         <li>20 Incoming email accounts<span></span></li>
        <li>10 Outgoing email accounts<span></span></li>
        <li>8 Live chat buttons<span></span></li>
        <li>5 Knowledge base<span ></span></li>
        <li>Event rules <span class="unlimited"> unlimited</span></li>
        <li>departments <span class="unlimited"> unlimited</span></li>
      </ul>
    
      <div class="table-buy">
        <p>$200<sup>/month</sup></p>
        <a href="Online1.php" class="pricing-action a1" onclick="passValue(200)">Buy Now</a>
      </div>
    </div>
  </div>

	<br><br>

</body>
</html>

<?php include_once("footer.php") ?>