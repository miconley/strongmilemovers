	<div id="header">
		<div id="byline" class="top">
			Professional Moving With A Modern Twist
		</div>
		<div class="headerhome"><a href="http://www.strongmilemovers.com" target="_self"><img src="../images/spacer.gif" width="100%" height="100%" border="0"/></a></div>

		<div id="byline" class="bottom">
			PLEASE FILL IN AS MUCH INFORMATION AS POSSIBLE TO RECEIVE AN ACCURATE QUOTE:
		</div>
	</div>
	<div id="headerMobile">
		<img src="../images/header_mobile.jpg" />
		Professional Moving<br />With A Modern Twist<br/>
		732-754-3626<br/><br/>
		PLEASE FILL IN AS MUCH INFORMATION AS POSSIBLE TO RECEIVE AN ACCURATE QUOTE:
	</div>
	<form id="strongmile_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="strongmile_form" method="post">

<!-- 

USER INFO

-->

		<div id="user">
			<label for="username">Username</label>
      		<input type="text" name="username">
      	</div>
      	<div class="formText">Full Name</div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Name" placeholder="Name" type="text" name="cust_name" id="cust_name" maxlength="50" class="required"/>
		<div class="formText">Contact</div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Email" placeholder="Email" type="text" name="cust_email" id="cust_email" maxlength="50" />		
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Phone" placeholder="Phone" type="text" name="cust_phone" id="cust_phone" maxlength="50" class="required" style="width: 200px"/>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Ext." placeholder="Ext." type="text" name="cust_ext" id="cust_ext" maxlength="50" style="width: 70px" />
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Alt Phone" placeholder="Alt Phone" type="text" id="cust_phone_alt" name="cust_phone_alt" maxlength="50" />
		<div class="formText"><b>LOADING</b> Address:</div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Address" placeholder="Address" type="text" name="cust_addr_from" id="cust_addr_from" maxlength="50" />
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit #" placeholder="Unit #" type="text" name="cust_addr_2_from" id="cust_addr_2_from" maxlength="50" />
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="City" placeholder="City" type="text" name="cust_city_from" id="cust_city_from" maxlength="50" />
		<select name="cust_state_from" class="cust_state_from"> 
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

<!-- 

RES TYPE From 

-->

		<select class="cust_residence_type_from" name="cust_residence_type_from" onchange="show_element(this.name, this.selectedIndex);">
			<option value="">Select Residence Type / Storage Unit</option>
			<option value="">----------------</option>
			<option value="apt_studio_from">Studio Apartment</option>
			<option value="apt_from">Apartment</option>
			<option value="condo_from">Condominium</option>
			<option value="ths_from">Townhouse / Duplex</option>
			<option value="home_from">Single Family Home</option>
			<option value="office_from">Office</option>
			<option value="storage_from">Storage Unit</option>
		</select>

<!-- 

HOME From

-->

		<div class="home_from">
			<input onfocus="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="text" class="home_floor_from" name="home_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="home_brs_from" name="home_brs_from" maxlength="10" />
			<input type="checkbox" class="home_attic_from" name="home_attic_from" value="1">Attic&nbsp;
			<input type="checkbox" class="home_basement_from" name="home_basement_from" value="1">Basement&nbsp;
			<input type="checkbox" class="home_garage_from" name="home_garage_from" value="1">Garage&nbsp;
			<input type="checkbox" class="home_shed_from" name="home_shed_from" value="1">Shed&nbsp;
		</div>

<!-- 

STUDIO APT From 

-->

		<div class="apt_studio_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="apt_studio_floor_from" name="apt_studio_floor_from" maxlength="10" />
			<input type="checkbox" class="apt_studio_elevator_from" name="apt_studio_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="apt_studio_stairs_from" name="apt_studio_stairs_from" value="1">Stairs
		</div>

<!-- 

APT From 

-->

		<div class="apt_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="apt_floor_from" name="apt_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="apt_brs_from" name="apt_brs_from" maxlength="10" />
			<input type="checkbox" class="apt_elevator_from" name="apt_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="apt_stairs_from" name="apt_stairs_from" value="1">Stairs
		</div>

