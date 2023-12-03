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
    header("location:./redirect.php?title=$_redtitle&msg=$_redmsg");
    return;
}

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $query = "SELECT * FROM ticket WHERE ID = $id";
    $queryRun = mysqli_query($__conn, $query);

    if ($queryRun) {
        $tiketData = mysqli_fetch_assoc($queryRun);
        $ID = $tiketData['ID'];
        $name = $tiketData['name'];
        $email = $tiketData['email'];
        $TeleNo = $tiketData['TeleNo'];
        $category = $tiketData['category'];
        $question = $tiketData['question'];
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Feedback</title>
    <link rel="stylesheet" href="./css/Paypal.css">

</head>

<body>

    <center>
        <div class="container"><br><br>

            <div>
                <h2>Feedback Details</h2>
                <p><strong>ID:</strong> <?php echo $ID; ?></p>
                <p><strong>Name:</strong> <?php echo $name; ?></p>
                <p><strong>Email :</strong> <?php echo $email; ?></p>
                <p><strong>TeleNo:</strong> <?php echo $TeleNo; ?></p>
                <p><strong>Category:</strong> <?php echo $category; ?></p>
                <p><strong>Question:</strong> <?php echo $question; ?></p>
            </div>
            <button type="submit" id="submit" name="submit" class="button5"><a href='index.php'>Return to Admin Panel</a></button>
        </div>
    </center>
</body>

</html>