<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/FAQstyles.css">
  <script src="Js/script.js"></script>
  <?php include_once("header1.php") ?>


</head>

<body class="body">


  <table>
    <tr>
      <td class="table-dec" width="5px"><img class="faq-img" src="Images/faq_1.jpg" alt="faq"></td>
      <td class="table-dec">
        <h1 class="h1">FAQ</h1>
      </td>
    </tr>
  </table>




  <div class="container">
    <div class="left-section">
      <div class="faq-container">
        <div class="question" onclick="faqanswer('answer1')">Q: How do I create an account?</div>
        <div class="answer" id="answer1">
          A: To create an account, click on the "Sign Up" button on the homepage and fill out the required information in the registration form. Once completed, click "Submit" to create your account.
        </div>

        <div class="question" onclick="faqanswer('answer2')">Q: How can I contact customer support?</div>
        <div class="answer" id="answer2">
          A: You can contact our customer support team by clicking on the "Contact Us" link in the navigation menu. Fill out the contact form with your query or concern, and our team will respond to you promptly.
        </div>

        <div class="question" onclick="faqanswer('answer3')">Q: What payment methods do you accept?</div>
        <div class="answer" id="answer3">
          A: We accept various payment methods, including credit cards (Visa, Mastercard, American Express), PayPal, and bank transfers. You can select your preferred payment option during the checkout process.
        </div>

        <div class="question" onclick="faqanswer('answer4')">Q: How can I provide feedback or suggestions?</div>
        <div class="answer" id="answer4">
          A: We value your feedback and suggestions. You can share your thoughts by clicking on the "Feedback" link in the footer of our website. Feel free to let us know about your experience, suggestions for improvement, or any other comments you have.
        </div>

        <div class="question" onclick="faqanswer('answer5')">Q: How do I update my account information?</div>
        <div class="answer" id="answer5">
          A: To update your account information, log in to your account and navigate to the "My Account" or "Account Settings" section. From there, you can edit your profile details, such as your name, address, email, and contact information. Remember to save the changes after updating your information.
        </div>

        <div class="question" onclick="faqanswer('answer6')">Q: What is your refund policy</div>
        <div class="answer" id="answer6">
          A: Our refund policy allows you to request a refund within a specified time frame (e.g., 30 days) from the date of purchase. The product must be in its original condition and packaging. Once we receive the returned item, we will process the refund according to our refund policy guidelines. Please refer to our Privacy Policy page for detailed information.
        </div>

        <div class="question" onclick="faqanswer('answer7')">Q: Is my personal information secure?</div>
        <div class="answer" id="answer7">
          A: Yes, we take the security and privacy of your personal information seriously. We have implemented various security measures to protect your data from unauthorized access, loss, or disclosure. For detailed information on how we handle and safeguard your information, please review our Privacy Policy.
        </div>

        <div class="question" onclick="faqanswer('answer8')">Q: Can I change or cancel my order after it has been placed?</div>
        <div class="answer" id="answer8">
          A: If you need to make changes or cancel your order, please contact our customer support team immediately. Depending on the order status and processing stage, we will do our best to accommodate your request.
        </div>
      </div>
    </div>




    <div class="right-section">

      <div class="vertical-line">
        <div class="form-box">

          <form action="FAQ.php" method="POST">

            <h3 style="padding-bottom: 30px; font-family: Arial, sans-serif; color: #ccc;"> Feel free to add your Suggetions </h3>


            <div class="formtext1">
              Name:
              <input class="form-box-text" type="text" placeholder="Enter your User Name" name="txtname" required>
              Email:
              <input class="form-box-text" type="text" name="email" placeholder="Enter your email" required>
              Question:
              <textarea class="form-box-text" name="message" required></textarea>
            </div>

            <input class="form-box-submit" type="submit" name="btnSubmit" value="Submit">
          </form>


        </div>
      </div>
    </div>

  </div>


  <hr class="verticleline">

  <br>

  <p>
    <center>For more Information <a href="contact-us.php">Contact Us</a></center>
  </p>

  <br>








  <?php
  include_once("config.php");

  if (isset($_POST['btnSubmit'])) {
    $name = $_POST['txtname'];
    $email = $_POST['email'];
    $question = $_POST['message'];

    $sql = "INSERT INTO FAQ (name , email, question) VALUES ('$name', '$email', '$question')";

    if ($con->query($sql) === TRUE) {

      echo "<script>alert('Record created successfully...'); window.location='FAQ.php';</script>";
    } else {
      echo "Error creating record: " . $con->error;
    }
  }
  ?>


  <?php include_once("footer.php") ?>