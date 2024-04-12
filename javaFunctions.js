function quitSurvey() {
    window.location.href = "afterSurvey.php";
}

function nextPage() {
    window.location.href = "surveyPage2.php"; // Change to the next page in survey 
}

$(document).ready(function(){
    $('.question-container input[type="radio"]').change(function(){
        if ($(this).attr('id') === "Q14A3" && ($(this).val() === "All the time" || $(this).val() === "Sometimes")) {
            console.log("inside if");
            $('#Q14A2').prop('checked', true);
        }
    });
});
