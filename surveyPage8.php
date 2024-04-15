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
            <h4><center>Question 76</center><h4>
            <h5><center>Do you use social media?</center><h5>
                <div>
                    <input type="radio" value="" id="Q1A1" name="Q1"/>
                    <label for="Q1A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q1A2" name="Q1"/>
                    <label for="Q1A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 77</center><h4>
            <h5><center>Do you use Instagram?</center><h5>
            <div>
                    <input type="radio" value="" id="Q77A1" name="Q77"/>
                    <label for="Q77A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q77A2" name="Q77"/>
                    <label for="Q77A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 78</center><h4>
            <h5><center>Do you use Facebook?</center><h5>
                <div>
                    <input type="radio" value="" id="Q3A1" name="Q3"/>
                    <label for="Q3A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q3A2" name="Q3"/>
                    <label for="Q3A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 79</center><h4>
            <h5><center>Do you use Snapchat?</center><h5>
                <div>
                    <input type="radio" value="" id="Q79A1" name="Q79"/>
                    <label for="Q79A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q79A2" name="Q79"/>
                    <label for="Q79A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 80</center><h4>
            <h5><center>Do you use TikTok?</center><h5>
                <div>
                    <input type="radio" value="" id="Q5A1" name="Q5"/>
                    <label for="Q5A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q5A2" name="Q5"/>
                    <label for="Q5A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 81</center><h4>
            <h5><center>Do you use Pinterest?</center><h5>
                <div>
                    <input type="radio" value="" id="Q6A1" name="Q6"/>
                    <label for="Q6A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q6A2" name="Q6"/>
                    <label for="Q6A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 82</center><h4>
            <h5><center>Have you ever rated an app in the App Store?</center><h5>
                <div>
                    <input type="radio" value="" id="Q7A1" name="Q7"/>
                    <label for="Q7A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q7A2" name="Q7"/>
                    <label for="Q7A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 83</center><h4>
            <h5><center>Do you use Youtube? </center><h5>
                <div>
                    <input type="radio" value="" id="Q8A1" name="Q8"/>
                    <label for="Q8A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q8A2" name="Q8"/>
                    <label for="Q8A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 84</center><h4>
            <h5><center>Who do you follow on social media?</center><h5>
                <div>
                    <input type="radio" value="" id="Q9A1" name="Q9"/>
                    <label for="Q9A1">Friends and Family</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q9A2" name="Q9"/>
                    <label for="Q9A2">Influencers</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q9A3" name="Q9"/>
                    <label for="Q9A3">All of the above</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q9A4" name="Q9"/>
                    <label for="Q9A4">I don't use social media</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 85</center><h4>
            <h5><center>Would the world be a better place without social media?</center><h5>
                <div>
                    <input type="radio" value="" id="Q10A1" name="Q10"/>
                    <label for="Q10A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q10A2" name="Q10"/>
                    <label for="Q10A2">No</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q10A3" name="Q10"/>
                    <label for="Q10A3">Maybe</label>
                </div>
        </div>
        <a href="afterSurvey.php" onclick="quitSurvey()" class="button quit-button">Quit Survey</a>
        <center>
        <a href="surveyPage9.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php";
    }
    function nextPage() {
        window.location.href = "surveyPage9.php"; // Change to the next page in survey 
    }
</script>