<?php

if (isset($_POST["signupsubmit"])) {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["repassword"];
}

include_once("config.php");

$sql = "SELECT * FROM register WHERE userName = '$uname'";

$result = $con->query($sql);

    $password = $_POST["password"];
    $confirmpassword = $_POST["repassword"];

if ($result->num_rows > 0) {
    echo "<script> alert('Username Has Already Taken');window.location='register.php'; </script>";
} else 
{
    if ( $password == $confirmpassword) {

        $sql = "INSERT INTO register ( regID , fname , lname , userName , mail, pw) VALUES ( '','$firstName' ,'$lastName' , '$uname' , '$email' ,'$password' )";
        $record = $con->query($sql);

        if ($record == true) {
            echo "<script>alert('Registration Sucessful...'); window.location='home.php';</script>";
        } 
        else {
            echo "<script>alert('Registration unSucessful...'); window.location='register.php';</script>";
        }
    } 
    else {

        echo "<script> alert('Password does not matches!!!'); window.location='register.php';</script>";
    }
}
$con->close();
?>