<!-- 

CONDO From 

-->

		<div class="condo_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="condo_floor_from" name="condo_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="condo_brs_from" name="condo_brs_from" maxlength="10" />
			<input type="checkbox" class="condo_elevator_from" name="condo_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="condo_stairs_from" name="condo_stairs_from" value="1">Stairs<br/>
			<input type="checkbox" class="condo_mulitlevel_from" name="condo_mulitlevel_from" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font>
		</div>

<!-- 

THS From 

-->

		<div class="ths_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="text" class="ths_floor_from" name="ths_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="ths_brs_from" name="ths_brs_from" maxlength="10" />
			<input type="checkbox" class="ths_multilevel_from" name="ths_multilevel_from" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font><br/>
			<input type="checkbox" class="tha_attic_from" name="ths_attic_from" value="1">Attic&nbsp;
			<input type="checkbox" class="ths_basement_from" name="ths_basement_from" value="1">Basement&nbsp;
			<input type="checkbox" class="ths_garage_from" name="ths_garage_from" value="1">Garage&nbsp;
			<input type="checkbox" class="ths_shed_from" name="ths_shed_from" value="1">Shed&nbsp;
		</div>	

<!-- 

OFFICE From 

-->

		<div class="office_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of rooms?" placeholder="# of rooms?" type="text" class="office_rooms_from" name="office_rooms_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="office_floor_from" name="office_floor_from" maxlength="10" />
			<input type="checkbox" class="office_elevator_from" name="office_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="office_stairs_from" name="office_stairs_from" value="1">Stairs
		</div>			

<!-- 

STORAGE From 

-->

		<div class="storage_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit Size (ie 10x10)" placeholder="Unit Size (ie 10x10)" type="text" class="storage_size_from" name="storage_size_from" maxlength="30" />
			<input type="checkbox" class="storage_elevator_from" name="storage_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="storage_stairs_from" name="storage_stairs_from" value="1">Stairs
		</div>		


<!--

		Walking distance info

-->
		<div class="formText">Check if:</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="misc_walk_from" name="misc_walk_from" value="1"><label for="misc_walk_from">LONG WALK (200 FT. +) From residence/unit to truck/POD</label>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="misc_insurance_from" name="misc_insurance_from" value="1"><label for="misc_insurance_from">Building management requires Certificate of Insurance</label>
		</div>
		<div class="formText nomargin"><font color="#a3a3a3">Anything else we need to know about this residence? (optional)</font></div>	
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="other_text" name="misc_text_from" />

<!-- 

UNLOADING INFO 

-->


		<div class="formText"><b>UNLOADING</b> Address:</div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Address" placeholder="Address" type="text" name="cust_addr" id="cust_addr" maxlength="50" />
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit #" placeholder="Unit #" type="text" name="cust_addr_2" id="cust_addr_2" maxlength="50" />
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

<!-- 

RES TYPE To 

-->

		<select class="cust_residence_type" name="cust_residence_type" onchange="show_element(this.name, this.selectedIndex);">
			<option value="">Select Residence Type / Storage Unit</option>
			<option value="">----------------</option>
			<option value="apt_studio">Studio Apartment</option>
			<option value="apt">Apartment</option>
			<option value="condo">Condominium</option>
			<option value="ths">Townhouse / Duplex</option>
			<option value="home">Single Family Home</option>
			<option value="office">Office</option>
			<option value="storage">Storage Unit</option>
		</select>


<!-- 

HOME To

-->

		<div class="home">
			<input onfocus="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="text" class="home_floor" name="home_floor" maxlength="10" />
			<input onfocus="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="home_brs" name="home_brs" maxlength="10" />
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
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="apt_brs" name="apt_brs" maxlength="10" />
			<input type="checkbox" class="apt_elevator" name="apt_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="apt_stairs" name="apt_stairs" value="1">Stairs
		</div>

<!-- 

CONDO From 

