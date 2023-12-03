<?php
if (isset($_POST["submit"])) {
    $idea = $_POST["idea"];
    $text = $_POST["textarea"];
    $rating = $_POST["rating"];
    $reccomond = $_POST["reccomond"];
    $email = $_POST["email"];
}


include_once("config.php");

$sql = "INSERT INTO feedback(feedback_ID , feedback_kind , feedback_text, rating ,recommendation, email) VALUES('' , '$idea' , '$text', '$rating', '$reccomond', '$email' )";

if ($con->query($sql)) {

    echo "<script>alert('Submitted Successfully...'); window.location='home.php';</script>";
} else {
    echo "<script>alert('Not Submitted Sucessfully!!!'); window.location='feedback.php';</script>"  . $con->error;
}

$con->close();
