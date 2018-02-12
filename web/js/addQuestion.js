

    $(document).ready(function() {

        var $container = $('div#appbundle_question_answers');

        var index = $container.find(':input').length;


        if(index == 0) {
            $("#appbundle_question_add").prop("disabled" , true)
        }

        function buildFormType () {
            var typeQuestion = $( '#appbundle_question_type input[type="radio"]:checked' ).val();

            switch (typeQuestion) {

                case "text":

                    $("#appbundle_question_answers .form-group").remove()
                    index = 0

                    addAnswer($container, false)

                    $("#answersDiv .form-group:first label:first").html("Indiquez la réponse")
                    $("#answersDiv .form-group:first .form-group:first label:first").hide()
                    $("#appbundle_question_answers_0 label:first").hide()
                    $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide()

                    $('#add_answer').prop("disabled", true)
                    break

                case "trueOrFalse":

                    $("#appbundle_question_answers .form-group").remove()
                    index = 0

                    addAnswer($container, false)

                    $("#answersDiv .form-group:first label:first").html("Indiquez l'exactitude de la réponse")


                    var divTrue = document.createElement("div")
                    var radioTrue = document.createElement("input")
                    $(radioTrue).attr({type : "radio", id : "trueRadio", value : "true", name : "trueOrFalse", checked : true})
                    var labelTrue = document.createElement("label")
                    $(labelTrue).attr("for","trueRadio");
                    labelTrue.append("Vrai")
                    $(divTrue).append(radioTrue, labelTrue)

                    var divFalse = document.createElement("div")
                    var radioFalse = document.createElement("input")
                    $(radioFalse).attr({type : "radio", id : "falseRadio", value : "false", name : "trueOrFalse"})
                    var labelFalse = document.createElement("label")
                    $(labelFalse).attr("for","falseRadio");
                    labelFalse.append("Faux")
                    $(divFalse).append(radioFalse, labelFalse)


                    $("#appbundle_question_answers_0").append(divTrue, divFalse)


                    $("#appbundle_question_answers_0_value").val($("input[name=\"trueOrFalse\"]:checked").val())

                    $("input[name=\"trueOrFalse\"]").change(function(){

                        $("#appbundle_question_answers_0_value").val($("input[name=\"trueOrFalse\"]:checked").val())

                    })

                    $("#answersDiv .form-group:first .form-group:first label:first").hide()
                    $("#appbundle_question_answers_0 .form-group:first").hide()
                    $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide()


                    $('#add_answer').prop("disabled", true)

                    break

                case "multipleChoicesRadio":

                    $("#appbundle_question_answers .form-group").remove()
                    index = 0

                    addAnswer($container, false)

                    addAnswer($container, false)

                    $('#add_answer').prop("disabled", false)

                    break

                case "multipleChoicesCheckBox":

                    $("#appbundle_question_answers .form-group").remove()
                    index = 0

                    addAnswer($container, false)

                    addAnswer($container, false)

                    $('#add_answer').prop("disabled", false)
                    break

                case _:
                    alert("Aucun type de question n'a été sélectionné")
                    break

            }
        }

        buildFormType ()

        $('#appbundle_question_type input[type="radio"]').change(function(){
            buildFormType ()
        })


        /*
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var $container = $('div#appbundle_question_answers');

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = $container.find(':input').length;
        */

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        $('#add_answer').click(function(e) {

            if($( '#appbundle_question_type input[type="radio"]:checked' ).val() == "text") {
                addAnswer($container, false);
                $('#add_answer').prop("disabled", true)
            } else {
                addAnswer($container, true);
            }

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });

        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
        /*if (index == 0) {
            addAnswer($container);
        } else {
            // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
            $container.children('div').each(function() {
                addDeleteLink($(this));
            });
        }*/

        // La fonction qui ajoute un formulaire CategoryType

        function addAnswer($container, deletelink) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte "__name__label__" qu'il contient par le label du champ
            // - le texte "__name__" qu'il contient par le numéro du champ

            var template = $container.attr('data-prototype')
                .replace(/__name__label__/g, 'Réponse n°' + (index+1))
                .replace(/__name__/g, index)
            ;

            // On crée un objet jquery qui contient ce template
            var $prototype = $(template);

            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            if(deletelink) addDeleteLink($prototype);

            var typeQuestion = $( '#appbundle_question_type input[type="radio"]:checked' ).val();

            // On ajoute le prototype modifié à la fin de la balise <div>
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
                    break
                case "multipleChoicesCheckBox":
                    if(index == 1) {
                        $("#appbundle_question_answers_0 .form-group:first-child label").html("Réponse correcte")
                        $("#appbundle_question_answers_0 .form-group:nth-of-type(2)").hide()
                    }
                    break
            }

            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro

            if(index == 1) $("#appbundle_question_add").prop("disabled" , false)

        }

        // La fonction qui ajoute un lien de suppression d'une catégorie

        function addDeleteLink($prototype) {
            // Création du lien
            var $deleteLink = $('<button class="btn btn-danger">Supprimer</button>');

            // Ajout du lien
            $prototype.append($deleteLink);

            // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
            $deleteLink.click(function(e) {

                $prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;

            });

        }

    });
