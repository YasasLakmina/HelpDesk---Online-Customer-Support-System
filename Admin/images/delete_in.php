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

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];


    $query = "DELETE  FROM ticket WHERE ID = $id";
    $queryRun = mysqli_query($__conn, $query);

    if ($queryRun) {
        header("Location:../Admin/index.php");
    } else {
        die(mysqli_error($__conn));
    }
}
