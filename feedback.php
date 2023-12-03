<!DOCTYPE html>
<html>

<head>
    <?php include_once("header1.php") ?>
    <script src="Js/script.js"></script>
    <link rel="stylesheet" href="css/feedback.css">

</head>
<div class="formback">

    <h2 class="formhed">How are we doing?</h2><br>

    <div class="form">

        <form action="feedbackInsert.php" name="feedback" id="feedback" method="post">


            What kind of feedback you have?<br>
            <select name="idea" class="formdropdown">
                <option value="General feedback">General feedback</option>
                <option value="Technical issue">Technical issue</option>
                <option value="Feature request">Feature request</option>
                <option value="Performance issue">Performance issue</option>
                <option value="Account-related question">Account-related question</option>
                <option value="Suggestions for improvement">Suggestions for improvement</option>
                <option value="Compliment">Compliment</option>
                <option value="Complaint">Complaint</option>
                <option value="Other">Other</option>
            </select><br><br>

            What's on your mind?<br>
            <textarea name="textarea" class="txtarea" cols="40" rows="7" required></textarea><br><br>


            How would you rate our site?(Bad to Good)<br>
            <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="Very Bad">
                <label for="star5"></label>

                <input type="radio" id="star4" name="rating" value="Bad">
                <label for="star4"></label>

                <input type="radio" id="star3" name="rating" value="Moderate">
                <label for="star3"></label>

                <input type="radio" id="star2" name="rating" value="Good">
                <label for="star2"></label>


                <input type="radio" id="star1" name="rating" value="Very Good">
                <label for="star1"></label>
            </div><br><br>

            How likely are you to recommend our site? <br>
            Select your score(0-10) <br>
            <select name="reccomond" class="formdropdown">
                <option value="0">0 - Not at all likely</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10 - Extreamly likely</option>
            </select><br><br>

            Would like to talk more?Leave your email.<br>
            <input type="text" name="email" class="email" placeholder="Email(optional)"> <br> <br>

            <input class="inputStyle" type="checkbox" id="checkbox" onclick="enableButton()">
            <span class="agree">By submitting this form, you agree to the processing of your personal data as described in the <a href="">Privacy Policy</a> </span><br><br>


            <input type="submit" class="subBtn" id="subBtn" name="submit" value="Submit" disabled>


        </form>

    </div>


</div>

<?php include_once("footer.php") ?>