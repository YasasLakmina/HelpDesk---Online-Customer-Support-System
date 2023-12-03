<?php


include_once("config1.php");

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
