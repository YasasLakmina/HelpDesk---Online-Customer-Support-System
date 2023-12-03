<!DOCTYPE html>
<html>

<head>
<script>
// Function to validate the registration form
function validateRegistrationForm() {

	var username = document.forms["registerForm"]["username"].value;
	var password = document.forms["registerForm"]["password"].value;
	var email = document.forms["registerForm"]["email"].value;
  
	// Patterns for validation
	var usernamePattern = /^[a-zA-Z0-9_]{5,20}$/; // Alphanumeric and underscore, 5-20 characters
	var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // At least 8 characters with at least one letter and one digit
	var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Valid email pattern
  
	// Validate username
	if (!usernamePattern.test(username)) {
	  alert("Please enter a valid username (Username should be 5-20 characters).");
	  return false;
	}
  
	// Validate password
	if (!passwordPattern.test(password)) {
	  alert("Please enter a valid password (At least 8 characters with at least one letter and one digit).");
	  return false;
	}
  
	// Validate email
	if (!emailPattern.test(email)) {
	  alert("Please enter a valid email address.");
	  return false;
	}
  
	// if all validations passed
	return true;
  }

</script>

    <link rel="stylesheet" href="css/register.css">
    <?php include_once("header1.php") ?>
</head>

<body class="body">

    <div class="r123">
        <h2 class="formhed">Get Register Today !</h2>
        <form action="registersubmit.php" method="POST" name="registerForm" class="registerForm" onsubmit="return validateRegistrationForm();">
            <h3>Let's create your account!</h3> <br>
            <div class="textfield">
                <div class="fnameLname">
                    <input type="text" name="firstname" placeholder="  First Name" class="fname" required>
                    <input type="text" name="lastname" placeholder="  Last Name" class="lname" required> <br><br>
                </div>
                <input type="text" name="username" id="uname" placeholder="  Username" class="otherinput" required> <br><br>
                <input type="email" name="email" id="email" placeholder="  Email" class="otherinput" required> <br><br>
                <input type="password" name="password" id="password" placeholder="  Password" class="otherinput" required> <br><br>
                <input type="password" name="repassword" id="repassword" placeholder="Re-enter Password" class="otherinput" required> <br>
            </div>
            <div class="lasttext">
                <input type="checkbox" name="TandConditions" id="check">
                I Agree <a href="">Terms and Conditions</a> <br><br>
                <input type="submit" id="sub" name="signupsubmit" value="Sign Up"> <br>
                Already have an account? <a href="Login.php">Login</a>
            </div>
        </form>
    </div>

<?php include_once("footer.php") ?>