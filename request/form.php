
	<form id="strongmile_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" name="strongmile_form" method="post" autocomplete="on">

<!-- 

USER INFO

-->

		<div id="user">
			<label for="username">Username</label>
      		<input type="text" name="username">
      	</div>
      	<div class="formText"><b>FULL NAME</b></div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Name" placeholder="Name" type="text" name="cust_name" id="cust_name" maxlength="50" class="required"/>
		<div class="formText"><b>PHONE</b></div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Phone" placeholder="Phone" type="tel" name="cust_phone" id="cust_phone" maxlength="50" class="required"/>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Alt Phone" placeholder="Alt Phone" type="tel" id="cust_phone_alt" name="cust_phone_alt" maxlength="50" />
		<div class="formText"><b>EMAIL</b></div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Email" placeholder="Email" type="email" name="cust_email" id="cust_email" maxlength="50" />
		<div class="formText"><b>LOADING</b> Address / Current Residence / Origin</div>
		<div class="furnRow wide">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Address" placeholder="Address" type="text" name="cust_addr_from" id="cust_addr_from" maxlength="50" class="address" />
		</div>
		<div class="furnRow wide">
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
		</div>
		<div class="furnRow wide">
			<br/><input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit #" placeholder="Unit #" type="text" name="cust_addr_2_from" id="cust_addr_2_from" maxlength="50" />
		</div>
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
			<option value="other_from">Other</option>
		</select>

<!-- 

HOME From

-->

		<div class="home_from">
			<input onfocus="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="number" class="home_floor_from" name="home_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="home_brs_from" name="home_brs_from" maxlength="10" />
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
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="apt_brs_from" name="apt_brs_from" maxlength="10" />
			<input type="checkbox" class="apt_elevator_from" name="apt_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="apt_stairs_from" name="apt_stairs_from" value="1">Stairs
			<input type="checkbox" class="apt_multilevel_from" name="apt_multilevel_from" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font>
		</div>

<!-- 

CONDO From 

-->

		<div class="condo_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="condo_floor_from" name="condo_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="condo_brs_from" name="condo_brs_from" maxlength="10" />
			<input type="checkbox" class="condo_elevator_from" name="condo_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="condo_stairs_from" name="condo_stairs_from" value="1">Stairs<br/>
			<input type="checkbox" class="condo_multilevel_from" name="condo_multilevel_from" value="1">Multi-levels <font color="#a3a3a3">- Multiple floors within unit </font>
		</div>

<!-- 

THS From 

-->

		<div class="ths_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="How many floors?" placeholder="How many floors?" type="number" class="ths_floor_from" name="ths_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of bedrooms?" placeholder="# of bedrooms?" type="number" class="ths_brs_from" name="ths_brs_from" maxlength="10" />
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
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="# of rooms?" placeholder="# of rooms?" type="number" class="office_rooms_from" name="office_rooms_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What floor?" placeholder="What floor?" type="text" class="office_floor_from" name="office_floor_from" maxlength="10" />
			<input type="checkbox" class="office_elevator_from" name="office_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="office_stairs_from" name="office_stairs_from" value="1">Stairs
		</div>			

<!-- 

STORAGE From 

-->

		<div class="storage_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What Floor?" placeholder="What Floor?" type="text" class="storage_floor_from" name="storage_floor_from" maxlength="10" />
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Unit Size (ie 10x10)" placeholder="Unit Size (ie 10x10)" type="text" class="storage_size_from" name="storage_size_from" maxlength="30" />
			<input type="checkbox" class="storage_elevator_from" name="storage_elevator_from" value="1">Elevator&nbsp;
			<input type="checkbox" class="storage_stairs_from" name="storage_stairs_from" value="1">Stairs
		</div>		

<!-- 

Other From 

