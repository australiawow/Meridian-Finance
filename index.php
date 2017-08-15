<!DOCTYPE html>
<html lang="">
	<head>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Meridian Motors Finance Form</title>
		<meta name="description" content="" />
  		<meta name="keywords" content="" />
		<meta name="robots" content="" />
		
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Font awesome icons -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- SWAL2 Popup plugin -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.css">
		<!-- International telephone input plugin -->
		<link rel="stylesheet" href="assets/vendor/int-tel-input/css/intlTelInput.css">
		<!-- Bootstrap date picker -->
		<link rel="stylesheet" href="assets/vendor/bootstrap.datepicker/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '343586766024090'); // Insert your pixel ID here.
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=343586766024090&ev=PageView&noscript=1"
		/></noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->
		
	</head>
	<body>
		
		<div class="container">
	      <div class="header clearfix text-center">
	      	<div class="col-sm-offset-1 col-sm-3">
	      		<img src="assets/images/logo.png" class="img-responsive center-block" />
	      	</div>
	      	
	      	<div class="col-sm-7">
		        <h2 class="text-muted">Finance Application Form</h1>
		        <p>
			        Fill out the form below and let us get back to you on any query you may have.
		        </p>
	      	</div>
	      </div>
	      
	      <div>
	          <p id="step-word">Step 1 of 8</p>
		      <div id="myProgressbar" class="progress">
			    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
			    	<span>0%</span>
			    </div>
			  </div>
	      </div>
	      
	      <div>
		      <h4 id="sectionTitle">Personal Details</h4>
		      <hr>
	      </div>
	      
	      <form id="financeForm" action="" method="post" class="form-horizontal" autocomplete="off">
	      
	      	<div id="step-1" class="step">
	      	
			  	<div class="form-group">
				    <label class="col-xs-12 col-sm-2 control-label">*Title</label>
				    <div class="col-xs-12 col-sm-2">
		      			<select class="required form-control" name="finance[0][personal][title]">
				  			<option value="Mr">Mr</option>
				  			<option value="Mrs">Mrs</option>
				  			<option value="Miss">Mrs</option>
				  		</select>
				    </div>
				</div>
			  
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*First Name</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][personal][fname]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Last Name</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][personal][lname]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Email</label>
					<div class="col-xs-12 col-sm-6">
						<input type="email" class="form-control required maonster-email" name="finance[0][personal][email]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Phone</label>
					<div class="col-xs-12 col-sm-6">
						<input type="tel" class="form-control required maonster-phone" name="finance[0][personal][phone]" placeholder="">
					</div>
			    </div>
			    
			    <hr>
			    
			    <div class="form-group text-right">
			    	<button type="button" class="next disabled btn btn-default">Next</button>
			    </div>
	      	</div>
	      	
	      	<div id="step-2" class="hidden step">
	      
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Male/Female</label>
					<div class="col-xs-12 col-sm-3">
						<select class="form-control required" name="finance[0][personal][gender]">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
			    </div>
			  
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Date of Birth</label>
					<div class="col-xs-12 col-sm-3">
						<div id="birthday" class="input-group date">
							<input type="text" name="finance[0][personal][dateOfBirth]" class="form-control required">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						</div>
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Place of Birth</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][personal][placeOfBirth]" placeholder="">
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Marital Status</label>
					<div class="col-xs-12 col-sm-3">
						<select class="form-control required" name="finance[0][personal][maritalStatus]">
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Separated">Separated</option>
							<option value="Divorced">Divorced</option>
							<option value="Widowed">Widowed</option>
							<option value="Prefer not to answer">Prefer not to answer</option>
						</select>
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Residential Status</label>
					<div class="col-xs-12 col-sm-3">
						<select class="form-control required" name="finance[0][personal][residentialStatus]">
							<option value="Home Owner">Home Owner</option>
							<option value="Tenant">Tenant</option>
							<option value="Living With Parents">Living With Parents</option>
						</select>
					</div>
			    </div>
			    
				<hr>
				
			    <div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
			    	<button type="button" class="next disabled btn btn-default pull-right">Next</button>
			    </div>
	      	</div>
	      	
	      	<div id="step-3" class="hidden step">
	      
			  	<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Years living at Address</label>
					<div class="col-xs-12 col-sm-2">
						<input type="number" class="form-control required maonster-number-nospace" name="finance[0][personal][yearsCurrentAddress]" placeholder="">
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Address Line 1</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-address" name="finance[0][personal][addressLine1]" placeholder="">
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Address Line 2</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control maonster-address" name="finance[0][personal][addressLine2]" placeholder="">
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Address Line 3</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control maonster-address" name="finance[0][personal][addressLine3]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Years in Previous Address</label>
					<div class="col-xs-12 col-sm-2">
						<input type="number" class="form-control maonster-number-nospace" name="finance[0][personal][yearsPreviousAddress]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Mother's Maiden Name</label>
					<div class="col-xs-12 col-sm-3">
						<input type="text" class="form-control required maonster-name" name="finance[0][personal][mothersMaidenName]" placeholder="">
					</div>
			    </div>
			    
			  
			  	<div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
					<button type="button" class="next disabled btn btn-default pull-right">Next</button>
				</div>
	      	</div>
	      	
	      	<div id="step-4" class="hidden step">
	      
			  	<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Occupation</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][financial][occupation]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Employer Name</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][financial][employerName]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Employer Address</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-address" name="finance[0][financial][employerAddress]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Years working with employer</label>
					<div class="col-xs-12 col-sm-2">
						<input type="number" class="form-control required maonster-number-nospace" name="finance[0][financial][yearsWorkingWithEmployer]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*No. of dependent children</label>
					<div class="col-xs-12 col-sm-2">
						<input type="number" class="form-control required maonster-number-nospace" name="finance[0][financial][dependents]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Net Monthly Salary</label>
					<div class="col-xs-12 col-sm-2">
						<input class="form-control required currency" name="finance[0][financial][netMonthlySalary]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Other Income (per month)</label>
					<div class="col-xs-12 col-sm-2">
						<input class="form-control currency" name="finance[0][financial][otherIncome]" placeholder="">
					</div>
			    </div>
			  
			  	<div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
			    	<button type="button" class="next disabled btn btn-default pull-right">Next</button>
				</div>
	      	</div>
	      	
	      	<div id="step-5" class="hidden step">
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Mortgage/Rent payment per month</label>
					<div class="col-xs-12 col-sm-2">
						<input class="form-control required currency" name="finance[0][financial][mortgageRent]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Previous Employer (enter if less than 3 years in current position)</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control maonster-name" name="finance[0][financial][employerPreviousName]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Previous Employer Address (enter if less than 3 years in current position)</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control maonster-address" name="finance[0][financial][employerPreviousAddress]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Years With Previous Employer (enter if less than 3 years in current position)</label>
					<div class="col-xs-12 col-sm-2">
						<input type="number" class="form-control maonster-number-nospace" name="finance[0][financial][yearsWorkingWithPreviousEmployer]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Work Permit Number</label>
					<div class="col-xs-12 col-sm-2">
						<input type="text" class="form-control required maonster-alphanum-nospace" name="finance[0][financial][workPermitNumber]" placeholder="">
					</div>
			    </div>
			  
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Work Permit Expiry</label>
					<div class="col-xs-12 col-sm-3">
						<div id="expiry" class="input-group date">
							<input type="text" name="finance[0][financial][workPermitExpiry]" class="required form-control">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						</div>
					</div>
			    </div>
			    
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Bank</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-address" name="finance[0][financial][bank]" placeholder="">
					</div>
			    </div>
			    
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Branch</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-address" name="finance[0][financial][branch]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Years With Branch</label>
					<div class="col-xs-12 col-sm-2">
						<input type="number" class="form-control required maonster-number-nospace" name="finance[0][financial][yearsWithBranch]" placeholder="">
					</div>
			    </div>
			  
				<div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
					<button type="button" class="next disabled btn btn-default pull-right">Next</button>
				</div>
	      	</div>
	      	
	      	<div id="step-6" class="hidden step">
	      	
	      		
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Vehicle</label>
					<div class="col-xs-12 col-sm-4">
						<select class="form-control required" name="finance[0][vehicle][type]">
							<option value="6970">2017 Porsche Panamera, []</option>
							<option value="6977">2016 Toyota HiLux, [30041]</option>
							<option value="6979">2016 Audi A4, []</option>
							<option value="6983">2016 Mitsubishi L 200, [27195]</option>
							<option value="6984">2016 Volkswagen Passat, [28450]</option>
							<option value="6985">2016 Volkswagen Passat, [29950]</option>
							<option value="6992">2017 Land Rover Range Rover, [174995]</option>
							<option value="6999">2015 Mitsubishi L 200, [23536]</option>
							<option value="7000">2015 Land Rover Range Rover Sport, [89950]</option>
							<option value="7024">2014 BMW 5 Series, [34950]</option>
							<option value="7026">2013 BMW 5 Series, [37950]</option>
							<option value="7041">2009 Nissan Navara, [13950]</option>
							<option value="7050">2008 SEAT Leon, [6950]</option>
							<option value="7052">2007 Volkswagen Golf, [6450]</option>
							<option value="7053">2007 Land Rover Range Rover Sport, [13984]</option>
							<option value="7055">2007 Mercedes-Benz ML-Class, [8740]</option>
							<option value="7330">2016 Toyota Avensis, [28950]</option>
							<option value="7595">2016 Toyota Landcruiser, [43048]</option>
							<option value="7598">2015 Toyota HiLux, [25976]</option>
							<option value="7666">2016 Mitsubishi L 200, [27601]</option>
							<option value="7668">2007 Opel Meriva, []</option>
							<option value="8181">2014 Audi A6, [33950]</option>
							<option value="8342">2014 Land Rover Discovery, [38984]</option>
							<option value="8380">2007 Land Rover Range Rover Sport, [17845]</option>
							<option value="8644">2015 BMW 5 Series, [39950]</option>
							<option value="9631">2009 Audi A4, [13450]</option>
							<option value="9751">2015 Mitsubishi Pajero, [38170]</option>
							<option value="9775">2009 Toyota Landcruiser, [14593]</option>
							<option value="9777">2008 Land Rover Range Rover Sport, []</option>
							<option value="9782">2007 Toyota HiLux, [10935]</option>
							<option value="9827">2009 BMW X5, [19472]</option>
							<option value="9991">2014 Ford Kuga, [17845]</option>
							<option value="10054">2013 Hyundai Santa Fe, []</option>
							<option value="10163">2009 Volkswagen Golf, [9450]</option>
							<option value="10494">2017 Ford Focus, []</option>
							<option value="10495">2009 Toyota HiLux, []</option>
							<option value="10579">2013 Volkswagen Passat CC, [19950]</option>
							<option value="10582">2010 Nissan Qashqai, [10950]</option>
							<option value="10782">2013 Volkswagen Tiguan, [21950]</option>
							<option value="10825">2009 Nissan Qashqai+2, [13950]</option>
							<option value="10827">2013 Peugeot 208, [16450]</option>
							<option value="10837">2014 Toyota Auris, [15950]</option>
							<option value="10939">2010 Mercedes-Benz ML-Class, [15406]</option>
							<option value="11005">2009 Volkswagen Golf, [11950]</option>
							<option value="11030">2010 BMW 5 Series, [21950]</option>
							<option value="11223">2013 BMW X5, [38120]</option>
							<option value="11224">2009 Citroen C4 Picasso, [9950]</option>
							<option value="11225">2011 Volvo S40, [11950]</option>
							<option value="11226">2013 Opel Astra, [12450]</option>
							<option value="11227">2009 Land Rover Freelander, [8089]</option>
							<option value="11228">2008 Volkswagen Golf, [7950]</option>
							<option value="11229">2010 Audi A5, [23450]</option>
							<option value="11230">2014 BMW 1 Series, [22950]</option>
							<option value="11348">2008 Land Rover Discovery, [9715]</option>
							<option value="11349">2016 Land Rover Discovery, [48740]</option>
							<option value="11350">2008 MINI Cooper, [11450]</option>
							<option value="11351">2009 Renault Grand Scenic, [9950]</option>
						</select>
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Purchase Price</label>
					<div class="col-xs-12 col-sm-2">
						<input class="form-control required currency" name="finance[0][vehicle][purchasePrice]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Deposit</label>
					<div class="col-xs-12 col-sm-2">
						<input class="form-control required currency" name="finance[0][vehicle][deposit]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Trade In Registration No.</label>
					<div class="col-xs-12 col-sm-2">
						<input type="text" class="form-control maonster-alphanum-ns" name="finance[0][vehicle][tradeInRegNo]" placeholder="">
					</div>
			    </div>
			    
				<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Vehicle</label>
					<div class="col-xs-12 col-sm-4">
				    	<select class="form-control required" name="finance[0][vehicle][duration]">
				    		<option value="36">36 months</option>
							<option value="37">37 months</option>
							<option value="48">48 months</option>
							<option value="49">49 months</option>
							<option value="60">60 months</option>
							<option value="61">61 months</option>
						</select>
					</div>
				</div>
			  
				<div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
					<button type="button" class="next disabled btn btn-default pull-right">Next</button>
				</div>
	      	</div>
	      	
	      	<div id="step-7" class="hidden step">
	      	
			  	<div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*First Name</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][joint][fname]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">*Surname</label>
					<div class="col-xs-12 col-sm-6">
						<input type="text" class="form-control required maonster-name" name="finance[0][joint][lname]" placeholder="">
					</div>
			    </div>
			    
			    <div class="form-group">
			    	<label class="col-xs-12 col-sm-2 control-label">Comments</label>
					<div class="col-xs-12 col-sm-6">
						<textarea class="form-control maonster-address"></textarea>
					</div>
			    </div>
			    
				<div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
					<button type="button" class="next disabled btn btn-default pull-right">Next</button>
				</div>
	      	</div>
	      	
	      	<div id="step-8" class="hidden step">
	      	
	      		<div class="privacy-section text-center">
                    <p>If you miss a payment, you will be charged interest in arrears and your agreement may be terminated</p>

                    <p><strong>Warning: If you do not meet the repayments on your agreement, your account will go into arrears. This may affect your credit rating.</strong></p>

                    <h3>Data Protection and Consents</h3>

                    <p>The information that you provide on this proposal form will be forwarded to one or more financial institutions, being members of the Irish Finance Houses Association, and will be used by them for the purposes of assessing the suitability for you of their finance products, potentially offering you a product or a quote. As part of this process, credit searches will be made with one or more credit reference agencies, including the Irish Credit Bureau (ICB), which will make a record of the search. Details of any agreement you enter into, and your conduct of that agreement, may be shared with the credit reference agencies, ICB and their members. Searches may also be carried out to verify your identity, and you may be contacted directly (including by telephone) for the purposes of verifying the information on this form. Credit scoring and other automated decision-making process may be used.</p>

                    <p>By ticking the consent box below, I certify that I consent to the use and disclosure of this information for the purposes set out above. I acknowledge that the recipients of this information are authorised to contact me and to disclose any material misstatements of fact on this proposal to their members and other relevant bodies.</p>
                </div>
	      		
	      		<div class="form-group">
				    <div class="col-sm-12 text-center">
				    	<div class="checkbox">
				        	<label>
								<input id="consentChecked" name="finance[0][consentChecked]" type="checkbox" value="true">
								
				        		I have read and consent to above* 
							</label>
						</div>
				    </div>
				</div>
			  
				<div class="form-group text-center">
			    	<button id="requestApproval" type="submit" class="btn-lg disabled btn btn-default">REQUEST APPROVAL</button>
				</div>
				
				<div class="form-group">
			    	<button type="button" class="back btn btn-primary">Back</button>
				</div>
	      	</div>
	      	
		  </form>
		  
		  
		  <div id="loader" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loader" data-backdrop="static" data-keyboard="false">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
				      <div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						    <span class="sr-only">Please wait...</span>
						    Please wait...
						  </div>
					  </div>
			      </div>
			    </div>
			  </div>
	      </div>
	      
	
	      <footer class="footer">
	        <p>&copy; 2017 Meridian Motors.</p>
	      </footer>
	
	    </div> <!-- /container -->
	    

		<!-- SCRIPTS -->
		<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		  crossorigin="anonymous"></script>
		
		
		<!-- PLUGINS -->
		<!-- International Telephone Input -->
		<script src="assets/vendor/int-tel-input/js/intlTelInput.min.js"></script>
		<!-- Bootstrap Datepicker -->
		<script src="assets/vendor/bootstrap.datepicker/js/bootstrap-datepicker.min.js"></script>
		<!-- Jquery input mask for currency and etc. -->
		<script src="assets/vendor/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
		<!-- Jquery Swal 2 popup plugin -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js"></script>
		<!-- Maonster plugins for custom australiawow input and steps -->
		<script src="assets/vendor/maonster/maonster.bind.min.js"></script>
		<script src="assets/vendor/maonster/maonster.step.min.js"></script>
		<!-- Jquery detect mobile browser -->
		<script src="assets/js/detectmobilebrowser.js"></script>
		
		<!-- Custom script -->
		<script src="assets/js/script.js?v=<?php echo time(); ?>"></script>
		
	</body>
</html>