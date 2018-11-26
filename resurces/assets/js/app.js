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

    	limitCheckbox('[id^="main-number-"]', 5);
    	limitCheckbox('[id^="bonus-number-"]', 1);
});