-->

		<div class="other_from">
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="More Info Here" placeholder="More Info Here" type="text" class="other_text_from" name="other_text_from" />
		</div>		

		<div class="formText nomargin"><font color="#a3a3a3">Anything else we need to know about this residence? (optional)</font></div>	
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="" placeholder="" type="text" class="other_text" name="misc_text_from" />

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
			<option value="">----------------</option>
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


<!-- 

DATE SERVICE  

-->

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

		<div class="formText"><b>What are you looking for help with?</b></div>
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
			<span class="help_desc"> - Relocating furniture on-site, room to room</span>
		</div>	
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_inapt" name="help_inapt" value="1"><label for="help_inapt">In-Building</label>
			<span class="help_desc"> - Apt, condo or office moves floor to floor or on the same level</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_incomplex" name="help_incomplex" value="1"><label for="help_incomplex">In-Complex</label>
			<span class="help_desc"> - Building to building moves less than 200 ft. not requiring a truck</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_disassembly" name="help_disassembly" value="1"><label for="help_disassembly">Disassembly and reassembly of furniture</label>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_assembly" name="help_assembly" value="1"><label for="help_assembly">Brand new, out-of-the box initial furniture assembly</label>
		</div>
		<div class="help_checkbox wide"></div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_packing" name="help_packing" value="1"><label for="help_packing">Box packing COMPLETE</label>
			<span class="help_desc"> - Box packing of ALL loose items</span>
		</div>
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="help_packing_partial" name="help_packing_partial" value="1"><label for="help_packing">Box packing PARTIAL</label>
			<span class="help_desc"> - Box packing of SOME loose items</span>
		</div>
		<div class="help_checkbox wide"></div>
		<input onfocus="pHolder(this)" onblur="pHolder(this)" value="Specify other help needed not listed above" placeholder="Specify other help needed not listed above" type="text" class="other_text" name="other_text" maxlength="30" />
		<div class="formText nomargin"><font color="#a3a3a3">Only brief service topic here.  Further explanation allowed at bottom of this form.</font></div>
<!--

TYPES & QUANTITIES OF POSSESSIONS

-->		
		<div class="formText largeText"><b>FURNITURE INVENTORY</b></div>


		<div class="formText"><b>NUMERICAL QUANTITY ONLY</b><br/>Leave <b>BLANK</b> if you have none</div>

<!-- 

MISCELLANEOUS

-->
		<div class="formText"><b>Miscellaneous Totals</b></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_tvs" maxlength="5" /></div><div class="furnText">TV's</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_shelves" maxlength="5" /></div><div class="furnText">Book Shelves</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_floorlamps" maxlength="5" /></div><div class="furnText">Floor Lamps</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_tablelamps" maxlength="5" /></div><div class="furnText">Table Lamps</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_pictures" maxlength="5" /></div><div class="furnText">Framed Pictures</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_paintings" maxlength="5" /></div><div class="furnText">Paintings</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_misc_rugs" maxlength="5" /></div><div class="furnText">Rugs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_mirror" maxlength="5" /></div><div class="furnText">Mirrors</div></div>


<!--

LIVING ROOM

