<!DOCTYPE html>
<html lang ="en" >
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Survey </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="javaFunctions.js" defer></script>
        <meta name="description" content="Survey Page for Cs464 Experiment">
        <meta name="keywords" content="cs464, CSU, CSS, HTML">
    </head>
    <?php
        function getMyQuitTime(){
            $myfile = fopen("testing_output.txt", "a") or die("Unable to open file!");
            $quitOn = "5, ";
            fwrite($myfile, $quitOn);
            date_default_timezone_set("America/New_York");
            $start_time = date("h:i:sa");
            fwrite($myfile, $start_time);
            $txt = ", ";
            fwrite($myfile, $txt);
            fclose($myfile);
            header('Location: ./afterSurvey.php');
        }
        if (isset($_GET['name'])) {
            getMyQuitTime();
            
        }
    ?>
    <body>
        <br><br><br><br>
        <div class="question-container">
            <h4><center>Question 46</center><h4>
            <h5><center>Do you like plants?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q46A1" name="Q46"/>
                    <label for="Q46A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q46A2" name="Q46"/>
                    <label for="Q46A2">No</label>
                </div>
                <div>
                    <input type="radio" value="Somewhat" id="Q46A3" name="Q46"/>
                    <label for="Q46A3">Somewhat</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 47</center><h4>
            <h5><center>Do you like house plants?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q47A1" name="Q47"/>
                    <label for="Q47A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q47A2" name="Q47"/>
                    <label for="Q47A2">No</label>
                </div>
                <div>
                    <input type="radio" value="Somewhat" id="Q47A3" name="Q47"/>
                    <label for="Q47A3">Somewhat</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 48</center><h4>
            <h5><center>Which type of plant would you choose from flower, cactus, or trees?</center><h5>
                <div>
                    <input type="radio" value="Cactus" id="Q48A1" name="Q48"/>
                    <label for="Q48A1">Cactus</label>
                </div>
                <div>
                    <input type="radio" value="Flower" id="Q48A2" name="Q48"/>
                    <label for="Q48A2">Flower</label>
                </div>
                <div>
                    <input type="radio" value="Trees" id="Q48A3" name="Q48"/>
                    <label for="Q48A3">Trees</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 49</center><h4>
            <h5><center>Would you like to vacation somewhere tropical?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q49A1" name="Q49"/>
                    <label for="Q49A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q49A2" name="Q49"/>
                    <label for="Q49A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 50</center><h4>
            <h5><center>Would you rather live somewhere humid or dry?</center><h5>
                <div>
                    <input type="radio" value="Humid" id="Q50A1" name="Q50"/>
                    <label for="Q50A1">Humid</label>
                </div>
                <div>
                    <input type="radio" value="Dry" id="Q50A2" name="Q50"/>
                    <label for="Q50A2">Dry</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 51</center><h4>
            <h5><center>Would you rather live in a hot, cold, or mild climate?</center><h5>
                <div>
                    <input type="radio" value="Hot" id="Q51A1" name="Q51"/>
                    <label for="Q51A1">Hot</label>
                </div>
                <div>
                    <input type="radio" value="Cold" id="Q51A2" name="Q51"/>
                    <label for="Q51A2">Cold</label>
                </div>
                <div>
                    <input type="radio" value="Mild" id="Q51A3" name="Q51"/>
                    <label for="Q51A3">Mild</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 52</center><h4>
            <h5 id="Q52H5">Would you prefer to be somewhere landlocked or coastal?<h5>
                <div>
                    <input type="radio" value="Landlocked" id="Q52A1" name="Q52"/>
                    <label for="Q52A1">Landlocked</label>
                </div>
                <div>
                    <input type="radio" value="Coastal" id="Q52A2" name="Q52"/>
                    <label for="Q52A2">Coastal</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 53</center><h4>
            <h5 id="Q53H5">Do you prefer oceans, lakes, or rivers?<h5>
                <div>
                    <input type="radio" value="Oceans" id="Q53A1" name="Q53"/>
                    <label for="Q53A1">Oceans</label>
                </div>
                <div>
                    <input type="radio" value="Lakes" id="Q53A2" name="Q53"/>
                    <label for="Q53A2">Lakes</label>
                </div>
                <div>
                    <input type="radio" value="Rivers" id="Q53A3" name="Q53"/>
                    <label for="Q53A3">Rivers</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 54</center><h4>
            <h5><center>Do you prefer mountains, plains, or valleys?</center><h5>
                <div>
                    <input type="radio" value="Mountains" id="Q54A1" name="Q54"/>
                    <label for="Q54A1">Mountains</label>
                </div>
                <div>
                    <input type="radio" value="Plains" id="Q54A2" name="Q54"/>
                    <label for="Q54A2">Plains</label>
                </div>
                <div>
                    <input type="radio" value="Valleys" id="Q54A3" name="Q54"/>
                    <label for="Q54A3">Valleys</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 55</center><h4>
            <h5><center>Do you enjoy outdoor activities?(walking, surfing, etc)</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q55A1" name="Q55"/>
                    <label for="Q55A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q55A2" name="Q55"/>
                    <label for="Q55A2">No</label>
                </div>
        </div>
        <a href='surveyPage5.php?name=true' class="button quit-button">Quit Survey</a>
        <center>
        <a href= "surveyPage6.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php"; 
    }
    function nextPage() {
        window.location.href = "surveyPage6.php"; 
    }
</script>