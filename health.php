<!DOCTYPE html>
<html>

<head>
  <?php include_once("header1.php") ?>
  <link rel="stylesheet" href="css/ResoucesStyles.css">
</head>

<body class="body">

  <div class="section33">

    <?php
    include("config.php");

    $category = "health"; // Specify the desired category

    // Retrieve and display the filtered records of the specified category
    $sql = "SELECT * FROM resources WHERE category = '" . $category . "'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<h2 class="edu-h2">' . $row['Title'] . '</h2>';
        echo "<br>";
        echo '<p class="edu-p">' . $row['Description'] . "</p>";
      }
    } else {
      echo "No records found for the category: " . $category;
    }
    ?>

  </div>

  <?php include_once("footer.php") ?>