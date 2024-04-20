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
            $quitOn = "10, ";
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
        <div class="question-container" id = "question96">
            <h4><center>Question 96</center><h4>
            <h5><center>Do you feel angry?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q96A1" name="Q96"/>
                    <label for="Q96A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q96A2" name="Q96"/>
                    <label for="Q96A2">No</label>
                </div>
        </div>
        <div class="question-container" id = "question97" >
            <h4><center>Question 97</center><h4>
            <h5><center>Do you feel tired?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q97A1" name="Q97"/>
                    <label for="Q97A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q97A2" name="Q97"/>
                    <label for="Q97A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 98</center><h4>
            <h5><center>When you experience anger, do you feel hotter?</center><h5>
                <div>
                    <input type="radio" value="Never" id="Q98A1" name="Q98"/>
                    <label for="Q98A1">I've never noticed any temperature change</label>
                </div>
                <div>
                    <input type="radio" value="Yes" id="Q98A2" name="Q98"/>
                    <label for="Q98A2">I do get hotter</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q98A3" name="Q98"/>
                    <label for="Q98A3">I don't change temperatures</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 99</center><h4>
            <h5><center>Are you tired of this quiz?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q99A1" name="Q99"/>
                    <label for="Q99A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q99A2" name="Q99"/>
                    <label for="Q99A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 100</center><h4>
            <h5 id="Q100H5">Do you hate the quiz?<h5>
                <div>
                    <input type="radio" value="Yes" id="Q100A1" name="Q100"/>
                    <label for="Q100A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q100A2" name="Q100"/>
                    <label for="Q100A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 101</center><h4>
            <h5><center>Would you take this quiz again?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q101A1" name="Q101"/>
                    <label for="Q101A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q101A2" name="Q101"/>
                    <label for="Q101A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 102</center><h4>
            <h5><center>Would you say you get frustrated often?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q102A1" name="Q102"/>
                    <label for="Q102A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q102A2" name="Q102"/>
                    <label for="Q102A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 103</center><h4>
            <h5 id="Q103H5">Are you frustrated?<h5>
                <div>
                    <input type="radio" value="Yes" id="Q103A1" name="Q103"/>
                    <label for="Q103A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q103A2" name="Q103"/>
                    <label for="Q103A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 104</center><h4>
            <h5 id="Q104H5">How close are you to giving up?</center><h5>
                <div>
                    <input type="radio" value="Never" id="Q104A1" name="Q104"/>
                    <label for="Q104A1">I could do this all day</label>
                </div>
                <div>
                    <input type="radio" value="Close" id="Q104A2" name="Q104"/>
                    <label for="Q104A2">Please let this be the last page</label>
                </div>
                
                
        </div>
        <div class="question-container">
            <h4><center>Question 105</center><h4>
            <h5><center>If I told you this survey was never going to end, how would that make you feel?</center><h5>
                <div>
                    <input type="radio" value="Angry" id="Q105A1" name="Q105"/>
                    <label for="Q105A1">Angry</label>
                </div>
                <div>
                    <input type="radio" value="Sad" id="Q105A2" name="Q105"/>
                    <label for="Q105A2">Sad</label>
                </div>
                <div>
                    <input type="radio" value="Overwhelmed" id="Q105A3" name="Q105"/>
                    <label for="Q105A3">Overwhelmed</label>
                </div>
                <div>
                    <input type="radio" value="Frustrated" id="Q105A4" name="Q105"/>
                    <label for="Q105A4">Frustrated</label>
                </div>
                <div>
                    <input type="radio" value="Happy" id="Q105A5" name="Q105"/>
                    <label for="Q105A5">Happy</label>
                </div>
                <div>
                    <input type="radio" value="Excited" id="Q105A6" name="Q105"/>
                    <label for="Q105A6">Excited</label>
                </div>
        </div>
        <a href='surveyPage10.php?name=true' class="button quit-button">Quit Survey</a>
        <center>
        <a href='surveyPage1.php?name=true' class="button quit-button">Complete Survey</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php"; 
    }
    function completeSurvey() {
        window.location.href = "afterSurvey.php"; 
    }
</script>