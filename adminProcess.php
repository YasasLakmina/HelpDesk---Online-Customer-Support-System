<?php
include_once("config.php");

session_start();

if (isset($_POST['admin_login'])) {
    $aUname = $_POST["adminUserName"];
    $apassword = $_POST["adminPassword"];

    $sql = "SELECT * FROM admin_login WHERE admin_uName = '$aUname' AND admin_password = '$apassword'";


    $checkadmin = $con->query($sql);


    if ($checkadmin->num_rows > 0) //if quary result is 1 admin will lo into the admin protal
    {

        $_SESSION['admin_uName'] =  $aUname;
?>

        <script>
            alert("Welcome Admin!!!");
            window.location.href = "Admin/index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Password or Email is incorrect");
            window.location.href = "adminlogin.php";
        </script>
<?php
    }
}

?>