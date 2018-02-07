/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 46);
/******/ })
/************************************************************************/
/******/ ({

/***/ 46:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(47);


/***/ }),

/***/ 47:
/***/ (function(module, exports) {

$(document).ready(function () {

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

        if (elementsNum <= 9) {

            var container = $("<div class=\"form-body\">\n" + "                            <label class=\"col-md-4 control-label\">Pregunta</label>\n" + "                            <div class=\"form-group\">\n" + "                                <textarea class=\"form-control\" id=\"question\" rows=\"3\"></textarea>\n" + "                            </div>\n" + "\n" + "                            <div>\n" + "                                <label class=\"col-md-4 control-label\">Respuestas</label>\n" + "                            </div>\n" + "\n" + "                            <div class=\"container\">\n" + "                                <div class=\"form-check\">\n" + "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">\n" + "                                    <input class=\"form-control\" id=\"answer1\" name=\"answer1\">\n" + "                                </div>\n" + "                                <br>\n" + "                                <div class=\"form-check\">\n" + "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">\n" + "                                    <input class=\"form-control\" id=\"answer1\" name=\"answer1\">\n" + "                                </div>\n" + "                                <br>\n" + "                                <div class=\"form-check\">\n" + "                                    <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">\n" + "                                    <input class=\"form-control\" id=\"answer1\" name=\"answer1\">\n" + "                                </div>\n" + "                            </div>\n" + "                            </div>\n" + "\n" + "                            <hr style=\"margin: 70px; background-color: #0f3144\">");

            $("#questions").append(container);
            console.log(elementsNum);
        } else {
            var max = $("<label class=\"col-md-4 control-label\">Máximo de preguntas alcanzado</label>");
            $("#questions").append(max);
            $("#btAdd").attr('class', 'btn btn-info bt-disable');
            $("#btAdd").attr('disabled', 'disabled');
        }
    });
});

/***/ })

/******/ });