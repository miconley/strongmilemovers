var isiPhone = navigator.userAgent.match(/iPhone/i) != null;

var isAndroid = navigator.userAgent.match(/Android/i) != null;

var isWindowsPhone = navigator.userAgent.match(/Windows Phone/i) != null;

var specialtyCheck = true;

var debug = false;

$(function() { 

	scrollToTop();

	setFocus();						

	// $('.howtopack').on('click', function(e) { 
	// 	e.preventDefault(); 
	// 	$('.howtopack_content').toggle();
	// });


	// $('.boxcounts').on('click', function(e) { 
	// 	e.preventDefault(); 
	// 	$('.boxcounts_content').toggle();
	// });

	setTimeout(function() { $('#captchaDiv').html('<input type="checkbox" name="itshuman" id="itshuman" />'); }, 5000);

	});

	var dateToday = new Date();
	$('#date_of_service').datepicker({ minDate: dateToday });
	$('#date_of_service_alt').datepicker({ minDate: dateToday });


	function formatPhone(obj) {

	thisVal = obj.val();

	var numbers = thisVal.replace(/\D/g, ''),

		char = {0:'(',3:') ',6:' - '};

	newVal = '';

	if(numbers[0] == 1) numbers = numbers.substr(1);

	for (var i = 0; i < numbers.length; i++) {

	    newVal += (char[i]||'') + numbers[i];

	}

	obj.val(newVal);

	}


	$('.specialty_cb').each(function() { 
		$(this).on('change', function()  {
			$(this).siblings('span').toggle();
		});
	})

	$('.cust_furniture_bed_frame').each(function() { 
		$(this).on('change', function()  {
			switch($(this).val()) {
				case "other":
					$(this).siblings('input').slideDown();
					break;

				default:
					$(this).siblings('input').slideUp();
					$(this).siblings('input').val('What do we need to know?');
			}
		});
	})

	setInterval(function(){
		if($('#entertainment_center').val() != "" && $('#entertainment_center').val() > 0)  {
			$('#entertainment_center_dimensions').show();
		} else {
			$('#entertainment_center_dimensions').hide();
		}

		if($('#cust_furniture_desk').val() != "" && $('#cust_furniture_desk').val() > 0)  {
			$('#fordesks').show();
		} else {
			$('#fordesks').hide();
		}
	}, 100);

	// $('#entertainment_center').on('change', function()  {
	// 	if($(this).val() != "" && $(this).val() > 0) {
	// 		$('#entertainment_center_dimensions').show();
	// 	} else {
	// 		$('#entertainment_center_dimensions').hide();
	// 	}
	// }).on('focus', function()  {
	// 	if($(this).val() != "" && $(this).val() > 0) {
	// 		$('#entertainment_center_dimensions').show();
	// 	} else {
	// 		$('#entertainment_center_dimensions').hide();
	// 	}
	// }).on('blur', function()  {
	// 	if($(this).val() != "" && $(this).val() > 0) {
	// 		$('#entertainment_center_dimensions').show();
	// 	} else {
	// 		$('#entertainment_center_dimensions').hide();
	// 	}
	// })



	function show_element(selectedName, selectedIndex)

	{



	switch(selectedName) {



		case "cust_residence_type":

			//console.log($('.cust_residence_type').val());

			var val = $('.'+selectedName).val();
			if(val != "")
			{
				$(".home").slideUp();
				$(".apt_studio").slideUp();
				$(".apt").slideUp();
				$(".condo").slideUp();
				$(".ths").slideUp();
				$(".office").slideUp();
				$(".storage").slideUp();
				$(".other_to").slideUp();
				$('.'+val).slideDown();
			} else {

				$(".home").slideUp();

				$(".apt_studio").slideUp();

				$(".apt").slideUp();

				$(".condo").slideUp();

				$(".ths").slideUp();

				$(".office").slideUp();						

				$(".storage").slideUp();

				$(".other_to").slideUp();


				$('.home_floor').val('How many floors?');

				$('.home_brs').val('# of bedrooms?');

				$('.home_attic').prop('checked', false);

				$('.home_basement').prop('checked', false);
				
				$('.home_garage').prop('checked', false);

				$('.home_shed').prop('checked', false);



				$('.apt_studio_floor').val('What floor?');

				$('.apt_studio_elevator').prop('checked', false);

				$('.apt_studio_stairs').prop('checked', false);



				$('.apt_floor').val('What floor?');

				$('.apt_brs').val('# of bedrooms?');

				$('.apt_elevator').prop('checked', false);

				$('.apt_stairs').prop('checked', false);

				$('.apt_multilevel').prop('checked', false);


				$('.condo_floor').val('What floor?');

				$('.condo_brs').val('# of bedrooms?');

				$('.condo_elevator').prop('checked', false);

				$('.condo_stairs').prop('checked', false);

				$('.condo_multilevel').prop('checked', false);


				$('.ths_floor').val('How many floors?');

				$('.ths_brs').val('# of bedrooms?');

				$('.ths_multilevel').prop('checked', false);

				$('.ths_attic').prop('checked', false);

				$('.ths_basement').prop('checked', false);

				$('.ths_garage').prop('checked', false);

				$('.ths_shed').prop('checked', false);



				$('.office_rooms').val('# of rooms?');

				$('.office_floor').val('What floor?');

				$('.office_elevator').prop('checked', false);

				$('.office_stairs').prop('checked', false);



				$('.storage_size').val('Unit Size (ie 10x10)');

				$('.storage_elevator').prop('checked', false);

				$('.storage_stairs').prop('checked', false);


				$('.other_to_text').val('More Info Here');

			}

			break;



		case "cust_residence_type_from":

			//console.log($('.cust_residence_type_from').val());

			var val = $('.'+selectedName).val();

			if(val != "")

			{

				$(".home_from").slideUp();

				$(".apt_studio_from").slideUp();

				$(".apt_from").slideUp();

				$(".condo_from").slideUp();

				$(".ths_from").slideUp();

				$(".office_from").slideUp();

				$(".storage_from").slideUp();

				$(".other_from").slideUp();

				$('.'+val).slideDown();

			} else {

				$(".home_from").slideUp();

				$(".apt_studio_from").slideUp();

				$(".apt_from").slideUp();

				$(".condo_from").slideUp();

				$(".ths_from").slideUp();

				$(".office_from").slideUp();						

				$(".storage_from").slideUp();

				$(".other_from").slideUp();

				$('.home_floor_from').val('How many floors?');

				$('.home_brs_from').val('# of bedrooms?');

				$('.home_attic_from').prop('checked', false);

				$('.home_basement_from').prop('checked', false);

				$('.home_garage_from').prop('checked', false);

				$('.home_shed_from').prop('checked', false);



				$('.apt_studio_floor_from').val('What floor?');

				$('.apt_studio_elevator_from').prop('checked', false);

				$('.apt_studio_stairs_from').prop('checked', false);



				$('.apt_floor_from').val('What floor?');

				$('.apt_brs_from').val('# of bedrooms?');

				$('.apt_elevator_from').prop('checked', false);

				$('.apt_stairs_from').prop('checked', false);

				$('.apt_multilevel_from').prop('checked', false);


				$('.condo_floor_from').val('What floor?');

				$('.condo_brs_from').val('# of bedrooms?');

				$('.condo_elevator_from').prop('checked', false);

				$('.condo_stairs_from').prop('checked', false);

				$('.condo_multilevel_from').prop('checked', false);


				$('.ths_floor_from').val('How many floors?');

				$('.ths_brs_from').val('# of bedrooms?');

				$('.ths_multilevel_from').prop('checked', false);

				$('.ths_attic_from').prop('checked', false);

				$('.ths_basement_from').prop('checked', false);

				$('.ths_garage_from').prop('checked', false);

				$('.ths_shed_from').prop('checked', false);



				$('.office_rooms_from').val('# of rooms?');

				$('.office_floor_from').val('What floor?');

				$('.office_elevator_from').prop('checked', false);

				$('.office_stairs_from').prop('checked', false);



				$('.storage_size_from').val('Unit Size (ie 10x10)');

				$('.storage_elevator_from').prop('checked', false);

				$('.storage_stairs_from').prop('checked', false);

				$('.other_from_text').val('More Info Here');

			}

			break;



		case "cust_referral":

			//console.log($('.cust_residence_type').val());

			var val = $('.'+selectedName).val();

			switch(val) 

			{

				case "":

				case "movinghelper":

				case "hireahelper":

				case "angieslist":

				case "search":

				case "mcoc":

				case "mcda":

				case "mm": 

				case "mccn":

				case "mll":

				case "ecoc":

				case "facebook":

					$(".referral").slideUp();

					break;



				case "ff":

				case "sm":

	            case "bc":

	            case "referredby":

	            case "uhaul":

					$('.referral_val').val('Who?');

					$('.referral_val').attr('placeholder', 'Who?');

					$(".referral").slideDown();

					break;



				case "iknowjoe":

					$('.referral_val').val('How?');

					$('.referral_val').attr('placeholder', 'How?');

					$(".referral").slideDown();

					break;


				case "previouscustomer":

					$('.referral_val').val('When?');

					$('.referral_val').attr('placeholder', 'When?');

					$(".referral").slideDown();

					break;


				case "other":

					$('.referral_val').val('Please Specify');

					$('.referral_val').attr('placeholder', 'Please Specify');

					$(".referral").slideDown();

					break;

			}

			break;

	}

}

