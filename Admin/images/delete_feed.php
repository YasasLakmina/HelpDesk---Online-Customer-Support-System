<?php
$__servername = "localhost";
$__username = "root";
$__password = "";
$__dbname = "helpdesk";
$__page_error = "";

try {
    $__conn = new mysqli($__servername, $__username, $__password, $__dbname);
} catch (mysqli_sql_exception $__e) {
    $_redtitle = 'Database Not Connected';
    $_redmsg = 'This happened sometimes when the server is down or the database is not operational.';
    header("location:./index.php?title=$_redtitle&msg=$_redmsg");
    return;
}

if (isset($_GET['feedback_ID'])) {
    $id = $_GET['feedback_ID'];


    $query = "DELETE from feedback WHERE feedback_ID = $id";
    $queryRun = mysqli_query($__conn, $query);

    if ($queryRun) {
        header("Location:../Admin/index.php");
    } else {
        die(mysqli_error($__conn));
    }
}