-->

		<div class="condo">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="condo_floor" name="condo_floor" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="condo_brs" name="condo_brs" maxlength="10" />
			<input type="checkbox" class="condo_elevator" name="condo_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="condo_stairs" name="condo_stairs" value="1">Stairs<br/>
			<input type="checkbox" class="condo_mulitlevel" name="condo_mulitlevel" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font>
		</div>

<!-- 

THS To 

-->

		<div class="ths">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="text" class="ths_floor" name="ths_floor" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="text" class="ths_brs" name="ths_brs" maxlength="10" />
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
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of rooms?" placeholder="# of rooms?" type="text" class="office_rooms" name="office_rooms" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="office_floor" name="office_floor" maxlength="10" />
			<input type="checkbox" class="office_elevator" name="office_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="office_stairs" name="office_stairs" value="1">Stairs
		</div>			

<!-- 

STORAGE To 

-->

		<div class="storage">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit Size (ie 10x10)" placeholder="Unit Size (ie 10x10)" type="text" class="storage_size" name="storage_size" maxlength="30" />
			<input type="checkbox" class="storage_elevator" name="storage_elevator" value="1">Elevator&nbsp;
			<input type="checkbox" class="storage_stairs" name="storage_stairs" value="1">Stairs
		</div>		

		<br/>

<!--

		Walking distance info

-->
		<div class="formText">Check if:</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="misc_walk_to" name="misc_walk_to" value="1"><label for="misc_walk_to">LONG WALK (200 FT. +) From residence/unit to truck/POD</label>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="misc_insurance_to" name="misc_insurance_to" value="1"><label for="misc_insurance_to">Building management requires Certificate of Insurance</label>
		</div>
		<div class="formText nomargin"><font color="#a3a3a3">Anything else we need to know about this residence? (optional)</font></div>	
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="other_text" name="misc_text_to" />

<!-- 

ALTERNATE ADDRESSES 

-->	


 		<div class="formText"><b>ADDITIONAL ADDRESSES</b> associated with your move - provide residence types, floors & loading or unloading at locations</div>
		<div class="alt_addresses"></div>
		<div class="add_address">Click here to add an additional address</div>
		<!--<textarea class="cust_addr_other" name="cust_addr_other" wrap="soft"></textarea>
		<br/> -->


<!-- 

DATE SERVICE  

-->

		<div class="halfcont">
			<div class="formText">Preferred date of service:</div>
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Please select" placeholder="Please select" type="date" id="date_of_service" name="date_of_service" />
		</div>

<!-- 

START TIME 

-->
		<div class="halfcont">
			<div class="formText">Preferred <b>START TIME</b> of service:</div>
			<select class="time_of_service" name="time_of_service" >
				<option value="">Please select</option>
				<option value="">----------------</option>
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
		<div class="formText">How did you find us?</div>
		<select class="cust_referral" name="cust_referral" onchange="show_element(this.name, this.selectedIndex);">
			<option value="">Please Select</option>
			<option value="">----------------</option>
			<option value="previouscustomer">Previous Customer</option>
			<option value="yelp">Yelp</option>
			<option value="angieslist">Angie's List</option>
			<option value="movingstaffers">Moving Staffers</option>
			<option value="movinghelper">Moving Helper</option>
			<option value="hireahelper">Hire A Helper</option>
			<option value="ff">Friend/Family</option>
			<option value="sm">Strongmile Employee</option>
			<option value="bc">Business Card</option>
			<option value="uhaul">U-Haul Dealer</option>
			<option value="other">Other</option>
		</select>
		<div class="referral">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="referral_val" name="referral_val" maxlength="255" />
		</div>		

<!-- 

HELP TYPE

