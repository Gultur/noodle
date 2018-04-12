$(document).ready(function () {
    const questionsInQuiz = $('#questionsInQuiz');
    const questionsNotInQuiz = $('#questionsNotInQuiz');
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
            }
            );
        }
        else {
            $(elementToMove).appendTo(questionsInQuiz);
            $(event.target).html('Retirer du quiz');
            $.post( idQuiz, {
                "idAddQuestion": $(elementToMove).attr('id')
            });
        }

    });

    // Add minus icon for collapse element which is open by default
    $(".collapse.in").each(function(){
        $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hide.bs.collapse', function(){
        $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });
});