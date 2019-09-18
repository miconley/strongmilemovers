
	<form id="strongmile_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="strongmile_form" method="post" autocomplete="on">

<!-- 

USER INFO

-->
	<fieldset aria-label="Basic customer information">
		<legend class="screen-reader-text">Please provide the following information about who you are, how we can contact you, and the location or locations you would like us to help you to either move into, out of, or both</legend>
      	<label for="cust_name" class="formText"><b>FULL NAME</b></label>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Name" placeholder="Name" type="text" name="cust_name" id="cust_name" maxlength="50" class="required"/>
		<label for="cust_phone" class="formText"><b>PHONE</b></label>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Phone" placeholder="Phone" type="tel" name="cust_phone" id="cust_phone" maxlength="50" class="required"/>
		<label for="cust_phone_alt" class="screen-reader-text">Alternate PHONE</label>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Alt Phone" placeholder="Alt Phone" type="tel" id="cust_phone_alt" name="cust_phone_alt" maxlength="50" />
		<label for="cust_email" class="formText"><b>EMAIL</b></label>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Email" placeholder="Email" type="email" name="cust_email" id="cust_email" maxlength="50" />
		<div class="formText"><b>LOADING</b> Address / Current Residence / Origin</div>
		<div class="furnRow wide">
			<label for="cust_addr_from" class="screen-reader-text">Address</label>
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Address" placeholder="Address" type="text" name="cust_addr_from" id="cust_addr_from" maxlength="50" class="address" />
		</div>
		<div class="furnRow wide">
			<label for="cust_city_from" class="screen-reader-text">City</label>
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="City" placeholder="City" type="text" name="cust_city_from" id="cust_city_from" maxlength="50" />
		
			<label for="cust_state_from" class="screen-reader-text">State</label>
			<select id="cust_state_from" name="cust_state_from" class="cust_state_from"> 
				<option value="">Select a State</option> 
				<option value="AL">Alabama</option> 
				<option value="AK">Alaska</option> 
				<option value="AZ">Arizona</option> 
				<option value="AR">Arkansas</option> 
				<option value="CA">California</option> 
				<option value="CO">Colorado</option> 
				<option value="CT">Connecticut</option> 
				<option value="DE">Delaware</option> 
				<option value="DC">District Of Columbia</option> 
				<option value="FL">Florida</option> 
				<option value="GA">Georgia</option> 
				<option value="HI">Hawaii</option> 
				<option value="ID">Idaho</option> 
				<option value="IL">Illinois</option> 
				<option value="IN">Indiana</option> 
				<option value="IA">Iowa</option> 
				<option value="KS">Kansas</option> 
				<option value="KY">Kentucky</option> 
				<option value="LA">Louisiana</option> 
				<option value="ME">Maine</option> 
				<option value="MD">Maryland</option> 
				<option value="MA">Massachusetts</option> 
				<option value="MI">Michigan</option> 
				<option value="MN">Minnesota</option> 
				<option value="MS">Mississippi</option> 
				<option value="MO">Missouri</option> 
				<option value="MT">Montana</option> 
				<option value="NE">Nebraska</option> 
				<option value="NV">Nevada</option> 
				<option value="NH">New Hampshire</option> 
				<option value="NJ">New Jersey</option> 
				<option value="NM">New Mexico</option> 
				<option value="NY">New York</option> 
				<option value="NC">North Carolina</option> 
				<option value="ND">North Dakota</option> 
				<option value="OH">Ohio</option> 
				<option value="OK">Oklahoma</option> 
				<option value="OR">Oregon</option> 
				<option value="PA">Pennsylvania</option> 
				<option value="RI">Rhode Island</option> 
				<option value="SC">South Carolina</option> 
				<option value="SD">South Dakota</option> 
				<option value="TN">Tennessee</option> 
				<option value="TX">Texas</option> 
				<option value="UT">Utah</option> 
				<option value="VT">Vermont</option> 
				<option value="VA">Virginia</option> 
				<option value="WA">Washington</option> 
				<option value="WV">West Virginia</option> 
				<option value="WI">Wisconsin</option> 
				<option value="WY">Wyoming</option>
			</select>
		</div>
		<div class="furnRow wide">
			<br/><label for="cust_addr_2_from" class="screen-reader-text">Unit Number</label><input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit #" placeholder="Unit #" type="text" name="cust_addr_2_from" id="cust_addr_2_from" maxlength="50" />
		</div>
<!-- 

RES TYPE From 

-->
		<label for="cust_residence_type_from" class="screen-reader-text">Residence Type / Storage Unit</label>
		<select class="cust_residence_type_from" id="cust_residence_type_from" name="cust_residence_type_from" onchange="show_element(this.name, this.selectedIndex);">
			<option value="">Select Residence Type / Storage Unit</option>
			<option value="apt_studio_from">Studio Apartment</option>
			<option value="apt_from">Apartment</option>
			<option value="condo_from">Condominium</option>
			<option value="ths_from">Townhouse / Duplex</option>
			<option value="home_from">Single Family Home</option>
			<option value="office_from">Office</option>
			<option value="storage_from">Storage Unit</option>
			<option value="other_from">Other</option>
		</select>

<!-- 

HOME From

-->

		<div class="home_from">
			<input onfocus="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="number" class="home_floor_from" name="home_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="home_brs_from" name="home_brs_from" maxlength="10" />
			<input type="checkbox" class="home_attic_from" id="home_attic_from" name="home_attic_from" value="1"><label for="home_attic_from" >Attic&nbsp;</label>
			<input type="checkbox" class="home_basement_from" id="home_basement_from" name="home_basement_from" value="1"><label for="home_basement_from" >Basement&nbsp;</label>
			<input type="checkbox" class="home_garage_from" id="home_garage_from" name="home_garage_from" value="1"><label for="home_garage_from" >Garage&nbsp;</label>
			<input type="checkbox" class="home_shed_from" id="home_shed_from" name="home_shed_from" value="1"><label for="home_shed_from">Shed&nbsp;</label>
		</div>

<!-- 

STUDIO APT From 

-->

		<div class="apt_studio_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="apt_studio_floor_from" name="apt_studio_floor_from" maxlength="10" />
			<input type="checkbox" class="apt_studio_elevator_from" id="apt_studio_elevator_from" name="apt_studio_elevator_from" value="1"><label for="apt_studio_elevator_from" >Elevator&nbsp;</label>
			<input type="checkbox" class="apt_studio_stairs_from" id="apt_studio_stairs_from" name="apt_studio_stairs_from" value="1"><label for="apt_studio_stairs_from" >Stairs</label>
		</div>