-->

		<div class="formText"><b>Living / Family Room / Den</b><div>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input type="number" name="cust_furniture_2seatcouch" maxlength="5" /></div><div class="furnText">2 seat couches - Total</div></div>
			<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_2seatcouch_sleeper" maxlength="5" /></div><div class="furnText"># Sleeper</div></div>
			<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_2seatcouch_recliner" maxlength="5" /></div><div class="furnText"># Reclining</div></div>
		</div>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input type="number" name="cust_furniture_3seatcouch" maxlength="5" /></div><div class="furnText">3 seat couches - Total</div></div>
			<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_3seatcouch_sleeper" maxlength="5" /></div><div class="furnText"># Sleeper</div></div>
			<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_3seatcouch_recliner" maxlength="5" /></div><div class="furnText"># Reclining</div></div>
		</div>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input type="number" name="cust_furniture_secsofa" maxlength="5" /></div><div class="furnText">Sectional Sofa - Total</div></div>
			<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_secsofa_sleeper" maxlength="5" /></div><div class="furnText"># Sleeper</div></div>
			<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_secsofa_recliner" maxlength="5" /></div><div class="furnText"># Reclining</div></div>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_recliner" maxlength="5" /></div><div class="furnText">Recliners - Single seat</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_simplechair" maxlength="5" /></div><div class="furnText">Arm Chairs - Single seat</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_rockingchair" maxlength="5" /></div><div class="furnText">Rocking chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_ottoman" maxlength="5" /></div><div class="furnText">Ottoman</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_futon" maxlength="5" /></div><div class="furnText">Futon</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_coffeetable" maxlength="5" /></div><div class="furnText">Coffee Table</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_endtable" maxlength="5" /></div><div class="furnText">End Table</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_tvstand" maxlength="5" /></div><div class="furnText">Tv Stand</div></div>
		<div class="furnRow wide"><div class="furnInput"><input id="entertainment_center" type="number" name="cust_furniture_entertainment_center" maxlength="5" /></div><div class="furnText">Entertainment center - Large unit for electronics</div></div>
		<div class="furnRow" id="entertainment_center_dimensions"><div class="furnInput_nocheck"><input type="text" name="cust_furniture_entertainment_dimensions" maxlength="10" /></div><div class="furnText">Dimensions</div></div>
		<div class="formText wide nomargin">Other living room items:<div>
		<input type="text" class="other_text" name="cust_furniture_livingroom_other" />

<!-- 

KITCHEN

-->

		<div class="formText"><b>Kitchen</b><div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kitchentable" maxlength="5" /></div><div class="furnText">Tables</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kitchenchairs" maxlength="5" /></div><div class="furnText">Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_microwave" maxlength="5" /></div><div class="furnText">Microwave</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_winerack" maxlength="5" /></div><div class="furnText">Wine Rack</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_bakerrack" maxlength="5" /></div><div class="furnText">Baker's Rack</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_bars" maxlength="5" /></div><div class="furnText">Bars</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_stools" maxlength="5" /></div><div class="furnText">Stools</div></div>
		<div class="formText wide nomargin">Other kitchen items:<div>
		<input type="text" class="other_text" name="cust_furniture_kitchen_other" />

<!--

APPLIANCES

-->

		<div class="formText"><b>Appliances</b></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_refrigerator" maxlength="5" /></div><div class="furnText">Refrigerator</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_freezer" maxlength="5" /></div><div class="furnText">Freezer</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_stove" maxlength="5" /></div><div class="furnText">Stove</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_dishwasher" maxlength="5" /></div><div class="furnText">Dishwasher</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_washer" maxlength="5" /></div><div class="furnText">Washer</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_dryer" maxlength="5" /></div><div class="furnText">Dryer</div></div>
		<div class="formText wide nomargin">Other Appliance items:<div>
		<input type="text" class="other_text" name="cust_furniture_appliance_other" />

<!-- 

DINING

-->

		<div class="formText"><b>Dining room</b><div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_diningtable" maxlength="5" /></div><div class="furnText">Tables</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_diningchairs" maxlength="5" /></div><div class="furnText">Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_chinacabinet" maxlength="5" /></div><div class="furnText">China Cabinet</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_curiocabinet" maxlength="5" /></div><div class="furnText">Curio Cabinet</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_buffettable" maxlength="5" /></div><div class="furnText">Buffet Table</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_breakfront" maxlength="5" /></div><div class="furnText">Breakfront</div></div>		
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_hutch" maxlength="5" /></div><div class="furnText">Hutch</div></div>
		<div class="formText wide nomargin">Other dining items:<div>
		<input type="text" class="other_text" name="cust_furniture_dining_other" />

<!-- 

OFFICE 

