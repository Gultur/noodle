$(document).ready(function () {

    const buttons = ["startQuiz", "nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse", "closeQuiz"];

    var idSession = -1;
    var dataSession = 1;
    const indexSession = $("#quiz").attr('data-session');

    /*
     *  Handle the visibility of the buttons
     */
    function toggleButtons(hideButtons, showButtons) {
        $.each(hideButtons, function(index, value) {
            $("#" + value).hide()
        });
        $.each(showButtons, function(index, value) {
            $("#" + value).show()
        });
    }

    /*
     *   Enable or disable the buttons
     */
    function togglePropsButtons(disableButtons, enableButtons) {
        $.each(disableButtons, function(index, value) {
            $("#" + value).prop('disabled', true)
        });
        $.each(enableButtons, function(index, value) {
            $("#" + value).prop('disabled', false)
        });
    }

    /*
     *  Check the status of the session using the json
     */
    $.getJSON("json/runningQuiz.json", function (data) {

        if(data[indexSession]) {
            dataSession = data[indexSession];


            if (idSession == -1) {
                idSession = dataSession.idSession;
            }

            if (idSession != dataSession.idSession) {
                messageNoSession();

            } else {

                switch(dataSession.status) {

                    case "delayQuestion":
                        toggleButtons([], buttons);
                        togglePropsButtons(buttons, []);
                        break;
                    case "runningQuestion":
                        $("#showResponse").html("Envoyer la réponse");
                        toggleButtons([], buttons);
                        togglePropsButtons(["startQuiz", "showResponse", "showResults"], ["nextQuestion", "stopQuestion", "addTime", "closeQuiz"]);
                        break;
                    case "endedQuestionShow":
                        $("#showResponse").html("Cacher la réponse");
                        toggleButtons([], buttons);
                        togglePropsButtons(["startQuiz", "stopQuestion", "addTime"], ["showResponse", "nextQuestion", "showResults", "closeQuiz"]);
                        break;
                    case "endedQuestionHide":
                        $("#showResponse").html("Envoyer la réponse");
                        toggleButtons([], buttons);
                        togglePropsButtons(["startQuiz", "stopQuestion", "addTime"], ["showResponse", "nextQuestion", "showResults", "closeQuiz"]);
                        break;
                    case "closedQuiz":
                        toggleButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse"], ["startQuiz", "closeQuiz"]);
                        togglePropsButtons(["nextQuestion", "stopQuestion", "showResults", "addTime", "showResponse"], ["startQuiz", "closeQuiz"]);
                        break;
                    default:
                        console.log("Erreur, il n'y a pas de statut");
                        break;
                }

                if(dataSession.idsQuestions.length == 0) {
                    togglePropsButtons(["nextQuestion"],[]);
                }
            }
        } else {messageNoSession();}
    });

    /*
     *  Change the status of the session
     */
    function changeStatus(value) {
        $.post( idSession, {
            "status": value
        });
    }

    /*
    * Delete content form specifics fields
    */
    function emptyFields(arrayFields) {
        $.each(arrayFields, function(index, value) {
            $("#" + value).empty()
        });
    }

    /*
    * Display the question depending of the type
    */
    function displayQuestion(data, elem){

        elem.innerHTML =
            "<p> <span>Question : </span> " + dataSession.name +  "</p>"
            + "<p> <span>Intitulé : </span> " + dataSession.question +  "</p>";

        switch (dataSession.typeQuestion) {
            case "text":
                elem.innerHTML += "<input type='text' disabled>";

                break;
            case "trueOrFalse":
                elem.innerHTML += "<div>"
                    + "<input id='radioTrue' type='radio' value='Vrai' name='trueOrFalse' disabled>"
                    + "<label for='radioTrue'>Vrai</label>"
                    + "</div>"
                    + "<div>"
                    + "<input id='radioFalse' type='radio' value='Faux' name='trueOrFalse' disabled>"
                    + "<label for='radioFalse'>Faux</label>"
                    + "</div>";

                break;
            case "multipleChoicesRadio":

                for(let i = 0; i < dataSession.responses.length; i++) {


                    const idResponse = "radioResponse" + i;

                    elem.innerHTML += "<div>"
                        + "<input id=" + idResponse + " type='radio' value=\"" + dataSession.responses[i] + "\" name='multipleChoicesRadio' disabled >"
                        + "<label for=" + idResponse + "> "+ dataSession.responses[i] + "</label>"
                        + "</div>";
                }

                break;

            case "multipleChoicesCheckBox":

                for(let i = 0; i < dataSession.responses.length; i++) {

                    const idResponse = "checkBoxResponse" + i;

                    elem.innerHTML += "<div>"
                        + "<input id=" +idResponse  + " type='checkbox' value=\"" + dataSession.responses[i] + "\" name='multipleChoicesCheckBox' value='" + dataSession.responses[i] +"' disabled >"
                        + "<label for="+ idResponse + ">"+ dataSession.responses[i] + "</label>"
                        + "</div>"
                }


                break;
            default:
                alert("Erreur ! La question n'a pas de type");
                break;
        }
    }

    /*
     * This functions handle the action after click on the buttons
     */

    /*
     * Handle start action button
     */
    $("#startQuiz").click(function () {

        changeStatus("delayQuestion");

        $("#showResponse").html("Envoyer la réponse");

        toggleButtons([], buttons);
        togglePropsButtons(buttons, [])
    });



    /*
     * Handle next action button
     */
    $("#nextQuestion").click(function () {

        changeStatus("delayQuestion");


        $("#showResponse").html("Envoyer la réponse");
        $("#showResults").html("Voir les resultats");
        emptyFields(["response", "graph"]);

        toggleButtons([], buttons);
        togglePropsButtons(buttons, [])
    });

    /*
     * Handle stop action button
     */
    $("#stopQuestion").click(function () {
        changeStatus("endedQuestionHide");
        $(this).prop("disabled", true);
        $("#showResponse").prop("disabled", false);
        $("#showResults").prop("disabled", false);
        $("#addTime").prop("disabled", true);
        emptyFields(["quiz"])
    });

    /*
     * Handle show result action button
     * use the google chart library
     */
    $("#showResults").click(function () {
        $.post( idSession, {
            "showResults": "success"
        });

        setTimeout(function(){
            if($("#showResults").html() == "Cacher les résultats") {
                $("#showResults").html("Voir les résultats");
                emptyFields(["graph"]);
            } else {
                $("#showResults").html("Cacher les résultats");
                if (dataSession.answersResults == null || dataSession.answersResults.length == 0) {
                    $("#graph").html("Il n'y a aucune réponse pour cette question !");
                }
                else {
                    /*let result = document.createElement("ul");
                    for (answerResult in dataSession.answersResults) {
                        result.innerHTML += '<li> ' + answerResult + ' : ' + dataSession.answersResults[answerResult] * 100 / (dataSession.responded.length + dataSession.notResponded.length) + '% </li>';
                    }
                    $("#graph").html(result);*/

                    google.charts.load('current', {'packages':['corechart']});

                    google.charts.setOnLoadCallback(drawChart);

                    let arrayOfData = [['Réponse', 'Proportion', { role: 'annotation' }]];
                    for (answerResult in dataSession.answersResults) {
                        arrayOfData.push([answerResult, dataSession.answersResults[answerResult] * 100 / (dataSession.responded.length + dataSession.notResponded.length), dataSession.answersResults[answerResult]]);
                    }



                    function drawChart() {

                        const data = google.visualization.arrayToDataTable(arrayOfData);

                        const options = {
                            title: 'Répartition des réponses ',
                            subtitle: dataSession.question,


                        };
                        const chart = new google.visualization.BarChart(document.getElementById('graph'));

                        chart.draw(data, options);

                    }
                }

            }
        }, 1500);

    });

    /*
     * Handle addtime action button
     */
    $("#addTime").click(function () {
        $.post( idSession, {
            "addTime": "success"
        })
    });

    /*
     * Handle showResponse action button
     */
    $("#showResponse").click(function () {

        $.getJSON("json/runningQuiz.json", function (data) {
            dataSession = data[indexSession];

            if(dataSession.status == "endedQuestionShow") {
                $.post( idSession, {
                    "status": "endedQuestionHide"
                });
                $("#showResponse").html("Envoyer la réponse")
            } else {
                $.post( idSession, {
                    "status": "endedQuestionShow"
                });
                $("#showResponse").html("Cacher la réponse")
            }
        })
    });

    /*
     * Handle closequiz action button
     */
    $("#closeQuiz").click(function () {

        clearInterval(quizInterval);

        changeStatus("closedQuiz");

    });

    /*
    * Handle the end of a quiz or an access to an ended quiz
    */
    function messageNoSession() {
        clearInterval(quizInterval);
        emptyFields(["time", "response", "quiz"]);
        toggleButtons(buttons,[]);
        togglePropsButtons(buttons,[]);

        $("#quiz").html("<p>Le Quiz est terminé</p>");
        $("#redirectLink").show();

    }

    /*
     * Main function , handle the timers, change the status
     */
    function handleQuestion() {

        $.getJSON("json/runningQuiz.json", function (data) {

            if(data[indexSession]) {
                dataSession = data[indexSession];


                if (idSession == -1) {
                    idSession = dataSession.idSession;
                }

                if (idSession != dataSession.idSession) {
                    messageNoSession();

                } else {

                    var totalStudents = dataSession.responded.length + dataSession.notResponded.length;



                    var elem;

                    switch (dataSession.status) {

                        case "delayQuestion":
                            emptyFields(["totalStudents", "responded", "notResponded", "graph"]);


                            if (dataSession.delay == 0) {
                                if (dataSession.idsQuestions.length == 0) {
                                    togglePropsButtons(["startQuiz", "showResponse", "nextQuestion", "showResults"], ["stopQuestion", "addTime", "closeQuiz"])
                                } else {
                                    togglePropsButtons(["startQuiz", "showResponse", "showResults"], ["nextQuestion", "stopQuestion", "addTime", "closeQuiz"])

                                }
                                changeStatus("runningQuestion");
                                toggleButtons([], buttons);

                            } else {
                                $.post(idSession, {
                                    "decrementDelay": "success"
                                });
                            }
                            elem = document.createElement("form");
                            $(elem).attr("id","questionForm");

                            if ("session" == "projeted") {

                                displayQuestion(data, elem);

                            }
                            $("#quiz").html(elem);

                            $("#time").html("La question s'affichera dans " + dataSession.delay + " seconde(s)");
                            break;

                        case "runningQuestion":

                            elem = document.createElement("form");
                            $(elem).attr("id", "questionForm");

                            displayQuestion(data, elem);

                            $("#quiz").html(elem);
                            $("#responded").html("Nombre d'étudiants ayant répondu : " + dataSession.responded.length + '/' + totalStudents);
                            $("#notResponded").html("Nombre d'étudiants n'ayant pas répondu : " + dataSession.notResponded.length + '/' + totalStudents);


                            if (dataSession.time == 0) {



                                emptyFields(["quiz"]);
                                $("#showResponse").prop('disabled', false);
                                $("#showResults").prop('disabled', false);
                                $("#addTime").prop('disabled', true);
                                $("#stopQuestion").prop('disabled', true);
                                $.post(idSession, {
                                    "status": "endedQuestionHide"
                                });
                            } else {

                                $.post(idSession, {
                                    "decrementTime": "success"
                                });

                                $("#time").html("<p>Temps restant : " + dataSession.time + " secondes</p>");
                            }

                            break;

                        case "endedQuestionShow":
                            let response = document.createElement("div");

                            let responseHeader = document.createElement("p");

                            responseHeader.innerHTML = "<p> Pour la question : <strong>" + dataSession.question + "</strong></p>";

                            if(dataSession.responses.length > 1) {
                                responseHeader.innerHTML += "<p> Les bonnes réponses  étaient : </p>";
                            }
                            else {
                                responseHeader.innerHTML += "<p> La bonne réponse était : </p>";

                            }

                            response.appendChild(responseHeader);

                            let responseBody = document.createElement("ul");

                            for (let i = 0; i < dataSession.responses.length; i++) {
                                if(i != dataSession.responses.length-1) {
                                    responseBody.innerHTML += "<li class='text-success'>" + dataSession.responses[i] + " </li> "
                                } else {
                                    responseBody.innerHTML += "<li class='text-success'>" + dataSession.responses[i] + " </li> "
                                }
                            }

                            response.appendChild(responseBody);



                            $("#response").html(response);
                            $("#time").html("Temps écoulé");
                            $("#responded").html("Nombre d'étudiants ayant répondu : " + dataSession.responded.length + '/' + totalStudents);
                            $("#notResponded").html("Nombre d'étudiants n'ayant pas répondu : " + dataSession.notResponded.length + '/' + totalStudents);

                            break;

                        case "endedQuestionHide":
                            $("#time").html("Temps écoulé");
                            $("#responded").html("Nombre d'étudiants ayant répondu : " + dataSession.responded.length + '/' + totalStudents);
                            $("#notResponded").html("Nombre d'étudiants n'ayant pas répondu : " + dataSession.notResponded.length + '/' + totalStudents);
                            $("#addTime").prop('disabled', true);

                            emptyFields(["response"]);


                            break;
                        case "closedQuiz":
                            $("#totalStudents").html("Nombre d'étudiants connectés au quiz : " + totalStudents);
                            break;
                        default:
                            messageNoSession();
                    }
                }
            } else {messageNoSession();}
        })
    }

    const quizInterval = setInterval(handleQuestion, 1000);
});