<!-- 

APT From 

-->

		<div class="apt_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="apt_floor_from" name="apt_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="apt_brs_from" name="apt_brs_from" maxlength="10" />
			<input type="checkbox" class="apt_elevator_from" id="apt_elevator_from" name="apt_elevator_from" value="1"><label for="apt_elevator_from" >Elevator&nbsp;</label>
			<input type="checkbox" class="apt_stairs_from" id="apt_stairs_from" name="apt_stairs_from" value="1"><label for="apt_stairs_from" >Stairs</label>
			<input type="checkbox" class="apt_multilevel_from" id="apt_multilevel_from" name="apt_multilevel_from" value="1"><label for="apt_multilevel_from" >Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font></label>
		</div>

<!-- 

CONDO From 

-->

		<div class="condo_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="condo_floor_from" name="condo_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="condo_brs_from" name="condo_brs_from" maxlength="10" />
			<input type="checkbox" class="condo_elevator_from" id="condo_elevator_from" name="condo_elevator_from" value="1"><label for="condo_elevator_from" >Elevator&nbsp;</label>
			<input type="checkbox" class="condo_stairs_from" id="condo_stairs_from" name="condo_stairs_from" value="1"><label for="condo_stairs_from" >Stairs</label><br/>
			<input type="checkbox" class="condo_multilevel_from" id="condo_multilevel_from" name="condo_multilevel_from" value="1"><label for="condo_multilevel_from" >Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font></label>
		</div>

<!-- 

THS From 

-->

		<div class="ths_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="number" class="ths_floor_from" name="ths_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="ths_brs_from" name="ths_brs_from" maxlength="10" />
			<input type="checkbox" class="ths_multilevel_from" id="ths_multilevel_from" name="ths_multilevel_from" value="1"><label for="ths_multilevel_from" >Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font></label><br/>
			<input type="checkbox" class="tha_attic_from" id="ths_attic_from" name="ths_attic_from" value="1"><label for="ths_attic_from" >Attic&nbsp;</label>
			<input type="checkbox" class="ths_basement_from" id="ths_basement_from" name="ths_basement_from" value="1"><label for="ths_basement_from" >Basement&nbsp;</label>
			<input type="checkbox" class="ths_garage_from" id="ths_garage_from" name="ths_garage_from" value="1"><label for="ths_garage_from" >Garage&nbsp;</label>
			<input type="checkbox" class="ths_shed_from" id="ths_shed_from" name="ths_shed_from" value="1"><label for="ths_shed_from" >Shed&nbsp;</label>
		</div>	

<!-- 

OFFICE From 

-->

		<div class="office_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of rooms?" placeholder="# of rooms?" type="number" class="office_rooms_from" name="office_rooms_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="office_floor_from" name="office_floor_from" maxlength="10" />
			<input type="checkbox" class="office_elevator_from" id="office_elevator_from" name="office_elevator_from" value="1"><label for="office_elevator_from" >Elevator&nbsp;</label>
			<input type="checkbox" class="office_stairs_from" id="office_stairs_from" name="office_stairs_from" value="1"><label for="office_stairs_from" >Stairs</label>
		</div>			

<!-- 

STORAGE From 

-->

		<div class="storage_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What Floor?" placeholder="What Floor?" type="text" class="storage_floor_from" name="storage_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit Size (ie 10x10)" placeholder="Unit Size (ie 10x10)" type="text" class="storage_size_from" name="storage_size_from" maxlength="30" />
			<input type="checkbox" class="storage_elevator_from" id="storage_elevator_from" name="storage_elevator_from" value="1"><label for="storage_elevator_from" >Elevator&nbsp;</label>
			<input type="checkbox" class="storage_stairs_from" id="storage_stairs_from" name="storage_stairs_from" value="1"><label for="storage_stairs_from" >Stairs</label>
		</div>		

<!-- 

Other From 

-->

		<div class="other_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="More Info Here" placeholder="More Info Here" type="text" class="other_text_from" name="other_text_from" />
		</div>		

		<label for="misc_text_from" class="formText nomargin"><font color="#a3a3a3">Anything else we need to know about this residence? (optional)</font></label>	
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="other_text" id="misc_text_from" name="misc_text_from" />

<!-- 

UNLOADING INFO 

-->


		<div class="formText"><b>UNLOADING</b> Address / Desintation</div>
		<div class="furnRow wide">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Address" placeholder="Address" type="text" name="cust_addr" id="cust_addr" maxlength="50" class="address" />
		</div>
		<div class="furnRow wide">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="City" placeholder="City" type="text" name="cust_city" id="cust_city" maxlength="50" />
			
			<select name="cust_state" class="cust_state"> 
				<option value="">Select a State</option> 
				<option value="AL">Alabama</option> 
				<option value="AK">Alaska</option> 
				<option value="AZ">Arizona</option> 
				<option value="AR">Arkansas</option> 
				<option value="CA">California</option> 
				<option value="CO">Colorado</option> 
				<option value="CT">Connecticut</option> 
				<option value="DE">Delaware</option> 
				<option value="DC">District Of Columbia</option> 
				<option value="FL">Florida</option> 
				<option value="GA">Georgia</option> 
				<option value="HI">Hawaii</option> 
				<option value="ID">Idaho</option> 
				<option value="IL">Illinois</option> 
				<option value="IN">Indiana</option> 
				<option value="IA">Iowa</option> 
				<option value="KS">Kansas</option> 
				<option value="KY">Kentucky</option> 
				<option value="LA">Louisiana</option> 
				<option value="ME">Maine</option> 
				<option value="MD">Maryland</option> 
				<option value="MA">Massachusetts</option> 
				<option value="MI">Michigan</option> 
				<option value="MN">Minnesota</option> 
				<option value="MS">Mississippi</option> 
				<option value="MO">Missouri</option> 
				<option value="MT">Montana</option> 
				<option value="NE">Nebraska</option> 
				<option value="NV">Nevada</option> 
				<option value="NH">New Hampshire</option> 
				<option value="NJ">New Jersey</option> 
				<option value="NM">New Mexico</option> 
				<option value="NY">New York</option> 
				<option value="NC">North Carolina</option> 
				<option value="ND">North Dakota</option> 
				<option value="OH">Ohio</option> 
				<option value="OK">Oklahoma</option> 
				<option value="OR">Oregon</option> 
				<option value="PA">Pennsylvania</option> 
				<option value="RI">Rhode Island</option> 
				<option value="SC">South Carolina</option> 
				<option value="SD">South Dakota</option> 
				<option value="TN">Tennessee</option> 
				<option value="TX">Texas</option> 
				<option value="UT">Utah</option> 
				<option value="VT">Vermont</option> 
				<option value="VA">Virginia</option> 
				<option value="WA">Washington</option> 
				<option value="WV">West Virginia</option> 
				<option value="WI">Wisconsin</option> 
				<option value="WY">Wyoming</option>
			</select>
		</div>
		<div class="furnRow wide">
				<br/><input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit #" placeholder="Unit #" type="text" name="cust_addr_2" id="cust_addr_2" maxlength="50" />
		</div>
