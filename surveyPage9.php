<!DOCTYPE html>
<html lang ="en" >
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Survey </title>
        <meta charset="UTF-8">
        <meta name="description" content="Survey Page for Cs464 Experiment">
        <meta name="keywords" content="cs464, CSU, CSS, HTML">
    </head>
    <body>
        <br><br><br><br>
        <div class="question-container">
            <h4><center>Question 86</center><h4>
            <h5><center>What is your favorite ice cream flavor?</center><h5>
            <div>
                <input type="text" id="Q86A1" name="Q86"/>
            </div>
        </div>
        <div class="question-container">
            <h4><center>Question 87</center><h4>
            <h5 class = "hover-heading"><center><span>What is your favorite animal?</span></center><h5>
                <div>
                    <input type="text" id="Q87A1" name="Q87"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 88</center><h4>
            <h5><center>What is your favorite type of pizza?</center><h5>
                <div>
                    <input type="text" id="Q88A1" name="Q88"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 89</center><h4>
            <h5><center>What is your favorite subject to study?</center><h5>
                <div>
                    <input type="text" id="Q89A1" name="Q89"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 90</center><h4>
            <h5><center>What is your favorite movie?</center><h5>
                <div>
                    <input type="text" id="Q90A1" name="Q90"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 91</center><h4>
            <h5><center>What is your favorite TV show?</center><h5>
                <div>
                    <input type="text" id="Q91A1" name="Q91"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 92</center><h4>
            <h5><center>What is your favorite song?</center><h5>
                <div>
                    <input type="text" id="Q92A1" name="Q92"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 93</center><h4>
            <h5 class = "hover-heading"><center><span>What is your favorite item of clothing?</span></center><h5>
                <div>
                    <input type="text" id="Q93A1" name="Q93"/>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 94</center><h4>
            <h5><center>What is your favorite month oof the year?</center><h5>
                <div>
                    <input type="text" id="Q94A1" name="Q94"/>
                </div> 
        </div>
        <div class="question-container">
            <h4><center>Question 95</center><h4>
            <h5><center>What is your favorite beach activity?</center><h5>
                <div>
                    <input type="text" id="Q95A1" name="Q95"/>
                </div>
        </div>
        <a href="afterSurvey.php" onclick="quitSurvey()" class="button quit-button">Quit Survey</a>
        <center>
        <a href="surveyPage10.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php"; 
    }
    function nextPage() {
        window.location.href = "surveyPage10.php"; // Change to the next page in survey 
    }
</script>