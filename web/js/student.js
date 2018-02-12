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

                elem.innerHTML = elem.innerHTML + "<input type='text'>"

                break;
            case "trueOrFalse":
                elem.innerHTML = elem.innerHTML + "<div>"
                    + "<input id='radioTrue' type='radio' value='true' name='trueOrFalse'>"
                    + "<label for='radioTrue'>Vrai</label>"
                    + "</div>"
                    + "<div>"
                    + "<input id='radioFalse' type='radio' value='false' name='trueOrFalse'>"
                    + "<label for='radioFalse'>Faux</label>"
                    + "</div>";

                break;
            case "multipleChoicesRadio":

                for(let i = 0; i < data.response.length; i++) {


                    elem.innerHTML = elem.innerHTML + "<div>"
                        + "<input id='radioResponse'"+i +" type='radio' value='true' name='multipleChoicesRadio' >"
                        + "<label for='radioResponse'"+i+"'>"+ data.response[i] + "</label>"
                        + "</div>"
                }

                break;

            case "multipleChoicesCheckBox":

                for(let i = 0; i < data.response.length; i++) {


                    elem.innerHTML = elem.innerHTML + "<div>"
                        + "<input id='checkBoxResponse'"+i +" type='checkbox' value='true' name='multipleChoicesCheckBox' value='" + data.response[i] +"' disabled>"
                        + "<label for='checkBoxResponse'"+i+"'>"+ data.response[i] + "</label>"
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

                        elem.innerHTML = elem.innerHTML + "<input type='submit' id='sendResponse'>";

                        $("#quiz").html(elem);

                        if ($("#sendReponse") != null) {

                            $("#sendResponse").on("click", function(e) {
                                e.preventDefault();
                                $("#sendResponse").off();

                                var formdata = {"idQuestion": data.idQuestion, "idStudent": 1, "response": $("#answer").val()};


                                var studentResponse = $("#answer").val();

                                $("#quiz").html("<p>En attente de la question suivante" + ", vous avez répondu : " + studentResponse + "</p>");


                                $.post('responsequestion', formdata)
                            })
                        }

                        idCurrentQuestion = data.idQuestion

                    }


                    if(data.idQuestion == "10"){
                        $("#nextQuestion").prop('disabled', true)
                    }

                    $("#time").html("<p>Temps restant : " + data.time + " secondes</p>");
                    
                    break;
                case "endedQuestionShow":
                    if(typeof reponseEtudiant == 'undefined'){
                        emptyFields(["quiz"])

                    }
                    var response = document.createElement("p");
                    response.innerHTML = "<span>Réponse : </span>" + data.response;
                    $("#response").html(response);
                    $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>");
                    break;
                case "endedQuestionHide":
                    if(typeof reponseEtudiant == 'undefined'){
                        emptyFields(["quiz"])

                    }
                    emptyFields(["response"]);
                    $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>");
                    break;
                case "closedQuiz":
                    emptyFields(["time", "response", "quiz"]);
                    break
            }
        })
    }

    setInterval(handleQuestion, 1000)
});