function show_element_alt(selectedName, selectedAddr){

	var addr = $('.'+selectedAddr);

	var val = addr.find('.'+selectedName).val();

	if(val != "")

	{

		addr.find(".home_alt").slideUp();

		addr.find(".apt_studio_alt").slideUp();

		addr.find(".apt_alt").slideUp();

		addr.find(".condo_alt").slideUp();

		addr.find(".ths_alt").slideUp();

		addr.find(".office_alt").slideUp();

		addr.find(".storage_alt").slideUp();

		addr.find(".other_alt").slideUp();

		addr.find('.'+val).slideDown();

	} else {

		addr.find(".home_alt").slideUp();

		addr.find(".apt_studio_alt").slideUp();

		addr.find(".apt_alt").slideUp();

		addr.find(".condo_alt").slideUp();

		addr.find(".ths_alt").slideUp();

		addr.find(".office_alt").slideUp();						

		addr.find(".storage_alt").slideUp();

		addr.find(".other_alt").slideUp();


		addr.find('.home_floor_alt').val('How many floors?');

		addr.find('.home_brs_alt').val('# of bedrooms?');

		addr.find('.home_attic_alt').prop('checked', false);

		addr.find('.home_basement_alt').prop('checked', false);

		addr.find('.home_attic_alt').prop('checked', false);

		addr.find('.home_basement_alt').prop('checked', false);


		addr.find('.apt_studio_floor_alt').val('What floor?');

		addr.find('.apt_studio_elevator_alt').prop('checked', false);

		addr.find('.apt_studio_stairs_alt').prop('checked', false);


		addr.find('.apt_floor_alt').val('What floor?');

		addr.find('.apt_brs_alt').val('# of bedrooms?');

		addr.find('.apt_elevator_alt').prop('checked', false);

		addr.find('.apt_stairs_alt').prop('checked', false);

		addr.find('.apt_multilevel_alt').prop('checked', false);


		addr.find('.ths_floor_alt').val('How many floors?');

		addr.find('.ths_brs_alt').val('# of bedrooms?');

		addr.find('.ths_multilevel_alt').prop('checked', false);

		addr.find('.ths_garage_alt').prop('checked', false);

		addr.find('.ths_shed_alt').prop('checked', false);

		addr.find('.ths_attic_alt').prop('checked', false);

		addr.find('.ths_basement_alt').prop('checked', false);


		addr.find('.office_rooms_alt').val('# of rooms?');

		addr.find('.office_floor_alt').val('What floor?');

		addr.find('.office_elevator_alt').prop('checked', false);

		addr.find('.office_stairs_alt').prop('checked', false);



		addr.find('.storage_size_alt').val('Unit Size (ie 10x10)');

		addr.find('.storage_elevator_alt').prop('checked', false);

		addr.find('.storage_stairs_alt').prop('checked', false);

		addr.find('.other_text_alt').val('More Info Here');

	}

}

