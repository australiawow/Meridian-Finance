(function($) {
    
    "use strict";
    
    //- Fire first popup
    initialPopup();
    
    if ($('#financeForm input[type="tel"]').length > 0) {
		$('#financeForm input[type="tel"]').intlTelInput({
		  initialCountry: "ie",
		  separateDialCode: true,
		  preferredCountries: ["ie", "au", "gb"],
		  utilsScript: "./assets/vendor/int-tel-input/js/utils.js"
		});
		$('#financeForm input[type="tel"]').inputmask("numeric", {
			rightAlign: false,
		});
	}
	
	//- INITIALISE MAONSTER HELPERS
	$('#financeForm input').maonsterBind();
	$('#financeForm .step').maonsterStep();
    
    //- INITIALISE BOOTSTRAP DATEPICKER
    $('#birthday').datepicker({
    	format: 'yyyy/mm/dd',
    	startDate: "1985/01/01",
		endDate: "1999/01/01"
    });
    $('#birthday input').inputmask("yyyy/mm/dd", {
		rightAlign: false,
		alias: 'yyyy/mm/dd'
	});
    $('#expiry').datepicker({
    	format: 'yyyy/mm/dd'
    });
    $('#expiry input').inputmask("yyyy/mm/dd", {
		rightAlign: false,
		alias: 'yyyy/mm/dd'
	});
    
    //- INITIALISE CURRENCY
    $('input.currency').inputmask("numeric", {
	    radixPoint: ".",
	    groupSeparator: ",",
	    digits: 2,
	    autoGroup: true,
	    prefix: '€ ', //Space after €, this will not truncate the first character.
	    rightAlign: false,
	    oncleared: function () { $(this).val(''); }
	});
	//inputmask('unmaskedvalue');
	
	//- INITIALISE EVENT TOGGLE FOR CONSENT
	$('#consentChecked').on('change', function(){
		if ($(this).is(':checked')) {
			$('#requestApproval').removeClass('btn-default disabled').addClass('btn-success');
		}
		else {
			$('#requestApproval').removeClass('btn-success').addClass('btn-default disabled');
		}
	});
    
	$("#financeForm").submit(function(e){
        e.preventDefault();
        var dataToSend = $( this ).serializeArray();
        console.log( dataToSend );
        //$('#loader').modal('show');
	    //- AJAX SUBMIT HERE OR ADD URL TO FORM AND USE FORM SUBMIT METHOD eg. $('the form').submit()
	    
    });
    
    $('.next').on('click', function(e){
	    e.preventDefault();
	    var parent = $(this).parent().parent();
	    var value  = parseInt($(parent).attr('id').split('-')[1]) + 1;
	    var next   = "#step-"+value;
	    var steps  = $('.step').length;
	    animateProgressBar(value, steps);
	    
	    //- next step
	    $(parent).addClass('hidden');
	    $(next).removeClass('hidden');
	    $(next).focus();
	    $('#step-word').text("Step " + value + " of " + steps);
	    
	    updateSectionTitle(value);
    });
    
    $('.back').on('click', function(e){
	    e.preventDefault();
	    var parent = $(this).parent().parent();
	    var value  = parseInt($(parent).attr('id').split('-')[1]) - 1;
	    var back   = "#step-"+value;
	    var steps  = $('.step').length;
	    animateProgressBar(value, steps);
	    
	    //- back step
	    $(parent).addClass('hidden');
	    $(back).removeClass('hidden');
	    $(back).focus();
	    $('#step-word').text("Step " + value + " of " + steps);
	    
	    updateSectionTitle(value);
    });
    
    function updateSectionTitle (step) {
	    
	    if (step > 0 && step <= 3) {
		    $('#sectionTitle').text('Personal Details');
	    }
	    else if (step > 3 && step <= 5) {
		    $('#sectionTitle').text('Financial Details');
	    }
	    else if (step == 6) {
		    $('#sectionTitle').text('Vehicle Details');
	    }
	    else if (step == 7) {
		    $('#sectionTitle').text('Joint Proposal');
	    }
	    else if (step >= 8) {
		    $('#sectionTitle').text('');
	    }
    }
    
    
    //- INITIALISE SWAL POPUP FOR INITIAL POPUP QUESTION
    function initialPopup () {
	    swal.setDefaults({
		  confirmButtonText: 'YES',
		  cancelButtonText: 'NO',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonClass: 'btn btn-success',
		  cancelButtonClass: 'btn btn-danger',
		  allowOutsideClick: false,
		  allowEscapeKey: false,
		  allowEnterKey: false,
		  buttonsStyling: false,
		})
		
		var steps = [
		  {
		    title: 'Welcome!',
		    html: 'Before we start, two quick questions:<br/><br/>Are you in full time employment?'
		  },
		  {
		    title: 'Excellent!',
		    html: 'Can you show your last two pay slips?'
		  },
		]
		
		swal.queue(steps).then(function (result) {
		  swal.resetDefaults()
		  swal({
		    title: 'OK, let\'s start!',
			showCancelButton: false,
		    confirmButtonText: 'START',
			allowOutsideClick: false,
			allowEscapeKey: false,
			allowEnterKey: false,
			confirmButtonColor: '#3085d6',
		   	confirmButtonClass: 'btn btn-success',
		   	buttonsStyling: false,
		  }).then(function () {
			  fbq('track', 'Lead');
		  })
		}, function () {
		  swal({
		    title: 'No problem!',
		    html: 
		    	'Rather than fill this form out though, it\'s best to call us on <br/><a href="tel:0599130427">059 91 30427</a> ' +
		    	'as we might be able to help you.',
			showCancelButton: false,
			showConfirmButton: false,
		  })
		})
    }
    
    
    // PROGRESSBAR CLASS DEFINITION
    // ============================

    var Progressbar = function (element) {
        this.$element = $(element);
    }

    Progressbar.prototype.update = function (value) {
        var $div = this.$element.find('div');
        var $span = $div.find('span');
        $div.attr('aria-valuenow', value);
        $div.css('width', value + '%');
        $span.text(value + '%');
    }

    Progressbar.prototype.finish = function () {
        this.update(100);
    }

    Progressbar.prototype.reset = function () {
        this.update(0);
    }

    // PROGRESSBAR PLUGIN DEFINITION
    // =============================

    $.fn.progressbar = function (option) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('jbl.progressbar');

            if (!data) $this.data('jbl.progressbar', (data = new Progressbar(this)));
            if (typeof option == 'string') data[option]();
            if (typeof option == 'number') data.update(option);
        })
    };

    // PROGRESSBAR DATA-API
    // ====================

    $(document).on('click', '[data-toggle="progressbar"]', function (e) {
        var $this = $(this);
        var $target = $($this.data('target'));
        var value = $this.data('value');
		console.log(value);
        e.preventDefault();

        $target.progressbar(value);
    });
    
    function animateProgressBar (value, total) {
		var perce = Math.floor((value/total) * 100);
		console.log(perce);
        $('#myProgressbar').progressbar(perce);
    }
	
})(jQuery);