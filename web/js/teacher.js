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

    /*
        check the status of the quiz with the json
        display in function of the status
     */
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

    /*
        change the status of the quiz
     */
    function changeStatus(value) {
        $.post( 'viewquiz', {
            "status": value
        })
    }

    /*
        empty some fields
     */
    function emptyFields(arrayFields) {
        $.each(arrayFields, function(index, value) {
            $("#" + value).empty()
        })
    }

    /*
        display the question with the type
        checkbox/radio
     */
    function displayQuestion(data, elem){

        elem.innerHTML =
            "<p> <span>Question : </span> " + data.name +  "</p>"
            + "<p> <span>Intitulé : </span> " + data.question +  "</p>"

        switch (data.typeQuestion) {
            case "text":
                elem.innerHTML = elem.innerHTML +  "<input type='text' disabled>"

                break
            case "trueOrFalse":
                elem.innerHTML = elem.innerHTML + "<div>"
                    + "<input id='radioTrue' type='radio' value='true' name='trueOrFalse' disabled>"
                    + "<label for='radioTrue'>Vrai</label>"
                    + "</div>"
                    + "<div>"
                    + "<input id='radioFalse' type='radio' value='false' name='trueOrFalse' disabled>"
                    + "<label for='radioFalse'>Faux</label>"
                    + "</div>"

                break
            case "multipleChoicesRadio":

                for(let i = 0; i < data.response.length; i++) {


                    elem.innerHTML = elem.innerHTML + "<div>"
                        + "<input id='radioResponse'"+i +" type='radio' value='true' name='multipleChoicesRadio' disabled>"
                        + "<label for='radioResponse'"+i+"'>"+ data.response[i] + "</label>"
                        + "</div>"
                }

                break

            case "multipleChoicesCheckBox":

                for(let i = 0; i < data.response.length; i++) {


                    elem.innerHTML = elem.innerHTML + "<div>"
                        + "<input id='checkBoxResponse'"+i +" type='checkbox' value='true' name='multipleChoicesCheckBox' value='" + data.response[i] +"' disabled>"
                        + "<label for='checkBoxResponse'"+i+"'>"+ data.response[i] + "</label>"
                        + "</div>"
                }


                break
            case _:
                alert("Erreur ! La question n'a pas de type")
                break
        }
    }

    /*
        this functions handle the action after click on the buttons
     */

    /*
        handle start action button
     */

    $("#startQuiz").click(function () {

        changeStatus("delayQuestion")

        $("#showResponse").html("Envoyer la réponse")

        toggleButtons([], buttons)
        togglePropsButtons(buttons, [])
    })



    /*
        handle next action button
     */
    $("#nextQuestion").click(function () {

        changeStatus("delayQuestion")

        
        $("#showResponse").html("Envoyer la réponse")
        emptyFields(["response"])

        toggleButtons([], buttons)
        togglePropsButtons(buttons, [])
    })

    /*
        handle stop action button
     */
    $("#stopQuestion").click(function () {
        changeStatus("endedQuestionHide")
        $(this).prop("disabled", true)
        $("#showResponse").prop("disabled", false)
        emptyFields(["quiz"])
    })

    /*
        handle show result action button
     */

    $("#showResults").click(function () {

    })

    /*
        handle addtime action button
     */

    $("#addTime").click(function () {
        $.post( 'viewquiz', {
            "addTime": "success"
        })
    })

    /*
        handle showResponse action button
     */

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

    /*
        handle closequiz action button
     */

    $("#closeQuiz").click(function () {

        changeStatus("closedQuiz")

        $("#showResponse").html("Envoyer la réponse")

        emptyFields(["time", "response", "quiz"])

        toggleButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"], ["startQuiz"])
        togglePropsButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"], ["startQuiz"])
    })

    /*
        handle loadquestions action button
        todo : this will be the action of start session
     */
    $("#loadQuestions").click(function () {
        $.post( 'viewquiz', {
            "loadQuestions": "success"
        })
    })
    
    /*
        Main function , look into the Json all seconde
     */

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


                    //todo : implemented session and projectionchoice
                    if("session" == "projeted") {

                        displayQuestion(data, elem)

                    }
                    $("#quiz").html(elem)

                    $("#time").html("Délai d'attente : " + data.delay)
                    break

                case "runningQuestion":

                    var elem = document.createElement("form")
                    elem.setAttribute("id", "questionForm")

                    displayQuestion(data, elem)

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