-->

		<div class="formText"><b>Office furniture</b><div>
		<div class="furnRow box wide">
			<div class="furnRow wide"><div class="furnInput"><input id="cust_furniture_desk" type="number" name="cust_furniture_desk" maxlength="5" /></div><div class="furnText">Desks</div></div>
			<div class="furnRow wide" id="fordesks">
				<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_desk_simple" maxlength="5" /></div><div class="furnText"># Simple rectangular</div></div>
				<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_desk_lshape" maxlength="5" /></div><div class="furnText"># L-Shape</div></div>
				<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_desk_hutch" maxlength="5" /></div><div class="furnText"># Hutch top (Shelf backing)</div></div>
				<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_desk_cubicle" maxlength="5" /></div><div class="furnText"># Cubicle</div></div>
				<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_desk_antique" maxlength="5" /></div><div class="furnText"># Antique</div></div>
				<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_desk_rolltop" maxlength="5" /></div><div class="furnText"># Roll Top</div></div>
			</div>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_office_chair" maxlength="5" /></div><div class="furnText">Office Chairs</div></div>	
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_filecabinet" maxlength="5" /></div><div class="furnText">File Cabinets</div></div>	
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_cpu_towers" maxlength="20" /></div><div class="furnText">CPU Towers</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_monitors" maxlength="20" /></div><div class="furnText">Monitors</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_copiers" maxlength="20" /></div><div class="furnText">Copiers</div></div>
		<div class="furnRow wide"><div class="formText wide nomargin">Other office items:<div>
		<input type="text" class="other_text" name="cust_furniture_office_other" /></div>
<!--

BEDROOMS

-->

		<div class="formText"><b>Bedrooms</b><div>
		<?php include('beds.php'); ?>
		<div class="furnRow">
			<div class="formText">Additional beds with more info</div>
		</div>
  		<div class="furnRow">
			<input type="text" name="cust_furniture_bathroom_other" />
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_nightstand" maxlength="5" /></div><div class="furnText">Night Stand</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_dresser" maxlength="5" /></div><div class="furnText top-align">Standard Dresser <font color="#a3a3a3">(Waist high,<br/>Lower and longer dressers)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_chestofdrawers" maxlength="5" /></div><div class="furnText top-align">Chest Of Drawers <font color="#a3a3a3">(Chest high,<br/>Narrower and taller dressers)</font></div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_trunk" maxlength="5" /></div><div class="furnText">Trunks</div></div>
		<div class="furnRow wide"><div class="furnInput"><input type="number" name="cust_furniture_bedroom_chair" maxlength="5" /></div><div class="furnText">Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_armoire" maxlength="5" /></div><div class="furnText">Armoire </div><div class="furnInput_nocheck"><input type="text" name="cust_furniture_armoire_dimensions" /></div><div class="furnText">Dimensions</div></div>
		<div class="furnRow"><input type="checkbox" class="help_cb" id="cust_furniture_armoire_assembled" name="cust_furniture_armoire_assembled" value="1"><label for="cust_furniture_armoire_assembled">Assembed in room?</label></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_wardrobe" maxlength="5" /></div><div class="furnText top-align">Wardrobe<br/>Closet</div><div class="furnInput_nocheck"><input type="text" name="cust_furniture_wardrobe_dimensions" /></div><div class="furnText">Dimensions</div></div>
		<div class="furnRow"><input type="checkbox" class="help_cb" id="cust_furniture_wardrobe_assembled" name="cust_furniture_wardrobe_assembled" value="1"><label for="cust_furniture_wardrobe_assembled">Assembed in room?</label></div>

		<div class="furnRow wide"><div class="formText nomargin">Other Bedroom Items<div>
		<input type="text" class="other_text" name="cust_furniture_bedroom_other" /></div>

<!--

APPLIANCES

