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

            if(isset($_POST['AS1'])){
                $FrustrationLevel = $_POST['AS1']." ";
            }
            if(isset($_POST['AS2'])){
                $MostFrustrated = $_POST['AS2']." ";
            }
            if(isset($_POST['AS3'])){
                $WorstQuizPart = $_POST['AS3']." ";
            }
            if(isset($_POST['AS4'])){
                $Intentional = $_POST['AS4']." ";
            }
            if(isset($_POST['AS5'])){
                $ConsideringQuittingPage = $_POST['AS5']." ";
            }
            if(isset($_POST['AS6'])){
                $TroubleShooting = $_POST['AS6']." ";
            }
            if(isset($_POST['AS7'])){
                $Strategies = $_POST['AS7']." ";
            }
            
            $file = fopen("testing_output.txt", "a") or die("Unable to open file!");
            $txt = ", ";

            fwrite($file, $FrustrationLevel);
            fwrite($file, $txt);

            fwrite($file, $MostFrustrated);
            fwrite($file, $txt);
            
            fwrite($file, $WorstQuizPart);
            fwrite($file, $txt);
        
            fwrite($file, $Intentional);
            fwrite($file, $txt);

            fwrite($file, $ConsideringQuittingPage);
            fwrite($file, $txt);

            fwrite($file, $TroubleShooting);
            fwrite($file, $txt);
            
            fwrite($file, $Strategies);

            fclose($file);    
        }

        
    ?>
</html>