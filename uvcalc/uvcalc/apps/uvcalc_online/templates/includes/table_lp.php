<div id="lp_table">
<table class="uvconline-table" width="100%">
    <tr>
        <th colspan="2" class="uvconline-table-th"><label for="lamp-pressure">Lamp Pressure</label></th>
    </tr> 
	<tr>
	    <td class="uvconline-table-td">
	        <div class="radio">
                <input type="radio" name="lamp-pressure" id="lamp-pressure-low" value="low" checked>
						Low
            </div>
        </td>
        <td class="uvconline-table-td" id="lamp-pressure-medium-td">
            <div class="radio">
                <input type="radio" name="lamp-pressure" id="lamp-pressure-medium" value="medium">
						Medium <button type="button" style="border-radius:25px;background-color:transparent;" class="btn btn-default" onclick="alert('Medium-pressure (MP) UV lamps emit over a braod range of wavelengths, as opposed to a low-pressure (LP) UV lamp, which emits principally at 253.7 nm. The way UVCalc® does a calculation for the UV reactor with MP lamps is to divide the wavelength range from 200 – 300 nm into twenty 5 nm bands (numbered 1 to 20).\n\nThe user must input the average experimental percent transmittance (EPT) for each band. UVCalc® then carries out twenty calculations, one for each EPT. The user must also enter (or accept the default values) values for the Relative Lamp Emittance (RLE), the Lamp Sleeve Transmittance (LST) and the Germicidal Factor (GEF). UVCalc® then calculates a weighted average fluence rate distribution, with the weighting factor being RLE * LST * GEF.\n\nThe RLE is the average relative lamp emittance in each band (normalized so that all the RLE values add up to 1.000). This data should be provided by the lamp manufacturer.\n\nThe LST (should be obtained from the sleeve manufacturer) is the average sleeve transmittance in each band. Note that if the sleeve is quartz, the contribution to the transmittance from reflection should be added to the actual transmittance values in air. For example, if the experimental transmittance in air is 0.88, the value that should be entered as the LST value is 0.88 + 0.08 = 0.96. The 0.08 value is that contributed by reflection at each quartz/air interface.\n\nThe GEF values should be determined from the action spectrum (normalized to 1.00 at 254 nm) for the microorganism of interest. The default values are the relative absorbance of DNA (normalized to 1.00 at 254 nm).')"><span class="glyphicon glyphicon-question-sign">?</span></button>
            </div>
        </td>
    </tr>
</table>	

