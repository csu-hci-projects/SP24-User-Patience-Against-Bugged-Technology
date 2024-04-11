<!DOCTYPE html>
<html lang ="en" >
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Survey </title>
        <meta charset="UTF-8">
        <meta name="description" content="After Survey Page for Cs464 Experiment">
        <meta name="keywords" content="cs464, CSU, CSS, HTML">
    </head>
    <body>
        <h3><center>Thank you!</center><h3>
        <h4><center>Please answer the following questions about your experience taking our survey</center><h4>
        <br><br><br><br>
        <div class="question-container">
            <h5><center>How would you rate your current level of frustration?</center><h5>
                <div>
                    <input type="radio" value="None" id="AS1A1" name="AS1"/>
                    <label for="AS1A1">Not frustrated</label>
                </div><div>
                    <input type="radio" value="Moderate" id="AS1A2" name="AS1"/>
                    <label for="AS1A2">moderately frustrated</label>
                </div><div>
                    <input type="radio" value="High" id="AS1A3" name="AS1"/>
                    <label for="AS1A3">highly frustrated</label>
                </div>
        </div>
        <div class="question-container">
            <h5><center>At what point did you feel the most frustrated with the technology?</center><h5>
                <div>
                    <input type="text" id="AS2A1" name="AS2"/>
                </div>
        </div>

        <div class="question-container">
            <h5><center>What was the most frustrating part of the quiz?</center><h5>
                <div>
                    <input type="radio" value="Bugs" id="AS3A1" name="AS3"/>
                    <label for="AS3A1">Bugs</label>
                </div>
                <div>
                    <input type="radio" value="Length" id="AS3A2" name="AS3"/>
                    <label for="AS3A2">Length</label>
                </div>
                <div>
                    <input type="radio" value="Other" id="AS3A3" name="AS3"/>
                    <label for="AS3A3">Other</label>
                </div>
        </div>
        <div class="question-container">
            <h5><center>Throughout the test, did you believe the bug was intentional?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="AS4A1" name="AS4"/>
                    <label for="AS4A1">Yes</label>
                </div><div>
                    <input type="radio" value="No" id="AS4A2" name="AS4"/>
                    <label for="AS4A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h5><center>Of the 10 pages, at which page would you say you started to consider quitting?</center><h5>
                <div>
                    <input type="text" id="AS5A1" name="AS5"/>
                </div>
        </div>
        <div class="question-container">
            <h5><center>Did you attempt trouble shooting the bug?</center><h5>
                <div>
                    <input type="radio" value="Yes" id="AS6A1" name="AS6"/>
                    <label for="AS6A1">Yes</label>
                </div><div>
                    <input type="radio" value="No" id="AS6A2" name="AS6"/>
                    <label for="AS6A2">No</label>
                </div>
        </div>
        <div class="question-container">
            <h5><center>Which of the following strategies would you say you attempted?</center><h5>
                <div>
                    <input type="checkbox" value="Slow Clicks" id="AS7A1" name="AS7"/>
                    <label for="AS7A1">Slowing down your clicking</label>
                </div>
                <div>
                    <input type="checkbox" value="Multiple Clicks" id="AS7A2" name="AS7"/>
                    <label for="AS7A2">Clicking multiple times</label>
                </div>
                <div>
                    <input type="checkbox" value="Alert" id="AS7A2" name="AS7"/>
                    <label for="AS7A2">Alerting proctor of the issue</label>
                </div>
                <div>
                    <input type="checkbox" value="Reload" id="AS7A2" name="AS7"/>
                    <label for="AS7A2">Refreshing/Reloading the page</label>
                </div>
                <div>
                    <input type="checkbox" value="Other" id="AS7A2" name="AS7"/>
                    <label for="AS7A2">Other</label>
                </div>
                <div>
                    <input type="checkbox" value="No Attempt" id="AS7A2" name="AS7"/>
                    <label for="AS7A2">I did not attempt to troubleshoot</label>
                </div>
        </div>




        <center>
        <a class="button button1" onclick="submit()" href="index.php">Submit</a>
    </center>
    </body><br>
</html>

<script>
    function submit() {
        pass; // Change to send results to CSV
    }
</script>
