<div id="div_ct_table">
    <table class="uvconline-table" width="100%" id="ct_table">
    	<tr>
    		<th colspan="6" class="uvconline-table-th">
    			<div><label for="reactor-definition">Calculation Type</label></div>
    		</th>
    	</tr>
    	<tr>
    	    <td class="uvconline-table-td">
    			<input type="radio" name="calculation-type" id="calculation-type-frd" value="frd" checked onclick="showit('frd-br');hideit('mpt-group-maxt-title');hideit('mpt-group-maxt');hideit('mpt-group-inc-title');hideit('mpt-group-inc');hideit('lamp-coordinates');">
            </td>
            <td class="uvconline-table-td">
                Single Lamp
    		</td>
    		<td>
    			<input type="radio" name="calculation-type" id="calculation-type-multilamp" value="multilamp" onclick="hideit('frd-br');hideit('mpt-group-maxt-title');hideit('mpt-group-maxt');hideit('mpt-group-inc-title');hideit('mpt-group-inc');showit('lamp-coordinates');">
            </td>
            <td class="uvconline-table-td">
                <div id="calculation-type-multilamp-label">Multiple Lamp</div>
    		</td>
    		<td class="uvconline-table-td">
                <input type="radio" name="calculation-type" id="calculation-type-avg" value="avg" onclick="showit('frd-br');showit('mpt-group-maxt-title');showit('mpt-group-maxt');showit('mpt-group-inc-title');showit('mpt-group-inc');hideit('lamp-coordinates');">
            </td>
            <td class="uvconline-table-td">
                Multiple % Transmittance
    		</td>
    	</tr>
    </table>
    
    <table class="uvconline-table" width="100%" id="ct_table_mpt">
    	<tr>
    		<th class="uvconline-table-th" colspan="2">Transmittance</th>
    	</tr>
    	<tr>
    		<td class="uvconline-table-td"><label>Min. %T</label></td>
    		<td class="uvconline-table-td"><input type="text" style="width:75px" class="form-control" name="medium-transmittance-min" id="medium-transmittance-min" value="80.00"></td>
    	</tr> 
		<tr>
    		<td class="uvconline-table-td"><label>Max. %T</label></td>
    		<td class="uvconline-table-td"><input type="text" style="width:75px" class="form-control" name="medium-transmittance-maximum" id="medium-transmittance-maximum" value="100.00"></td>
    	</tr> 
    	<!--<tr>
    		<td class="uvconline-table-td"><label>Max. %T</label></td>
    		<td class="uvconline-table-td"><input type="text" style="width:75px" class="form-control" name="medium-transmittance-max" id="medium-transmittance-max" value="100.00"></td>
    	</tr>-->
    	<tr>
    		<td class="uvconline-table-td"><label>Increment</label></td>
    		<td class="uvconline-table-td">
    			<select class="form-control" id="medium-trans-increment-step" name="medium-trans-increment-step" >
    					<option></option>
    					<option>0.5</option>
    					<option>1</option>
    					<option>2</option>
    					<option>5</option>
    					<option>10</option>							  
    			</select>
    		</td>
    	</tr>
    </table>	
    
    <table class="uvconline-table" width="100%" id="ct_table_multilamp">
    	<!--<tr>
    		<th colspan="6" class="uvconline-table-th">
    			<div><label for="reactor-definition">Lamp Coordinates</label></div>
    		</th>
    	</tr>-->
    	<tr>
    		<th width="16%" class="uvconline-table-th" style="border-top-left-radius:25px;border-top-right-radius:0px">
    		    Delete	
    		</th>
    		<th width="16%" class="uvconline-table-th" style="border-radius:0px">
    		    x (cm)	
    		</th>
    		<th width="16%" class="uvconline-table-th" style="border-radius:0px">
    		    y (cm)	
    		</th>
    		<th width="16%" class="uvconline-table-th" style="border-top-left-radius:0px;border-top-right-radius:25px">
    		    Power Factor	
    		</th>
    	</tr>
    </table>
</div>
