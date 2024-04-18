<!DOCTYPE html>
<html lang ="en" >
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Survey </title>
        <meta charset="UTF-8">
        <meta name="description" content="Survey Page for Cs464 Experiment">
        <meta name="keywords" content="cs464, CSU, CSS, HTML">
    </head>
    <?php
        function getMyTime(){
            $myfile = fopen("testing_output.txt", "a") or die("Unable to open file!");
            date_default_timezone_set("America/New_York");
            $start_time = date("h:i:sa");
            fwrite($myfile, $start_time);
            $txt = ", ";
            fwrite($myfile, $txt);
            fclose($myfile);
            header('Location: ./demographics.php');
        }
        if (isset($_GET['name'])) {
            getMyTime();
            
        }
    ?>
    <body>
    <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="surveyIndex.php">Take The Survey</a></li>
        </ul>
        <h4><center>Instructions:</center><h4>
        <h5><center>Please complete the following survey to the best of your abilities. <br> <br>
            Feel free to quit the survey at any time for any reason- upon quitting, you <br>
            will be directed to a short "experience" survey to report any issues you may <br>
            have had with the survey.
            <br><br>
        Thank you for your participation!<h5></center>
    </body><br>
    <center>
        <a href='surveyIndex.php?name=true' class="button button1">Start The Survey</a>
    </center>
    <br>
    <br>
    <footer> <center><h6>
        Contact Us: <br>
        Github: <a href="https://github.com/csu-hci-projects/SP24-User-Patience-Against-Bugged-Technology">Our Repository</a><br>
        Email: ri1223@colostate.edu <br>
        <a href="https://www.cs.colostate.edu/~cs464/#/">Course Website for CS464</a>
    <center> </footer></h6>
</html>