<!-- 

RES TYPE To 

-->

		<select class="cust_residence_type" name="cust_residence_type" onchange="show_element(this.name, this.selectedIndex);">
			<option value="">Select Residence Type / Storage Unit</option>
			<option value="apt_studio">Studio Apartment</option>
			<option value="apt">Apartment</option>
			<option value="condo">Condominium</option>
			<option value="ths">Townhouse / Duplex</option>
			<option value="home">Single Family Home</option>
			<option value="office">Office</option>
			<option value="storage">Storage Unit</option>
			<option value="other_to">Other</option>
		</select>


<!-- 

HOME To

-->

		<div class="home">
			<input onfocus="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="number" class="home_floor" name="home_floor" maxlength="10" />
			<input onfocus="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="home_brs" name="home_brs" maxlength="10" />
			<input type="checkbox" class="home_attic" name="home_attic" value="1">Attic&nbsp;
			<input type="checkbox" class="home_basement" name="home_basement" value="1">Basement&nbsp;
			<input type="checkbox" class="home_garage" name="home_garage" value="1">Garage&nbsp;
			<input type="checkbox" class="home_shed" name="home_shed" value="1">Shed&nbsp;
		</div>

<!-- 

STUDIO APT To 

-->

		<div class="apt_studio">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="apt_studio_floor" name="apt_studio_floor" maxlength="10" />
			<input type="checkbox" class="apt_studio_elevator" name="apt_studio_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="apt_studio_stairs" name="apt_studio_stairs" value="1">Stairs
		</div>

<!-- 

APT To 

-->

		<div class="apt">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="apt_floor" name="apt_floor" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="apt_brs" name="apt_brs" maxlength="10" />
			<input type="checkbox" class="apt_elevator" name="apt_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="apt_stairs" name="apt_stairs" value="1">Stairs
			<input type="checkbox" class="apt_multilevel" name="apt_multilevel" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font>
		</div>

<!-- 

CONDO From 

-->

		<div class="condo">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="condo_floor" name="condo_floor" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="condo_brs" name="condo_brs" maxlength="10" />
			<input type="checkbox" class="condo_elevator" name="condo_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="condo_stairs" name="condo_stairs" value="1">Stairs<br/>
			<input type="checkbox" class="condo_multilevel" name="condo_multilevel" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font>
		</div>

<!-- 

THS To 

-->

		<div class="ths">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="number" class="ths_floor" name="ths_floor" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="ths_brs" name="ths_brs" maxlength="10" />
			<input type="checkbox" class="ths_multilevel" name="ths_multilevel" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font><br/>
			<input type="checkbox" class="tha_attic" name="ths_attic" value="1">Attic&nbsp;
			<input type="checkbox" class="ths_basement" name="ths_basement" value="1">Basement&nbsp;
			<input type="checkbox" class="ths_garage" name="ths_garage" value="1">Garage&nbsp;
			<input type="checkbox" class="ths_shed" name="ths_shed" value="1">Shed&nbsp;
		</div>	

<!-- 

OFFICE To 

-->

		<div class="office">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of rooms?" placeholder="# of rooms?" type="number" class="office_rooms" name="office_rooms" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="office_floor" name="office_floor" maxlength="10" />
			<input type="checkbox" class="office_elevator" name="office_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="office_stairs" name="office_stairs" value="1">Stairs
		</div>			

<!-- 

STORAGE To 

-->

		<div class="storage">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What Floor?" placeholder="What Floor?" type="text" class="storage_floor" name="storage_floor" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit Size (ie 10x10)" placeholder="Unit Size (ie 10x10)" type="text" class="storage_size" name="storage_size" maxlength="30" />
			<input type="checkbox" class="storage_elevator" name="storage_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="storage_stairs" name="storage_stairs" value="1">Stairs
		</div>		

		<br/>

<!-- 

Other To 

-->

		<div class="other_to">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="More Info Here" placeholder="More Info Here" type="text" class="other_text_to" name="other_text_to" />
		</div>	

		<div class="formText nomargin"><font color="#a3a3a3">Anything else we need to know about this residence? (optional)</font></div>	
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="other_text" name="misc_text_to" />

<!-- 

ALTERNATE ADDRESSES 

-->	


 		<div class="formText"><b>ADDITIONAL ADDRESSES</b> associated with your move</div>
		<div class="alt_addresses"></div>
		<div class="add_address">Click here to add an additional address</div>
		<!--<textarea class="cust_addr_other" name="cust_addr_other" wrap="soft"></textarea>
		<br/> -->
	</fieldset>

<!-- 

DATE SERVICE  

-->
	<fieldset aria-label="Service Specifics">
		<legend class="screen-reader-text">Please provide the following information when you would like us to help you move, how you found out about us, and what kind of help you require</legend>
		<div class="halfcont">
			<div class="formText">Preferred date of service:</div>
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Please select" placeholder="Please select" type="text" id="date_of_service" name="date_of_service" />
		</div>

<!-- 

START TIME 

-->
		<div class="halfcont">
			<div class="formText">Preferred <b>START TIME</b> of service:</div>
			<select class="time_of_service" name="time_of_service" >
				<option value="">Please select</option>
				<option value="morning">Morning 8-9</option>
				<option value="afternoon">Afternoon 1-3</option>
			</select><br/>
		</div>

<!-- 

ALTERNATE DATE SERVICE

-->
		<div class="halfcont">
			<div class="formText">Alternate date of service:</div>
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Please select" placeholder="Please select" type="text" id="date_of_service_alt" name="date_of_service_alt" />
		</div>

<!-- SHIM -->
		<div class="halfcont">
		</div>


<!-- 

REFERRAL

