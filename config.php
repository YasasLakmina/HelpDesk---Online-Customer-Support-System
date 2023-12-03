<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "HelpDesk";

    $con = new mysqli($servername , $username ,$password, $dbname);

    if($con -> connect_error)
    {
        die("Connection Faild.." . $con->connect_error);
    }
?>