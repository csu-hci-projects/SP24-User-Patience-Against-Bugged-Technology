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
            $quitOn = "8, ";
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
        <div class="question-container">
            <h4><center>Question 76</center><h4>
            <h5 class = "hover-heading"><center><span>Do you use social media?</span></center><h5>
                <div>
                    <input type="radio" value="" id="Q1A1" name="Q76"/>
                    <label for="Q76A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q76A2" name="Q76"/>
                    <label for="Q76A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 77</center><h4>
            <h5 id="Q77H5">Do you use Instagram?<h5>
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
                    <input type="radio" value="" id="Q78A1" name="Q78"/>
                    <label for="Q78A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q78A2" name="Q78"/>
                    <label for="Q78A2">No</label>
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
            <h5 id="Q80H5">Do you use TikTok?<h5>
                <div>
                    <input type="radio" value="" id="Q80A1" name="Q80"/>
                    <label for="Q80A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q80A2" name="Q80"/>
                    <label for="Q80A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 81</center><h4>
            <h5><center>Do you use Pinterest?</center><h5>
                <div>
                    <input type="radio" value="" id="Q81A1" name="Q81"/>
                    <label for="Q81A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q81A2" name="Q81"/>
                    <label for="Q81A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 82</center><h4>
            <h5 id="Q82H5">Have you ever rated an app in the App Store?<h5>
                <div>
                    <input type="radio" value="" id="Q82A1" name="Q82"/>
                    <label for="Q82A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q82A2" name="Q82"/>
                    <label for="Q82A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 83</center><h4>
            <h5 class = "hover-heading"><center><span>Do you use Youtube?</span> </center><h5>
                <div>
                    <input type="radio" value="" id="Q83A1" name="Q83"/>
                    <label for="Q83A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q83A2" name="Q83"/>
                    <label for="Q83A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 84</center><h4>
            <h5 id="Q84H5">Who do you follow on social media?<h5>
                <div>
                    <input type="radio" value="" id="Q84A1" name="Q84"/>
                    <label for="Q84A1">Friends and Family</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q84A2" name="Q84"/>
                    <label for="Q84A2">Influencers</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q84A3" name="Q84"/>
                    <label for="Q84A3">All of the above</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q84A4" name="Q84"/>
                    <label for="Q84A4">I don't use social media</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 85</center><h4>
            <h5><center>Would the world be a better place without social media?</center><h5>
                <div>
                    <input type="radio" value="" id="Q85A1" name="Q85"/>
                    <label for="Q85A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q85A2" name="Q85"/>
                    <label for="Q85A2">No</label>
                </div>
                <div>
                    <input type="radio" value="" id="Q85A3" name="Q85"/>
                    <label for="Q85A3">Maybe</label>
                </div>
        </div>
        <a href='surveyPage8.php?name=true' class="button quit-button">Quit Survey</a>
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