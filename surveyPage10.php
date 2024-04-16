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
                    <input type="radio" value="Yes" id="Q2A1" name="Q2"/>
                    <label for="Q2A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q2A2" name="Q2"/>
                    <label for="Q2A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 93</center><h4>
            <h5><center>When you experience anger, do you feel hotter?</center><h5>
                <div>
                    <input type="radio" value="Never" id="Q3A1" name="Q3"/>
                    <label for="Q3A1">I've never noticed any temperature change</label>
                </div>
                <div>
                    <input type="radio" value="Yes" id="Q3A2" name="Q3"/>
                    <label for="Q3A2">I do get hotter</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q3A3" name="Q3"/>
                    <label for="Q3A3">I don't change temperatures</label>
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
            <h5><center>Do you hate the quiz?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q5A1" name="Q5"/>
                    <label for="Q5A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q5A2" name="Q5"/>
                    <label for="Q5A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 96</center><h4>
            <h5><center>Would you take this quiz again?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q6A1" name="Q6"/>
                    <label for="Q6A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q6A2" name="Q6"/>
                    <label for="Q6A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 97</center><h4>
            <h5><center>Would you say you get frustrated often?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q7A1" name="Q7"/>
                    <label for="Q7A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q7A2" name="Q7"/>
                    <label for="Q7A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 98</center><h4>
            <h5><center>Are you frustrated?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q8A1" name="Q8"/>
                    <label for="Q8A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q8A2" name="Q8"/>
                    <label for="Q8A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 99</center><h4>
            <h5><center>How close are you to giving up?</center><h5>
                <div>
                    <input type="radio" value="Never" id="Q9A1" name="Q9"/>
                    <label for="Q9A1">I could do this all day</label>
                </div>
                <div>
                    <input type="radio" value="Close" id="Q9A2" name="Q9"/>
                    <label for="Q9A2">Please let this be the last page</label>
                </div>
                
                
        </div>
        <div class="question-container">
            <h4><center>Question 100</center><h4>
            <h5><center>If I told you this survey was never going to end, how would that make you feel?</center><h5>
                <div>
                    <input type="radio" value="Angry" id="Q10A1" name="Q10"/>
                    <label for="Q10A1">Angry</label>
                </div>
                <div>
                    <input type="radio" value="Sad" id="Q10A2" name="Q10"/>
                    <label for="Q10A2">Sad</label>
                </div>
                <div>
                    <input type="radio" value="Overwhelmed" id="Q10A3" name="Q10"/>
                    <label for="Q10A3">Overwhelmed</label>
                </div>
                <div>
                    <input type="radio" value="Frustrated" id="Q10A4" name="Q10"/>
                    <label for="Q10A4">Frustrated</label>
                </div>
                <div>
                    <input type="radio" value="Happy" id="Q10A5" name="Q10"/>
                    <label for="Q10A5">Happy</label>
                </div>
                <div>
                    <input type="radio" value="Excited" id="Q10A6" name="Q10"/>
                    <label for="Q10A6">Excited</label>
                </div>
        </div>
        <a href="afterSurvey.php" onclick="quitSurvey()" class="button quit-button">Quit Survey</a>
        <center>
        <a href="afterSurvey.php" class="button button1">Complete Survey</a>
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