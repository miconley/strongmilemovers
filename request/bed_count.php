<?php

	global $tempMessage, $furnCount;
	$alt_count = 0;

	foreach($_POST['cust_furniture_bed_size'] as $bed) {
		$sub_count = $alt_count + 1;
		if($_POST['cust_furniture_bed_size'][$alt_count] != "") {
			$furnCount = true;
			$tempMessage .="<b>Bed ". $sub_count . "</b><br />\r\n" ;
			$tempMessage .= "Size: ". $_POST['cust_furniture_bed_size'][$alt_count] ."<br />\r\n"; 
			if(isset($_POST['cust_furniture_bed_has_matress'][$alt_count])) $tempMessage .="<b>Matress:</b> Y<br/>\r\n";
			if(isset($_POST['cust_furniture_bed_has_boxspring'][$alt_count])) $tempMessage .="<b>Box Spring:</b> Y<br/>\r\n";				

			switch($_POST['cust_furniture_bed_frame'][$alt_count]){
				case "metal_stand_only":
					$tempMessage .= "Metal stand only - simple & folds easy";
					break;

				case "metal_stand_only_headboard":
					$tempMessage .= "Metal stand only with headboard and/or footboard";
					break;

				case "complete_with_headboard":
					$tempMessage .= "Complete frame with headboard, footboard and side rails";
					break;

				case "complete_with_drawers":
					$tempMessage .= "Complete frame with storage drawers";
					break;

				case "platform":
					$tempMessage .= "Platform bed";
					break;

				case "bunk":
					$tempMessage .= "Bunk bed";
					break;

				case "trundle":
					$tempMessage .= "Trundle";
					break;

				case "daybed":
					$tempMessage .= "Day bed";
					break;

				case "sleep_number":
					$tempMessage .= "Sleep Number";
					break;

				case "mechanical":
					$tempMessage .= "Mechanical";
					break;

				case "other":
					$tempMessage .= "Other frame: ". $_POST['cust_furniture_bed_other'][$alt_count];
			}				
			$tempMessage .="<br /><br/>";
		}
		$alt_count++;

	}

?>