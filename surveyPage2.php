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
            $quitOn = "(2)";
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
        <div class="question-container" id="question16">
            <h4><center>Question 16</center><h4>
            <h5><center>What is your favorite color?</center><h5>
                <div>
                    <input type="radio" value="Red" id="Q16A1" name="Q16"/>
                    <label for="Q16A1">Red</label>
                </div><div>
                    <input type="radio" value="Orange" id="Q16A2" name="Q16"/>
                    <label for="Q16A2">Orange</label>
                </div><div>
                    <input type="radio" value="Yellow" id="Q16A3" name="Q16"/>
                    <label for="Q16A3">Yellow</label>
                </div><div>
                    <input type="radio" value="Green" id="Q16A4" name="Q16"/>
                    <label for="Q16A4">Green</label>
                </div><div>
                    <input type="radio" value="Blue" id="Q16A5" name="Q16"/>
                    <label for="Q16A5">Blue</label>
                </div><div>
                    <input type="radio" value="Violet" id="Q16A6" name="Q16"/>
                    <label for="Q16A6">Violet</label>
                </div><div>
                    <input type="radio" value="Pink" id="Q16A7" name="Q16"/>
                    <label for="Q16A7">Pink</label>
                </div><div>
                    <input type="radio" value="Black" id="Q16A8" name="Q16"/>
                    <label for="Q16A8">Black</label>
                </div><div>
                    <input type="radio" value="White" id="Q16A9" name="Q16"/>
                    <label for="Q16A9">White</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 17</center><h4>
            <h5><center>Pick your favorite of these animals :</center><h5>
                <div>
                    <input type="radio" value="Lion" id="Q17A1" name="Q17"/>
                    <label for="Q17A1">Lion</label>
                </div>
                <div>
                    <input type="radio" value="Tiger" id="Q17A2" name="Q17"/>
                    <label for="Q17A2">Tiger</label>
                </div>
                <div>
                    <input type="radio" value="Bear" id="Q17A3" name="Q17"/>
                    <label for="Q17A3">Bear</label>
                </div>
                <div>
                    <input type="radio" value="Wolf" id="Q17A4" name="Q17"/>
                    <label for="Q17A4">Wolf</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 18</center><h4>
            <h5><center>What is your favorite thing to do at home?</center><h5>
                <div>
                    <input type="radio" value="Sleep" id="Q18A1" name="Q18"/>
                    <label for="Q18A1">Sleep</label>
                </div>
                <div>
                    <input type="radio" value="Eat" id="Q18A2" name="Q18"/>
                    <label for="Q18A2">Eat</label>
                </div>
                <div>
                    <input type="radio" value="Play Games" id="Q18A3" name="Q18"/>
                    <label for="Q18A3">Play Games</label>
                </div>
                <div>
                    <input type="radio" value="Watch TV" id="Q18A4" name="Q18"/>
                    <label for="Q18A4">Watch TV</label>
                </div>
                <div>
                    <input type="radio" value="HangWPartner" id="Q18A5" name="Q18"/>
                    <label for="Q18A5">Hang out with Partner</label>
                </div>
                <div>
                    <input type="radio" value="HangWPets" id="Q18A6" name="Q18"/>
                    <label for="Q18A6">Hang out with pets</label>
                </div>
                <div>
                    <input type="radio" value="Other" id="Q18A7" name="Q18"/>
                    <label for="Q18A7">Other</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 19</center><h4>
            <h5><center>What is your favorite kind of weather?</center><h5>
                <div>
                    <input type="radio" value="Rainy" id="Q19A1" name="Q19"/>
                    <label for="Q19A1">Rainy</label>
                </div><div>
                    <input type="radio" value="Snowy" id="Q19A2" name="Q19"/>
                    <label for="Q19A2">Snowy</label>
                </div><div>
                    <input type="radio" value="Sunny" id="Q19A3" name="Q19"/>
                    <label for="Q19A3">Sunny</label>
        </div>
        <div class="question-container">
            <h4><center>Question 20</center><h4>
            <h5><center>What is your favorite shape?</center><h5>
                <div>
                    <input type="radio" value="Circle" id="Q20A1" name="Q20"/>
                    <label for="Q20A1">Circle</label>
                </div>
                <div>
                    <input type="radio" value="Square" id="Q20A2" name="Q20"/>
                    <label for="Q20A2">Square</label>
                </div>
                <div>
                    <input type="radio" value="Triangle" id="Q20A3" name="Q20"/>
                    <label for="Q20A3">Triange</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 21</center><h4>
            <h5><center>What kind of music do you like listening to?</center><h5>
                <div>
                    <input type="radio" value="Pop" id="Q21A1" name="Q21"/>
                    <label for="Q21A1">Pop</label>
                </div>
                <div>
                    <input type="radio" value="Rock" id="Q21A2" name="Q21"/>
                    <label for="Q21A2">Rock</label>
                </div>
                <div>
                    <input type="radio" value="Hip-Hop" id="Q21A3" name="Q21"/>
                    <label for="Q21A3">Hip-Hop</label>
                </div>
                <div>
                    <input type="radio" value="R&B" id="Q21A4" name="Q21"/>
                    <label for="Q21A4">R&B</label>
                </div><div>
                    <input type="radio" value="Country" id="Q21A5" name="Q21"/>
                    <label for="Q21A5">Country</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 22</center><h4>
            <h5 id="Q22H5">What is your favorite breakfast cereal?<h5>
                <div>
                    <input type="radio" value="Coco Puffs" id="Q22A1" name="Q22"/>
                    <label for="Q22A1">Coco Puffs</label>
                </div>
                <div>
                    <input type="radio" value="Cheerios" id="Q22A2" name="Q22"/>
                    <label for="Q22A2">Cheerios</label>
                </div>
                <div>
                    <input type="radio" value="Frosted Flakes" id="Q22A3" name="Q22"/>
                    <label for="Q22A3">Frosted Flakes</label>
                </div>
                <div>
                    <input type="radio" value="Raisin Bran" id="Q22A4" name="Q22"/>
                    <label for="Q22A4">Raisin Bran</label>
                </div>
                <div class="bottom-space"></div>
        </div>
        <div class="question-container">
            <h4><center>Question 23</center><h4>
            <h5 id="Q23H5">What is your favorite kind of candy?<h5>
                <div>
                    <input type="radio" value="Sour Candy" id="Q23A1" name="Q23"/>
                    <label for="Q23A1">Sour Candy</label>
                </div>
                <div>
                    <input type="radio" value="Chocolate Candy" id="Q23A2" name="Q23"/>
                    <label for="Q23A2">Chocolate Candy</label>
                </div>
                <div>
                    <input type="radio" value="Sweet Candy" id="Q23A3" name="Q23"/>
                    <label for="Q23A3">Sweet Candy</label>
                </div>
        </div>
        <div class="question-container">
            <h4><center>Question 24</center><h4>
            <h5 class = "hover-heading"><center><span>What is your favorite season?</span></center><h5>
                <div>
                    <input type="radio" value="Spring" id="Q24A1" name="Q24"/>
                    <label for="Q24A1">Spring</label>
                </div>
                <div>
                    <input type="radio" value="Summer" id="Q24A2" name="Q24"/>
                    <label for="Q24A2">Summer</label>
                </div>
                <div>
                    <input type="radio" value="Winter" id="Q24A3" name="Q24"/>
                    <label for="Q24A3">Winter</label>
                </div>
                <div>
                    <input type="radio" value="Fall" id="Q24A4" name="Q24"/>
                    <label for="Q24A4">Fall</label>
                </div>
                
        </div>
        <div class="question-container">
            <h4><center>Question 25</center><h4>
            <h5 class="hover-heading"><center><span>What is your favorite low-budget meal?</span></center><h5>
                <div>
                    <input type="radio" value="Mac and Cheese" id="Q25A1" name="Q10"/>
                    <label for="Q25A1">Mac and Cheese</label>
                </div>
                <div>
                    <input type="radio" value="Ramen" id="Q25A2" name="Q10"/>
                    <label for="Q25A2">Ramen</label>
                </div>
                <div>
                    <input type="radio" value="Hot Dogs" id="Q25A3" name="Q10"/>
                    <label for="Q25A3">Hot Dogs</label>
                </div>
                <div>
                    <input type="radio" value="Bologna Sandwhich" id="Q25A4" name="Q10"/>
                    <label for="Q25A4">Bologna Sandwich</label>
                </div>
                <div>
                    <input type="radio" value="Other" id="Q25A5" name="Q10"/>
                    <label for="Q25A5">Other</label>
                </div>
        </div>
        <a href='surveyPage2.php?name=true' class="button quit-button">Quit Survey</a>
        <center>
        <a href="surveyPage3.php" class="button button1">Next Page</a>
    </center>
    </body><br>
</html>
<script>
    function quitSurvey() {
        window.location.href = "afterSurvey.php"; // Will be changed but for now main page 
    }
    function nextPage() {
        window.location.href = "surveyPage3.php"; // Change to the next page in survey 
    }
</script>