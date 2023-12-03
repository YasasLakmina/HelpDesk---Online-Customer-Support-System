<?php

include_once("config1.php");

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