-->
		<label for="cust_referral" class="formText">How did you find us?</label>
		<select class="cust_referral" id="cust_referral" name="cust_referral" onchange="show_element(this.name, this.selectedIndex);">
			<option value="">Please Select</option>
			<option value="yelp">Yelp!</option>
			<option value="angieslist">Angie's List</option>
			<option value="facebook">Facebook Group</option>
			<option value="previouscustomer">I'm a Previous Customer</option>
			<option value="referredby">Referred by a Previous Customer</option>
			<option value="ff">Friend/Family</option>
			<option value="iknowjoe">"I Know Joe!"</option>
			<option value="sm">Strongmile Employee</option>
			<option value="bc">Business Card</option>
			<option value="uhaul">U-Haul Dealer</option>
			<option value="mcoc">Metuchen Chamber of Commerce</option>
			<option value="mda">Metuchen Downtown Alliance</option>
			<option value="mm">Metuchen Mirror</option>
			<option value="mll">Metuchen Little League</option>
			<option value="mccn">Metuchen Classic Car Night</option>
			<option value="ecoc">Edison Chamber of Commerce</option>
			<option value="other">Other</option>
		</select>	
		<div class="referral">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="referral_val" name="referral_val" maxlength="255" />
		</div>		

<!-- 

HELP TYPE

-->
		<fieldset>
			<legend class="formText"><b>What are you looking for help with?</b></legend>
			<div class="help_checkbox wide">
				<label for="help_loading_all"><input type="checkbox" class="help_cb" id="help_loading_all" name="help_loading_all" value="1">Full Transport Move
				<span class="help_desc"> - Load truck, transport & unload truck</span></label>
			</div>		
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_loading" name="help_loading" value="1"><label for="help_loading">Load Only
				<span class="help_desc"> - Truck, POD, trailer or similar</span></label>
			</div>
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_unloading" name="help_unloading" value="1"><label for="help_unloading">Unload Only
				<span class="help_desc"> - Truck, POD, trailer or similar</span></label>
			</div>		
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_inhome" name="help_inhome" value="1"><label for="help_inhome">In-Home Assistance
				<span class="help_desc"> - Relocating furniture on-site, room to room</span></label>
			</div>	
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_inapt" name="help_inapt" value="1"><label for="help_inapt">In-Building
				<span class="help_desc"> - Apt, condo or office moves floor to floor or on the same level</span></label>
			</div>
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_incomplex" name="help_incomplex" value="1"><label for="help_incomplex">In-Complex
				<span class="help_desc"> - Building to building moves less than 200 ft. not requiring a truck</span></label>
			</div>
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_disassembly" name="help_disassembly" value="1"><label for="help_disassembly">Disassembly and reassembly of furniture</label>
			</div>
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_assembly" name="help_assembly" value="1"><label for="help_assembly">Brand new, out-of-the box initial furniture assembly</label>
			</div>
			<div class="help_checkbox wide"></div>
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_packing" name="help_packing" value="1"><label for="help_packing">Box packing COMPLETE
				<span class="help_desc"> - Box packing of ALL loose items</span></label>
			</div>
			<div class="help_checkbox wide">
				<input type="checkbox" class="help_cb" id="help_packing_partial" name="help_packing_partial" value="1"><label for="help_packing">Box packing PARTIAL
				<span class="help_desc"> - Box packing of SOME loose items</span></label>
			</div>
		</fieldset>
		<div class="help_checkbox wide"></div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Specify other help needed not listed above" placeholder="Specify other help needed not listed above" type="text" class="other_text" name="other_text" id="other_text" maxlength="30" />
		<label class="formText nomargin" for="other_text"><font color="#a3a3a3">Only brief service topic here.  Further explanation allowed at bottom of this form.</font></label>
	</fieldset>
<!--

TYPES & QUANTITIES OF POSSESSIONS

-->		
<fieldset>
	<legend class="formText largeText"><b>FURNITURE INVENTORY</b></legend>


	<div class="formText"><b>NUMERICAL QUANTITY ONLY</b><br/>Leave <b>BLANK</b> if you have none</div>

<!-- 

MISCELLANEOUS

-->	<fieldset>
		<legend class="formText"><b>Miscellaneous Totals</b></legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_tvs" name="cust_furniture_misc_tvs" maxlength="5" /></div><label for="cust_furniture_misc_tvs" class="furnText">TV's</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_shelves" name="cust_furniture_misc_shelves" maxlength="5" /></div><label for="cust_furniture_misc_shelves" class="furnText">Book Shelves</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_floorlamps" name="cust_furniture_misc_floorlamps" maxlength="5" /></div><label for="cust_furniture_misc_floorlamps" class="furnText">Floor Lamps</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_tablelamps" name="cust_furniture_misc_tablelamps" maxlength="5" /></div><label for="cust_furniture_misc_tablelamps" class="furnText">Table Lamps</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_pictures" name="cust_furniture_misc_pictures" maxlength="5" /></div><label for="cust_furniture_misc_pictures" class="furnText">Framed Pictures</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_paintings" name="cust_furniture_misc_paintings" maxlength="5" /></div><label for="cust_furniture_misc_paintings" class="furnText">Paintings</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_misc_rugs" name="cust_furniture_misc_rugs" maxlength="5" /></div><label for="cust_furniture_misc_rugs" class="furnText">Rugs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_mirror" name="cust_furniture_mirror" maxlength="5" /></div><label for="cust_furniture_mirror" class="furnText">Mirrors</label></div>
	</fieldset>

<!--

LIVING ROOM