// function validateCaptcha()

// {

//     challengeField = $("input#recaptcha_challenge_field").val();

//     responseField = $("input#recaptcha_response_field").val();

//     console.log(challengeField + ' ' + responseField)

//     var html = $.ajax({

//     type: "POST",

//     url: "recaptcha/captcha.php",

// 	data: { 

//         'challenge': challengeField ,

//         'response': responseField

//     },

//     async: false

//     }).responseText;

//     console.log(html);

//     if(html != "Valid")

//     {

// 		alert("Incorrect captcha answer, please try again!  Sorry, we need to make sure you're a real person.");

// 		findObj("recaptcha_response_field").focus();

// 		$('.captcha').animate({ backgroundColor: "red" }, 1500);

// 		return false;

//     }

//     else

//     {

//         return true;

//     }

// }



function validateTick()

{


    if($("#itshuman").attr('checked'))

    {

    	return true;

    }

    else

    {

		alert("Please check the box.  Sorry, we need to make sure you're a real person.");

		findObj("itshuman").focus();

		$('.captcha').animate({ backgroundColor: "red" }, 1500);

		return false;

    }

}		

function fSubmit()

  {



	  if(ValidateForm())

	  {

	  	//var baz ="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>";

	  	//$('form').get(0).setAttribute('action', 'baz'); //this works

	  	if(validateTick()) {

	  		if($("#date_of_service_alt").val() == "Please select") $("#date_of_service_alt").val("");

			if(findObj("cust_addr_2_from").value == "Unit #") $("#cust_addr_2_from").val("");

		  	if(findObj("cust_addr_2").value == "Unit #") $("#cust_addr_2").val("");

			if(findObj("cust_phone_alt").value == "Alt Phone") $("#cust_phone_alt").val("");

			if(findObj("cust_addr_from").value == "Address") $("#cust_addr_from").val("");

			if(findObj("cust_addr_2_from").value == "Unit #") $("#cust_addr_2_from").val("");

			if(findObj("cust_city_from").value == "City") $("#cust_city_from").val("");

			if(findObj("cust_state_from").value == "State (2 letter abbr.)") $("#cust_state_from").val("");

			if(findObj("cust_addr").value == "Address") $("#cust_addr").val("");

			if(findObj("cust_addr_2").value == "Unit #") $("#cust_addr_2").val("");

			if(findObj("cust_city").value == "City") $("#cust_city").val("");

			if(findObj("cust_state").value == "State (2 letter abbr.)") $("#cust_state").val("");

			if(findObj("other_text").value == "Specify other help needed not listed above") findObj("other_text").value = "";

	  		document.forms["strongmile_form"].submit();

	  	}

	  }

  }



