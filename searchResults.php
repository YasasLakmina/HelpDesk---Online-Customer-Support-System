<?php include_once("header1.php"); ?>

<?php
include_once("config.php");

/*session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    echo "<script>alert('Sorry You Have to Login to Access this Resouces');</script>";
    exit;
}
*/

// Redirect to home if the search button is not clicked
if (!isset($_POST["searchButton"])) {
    header("Location: home.php");
} else {
    // If the search bar is empty or whitespace, redirect to home.php
    $searchQuery = $_POST["search"];
    if (empty(($searchQuery))) {
        header("Location: home.php");
    } else {
        $sql = "SELECT * FROM resources WHERE category LIKE '%$searchQuery%'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="searchresult">';
                echo "<h1>" . "Category : " . $row["category"] . "</h1>" . "<br>";
                echo "<h2>" . $row["Title"] . "</h2>" . "<br>";
                echo "<h4>" . $row["Description"] . "</h4>" . "<br>";
                echo '</div>';
            }
        } else {

            echo '<div class="center-text">';
            echo "<img src='Images/sera2.png'> ";
            echo '</div>';
        }
    }
}

$con->close();
?>

<?php include_once("footer.php"); ?>
