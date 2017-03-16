var isiPhone = navigator.userAgent.match(/iPhone/i) != null;

var isAndroid = navigator.userAgent.match(/Android/i) != null;

var isWindowsPhone = navigator.userAgent.match(/Windows Phone/i) != null;

var debug = false;

$(function() { 

	setFocus();						

	$('.howtopack').on('click', function(e) { 
		e.preventDefault(); 
		$('.howtopack_content').toggle();
	});


	$('.boxcounts').on('click', function(e) { 
		e.preventDefault(); 
		$('.boxcounts_content').toggle();
	});

	setTimeout(function() { $('#captchaDiv').html('<input type="checkbox" name="itshuman" id="itshuman" />'); }, 5000);

	});

	if(isiPhone || isWindowsPhone || isAndroid) {

	} else {

	$('#date_of_service').datepicker();



	}



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

				$('.'+val).slideDown();

			} else {

				$(".home").slideUp();

				$(".apt_studio").slideUp();

				$(".apt").slideUp();

				$(".condo").slideUp();

				$(".ths").slideUp();

				$(".office").slideUp();						

				$(".storage").slideUp();



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

				$('.'+val).slideDown();

			} else {

				$(".home_from").slideUp();

				$(".apt_studio_from").slideUp();

				$(".apt_from").slideUp();

				$(".condo_from").slideUp();

				$(".ths_from").slideUp();

				$(".office_from").slideUp();						

				$(".storage_from").slideUp();



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

				case "previouscustomer":

					$(".referral").slideUp();

					break;



				case "ff":

				case "sm":

					$('.referral_val').val('Who?');

					$('.referral_val').attr('placeholder', 'Who?');

					$(".referral").slideDown();

					break;



				case "bc":

				case "uhaul":

					$('.referral_val').val('Where?');

					$('.referral_val').attr('placeholder', 'Where?');

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

		addr.find('.'+val).slideDown();

	} else {

		addr.find(".home_alt").slideUp();

		addr.find(".apt_studio_alt").slideUp();

		addr.find(".apt_alt").slideUp();

		addr.find(".condo_alt").slideUp();

		addr.find(".ths_alt").slideUp();

		addr.find(".office_alt").slideUp();						

		addr.find(".storage_alt").slideUp();



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

			if(findObj("cust_ext").value == "Ext.") $("#cust_ext").val("");

			if(findObj("cust_city").value == "City") $("#cust_city").val("");

			if(findObj("cust_state").value == "State (2 letter abbr.)") $("#cust_state").val("");

			if(findObj("other_text").value == "Specify other help needed not listed above") $(".other_text").val("");

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

						if (findObj("storage_size_from").value == "" || findObj("storage_size_from").value == "Unit size (ie 10x10)") {

								alert("Please approximate how large your storage unit is.  For example 10x10");

								setTimeout(function(){findObj("storage_size_from").focus();}, 500);

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

						if (findObj("storage_size").value == "" || findObj("storage_size").value == "Unit size (ie 10x10)") {

								alert("Please approximate how large your storage unit is.  For example 10x10");

								setTimeout(function(){findObj("storage_size").focus();}, 500);

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

	}

	$('div[id^="cust_addr_alt"]').each(function() {

		if ($(this).find(".action_alt").val() == "" || $(this).find(".action_alt").val() == "Loading/Unloading?") {

			alert("Please specify if we are loading or unloading at this location.");

			findFocus($(this), '.action_alt');

			return false;

		}


		if($(this).find(".cust_addr_alt").val() == "" || $(this).find(".cust_addr_alt").val() == "Address") {

			alert("You must enter an address.");

			findFocus($(this), '.cust_addr_alt');

			return false;

		}

		if($(this).find(".cust_city_alt").val() == "" || $(this).find(".cust_city_alt").val() == "City") {

			alert("You must enter a city.");

			findFocus($(this), '.cust_city_alt');

			return false;

		}

		if($(this).find('.cust_state_alt').val() == "")

		{

			alert("You must enter a state.");

			findFocus($(this), '.cust_state_alt');

			return false;

		}


		var val = $(this).find('.cust_res_type_alt').val();

		if(val != "")

		{

			switch(val){

				case "home_alt":

					if ($(this).find(".home_floor_alt").val() == "" || $(this).find(".home_floor_alt").val() == "How many floors?") {



							alert("Please specify how many floors you have in your home.");

							findFocus($(this), '.home_floor_alt');

							return false;

					}



					if ($(this).find(".home_brs_alt").val() == "" || $(this).find(".home_brs_alt").val() == "# of bedrooms?") {



							alert("Please specify how many bedrooms you have in your home.");

							findFocus($(this), '.home_brs_alt');

							return false;

					}											

					break;	


				case "apt_studio_alt":

					if ($(this).find(".apt_studio_floor_alt").val() == "" || $(this).find(".apt_studio_floor_alt").val() == "What floor?") {

							alert("Please specify what floor your studio apartment is on.");

							findFocus($(this), '.apt_studio_floor_alt');

							return false;

					}

					break;


				case "apt_alt":

					if ($(this).find(".apt_floor_alt").val() == "" || $(this).find(".apt_floor_alt").val() == "What floor?") {

							alert("Please specify what floor your apartment is on.");

							findFocus($(this), '.apt_floor_alt');

							return false;

					}



					if ($(this).find(".apt_brs_alt").val() == "" || $(this).find(".apt_brs_alt").val() == "# of bedrooms?") {

							alert("Please specify how many bedrooms you have in your apartment.");

							findFocus($(this), '.apt_brs_alt');

							return false;

					}											

					break;										


				case "condo_alt":

					if ($(this).find(".condo_floor_alt").val() == "" || $(this).find(".condo_floor_alt").val() == "What floor?") {

							alert("Please specify what floor your condominium is on.");

							findFocus($(this), '.condo_floor_alt');

							return false;

					}


					if ($(this).find(".condo_brs_alt").val() == "" || $(this).find(".condo_brs_alt").val() == "# of bedrooms?") {

							alert("Please specify how many bedrooms you have in your condominium.");

							findFocus($(this), '.condo_brs_alt');

							return false;

					}	

					break;


				case "ths_alt":

					if ($(this).find(".ths_floor_alt").val() == "" || $(this).find(".ths_floor_alt").val() == "How many floors?") {



							alert("Please specify how many floors you have in your townhouse/duplex.");

							findFocus($(this), '.ths_brs_alt');

							return false;

					}



					if ($(this).find(".ths_brs_alt").val() == "" || $(this).find(".ths_brs_alt").val() == "# of bedrooms?") {


							alert("Please specify how many bedrooms you have in your townhouse/duplex.");

							findFocus($(this), '.ths_brs_alt');

							return false;

					}										

					break;		



				case "office_alt":

					if ($(this).find(".office_rooms_alt").val() == "" || $(this).find(".office_rooms_alt").val() == "# of rooms?") {


							alert("Please specify how many rooms you have in your office.");

							findFocus($(this), '.office_rooms_alt');

							return false;

					}		

					if ($(this).find(".office_floor_alt").val() == "" || $(this).find(".office_floor_alt").val() == "What floor?") {



							alert("Please specify what floor your office is on.");

							findFocus($(this), '.office_brs_alt');

							return false;

					}

					
					break;



				case "storage_alt":



					if ($(this).find(".storage_size_alt").val() == "" || $(this).find(".storage_size_alt").val() == "Unit size (ie 10x10)") {



							alert("Please approximate how large your storage unit is.  For example 10x10");

							findFocus($(this), '.storage_size_alt');

							return false;

					}


					break;		

			}
		} else{

			alert("You must specify if it's a residence or a storage unit.");

			findFocus($(this), '.cust_res_type_alt');

			return false;										

		}
	});

	if(!debug) {

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

					if (findObj("referral_val").value == "" || findObj("referral_val").value == "Who?") {

						alert("Please specify a referral.");

						setTimeout(function(){findObj("referral_val").focus();}, 500);

						return false;

					}

					break;



				case "bc":

				case "uhaul":

					if (findObj("referral_val").value == "" || findObj("referral_val").value == "Where?") {

						alert("Please specify a referral.");

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
	console.log(div.parentNode);
	div.parentNode.remove();
}