<table class="uvconline-table" width="100%" id="ct_table_medium_pressure">
    <tbody>
    	<tr id="ct_table_medium_pressure_header">
    		<th width="10%" style="text-align:center">#</th>
    		<th width="10%" style="text-align:center">EPT</th>
    		<th width="10%" style="text-align:center">RLE</th>
    		<th width="10%" style="text-align:center">LST</th>
    		<th width="10%" style="text-align:center">GEF</th>
    	</tr>
    	<tr id="mp-band-set-1">
    		<td width="10%" class="uvconline-table-multilamp-td">1</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-1" id="ept-1" value="53.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-1" id="rle-1" value="0.01662"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-1" id="lst-1" value="0.60"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-1" id="gef-1" value="1.26"></td>
    	</tr>
    	<tr id="mp-band-set-2">
    	<td width="10%" class="uvconline-table-multilamp-td">2</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-2" id="ept-2" value="69.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-2" id="rle-2" value="0.02282"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-2" id="lst-2" value="0.65"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-2" id="gef-2" value="1.130"></td>
    	</tr>
    	<tr id="mp-band-set-3">
    	<td width="10%" class="uvconline-table-multilamp-td">3</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-3" id="ept-3" value="76.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-3" id="rle-3" value="0.02991"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-3" id="lst-3" value="0.69"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-3" id="gef-3" value="0.910"></td>
    	</tr>
    	<tr id="mp-band-set-4">
    	<td width="10%" class="uvconline-table-multilamp-td">4</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-4" id="ept-4" value="79.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-4" id="rle-4" value="0.03855"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-4" id="lst-4" value="0.73"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-4" id="gef-4" value="0.740"></td>
    	</tr>
    	<tr id="mp-band-set-5">
    	<td width="10%" class="uvconline-table-multilamp-td">5</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-5" id="ept-5" value="81.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-5" id="rle-5" value="0.04341"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-5" id="lst-5" value="0.77"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-5" id="gef-5" value="0.520"></td>
    	</tr>
    	<tr id="mp-band-set-6">
    	<td width="10%" class="uvconline-table-multilamp-td">6</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-6" id="ept-6" value="83.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-6" id="rle-6" value="0.04331"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-6" id="lst-6" value="0.81"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-6" id="gef-6" value="0.410"></td>
    	</tr>
    	<tr id="mp-band-set-7">
    	<td width="10%" class="uvconline-table-multilamp-td">7</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-7" id="ept-7" value="84.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-7" id="rle-7" value="0.04029"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-7" id="lst-7" value="0.85"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-7" id="gef-7" value="0.420"></td>
    	</tr>
    	<tr id="mp-band-set-8">
    	<td width="10%" class="uvconline-table-multilamp-td">8</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-8" id="ept-8" value="86.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-8" id="rle-8" value="0.04907"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-8" id="lst-8" value="0.88"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-8" id="gef-8" value="0.500"></td>
    	</tr>
    	<tr id="mp-band-set-9">
    	<td width="10%" class="uvconline-table-multilamp-td">9</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-9" id="ept-9" value="87.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-9" id="rle-9" value="0.01906"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-9" id="lst-9" value="0.90"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-9" id="gef-9" value="0.630"></td>
    	</tr>	
    	<tr id="mp-band-set-10">
    	<td width="10%" class="uvconline-table-multilamp-td">10</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-10" id="ept-10" value="88.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-10" id="rle-10" value="0.06271"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-10" id="lst-10" value="0.91"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-10" id="gef-10" value="0.820"></td>
    	</tr>
    	<tr id="mp-band-set-11">
    		<td width="10%" class="uvconline-table-multilamp-td">11</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-11" id="ept-11" value="89.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-11" id="rle-11" value="0.14524"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-11" id="lst-11" value="0.92"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-11" id="gef-11" value="0.970"></td>
    	</tr>
    	<tr id="mp-band-set-12">
    	<td width="10%" class="uvconline-table-multilamp-td">12</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-12" id="ept-12" value="90.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-12" id="rle-12" value="0.08268"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-12" id="lst-12" value="0.93"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-12" id="gef-12" value="1.050"></td>
    	</tr>
    	<tr id="mp-band-set-13">
    	<td width="10%" class="uvconline-table-multilamp-td">13</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-13" id="ept-13" value="90.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-13" id="rle-13" value="0.12616"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-13" id="lst-13" value="0.94"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-13" id="gef-13" value="1.060"></td>
    	</tr>
    	<tr id="mp-band-set-14">
    	<td width="10%" class="uvconline-table-multilamp-td">14</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-14" id="ept-14" value="91.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-14" id="rle-14" value="0.04614"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-14" id="lst-14" value="0.95"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-14" id="gef-14" value="1.010"></td>
    	</tr>
    	<tr id="mp-band-set-15">
    	<td width="10%" class="uvconline-table-multilamp-td">15</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-15" id="ept-15" value="91.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-15" id="rle-15" value="0.02683"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-15" id="lst-15" value="0.955"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-15" id="gef-15" value="0.890"></td>
    	</tr>
    	<tr id="mp-band-set-16">
    	<td width="10%" class="uvconline-table-multilamp-td">16</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-16" id="ept-16" value="91.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-16" id="rle-16" value="0.07391"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-16" id="lst-16" value="0.96"></td>
    		<td class="uvconline-table-multilamp-td"d><input type="text" class="medium-pressure-text" name="gef-16" id="gef-16" value="0.740"></td>
    	</tr>
    	<tr id="mp-band-set-17">
    	<td width="10%" class="uvconline-table-multilamp-td">17</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-17" id="ept-17" value="92.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-17" id="rle-17" value="0.01263"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-17" id="lst-17" value="0.965"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-17" id="gef-17" value="0.560"></td>
    	</tr>
    	<tr id="mp-band-set-18">
    	<td width="10%" class="uvconline-table-multilamp-td">18</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-18" id="ept-18" value="92.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-18" id="rle-18" value="0.02150"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-18" id="lst-18" value="0.97"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-18" id="gef-18" value="0.390"></td>
    	</tr>
    	<tr id="mp-band-set-19">
    	<td width="10%" class="uvconline-table-multilamp-td">19</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-19" id="ept-19" value="92.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-19" id="rle-19" value="0.02119"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-19" id="lst-19" value="0.975"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-19" id="gef-19" value="0.220"></td>
    	</tr>	
    	<tr id="mp-band-set-20">
    	<td width="10%" class="uvconline-table-multilamp-td">20</td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="ept-20" id="ept-20" value="92.0"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="rle-20" id="rle-20" value="0.07798"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="lst-20" id="lst-20" value="0.98"></td>
    		<td width="10%" class="uvconline-table-multilamp-td"><input type="text" class="medium-pressure-text" name="gef-20" id="gef-20" value="0.095"></td>
    	</tr>		
	</tbody>
</table>
</div>