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
            $quitOn = "(7)";
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
            <h4><center>Question 66</center><h4>
            <h5><center>You are standing on a train track in front of a lever, and a train is coming. On the current track, there are 5 workers who do not see the train, but on the other track accessed by pulling the lever, there is 1 worker. Do you pull the lever?</center><h5>
                <div>
                    <input type="radio" value="I pull the lever, killing 1 worker" id="Q66A1" name="Q66"/>
                    <label for="Q66A1">I pull the lever, killing 1 worker</label>
                </div>
                <div>
                    <input type="radio" value="I don't pull the lever and let the 5 die" id="Q66A2" name="Q66"/>
                    <label for="Q66A2">I don't pull the lever and let the 5 die</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 67</center><h4>
            <h5><center>Which do you think came first, the chicken or the egg?</center><h5>
                <div>
                    <input type="radio" value="Chicken" id="Q67A1" name="Q67"/>
                    <label for="Q67A1">Chicken</label>
                </div>
                <div>
                    <input type="radio" value="Egg" id="Q67A2" name="Q67"/>
                    <label for="Q67A1">Egg</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 68</center><h4>
            <h5><center>If someone made a clone of you, who had all of your memmories and your exact body, would you consider that clone "you", or would you consider the clone to be "someone else", so to speak?</center><h5>
                <div>
                    <input type="radio" value="If we ave the same memories/body then the clone is me" id="Q68A1" name="Q68"/>
                    <label for="Q68A1">If we ave the same memories/body then the clone is me</label>
                </div>
                <div>
                    <input type="radio" value="the clone is someone else" id="Q68A2" name="Q68"/>
                    <label for="Q68A2">The clone is someone else</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 69</center><h4>
            <h5 id = "Q69H5">Do you think music is a universal language?<h5>
                <div>
                    <input type="radio" value="Yes" id="Q69A1" name="Q69"/>
                    <label for="Q69A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q69A2" name="Q69"/>
                    <label for="Q69A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 70</center><h4>
            <h5><center>Do you think the world would be more peacefull if kids were in charge?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q70A1" name="Q70"/>
                    <label for="Q70A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q70A1" name="Q70"/>
                    <label for="Q70A1">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 71</center><h4>
            <h5><center>Do you think the world would be more peaceful if robots were in charge?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q71A1" name="Q6"/>
                    <label for="Q71A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q71A2" name="Q6"/>
                    <label for="Q71A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 72</center><h4>
            <h5><center>If it was possible to live forever, would you want to?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q72A1" name="Q72"/>
                    <label for="Q72A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q72A2" name="Q72"/>
                    <label for="Q72A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 73</center><h4>
            <h5><center>Can a person be happy and sad at the same time?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q73A1" name="Q73"/>
                    <label for="Q73A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q73A2" name="Q73"/>
                    <label for="Q73A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 74</center><h4>
            <h5 class = "hover-heading"><center><span>Do you think humanity is inherantly good or bad?</span></center><h5>
                <div>
                    <input type="radio" value="Good" id="Q74A1" name="Q74"/>
                    <label for="Q74A1">Good</label>
                </div>
                <div>
                    <input type="radio" value="Bad" id="Q74A2" name="Q74"/>
                    <label for="Q74A2">Bad</label>
                </div>
                <div>
                    <input type="radio" value="Neither" id="Q74A3" name="Q74"/>
                    <label for="Q74A3">Neither</label>
                </div>
                <div>
                    <input type="radio" value="Both" id="Q74A4" name="Q74"/>
                    <label for="Q74A4">Both</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 75</center><h4>
            <h5 class = "hover-heading"><center><span>Would life be worthwhile if you never experienced pain?</span></center><h5>
                <div>
                    <input type="radio" value="Yes" id="Q75A1" name="Q75"/>
                    <label for="Q75A1">Yes</label>
                </div>
                <div>
                    <input type="radio" value="No" id="Q75A2" name="Q75"/>
                    <label for="Q75A2">No</label>
                </div>
        </div>
        <a href='surveyPage7.php?name=true' class="button quit-button">Quit Survey</a>
        <center>
        <a href="surveyPage8.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php"; 
    }
    function nextPage() {
        window.location.href = "surveyPage8.php"; // Change to the next page in survey 
    }
</script>