function ValidateForm()

{


	if(!debug) {


		if (findObj("cust_name").value == "" || findObj("cust_name").value == "Name") {

			alert("You must enter your name.");

			setTimeout(function(){$("#cust_name").focus();}, 500);

			return false;

		}



		if(!testEmail($("#cust_email"))) return false;



		if (findObj("cust_phone").value == "" || findObj("cust_phone").value == "Phone") {



				alert("You must enter a phone number.");

				setTimeout(function(){$("#cust_phone").focus();}, 500);

				return false;

		}						





		// if (findObj("cust_email").value == "" || findObj("cust_email").value == "Email"){

		// 	alert("Your email is required and appears to be incorrect. Please try again.");

		// 	setTimeout(function(){findObj("cust_email").focus();}, 500);

		// 	return false;

		// } 



		if(findObj("cust_addr_from").value == "" || findObj("cust_addr_from").value == "Address") {

			if(findObj("cust_addr").value == "" || findObj("cust_addr").value == "Address") {

				alert("You must enter at least one address.");

				setTimeout(function(){findObj("cust_addr_from").focus();}, 500);

				return false;

			}

		} else {

			if(findObj("cust_city_from").value == "" || findObj("cust_city_from").value == "City") {

				alert("You must enter the city of origin.");

				setTimeout(function(){findObj("cust_city_from").focus();}, 500);

				return false;

			}

			if($('.cust_state_from').val() == "") {

				alert("You must enter the state of origin.");

				setTimeout(function(){findObj("cust_state_from").focus();}, 500);

				return false;

			}



			if($('.cust_residence_type_from').val() != "")

			{



				var val = $('.cust_residence_type_from').val();

				switch(val){

					case "home_from":

						if (findObj("home_floor_from").value == "" || findObj("home_floor_from").value == "How many floors?") {

								alert("Please specify how many floors you have in your home.");

								setTimeout(function(){findObj("home_floor_from").focus();}, 500);

								return false;

						}



						if (findObj("home_brs_from").value == "" || findObj("home_brs_from").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your home.");

								setTimeout(function(){findObj("home_brs_from").focus();}, 500);

								return false;

						}								

						break;	


					case "apt_studio_from":

						if (findObj("apt_studio_floor_from").value == "" || findObj("apt_studio_floor_from").value == "What floor?") {

								alert("Please specify what floor your studio apartment is on.");

								setTimeout(function(){findObj("apt_studio_floor_from").focus();}, 500);

								return false;

						}
									

						break;	


					case "apt_from":

						if (findObj("apt_floor_from").value == "" || findObj("apt_floor_from").value == "What floor?") {



								alert("Please specify what floor your apartment is on.");

								setTimeout(function(){findObj("apt_floor_from").focus();}, 500);

								return false;

						}



						if (findObj("apt_brs_from").value == "" || findObj("apt_brs_from").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your apartment.");

								setTimeout(function(){findObj("apt_brs_from").focus();}, 500);

								return false;

						}										

						break;										


					case "condo_from":

						if (findObj("condo_floor_from").value == "" || findObj("condo_floor_from").value == "What floor?") {

								alert("Please specify what floor your condominium is on.");

								setTimeout(function(){findObj("condo_floor_from").focus();}, 500);

								return false;

						}



						if (findObj("condo_brs_from").value == "" || findObj("condo_brs_from").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your condominium.");

								setTimeout(function(){findObj("condo_brs_from").focus();}, 500);

								return false;

						}										

						break;	


					case "ths_from":

						if (findObj("ths_floor_from").value == "" || findObj("ths_floor_from").value == "How many floors?") {

								alert("Please specify how many floors you have in your townhouse.");

								setTimeout(function(){findObj("ths_floor_from").focus();}, 500);

								return false;

						}



						if (findObj("ths_brs_from").value == "" || findObj("ths_brs_from").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your townhouse.");

								setTimeout(function(){findObj("ths_brs_from").focus();}, 500);

								return false;

						}										

						break;		



					case "office_from":

						if (findObj("office_rooms_from").value == "" || findObj("office_rooms_from").value == "# of rooms?") {

								alert("Please specify how many rooms your office has.");

								setTimeout(function(){findObj("office_rooms_from").focus();}, 500);

								return false;

						}

						if (findObj("office_floor_from").value == "" || findObj("office_floor_from").value == "What floor?") {

								alert("Please specify what floor your office is on.");

								setTimeout(function(){findObj("office_floor_from").focus();}, 500);

								return false;

						}

						

						break;		



					case "storage_from":

						if (findObj("storage_floor_from").value == " " || findObj("storage_floor_from").value == "What Floor?") {

								alert("Please specify what floor your storage unit is on.");

								setTimeout(function(){findObj("storage_floor_from").focus();}, 500);

								return false;

						} 

						if (findObj("storage_size_from").value == " " || findObj("storage_size_from").value == "Unit Size (ie 10x10)") {

								alert("Please approximate how large your storage unit is.  For example 10x10");

								setTimeout(function(){findObj("storage_size_from").focus();}, 500);

								return false;

						} 

						break;		


					case "other_from":

						if (findObj("other_text_from").value == " " || findObj("other_text_from").value == "More Info Here") {

								alert("Please provide specific about this property.");

								setTimeout(function(){findObj("other_text_from").focus();}, 500);

								return false;

						}

						break;		

				}

			} else {

				alert("You must specify if it's a residence or a storage unit.");

				setTimeout(function(){findObj("cust_residence_type_from").focus();}, 500);

				return false;						

			}

		}


		if(findObj("cust_addr").value == "" || findObj("cust_addr").value == "Address") {

			if(findObj("cust_addr_from").value == "" || findObj("cust_addr_from").value == "Address") {

				alert("You must enter at least one address.");

				setTimeout(function(){findObj("cust_addr_from").focus();}, 500);

				return false;

			}

		} else {

			if(findObj("cust_city").value == "" || findObj("cust_city").value == "City") {

				alert("You must enter the destination city.");

				setTimeout(function(){findObj("cust_city").focus();}, 500);

				return false;

			}

			if($('.cust_state').val() == "")

			{

				alert("You must enter the destination state.");

				setTimeout(function(){findObj("cust_state").focus();}, 500);

				return false;

			}



			if($('.cust_residence_type').val() != "")

			{



				var val = $('.cust_residence_type').val();

				switch(val){

					case "home":

						if (findObj("home_floor").value == "" || findObj("home_floor").value == "How many floors?") {

								alert("Please specify how many floors you have in your home.");

								setTimeout(function(){findObj("home_floor").focus();}, 500);

								return false;

						}



						if (findObj("home_brs").value == "" || findObj("home_brs").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your home.");

								setTimeout(function(){findObj("home_brs").focus();}, 500);

								return false;

						}								

						break;	


					case "apt_studio":

						if (findObj("apt_studio_floor").value == "" || findObj("apt_studio_floor").value == "What floor?") {

								alert("Please specify what floor your studio apartment is on.");

								setTimeout(function(){findObj("apt_studio_floor").focus();}, 500);

								return false;

						}
									

						break;	


					case "apt":

						if (findObj("apt_floor").value == "" || findObj("apt_floor").value == "What floor?") {



								alert("Please specify what floor your apartment is on.");

								setTimeout(function(){findObj("apt_floor").focus();}, 500);

								return false;

						}



						if (findObj("apt_brs").value == "" || findObj("apt_brs").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your apartment.");

								setTimeout(function(){findObj("apt_brs").focus();}, 500);

								return false;

						}										

						break;										


					case "condo":

						if (findObj("condo_floor").value == "" || findObj("condo_floor").value == "What floor?") {

								alert("Please specify what floor your condominium is on.");

								setTimeout(function(){findObj("condo_floor").focus();}, 500);

								return false;

						}



						if (findObj("condo_brs").value == "" || findObj("condo_brs").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your condominium.");

								setTimeout(function(){findObj("condo_brs").focus();}, 500);

								return false;

						}										

						break;	


					case "ths":

						if (findObj("ths_floor").value == "" || findObj("ths_floor").value == "How many floors?") {

								alert("Please specify how many floors you have in your townhouse.");

								setTimeout(function(){findObj("ths_floor").focus();}, 500);

								return false;

						}



						if (findObj("ths_brs").value == "" || findObj("ths_brs").value == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your townhouse.");

								setTimeout(function(){findObj("ths_brs").focus();}, 500);

								return false;

						}										

						break;		



					case "office":

						if (findObj("office_rooms").value == "" || findObj("office_rooms").value == "# of rooms?") {

								alert("Please specify how many rooms your office has.");

								setTimeout(function(){findObj("office_rooms").focus();}, 500);

								return false;

						}

						if (findObj("office_floor").value == "" || findObj("office_floor").value == "What floor?") {

								alert("Please specify what floor your office is on.");

								setTimeout(function(){findObj("office_floor").focus();}, 500);

								return false;

						}

						

						break;		



					case "storage":

						if (findObj("storage_floor").value == " " || findObj("storage_floor").value == "What floor?") {

								alert("Please specify what floor your storage unit is on.");

								setTimeout(function(){findObj("storage_floor").focus();}, 500);

								return false;

						}

						if (findObj("storage_size").value == " " || findObj("storage_size").value == "Unit size (ie 10x10)") {

								alert("Please approximate how large your storage unit is.  For example 10x10");

								setTimeout(function(){findObj("storage_size").focus();}, 500);

								return false;

						}

						break;	

					case "other_to":

						if (findObj("other_text_to").value == " " || findObj("other_text_to").value == "More Info Here") {

								alert("Please provide specific about this property.");

								setTimeout(function(){findObj("other_text_to").focus();}, 500);

								return false;

						}

						break;	

				}

			} else{

				alert("You must specify if it's a residence or a storage unit.");

				setTimeout(function(){findObj("cust_residence_type").focus();}, 500);

				return false;										

			}

		}

		for(x = 1; x <= $('div[id^="cust_addr_alt"]').length; x ++) {

			var $that = $('.alt_addr_'+x);


			if($that.find(".cust_addr_alt").val() == "" || $that.find(".cust_addr_alt").val() == "Address") {

				alert("You must enter an address.");

				findFocus($that, '.cust_addr_alt');

				return false;

			}

			if($that.find(".cust_city_alt").val() == "" || $that.find(".cust_city_alt").val() == "City") {

				alert("You must enter a city.");

				findFocus($that, '.cust_city_alt');

				return false;

			}

			if($that.find('.cust_state_alt').val() == "")

			{

				alert("You must enter a state.");

				findFocus($that, '.cust_state_alt');

				return false;

			}


			var val = $that.find('.cust_res_type_alt').val();

			if(val != "")

			{

				switch(val){

					case "home_alt":

						if ($that.find(".home_floor_alt").val() == "" || $that.find(".home_floor_alt").val() == "How many floors?") {



								alert("Please specify how many floors you have in your home.");

								findFocus($that, '.home_floor_alt');

								return false;

						}



						if ($that.find(".home_brs_alt").val() == "" || $that.find(".home_brs_alt").val() == "# of bedrooms?") {



								alert("Please specify how many bedrooms you have in your home.");

								findFocus($that, '.home_brs_alt');

								return false;

						}											

						break;	


					case "apt_studio_alt":

						if ($that.find(".apt_studio_floor_alt").val() == "" || $that.find(".apt_studio_floor_alt").val() == "What floor?") {

								alert("Please specify what floor your studio apartment is on.");

								findFocus($that, '.apt_studio_floor_alt');

								return false;

						}

						break;


					case "apt_alt":

						if ($that.find(".apt_floor_alt").val() == "" || $that.find(".apt_floor_alt").val() == "What floor?") {

								alert("Please specify what floor your apartment is on.");

								findFocus($that, '.apt_floor_alt');

								return false;

						}



						if ($that.find(".apt_brs_alt").val() == "" || $that.find(".apt_brs_alt").val() == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your apartment.");

								findFocus($that, '.apt_brs_alt');

								return false;

						}											

						break;										


					case "condo_alt":

						if ($that.find(".condo_floor_alt").val() == "" || $that.find(".condo_floor_alt").val() == "What floor?") {

								alert("Please specify what floor your condominium is on.");

								findFocus($that, '.condo_floor_alt');

								return false;

						}


						if ($that.find(".condo_brs_alt").val() == "" || $that.find(".condo_brs_alt").val() == "# of bedrooms?") {

								alert("Please specify how many bedrooms you have in your condominium.");

								findFocus($that, '.condo_brs_alt');

								return false;

						}	

						break;


					case "ths_alt":

						if ($that.find(".ths_floor_alt").val() == "" || $that.find(".ths_floor_alt").val() == "How many floors?") {



								alert("Please specify how many floors you have in your townhouse/duplex.");

								findFocus($that, '.ths_brs_alt');

								return false;

						}



						if ($that.find(".ths_brs_alt").val() == "" || $that.find(".ths_brs_alt").val() == "# of bedrooms?") {


								alert("Please specify how many bedrooms you have in your townhouse/duplex.");

								findFocus($that, '.ths_brs_alt');

								return false;

						}										

						break;		



					case "office_alt":

						if ($that.find(".office_rooms_alt").val() == "" || $that.find(".office_rooms_alt").val() == "# of rooms?") {


								alert("Please specify how many rooms you have in your office.");

								findFocus($that, '.office_rooms_alt');

								return false;

						}		

						if ($that.find(".office_floor_alt").val() == "" || $that.find(".office_floor_alt").val() == "What floor?") {



								alert("Please specify what floor your office is on.");

								findFocus($that, '.office_brs_alt');

								return false;

						}

						
						break;



					case "storage_alt":


						if ($that.find(".storage_floor_alt").val() == " " || $that.find(".storage_floor_alt").val() == "What floor?") {



								alert("Please specify what floor your storage unit is on.");

								findFocus($that, '.storage_floor_alt');

								return false;

						}

						if ($that.find(".storage_size_alt").val() == " " || $that.find(".storage_size_alt").val() == "Unit size (ie 10x10)") {



								alert("Please approximate how large your storage unit is.  For example 10x10");

								findFocus($that, '.storage_size_alt');

								return false;

						}


						break;		

					case "other_alt":

						if (findObj("other_text_alt").value == " " || findObj("other_text_alt").value == "More Info Here") {

								alert("Please provide specific about this property.");

								setTimeout(function(){findObj("other_text_alt").focus();}, 500);

								return false;

						}

						break;	

				}
			} else{

				alert("You must specify if it's a residence or a storage unit.");

				findFocus($that, '.cust_res_type_alt');

				return false;										

			}

			if ($that.find(".action_alt").val() == "" || $that.find(".action_alt").val() == "Loading/Unloading?") {

				alert("Please specify if we are loading or unloading at this location.");

				findFocus($that, '.action_alt');

				return false;

			}
		}


		if($('#date_of_service').val() == "Please select" || $('#date_of_service').val() == "") {

			alert("Please specify a date of service.");

			setTimeout(function(){findObj("date_of_service").focus();}, 500);

			return false;					

		}



		if($('.time_of_service').val() == "") {

			alert("Please specify a time of service.");

			setTimeout(function(){findObj("time_of_service").focus();}, 500);

			return false;					

		}



		if($('.cust_referral').val() != "")

		{

			var val = $('.cust_referral').val();

			switch(val){

				case "sm":
				case "ff":
	            case "bc":
	            case "referredby":
	            case "uhaul":

					if (findObj("referral_val").value == "" || findObj("referral_val").value == "Who?") {

						alert("Please specify a referral.");

						setTimeout(function(){findObj("referral_val").focus();}, 500);

						return false;

					}

					break;

	            case "iknowjoe":

					if (findObj("referral_val").value == "" || findObj("referral_val").value == "How?") {

						alert("Please specify how you know Joe.");

						setTimeout(function(){findObj("referral_val").focus();}, 500);

						return false;

					}

					break;

				case "previouscustomer":

					if (findObj("referral_val").value == "" || findObj("referral_val").value == "When?") {

						alert("Please specify when we last worked with you.");

						setTimeout(function(){findObj("referral_val").focus();}, 500);

						return false;

					}

					break;

				case "other":

					if (findObj("referral_val").value == "" || findObj("referral_val").value == "Please Specify") {

						alert("Please specify a referral.");

						setTimeout(function(){findObj("referral_val").focus();}, 500);

						return false;

					}

					break;

			}

		} else {

			alert("Please specify a referral.");

			setTimeout(function(){findObj("cust_referral").focus();}, 500);

			return false;

		}

		//if(!testEmail()) { return false } 



		//if($('#date_of_service').val() == "Please select") $('#date_of_service').val("");


// CHECK ADDRESSES ARE PRESENT FOR HELP TYPE

		if($('#help_loading_all').is(":checked") || $('#help_incomplex').is(":checked") || $('#help_inapt').is(":checked")) {

			if(findObj("cust_addr_from").value == "" || findObj("cust_addr_from").value == "Address" || findObj("cust_addr").value == "" || findObj("cust_addr").value == "Address") {

				alert("You must enter both a loading and unloading address.");

				if(findObj("cust_addr_from").value == "" || findObj("cust_addr_from").value == "Address") {
					var focusTo = "cust_addr_from";
				} else {
					var focusTo = "cust_addr";
				}

				setTimeout(function(){findObj(focusTo).focus();}, 500);

				return false;

			}	

		} else if($('#help_loading').is(":checked")) {

			if(findObj("cust_addr_from").value == "" || findObj("cust_addr_from").value == "Address") {

				alert("You must enter a loading address.");
				
				var focusTo = "cust_addr_from";
				
				setTimeout(function(){findObj(focusTo).focus();}, 500);

				return false;

			}	

		} else if($('#help_unloading').is(":checked")) {

			if(findObj("cust_addr").value == "" || findObj("cust_addr").value == "Address") {

				alert("You must enter a unloading address.");
				
				var focusTo = "cust_addr";
				
				setTimeout(function(){findObj(focusTo).focus();}, 500);

				return false;

			}	

		}


		var itemNaN = "false";
		var itemNaNslot;

		$(".furnInput > input").each(function() { 



			if($(this).val() != ""  && isNaN($(this).val())) { setTimeout(function(){$(this).focus();}, 500); itemNaN = "true"; itemNaNslot = $(this).attr('name'); return false;}

		});

		if(itemNaN == "true") { 
			alert("Please enter a numerical value.");  
			setTimeout(function(){findObj(itemNaNslot).focus();}, 500);
			return false;
		}

		var bedCheck = true;


		$('.cust_furniture_bed_frame').each(function() { 
			switch($(this).val()) {
				case "other":
					if($(this).siblings('input').val() == "" || $(this).siblings('input').val() == "What do we need to know?") {

						alert("Please tell us about your bed frame.");

						findFocus($(this).parent(), '.cust_furniture_bed_other');

						bedCheck = false;

						return false;

					}		
				case "":
					if($(this).parent().parent().find('.cust_furniture_bed_size').val() != "") {

						alert("Please specify a bed frame");

						$(this).focus();

						bedCheck = false;

						return false;
					}

				break;
			}
		})

		if(bedCheck == false) {
			return false;
		}

		checkSpecialityItems();

		if(specialtyCheck == false) {
			return false;
		}
		

		if($("#cust_furniture_lawnmower").val() != "" && $("#cust_furniture_lawnmower").val() > 0) {
			
			if(!$("#cust_furniture_lawnmower_push").is(":checked") && !$("#cust_furniture_lawnmower_riding").is(":checked")) {
				
				alert("Please specify the type of lawn mower.");

				setTimeout(function(){ 
					$("#cust_furniture_lawnmower_push").focus();
				}, 500);

				return false;

			}

		}

		if($("#cust_furniture_boxtubs").val() == "" || isNaN($("#cust_furniture_boxtubs").val())) {
			
			alert("Please specify an amount of boxes or tubs.");

			setTimeout(function(){findObj("cust_furniture_boxtubs").focus();}, 500);

			return false;

		}

	}

	return true;

}



