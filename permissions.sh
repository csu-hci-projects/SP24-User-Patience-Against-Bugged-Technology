#! /bin/bash
# You can run this file and update all permissions by typing "bash permissions.sh" into your terminal. 
echo "Updating Permissions..."

# Feel free to change or add permissions that need to be updated into this file. 
# Read Permissions
chmod 744 afterSurvey.php
chmod 744 demographics.php
chmod 744 index.php
chmod 744 style.css
chmod 744 surveyIndex.php
chmod 744 startSurvey.php
chmod 744 surveyPage1.php
chmod 744 surveyPage2.php
chmod 744 surveyPage3.php
chmod 744 surveyPage4.php
chmod 744 surveyPage5.php
chmod 744 surveyPage6.php
chmod 744 surveyPage7.php
chmod 744 surveyPage8.php
chmod 744 surveyPage9.php
chmod 744 surveyPage10.php
chmod 744 endSurvey.php
chmod 744 javaFunctions.js

# Excecute Permissions
chmod 711 application.py

# Read/Write Permissions
chmod 766 testing_output.txt

echo "Permission Updating Complete! See below:"

ls -l