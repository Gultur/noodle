$(document).ready(function () {
    var idCurrentQuestion = -1;


    function emptyFields(arrayFields) {
        $.each(arrayFields, function(index, value) {
            $("#" + value).empty()
        })
    }

    function displayQuestion(data, elem){
        elem.innerHTML =
            "<p> <span>Question : </span> " + data.name +  "</p>"
            + "<p> <span>Intitulé : </span> " + data.question +  "</p>"

        switch (data.typeQuestion) {
            case "text":

                elem.innerHTML += "<input type='text'>"

                break;
            case "trueOrFalse":
                elem.innerHTML +=  "<div>"
                    + "<input id='radioTrue' type='radio' value='Vrai' name='trueOrFalse'>"
                    + "<label for='radioTrue'>Vrai</label>"
                    + "</div>"
                    + "<div>"
                    + "<input id='radioFalse' type='radio' value='Faux' name='trueOrFalse'>"
                    + "<label for='radioFalse'>Faux</label>"
                    + "</div>";

                break;
            case "multipleChoicesRadio":

                for(let i = 0; i < data.responses.length; i++) {

                    const idResponse = "radioResponse" + i

                    elem.innerHTML += "<div>"
                        + "<input id=" + idResponse + " type='radio' value=\"" + data.responses[i] + "\" name='multipleChoicesRadio' >"
                        + "<label for=" + idResponse + "> "+ data.responses[i] + "</label>"
                        + "</div>"
                }

                break;

            case "multipleChoicesCheckBox":

                for(let i = 0; i < data.responses.length; i++) {

                    const idResponse = "checkBoxResponse" + i

                    elem.innerHTML += "<div>"
                        + "<input id=" +idResponse  + " type='checkbox' value=\"" + data.responses[i] + "\" name='multipleChoicesCheckBox' value='" + data.responses[i] +"' >"
                        + "<label for="+ idResponse + ">"+ data.responses[i] + "</label>"
                        + "</div>"
                }


                break;
            case _:
                alert("Erreur ! La question n'a pas de type");
                break
        }
    }


    // this function make an ajax request in order to have the current question information
    function handleQuestion() {

        $.getJSON("json/runningQuiz.json", function (data) {
            
            switch (data.status) {

                case "delayQuestion":

                    emptyFields(["response","quiz"]);

                    $("#time").html("La question s'affichera dans " + data.delay + " seconde(s)");
                    break;

                case "runningQuestion":

                    if (idCurrentQuestion != data.idQuestion) {

                        var elem = document.createElement("form");
                        elem.setAttribute("id", "questionForm");

                        displayQuestion(data, elem);

                        elem.innerHTML += "<input type='submit' id='sendResponse'>";

                        $("#quiz").html(elem);

                        if ($("#sendReponse") != null) {

                            $("#sendResponse").on("click", function(e) {
                                e.preventDefault();
                                $("#sendResponse").off();

                                var answersUser = []

                                switch (data.typeQuestion) {
                                    case "text":
                                        answersUser.push($("#questionForm input[type='text']").val())
                                        break

                                    case "trueOrFalse":
                                    case "multipleChoicesRadio":

                                        $("#questionForm input[type='radio']:checked").each(function() {
                                            answersUser.push($(this).val())
                                        })
                                        break

                                    case "multipleChoicesCheckBox":
                                        $("#questionForm input[type='checkbox']:checked").each(function() {
                                            answersUser.push($(this).val())
                                        })
                                        break

                                }

                                const formdata = {"idQuestion": data.idQuestion, "idStudent": 1, "responses": answersUser}

                                $("#quiz").html("<p>En attente de la question suivante" + ", vous avez répondu : " + answersUser.toString() + "</p>")

                                $.post('responsequestion', formdata)
                            })
                        }

                        idCurrentQuestion = data.idQuestion

                    }


                    if(data.idQuestion == "10"){
                        $("#nextQuestion").prop('disabled', true)
                    }

                    $("#time").html("<p>Temps restant : " + data.time + " secondes</p>")
                    
                    break
                case "endedQuestionShow":
                    if(typeof reponseEtudiant == 'undefined'){
                        emptyFields(["quiz"])

                    }
                    var response = document.createElement("p")
                    response.innerHTML = data.responses + " "
                    $("#response").html(response)
                    $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>")
                    break
                case "endedQuestionHide":
                    if(typeof reponseEtudiant == 'undefined'){
                        emptyFields(["quiz"])

                    }
                    emptyFields(["response"]);
                    $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>");
                    break;
                case "closedQuiz":
                    emptyFields(["time", "response", "quiz"]);
                    clearInterval(quizInterval);
                    $("#quiz").html("<p>Le Quiz est terminé</p>")
                   $("#redirectLink").show()

                    break
            }
        })
    }

    const quizInterval = setInterval(handleQuestion, 1000);
});