
var App = function () {

    return {

        init: function () {

            removeInputIcons('input');

            handleNumbersInput();

        }
    }
    
}();


$(document).ready(function () {
    	
    	App.init();

});



