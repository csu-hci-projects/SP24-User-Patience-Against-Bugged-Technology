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
                    <input type="radio" value="" id="Q26A1" name="Q26"/>
                    <label for="Q26A1">Dogs</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q26A2" name="Q26"/>
                    <label for="Q26A2">Cats</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 27</center><h4>
            <h5><center>White, milk, or dark chocolate?</center><h5>
                <div>
                    <input type="radio" value="" id="Q27A1" name="Q27"/>
                    <label for="Q27A1">White</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q27A2" name="Q27"/>
                    <label for="Q27A2">Milk</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q27A3" name="Q27"/>
                    <label for="Q27A3">Chocolate</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 28</center><h4>
            <h5><center>Do you prefer waffles or pancakes?</center><h5>
                <div>
                    <input type="radio" value="" id="Q28A1" name="Q28"/>
                    <label for="Q28A1">Waffles</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q28A2" name="Q28"/>
                    <label for="Q28A2">Pancakes</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 29</center><h4>
            <h5><center>Would you rather have a sweet or savory breakfast?</center><h5>
                <div>
                    <input type="radio" value="" id="Q29A1" name="Q29"/>
                    <label for="Q29A1">Sweet</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q29A2" name="Q29"/>
                    <label for="Q29A2">Savory</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 30</center><h4>
            <h5><center>Do you prefer to wear more masculine or feminine clothes?</center><h5>
                <div>
                    <input type="radio" value="" id="Q30A1" name="Q30"/>
                    <label for="Q30A1">Masculine</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q30A2" name="Q30"/>
                    <label for="Q30A2">Feminine</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 31</center><h4>
            <h5><center>Do you like morning or night showers better?</center><h5>
                <div>
                    <input type="radio" value="" id="Q31A1" name="Q31"/>
                    <label for="Q31A1">Morning</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q31A2" name="Q31"/>
                    <label for="Q31A2">Night</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 32</center><h4>
            <h5><center>Vampires or werewolves?</center><h5>
                <div>
                    <input type="radio" value="" id="Q32A1" name="Q32"/>
                    <label for="Q32A1">Vampires</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q32A2" name="Q32"/>
                    <label for="Q32A2">Werewolves</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 33</center><h4>
            <h5><center>Burritos or tacos?</center><h5>
                <div>
                    <input type="radio" value="" id="Q33A1" name="Q33"/>
                    <label for="Q33A1">Burritos</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q33A2" name="Q33"/>
                    <label for="Q33A2">Tacos</label>
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
        <a href="surveyPage4.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "index.php"; // Will be changed but for now main page 
    }
    function nextPage() {
        window.location.href = "surveyPage4.php"; // Change to the next page in survey 
    }
</script>