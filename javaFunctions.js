
$(document).ready(function(){
    $('.question-container input[type="radio"]').change(function(){
        if (($(this).attr('id') === "Q14A1" || $(this).attr('id') === "Q14A2") 
        && $(this).prop('checked') 
        && ($(this).val() === "All the time" || $(this).val() === "Sometimes")) {
            $('#Q14A3').prop('checked', true);
        }
    });
});