-->

		<div class="formText">What are you looking for help with?</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_loading_all" name="help_loading_all" value="1"><label for="help_loading_all">Full Transport Move</label>
			<span class="help_desc"> - Load truck, transport & unload truck</span>
		</div>		
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_loading" name="help_loading" value="1"><label for="help_loading">Load Only</label>
			<span class="help_desc"> - Truck, POD, trailer or similar</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_unloading" name="help_unloading" value="1"><label for="help_unloading">Unload Only</label>
			<span class="help_desc"> - Truck, POD, trailer or similar</span>
		</div>		
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_inhome" name="help_inhome" value="1"><label for="help_inhome">In-Home Assistance</label>
			<span class="help_desc"> - Relocating furniture on-site, room to room only</span>
		</div>	
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_inapt" name="help_inapt" value="1"><label for="help_inapt">In-Building</label>
			<span class="help_desc"> - Apartment, condo or office move floor to floor or within the same building</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_incomplex" name="help_incomplex" value="1"><label for="help_incomplex">In-Complex</label>
			<span class="help_desc"> - Building to building, walking distance moves less than 200 ft. that don't require a truck</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_packing" name="help_packing" value="1"><label for="help_packing">Packing services (complete)</label>
			<span class="help_desc"> - Packing of ALL loose items throughout your home</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_packing_partial" name="help_packing_partial" value="1"><label for="help_packing">Packing services (partial)</label>
			<span class="help_desc"> - Packing of SOME loose items throughout your home</span>
		</div>

		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="Other" type="text" class="other_text" name="other_text" maxlength="30" />
		<div class="formText nomargin"><font color="#a3a3a3">Only brief explanation here.  Further explanation allowed in open box at bottom of this page labeled "Tell us more important information about your move?"</font></div>
<!--

TYPES & QUANTITIES OF POSSESSIONS

-->		
		<div class="formText"><b>FURNITURE & BOX INVENTORY</b><br/>
			<button type="button" class="howtopack">How to pack boxes <font color="#a3a3a3">( click here to learn more )</font></button><br/>
			<div class="howtopack_content">
			<ul>
			<li><b>Small (16 x 12 x 12)</b><br/>
				Books, magazines, glassware (heavier, smaller items)</li>
			<li><b>Medium (18 x 18 x 18)</b><br/>
				Shoes, clothing & similar</li>
			<li><b>Large (24 x 18 x 18+)</b><br/>
				Do not use these unless absolutely necessary! These are meant for larger,less dense items like cookie sheets, board games, lamp shade, pillows, comfortors</li>
			</ul>
			</div>

			<button type="button" class="boxcounts">Typical box counts <font color="#a3a3a3">( click here to learn more )</font></button>
			<div class="boxcounts_content">
			<ul>
				<li><b>1 BR:</b> 20-40<br/></li>
				<li><b>2 BR:</b> 40-70</li>
				<li><b>3 BR:</b> 70-100</li>
				<li><b>4 BR+:</b> 100-150+</li>
			</ul>
			We know this may be a hard number to know precisely.  Do your best to <b>OVERESTIMATE</b> how many you'll have for a better quote.
			</div>
		</div>
		<div class="formText">Please list the total QUANTITIES of what you have, LEAVE BLANK IF YOU HAVE NONE:</div>


<!--

LIVING ROOM

-->

		<div class="formText"><b>Living / Family Room</b><div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_secsofa" maxlength="5" /></div><div class="furnText">Sectional Sofa</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_secsofa_sections" maxlength="5" /></div><div class="furnText">How many sections?</div></div>
		<div class="furnRow"><div class="furnInput_nocheck_thin"><input type="text" name="cust_furniture_secsofa_chaise" maxlength="5" /></div><div class="furnText">Is there a chaise? <font color="#a3a3a3">(Y/N)</font></div></div>
		<div class="furnRow"></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_3seatcouch" maxlength="5" /></div><div class="furnText">3-Seat Couch</div></div>
		<div class="furnRow"><div class="furnInput_nocheck_thin"><input type="text" name="cust_furniture_3seatcouch_sleeper" maxlength="5" /></div><div class="furnText">Is it a sleeper sofa? <font color="#a3a3a3">(Y/N)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_2seatcouch" maxlength="5" /></div><div class="furnText">2-Seat Couch</div></div>
		<div class="furnRow"><div class="furnInput_nocheck_thin"><input type="text" name="cust_furniture_2seatcouch_sleeper" maxlength="5" /></div><div class="furnText">Is it a sleeper sofa? <font color="#a3a3a3">(Y/N)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_recliner" maxlength="5" /></div><div class="furnText">Recliner</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_simplechair" maxlength="5" /></div><div class="furnText">Arm Chair</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_futon" maxlength="5" /></div><div class="furnText">Futon</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_ottoman" maxlength="5" /></div><div class="furnText">Ottoman</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_coffeetable" maxlength="5" /></div><div class="furnText">Coffee Table</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_endtable" maxlength="5" /></div><div class="furnText">End Table</div></div>

