
$(document).ready(function(){
    $('.question-container input[type="radio"]').change(function(){
        if (($(this).attr('id') === "Q14A1" || $(this).attr('id') === "Q14A2") 
        && $(this).prop('checked') 
        && ($(this).val() === "All the time" || $(this).val() === "Sometimes")) {
            $('#Q14A3').prop('checked', true);
        }

        if (($(this).attr('id') === "Q17A1" || $(this).attr('id') === "Q17A2" || $(this).attr('id') === "Q17A4") 
        && $(this).prop('checked')) {
            $('#Q17A3').prop('checked', true);
        }

        if (($(this).attr('id') === "Q21A4" || $(this).attr('id') === "Q21A2" || $(this).attr('id') === "Q21A3" || $(this).attr('id') === "Q21A5") 
        && $(this).prop('checked')) {
            $('#Q21A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q33A1") 
        && $(this).prop('checked')) {
            $('#Q33A2').prop('checked', true);
        }

        if (($(this).attr('id') === "Q35A1") 
        && $(this).prop('checked')) {
            $('#Q35A2').prop('checked', true);
        }

        if (($(this).attr('id') === "Q40A1" || $(this).attr('id') === "Q40A3") 
        && $(this).prop('checked')) {
            $('#Q40A2').prop('checked', true);
        }
    });
});

$(document).ready(function(){
    $('.question-container input[type="radio"]').change(function(){
        if (($(this).attr('id') === "Q13A1" || $(this).attr('id') === "Q13A2") 
        && $(this).prop('checked')) {
            
            let html = "<div class=\"question-container\" id=\"question11\"><h4><center>Question 11</center><h4> <h5><center>When you get sick, do you take sick days?</center><h5> <div><input type=\"radio\" value=\"Caucasian\" id=\"Q11A1\" name=\"Q11\"/> <label for=\"Q11A1\">Always</label></div><div><input type=\"radio\" value=\"African-American\" id=\"Q11A2\" name=\"Q11\"/><label for=\"Q11A2\">Never</label></div><div><input type=\"radio\" value=\"Latino or Hispanic\" id=\"Q11A3\" name=\"Q11\"/><label for=\"Q11A3\">Sometimes</label></div></div>";

            $('#question13').html(html);
        }
    });
});
