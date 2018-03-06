$(document).ready(function() {


    $( function() {
        $( "ul.droptrue" ).sortable({
            connectWith: "ul"
        });

        $( "ul.dropfalse" ).sortable({
            connectWith: "ul"
        });

        $( "#sortable1, #sortable2" ).disableSelection();
    } );
});