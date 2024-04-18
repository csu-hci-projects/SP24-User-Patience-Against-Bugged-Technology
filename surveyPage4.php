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
            $quitOn = "(4)";
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
            <h4><center>Question 36</center><h4>
            <h5><center>Are you introverted or extroverted?</center><h5>
                <div>
                    <input type="radio" value="Introverted" id="Q1A1" name="Q36"/>
                    <label for="Q36A1">Introverted</label>
                </div>
                <div>
                    <input type="radio" value="Extroverted" id="Q36A2" name="Q36"/>
                    <label for="Q36A2">Extroverted</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q36A3" name="Q36"/>
                    <label for="Q36A3">Ambiverted</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 37</center><h4>
            <h5 id="Q37H5">Would you consider yourself a patient person?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q37A1" name="Q37"/>
                    <label for="Q37A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q37A2" name="Q37"/>
                    <label for="Q37A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 38</center><h4>
            <h5 id="Q38H5">Do you value material wealth or emotional wealth more?<h5>
                <div>
                    <input type="radio" value="Material" id="Q38A1" name="Q38"/>
                    <label for="Q38A1">Material Wealth</label>
                </div>
                <div>
                    <input type="radio" value="Emotional" id="Q38A2" name="Q38"/>
                    <label for="Q38A2">Emotional Wealth</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 39</center><h4>
            <h5 class = "hover-heading"><center><span>Which of the folowing would you say you are most scared of?</span></center><h5>
                <div>
                    <input type="radio" value="Heights" id="Q39A1" name="Q39"/>
                    <label for="Q39A1">Heights</label>
                </div>
                <div>
                    <input type="radio" value="Confined Spaces" id="Q39A2" name="Q39"/>
                    <label for="Q39A2">Confined Spaces</label>
                </div>
                <div>
                    <input type="radio" value="The Dark" id="Q39A3" name="Q39"/>
                    <label for="Q39A3">The Dark</label>
                </div>
                <div>
                    <input type="radio" value="Spiders" id="Q39A4" name="Q39"/>
                    <label for="Q39A4">Spiders</label>
                </div>
                <div>
                    <input type="radio" value="Supernatural" id="Q39A5" name="Q39"/>
                    <label for="Q39A5">Supernatural</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 40</center><h4>
            <h5><center>When there is an important task you need to complete, how do you go about it?</center><h5>
                <div>
                    <input type="radio" value="ASAP" id="Q40A1" name="Q40"/>
                    <label for="Q40A1">Start working immediately to finish as soon as possible</label>
                </div>
                <div>
                    <input type="radio" value="Procrastinate" id="Q40A2" name="Q40"/>
                    <label for="Q40A2">Procrastinate</label>
                </div>
                <div>
                    <input type="radio" value="Plan" id="Q40A3" name="Q40"/>
                    <label for="Q40A3">Plan and spread work over time</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 41</center><h4>
            <h5><center>What word would people most likely use to descibe you?</center><h5>
                <div>
                    <input type="radio" value="Smart" id="Q41A1" name="Q41"/>
                    <label for="Q41A1">Smart</label>
                </div>
                <div>
                    <input type="radio" value="Kind" id="Q41A2" name="Q41"/>
                    <label for="Q41A2">Kind</label>
                </div>
                <div>
                    <input type="radio" value="Impulsive" id="Q41A3" name="Q41"/>
                    <label for="Q41A3">Impulsive</label>
                </div>
                <div>
                    <input type="radio" value="Quiet" id="Q41A4" name="Q41"/>
                    <label for="Q41A4">Quiet</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 42</center><h4>
            <h5><center>Which of the following do you find most enjoyment in?</center><h5>
                <div>
                    <input type="radio" value="Books" id="Q42A1" name="Q42"/>
                    <label for="Q42A1">Books</label>
                </div>
                <div>
                    <input type="radio" value="Movies" id="Q42A2" name="Q42"/>
                    <label for="Q42A2">Movies</label>
                </div>
                <div>
                    <input type="radio" value="Video Games" id="Q42A3" name="Q42"/>
                    <label for="Q42A3">Video Games</label>
                </div>
                <div>
                    <input type="radio" value="TV" id="Q42A4" name="Q42"/>
                    <label for="Q42A4">TV Shows</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 43</center><h4>
            <h5 class = "hover-heading"><center><span>When something you own breaks, what is the first thing you do?</span></center><h5>
                <div>
                    <input type="radio" value="DIY" id="Q43A1" name="Q43"/>
                    <label for="Q43A1">Try to fix it myself</label>
                </div>
                <div>
                    <input type="radio" value="Discard" id="Q43A2" name="Q43"/>
                    <label for="Q43A2">Throw it away / replace it</label>
                </div>
                <div>
                    <input type="radio" value="Help" id="Q43A3" name="Q43"/>
                    <label for="Q43A3">Ask a professional to fix it</label>
                </div>
                <div>
                    <input type="radio" value="Ignore" id="Q43A4" name="Q43"/>
                    <label for="Q43A4">Try to ignore it</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 44</center><h4>
            <h5><center>If someone says a fact that is incorrect, how are you most likely to react?</center><h5>
                <div>
                    <input type="radio" value="Correct" id="Q44A1" name="Q44"/>
                    <label for="Q44A1">Correct them</label>
                </div>
                <div>
                    <input type="radio" value="Silence" id="Q44A2" name="Q44"/>
                    <label for="Q44A2">Stay silent</label>
                </div>
                <div>
                    <input type="radio" value="Question" id="Q44A3" name="Q44"/>
                    <label for="Q44A3">Question them</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 45</center><h4>
            <h5><center>Would you say you are good or bad at handling your own failures?</center><h5>
                <div>
                    <input type="radio" value="Good" id="Q45A1" name="Q10"/>
                    <label for="Q45A1">Good</label>
                </div>
                <div>
                    <input type="radio" value="Bad" id="Q45A2" name="Q10"/>
                    <label for="Q45A2">Bad</label>
                </div>
                <div>
                    <input type="radio" value="Not Sure" id="Q45A3" name="Q10"/>
                    <label for="Q45A3">Not Sure</label>
                </div>
        </div>
        <a href='surveyPage4.php?name=true' class="button quit-button">Quit Survey</a>
        <center>
        <a href="surveyPage5.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php"; // Should also include logging the time
    }
    function nextPage() {
        window.location.href = "surveyPage5.php"; // Change to the next page in survey 
    }
</script>