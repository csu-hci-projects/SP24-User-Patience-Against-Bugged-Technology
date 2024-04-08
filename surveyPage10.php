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
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q1A1" name="Q1"/>
                    <label for="Q1A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question</center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q2A1" name="Q2"/>
                    <label for="Q2A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question </center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q3A1" name="Q3"/>
                    <label for="Q3A1">Answer</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question</center><h4>
            <h5><center>?</center><h5>
                <div>
                    <input type="radio" value="" id="Q4A1" name="Q4"/>
                    <label for="Q4A1">Answer</label>
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