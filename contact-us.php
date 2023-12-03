<?php include_once("header1.php") ?>
<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="css/contact-us.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="contact-section">
            <h1>Contact Us</h1>
            <div class="border"></div>
            <form class="contact-form" action="contactsubmit.php" method="post">
                <input type="text" class="contact-form-text" placeholder="First name" name="firstname">
				<input type="text" class="contact-form-text" placeholder="Last name" name="lastname">
                <input type="email" class="contact-form-text" placeholder="Email" name="email1">
                <input type="text" class="contact-form-text" placeholder="Phone Number" name="phone1">
                <br>
                <textarea class="contact-form-text" placeholder="Message" name="message1"></textarea>
                <input type="submit" class="contact-form-btn" value="Submit" name="contact-us-submit">
            </form>
        </div>
        
    </body>
</html>


<?php include_once("footer.php"); ?>