-->

		<div class="formText"><b>Kids / Baby</b></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_beds" maxlength="5" /></div><div class="furnText">Beds</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_cribs" maxlength="5" /></div><div class="furnText">Cribs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_dressers" maxlength="5" /></div><div class="furnText">Dressers</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_tables" maxlength="5" /></div><div class="furnText">Tables</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_chairs" maxlength="5" /></div><div class="furnText">Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_toytrunks" maxlength="5" /></div><div class="furnText">Toy Trunks</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_largetoys" maxlength="5" /></div><div class="furnText">Large Toys</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_glidershairs" maxlength="5" /></div><div class="furnText">Glider Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_kids_changingtables" maxlength="5" /></div><div class="furnText">Changing Tables</div></div>
		<div class="formText wide nomargin">Other kid Items:<div>
		<input type="text" class="other_text" name="cust_furniture_kids_other" />

<!--

BATHROOMS

-->

		<div class="formText"><b>Bathrooms</b></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_bathroom_cabinets" maxlength="5" /></div><div class="furnText">Cabinets</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_bathroom_mirrors" maxlength="5" /></div><div class="furnText">Mirrors</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_bathroom_shelves" maxlength="5" /></div><div class="furnText">Shelves</div></div>
		<div class="formText nomargin">Other Bathroom Items<div>
		<input type="text" class="other_text" name="cust_furniture_bathroom_other" />


<!--

GYM & EXCERCISE

-->

		<div class="formText"><b>Exercise Equipment</b></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_treadmill" maxlength="5" /></div><div class="furnText">Treadmill</div><input type="checkbox" class="help_cb" id="cust_furniture_armoire_assembled" name="cust_furniture_treadmill_assembled" value="1"><label for="cust_furniture_treadmill_assembled">Assembed in room?</label>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_elliptical" maxlength="5" /></div><div class="furnText">Elliptical</div><input type="checkbox" class="help_cb" id="cust_furniture_armoire_assembled" name="cust_furniture_elliptical_assembled" value="1"><label for="cust_furniture_elliptical_assembled">Assembed in room?</label>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_stationarybike" maxlength="5" /></div><div class="furnText">Stationary Bike</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_weightbenches" maxlength="5" /></div><div class="furnText">Weight Benches</div></div>
		<div class="formText nomargin">Other Exercise Equipment<div>
		<input type="text" class="other_text" name="cust_furniture_excercise_other" />

<!--

OUTDOOR / GARAGE 

-->

		<div class="formText"><b>Outdoor/Garage/Shed</b></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_bike" maxlength="5" /></div><div class="furnText">Bikes</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_ladder" maxlength="5" /></div><div class="furnText">Ladders</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" id="cust_furniture_lawnmower" name="cust_furniture_lawnmower" maxlength="5" /></div><div class="furnText">Lawn Mower</div>
		<input type="checkbox" id="cust_furniture_lawnmower_push" name="cust_furniture_lawnmower_push" value="1"><label for="cust_furniture_lawnmower_push">Push</label>
			<input type="checkbox" id="cust_furniture_lawnmower_riding" name="cust_furniture_lawnmower_riding" value="1"><label for="cust_furniture_lawnmower_riding">Riding</label>
		</div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_snowblower" maxlength="5" /></div><div class="furnText">Snow Blower</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_generator" maxlength="5" /></div><div class="furnText">Generators</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_boats" maxlength="5" /></div><div class="furnText">Boats / Canoes / Kayaks</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_shelves" maxlength="5" /></div><div class="furnText">Shelves</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_tables" maxlength="5" /></div><div class="furnText">Tables</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_chairs" maxlength="5" /></div><div class="furnText">Chairs</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_umbrellas" maxlength="5" /></div><div class="furnText">Umbrellas</div></div>
		<div class="furnRow"><div class="furnInput"><input type="number" name="cust_furniture_outdoor_grill" maxlength="5" /></div><div class="furnText">Grill</div></div>
		<div class="formText wide nomargin">Other Outdoor Items<div>
		<input type="text" class="other_text" name="cust_furniture_outside_other" />


<!--

Attic Misc

-->
		<div class="formText"><b>Attic Miscellaneous</b></div>
		<input type="text" class="other_text" name="cust_furniture_attic_misc" />

