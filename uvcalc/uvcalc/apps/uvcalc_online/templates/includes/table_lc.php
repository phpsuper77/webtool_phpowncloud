<table id="lc_table" class="uvconline-table" width="100%" style="">
    <tr>
    	<th colspan="3" class="uvconline-table-th"><label for="lamp-parameters">Lamp Parameters</label></th> 
    </tr>
    <tr>
    	<td colspan="2" class="uvconline-table-td"><label for="lamp-power">Power (W)</label></td> 
    	<td><input type="text" style="width:75px" class="form-control" name="lamp-power" id="lamp-power" value="240.00" onkeypress="return isNumberKey(event)"></td>
    </tr>
    <tr> 	
    	<td colspan="2" class="uvconline-table-td"><label for="lamp-efficiency">Efficiency (%)</label></td>
    	<td><input type="text" style="width:75px" class="form-control" name="lamp-efficiency" id="lamp-efficiency" value="30.00" onkeypress="return isNumberKey(event)"></td>
    </tr>
    <tr>
    	<td colspan="2" class="uvconline-table-td"><label for="lamp-arc-length">Arc Length (cm)</label></td> 
    	<td><input type="text" style="width:75px" class="form-control" name="lamp-arc-length" id="lamp-arc-length" value="200.00" onkeypress="return isNumberKey(event)"></td> 	
    </tr>
    <tr>
    	<td colspan="2" class="uvconline-table-td"><label for="lamp-diameter">Sleeve Diameter (cm)</label></td>
    	<td><input type="text" style="width:75px" class="form-control" name="lamp-diameter" id="lamp-diameter" value="2.00" onkeypress="return isNumberKey(event)"></td> 
    </tr>
    <tr>
		<th colspan="3" class="uvconline-table-th" style="border-radius:0px"><label for="lamp-sleeve-material">Lamp Sleeve Material</label></th>
	</tr>
	<tr>
	    <td>
			<div class="radio">
    			<label class="radio inline">
    			    <input type="radio" name="lamp-sleeve-material" id="lamp-sleeve-material-quartz" value="quartz" checked>
    						Quartz
    			</label>
			</div>
		</td>
		<td>
			<div class="radio">
			    <label class="radio inline">
				    <input type="radio" name="lamp-sleeve-material" id="lamp-sleeve-material-glass" value="glass">
						Air
					</label>
			</div>
		</td>
		<td>
			<div class="radio">
			    <label class="radio inline">
				    <input type="radio" name="lamp-sleeve-material" id="lamp-sleeve-material-other" value="other">
						Other
				</label>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
		    <label for="lamp-sleeve-ri">Lamp Sleeve Refractive Index</label>
        </td>
        <td>
            <input type="text" style="width:75px" class="form-control" name="lamp-sleeve-ri" id="lamp-sleeve-ri" value="1.516" onkeypress="return isNumberKey(event)">
        </td>
	</tr>
</table>