<?php
//logout function

    function logout(){
        include_once "header1.php";
        session_destroy();
        echo"<script>location.href='Login.php';</script>";
}
logout();

?>