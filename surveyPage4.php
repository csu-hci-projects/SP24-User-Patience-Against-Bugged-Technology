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
            <h4><center>Question 36</center><h4>
            <h5><center>Are you introverted or extroverted?</center><h5>
                <div>
                    <input type="radio" value="Introverted" id="Q1A1" name="Q1"/>
                    <label for="Q1A1">Introverted</label>
                </div>
                <div>
                    <input type="radio" value="Extroverted" id="Q1A2" name="Q1"/>
                    <label for="Q1A2">Extroverted</label>
                </div>
                <div>
                    <label for="Q1A3">Ambiverted</label>
                    <input type="radio" value="" id="Q1A3" name="Q1"/>
                    <label for="Q1A3">Ambiverted</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 37</center><h4>
            <h5><center>Would you consider yourself a patient person?</center><h5>
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
            <h4><center>Question 38</center><h4>
            <h5><center>Do you value material wealth or emotional wealth more?</center><h5>
                <div>
                    <input type="radio" value="Material" id="Q3A1" name="Q3"/>
                    <label for="Q3A1">Material Wealth</label>
                </div>
                <div>
                    <input type="radio" value="Emotional" id="Q3A2" name="Q3"/>
                    <label for="Q3A2">Emotional Wealth</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 39</center><h4>
            <h5><center>Which of the folowing would you say you are most scared of?</center><h5>
                <div>
                    <input type="radio" value="Heights" id="Q4A1" name="Q4"/>
                    <label for="Q4A1">Heights</label>
                </div>
                <div>
                    <input type="radio" value="Confined Spaces" id="Q4A2" name="Q4"/>
                    <label for="Q4A2">Confined Spaces</label>
                </div>
                <div>
                    <input type="radio" value="The Dark" id="Q4A3" name="Q4"/>
                    <label for="Q4A3">The Dark</label>
                </div>
                <div>
                    <input type="radio" value="Spiders" id="Q4A4" name="Q4"/>
                    <label for="Q4A4">Spiders</label>
                </div>
                <div>
                    <input type="radio" value="Supernatural" id="Q4A5" name="Q4"/>
                    <label for="Q4A5">Supernatural</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q5A1" name="Q5"/>
                    <label for="Q5A1">Answert</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q6A1" name="Q6"/>
                    <label for="Q6A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q7A1" name="Q7"/>
                    <label for="Q7A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q8A1" name="Q8"/>
                    <label for="Q8A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q9A1" name="Q9"/>
                    <label for="Q9A1">Answer</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q3A1" name="Q10"/>
                    <label for="Q3A1">Answer</label>
                </div>
        </div>
        <a href="index.php" class="button quit-button">Quit Survey</a>
        <center>
        <a href="surveyPage5.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "index.php"; // Will be changed but for now main page 
    }
    function nextPage() {
        window.location.href = "surveyPage5.php"; // Change to the next page in survey 
    }
</script>