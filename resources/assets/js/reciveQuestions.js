$(document).ready(function() {

    $('#envQuestions').click(function () {
        var idPreguntas = new Array();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#sortable2").children().each(function() {
            idPreguntas.push(this.id);
        });

        var id = $("#cuestionario").data("id");

        $.ajax({

            type:'POST',

            url:'/ajaxRequest',

            data:{cuestionario: id, preguntas: idPreguntas},

            success:function(data){

                alert(data.success);

            }

        });

    });
});