<!--

Basement Misc

-->


		<div class="formText"><b>Basement Miscellaneous</b></div>
		<input type="text" class="other_text" name="cust_furniture_basement_misc" />

<!--

Specialy Items

-->

		<div class="formText"><b>Specialty Items</b> - Additional Fees may apply</div>

		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_pianos" name="specialty_pianos" value="1"><label for="specialty_pianos">Pianos</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_pianos_more" /></span>
		</div>		
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_safes" name="specialty_safes" value="1"><label for="specialty_safes">Safes</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_safes_more" /></span>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_gyms" name="specialty_gyms" value="1"><label for="specialty_gyms">Full Gyms</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_gyms_more" /></span>
		</div>		
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_hospitalbeds" name="specialty_hospitalbeds" value="1"><label for="specialty_hospitalbeds">Hospital Beds</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_hospitalbeds_more" /></span>
		</div>	
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_toolboxes" name="specialty_toolboxes" value="1"><label for="specialty_toolboxes">Heavy Toolboxes</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_toolboxes_more" /></span>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_machinery" name="specialty_machinery" value="1"><label for="specialty_machinery">Large Machinery</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_machinery_more" /></span>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_worktables" name="specialty_worktables" value="1"><label for="specialty_worktables">Work Tables</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_worktables_more" /></span>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_trampolines" name="specialty_trampolines" value="1"><label for="specialty_trampolines">Trampolines</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_trampolines_more" /></span>
		</div>
		<div class="specialty_checkbox wide">
			<input type="checkbox" class="specialty_cb" id="specialty_pooltables" name="specialty_pooltables" value="1"><label for="specialty_pooltables">Pool Tables</label>
			<span class="specialty_desc">More Info: <input type="text" name="specialty_pooltables_more" /></span>
		</div>

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
		<div class="furnRow wide"><div class="furnInput"><input type="number" name="cust_furniture_boxtubs" id="cust_furniture_boxtubs" maxlength="5"/></div><label for="cust_furniture_boxtubs">ESTIMATED TOTAL BOX COUNT </label> <br/> This may be difficult to know precisely.   Try to OVERESTIMATE your box count.</div><br/><Br/>

<!--

FURNITURE MOVE ONLY

-->
		<div class="help_checkbox wide">
			<input type="checkbox" class="help_cb" id="furn_move_only" name="furn_move_only" value="1"><label for="furn_move_only">NO BOXES - FURNITURE MOVE ONLY - Customer moving all boxes personally</label>
		</div>
<!--

GLASS

-->

		<div class="formText">List any inventory from above that has GLASS (Examples: Tops, shelves, doors etc.)</div>
		<input type="text" class="cust_furniture_glass" name="cust_furniture_glass" />

<!--

PRESS BOARD

-->
		<div class="formText">List any inventory from above that is presswood, pressboard, IKEA-style furniture that is not made of solid wood</div>
		<input type="text" class="cust_furniture_glass" name="cust_furniture_ikea" />

<!--

IMPORTANT

-->
		<div class="formText">Any additional information regarding your move?<br/>
PLEASE DO NOT LIST INVENTORY HERE.  FILL OUT FORM ABOVE AS DESIGNED.</div>
		<textarea class="cust_importantinfo" name="cust_importantinfo" wrap="soft"></textarea>

<!--

rating

-->
		<div class="formText"></div>
		<div class="formText">
			<fieldset>
				<legend>Was your experience completing this request form positive?</legend>
				<input type="radio" name="experience_type" id="experience_good" value="good" checked="checked"><label for="experience_good">Yes</label>
				<input type="radio" name="experience_type" id="experience_poor" value="poor"><label for="experience_poor">No</label>
			</fieldset>
		</div>
		<div class="furnRow wide">
			<div class="formText">More info:<input type="text" class="other_text right" name="experience_moreinfo" /></div> 
		</div>

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