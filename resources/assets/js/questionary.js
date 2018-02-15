$(document).ready(function() {


    $('#btAdd').click(function () {
/**
        let container = $("<div class=\"container\">");
        let label = $("<label class=\"col-md-4 control-label\">Pregunta</label>");
        let question = $("<div class=\"form-group\">\n" +
            "                                <textarea class=\"form-control\" id=\"question\" rows=\"3\"></textarea>\n" +
            "                            </div>");
        let answer = $("<div>\n" +
            "                                <label class=\"col-md-4 control-label\">Respuestas</label>\n" +
            "                            </div>\n" +
            "\n" +
            "                            <div class=\"container\">\n" +
            "                                <div class=\"form-check\">\n" +
            "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">\n" +
            "                                    <input class=\"form-control\" id=\"answer1\" name=\"answer1\">\n" +
            "                                </div>\n" +
            "                                <br>\n" +
            "                                <div class=\"form-check\">\n" +
            "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">\n" +
            "                                    <input class=\"form-control\" id=\"answer1\" name=\"answer1\">\n" +
            "                                </div>\n" +
            "                                <br>\n" +
            "                                <div class=\"form-check\">\n" +
            "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">\n" +
            "                                    <input class=\"form-control\" id=\"answer1\" name=\"answer1\">\n" +
            "                                </div>\n" +
            "                            </div>\n" +
            "                            </div>");

        container.append(label);
        container.append(question);
        container.append(answer);

        console.log("hola");
 **/

var elementsNum = $("#questions div.form-body").length + 1;

if(elementsNum <= 9) {

    let container = $("<div class=\"form-body\">\n" +
        "                            <label class=\"col-md-4 control-label\">Pregunta</label>\n" +
        "                            <div class=\"form-group\">\n" +
        "                                <textarea class=\"form-control\" id=\"question " + elementsNum + "\" rows=\"3\"></textarea>\n" +
        "                            </div>\n" +
        "\n" +
        "                            <div>\n" +
        "                                <label class=\"col-md-4 control-label\">Respuestas</label>\n" +
        "                            </div>\n" +
        "\n" +
        "                            <div class=\"container\">\n" +
        "                                <div class=\"form-check\">\n" +
        "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"optionA " + elementsNum + "\" value=\"option1\">\n" +
        "                                    <input class=\"form-control\" id=\"answer1\" name=\"answerA " + elementsNum + "\">\n" +
        "                                </div>\n" +
        "                                <br>\n" +
        "                                <div class=\"form-check\">\n" +
        "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"optionB " + elementsNum + "\" value=\"option1\">\n" +
        "                                    <input class=\"form-control\" id=\"answer1\" name=\"answerB " + elementsNum + "\">\n" +
        "                                </div>\n" +
        "                                <br>\n" +
        "                                <div class=\"form-check\">\n" +
        "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"optionC " + elementsNum + "\" value=\"option1\">\n" +
        "                                    <input class=\"form-control\" id=\"answer1\" name=\"answerC " + elementsNum + "\">\n" +
        "                                </div>\n" +
        "                            </div>\n" +
        "                            </div>\n" +
        "\n" +
        "                            <hr style=\"margin: 70px; background-color: #0f3144\">");

    $("#questions").append(container);
    console.log(elementsNum);

}else{
    let max = $("<label class=\"col-md-4 control-label\">Máximo de preguntas alcanzado</label>");
    $("#questions").append(max);
    $("#btAdd").attr('class', 'btn btn-info bt-disable');
    $("#btAdd").attr('disabled', 'disabled');


}


    });
});
