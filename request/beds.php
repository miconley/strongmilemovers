<?php 

for ($bedCount = 1; $bedCount < 5; $bedCount++) {

?>
	<div id="bed_sizes" class="furnRow box wide">
		<div class="furnRow">
			<select name="cust_furniture_bed_size[]" class="cust_furniture_bed_size"> 
				<option value="">Bed size <?php echo $bedCount;?> </option> 
				<option value="">----------------</option>
				<option value="twin">Twin</option> 
				<option value="full">Full</option> 
				<option value="queen">Queen</option> 
				<option value="king">King</option> 
			</select>
		</div>
		<div class="furnRow">
			<input type="checkbox" id="cust_furniture_bed_has_matress<?php echo $bedCount;?>" class="cust_furniture_bed_has_matress" name="cust_furniture_bed_has_matress[]" value="1"><label for="cust_furniture_bed_has_matress<?php echo $bedCount;?>">Matress</label>
			<input type="checkbox" id="cust_furniture_bed_has_boxspring<?php echo $bedCount;?>" class="cust_furniture_bed_has_matress" name="cust_furniture_bed_has_boxspring[]" value="1"><label for="cust_furniture_bed_has_boxspring<?php echo $bedCount;?>">Box Spring</label>
		</div>

		<div class="furnRow wide">
			<select class="cust_furniture_bed_frame" name="cust_furniture_bed_frame[]">
				<option value="">Bed frame type</option>
				<option value="">----------------</option>
				<option value="metal_stand_only">Metal stand only - simple & folds easy</option>
				<option value="metal_stand_only_headboard">Metal stand only with headboard and/or footboard</option>
				<option value="complete_with_headboard">Complete frame with headboard, footboard and side rails</option>
				<option value="complete_with_drawers">Complete frame with storage drawers</option>
				<option value="platform">Platform bed</option>
				<option value="bunk">Bunk bed</option>
				<option value="trundle">Trundle</option>
				<option value="daybed">Daybed</option>
				<option value="sleep_number">Sleep Number</option>
				<option value="mechanical">Mechanical</option>
				<option value="noframe">No Frame At All</option>
				<option value="other">Other</option>
			</select>
			<input onfocus="pHolder(this)" onblur="pHolder(this)" value="What do we need to know?" placeholder="What do we need to know?" type="text" class="cust_furniture_bed_other" name="cust_furniture_bed_other[]" />
		</div>
	</div>

<?php
}
?>