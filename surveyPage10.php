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
            <h4><center>Question 91</center><h4>
            <h5><center>Do you feel angry?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q91A1" name="Q91"/>
                    <label for="Q91A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q91A2" name="Q91"/>
                    <label for="Q91A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 92</center><h4>
            <h5><center>Do you feel tired?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q92A1" name="Q92"/>
                    <label for="Q92A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q92A2" name="Q92"/>
                    <label for="Q92A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 93</center><h4>
            <h5><center>When you experience anger, do you feel hotter?</center><h5>
                <div>
                    <input type="radio" value="Never" id="Q93A1" name="Q93"/>
                    <label for="Q93A1">I've never noticed any temperature change</label>
                </div>
                <div>
                    <input type="radio" value="Yes" id="Q93A2" name="Q93"/>
                    <label for="Q93A2">I do get hotter</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q93A3" name="Q93"/>
                    <label for="Q93A3">I don't change temperatures</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 94</center><h4>
            <h5><center>Are you tired of this quiz?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q94A1" name="Q94"/>
                    <label for="Q94A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q94A2" name="Q94"/>
                    <label for="Q94A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 95</center><h4>
            <h5 id="Q95H5">Do you hate the quiz?<h5>
                <div>
                    <input type="radio" value="Yes" id="Q95A1" name="Q95"/>
                    <label for="Q95A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q95A2" name="Q95"/>
                    <label for="Q95A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 96</center><h4>
            <h5><center>Would you take this quiz again?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q96A1" name="Q96"/>
                    <label for="Q96A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q96A2" name="Q96"/>
                    <label for="Q96A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 97</center><h4>
            <h5><center>Would you say you get frustrated often?</center><h5>
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
            <h5 id="Q98H5">Are you frustrated?<h5>
                <div>
                    <input type="radio" value="Yes" id="Q98A1" name="Q98"/>
                    <label for="Q98A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q98A2" name="Q98"/>
                    <label for="Q98A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 99</center><h4>
            <h5><center>How close are you to giving up?</center><h5>
                <div>
                    <input type="radio" value="Never" id="Q99A1" name="Q99"/>
                    <label for="Q99A1">I could do this all day</label>
                </div>
                <div>
                    <input type="radio" value="Close" id="Q99A2" name="Q99"/>
                    <label for="Q99A2">Please let this be the last page</label>
                </div>
                
                
        </div>
        <div class="question-container">
            <h4><center>Question 100</center><h4>
            <h5><center>If I told you this survey was never going to end, how would that make you feel?</center><h5>
                <div>
                    <input type="radio" value="Angry" id="Q100A1" name="Q100"/>
                    <label for="Q100A1">Angry</label>
                </div>
                <div>
                    <input type="radio" value="Sad" id="Q100A2" name="Q100"/>
                    <label for="Q100A2">Sad</label>
                </div>
                <div>
                    <input type="radio" value="Overwhelmed" id="Q100A3" name="Q100"/>
                    <label for="Q100A3">Overwhelmed</label>
                </div>
                <div>
                    <input type="radio" value="Frustrated" id="Q100A4" name="Q100"/>
                    <label for="Q100A4">Frustrated</label>
                </div>
                <div>
                    <input type="radio" value="Happy" id="Q100A5" name="Q100"/>
                    <label for="Q100A5">Happy</label>
                </div>
                <div>
                    <input type="radio" value="Excited" id="Q100A6" name="Q100"/>
                    <label for="Q100A6">Excited</label>
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