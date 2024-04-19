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
    <h1><center>You will now proceed into the survey portion.</center><h1><br>
    <h1><center>Remember: you can quit at any time.</center><h1>
    <center><a href='./surveyPage1.php' class="button button1">Proceed</a><center>
    </body>

    <?php
  
        getMyTime();
        saveMyInput();
        function getMyTime(){
            $myfile = fopen("testing_output.txt", "a") or die("Unable to open file!");
            $newLine = "\n";
            fwrite($myfile, $newLine);
            date_default_timezone_set("America/New_York");
            $start_time = date("h:i:sa");
            fwrite($myfile, $start_time);
            $txt = ", ";
            fwrite($myfile, $txt);
            fclose($myfile);
        }
        function saveMyInput(){
            //Age, Gender, Ethnicity, TechProficiency
            $age = "age";
            $gender = "gender";
            $ethnicity = "ethnicity";
            $techProf = "tech proficiency";

            if(isset($_REQUEST['Q1'])){
                $age = $_REQUEST['Q1']." ";
            }
            if(isset($_POST['Q2'])){
                $gender = $_POST['Q2']." ";
            }
            if(isset($_POST['Q3'])){
                $ethnicity = $_POST['Q3']." ";
            }
            if(isset($_POST['Q4'])){
                $techProf = $_POST['Q4']." ";
            }
            
            $file = fopen("testing_output.txt", "a") or die("Unable to open file!");
            $txt = ", ";

            fwrite($file, $age);
            fwrite($file, $txt);

            fwrite($file, $gender);
            fwrite($file, $txt);

            fwrite($file, $ethnicity);
            fwrite($file, $txt);
            
            fwrite($file, $techProf);
            fwrite($file, $txt);
        
            fclose($file);    
        }

        
    ?>
</html>