<!-- 

DINING

-->

		<div class="formText"><b>Dining room / Kitchen furniture</b><div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_diningtable" maxlength="5" /></div><div class="furnText">Dining / Kitchen Table</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_diningchairs" maxlength="5" /></div><div class="furnText">Dining / Kitchen Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_chinacabinet" maxlength="5" /></div><div class="furnText">China Cabinet</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_curiocabinet" maxlength="5" /></div><div class="furnText">Curio Cabinet</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_buffettable" maxlength="5" /></div><div class="furnText">Buffet Table</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_breakfront" maxlength="5" /></div><div class="furnText">Breakfront</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_hutch" maxlength="5" /></div><div class="furnText">Hutch</div></div>

<!-- 

OFFICE 

-->

		<div class="formText"><b>Office furniture</b><div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_desk" maxlength="5" /></div><div class="furnText">Desk</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_office_chair" maxlength="5" /></div><div class="furnText">Office Chair</div></div>		
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_bookshelf" maxlength="20" /></div><div class="furnText">Book Shelf (Qty & Sizes)</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_filecabinet" maxlength="5" /></div><div class="furnText">File Cabinet</div></div>

<!--

BEDROOMS

-->

		<div class="formText"><b>Bedrooms</b><div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_mattress" maxlength="20" /></div><div class="furnText top-align">Mattress <font color="#a3a3a3">(Qty & Sizes:<br/>i.e.1K 2Q 2T etc.)</font></div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_boxspring" maxlength="20" /></div><div class="furnText top-align">Box Spring <font color="#a3a3a3">(Qty & Sizes:<br/>i.e. 1K 2Q 2T etc.)</font></div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_bedframe" maxlength="20" /></div><div class="furnText top-align">Bed Frame <font color="#a3a3a3">(Qty & Sizes:<br/>i.e. 1K 2Q 2T etc.)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_nightstand" maxlength="5" /></div><div class="furnText">Night Stand</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_dresser" maxlength="5" /></div><div class="furnText">Dresser <font color="#a3a3a3">(low & long)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_chestofdrawers" maxlength="5" /></div><div class="furnText top-align">Chest Of Drawers<br/><font color="#a3a3a3">(tall & narrower)</font></div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_armoire" maxlength="20" /></div><div class="furnText top-align">Armoire <font color="#a3a3a3">(Qty & Sizes:<br/>i.e. 1 - 6 x 6 ft.)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_mirror" maxlength="5" /></div><div class="furnText">Mirror</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_chest" maxlength="5" /></div><div class="furnText">Chest/Trunk</div></div>

<!--

GYM & EXCERCISE

-->

		<div class="formText"><b>Exercise Equipment</b></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_treadmill" maxlength="5" /></div><div class="furnText">Treadmill</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_elliptical" maxlength="5" /></div><div class="furnText">Elliptical</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_stationarybike" maxlength="5" /></div><div class="furnText">Stationary Bike</div></div>
		<div class="formText nomargin">Other Exercise Equipment<div>
		<input type="text" class="cust_furniture_excercise_other" name="cust_furniture_excercise_other" maxlength="255" />

<!--

OUTDOOR / GARAGE 

