$(".tab-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
});


var form = $(".validation-wizard")

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {

        let totalPoint1 = 0;
        $('.custom-control-input-1').each(function() {
          if($(this).prop("checked")) {
            totalPoint1 = totalPoint1 + parseInt($(this).val());
          } 
        }); 

        let totalPoint2 = 0;
        $('.custom-control-input-2').each(function() {
          if($(this).prop("checked")) {
            totalPoint2 = totalPoint2 + parseInt($(this).val());
          } 
        }); 
        console.log(totalPoint1, totalPoint2);

        var highOne = `<h5>High Risk of Sleep Apnoea</h5>
                        <p>Your sleep assessment results indicate you are at high risk of Sleep Apnoea. We
                        recommend taking a home sleep test to determine how severe it may be and
                        then discussing your results with our Bulk Billed Sleep Doctor to consider your
                        requirements and options for treatment. </p>`;
        var lowOne = `<h5>Low Risk of Sleep Apnoea</h5>
                    <p>Your sleep assessment results indicate you may be at low risk of Sleep Apnoea. If
                    you are unsure about your symptoms you should consider taking a home sleep
                    test to determine if you require treatment. Alternatively, you are most welcome
                    to arrange to talk to our Bulk Billed Sleep Doctor regarding more options. </p>`;


        var highTwo = `<h5>High Risk of Sleep Disturbance</h5>
                        <p>Looks like sleep disturbance may be a problem for you. We recommend having a
                        home sleep test to help determine the cause of your sleep disturbance and
                        discussing the results with our Bulk Billed Sleep Doctor to work out the best
                        treatment plan for you. You deserve to feel your best with the energy to live each
                        day to its full potential. </p>`;
        var lowTwo = `<h5>Low Risk of Sleep Disturbance</h5>
                        <p>Looks like Sleep Disturbance may not be a big problem for you. However, if you
                        are looking for ways to improve your overall sleep health, we have put together
                        some suggested products just for you. You deserve to feel your best with the
                        energy to live each day to its full potential. Alternatively, you are most welcome
                        to arrange to talk to our Bulk Billed Sleep Doctor on more options. </p>`;


        if ($('#form1').is(":visible")) {
            $('#form1').hide();
            $("#form1-result").show();
            if (totalPoint1 >= 4) {
                $("#form1-result-title").html("Your Assessment results suggest you may be at <strong style='color: #D1242B'>High Risk of Sleep Apnoea</strong>");
                var up1 = highOne;
                var down1 = lowOne;
            }else{
                var up1 = lowOne;
                var down1 = highOne;
                $("#form1-result-title").html("Your Assessment results suggest you may be at <strong style='color: #D1242B'>Low Risk of Sleep Apnoea</strong> ");
            }
            
            $("#form2-result").show();
            if (totalPoint2 >= 1) {
                var up2 = highTwo;
                var down2 = lowTwo;
                $("#form2-result-title").html("Your Assessment results suggest you may be at <strong style='color: #D1242B'>risk of Sleep Disturbance Problem </strong>");
            } else {
                var up2 = lowTwo;
                var down2 = highTwo;
                $("#form2-result-title").html("Your Assessment results suggest you may be at  <strong style='color: #D1242B'>Low Risk  Sleep Disturbance Problem</strong>");
            }

            $("#up1").html(up1);
            $("#up2").html(up2);
            $("#down1").html(down1);
            $("#down2").html(down2);

        }

        return form.validate().settings.ignore = ":disabled", form.valid()
    }

}), $(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})
