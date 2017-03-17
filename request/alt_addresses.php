<?php
		$alt_count = 0;
		if(isset($_POST['cust_addr_alt'])) {
			foreach($_POST['cust_addr_alt'] as $addr) {
				$sub_count = $alt_count + 1;
				$gmap_href = "https://maps.google.com/?q=". gmapclean($_POST['cust_addr_alt'][$alt_count]) .",+". gmapclean($_POST['cust_city_alt'][$alt_count]) .",+". gmapclean($_POST['cust_state_alt'][$alt_count]); 
				$addl_cust_addr = $_POST['cust_addr_alt'][$alt_count];
				$message .="<h1 style='font-family: Arial, sans-serif; padding: 10px; font-size: 15px; background-color: #f7941d; color: #000000; text-transform: uppercase; margin: 0px 0px 10px 0px; font-weight: bold;'>Additional Address ". $sub_count .":</h1><span style='color: #000000; font-size: 15px;'><a href='". $gmap_href ."' target='blank'>". $addl_cust_addr;  
				$message .= "<br/>";
				if($_POST['cust_city_alt'][$alt_count] != "") $message .= $_POST['cust_city_alt'][$alt_count] .", "; 
				if($_POST['cust_state_alt'][$alt_count] != "") $message .= $_POST['cust_state_alt'][$alt_count];
				$message .= "</a><br/>";
				if($_POST['cust_addr_2_alt'][$alt_count] != "") $message .="<br />Unit ". $_POST['cust_addr_2_alt'][$alt_count];
				$message .= "<Br /><b>Action</b>: ";
				switch($_POST['action_alt'][$alt_count]){
					case "loading_alt":
						$message .= "Loading";
						break;

					case "unloading_alt":
						$message .= "Unloading";
						break;
				}

				$message .= "<br/><br/>";

				if($_POST['cust_residence_type_alt'][$alt_count] != "") {

					switch($_POST['cust_residence_type_alt'][$alt_count]){
							case "home_alt":
								$message .="<b>Residence Type:</b> Home<br/>";
								$message .="<b>Floors:</b> ". $_POST['home_floor_alt'][$alt_count] ."<br/>";
								$message .="<b>Bedrooms:</b> ". $_POST['home_brs_alt'][$alt_count]."<br/>";
								if(isset($_POST['home_attic_alt'][$alt_count])) $message .="<b>Attic:</b> Y<br/>";
								if(isset($_POST['home_basement_alt'][$alt_count])) $message .="<b>Basement:</b> Y<br/>";
								if(isset($_POST['home_garage_alt'][$alt_count])) $message .="<b>Garage:</b> Y<br/>";
								if(isset($_POST['home_shed_alt'][$alt_count])) $message .="<b>Shed:</b> Y<br/>";
								break;

							case "apt_studio_alt":
								$message .="<b>Residence Type:</b> Studio Apartment<br/>";
								$message .="<b>Floors:</b> ". $_POST['apt_studio_floor_alt'][$alt_count] ."<br/>";
								if(isset($_POST['apt_studio_elevator_alt'][$alt_count])) $message .="<b>Elevator:</b> Y<br/>";
								if(isset($_POST['apt_studio_stairs_alt'][$alt_count])) $message .="<b>Stairs:</b> Y<br/>";
								break;

							case "apt_alt":
								$message .="<b>Residence Type:</b> Apartment<br/>";
								$message .="<b>Floors:</b> ". $_POST['apt_floor_alt'][$alt_count] ."<br/>";
								$message .="<b>Bedrooms:</b> ". $_POST['apt_brs_alt'][$alt_count]."<br/>";
								if(isset($_POST['apt_elevator_alt'][$alt_count])) $message .="<b>Elevator:</b> Y<br/>";
								if(isset($_POST['apt_stairs_alt'][$alt_count])) $message .="<b>Stairs:</b> Y<br/>";
								break;

							case "condo_alt":
								$message .="<b>Loading Residence Type:</b> Condominium<br />\r\n";
								$message .="<b>Floor:</b> ". $_SAFE_POST['condo_floor_alt'][$alt_count] ."<br />\r\n";
								$message .="<b>Bedrooms:</b> ". $_SAFE_POST['condo_brs_alt'][$alt_count]."<br />\r\n";
								if(isset($_SAFE_POST['condo_multilevel_alt'][$alt_count])) $message .="<b>Multi-level:</b> Y<br />\r\n";
								if(isset($_SAFE_POST['condo_elevator_alt'][$alt_count])) $message .="<b>Elevator:</b> Y<br />\r\n";
								if(isset($_SAFE_POST['condo_stairs_alt'][$alt_count])) $message .="<b>Stairs:</b> Y<br />\r\n";
								break;

							case "ths_alt":
								$message .="<b>Residence Type:</b> Townhouse<br/>";
								$message .="<b>Floor:</b> ". $_POST['ths_floor_alt'][$alt_count] ."<br/>";
								$message .="<b>Bedrooms:</b> ". $_POST['ths_brs_alt'][$alt_count]."<br/>";
								if(isset($_SAFE_POST['ths_multilevel_alt'][$alt_count])) $message .="<b>Multi-level:</b> Y<br />\r\n";
								if(isset($_POST['ths_attic_alt'][$alt_count])) $message .="<b>Attic:</b> Y<br/>";
								if(isset($_POST['ths_basement_alt'][$alt_count])) $message .="<b>Basement:</b> Y<br/>";
								if(isset($_POST['ths_garage_alt'][$alt_count])) $message .="<b>Garage:</b> Y<br/>";
								if(isset($_POST['ths_shed_alt'][$alt_count])) $message .="<b>Shed:</b> Y<br/>";
								break;

							case "office_alt":
								$message .="<b>Residence Type:</b> Office<br/>";
								$message .="<b>rooms:</b> ". $_POST['office_rooms_alt'][$alt_count] ."<br/>";
								$message .="<b>Floor:</b> ". $_POST['office_floor_alt'][$alt_count] ."<br/>";
								if(isset($_POST['office_elevator_alt'][$alt_count])) $message .="<b>Elevator:</b> Y<br/>";
								if(isset($_POST['office_stairs_alt'][$alt_count])) $message .="<b>Stairs:</b> Y<br/>";
								break;

							case "storage_alt":
								$message .="<b>Residence Type:</b> Storage Unit<br/>";
								$message .="<b>Floor:</b> ". $_POST['storage_floor_alt'][$alt_count] ."<br />\r\n";
								$message .="<b>Size:</b> ". $_POST['storage_size_alt'][$alt_count] ."<br/>";
								if(isset($_POST['storage_elevator_alt'][$alt_count])) $message .="<b>Elevator:</b> Y<br/>";
								if(isset($_POST['storage_stairs_alt'][$alt_count])) $message .="<b>Stairs:</b> Y<br/>";
								break;
					}
				}
				$message .="<br/>";
				if(isset($_POST['misc_walk_alt'][$alt_count])) $message .="<b>Long Walk</b> Y<br/>";
				if(isset($_POST['misc_insurance_alt'][$alt_count])) $message .="<b>COI</b> Y<br/>";
				if($_POST['misc_text_alt'][$alt_count] != "" && $_POST['misc_text_alt'][$alt_count] != "Other") $message .="<b>Additional information:</b> ". $_POST['misc_text_alt'][$alt_count] ."<br/>";
				$message .="<br/></span>";
				$alt_count++;
			}
		}

?>