-->

		<div class="formText"><b>Outdoor/Garage</b></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_patiotable" maxlength="5" /></div><div class="furnText">Patio Table</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_patiochairs" maxlength="5" /></div><div class="furnText">Patio Chairs</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_outdoorgrill" maxlength="5" /></div><div class="furnText">Outdoor Grill</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_bike" maxlength="5" /></div><div class="furnText">Bicycles</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_yardtools" maxlength="5" /></div><div class="furnText">Yard Tools</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_snowblower" maxlength="5" /></div><div class="furnText">Snow Blower</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_lawnmower" maxlength="5" /></div><div class="furnText">Lawn Mower</div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_lawnmower_size" maxlength="20" /></div><div class="furnText">Lawn Mower Size</font></div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_lawnmower_type" maxlength="20" /></div><div class="furnText">Push or riding?</font></div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_lawnmower_power" maxlength="20" /></div><div class="furnText">Gas or Electric?</font></div></div>
		<div class="formText wide nomargin">Generators or Other Gas-Powered Items?<div>
		<input type="text" class="cust_furniture_outside_other_gas" name="cust_furniture_outside_other_gas" maxlength="255" />
		<div class="formText wide nomargin">Other Outside Items<div>
		<input type="text" class="cust_furniture_outside_other" name="cust_furniture_outside_other" maxlength="255" />

<!--

OTHER HOUSEWARES

-->

		<div class="formText"><b>Others</b><div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_tv" maxlength="5" /></div><div class="furnText">Tv</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_tvstand" maxlength="5" /></div><div class="furnText">Tv Stand</div></div>
		<div class="furnRow"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_entertainmentcenter" maxlength="10" /></div><div class="furnText">Ent. Stand (Qty & Sizes)</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_lamp_floor" maxlength="5" /></div><div class="furnText">Floor Lamp</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_lamp_table" maxlength="5" /></div><div class="furnText">Table Lamp</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_rug" maxlength="5" /></div><div class="furnText">Rug</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_toys" maxlength="5" /></div><div class="furnText">Lg. Children's Toys</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_crib" maxlength="5" /></div><div class="furnText">Crib</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_safe" maxlength="5" /></div><div class="furnText">Safe</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_piano" maxlength="5" /></div><div class="furnText">Piano</div></div>

<!--

APPLIANCES

-->

		<div class="formText"><b>Appliances</b></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_washer" maxlength="5" /></div><div class="furnText">Washer</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_dryer" maxlength="5" /></div><div class="furnText">Dryer</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_refrigerator" maxlength="5" /></div><div class="furnText">Refrigerator</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_freezer" maxlength="5" /></div><div class="furnText">Freezer</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_stove" maxlength="5" /></div><div class="furnText">Stove</div></div>

<!-- 

MISCELLANEOUS

-->
		<div class="formText"><b>Miscellaneous</b></div>
		<div class="furnRow wide"><div class="furnInput boxes"><input type="text" name="cust_furniture_boxtubs" maxlength="5" id="cust_furniture_boxtubs" /></div><div class="furnText top-align" style="width: 85%"><b>Boxes And / Or Plastic Tubs</b> - We know this may be a hard number to know precisely, but do your best to over estimate how many you'll have for a better quote.</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_luggage" maxlength="5" /></div><div class="furnText">Luggage</div></div>
		<div class="furnRow"><div class="furnInput"><input type="text" name="cust_furniture_bags" maxlength="5" /></div><div class="furnText">Bags</div></div>

<!--

OTHER

-->
		<div class="formText">Please list any other items with quantities not mentioned on checklist:</div>
		<input type="text" class="cust_furniture_other" name="cust_furniture_other" maxlength="255" />

<!--

GLASS

-->

		<div class="formText">Please specify any furniture that has glass associated with it: (IE - tops, shelves, doors etc)</div>
		<input type="text" class="cust_furniture_glass" name="cust_furniture_glass" maxlength="255" />

<!--

IMPORTANT

-->
		<div class="formText">Tell us more important information about your move:</div>
		<textarea class="cust_importantinfo" name="cust_importantinfo" wrap="soft"></textarea>

<!--

NOTES

-->
		<div class="formText">Any other notes to add:</div>
		<textarea class="cust_otherinfo" name="cust_otherinfo" wrap="soft"></textarea>

<!--

HUMAN CHECK

-->
		<div class="captcha">Please check the box below<br/>(this helps us prevent spammers):
			<div id="captchaDiv"></div>
		</div>
		<div class="submit" onclick="fSubmit();">SUBMIT</div>

	</form>
	<script type="text/javascript" src="js/functions.js"></script>
</div>