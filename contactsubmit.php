<?php
 if(isset($_POST["contact-us-submit"]))
    {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $phone = $_POST["phone1"];
    $email = $_POST["email1"];
    $message = $_POST["message1"];
    }
    include_once("config.php");

        $sql = "INSERT INTO contact_us( id , fname , lname , phone , email, message) VALUES ( '','$firstName' ,'$lastName' , '$phone' , '$email' ,'$message' );";
        

        if ($con->query($sql))
        {
            echo "<script>alert('Sending Sucessful...'); window.location='home.php';</script>";
        } 
        else
        {
            echo "<script>alert('Sending Unsucessful...'); window.location='contact-us.php';</script>";
        }


 ?>