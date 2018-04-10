

$(document).ready(function() {

    var $container = $('div#appbundle_question_answers');

    var index = $container.find(':input').length;

    if(index == 0) {
        $("#appbundle_question_add").prop("disabled" , true);
    }


    /*
     * Handle the form's creation in function of the question type
     */
    function buildFormType () {
        var typeQuestion = $( '#appbundle_question_type input[type="radio"]:checked' ).val();

        switch (typeQuestion) {

            case "text":

                $("#appbundle_question_answers .form-group").remove();
                index = 0;

                addAnswer($container, false);

                $("#answersDiv .form-group:first label:first").html("Indiquez la réponse");
                $("#answersDiv .form-group:first .form-group:first label:first").hide();
                $("#appbundle_question_answers_0 label:first").hide();
                $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide();

                $('#add_answer').prop("disabled", true);
                break;

            case "trueOrFalse":

                $("#appbundle_question_answers .form-group").remove();
                index = 0;

                addAnswer($container, false);

                $("#answersDiv .form-group:first label:first").html("Indiquez l'exactitude de la réponse");


                var divTrue = document.createElement("div");
                var radioTrue = document.createElement("input");
                $(radioTrue).attr({type : "radio", id : "trueRadio", value : "Vrai", name : "trueOrFalse", checked : true});
                var labelTrue = document.createElement("label");
                $(labelTrue).attr("for","trueRadio");
                labelTrue.append("Vrai");
                $(divTrue).append(radioTrue, labelTrue);

                var divFalse = document.createElement("div");
                var radioFalse = document.createElement("input");
                $(radioFalse).attr({type : "radio", id : "falseRadio", value : "Faux", name : "trueOrFalse"});
                var labelFalse = document.createElement("label");
                $(labelFalse).attr("for","falseRadio");
                labelFalse.append("Faux");
                $(divFalse).append(radioFalse, labelFalse);


                $("#appbundle_question_answers_0").append(divTrue, divFalse);


                $("#appbundle_question_answers_0_value").val($("input[name=\"trueOrFalse\"]:checked").val());

                $("input[name=\"trueOrFalse\"]").change(function(){

                    $("#appbundle_question_answers_0_value").val($("input[name=\"trueOrFalse\"]:checked").val())

                });

                $("#answersDiv .form-group:first .form-group:first label:first").hide();
                $("#appbundle_question_answers_0 .form-group:first").hide();
                $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide();


                $('#add_answer').prop("disabled", true);

                break;

            case "multipleChoicesRadio":

                $("#answersDiv .form-group:first label:first").html("Indiquez les réponses");


                $("#appbundle_question_answers .form-group").remove();
                index = 0;

                addAnswer($container, false);

                addAnswer($container, false);

                $('#add_answer').prop("disabled", false);

                break;

            case "multipleChoicesCheckBox":

                $("#answersDiv .form-group:first label:first").html("Indiquez les réponses");

                $("#appbundle_question_answers .form-group").remove();
                index = 0;

                addAnswer($container, false);

                addAnswer($container, false);

                $('#add_answer').prop("disabled", false);
                break;

            default:
                alert("Aucun type de question n'a été sélectionné");
                break;

        }
    }

    buildFormType ();

    $('#appbundle_question_type input[type="radio"]').change(function(){
        buildFormType ();
    });


    /*
     * Add an answer for a question when clicking on the button
     */
    $('#add_answer').click(function(e) {

        if($( '#appbundle_question_type input[type="radio"]:checked' ).val() == "text") {
            addAnswer($container, false);
            $('#add_answer').prop("disabled", true);
        } else {
            addAnswer($container, true);
        }

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
    });

    /*
     * Create the answer's form
     */
    function addAnswer($container, deletelink) {

        var template = $container.attr('data-prototype')
            .replace(/__name__label__/g, 'Réponse n°' + (index+1))
            .replace(/__name__/g, index)
        ;

        var $prototype = $(template);

        if(deletelink) addDeleteLink($prototype);

        var typeQuestion = $( '#appbundle_question_type input[type="radio"]:checked' ).val();

        $container.append($prototype);

        index++;

        switch (typeQuestion) {
            case "multipleChoicesRadio":
                if(index == 1) {
                    $("#appbundle_question_answers_0 .form-group:first-child label").html("Réponse correcte")
                    $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide()
                } else {
                    $("#appbundle_question_answers_" + (index-1) + " .form-group:first-child label").html("Réponse incorrecte")
                    $("#appbundle_question_answers_" + (index-1) + " .form-group:nth-of-type(2)").hide()
                    $("#appbundle_question_answers_" + (index-1) + "_correct_1").attr("checked", true)
                }
                break;
            case "multipleChoicesCheckBox":
                if(index == 1) {
                    $("#appbundle_question_answers_0 .form-group:first-child label").html("Réponse correcte")
                    $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide()
                }
                break;
        }

        if(index == 1) $("#appbundle_question_add").prop("disabled" , false)

    }

    /*
     * Delete an answer for the current question
     */
    function addDeleteLink($prototype) {
        var $deleteLink = $('<button class="btn btn-danger">Supprimer</button>');

        $prototype.append($deleteLink);

        $deleteLink.click(function(e) {

            $prototype.remove();
            e.preventDefault();
            return false;

        });

    }

});
