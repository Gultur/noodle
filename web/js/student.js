// le cas closed quiz declenche le par defaut des switchs !!!

$(document).ready(function () {
    var idCurrentQuestion = -1;

    var idSession = -1;
    const indexSession = $("#quiz").attr('data-session');
    var dataSession = -1;
    var answersUser = [];

    function emptyFields(arrayFields) {
        $.each(arrayFields, function(index, value) {
            $("#" + value).empty();
        });
    }

    function displayQuestion(data, elem){
        elem.innerHTML =
            "<p> <span>Question : </span> " + dataSession.name +  "</p>"
            + "<p> <span>Intitulé : </span> " + dataSession.question +  "</p>";

        switch (dataSession.typeQuestion) {
            case "text":

                elem.innerHTML += "<input type='text'>";

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

                for(let i = 0; i < dataSession.responses.length; i++) {

                    const idResponse = "radioResponse" + i;

                    elem.innerHTML += "<div>"
                        + "<input id=" + idResponse + " type='radio' value=\"" + dataSession.responses[i] + "\" name='multipleChoicesRadio' >"
                        + "<label for=" + idResponse + "> "+ dataSession.responses[i] + "</label>"
                        + "</div>";
                }

                break;

            case "multipleChoicesCheckBox":

                for(let i = 0; i < dataSession.responses.length; i++) {

                    const idResponse = "checkBoxResponse" + i;

                    elem.innerHTML += "<div>"
                        + "<input id=" +idResponse  + " type='checkbox' value=\"" + dataSession.responses[i] + "\" name='multipleChoicesCheckBox' value='" + dataSession.responses[i] +"' >"
                        + "<label for="+ idResponse + ">"+ dataSession.responses[i] + "</label>"
                        + "</div>";
                }


                break;
            case _:
                alert("Erreur ! La question n'a pas de type");
                break;
        }
    }


    // handle the end of a quiz or an non existant quiz
    function messageNoSession() {
        emptyFields(["time", "response", "quiz"]);
        clearInterval(quizInterval);
        $("#quiz").html("<p>Le Quiz est terminé</p>");
        $("#redirectLink").show();
    }

    // this function make an ajax request in order to have the current question information
    function handleQuestion() {

        $.getJSON("json/runningQuiz.json", function (data) {

            if(data[indexSession]){
                dataSession = data[indexSession];


                if(idSession == -1){
                    idSession = dataSession.idSession;
                }

                if(idSession != dataSession.idSession){
                    messageNoSession();

                } else {

                    switch (dataSession.status) {

                        case "delayQuestion":

                            emptyFields(["response", "quiz"]);
                            answersUser = [];

                            $("#time").html("La question s'affichera dans " + dataSession.delay + " seconde(s)");
                            break;

                        case "runningQuestion":

                            //alert(dataSession.responded[0])

                            if(dataSession.responded.indexOf(5) > -1){
                                $("#quiz").html("<p>En attente de la question suivante" + ", vous avez répondu : " + answersUser.toString() + "</p>");
                            } else {
                                if (idCurrentQuestion != dataSession.idQuestion) {

                                    var elem = document.createElement("form");
                                    $(elem).attr("id", "questionForm");

                                    displayQuestion(data, elem);

                                    elem.innerHTML += "<input type='submit' id='sendResponse'>";

                                    $("#quiz").html(elem);

                                    if ($("#sendReponse") != null) {

                                        $("#sendResponse").on("click", function (e) {
                                            e.preventDefault();
                                            $("#sendResponse").off();

                                            switch (dataSession.typeQuestion) {
                                                case "text":
                                                    answersUser.push($("#questionForm input[type='text']").val());
                                                    break;

                                                case "trueOrFalse":
                                                case "multipleChoicesRadio":

                                                    $("#questionForm input[type='radio']:checked").each(function () {
                                                        answersUser.push($(this).val());
                                                    });
                                                    break;

                                                case "multipleChoicesCheckBox":
                                                    $("#questionForm input[type='checkbox']:checked").each(function () {
                                                        answersUser.push($(this).val());
                                                    });
                                                    break;

                                            }

                                            $("#quiz").html("<p>En attente de la question suivante" + ", vous avez répondu : " + answersUser.toString() + "</p>");

                                            const formdata = {
                                                "idQuestion": dataSession.idQuestion,
                                                "responses": answersUser,
                                            };


                                            $.post(idSession, formdata);
                                        })
                                    }

                                    idCurrentQuestion = dataSession.idQuestion;

                                }
                            }




                            if (dataSession.idQuestion == "10") {
                                $("#nextQuestion").prop('disabled', true);
                            }

                            $("#time").html("<p>Temps restant : " + dataSession.time + " secondes</p>");

                            break;
                        case "endedQuestionShow":
                            if (typeof reponseEtudiant == 'undefined') {
                                emptyFields(["quiz"]);

                            }
                            var response = document.createElement("p");
                            response.innerHTML = dataSession.responses + " ";
                            $("#response").html(response);
                            $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>");
                            break;
                        case "endedQuestionHide":
                            if (typeof reponseEtudiant == 'undefined') {
                                emptyFields(["quiz"]);

                            }
                            emptyFields(["response"]);
                            $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>");
                            break;
                        case "closedQuiz":
                            /*    emptyFields(["time", "response", "quiz"]);
                                clearInterval(quizInterval);
                                $("#quiz").html("<p>Le Quiz est terminé</p>");
                               $("#redirectLink").show();
   */
                            break;
                        default :
                            messageNoSession();
                            break;
                    }
                }
            } else {messageNoSession();}
        })
    }

    const quizInterval = setInterval(handleQuestion, 1000);
});