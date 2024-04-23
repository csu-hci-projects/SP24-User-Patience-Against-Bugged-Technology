
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

        if (($(this).attr('id') === "Q44A2" || $(this).attr('id') === "Q44A3") 
        && $(this).prop('checked')) {
            $('#Q44A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q48A2" || $(this).attr('id') === "Q48A1") 
        && $(this).prop('checked')) {
            $('#Q48A3').prop('checked', true);
        }

        if (($(this).attr('id') === "Q50A2") 
        && $(this).prop('checked')) {
            $('#Q50A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q59A1" || $(this).attr('id') === "Q59A2" || $(this).attr('id') === "Q59A4") 
        && $(this).prop('checked')) {
            $('#Q59A3').prop('checked', true);
        }

        if (($(this).attr('id') === "Q67A2") 
        && $(this).prop('checked')) {
            $('#Q67A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q72A2") 
        && $(this).prop('checked')) {
            $('#Q72A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q77A2") 
        && $(this).prop('checked')) {
            $('#Q77A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q79A2") 
        && $(this).prop('checked')) {
            $('#Q79A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q91A2") 
        && $(this).prop('checked')) {
            $('#Q91A1').prop('checked', true);
        }

        if (($(this).attr('id') === "Q94A1") 
        && $(this).prop('checked')) {
            $('#Q94A2').prop('checked', true);
        }
    });
});


$(document).ready(function(){
    $('.question-container input[type="radio"]').change(function(){
        if (($(this).attr('id') === "Q5A1") && $(this).prop('checked') ) {
            $('#Q5A1').prop('checked', false);
        }

        // Q18 
        if (($(this).attr('id') === "Q18A1") && $(this).prop('checked') ) {
            $('#Q18A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q18A3") && $(this).prop('checked') ) {
            $('#Q18A3').prop('checked', false);
        }
        if (($(this).attr('id') === "Q18A5") && $(this).prop('checked') ) {
            $('#Q18A5').prop('checked', false);
        }

        // Q25
        if (($(this).attr('id') === "Q25A1") && $(this).prop('checked') ) {
            $('#Q25A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q25A2") && $(this).prop('checked') ) {
            $('#Q25A2').prop('checked', false);
        }
        if (($(this).attr('id') === "Q25A3") && $(this).prop('checked') ) {
            $('#Q25A3').prop('checked', false);
        }
        if (($(this).attr('id') === "Q25A4") && $(this).prop('checked') ) {
            $('#Q25A4').prop('checked', false);
        }
        // Q27
        if (($(this).attr('id') === "Q27A1") && $(this).prop('checked') ) {
            $('#Q27A1').prop('checked', false);
        }

        // Q31
        if (($(this).attr('id') === "Q31A1") && $(this).prop('checked') ) {
            $('#Q31A1').prop('checked', false);
        }

        // Q43 
        if (($(this).attr('id') === "Q43A2") && $(this).prop('checked') ) {
            $('#Q43A2').prop('checked', false);
        }
        if (($(this).attr('id') === "Q43A3") && $(this).prop('checked') ) {
            $('#Q43A3').prop('checked', false);
        }
        if (($(this).attr('id') === "Q43A4") && $(this).prop('checked') ) {
            $('#Q43A4').prop('checked', false);
        }


        if (($(this).attr('id') === "Q45A1") && $(this).prop('checked') ) {
            $('#Q45A1').prop('checked', false);
        }


        if (($(this).attr('id') === "Q49A1") && $(this).prop('checked') ) {
            $('#Q49A1').prop('checked', false);
        }


        if (($(this).attr('id') === "Q58A1") && $(this).prop('checked') ) {
            $('#Q58A1').prop('checked', false);
        }

        // Q62
        if (($(this).attr('id') === "Q62A1") && $(this).prop('checked') ) {
            $('#Q62A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q62A3") && $(this).prop('checked') ) {
            $('#Q62A3').prop('checked', false);
        }

        // Q64
        if (($(this).attr('id') === "Q64A1") && $(this).prop('checked') ) {
            $('#Q64A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q64A2") && $(this).prop('checked') ) {
            $('#Q64A2').prop('checked', false);
        }
        if (($(this).attr('id') === "Q64A3") && $(this).prop('checked') ) {
            $('#Q64A3').prop('checked', false);
        }


        if (($(this).attr('id') === "Q71A1") && $(this).prop('checked') ) {
            $('#Q71A1').prop('checked', false);
        }

        if (($(this).attr('id') === "Q76A1") && $(this).prop('checked') ) {
            $('#Q76A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q82A1") && $(this).prop('checked') ) {
            $('#Q82A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q98A1") && $(this).prop('checked') ) {
            $('#Q98A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q101A1") && $(this).prop('checked') ) {
            $('#Q101A1').prop('checked', false);
        }
        if (($(this).attr('id') === "Q104A1") && $(this).prop('checked') ) {
            $('#Q104A1').prop('checked', false);
        }


    });
});

$(document).ready(function(){
    $('.question-container input[type="radio"]').change(function(){

        let html = "<div class=\"question-container\" id=\"question11\"><h4><center>Question 11</center><h4> <h5><center>When you get sick, do you take sick days?</center><h5> <div><input type=\"radio\" value=\"Caucasian\" id=\"Q11A1\" name=\"Q11\"/> <label for=\"Q11A1\">Always</label></div><div><input type=\"radio\" value=\"African-American\" id=\"Q11A2\" name=\"Q11\"/><label for=\"Q11A2\">Never</label></div><div><input type=\"radio\" value=\"Latino or Hispanic\" id=\"Q11A3\" name=\"Q11\"/><label for=\"Q11A3\">Sometimes</label></div></div>";

        if (($(this).attr('id') === "Q13A1" || $(this).attr('id') === "Q13A2") 
        && $(this).prop('checked')) {
            $('#question13').html(html);
        }

        if (($(this).attr('id') === "Q28A1" || $(this).attr('id') === "Q28A2") 
        && $(this).prop('checked')) {
            $('#question28').html(html);
        }

        if (($(this).attr('id') === "Q29A1" || $(this).attr('id') === "Q29A2") 
        && $(this).prop('checked')) {
            $('#question29').html(html);
        }

        if (($(this).attr('id') === "Q42A1" || $(this).attr('id') === "Q42A2" || $(this).attr('id') === "Q42A3" || $(this).attr('id') === "Q42A4") 
        && $(this).prop('checked')) {
            $('#question42').html(html);
        }

        if (($(this).attr('id') === "Q47A1" || $(this).attr('id') === "Q47A2" || $(this).attr('id') === "Q47A3") 
        && $(this).prop('checked')) {
            $('#question47').html(html);
        }

        if (($(this).attr('id') === "Q55A1" || $(this).attr('id') === "Q55A2") 
        && $(this).prop('checked')) {
            $('#question55').html(html);
        }

        if (($(this).attr('id') === "Q65A1" || $(this).attr('id') === "Q65A2" || $(this).attr('id') === "Q65A3") 
        && $(this).prop('checked')) {
            $('#question65').html(html);
        }

        if (($(this).attr('id') === "Q73A1" || $(this).attr('id') === "Q73A2") 
        && $(this).prop('checked')) {
            $('#question73').html(html);
        }

        if (($(this).attr('id') === "Q85A1" || $(this).attr('id') === "Q85A2" || $(this).attr('id') === "Q85A2") 
        && $(this).prop('checked')) {
            $('#question85').html(html);
        }

        if (($(this).attr('id') === "Q96A1" || $(this).attr('id') === "Q96A2") 
        && $(this).prop('checked')) {
            $('#question96').html(html);
        }

        if (($(this).attr('id') === "Q97A1" || $(this).attr('id') === "Q97A2") 
        && $(this).prop('checked')) {
            $('#question97').html(html);
        }
    });
});

$(document).ready(function(){
    function changeTextAlrignment(quest){
        var question = $(quest);
        var i = 10;
        var interval = setInterval(function() {
            if (i % 2 === 0) {
                question.css("text-align", "right");
            } else if (i % 3 === 0) {
                question.css("text-align", "center");
            } else {
                question.css("text-align", "left");
            }
            i++;
        }, 100);
    }
    changeTextAlrignment("#Q6H5");
    changeTextAlrignment("#Q22H5");
    changeTextAlrignment("#Q23H5");
    changeTextAlrignment("#Q34H5");
    changeTextAlrignment("#Q37H5");
    changeTextAlrignment("#Q38H5");
    changeTextAlrignment("#Q52H5");
    changeTextAlrignment("#Q53H5");
    changeTextAlrignment("#Q56H5");
    changeTextAlrignment("#Q60H5");
    changeTextAlrignment("#Q69H5");
    changeTextAlrignment("#Q80H5");
    changeTextAlrignment("#Q84H5");
    changeTextAlrignment("#Q89H5");
    changeTextAlrignment("#Q92H5");
    changeTextAlrignment("#Q95H5");
    changeTextAlrignment("#Q98H5");
    changeTextAlrignment("#Q100H5");


});

$(document).ready(function(){
    function changeTextSize(quest){
        var question = $(quest);
        question.css("font-size", "6px");
        question.css("text-align", "center");
    }
    changeTextSize("#Q12H5");
    changeTextSize("#Q17H5");
    changeTextSize("#Q50H5");
    changeTextSize("#Q77H5");
    changeTextSize("#Q94H5");
    changeTextSize("#Q44H5");
    changeTextSize("#Q62H5");
    changeTextSize("#Q82H5");
    changeTextSize("#Q19H5");
    changeTextSize("#Q104H5");
    changeTextSize("#Q103H5");

});