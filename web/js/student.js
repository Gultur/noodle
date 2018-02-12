$(document).ready(function () {
    var idCurrentQuestion = -1


    function emptyFields(arrayFields) {
        $.each(arrayFields, function(index, value) {
            $("#" + value).empty()
        })
    }


    // this function make an ajax request in order to have the current question information
    function handleQuestion() {

        $.getJSON("json/runningQuiz.json", function (data) {
            
            switch (data.status) {

                case "delayQuestion":

                    emptyFields(["response"])

                    $("#time").html("La question s'affichera dans " + data.delay + " seconde(s)")
                    break

                case "runningQuestion":

                    if (idCurrentQuestion != data.idQuestion) {

                        var elem = document.createElement("form")
                        elem.setAttribute("id", "questionForm")
                        elem.innerHTML =
                            "<p> <span>Question : </span> " + data.name + "</p>"
                            + "<p> <span>Intitulé : </span> " + data.question + "</p>"
                            + "<input type='text' id='answer' />"
                            + "<input type='submit' id='sendResponse'>"

                        $("#quiz").html(elem)

                        if ($("#sendReponse") != null) {

                            $("#sendResponse").on("click", function(e) {
                                e.preventDefault()
                                $("#sendResponse").off()

                                var formdata = {"idQuestion": data.idQuestion, "idStudent": 1, "response": $("#answer").val()}


                                var studentResponse = $("#answer").val()

                                $("#quiz").html("<p>En attente de la question suivante" + ", vous avez répondu : " + studentResponse + "</p>")


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
                    response.innerHTML = "<span>Réponse : </span>" + data.response
                    $("#response").html(response)
                    $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>")
                    break
                case "endedQuestionHide":
                    if(typeof reponseEtudiant == 'undefined'){
                        emptyFields(["quiz"])

                    }
                    emptyFields(["response"])
                    $("#time").html("<p>Temps écoulé, en attente de la nouvelle question</p>")
                    break
                case "closedQuiz":
                    emptyFields(["time", "response", "quiz"])
                    break
            }
        })
    }

    setInterval(handleQuestion, 1000)
})