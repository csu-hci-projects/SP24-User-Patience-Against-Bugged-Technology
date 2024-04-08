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
            <h4><center>Question 91</center><h4>
            <h5><center>Do you feel angry?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q1A1" name="Q1"/>
                    <label for="Q1A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q1A2" name="Q1"/>
                    <label for="Q1A2">No</label>
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
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q3A1" name="Q3"/>
                    <label for="Q3A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 94</center><h4>
            <h5><center>Are you tired of this quiz?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q4A1" name="Q4"/>
                    <label for="Q4A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q4A2" name="Q4"/>
                    <label for="Q4A2">No</label>
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
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q7A1" name="Q7"/>
                    <label for="Q7A1">Answer</label>
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
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q9A1" name="Q9"/>
                    <label for="Q9A1">Answer</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 100</center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q3A1" name="Q10"/>
                    <label for="Q3A1">Answer</label>
                </div>
        </div>
        <a href="index.php" class="button quit-button">Quit Survey</a>
        <center>
        <a href=# class="button button1">Complete Survey</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "index.php"; // Will be changed but for now main page 
    }
    function nextPage() {
        window.location.href = "next_page.php"; // Change to the next page in survey 
    }
</script>