$(document).ready(function () {
    const questionsInQuiz = $('#leftDiv');
    const questionsNotInQuiz = $('#rightDiv');
    const idQuiz = $('h1').attr('data-quiz');

    $('#questionsInQuiz button').each(function () {
        $(this).html('Retirer du quiz');
    });
    $('#questionsNotInQuiz button').each(function () {
        $(this).html('Ajouter au quiz');
    });

    /*
    * Add or remove dynamically question to the quiz
    */
    $('main button').click(function (event) {
        event.stopPropagation();
        let elementToMove = $(event.target).parent();
        let elementParent = $(elementToMove).parent();


        if ($(elementParent).attr('id') == 'questionsInQuiz') {
            $(elementToMove).appendTo(questionsNotInQuiz);
            $(event.target).html('Ajouter au quiz');
            $.post( idQuiz, {
                "idRemoveQuestion": $(elementToMove).attr('id')
            });
        }
        else {
            $(elementToMove).appendTo(questionsInQuiz);
            $(event.target).html('Retirer du quiz');
            $.post( idQuiz, {
                "idAddQuestion": $(elementToMove).attr('id')
            });
        }


        console.log(elementToMove);
    })
})