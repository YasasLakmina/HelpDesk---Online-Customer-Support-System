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
    $_redmsg = 'This happend sometime when server is down or database is not operational.';
    header("location:./redirect.php?title=$_redtitle&msg=$_redmsg");
    return;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- 
    <div class="sidebar">
        <ul>
            <li><a href="#"><img src="./images/home.svg" alt="" class="icon"> Dashboard </a></li>
            <li><a href="#"><img src="./images/bank.svg" alt="" class="icon"> Revenue </a></li>
            <li><a href="#"><img src="./images/headphones.svg" alt="" class="icon"> Support Agents </a></li>
            <li><a href="#"><img src="./images/ballot.svg" alt="" class="icon"> Feedbacks </a></li>
            <li><a href="#"><img src="./images/document.svg" alt="" class="icon"> Reports </a></li>
            <li><a href="#"><img src="./images/calendar-days.svg" alt="" class="icon"> Calander </a></li>
            <li><a href="#"><img src="./images/user.svg" alt="" class="icon"> Active Users </a></li>
            <li><a href="#"><img src="./images/settings.svg" alt="" class="icon"> Account Settings </a></li>
        </ul>
    </div> -->

    <div class="content">
        <h1>Welcome Admin!</h1>
        <div class="subtitle">Dashboard</div>

        <br>
        <br>
        <?php

        $sql = "SELECT COUNT(*) as count FROM register";
        $result = $__conn->query($sql);
        $row = $result->fetch_assoc();
        $c1 = $row['count'];

        $sql = "SELECT COUNT(*) as count FROM feedback";
        $result = $__conn->query($sql);
        $row = $result->fetch_assoc();
        $c2 = $row['count'];

        $sql = "SELECT COUNT(*) as count FROM ticket";
        $result = $__conn->query($sql);
        $row = $result->fetch_assoc();
        $c3 = $row['count'];

        $sql = "SELECT COUNT(*) as count FROM admin_login";
        $result = $__conn->query($sql);
        $row = $result->fetch_assoc();
        $c4 = $row['count'];

        $sql = "SELECT value FROM meta WHERE name='page_views'";
        $result = $__conn->query($sql);
        $row = $result->fetch_assoc();
        $c5 = $row['value'];
        ?>
        <div class="grid-5">
            <div class="box">
                <div class="text1"><?php echo $c1; ?></div>
                <div class="text2">Active Users</div>
            </div>
            <div class="box">
                <div class="text1"><?php echo $c2; ?></div>
                <div class="text2">Feedbacks</div>
            </div>
            <div class="box">
                <div class="text1"><?php echo $c3; ?></div>
                <div class="text2">Raised Tickets</div>
            </div>
            <div class="box">
                <div class="text1"><?php echo $c4; ?></div>
                <div class="text2">Active Agents</div>
            </div>
            <div class="box">
                <div class="text1"><?php echo $c5; ?></div>
                <div class="text2">Page Views</div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="grid-2">
            <div>
                <?php

                $sql = "SELECT * FROM feedback";
                $result = $__conn->query($sql);
                # $id = $row['feedback_ID'];

                ?>
                <div class="subtitle mt">Feedbacks</div>
                <div class="box">
                    <?php while ($row = $result->fetch_assoc()) { ?>

                        <div class="x">
                            <div class="text1"><?php echo $row['feedback_text']; ?>
                            </div>
                            <button class="btn"><a href='view_feed.php?feedback_ID=<?php echo $row['feedback_ID']; ?>'>Review</a></button>
                            <button class="btn"><a href='delete_feed.php?feedback_ID=<?php echo $row['feedback_ID']; ?>'>Delete</a></button>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <?php

                $sql = "SELECT * FROM ticket";
                $result = $__conn->query($sql);


                ?>
                <div class="subtitle mt">Inquiries</div>
                <div class="box">
                    <?php while ($row = $result->fetch_assoc()) { ?>

                        <div class="x">
                            <div class="text1"><?php echo $row['question']; ?>
                            </div>
                            <button class="btn"><a href='in_view.php?ID=<?php echo $row['ID']; ?>'>Review</a></button>
                            <button class="btn"><a href='delete_in.php?ID=<?php echo $row['ID']; ?>'>Delete</a></button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>