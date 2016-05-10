<table class="uvconline-table" width="100%" id="sc_table">
	    <tr>
			<th class="uvconline-table-th" colspan="5"><label for="output-units">Scenario Name</label></th>
		</tr>
		<tr>
			<td colspan="5" width="90%" class="uvconline-table-td">
				<input type="text" width="90%" style="width:90%" name="scenario-name" id="scenario-name">
			</td>
		</tr>
		<tr><th class="uvconline-table-th" colspan="5" style="border-radius:0px"><label for="output-resolution">Output Radial Resolution</label></th></tr>
		<tr>
			<td class="uvconline-table-td">
				<div class="radio">
					<!--<label class="radio inline">-->
						<input type="radio" name="output-resolution" id="output-resolution-1" value="1.0" >1.0<!--</label>-->
				</div>
			</td>
			<td class="uvconline-table-td">
				<div class="radio">
					<!--<label class="radio inline">-->
						<input type="radio" name="output-resolution" id="output-resolution-05" value="0.5" >0.5<!--</label>-->
				</div>
			</td>
			<td class="uvconline-table-td">
				<div class="radio">
					<!--<label class="radio inline">-->
						<input type="radio" name="output-resolution" id="output-resolution-02" value="0.2" >0.2<!--</label>-->
				</div>
			</td>
			<td class="uvconline-table-td">
				<div class="radio">
					<!--<label class="radio inline">-->
						<input type="radio" name="output-resolution" id="output-resolution-01" value="0.1" checked>0.1<!--</label>-->
				</div>
			</td>
			<td class="uvconline-table-td">
				<div class="radio">
					<!--<label class="radio inline">-->
						<input type="radio" name="output-resolution" id="output-resolution-001" value="0.01" >0.01<!--</label>-->
				</div>
			</td>
		</tr>
		<tr>
			<th class="uvconline-table-th" style="border-radius:0px" colspan="5"><label for="output-units">Output Units</label></th>
		</tr>
		<tr>
			<td colspan="2" class="uvconline-table-td">
				<div class="radio">
					<label class="radio inline">
						<input type="radio" name="output-units" id="output-units-wm2" value="wm2" >
									W/m<sup>2</sup>
					</label>
				</div>
			</td>
			<td colspan="3" class="uvconline-table-td">
				<div class="radio">
					<label class="radio inline">
						<input type="radio" name="output-units" id="output-units-mwcm2" value="mwcm2" checked>
									mW/cm<sup>2</sup>
					</label>
				</div>
			</td>
		</tr>
		<tr>
		    <td colspan="5" class="uvconline-table-td">
		        <div class="form-group" style="text-align:center">
		            <hr>
		            <input type="submit" id="uvconline-submit" class="btn btn-default" style="font-size:large">
	            </div>	
	        </td>	        
		</tr>
	</table>
	