$(document).ready(function () {

	    $( "input" ).checkboxradio({
      		icon: false
    	});

    	function limitCheckbox (elementSelector, limit) {
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


    	limitCheckbox('[id^="main-number-"]', 5);
    	limitCheckbox('[id^="bonus-number-"]', 1);

    	var formSubmitCondition = $('input[id^="main-number-"]:checked').length <= 4 || $('input[id^="bonus-number-"]:checked').length !== 1;
    	preventFormSubmit('form', formSubmitCondition);
    	
    	
});