function findObj(n, d) { 

  var p,i,x;  

  

  if(!d) d=document; 

  

  if((p=n.indexOf("?"))>0&&parent.frames.length) 

  {

    d=parent.frames[n.substring(p+1)].document; 

    n=n.substring(0,p);

  }

  

  if(!(x=d[n])&&d.all) x=d.all[n]; 

  

  for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  

  if(!x && d.getElementById) x=d.getElementById(n); 

  

  return x;

}



function testEmail(obj){



	var email = obj.val();



	var filter=/^(("[\w-\s\+]+")|([\w-\+]+(?:\.[\w-\+]+)*)|("[\w-\s\+]+")([\w-\+]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;



	if (!filter.test(email)) {

		alert("Your email is required and appears to be incorrect. Please try again.");

		obj.focus();

		return false;

	} else {

		var at = email.indexOf("@");

		if((email.charAt(0) == "+") || (email.charAt(at - 1) == "+")){

			alert("Your email is required and appears to be incorrect. Please try again.");

			obj.focus();

			return false;

		}

	}



	return true;



}

var addr_count = 1;
$('.add_address').on("click", function() { 
	$('.alt_addresses').append('<div class="cont_'+addr_count+'">');
	$('.cont_'+addr_count).append('<div class="formText">Additional address - <a href="javascript:void(0);" onclick="removeAddr(this.parentNode);" style="text-decoration: none">(X) Remove</a></div>');
	$('.cont_'+addr_count).append($('<div class="alt_addr_'+ addr_count +'" id="cust_addr_alt" style="padding-bottom: 20px">').load('addition_address.html'));
	addr_count++;
	setTimeout(function() { setFocus(); }, 500);
});

var otherbed_count = 1;
$('.add_otherbed').on("click", function() { 
	$('.otherbeds_container').append('<div class="cont_'+otherbed_count+'">');
	$('.cont_'+addr_count).append('<div class="formText">Additional Bed - <a href="javascript:void(0);" onclick="removeOtherBed(this.parentNode);" style="text-decoration: none">(X) Remove</a></div>');
	$('.cont_'+addr_count).append($('<div class="other_bed_'+ otherbed_count +'" id="cust_furniture_bedroom_other" style="padding-bottom: 20px">').load('otherbed.html'));
	otherbed_count++;
	setTimeout(function() { setFocus(); }, 500);
});

function findFocus(obj, className) {
	setTimeout(function(){
		console.log(obj);
		console.log(className);
		$(obj).find(className).focus();
	}, 500);
}

function setFocus(){
	$('input').focus(function() {

	    $(this).addClass("focus");

	});

	 

	$('input').blur(function() {

		if($(this).attr('id') == "cust_phone" || $(this).attr('id') == "cust_phone_alt") {formatPhone($(this));}

	    $(this).removeClass("focus");

	});			



	$('select').focus(function() {

	    $(this).addClass("focus");

	});

	 

	$('select').blur(function() {

	    $(this).removeClass("focus");

	});			



	$('textarea').focus(function() {

	    $(this).addClass("focus");

	});

	 

	$('textarea').blur(function() {

	    $(this).removeClass("focus");

	});				
}

function pHolder(x) {

if(x.value == '')

	x.value = x.placeholder;

else if(x.value == x.placeholder)

	x.value = '';

}

function removeAddr(div) {

	div.parentNode.remove();
}

function removeOtherBed(div) {

	div.parentNode.remove();
}

function checkSpecialityItems() {
	$('.specialty_checkbox').each(function() {

		if($(this).find('input[type="checkbox"]').is(':checked')) {
			$input = $(this).find('input[type="text"]');
			$moreInfo = $input.val();

			if($moreInfo == "") {
				
				alert("Please tell us about your specialty item.");

				setTimeout(function(){findObj($input.attr('name')).focus();}, 500);

				specialtyCheck = false;

				return false;

			} else {
				specialtyCheck = true;
			}			
		}
	})
}

function scrollToTop() {
	setTimeout(function() { 
		window.scrollTo(0, 0);
		$0parent.scrollTo(0, 0); 
	}, 500);
}