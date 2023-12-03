

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/ResoucesStyles.css">
</head>

<?php include_once("header1.php") ?>

<body class="body">

  <div class="top">
    <h2 class="h2-resources">Explore Our Collection of Useful Resources</h2>
    <br>
    <p class="p-resources">On this page, you will find a curated collection of helpful resources to assist you in various domains and topics. Whether you're seeking educational materials, tutorials, or references, we've got you covered. Take advantage of these resources to enhance your knowledge and skills.</p>
    <br>
  </div>


  <div class="container11">
    <div class="box">
      <form class="submit-form" action="education.php" method="post">
        <input class="faq-imge" type="image" name="image1" src="Images/edu.jpg" alt="Submit">
      </form>
      <h1 class="h1-resources">Education</h1>
    </div>

    <div class="box">
      <form class="submit-form" action="business.php" method="post">
        <input class="faq-imge" type="image" name="image1" src="Images/business.jpg" alt="Submit">
      </form>
      <h1 class="h1-resources">Business</h1>
    </div>

    <div class="box">
      <form class="submit-form" action="health.php" method="post">
        <input class="faq-imge" type="image" name="image1" src="Images/health.jpg" alt="Submit">
      </form>
      <h1 class="h1-resources">Health</h1>
    </div>

  </div>



  <section>
    <h2 class="ifyou">If you Fail To Find Information You Want, We Are Here To Help You:</h2>
    <form class="frm" action="Resources.php" method="POST">

      Name:<br>
      <input type="name" name="Name" placeholder="Enter Your User Name" required>
      <br><br>


      Email:<br>
      <input type="name" name="Email" placeholder="abc@gmail.com" pattern="[a-z 0-9._%+-]+@[a-z 0-9]+\.[a-z]{2,3}" required>
      <br><br>


      Telephone:<br>
      <input type="phone" name="mobile" placeholder="011 111 11 11" pattern="[0-9]{10}" required>
      <br><br>


      Category:<br>
      <input type="Category" name="Category" placeholder="Education / Business / Health" required>
      <br><br>


      Question:<br>
      <textarea name="Question" placeholder="What type of information are you looking for" required></textarea>
      <br><br>

      <div class="form-group">
        <input type="submit" name="bsubmit" value="Submit">
      </div>
    </form>
  </section>

  <?php
  include("config.php");

  if (isset($_POST['bsubmit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $TeleNo = $_POST['mobile'];
    $Category = $_POST['Category'];
    $question = $_POST['Question'];


    $sql = "INSERT INTO ticket (name , email , TeleNo , Category , question) VALUES ('$name', '$email', '$TeleNo' , '$Category' , '$question')";

    if ($con->query($sql) === TRUE) {
      echo '<script>alert("Record created successfully");</script>';
    } else {
      echo "Error creating record: " . $con->error;
    }
  }
  ?>

  <?php include_once("footer.php") ?>