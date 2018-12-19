$(document).ready(function () {

    
    var inputForm = $('#number-input');

    var drawForm = $('#draw-form');

    inputForm.on('submit', function(e) {

      e.preventDefault();
      
      if(validateInputNumbers($(this))) {

        console.log('yess');

      }

    });
      

   
    	/*function limitCheckbox (elementSelector, limit) {
    		$(elementSelector).change(function(){
    		if($(this).siblings(':checked').length >= limit) {
       			this.checked = false;
       			alert("Možete odabrati maksimalno:" + limit + " brojeva!");
       			location.reload();
   			}
    	});
    	}

    	function preventFormSubmit (form, condition) {
    		$(form).on('submit', function(e){
    			if(condition) {
    				e.preventDefault();
    			}
    		});
    	}

      $('.error').delay(3000).fadeOut();


    	limitCheckbox('[id^="main-number-"]', 5);
    	limitCheckbox('[id^="bonus-number-"]', 1);

    	var formSubmitCondition = $('input[id^="main-number-"]:checked').length <= 4 || $('input[id^="bonus-number-"]:checked').length !== 1;
    	//preventFormSubmit('#number-input', formSubmitCondition);*/
    	
    	App.init();
});

function removeInputIcons(element) {

          $(element).checkboxradio({
            icon: false
          });

};

function validateInputNumbers (form) {
      
      form.parsley({
              errorsWrapper: '<div class="text-danger text-center py-3 font-weight-bold"></div>',
              errorTemplate: '<span></span>'
      }).validate();

      if(form.parsley().isValid()) {

        return true;

      }

      return false;
    }  

var App = function () {

    return {

        init: function () {

            removeInputIcons('input');

        }
    }
    
}();

