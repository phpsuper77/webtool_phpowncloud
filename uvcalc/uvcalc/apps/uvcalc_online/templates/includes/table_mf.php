<table class="uvconline-table" width="100%" id="mf_table">
	<tr><th class="uvconline-table-th" colspan="4"><label for="medium-type">Medium Type</label></th></tr>
	<tr>
		<td class="uvconline-table-td" colspan="2">
			<div class="radio">
				
				<input type="radio" name="medium-type" id="medium-type-water" value="water" checked>
Water
				
			</div>
		</td>
		<td class="uvconline-table-td">
			<div class="radio">
				
				<input type="radio" name="medium-type" id="medium-type-air" value="air">
Air
				
			</div>
		</td>
		<td class="uvconline-table-td">
			<div class="radio">
				
				<input type="radio" name="medium-type" id="medium-type-other" value="other">
Other
				
			</div>
		</td>
	</tr>
	<tr>
		<td class="uvconline-table-td" colspan="3"><label for="medium-ri">Medium Refractive Index</label></td>
		<td class="uvconline-table-td"><input type="text" style="width:75px" class="form-control" name="medium-ri" id="medium-ri" value="1.372" onkeypress="return isNumberKey(event)"></td>
	</tr>
	<tr>
		<th class="uvconline-table-th" colspan="4" style="border-radius:0px">Transmittance</th>
	</tr>
	<tr>
		<td class="uvconline-table-td" colspan="3"><label for="medium-transmittance">For 1 cm Path Length (%)</label></td>
		<td class="uvconline-table-td"><input type="text" style="width:75px" class="form-control" name="medium-transmittance" id="medium-transmittance" value="80.00" onkeypress="return isNumberKey(event)"></td>
	</tr> 
	<tr>
		<td class="uvconline-table-td" colspan="3"><div id="mpt-group-maxt-title" style="display:none"><label for="medium-transmittance-max">Max. %T</label></div></td>
		<td class="uvconline-table-td"><div id="mpt-group-maxt" style="display:none"><input type="text" style="width:75px" class="form-control" name="medium-transmittance-max" id="medium-transmittance-max" value="" onkeypress="return isNumberKey(event)"></div></td>
	</tr>
	<tr>
		<td class="uvconline-table-td" colspan="3"><div id="mpt-group-inc-title" style="display:none"><label for="medium-transmittance-increment">Increment</label></div></td>
		<td class="uvconline-table-td">
			<div id="mpt-group-inc" style="display:none"><select class="form-control" id="medium-transmittance-increment" name="medium-transmittance-increment" >
				<option></option>
				<option>0.5</option>
				<option>1</option>
				<option>2</option>
				<option>5</option>
				<option>10</option>		  
			</select></div>
		</td>
	</tr>
	<tr>
		<th class="uvconline-table-th" style="border-radius:0px" colspan="4"><label for="medium-flow-rate-units">Flow Rate Units</label></th></tr>
	<tr>
		<td class="uvconline-table-td">
			<div class="radio">
				
					<input type="radio" name="medium-flow-rate-units" id="medium-flow-rate-units-liters-per-minute" value="Litres/min" checked>
					L/min
				
			</div>
		</td>
		<td class="uvconline-table-td">
			<div class="radio">
				
					<input type="radio" name="medium-flow-rate-units" id="medium-flow-rate-units-gminus" value="Gal/min(US)" >
					GPM (US)
				
			</div>
		</td>
		<td class="uvconline-table-td">
			<div class="radio">
				
					<input type="radio" name="medium-flow-rate-units" id="medium-flow-rate-units-gminimp" value="Gal/min(IMP)" >
					GPM (IMP)
				
			</div>
		</td>
		<td class="uvconline-table-td">
			<div class="radio">
				
					<input type="radio" name="medium-flow-rate-units" id="medium-flow-rate-units-m3h" value="m3/h" >
					m3/h.
				
			</div>
		</td>
	</tr>
	<tr>
		<td class="uvconline-table-td" colspan="2"><label for="medium-flow-rate">Flow Rate</label></td>
		<td class="uvconline-table-td" colspan="2"><input type="text" style="width:75px" class="form-control" name="medium-flow-rate" id="medium-flow-rate" value="200.00" onkeypress="return isNumberKey(event)"></td>
	</tr>
</table>	