-->
	<fieldset>
		<legend class="formText"><b>Living / Family Room / Den</b><legend>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input type="number" id="cust_furniture_2seatcouch" name="cust_furniture_2seatcouch" maxlength="5" /></div><label for="cust_furniture_2seatcouch" class="furnText">2 seat couches - Total</label></div>
			<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_2seatcouch_sleeper" name="cust_furniture_2seatcouch_sleeper" maxlength="5" /></div><label for="cust_furniture_2seatcouch_sleeper" class="furnText"># Sleeper</label></div>
			<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_2seatcouch_recliner" name="cust_furniture_2seatcouch_recliner" maxlength="5" /></div><label for="cust_furniture_2seatcouch_recliner" class="furnText"># Reclining</label></div>
		</div>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input type="number" id="cust_furniture_3seatcouch" name="cust_furniture_3seatcouch" maxlength="5" /></div><label for="cust_furniture_3seatcouch" class="furnText">3 seat couches - Total</label></div>
			<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_3seatcouch_sleeper" name="cust_furniture_3seatcouch_sleeper" maxlength="5" /></div><label for="cust_furniture_3seatcouch_sleeper" class="furnText"># Sleeper</label></div>
			<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_3seatcouch_recliner" maxlengthname="cust_furniture_3seatcouch_recliner" maxlength="5" /></div><label for="cust_furniture_3seatcouch_recliner" maxlengthclass="furnText"># Reclining</label></div>
		</div>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input type="number" id="cust_furniture_secsofa" name="cust_furniture_secsofa" maxlength="5" /></div><label for="cust_furniture_secsofa" class="furnText">Sectional Sofa - Total</label></div>
			<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_secsofa_sleeper" name="cust_furniture_secsofa_sleeper" maxlength="5" /></div><label for="cust_furniture_secsofa_sleeper" class="furnText"># Sleeper</label></div>
			<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_secsofa_recliner" name="cust_furniture_secsofa_recliner" maxlength="5" /></div><label for="cust_furniture_secsofa_recliner" class="furnText"># Reclining</label></div>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_recliner" name="cust_furniture_recliner" maxlength="5" /></div><label for="cust_furniture_recliner" class="furnText">Recliners - Single seat</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_simplechair" name="cust_furniture_simplechair" maxlength="5" /></div><label for="cust_furniture_simplechair" class="furnText">Arm Chairs - Single seat</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_rockingchair" name="cust_furniture_rockingchair" maxlength="5" /></div><label for="cust_furniture_rockingchair" class="furnText">Rocking chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_ottoman" name="cust_furniture_ottoman" maxlength="5" /></div><label for="cust_furniture_ottoman" class="furnText">Ottoman</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_futon" name="cust_furniture_futon" maxlength="5" /></div><label for="cust_furniture_futon" class="furnText">Futon</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_coffeetable" name="cust_furniture_coffeetable" maxlength="5" /></div><label for="cust_furniture_coffeetable" class="furnText">Coffee Table</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_endtable" name="cust_furniture_endtable" maxlength="5" /></div><label for="cust_furniture_endtable" class="furnText">End Table</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_tvstand" name="cust_furniture_tvstand" maxlength="5" /></div><label for="cust_furniture_tvstand" class="furnText">Tv Stand</label></div>
		<div class="furnRow wide"><div class="furnInput"><input id="entertainment_center" type="number" name="cust_furniture_entertainment_center" maxlength="5" /></div><label for="entertainment_center" class="furnText">Entertainment center - Large unit for electronics</label></div>
		<div class="furnRow" id="entertainment_center_dimensions"><div class="furnInput_nocheck"><input type="text" id="cust_furniture_entertainment_dimensions" name="cust_furniture_entertainment_dimensions" maxlength="10" /></div><label for="cust_furniture_entertainment_dimensions" class="furnText">Dimensions</label></div>
		<label for="cust_furniture_livingroom_other" class="formText wide nomargin">Other living room items:</label>
		<input type="text" class="other_text" name="cust_furniture_livingroom_other" id="cust_furniture_livingroom_other"/>
	</fieldset>
<!-- 

KITCHEN

-->
	<fieldset>
		<legend class="formText"><b>Kitchen</b><legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kitchentable" name="cust_furniture_kitchentable" maxlength="5" /></div><label for="cust_furniture_kitchentable" class="furnText">Tables</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kitchenchairs" name="cust_furniture_kitchenchairs" maxlength="5" /></div><label for="cust_furniture_kitchenchairs" class="furnText">Chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_microwave" name="cust_furniture_microwave" maxlength="5" /></div><label for="cust_furniture_microwave" class="furnText">Microwave</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_winerack" name="cust_furniture_winerack" maxlength="5" /></div><label for="cust_furniture_winerack" class="furnText">Wine Rack</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_bakerrack" name="cust_furniture_bakerrack" maxlength="5" /></div><label for="cust_furniture_bakerrack" class="furnText">Baker's Rack</label></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_bars" name="cust_furniture_bars" maxlength="5" /></div><label for="cust_furniture_bars" class="furnText">Bars</label></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_stools" name="cust_furniture_stools" maxlength="5" /></div><label for="cust_furniture_stools" class="furnText">Stools</label></div>
		<label for="cust_furniture_kitchen_other" class="formText wide nomargin">Other kitchen items:</label>
		<input type="text" class="other_text" name="cust_furniture_kitchen_other" id="cust_furniture_kitchen_other" />
	</fieldset>	
<!--

APPLIANCES

-->
	<fieldset>
		<legend class="formText"><b>Appliances</b></legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_refrigerator" name="cust_furniture_refrigerator" maxlength="5" /></div><label for="cust_furniture_refrigerator" class="furnText">Refrigerator</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_freezer" name="cust_furniture_freezer" maxlength="5" /></div><label for="cust_furniture_freezer" class="furnText">Freezer</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_stove" name="cust_furniture_stove" maxlength="5" /></div><label for="cust_furniture_stove" class="furnText">Stove</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_dishwasher" name="cust_furniture_dishwasher" maxlength="5" /></div><label for="cust_furniture_dishwasher" class="furnText">Dishwasher</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_washer" name="cust_furniture_washer" maxlength="5" /></div><label for="cust_furniture_washer" class="furnText">Washer</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_dryer" name="cust_furniture_dryer" maxlength="5" /></div><label for="cust_furniture_dryer" class="furnText">Dryer</label></div>
		<label for="cust_furniture_appliance_other" class="formText wide nomargin">Other Appliance items:</label>
		<input type="text" class="other_text" id="cust_furniture_appliance_other" name="cust_furniture_appliance_other" />
	</fieldset>
<!-- 

DINING

-->
	<fieldset>
		<legend class="formText"><b>Dining room</b><legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_diningtable" name="cust_furniture_diningtable" maxlength="5" /></div><label for="cust_furniture_diningtable" class="furnText">Tables</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_diningchairs" name="cust_furniture_diningchairs" maxlength="5" /></div><label for="cust_furniture_diningchairs" class="furnText">Chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_chinacabinet" name="cust_furniture_chinacabinet" maxlength="5" /></div><label for="cust_furniture_chinacabinet" class="furnText">China Cabinet</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_curiocabinet" name="cust_furniture_curiocabinet" maxlength="5" /></div><label for="cust_furniture_curiocabinet" class="furnText">Curio Cabinet</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_buffettable" name="cust_furniture_buffettable" maxlength="5" /></div><label for="cust_furniture_buffettable" class="furnText">Buffet Table</label></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_breakfront" name="cust_furniture_breakfront" maxlength="5" /></div><label for="cust_furniture_breakfront" class="furnText">Breakfront</label></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_hutch" name="cust_furniture_hutch" maxlength="5" /></div><label for="cust_furniture_hutch" class="furnText">Hutch</label></div>
		<label for="cust_furniture_dining_other" class="formText wide nomargin">Other dining items:</label>
		<input type="text" class="other_text" name="cust_furniture_dining_other" id="cust_furniture_dining_other" />
	</fieldset>
