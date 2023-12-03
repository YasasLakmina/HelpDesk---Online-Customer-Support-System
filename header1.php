<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="Images/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800&display=swap" rel="stylesheet">
  <title>Help Desk</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="Js/script.js"></script>
</head>

<body class="body">
  <div class="header">
    <a href="home.php"><img class="logo1" src="Images/Untitled-5.png" alt="HelpDesk"></a>
    <div class="title">
      <span class="text1">Help</span><span class="text2">Desk</span>.com
    </div>
 
        <?php

        if (isset($_SESSION['uName']))
        {

          

          echo "<div class='signup'>
          <a href='userprofile.php'><img class='logo2' src='Images/User.png' alt='user'></a>
          <div class='button1'>";

          echo "<div class='username'>  Hi  $_SESSION[uName]</div>";

          echo "<button class='logout'><a href='logout.php'>Log out</a></button>";
         
          
        }

        else{

          echo "<div class='signup'>
          <a href='#'><img class='logo2' src='Images/User.png' alt='user'></a>
    
          <div class='button1'>";
          echo "<button class='login'> <a href='Login.php'>Log In</a></button>";
          echo "<button class='signin'> <a href='register.php'>Sign In</a></button>";
          
        }      
        ?>
      </div>

    </div>


  </div>

  <div class="header2">

    <ul class="nav">
      <li><a href="home.php">Home</a></li>
    <?php  
      if (isset($_SESSION['uName']))
      echo "<li><a href='Pricing.php'>Pricing</a></li>
      <li class='dropdown'>
        <a href='Resources.php' class='dropbtn'>Resources</a>
        <div class='dropdown-content'>
          <a href='education.php'>Education</a>
          <a href='health.php'>Helth</a>
          <a href='business.php'>Business</a>
        </div>"
      ?> 
      </li>
      <li><a href="About.php">About Us</a></li>
      <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
    <?php
    if (isset($_SESSION['uName']))
    echo "<div class='search-container'>
      <form action='searchResults.php' method='post'>
        <input type='text' class='search' placeholder='Search resources here..' name='search'>
        <button type='submit' name='searchButton'><i class='fa fa-search'></i></button>
      </form>
    </div>"
    ?>

  </div>