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
        <form method= "post" action = "./startSurvey.php">
            <div class="question-container">
                <h4><center>Question 1</center><h4>
                <h5><center>Please select your age range:</center><h5>
                    <div>
                        <input type="radio" value="Under 18" id="Q1A1" name="Q1"/>
                        <label for="Q1A1">Under 18</label>
                    </div><div>
                        <input type="radio" value="18-20" id="Q1A2" name="Q1"/>
                        <label for="Q1A2">18-20</label>
                    </div><div>
                        <input type="radio" value="21-25" id="Q1A3" name="Q1"/>
                        <label for="Q1A3">21-25</label>
                    </div><div>
                        <input type="radio" value="26-30" id="Q1A4" name="Q1"/>
                        <label for="Q1A4">26-30+</label>
                    </div>
            </div>
            <div class="question-container">
                <h4><center>Question 2</center><h4>
                <h5><center>What gender do you identify as?</center><h5>
                    <div>
                        <input type="radio" value="Female" id="Q2A1" name="Q2"/>
                        <label for="Q2A1">Female</label>
                    </div>

                    <div>
                        <input type="radio" value="Male" id="Q2A2" name="Q2"/>
                        <label for="Q2A2">Male</label>
                    </div>
                    <div>
                        <input type="radio" value="Non-binary" id="Q2A3" name="Q2"/>
                        <label for="Q2A3">Non-binary</label>
                    </div>
                    <div>
                        <input type="radio" value="Other" id="Q2A4" name="Q2"/>
                        <label for="Q2A4">Other</label>
                    </div>
                    <div>
                    <input type="radio" value="Prefer not to say" id="Q2A5" name="Q2"/>
                    <label for="Q2A5">Prefer not to say</label>
                    </div>
            </div>

            <div class="question-container">
                <h4><center>Question 3</center><h4>
                <h5><center>Please specify your ethnicity</center><h5>
                    <div>
                        <input type="radio" value="Caucasian" id="Q3A1" name="Q3"/>
                        <label for="Q3A1">Caucasian</label>
                    </div>

                    <div>
                        <input type="radio" value="African-American" id="Q3A2" name="Q3"/>
                        <label for="Q3A2">African-American</label>
                    </div>
                    <div>
                        <input type="radio" value="Latino or Hispanic" id="Q3A3" name="Q3"/>
                        <label for="Q3A3">Latino or Hispanic</label>
                    </div>
                    <div>
                        <input type="radio" value="Asian" id="Q3A4" name="Q3"/>
                        <label for="Q3A4">Asian</label>
                    </div>
                    <div>
                        <input type="radio" value="Native American" id="Q3A5" name="Q3"/>
                        <label for="Q3A5">Native American</label>
                    </div>
                    <div>
                        <input type="radio" value="Native Hawaiian or Pacific Islander" id="Q3A6" name="Q3"/>
                        <label for="Q3A6">Native Hawaiian or Pacific Islander</label>
                    </div>
                    <div>
                        <input type="radio" value="Two or More" id="Q3A7" name="Q3"/>
                        <label for="Q3A7">Two or More</label>
                    </div>
                    <div>
                        <input type="radio" value="Other/Unknown" id="Q3A8" name="Q3"/>
                        <label for="Q3A8">Other/Unknown</label>
                    </div>
                    <div>
                    <input type="radio" value="Prefer not to say" id="Q3A9" name="Q3"/>
                    <label for="Q3A9">Prefer not to say</label>
                    </div>
            </div>
            <div class="question-container">
                <h4><center>Question 4</center><h4>
                <h5><center>How would you rate your proficiency with technology?</center><h5>
                    <div>
                        <input type="radio" value="Low" id="Q4A1" name="Q4"/>
                        <label for="Q4A1">Low</label>
                    </div><div>
                        <input type="radio" value="Medium" id="Q4A2" name="Q4"/>
                        <label for="Q4A2">Medium</label>
                    </div><div>
                        <input type="radio" value="High" id="Q4A3" name="Q4"/>
                        <label for="Q4A3">High</label>
                    </div>
            </div>
            <center>
                <br><br>
                <input type="submit" name="submit" class= "button button1" value="Submit"><br><br>
                <!-- <a href='demographics.php?name=true' class="button button1">Next Page</a> -->
            </center>
        </form>
    </body><br>
</html>
