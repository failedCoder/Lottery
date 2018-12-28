//handling ajax request for numbers input form

var handleNumbersInput = function () 

{

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
            beforeSend: function () {

                $('.main-results').removeClass('correct');

            },
            success: function (response) {

                if(response.winningNumbers) {

                    form.append(alertBox('success', response.winningNumbers));

                    var selectedArray = $('input:checked').map(function(i,el){return el.value;}).get();

                    var bonusNumber = selectedArray.pop(); 

                    markWinningNumbers(selectedArray, bonusNumber);

                } else if (response.verificationFailed) {

                    form.append(alertBox('danger', response.verificationFailed));

                } else if (response.noResults) {

                    form.append(alertBox('danger', response.noResults));

                } else if (response.notAwinningTicket) {

                    form.append(alertBox('warning', response.notAwinningTicket));

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

}


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

//changes the color of results numbers on index page if they are correct
function markWinningNumbers (inputNumbers, bonusNumber) {

    //loop through all spans containing result numbers except bonus span
    $.each($('.main-results:not(#main-results-bonus) .digit'), function (i,resultSpan) {
        
        var resultNumber = $(resultSpan).html();

        $.each(inputNumbers, function (j,inputNumber) {

            if(inputNumber == resultNumber) {

                $(resultSpan).parent().addClass('correct');

            }

        });

    });
    
    if(bonusNumber == $('#main-results-bonus .digit').html()) {

        $('#main-results-bonus').addClass('correct');

    }

}

