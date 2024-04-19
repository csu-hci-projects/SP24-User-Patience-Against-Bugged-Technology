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
    <h1><center>Thank you for your participation!! </center><h1><br>
    <h1><center> Click below to return to our home page! </center><h1>
    <center><a href='./index.php' class="button button1">Exit</a><center>
    </body>

    <?php
  
        saveMyInput();
        function saveMyInput(){
            //FrustrationLevel, MostFrustrated, WorstQuizPart, Intentional, ConsideringQuittingPage, TroubleShooting, Strategies
            $FrustrationLevel = "Frustration Level";
            $MostFrustrated = "Most Frustrated";
            $WorstQuizPart = "Worst Quiz Part";
            $Intentional = "Intentional";
            $ConsideringQuittingPage = "Considering Quitting Page";
            $TroubleShooting = "Trouble Shooting";
            $Strategies = "Strategies";

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