<!-- 

OFFICE 

-->
	<fieldset>
		<legend class="formText"><b>Office furniture</b><legend>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input id="cust_furniture_desk" type="number" name="cust_furniture_desk" maxlength="5" /></div><label for="cust_furniture_desk" class="furnText">Desks</label></div>
			<div class="furnRow wide" id="fordesks">
				<fieldset>
					<legend class="screen-reader-text">More information about your desks</legend>
				<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_desk_simple" name="cust_furniture_desk_simple" maxlength="5" /></div><label for="cust_furniture_desk_simple" class="furnText"># Simple rectangular</label></div>
				<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_desk_lshape" name="cust_furniture_desk_lshape" maxlength="5" /></div><label for="cust_furniture_desk_lshape" class="furnText"># L-Shape</label></div>
				<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_desk_hutch" name="cust_furniture_desk_hutch" maxlength="5" /></div><label for="cust_furniture_desk_hutch" class="furnText"># Hutch top (Shelf backing)</label></div>
				<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_desk_cubicle" name="cust_furniture_desk_cubicle" maxlength="5" /></div><label for="cust_furniture_desk_cubicle" class="furnText"># Cubicle</label></div>
				<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_desk_antique" name="cust_furniture_desk_antique" maxlength="5" /></div><label for="cust_furniture_desk_antique" class="furnText"># Antique</label></div>
				<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_desk_rolltop" name="cust_furniture_desk_rolltop" maxlength="5" /></div><label for="cust_furniture_desk_rolltop" class="furnText"># Roll Top</label></div>
				</fieldset>
			</div>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_office_chair" name="cust_furniture_office_chair" maxlength="5" /></div><label for="cust_furniture_office_chair" class="furnText">Office Chairs</label></div>	
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_filecabinet" name="cust_furniture_filecabinet" maxlength="5" /></div><label for="cust_furniture_filecabinet" class="furnText">File Cabinets</label></div>	
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_cpu_towers" name="cust_furniture_cpu_towers" maxlength="20" /></div><label for="cust_furniture_cpu_towers" class="furnText">CPU Towers</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_monitors" name="cust_furniture_monitors" maxlength="20" /></div><label for="cust_furniture_monitors" class="furnText">Monitors</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_copiers" name="cust_furniture_copiers" maxlength="20" /></div><label for="cust_furniture_copiers" class="furnText">Copiers</label ></div>
		<label for="cust_furniture_office_other" class="furnRow wide"><div class="formText wide nomargin">Other office items:</label>
		<input type="text" class="other_text" id="cust_furniture_office_other" name="cust_furniture_office_other" /></div>
	</fieldset>
<!--

BEDROOMS

-->
	<fieldset>
		<div class="formText"><b>Bedrooms</b><div>
		<?php include('beds.php'); ?>
		<div class="furnRow">
			<div class="formText">Additional beds with more info</div>
		</div>
  		<div class="furnRow">
			<input type="text" name="cust_furniture_bathroom_other" />
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_nightstand"name="cust_furniture_nightstand" maxlength="5" /></div><label for="cust_furniture_nightstand"class="furnText">Night Stand</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_dresser" name="cust_furniture_dresser" maxlength="5" /></div><label for="cust_furniture_dresser" class="furnText top-align">Standard Dresser <font color="#a3a3a3">(Waist high,<br/>Lower and longer dressers)</font></label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_chestofdrawers" name="cust_furniture_chestofdrawers" maxlength="5" /></div><label for="cust_furniture_chestofdrawers" class="furnText top-align">Chest Of Drawers <font color="#a3a3a3">(Chest high,<br/>Narrower and taller dressers)</font></label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_trunk" name="cust_furniture_trunk" maxlength="5" /></div><label for="cust_furniture_trunk" class="furnText">Trunks</label></div>
		<div class="furnRow wide"><div class="furnInput"><input type="number" id="cust_furniture_bedroom_chair" ="cust_furniture_bedroom_chair" maxlength="5" /></div><label for="cust_furniture_bedroom_chair" class="furnText">Chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_armoire" maxlength="5" /></div><label class="furnText">Armoire </label><div class="furnInput_nocheck"><input type="text" id="cust_furniture_armoire_dimensions" name="cust_furniture_armoire_dimensions" /></div><label for="cust_furniture_armoire_dimensions" class="furnText">Dimensions</label></div>
		<div class="furnRow"><input type="checkbox" class="help_cb" id="cust_furniture_armoire_assembled" name="cust_furniture_armoire_assembled" value="1"><label for="cust_furniture_armoire_assembled">Assembed in room?</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_wardrobe" maxlength="5" /></div><label class="furnText top-align">Wardrobe<br/>Closet</label><div class="furnInput_nocheck"><input type="text" id="cust_furniture_armoire_dimensions" name="cust_furniture_armoire_dimensions" name="cust_furniture_armoire_dimensions" /></div><label for="cust_furniture_armoire_dimensions" class="furnText">Dimensions</label></div>
		<div class="furnRow"><input type="checkbox" class="help_cb" id="cust_furniture_wardrobe_assembled" name="cust_furniture_wardrobe_assembled" value="1"><label for="cust_furniture_wardrobe_assembled">Assembed in room?</label></div>

		<div class="furnRow wide"><label for="cust_furniture_bedroom_other" class="formText nomargin">Other Bedroom Items</label>
		<input type="text" class="other_text" name="cust_furniture_bedroom_other" id="cust_furniture_bedroom_other"/></div>
	</fieldset>
<!--

APPLIANCES

