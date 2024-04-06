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
            <h4><center>Question 26</center><h4>
            <h5><center>Dogs or cats?</center><h5>
                <div>
                    <input type="radio" value="Under 18" id="Q26A1" name="Q26"/>
                    <label for="Q26A1">Dogs</label>
                </div><div>
                    <input type="radio" value="18-20" id="Q26A2" name="Q26"/>
                    <label for="Q26A2">Cats</label>
                </div><div>
                    <input type="radio" value="21-25" id="Q26A3" name="Q26"/>
                    <label for="Q26A3">Neither</label>          
                </div>
        </div>
        <a href="index.php" class="button quit-button">Quit Survey</a>
        <center>
        <a href=# class="button button1">Next Page</a>
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
