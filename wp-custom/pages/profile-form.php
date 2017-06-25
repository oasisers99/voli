<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style type="text/css">
    label[class*=question]{
        font-size: 20px;
    }
</style>
<script type="application/javascript">
    $(document).ready(function(){

        $("#btnProfileSubmit").click(function(){

            // 1. Remove feedbacks
            removeFeedbacks();

            validateValues();
            return;

            // 2. Validate input values
            if(validateValues()){

                var data = {
                  action: "this is test string."
                };

                var json = JSON.stringify(data);
                    $.ajax({
                        type: "post",
                        url: "../controller/profile-form-submit.php",
                        data: {action: "action value"},
                        success: function(data, status){
                           alert(data);
                        },
                        error: function(xhr, desc, err) {
                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);
                        }
                    });
                }


            });


        //toggle other input box display - q1
        $("#q1_a7").change(function(){

            if(this.checked){
                $("#q1_other").attr("hidden", false);
            }else{
                $("#q1_other").val('');
                $("#q1_other").attr("hidden", true);
            }
        });



        /**
         * Validate all the input values.
         */
        function validateValues(){
            var isValidated = true;
            var answer = $("#voli_name").val();


            //check the name input
            if(isEmpty(answer)) {
                var attr = $("#name-div").attr("class");
                attr = attr + " has-danger";
                $("#name-div").attr("class", attr);

                var htmlMSG = '<div class="form-control-feedback" id="feedback-name">Your name is required.</div>';
                $("#voli_name").after(htmlMSG);
                isValidated = false;
            }

            answer = $("#voli_email").val();

            //check the email input
            if(isEmpty(answer)){
                var attr = $("#email-div").attr("class");
                attr = attr + " has-danger";
                $("#email-div").attr("class", attr);

                var htmlMSG = '<div class="form-control-feedback" id="feedback-name">Your email is required.</div>';
                $("#voli_email").after(htmlMSG);
                isValidated = false;
            }


            var count = 0;

            //check the q1
            var q1Other = $("#q1_other").val();
            $("input[id*=q1_a]").each(function(){
                console.log($(this).attr('id'));
                if($(this).attr('id') == 'q1_a7'){
                    if($(this).is(':checked') && !isEmpty(q1Other)){
                        console.log(q1Other);
                        count++;
                    }
                }else{
                    if($(this).is(':checked')){
                        count++;
                    }
                }
            });
            console.log(count);
            //if not selected, display warning message at q1
            if(count == 0){
                var htmlMSG = '<div class="form-control-feedback" id="feedback-name" style="color:red;">Please select at least one answer.</div>';
                $("#q1-label").before(htmlMSG);
                isValidated = false;
            }

            count = 0;

            var q2Other = $("#q2_other").val();
            $("input[id*=q2_a]").each(function(){

                if($(this).attr('id') == 'q2_a6'){
                    if($(this).is(':checked') && !isEmpty(q2Other)){

                        count++;
                    }
                }else{
                    if($(this).is(':checked')){
                        count++;
                    }
                }
            });

            //if not selected, display warning message at q1
            if(count == 0){
                var htmlMSG = '<div class="form-control-feedback" id="feedback-name" style="color:red;">Please select at least one answer.</div>';
                $("#q2-label").before(htmlMSG);
                isValidated = false;
            }

            //if not written, display warning message at Please describe your idea and a bit about yourself.
            answer = $("#q3_text").val();
            if(isEmpty(answer)){
                var attr = $("#q3-div").attr("class");
                attr = attr + " has-danger";
                $("#q3-div").attr("class", attr);

                var htmlMSG = '<div class="form-control-feedback" id="feedback-name">Please fill out the text box.</div>';
                $("#q3_text").after(htmlMSG);
                isValidated = false;
            }

            return isValidated;
        }


        /**
         * Reset all warnings
         */
        function removeFeedbacks(){

            $("div[class*=form-group]").each(function(){
                $(this).attr("class", "form-group");
            });

            $(".form-control-feedback").each(function(){
               $(this).remove();
            });
        }

        /**
         * validate if empty after removing space
         * @param value
         * @returns {boolean}
         */
        function isEmpty(value){

            // remove spaces
            value =  value.replace(/\s/g, '');

            if(value == '' || value == null){
                return true;
            }

            return false;
        }

    });

</script>
<body>

<?php
?>
<div class="container">
<!--    <form action="../controller/profile-form-submit.php" method="post">-->

        <div class="form-group" id="name-div">
            <label class="question" for="name">What is your name?</label>
            <input type="text" class="form-control col-sm-5" id="voli_name" name="voli_name" placeholder="Enter your name"/>
        </div>
        <div class="form-group" id="email-div">
            <label class="question" for="name">What is your email address?</label>
            <input type="email" class="form-control col-sm-5" id="voli_email" name="voli_email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label class="question" id="q1-label">Why do you want to volunteer?</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a1" name="q1_a[]" value="Make a meaningful contribution to something.">
                    Make a meaningful contribution to something.
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a2" name="q1_a[]" value="Help a specific group or individual.">
                    Help a specific group or individual.
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a3" name="q1_a[]" value="Meet new people.">
                    Meet new people.
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a4" name="q1_a[]" value="Socialize with others.">
                    Socialize with others.
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a5" name="q1_a[]" value="Be a part of a community.">
                    Be a part of a community.
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a6" name="q1_a[]" value="Learn new things.">
                    Learn new things.
                </label>
            </div>
            <div class="form-check form-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q1_a7" name="q1_a[]" value="Other">
                        Other
                </label>
                <div class="col-sm-5">
                    <input class="form-control" type="text"  id="q1_other" name="q1_a[]"  style="width:300px;" hidden="true">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="question" id="q2-label">Skills, knowledge or passions you want to share?</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q2_a1" name="q2_a[]" value="Musical instruments">
                    Musical instruments
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q2_a2" name="q2_a[]" value="Technical skills">
                    Technical skills
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q2_a3" name="q2_a[]" value="Interpersonal skills">
                    Interpersonal skills
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q2_a4" name="q2_a[]" value="Knowledge domain">
                    Knowledge domain
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q2_a5" name="q2_a[]" value="Passion">
                    Passion
                </label>
            </div>
            <div class="form-check form-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="q2_a6" name="q2_a[]" value="Other">
                    Other
                </label>
                <div class="col-sm-5">
                    <input class="form-control" type="text" id="q2_other" name="q2_a[]" value="" style="width:300px;">
                </div>
            </div>
        </div>
        <div class="form-group" id="q3-div">
            <label class="question" for="textarea">Please describe your idea and a bit about yourself.</label>
            <textarea class="form-control" id="q3_text" style="width:800px; height: 100px;"></textarea>
        </div>
        <div class="form-group" id="q4-id">
            <label class="question" for="textarea">Any other comments you want to send us?</label>
            <textarea class="form-control" id="q4_text" style="width:800px; height: 100px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="btnProfileSubmit">Submit</button>
    </div>
<!--</form>-->
</body>
</html>