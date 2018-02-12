$(document).ready(function () {

    /*
        array with all the buttons id
     */
    buttons = ["startQuiz", "nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"]

    /*
        handle the visibility of the buttons
     */
    function toggleButtons(hideButtons, showButtons) {
        $.each(hideButtons, function(index, value) {
            $("#" + value).hide()
        })
        $.each(showButtons, function(index, value) {
            $("#" + value).show()
        })
    }
    /*
        enable or disable the buttons
     */

    function togglePropsButtons(disableButtons, enableButtons) {
        $.each(disableButtons, function(index, value) {
            $("#" + value).prop('disabled', true)
        })
        $.each(enableButtons, function(index, value) {
            $("#" + value).prop('disabled', false)
        })
    }

    $.getJSON("json/runningQuiz.json", function (data) {
        switch(data.status) {

            case "delayQuestion":
                toggleButtons([], buttons)
                togglePropsButtons(buttons, [])
                break
            case "runningQuestion":
                $("#showResponse").html("Envoyer la réponse")
                toggleButtons([], buttons)
                togglePropsButtons(["startQuiz", "showResponse"], ["nextQuestion", "stopQuestion", "showResults", "addTime", "closeQuiz"])
                break
            case "endedQuestionShow":
                $("#showResponse").html("Cacher la réponse")
                toggleButtons([], buttons)
                togglePropsButtons(["startQuiz", "stopQuestion", "addTime"], ["showResponse", "nextQuestion", "showResults", "closeQuiz"])
                break
            case "endedQuestionHide":
                $("#showResponse").html("Envoyer la réponse")
                toggleButtons([], buttons)
                togglePropsButtons(["startQuiz", "stopQuestion", "addTime"], ["showResponse", "nextQuestion", "showResults", "closeQuiz"])
                break
            case "closedQuiz":
                toggleButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"], ["startQuiz"])
                togglePropsButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"], ["startQuiz"])
                break
            default:
                console.log("Erreur, il n'y a pas de statut")
                break
        }
    })

    // Fonction permettant de modifier le status du quiz
    function changeStatus(value) {
        $.post( 'viewquiz', {
            "status": value
        })
    }

    function emptyFields(arrayFields) {
        $.each(arrayFields, function(index, value) {
            $("#" + value).empty()
        })
    }

    // Gestion des boutons (démarrer, clore, question suivante, afficher la réponse)

    $("#startQuiz").click(function () {

        changeStatus("delayQuestion")

        $("#showResponse").html("Envoyer la réponse")

        toggleButtons([], buttons)
        togglePropsButtons(buttons, [])
    })





    $("#nextQuestion").click(function () {

        changeStatus("delayQuestion")

        
        $("#showResponse").html("Envoyer la réponse")
        emptyFields(["response"])

        toggleButtons([], buttons)
        togglePropsButtons(buttons, [])
    })

    $("#stopQuestion").click(function () {
        changeStatus("endedQuestionHide")
        $(this).prop("disabled", true)
        $("#showResponse").prop("disabled", false)
        emptyFields(["quiz"])
    })

    $("#showResults").click(function () {

    })

    $("#addTime").click(function () {
        $.post( 'viewquiz', {
            "addTime": "success"
        })
    })

    $("#showResponse").click(function () {
        
        $.getJSON("json/runningQuiz.json", function (data) {
            if(data.status == "endedQuestionShow") {
                $.post( 'viewquiz', {
                    "status": "endedQuestionHide"
                })
                $("#showResponse").html("Envoyer la réponse")
            } else {
                $.post( 'viewquiz', {
                    "status": "endedQuestionShow"
                })
                $("#showResponse").html("Cacher la réponse")
            }
        })
    })



    $("#closeQuiz").click(function () {

        changeStatus("closedQuiz")

        $("#showResponse").html("Envoyer la réponse")

        emptyFields(["time", "response", "quiz"])

        toggleButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"], ["startQuiz"])
        togglePropsButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"], ["startQuiz"])
    })

    $("#loadQuestions").click(function () {
        $.post( 'viewquiz', {
            "loadQuestions": "success"
        })
    })
    
    // Fonction principale permettant d'actualiser le quiz toutes les secondes
    // de récupérer le fichier json de la question en cours
    // de gérer le temps, l'affichage de la réponse, le status du quiz
    // et d'afficher la question en cours côté enseignant
    function handleQuestion() {

        $.getJSON("json/runningQuiz.json", function (data) {
            
            switch(data.status) {

                case "delayQuestion":

                    if(data.delay == 0) {
                        if(data.idsQuestions.length == 0){
                            togglePropsButtons(["startQuiz", "showResponse", "nextQuestion"], ["stopQuestion", "showResults", "addTime", "closeQuiz"])
                        } else {
                            togglePropsButtons(["startQuiz", "showResponse"], ["nextQuestion", "stopQuestion", "showResults", "addTime", "closeQuiz"])

                        }
                        changeStatus("runningQuestion")
                        toggleButtons([], buttons)

                    } else {
                        $.post( 'viewquiz', {
                            "decrementDelay": "success"
                        })
                    }

                    var elem = document.createElement("form")
                    elem.setAttribute("id", "questionForm")

                    elem.innerHTML =
                        "<p> <span>Question : </span> " + data.name +  "</p>"
                        + "<p> <span>Intitulé : </span> " + data.question +  "</p>"
                        + "<input type='text' disabled>"

                    $("#quiz").html(elem)

                    $("#time").html("Délai d'attente : " + data.delay)
                    break

                case "runningQuestion":

                    var elem = document.createElement("form")
                    elem.setAttribute("id", "questionForm")

                    elem.innerHTML =
                        "<p> <span>Question : </span> " + data.name +  "</p>"
                        + "<p> <span>Intitulé : </span> " + data.question +  "</p>"
                        + "<input type='text' disabled>"

                    $("#quiz").html(elem)


                    if(data.time == 0) {

                        $.post( 'viewquiz', {
                            "status": "endedQuestionHide"
                        })

                        emptyFields(["quiz"])
                        $("#showResponse").prop('disabled', false)
                        $("#addtime").prop('disabled', true)
                    } else {

                        $.post( 'viewquiz', {
                            "decrementTime": "success"
                        })

                        $("#time").html("<p>Temps restant : " + data.time + " secondes</p>")
                    }
                    
                    break
                case "endedQuestionShow":
                    var response = document.createElement("p")
                    response.innerHTML = "<span>Réponse : </span>" + data.response
                    $("#response").html(response)
                    $("#time").html("Temps écoulé")
                    break
                case "endedQuestionHide":
                    $("#time").html("Temps écoulé")
                    emptyFields(["response"])

                    break
                case "closedQuiz":
                    emptyFields(["time", "response", "quiz"])
                    break
            }
        })
    }

    setInterval(handleQuestion, 1000);
})