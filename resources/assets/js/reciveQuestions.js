$(document).ready(function() {
console.log("pepe");
    $('#envQuestions').click(function () {

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