-->
	<fieldset>
		<legend class="formText"><b>Kids / Baby</b></legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_beds" name="cust_furniture_kids_beds" maxlength="5" /></div><label for="cust_furniture_kids_beds" class="furnText">Beds</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_cribs" name="cust_furniture_kids_cribs" maxlength="5" /></div><label for="cust_furniture_kids_cribs" class="furnText">Cribs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_dressers" name="cust_furniture_kids_dressers" maxlength="5" /></div><label for="cust_furniture_kids_dressers" class="furnText">Dressers</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_tables" name="cust_furniture_kids_tables" maxlength="5" /></div><label for="cust_furniture_kids_tables" class="furnText">Tables</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_chairs" name="cust_furniture_kids_chairs" maxlength="5" /></div><label for="cust_furniture_kids_chairs" class="furnText">Chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_toytrunks" name="cust_furniture_kids_toytrunks" maxlength="5" /></div><label for="cust_furniture_kids_toytrunks" class="furnText">Toy Trunks</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_largetoys" name="cust_furniture_kids_largetoys" maxlength="5" /></div><label for="cust_furniture_kids_largetoys" class="furnText">Large Toys</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_glidershairs" name="cust_furniture_kids_glidershairs" maxlength="5" /></div><label for="cust_furniture_kids_glidershairs" class="furnText">Glider Chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_kids_changingtables" name="cust_furniture_kids_changingtables" maxlength="5" /></div><label for="cust_furniture_kids_changingtables" class="furnText">Changing Tables</label></div>
		<label for="cust_furniture_kids_other" class="formText wide nomargin">Other kid Items:</label>
		<input type="text" class="other_text" id="cust_furniture_kids_other" name="cust_furniture_kids_other" />
	</fieldset>
<!--

BATHROOMS

-->
	<fieldset>
		<legend class="formText"><b>Bathrooms</b></legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_bathroom_cabinets" name="cust_furniture_bathroom_cabinets" maxlength="5" /></div><label for="cust_furniture_bathroom_cabinets" class="furnText">Cabinets</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_bathroom_mirrors" name="cust_furniture_bathroom_mirrors" maxlength="5" /></div><label for="cust_furniture_bathroom_mirrors" class="furnText">Mirrors</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_bathroom_shelves" name="cust_furniture_bathroom_shelves" maxlength="5" /></div><label for="cust_furniture_bathroom_shelves" class="furnText">Shelves</label></div>
		<legend for="cust_furniture_bathroom_other" class="formText nomargin">Other Bathroom Items</legend>
		<input type="text" class="other_text" id="cust_furniture_bathroom_other" name="cust_furniture_bathroom_other" />
	</fieldset>

<!--

GYM & EXCERCISE

-->
<fieldset>
		<legend class="formText"><b>Exercise Equipment</b></legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_treadmill" name="cust_furniture_treadmill" maxlength="5" /></div><label for="cust_furniture_treadmill" class="furnText">Treadmill</label><input type="checkbox" class="help_cb" id="cust_furniture_armoire_assembled" name="cust_furniture_treadmill_assembled" value="1"><label for="cust_furniture_treadmill_assembled">Assembed in room?</label>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_elliptical" name="cust_furniture_elliptical" maxlength="5" /></div><label for="cust_furniture_elliptical" class="furnText">Elliptical</label><input type="checkbox" class="help_cb" id="cust_furniture_armoire_assembled" name="cust_furniture_elliptical_assembled" value="1"><label for="cust_furniture_elliptical_assembled">Assembed in room?</label>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_stationarybike" name="cust_furniture_stationarybike" maxlength="5" /></div><label for="cust_furniture_stationarybike" class="furnText">Stationary Bike</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_weightbenches" name="cust_furniture_weightbenches" maxlength="5" /></div><label for="cust_furniture_weightbenches" class="furnText">Weight Benches</label></div>
		<label for="cust_furniture_excercise_other" class="formText nomargin">Other Exercise Equipment</label>
		<input type="text" class="other_text" id="cust_furniture_excercise_other" name="cust_furniture_excercise_other" />
</fieldset>
<!--

OUTDOOR / GARAGE 

-->
<fieldset>
		<legend class="formText"><b>Outdoor/Garage/Shed</b></legend>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_bike" name="cust_furniture_bike" maxlength="5" /></div><label for="cust_furniture_bike" class="furnText">Bikes</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_ladder" name="cust_furniture_ladder" maxlength="5" /></div><label for="cust_furniture_ladder" class="furnText">Ladders</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_lawnmower" name="cust_furniture_lawnmower" maxlength="5" /></div><label class="furnText">Lawn Mower</label>
		<input type="checkbox" id="cust_furniture_lawnmower_push" name="cust_furniture_lawnmower_push" value="1"><label for="cust_furniture_lawnmower_push">Push</label>
			<input type="checkbox" id="cust_furniture_lawnmower_riding" name="cust_furniture_lawnmower_riding" value="1"><label for="cust_furniture_lawnmower_riding">Riding</label>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_snowblower" name="cust_furniture_snowblower" maxlength="5" /></div><label for="cust_furniture_snowblower" class="furnText">Snow Blower</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_generator" name="cust_furniture_outdoor_generator" maxlength="5" /></div><label for="cust_furniture_outdoor_generator" class="furnText">Generators</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_boats" name="cust_furniture_outdoor_boats" maxlength="5" /></div><label for="cust_furniture_outdoor_boats" class="furnText">Boats / Canoes / Kayaks</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_shelves" name="cust_furniture_outdoor_shelves" maxlength="5" /></div><label for="cust_furniture_outdoor_shelves" class="furnText">Shelves</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_tables" name="cust_furniture_outdoor_tables" maxlength="5" /></div><label for="cust_furniture_outdoor_tables" class="furnText">Tables</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_chairs" name="cust_furniture_outdoor_chairs" maxlength="5" /></div><label for="cust_furniture_outdoor_chairs" class="furnText">Chairs</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_umbrellas" name="cust_furniture_outdoor_umbrellas" maxlength="5" /></div><label for="cust_furniture_outdoor_umbrellas" class="furnText">Umbrellas</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_outdoor_grill" name="cust_furniture_outdoor_grill" maxlength="5" /></div><label for="cust_furniture_outdoor_grill" class="furnText">Grill</label></div>
		<label for="cust_furniture_outside_other" class="formText wide nomargin">Other Outdoor Items</label>
		<input type="text" class="other_text" id="cust_furniture_outside_other" name="cust_furniture_outside_other" />
</fieldset>

<!--

Attic Misc

-->
		<label for="cust_furniture_attic_misc" class="formText"><b>Attic Miscellaneous</b></label>
		<input type="text" class="other_text" id="cust_furniture_attic_misc" name="cust_furniture_attic_misc" />

<!--

Basement Misc

-->


		<label for="cust_furniture_basement_misc" class="formText"><b>Basement Miscellaneous</b></label>
		<input type="text" class="other_text" id="cust_furniture_basement_misc" name="cust_furniture_basement_misc" />

