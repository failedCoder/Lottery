$(document).ready(function () {

    var drawForm = $('#draw-form');


    var inputForm = $('#number-input');    

    inputForm.on('submit', function(e) {

      var form = $(this);

      e.preventDefault();

      var request;

      if (request) {

          request.abort();

      }
      
      if(validateInputNumbers(form)) {

        var numbers = form.serialize();

        $.ajax({

            url: 'submit',

            type: 'POST',

            data: numbers,

            success: function (response) {

                if(response.success) {

                    form.append(alertBox('success', response.success));

                } else if (response.verificationFailed) {

                    form.append(alertBox('danger', response.verificationFailed));

                } else if (response.noResults) {

                    form.append(alertBox('danger', response.noResults));

                }
                
            },

            error: function () {

                form.append(

                    alertBox('danger', 'Dogodila se pogreška, probajte ponovo!')

                  );

            },

            complete: function () {

                var formId = form.attr('id');

                $('#' + formId + ' .alert').fadeOut(5000);

            }

        });

      }

    });
      

   
    	
    	function preventFormSubmit (form, condition) {
    		$(form).on('submit', function(e){
    			if(condition) {
    				e.preventDefault();
    			}
    		});
    	}

      $('.error').delay(3000).fadeOut();

    	
    	App.init();
});



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

