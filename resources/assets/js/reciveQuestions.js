$(document).ready(function() {
console.log("pepe");
    $('#envQuestions').click(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            type:'POST',

            url:'/ajaxRequest',

            data:{name:"nombre", password:"password", email:"email"},

            success:function(data){

                alert(data.success);

            }

        });

    });
});