<!--

Specialy Items

-->
<fieldset>
		<legend class="formText"><b>Specialty Items</b> - Additional Fees may apply</legend>

		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_pianos" name="specialty_pianos" value="1"/><label for="specialty_pianos">Pianos</label>
			<label for="specialty_pianos_more" class="specialty_desc">More Info <span class="screen-reader-text">about your pianos</span>: <input type="text" id="specialty_pianos_more" name="specialty_pianos_more" /></label>
		</div>		
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_safes" name="specialty_safes" value="1"/><label for="specialty_safes">Safes</label>
			<label for="specialty_safes_more" class="specialty_desc">More Info <span class="screen-reader-text">about your safes</span>: <input type="text" id="specialty_safes_more" id="specialty_safes_more" name="specialty_safes_more" /></label>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_gyms" name="specialty_gyms" value="1"/><label for="specialty_gyms">Full Gyms</label>
			<label for="specialty_gyms_more" class="specialty_desc">More Info <span class="screen-reader-text">about your gyms</span>: <input type="text" id="specialty_gyms_more"name="specialty_gyms_more" /></label>
		</div>		
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_hospitalbeds" name="specialty_hospitalbeds" value="1"/><label for="specialty_hospitalbeds">Hospital Beds</label>
			<label for="specialty_hospitalbeds_more" class="specialty_desc">More Info <span class="screen-reader-text">about your hospital beds</span>: <input type="text" id="specialty_hospitalbeds_more" name="specialty_hospitalbeds_more" /></label>
		</div>	
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_toolboxes" name="specialty_toolboxes" value="1"/><label for="specialty_toolboxes">Heavy Toolboxes</label>
			<label for="specialty_toolboxes_more" class="specialty_desc">More Info <span class="screen-reader-text">about your toolboxes</span>: <input type="text" id="specialty_toolboxes_more" name="specialty_toolboxes_more" /></label>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_machinery" name="specialty_machinery" value="1"/><label for="specialty_machinery">Large Machinery</label>
			<label for="specialty_machinery_more" class="specialty_desc">More Info <span class="screen-reader-text">about your machinery</span>: <input type="text" id="specialty_machinery_more" name="specialty_machinery_more" /></label>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_worktables" name="specialty_worktables" value="1"/><label for="specialty_worktables">Work Tables</label>
			<label for="specialty_worktables_more" class="specialty_desc">More Info <span class="screen-reader-text">about your work tables</span>: <input type="text" id="specialty_worktables_more" name="specialty_worktables_more" /></label>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_trampolines" name="specialty_trampolines" value="1"/><label for="specialty_trampolines">Trampolines</label>
			<label for="specialty_trampolines_more" class="specialty_desc">More Info <span class="screen-reader-text">about your trampolines</span>: <input type="text" id="specialty_trampolines_more" name="specialty_trampolines_more" /></label>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_pooltables" name="specialty_pooltables" value="1"/><label for="specialty_pooltables">Pool Tables</label>
			<label for="specialty_pooltables_more" class="specialty_desc">More Info <span class="screen-reader-text">about your pool tables</span>: <input type="text" id="specialty_pooltables_more" name="specialty_pooltables_more" /></label>
		</div>
	</fieldset>
</fieldset>

<fieldset aria-label="Box count and other information">
		<legend class="screen-reader-text">Please provide an estimate of how many boxes you think you'll have any other information not captured in the form above</legend>
		<div class="formText">
			<div class="formText largeText"><b>BOXES</b></div>
			<br/>How to pack boxes<br/>
			<div class="howtopack_content">
			<ul>
			<li><b>Small (16 x 12 x 12)</b><br/>
				Books, magazines, glassware (heavier, smaller items)</li>
			<li><b>Medium (18 x 18 x 18)</b><br/>
				Shoes, clothing & similar</li>
			<li><b>Large (24 x 18 x 18+)</b><br/>
				DO NOT USE THESE UNLESS ABSOLUTELY NECESSARY!<br />These are meant for larger, less dense items like cookie sheets, board games, lampshades, pillows, comforters</li>
			</ul>
			</div>

			Typical box counts<br/>
			<div class="boxcounts_content">
			<ul>
				<li><b>1 BR:</b> 20-40<br/></li>
				<li><b>2 BR:</b> 40-70</li>
				<li><b>3 BR:</b> 70-100</li>
				<li><b>4 BR+:</b> 100-150+</li>
			</ul>
			</div>
		</div>
<!--

Box Totals

-->
		<div class="furnRow wide"><div class="furnInput"><input type="number" name="cust_furniture_boxtubs" id="cust_furniture_boxtubs" maxlength="5"/></div><label for="cust_furniture_boxtubs">ESTIMATED TOTAL BOX COUNT  <br/> This may be difficult to know precisely.   Try to OVERESTIMATE your box count.</label></div><br/><Br/>

<!--

FURNITURE MOVE ONLY

-->
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="furn_move_only" name="furn_move_only" value="1"><label for="furn_move_only">NO BOXES - FURNITURE MOVE ONLY - Customer moving all boxes personally</label>
		</div>
<!--

GLASS

-->

		<label for="cust_furniture_glass" class="formText">List any inventory from above that has GLASS (Examples: Tops, shelves, doors etc.)</label>
		<input type="text" class="cust_furniture_glass" id="cust_furniture_glass" name="cust_furniture_glass" />

<!--

PRESS BOARD

-->
		<label for="cust_furniture_ikea" class="formText">List any inventory from above that is presswood, pressboard, IKEA-style furniture that is not made of solid wood</label>
		<input type="text" class="cust_furniture_glass" id="cust_furniture_ikea" name="cust_furniture_ikea" />

<!--

IMPORTANT

-->
		<label for="cust_importantinfo" class="formText">Any additional information regarding your move?<br/>
PLEASE DO NOT LIST INVENTORY HERE.  FILL OUT FORM ABOVE AS DESIGNED.</label>
		<textarea class="cust_importantinfo" id="cust_importantinfo" name="cust_importantinfo" wrap="soft"></textarea>

	</fieldset>
<!--


HUMAN CHECK

-->
		<div class="captcha"><label for="itshuman">Please check the box below<br/>(this helps us prevent spammers):</label>
			<div id="captchaDiv"></div>
		</div>
		<div class="submitContainer">
			<button class="submit" onclick="fSubmit();">SUBMIT</button>
		</div>

	</form>
	<script type="text/javascript" src="js/functions.js"></script>
</div>