<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<title>Strongmile Movers | Work Order Request</title>

		<meta name="description" content="Let us work for you! Strongmile movers is the most reliable labor-only moving service provider in NJ/NY/PA" />
		<meta name="keywords" content="Strongmile, Strong Mile, Moving, labor-only moving, labor only movers, moving service, New Jersey moving, New York moving, Pennsylvania moving" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta property="og:site_name" content="Strongmile Movers"/>
		<meta property="og:title" content="Strongmile Movers | Professional Moving With A Modern Twist"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.strongmilemovers.com/request"/>
		<meta property="og:description" content="Let us work for you! Strongmile movers is the most reliable labor-only moving service provider in NJ/NY/PA" />
		<meta property="og:image" content="http://www.strongmilemovers.com/fb_share.jpg"/>
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" media="all" href="style.css" type="text/css"/>
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
		<link type="text/css" href="css/ui-lightness/timedatepicker.css" rel="stylesheet" />	
		<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		 
		  ga('create', 'UA-42576051-1', 'strongmilemovers.com');
		  ga('send', 'pageview');
				 
		</script>

	</head>
<body>
<div id="container">
<?php

	function save_request($name, $entrydate, $info) {

		$dbhost = "requestdb.db.10746628.hostedresource.com";
		$dbuser = "requestdb";
		$dbname = "requestdb";
		$dbpass = "theRinse!2";
	   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

		if($conn)
		{
			$name = mysql_real_escape_string($name);
			$edate = date("Y-m-d H:i:s");
			$info = mysql_real_escape_string(strip_tags(htmlentities($info), '<br /><br><p><h1><a>'));

			$sql = "INSERT INTO requests (entrydate, name, info) VALUES ( '". $edate ."', '". $name ."', '". $info ."')";
			  
			mysql_select_db($dbname);

			mysql_query( $sql, $conn );

			$id = mysql_insert_id();

			return $id;
		}

	}

	function clean_user_input($value) {

		 $value = preg_replace('/(to|bcc|cc|content-type):/i', '$1 - ', $value);

		 //strip the quotes, but only if magic quotes are on.
		 //if (get_magic_quotes_gpc()) $value = stripslashes($value);

		 //replace any newline characters with blank spaces.
		 //$value = str_replace(array( "\r", "\n", "%0a", "%0d"), '  ', $value);

		 if(gettype($value) == "string") return trim(strip_tags($value));

	}

	function gmapclean($value){
		$value = str_replace(" ", '+', $value);
		return $value;
	}

	if(isset($_POST['cust_name']))
	{

		$_SAFE_POST = array_map('clean_user_input', $_POST);
		/*
		echo "<pre>";
		print_r($_SAFE_POST);
		echo "</pre>";
		*/
		$message = '<div style="color: #000000; font-size: 15px;">';

		$message .='<h1 style="font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;"> Customer Information:</h1>';
		$message .="<span style=\"color: #000000; font-size: 15px;\"><b>Name:</b> ". $_SAFE_POST['cust_name'] ."<br />\r\n";
		$message .="<b>Phone:</b> ". $_SAFE_POST['cust_phone'];
		if($_SAFE_POST['cust_ext'] != "") $message .=" x". $_SAFE_POST['cust_ext'];

		$message .="<br />\r\n"; 
		
		if($_SAFE_POST['cust_phone_alt'] != "") $message .="<b>Alt Phone:</b> ". $_SAFE_POST['cust_phone_alt'] ."<br />\r\n"; 
		if($_SAFE_POST['cust_email'] != "") $message .="<b>Email:</b> ". strtolower($_SAFE_POST['cust_email']) ."<br />\r\n"; 


		$message .="<br /><br />\r\n"; 
		$tos = "";

		if($_SAFE_POST['time_of_service'] != "") {
			switch($_SAFE_POST['time_of_service']) {
				case "morning":
					$tos = "8am - 9am";
					break;

				case "afternoon":
					$tos = "1pm - 3pm";
					break;
					
			}
			//$message .="<b>Requested Start Time Of Service:</b> ". $tos ."<br /><br />\r\n"; 
		} 

		if($_SAFE_POST['date_of_service'] != "") $message .="<b>Requested Date and Time Of Service:</b> ". $_SAFE_POST['date_of_service'] ." " .$tos ."<br /><br />\r\n"; 

		if($_SAFE_POST['date_of_service_alt'] != "") $message .="<b>Alternate Date Of Service:</b> ". $_SAFE_POST['date_of_service_alt'] ."<br /><br />\r\n"; 

		$message .="<br /><br /></span>"; 

		if($_SAFE_POST['cust_referral'] != "") {
			$message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;\">Referred by:</h1>";

			// <option value="movinghelper">Moving Helper</option>
			// <option value="hireahelper">Hire A Helper</option>
			// <option value="angieslist">Angie's List</option>
			// <option value="yelp">Yelp</option>
			// <option value="search">Search Enging</option>
			// <option value="ff">Friend/Famliy</option>
			// <option value="sm">Strongmile Employee</option>
			// <option value="bc">Business Card</option>
			// <option value="uhaul">UHaul Dealer</option>
			// <option value="other">Other</option>

			switch($_SAFE_POST['cust_referral']){

					case "previouscustomer":
						$message .="Is a previous customer";
						break;

					case "movinghelper":
						$message .="<b>Website:</b> Moving Helper";
						break;

					case "movingstaffers":
						$message .="<b>Website:</b> Moving Staffers";
						break;

					case "hireahelper":
						$message .="<b>Website:</b> Hire A Helper";
						break;

					case "angieslist":
						$message .="<b>Website:</b> Angie's List";
						break;

					case "yelp":
						$message .="<b>Website:</b> Yelp";
						break;

					case "ff":
						$message .="<b>Friend/Family:</b> ". $_SAFE_POST['referral_val'];
						break;

					case "sm":
						$message .="<b>Strongmile Employee:</b> ". $_SAFE_POST['referral_val'];
						break;

					case "bc":
						$message .="<b>Busniess Card:</b> ". $_SAFE_POST['referral_val'];
						break;

					case "uhaul":
						$message .="<b>U-Haul Dealer:</b> ". $_SAFE_POST['referral_val'];
						break;

					case "other":
						$message .="<b>Other:</b> ". $_SAFE_POST['referral_val'];
						break;
				}
			$message .="<br /><br /></span>";
		}

		if($_SAFE_POST['cust_addr_from'] != "") {
			$gmap_href = "https://maps.google.com/?q=". gmapclean($_SAFE_POST['cust_addr_from']) .",+". gmapclean($_SAFE_POST['cust_city_from']) .",+". gmapclean($_SAFE_POST['cust_state_from']); 
			$message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;\">Loading Address:</h1><span style=\"color: #000000; font-size: 15px;\"><a href=\"". $gmap_href ."\" target=\"blank\">". $_SAFE_POST['cust_addr_from'] ." "; 
			$message .= "<br/>"; 
			if($_SAFE_POST['cust_city_from'] != "") $message .= $_SAFE_POST['cust_city_from'] .", "; 
			if($_SAFE_POST['cust_state_from'] != "") $message .= $_SAFE_POST['cust_state_from'];
			$message .= "</a><br />\r\n";
			if($_SAFE_POST['cust_addr_2_from'] != "") $message .="<br />Unit ". $_SAFE_POST['cust_addr_2_from'];
			$message .= "<br /><br />\r\n";
			if($_SAFE_POST['cust_residence_type_from'] != "") {

				switch($_SAFE_POST['cust_residence_type_from']){
						case "home_from":
							$message .="<b>Loading Residence Type:</b> Single Family Home<br />\r\n";
							$message .="<b>Floors:</b> ". $_SAFE_POST['home_floor_from'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['home_brs_from']."<br />\r\n";
							if(isset($_SAFE_POST['home_attic_from'])) $message .="<b>Attic:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['home_basement_from'])) $message .="<b>Basement:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['home_garage_from'])) $message .="<b>Garage:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['home_shed_from'])) $message .="<b>Shed:</b> Y<br />\r\n";
							break;

						case "apt_studio_from":
							$message .="<b>Loading Residence Type:</b> Studio Apartment<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['apt_studio_floor_from'] ."<br />\r\n";
							if(isset($_SAFE_POST['apt_studio_elevator_from'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['apt_studio_stairs_from'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "apt_from":
							$message .="<b>Loading Residence Type:</b> Apartment<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['apt_floor_from'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['apt_brs_from']."<br />\r\n";
							if(isset($_SAFE_POST['apt_elevator_from'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['apt_stairs_from'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "condo_from":
							$message .="<b>Loading Residence Type:</b> Condominium<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['condo_floor_from'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['condo_brs_from']."<br />\r\n";
							if(isset($_SAFE_POST['condo_multilevel_from'])) $message .="<b>Multi-level:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['condo_elevator_from'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['condo_stairs_from'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "ths_from":
							$message .="<b>Loading Residence Type:</b> Townhouse / Duplex<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['ths_floor_from'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['ths_brs_from']."<br />\r\n";
							if(isset($_SAFE_POST['ths_multilevel_from'])) $message .="<b>Multi-level:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_attic_from'])) $message .="<b>Attic:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_basement_from'])) $message .="<b>Basement:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_garage_from'])) $message .="<b>Garage:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_shed_from'])) $message .="<b>Shed:</b> Y<br />\r\n";
							break;

						case "office_from":
							$message .="<b>Loading Residence Type:</b> Office<br />\r\n";
							$message .="<b>Rooms:</b> ". $_SAFE_POST['office_rooms_from'] ."<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['office_floor_from'] ."<br />\r\n";
							if(isset($_SAFE_POST['office_elevator_from'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['office_stairs_from'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "storage_from":
							$message .="<b>Loading Residence Type:</b> Storage Unit<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['storage_floor_from'] ."<br />\r\n";
							$message .="<b>Size:</b> ". $_SAFE_POST['storage_size_from'] ."<br />\r\n";
							if(isset($_SAFE_POST['storage_elevator_from'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['storage_stairs_from'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;
				}
			}
			$message .="<br />";
			if(isset($_SAFE_POST['misc_walk_from'])) $message .="<b>Long Walk</b> Y<br/>";
			if(isset($_SAFE_POST['misc_insurance_from'])) $message .="<b>COI</b> Y<br/>";
			if($_SAFE_POST['misc_text_from'] != "" && $_SAFE_POST['misc_text_from'] != "Other") $message .="<b>Additional information:</b> ". $_SAFE_POST['misc_text_from'] ."<br/>";
			$message .="<br /></span>";
		}

		if($_SAFE_POST['cust_addr'] != "") {
			$gmap_href = "https://maps.google.com/?q=". gmapclean($_SAFE_POST['cust_addr']) .",+". gmapclean($_SAFE_POST['cust_city']) .",+". gmapclean($_SAFE_POST['cust_state']); 			
			$message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;
			\">Unloading Address:</h1><span style=\"color: #000000; font-size: 15px;\"><a href=\"". $gmap_href ."\" target=\"blank\">". $_SAFE_POST['cust_addr'] ." ";  
			$message .= "<br/>";
			if($_SAFE_POST['cust_city'] != "") $message .= $_SAFE_POST['cust_city'] .", ";
			if($_SAFE_POST['cust_state'] != "") $message .= $_SAFE_POST['cust_state'];
			$message .= "</a><br />\r\n";
			if($_SAFE_POST['cust_addr_2'] != "") $message .="<br />Unit ". $_SAFE_POST['cust_addr_2'];
			$message .= "<br /><br />\r\n";
			if($_SAFE_POST['cust_residence_type'] != "") {

				switch($_SAFE_POST['cust_residence_type']){
						case "home":
							$message .="<b>Unloading Residence Type:</b> Single Family Home<br />\r\n";
							$message .="<b>Floors:</b> ". $_SAFE_POST['home_floor'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['home_brs']."<br />\r\n";
							if(isset($_SAFE_POST['home_attic'])) $message .="<b>Attic:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['home_basement'])) $message .="<b>Basement:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['home_garage'])) $message .="<b>Garage:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['home_shed'])) $message .="<b>Shed:</b> Y<br />\r\n";
							break;

						case "apt_studio":
							$message .="<b>Unloading Residence Type:</b> Studio Apartment<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['apt_studio_floor'] ."<br />\r\n";
							if(isset($_SAFE_POST['apt_studio_elevator'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['apt_studio_stairs'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "apt":
							$message .="<b>Unloading Residence Type:</b> Apartment<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['apt_floor'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['apt_brs']."<br />\r\n";
							if(isset($_SAFE_POST['apt_elevator'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['apt_stairs'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "condo":
							$message .="<b>Unloading Residence Type:</b> Condominium<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['condo_floor'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['condo_brs']."<br />\r\n";
							if(isset($_SAFE_POST['condo_multilevel'])) $message .="<b>Multi-level:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['condo_elevator'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['condo_stairs'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "ths":
							$message .="<b>Unloading Residence Type:</b> Townhouse / Duplex<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['ths_floor'] ."<br />\r\n";
							$message .="<b>Bedrooms:</b> ". $_SAFE_POST['ths_brs']."<br />\r\n";
							if(isset($_SAFE_POST['ths_multilevel'])) $message .="<b>Multi-level:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_attic'])) $message .="<b>Attic:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_basement'])) $message .="<b>Basement:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_garage'])) $message .="<b>Garage:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['ths_shed'])) $message .="<b>Shed:</b> Y<br />\r\n";
							break;

						case "office":
							$message .="<b>Unloading Residence Type:</b> Office<br />\r\n";
							$message .="<b>Rooms:</b> ". $_SAFE_POST['office_rooms'] ."<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['office_floor'] ."<br />\r\n";
							if(isset($_SAFE_POST['office_elevator'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['office_stairs'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;

						case "storage":
							$message .="<b>Unloading Residence Type:</b> Storage Unit<br />\r\n";
							$message .="<b>Floor:</b> ". $_SAFE_POST['storage_floor'] ."<br />\r\n";
							$message .="<b>Size:</b> ". $_SAFE_POST['storage_size'] ."<br />\r\n";
							if(isset($_SAFE_POST['storage_elevator'])) $message .="<b>Elevator:</b> Y<br />\r\n";
							if(isset($_SAFE_POST['storage_stairs'])) $message .="<b>Stairs:</b> Y<br />\r\n";
							break;
				}
			}
			$message .="<br />";
			if(isset($_SAFE_POST['misc_walk_to'])) $message .="<b>Long Walk</b> Y<br/>";
			if(isset($_SAFE_POST['misc_insurance_to'])) $message .="<b>COI</b> Y<br/>";
			if($_SAFE_POST['misc_text_to'] != "") $message .="<b>Additional information:</b> ". $_SAFE_POST['misc_text_to'] ."<br/>";
			$message .="<br /></span>";
		}

		include('alt_addresses.php');
	    //if($_SAFE_POST['cust_addr_other'] != "") $message .="<span style=\"color: #000000; font-size: 15px;\"><b>Other Addresses:</b> ". $_SAFE_POST['cust_addr_other'] ."<br /><br /></span>";

		$helpMessage = "";
		$helpCount = 0;

		if(isset($_SAFE_POST['help_loading_all'])) { $helpCount = 1; $helpMessage .="Full Transport Move<br />\r\n"; }		
		if(isset($_SAFE_POST['help_loading'])) { $helpCount = 1; $helpMessage .="Load Only<br />\r\n"; }
		if(isset($_SAFE_POST['help_unloading'])) { $helpCount = 1; $helpMessage .="Unload Only<br />\r\n"; }	
		if(isset($_SAFE_POST['help_inhome'])) { $helpCount = 1; $helpMessage .="In-Home<br />\r\n"; }
		if(isset($_SAFE_POST['help_inapt'])) { $helpCount = 1; $helpMessage .="In-Building<br />\r\n"; }
		if(isset($_SAFE_POST['help_incomplex'])) { $helpCount = 1; $helpMessage .="In-Complex<br />\r\n"; }	
		if(isset($_SAFE_POST['help_packing'])) { $helpCount = 1; $helpMessage .="Box packing (complete)<br />\r\n"; }
		if(isset($_SAFE_POST['help_packing_partial'])) { $helpCount = 1; $helpMessage .="Box packing (partial)<br />\r\n"; }
		

		if($_SAFE_POST['other_text'] != "") { $helpCount = 1; $helpMessage .="Other help: ". $_SAFE_POST['other_text'] ."<br />\r\n"; }
		if($helpCount > 0) {
			$message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;\">Help Requested:</h1>";
			$message .= "<span style=\"color: #000000; font-size: 15px;\">" .$helpMessage ."</span>";
		}
		
		$message .="<br /><br />\r\n";
	
		$furnCount = 0;
		$furnMessage = array();

		$message .=""; 	
		$furnMessage[1]['title'] = "Living / Family room:";
		$furnMessage[1]['items'] = "";
		if($_SAFE_POST['cust_furniture_secsofa'] != "" && $_SAFE_POST['cust_furniture_secsofa'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Sectional Sofa: ". $_SAFE_POST['cust_furniture_secsofa'] ."<br />\r\n"; }
		if($_SAFE_POST['cust_furniture_secsofa_sections'] != "" && $_SAFE_POST['cust_furniture_secsofa_sections'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Sections: ". $_SAFE_POST['cust_furniture_secsofa'] ."<br />\r\n"; }
	    if($_SAFE_POST['cust_furniture_secsofa_chaise'] != "" && strtolower($_SAFE_POST['cust_furniture_secsofa_chaise']) == "y") { $furnCount = 1;  $furnMessage[1]['items'] .=" w/chaise<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_3seatcouch'] != "" && $_SAFE_POST['cust_furniture_3seatcouch'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="3-Seat Couch: ". $_SAFE_POST['cust_furniture_3seatcouch'] ."\r\n" ; 
		    if($_SAFE_POST['cust_furniture_3seatcouch_sleeper'] != "" && strtolower($_SAFE_POST['cust_furniture_3seatcouch_sleeper']) == "y") { $furnCount = 1;  $furnMessage[1]['items'] .=" sleeper sofa<br />\r\n" ;} 
		    else {
		    	$furnMessage[1]['items'] .= "<br />\r\n" ;
		    }
		}
	    if($_SAFE_POST['cust_furniture_2seatcouch'] != "" && $_SAFE_POST['cust_furniture_2seatcouch'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="2-Seat Sofa: ". $_SAFE_POST['cust_furniture_2seatcouch'] ."<br />\r\n" ;
		    if($_SAFE_POST['cust_furniture_2seatcouch_sleeper'] != "" && strtolower($_SAFE_POST['cust_furniture_2seatcouch_sleeper']) == "y") { $furnCount = 1;  $furnMessage[1]['items'] .=" sleeper sofa<br />\r\n" ;}  
		    else {
		    	$furnMessage[1]['items'] .= "<br />\r\n" ;
		    }
		}
	    if($_SAFE_POST['cust_furniture_recliner'] != "" && $_SAFE_POST['cust_furniture_recliner'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Recliner: ". $_SAFE_POST['cust_furniture_recliner'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_simplechair'] != "" && $_SAFE_POST['cust_furniture_simplechair'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Arm Chair: ". $_SAFE_POST['cust_furniture_simplechair'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_futon'] != "" && $_SAFE_POST['cust_furniture_futon'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Futon: ". $_SAFE_POST['cust_furniture_futon'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_ottoman'] != "" && $_SAFE_POST['cust_furniture_ottoman'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Ottoman: ". $_SAFE_POST['cust_furniture_ottoman'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_coffeetable'] != "" && $_SAFE_POST['cust_furniture_coffeetable'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="Coffee Table: ". $_SAFE_POST['cust_furniture_coffeetable'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_endtable'] != "" && $_SAFE_POST['cust_furniture_endtable'] != "0") { $furnCount = 1;  $furnMessage[1]['items'] .="End Table: ". $_SAFE_POST['cust_furniture_endtable'] ."<br />\r\n" ;} 

	    $furnMessage[2]['title'] = "Dining room / Kitchen furniture:";
	    $furnMessage[2]['items'] = "";
	    if($_SAFE_POST['cust_furniture_diningtable'] != "" && $_SAFE_POST['cust_furniture_diningtable'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="Dining/Kitchen Table: ". $_SAFE_POST['cust_furniture_diningtable'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_diningchairs'] != "" && $_SAFE_POST['cust_furniture_diningchairs'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="Dining/Kitchen Chairs: ". $_SAFE_POST['cust_furniture_diningchairs'] ."<br />\r\n" ;}
	    if($_SAFE_POST['cust_furniture_buffettable'] != "" && $_SAFE_POST['cust_furniture_buffettable'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="Buffet Table: ". $_SAFE_POST['cust_furniture_buffettable'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_chinacabinet'] != "" && $_SAFE_POST['cust_furniture_chinacabinet'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="China Cabinet: ". $_SAFE_POST['cust_furniture_chinacabinet'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_curiocabinet'] != "" && $_SAFE_POST['cust_furniture_curiocabinet'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="Curio Cabinet: ". $_SAFE_POST['cust_furniture_curiocabinet'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_hutch'] != "" && $_SAFE_POST['cust_furniture_hutch'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="Hutch: ". $_SAFE_POST['cust_furniture_hutch'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_breakfront'] != "" && $_SAFE_POST['cust_furniture_breakfront'] != "0") { $furnCount = 2;  $furnMessage[2]['items'] .="Break Front: ". $_SAFE_POST['cust_furniture_breakfront'] ."<br />\r\n" ;} 

	    $furnMessage[3]['title'] = "Office furniture:";
	    $furnMessage[3]['items'] = "";
	    if($_SAFE_POST['cust_furniture_desk'] != "" && $_SAFE_POST['cust_furniture_desk'] != "0") { $furnCount = 3;  $furnMessage[3]['items'] .="Desk: ". $_SAFE_POST['cust_furniture_desk'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_office_chair'] != "" && $_SAFE_POST['cust_furniture_office_chair'] != "0") { $furnCount = 3;  $furnMessage[3]['items'] .="Office Chair: ". $_SAFE_POST['cust_furniture_office_chair'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_bookshelf'] != "") { $furnCount = 3;  $furnMessage[3]['items'] .="Book Shelf (Qty & Sizes): ". $_SAFE_POST['cust_furniture_bookshelf'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_filecabinet'] != "" && $_SAFE_POST['cust_furniture_filecabinet'] != "0") { $furnCount = 3;  $furnMessage[3]['items'] .="File Cabinet: ". $_SAFE_POST['cust_furniture_filecabinet'] ."<br />\r\n" ;} 

	    $furnMessage[4]['title'] = "Bedrooms:";
	    $furnMessage[4]['items'] = "";
	    if($_SAFE_POST['cust_furniture_mattress'] != "") { $furnCount = 4;  $furnMessage[4]['items'] .="Mattress (Qty & Sizes): ". $_SAFE_POST['cust_furniture_mattress'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_boxspring'] != "") { $furnCount = 4;  $furnMessage[4]['items'] .="Box Spring (Qty & Sizes): ". $_SAFE_POST['cust_furniture_boxspring'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_bedframe'] != "") { $furnCount = 4;  $furnMessage[4]['items'] .="Bed Frame (Qty & Sizes): ". $_SAFE_POST['cust_furniture_bedframe'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_nightstand'] != "" && $_SAFE_POST['cust_furniture_nightstand'] != "0") { $furnCount = 4;  $furnMessage[4]['items'] .="Night Stand: ". $_SAFE_POST['cust_furniture_nightstand'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_dresser'] != "" && $_SAFE_POST['cust_furniture_dresser'] != "0") { $furnCount = 4;  $furnMessage[4]['items'] .="Dresser: ". $_SAFE_POST['cust_furniture_dresser'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_chestofdrawers'] != "" && $_SAFE_POST['cust_furniture_chestofdrawers'] != "0") { $furnCount = 4;  $furnMessage[4]['items'] .="Chest of Drawers: ". $_SAFE_POST['cust_furniture_chestofdrawers'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_armoire'] != "") { $furnCount = 4;  $furnMessage[4]['items'] .="Armoire: ". $_SAFE_POST['cust_furniture_armoire'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_chest'] != "" && $_SAFE_POST['cust_furniture_chest'] != "0") { $furnCount = 4;  $furnMessage[4]['items'] .="Chest: ". $_SAFE_POST['cust_furniture_chest'] ."<br />\r\n" ;} 
		if($_SAFE_POST['cust_furniture_mirror'] != "" && $_SAFE_POST['cust_furniture_mirror'] != "0") { $furnCount = 4;  $furnMessage[4]['items'] .="Mirror: ". $_SAFE_POST['cust_furniture_mirror'] ."<br />\r\n" ;}	    

		$furnMessage[5]['title'] = "Exercise:";
		$furnMessage[5]['items'] = "";
	    if($_SAFE_POST['cust_furniture_treadmill'] != "" && $_SAFE_POST['cust_furniture_treadmill'] != "0") { $furnCount = 5;  $furnMessage[5]['items'] .="Treadmill: ". $_SAFE_POST['cust_furniture_treadmill'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_elliptical'] != "" && $_SAFE_POST['cust_furniture_elliptical'] != "0") { $furnCount = 5;  $furnMessage[5]['items'] .="Elliptical: ". $_SAFE_POST['cust_furniture_elliptical'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_stationarybike'] != "" && $_SAFE_POST['cust_furniture_stationarybike'] != "0") { $furnCount = 5;  $furnMessage[5]['items'] .="Stationary Bike: ". $_SAFE_POST['cust_furniture_stationarybike'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_excercise_other'] != "") { $furnCount = 5;  $furnMessage[5]['items'] .="Other Exercise Equipment: ". $_SAFE_POST['cust_furniture_excercise_other'] ."<br />\r\n" ;} 

	    $furnMessage[6]['title'] = "Outdoor / Garage:";
	    $furnMessage[6]['items'] = "";
	    if($_SAFE_POST['cust_furniture_patiotable'] != "" && $_SAFE_POST['cust_furniture_patiotable'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Patio Table: ". $_SAFE_POST['cust_furniture_patiotable'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_patiochairs'] != "" && $_SAFE_POST['cust_furniture_patiochairs'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Patio Chairs: ". $_SAFE_POST['cust_furniture_patiochairs'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_outdoorgrill'] != "" && $_SAFE_POST['cust_furniture_outdoorgrill'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Outdoor Grill: ". $_SAFE_POST['cust_furniture_outdoorgrill'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_bike'] != "" && $_SAFE_POST['cust_furniture_bike'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Bicycles: ". $_SAFE_POST['cust_furniture_bike'] ."<br />\r\n" ;} 
	   	if($_SAFE_POST['cust_furniture_yardtools'] != "" && $_SAFE_POST['cust_furniture_yardtools'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Yard Tools: ". $_SAFE_POST['cust_furniture_yardtools'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_snowblower'] != "" && $_SAFE_POST['cust_furniture_snowblower'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Snow Blower: ". $_SAFE_POST['cust_furniture_snowblower'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_lawnmower'] != "" && $_SAFE_POST['cust_furniture_lawnmower'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Lawn Mower: ". $_SAFE_POST['cust_furniture_lawnmower'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_lawnmower_size'] != "" && $_SAFE_POST['cust_furniture_lawnmower_size'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Lawn Mower Size: ". $_SAFE_POST['cust_furniture_lawnmower_size'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_lawnmower_type'] != "" && $_SAFE_POST['cust_furniture_lawnmower_type'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Lawn Mower Type: ". $_SAFE_POST['cust_furniture_lawnmower_type'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_lawnmower_power'] != "" && $_SAFE_POST['cust_furniture_lawnmower_power'] != "0") { $furnCount = 6;  $furnMessage[6]['items'] .="Lawn Mower Powerplant: ". $_SAFE_POST['cust_furniture_lawnmower_power'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_outside_other'] != "") { $furnCount = 6;  $furnMessage[6]['items'] .="Other Outside: ". $_SAFE_POST['cust_furniture_outside_other'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_outside_other_gas'] != "") { $furnCount = 6;  $furnMessage[6]['items'] .="Other Gas-Powered Items: ". $_SAFE_POST['cust_furniture_outside_other_gas'] ."<br />\r\n" ;} 

	    $furnMessage[7]['title'] = "Others:";
	    $furnMessage[7]['items'] = "";
	    if($_SAFE_POST['cust_furniture_tv'] != "" && $_SAFE_POST['cust_furniture_tv'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="TV: ". $_SAFE_POST['cust_furniture_tv'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_tvstand'] != "" && $_SAFE_POST['cust_furniture_tvstand'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="TV Stand: ". $_SAFE_POST['cust_furniture_tvstand'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_entertainmentcenter'] != "") { $furnCount = 7;  $furnMessage[7]['items'] .="Entertainment Stand (Qty & Sizes): ". $_SAFE_POST['cust_furniture_entertainmentcenter'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_lamp_floor'] != "" && $_SAFE_POST['cust_furniture_lamp_floor'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="Floor Lamp: ". $_SAFE_POST['cust_furniture_lamp_floor'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_lamp_table'] != "" && $_SAFE_POST['cust_furniture_lamp_table'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="Table Lamp: ". $_SAFE_POST['cust_furniture_lamp_table'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_rug'] != "" && $_SAFE_POST['cust_furniture_rug'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="Rugs: ". $_SAFE_POST['cust_furniture_rug'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_toys'] != "" && $_SAFE_POST['cust_furniture_toys'] != "0") { $furnCount = 7;  $furnMessage[7]['items'].="Lg Childrens Toys: ". $_SAFE_POST['cust_furniture_toys'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_crib'] != "" && $_SAFE_POST['cust_furniture_crib'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="Crib: ". $_SAFE_POST['cust_furniture_crib'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_safe'] != "" && $_SAFE_POST['cust_furniture_safe'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="Safe: ". $_SAFE_POST['cust_furniture_safe'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_piano'] != "" && $_SAFE_POST['cust_furniture_piano'] != "0") { $furnCount = 7;  $furnMessage[7]['items'] .="Piano: ". $_SAFE_POST['cust_furniture_piano'] ."<br />\r\n" ;}  

	    $furnMessage[8]['title'] = "Appliances:";
	    $furnMessage[8]['items'] = "";
	    if($_SAFE_POST['cust_furniture_washer'] != "" && $_SAFE_POST['cust_furniture_washer'] != "0") { $furnCount = 8;  $furnMessage[8]['items'] .="Washer: ". $_SAFE_POST['cust_furniture_washer'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_dryer'] != "" && $_SAFE_POST['cust_furniture_dryer'] != "0") { $furnCount = 8;  $furnMessage[8]['items'] .="Dryer: ". $_SAFE_POST['cust_furniture_dryer'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_refrigerator'] != "" && $_SAFE_POST['cust_furniture_refrigerator'] != "0") { $furnCount = 8;  $furnMessage[8]['items'] .="Refrigerator: ". $_SAFE_POST['cust_furniture_refrigerator'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_freezer'] != "" && $_SAFE_POST['cust_furniture_freezer'] != "0") { $furnCount = 8;  $furnMessage[8]['items'] .="Freezer: ". $_SAFE_POST['cust_furniture_freezer'] ."<br />\r\n" ;} 
	    if($_SAFE_POST['cust_furniture_stove'] != "" && $_SAFE_POST['cust_furniture_stove'] != "0") { $furnCount = 8;  $furnMessage[8]['items'] .="Stove: ". $_SAFE_POST['cust_furniture_stove'] ."<br />\r\n" ;} 

	    $furnMessage[9]['title'] = "Miscellaneous:";
	    $furnMessage[9]['items'] = "";
	    if($_SAFE_POST['cust_furniture_boxtubs'] != "") { $furnCount = 9;  $furnMessage[9]['items'] .="Boxes / Plastic Tubs: ". $_SAFE_POST['cust_furniture_boxtubs'] ."<br />\r\n" ;}		
	    if($_SAFE_POST['cust_furniture_luggage'] != "" && $_SAFE_POST['cust_furniture_luggage'] != "0") { $furnCount = 9;  $furnMessage[9]['items'] .="Luggage: ". $_SAFE_POST['cust_furniture_luggage'] ."<br />\r\n" ;}
		if($_SAFE_POST['cust_furniture_bags'] != "" && $_SAFE_POST['cust_furniture_bags'] != "0") { $furnCount = 9;  $furnMessage[9]['items'] .="Bags: ". $_SAFE_POST['cust_furniture_bags'] ."<br />\r\n" ;}

		if($furnCount > 0) {
			$message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;\">Household Items:</h1><br />\r\n";	
			foreach($furnMessage as $itemType) {
				if($itemType['items'] != "") {
							$message .= "<span style=\"color: #000000; font-size: 15px; font-weight: bold\">".$itemType['title']."</span><br /><br />\r\n";
							$message .= "<span style=\"color: #000000; font-size: 15px;\">" . $itemType['items'] ."</span><br /><br />\r\n";
				}
			}
		} else {
			str_replace("<h1 style='font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;'>Household Items:</h1><br />\r\n", "", $message);
		}
	    if($_SAFE_POST['cust_furniture_other'] != "") $message .="<span style=\"color: #000000; font-size: 15px;\"><b>Other Items:</b> ". $_SAFE_POST['cust_furniture_other'] ."<br /><br /></span>";
	    if($_SAFE_POST['cust_furniture_glass'] != "") $message .="<span style=\"color: #000000; font-size: 15px;\"><b>Glass Items:</b> ". $_SAFE_POST['cust_furniture_glass'] ."<br /><br /></span>";

	    if($_SAFE_POST['cust_importantinfo'] != "") $message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;\">Important Information:</h1><span style=\"color: #000000; font-size: 15px;\">". $_SAFE_POST['cust_importantinfo'] ."</span><br /><br />\r\n";

	    if($_SAFE_POST['cust_otherinfo'] != "") $message .="<h1 style=\"font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;\">Other Information:</h1><span style=\"color: #000000; font-size: 15px;\">". $_SAFE_POST['cust_otherinfo'] ."</span><br /><br />\r\n";
		
		$message .= '</div>';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: Strongmile Quote <info@strongmilemovers.com>" . "\r\n";

		$to = "strongmilemovers@gmail.com";

		//$to = "michaeljconley@gmail.com";

		date_default_timezone_set('America/New_York');

		if(isset($_POST['itshuman'])) {
			$refId = save_request($_SAFE_POST['cust_name'], $_SAFE_POST['date_of_service'], $message);
			$refIdText = '<div style="color: #000000; font-size: 15px;"><b>Reference ID: ' . $refId . '</b></div>';
			$message = $refIdText . $message;
			mail($to, '#'. $refId .' - '. $_SAFE_POST['date_of_service'] . ' - ' . stripslashes($_SAFE_POST['cust_name']) .' - '. $_SAFE_POST['cust_phone'],  stripcslashes($message), $headers);

			include('thankyou.php');
		}
		// echo $message;

	} else {

		include('form.php');
 } ?>

</body>
</html>