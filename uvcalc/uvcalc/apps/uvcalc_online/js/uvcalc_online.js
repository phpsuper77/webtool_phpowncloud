$(document).ready(function(){
    
    var current_panel = "panel_lc";
	
	$('#panel_next').click(function(){
	    
	    if(current_panel == 'panel_lc'){
    	    $('#panel_lp').click();
	    }	    
	    else if(current_panel=="panel_lp"){
    	    $('#panel_ct').click();
	    }
	    else if(current_panel=="panel_ct"){
    	    $('#panel_rc').click();
	    }
	    else if(current_panel=="panel_rc"){
    	    $('#panel_mf').click();
	    }
	    else if(current_panel=="panel_mf"){
    	    $('#panel_sc').click();
	    }

	    
	});

	$('#panel_prev').click(function(){
	
	    if(current_panel=="panel_lp"){
    	    $('#panel_lc').click();
	    }
	    else if(current_panel=="panel_ct"){
    	    $('#panel_lp').click();
	    }
	    else if(current_panel=="panel_rc"){
    	    $('#panel_ct').click();
	    }
	    else if(current_panel=="panel_mf"){
    	    $('#panel_rc').click();
	    }
	    else if(current_panel=="panel_sc"){
    	    $('#panel_mf').click();
	    }
    	
		return false;
	});	
	
	
	$('#panel_lc').click(function(){
	
    	$('#lc_table').slideDown();
    	$('#panel_lc').css( "background-color","#428bca");
    	
    	$('#lp_table').slideUp();
    	$('#panel_lp').css( "background-color","#EBF4FA");
    	
    	$('#div_ct_table').slideUp();
    	$('#panel_ct').css( "background-color","#EBF4FA");
    	
    	
    	$('#rc_table').slideUp();
    	$('#panel_rc').css( "background-color","#EBF4FA");
    	
    	$('#mf_table').slideUp();
    	$('#panel_mf').css( "background-color","#EBF4FA");
    	
    	$('#sc_table').slideUp();
    	$('#panel_sc').css( "background-color","#EBF4FA");
    	
    	current_panel="panel_lc";
    	
		return false;
	});
	
	$('#panel_lp').click(function(){
	
    	//$('#lc_table').hide();
    	$('#lc_table').slideUp();
    	$('#panel_lc').css( "background-color","#EBF4FA");
    	
    	$('#lp_table').slideDown();
    	$('#panel_lp').css( "background-color","#428bca");
    	
    	$('#div_ct_table').slideUp();
    	$('#panel_ct').css( "background-color","#EBF4FA");
    	
    	$('#rc_table').slideUp();
    	$('#panel_rc').css( "background-color","#EBF4FA");
    	
    	$('#mf_table').slideUp();
    	$('#panel_mf').css( "background-color","#EBF4FA");
    	
    	$('#sc_table').slideUp();
    	$('#panel_sc').css( "background-color","#EBF4FA");
    	
    	current_panel="panel_lp";
    	
		return false;
	});	
	
	$('#panel_ct').click(function(){
	
    	$('#lc_table').slideUp();
    	$('#panel_lc').css( "background-color","#EBF4FA");
    	
    	$('#lp_table').slideUp();
    	$('#panel_lp').css( "background-color","#EBF4FA");
    	
    	$('#div_ct_table').slideDown();
    	$('#panel_ct').css( "background-color","#428bca");
    	
    	$('#rc_table').slideUp();
    	$('#panel_rc').css( "background-color","#EBF4FA");
    	
    	$('#mf_table').slideUp();
    	$('#panel_mf').css( "background-color","#EBF4FA");
    	
    	$('#sc_table').slideUp();
    	$('#panel_sc').css( "background-color","#EBF4FA");
    	
    	current_panel="panel_ct";
    	
		return false;
	});	
	
	$('#panel_rc').click(function(){
	
    	$('#lc_table').slideUp();
    	$('#panel_lc').css( "background-color","#EBF4FA");
    	
    	$('#lp_table').slideUp();
    	$('#panel_lp').css( "background-color","#EBF4FA");
    	
    	$('#div_ct_table').slideUp();
    	$('#panel_ct').css( "background-color","#EBF4FA");
    	
    	$('#rc_table').slideDown();
    	$('#panel_rc').css( "background-color","#428bca");
    	
    	$('#mf_table').slideUp();
    	$('#panel_mf').css( "background-color","#EBF4FA");
    	
    	$('#sc_table').slideUp();
    	$('#panel_sc').css( "background-color","#EBF4FA");
    	
    	current_panel="panel_rc";
    	
		return false;
	});
	
	$('#panel_mf').click(function(){
	
    	$('#lc_table').slideUp();
    	$('#panel_lc').css( "background-color","#EBF4FA");
    	
    	$('#lp_table').slideUp();
    	$('#panel_lp').css( "background-color","#EBF4FA");
    	
    	$('#div_ct_table').slideUp();
    	$('#panel_ct').css( "background-color","#EBF4FA");
    	
    	$('#rc_table').slideUp();
    	$('#panel_rc').css( "background-color","#EBF4FA");
    	
    	$('#mf_table').slideDown();
    	$('#panel_mf').css( "background-color","#428bca");
    	
    	$('#sc_table').slideUp();
    	$('#panel_sc').css( "background-color","#EBF4FA");
    	
    	current_panel="panel_mf";
    	
		return false;
	});
	
	$('#panel_sc').click(function(){
	
    	$('#lc_table').slideUp();
    	$('#panel_lc').css( "background-color","#EBF4FA");
    	
    	$('#lp_table').slideUp();
    	$('#panel_lp').css( "background-color","#EBF4FA");
    	
    	$('#div_ct_table').slideUp();
    	$('#panel_ct').css( "background-color","#EBF4FA");
    	
    	$('#rc_table').slideUp();
    	$('#panel_rc').css( "background-color","#EBF4FA");
    	
    	$('#mf_table').slideUp();
    	$('#panel_mf').css( "background-color","#EBF4FA");
    	
    	$('#sc_table').slideDown();
    	$('#panel_sc').css( "background-color","#428bca");
    	
    	current_panel="panel_sc";
    	
		return false;
	});
	
	$('#panel_lc').click();
	$('#ct_table_multilamp tr:last').after('<tr"><td class="uvconline-table-multilamp-td"><input type="button" style="border-radius:25px;font-size:25px;" value="-" class="ct_table_multilamp_delete_lamp"/></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-x[]" value="0.00"></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-y[]" value="0.00"></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-powerfactor[]" value="1.0"></td></tr><tr class="uvconline-table-multilamp-last"><td class="uvconline-table-multilamp-td" colspan="5"><input type="button" style="width:100%;border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;font-size: 20px;" value="+" class="ct_table_multilamp_add_lamp"/></td></tr>');
	$("#ct_table_multilamp").toggle(); 
	$("#ct_table_mpt").toggle(); 
	$("#ct_table_medium_pressure").toggle();
	
	$('#lamp-pressure-low').change(function (){
	    $("#ct_table_medium_pressure").hide();
	    return false;
	});
	$('#lamp-pressure-medium').change(function (){
	    $("#ct_table_medium_pressure").show();
	    return false;
	});
	
	$('#calculation-type-frd').change(function (){
	    $("#ct_table_multilamp").hide();
	    $("#ct_table_mpt").hide();
	    return false;
	});
	
	$('#calculation-type-multilamp').change(function (){
	    $("#ct_table_multilamp").show();
	    $("#ct_table_mpt").hide();
	    return false;
	});
	
	$('#calculation-type-avg').change(function (){
	    $("#ct_table_multilamp").hide();
	    $("#ct_table_mpt").show();
	    return false;
	});	
	
	/* Reactor Functions */
	$('#reactor-shape-circular').change(function (){

	    /* Things to hide */
	    $("#reactor-inner-width").hide();
	    $("#reactor-inner-height").hide();
	    $("#inner-width-group").hide();
	    $("#inner-height-group").hide();
	    /*Things to show*/
	    $("#inner-diameter-group").show();
	    $("#nbsp").show();
	    $("#reactor-inner-diameter").show();
	    
	    return false;
	});
	$('#reactor-shape-rectangular').change(function (){
	    
	    /* Things to show */
	    $("#reactor-inner-width").show();
	    $("#reactor-inner-height").show();
	    $("#inner-width-group").show();
	    $("#inner-height-group").show();
	    /*Things to hide*/
	    $("#inner-diameter-group").hide();
	    $("#nbsp").hide();
	    $("#reactor-inner-diameter").hide();
	    
	    return false;
	});
	
	/* Things to hide */
	$("#reactor-inner-width").hide();
	$("#reactor-inner-height").hide();
	$("#inner-width-group").hide();
	$("#inner-height-group").hide();
	/*Things to show*/
    $("#inner-diameter-group").show();
	$("#nbsp").show();
	$("#reactor-inner-diameter").show();
	
	/* Lamp Sleeve Material Functions */
	
	$('#lamp-sleeve-material-quartz').change(function (){
	    $('input[name=lamp-sleeve-ri]').val('1.516');
	    return false;
	});
	$('#lamp-sleeve-material-glass').change(function (){
	    $('input[name=lamp-sleeve-ri]').val('1.000');
	    return false;
	});
	$('#lamp-sleeve-material-other').change(function (){
        $('input[name=lamp-sleeve-ri]').val('');
	    return false;
	});
	
	/* Medium Functions */
	
	$('#medium-type-water').change(function (){
	    $('input[name=medium-ri]').val('1.372');
	    return false;
	});
	$('#medium-type-air').change(function (){
	    $('input[name=medium-ri]').val('1.000');
	    return false;
	});
	$('#medium-type-other').change(function (){
        $('input[name=medium-ri]').val('');
	    return false;
	});
	
	/* Submit Function */
	
	$('#uvconline-submit').click(function(){
	
    	//alert("Submitting the form");
    	
	   $("#output-data-div").hide();
    	var nr_td = $("#uvc-calculation-form input").length;
    	
    	//alert(nr_td);
    	
    	//alert($("#uvc-calculation-form").serialize());
    	$("#spinnerpanel").show();
    	$("#uvcalcpanel").hide();
    	
    	$.post( OC.filePath('uvcalc_online', 'ajax', 'uvcpost.php'), $("#uvc-calculation-form").serialize(), function( data ) {
			$("#output-data-link").attr('href','/index.php/apps/files/ajax/download.php?dir=%2FUVC-Scenarios&files='+data.message);
			$("#uvconline-spinner-div").hide();
			$("#uvconline-complete-div").show();
			return false;
		
        }).done(function(){
		alert('Done');	
			return false;
		})
		.fail(function(){
			
			alert("Error!" + data);
                        $("#uvconline-spinner-div").hide();
                        $("#uvcalcpanel").show();

			return false;
		})
		.always(function(){
			
			return false;
		});	;
    	
        $('#uvc-calculation-form input, #uvc-calculation-form select').each(
            function(index){  
                var input = $(this);
                //alert('Type: ' + input.attr('type') + 'Name: ' + input.attr('name') + 'Value: ' + input.val());
            }
        )
    	
		return false;
	});
	
	$('.scenario_delete').click(function(){
	
		var parent_tr = this.parentNode.parentNode;
			
		var jqxhr = $.post( OC.filePath('uvcalc_online', 'ajax', 'uvcscenario-delete.php'), { filename: $(this).attr("delete")} , function( data ) {
		
			if(data.message){

				try {
					parent_tr.remove();
				} catch (e) {
					alert("Error! File was deleted, but table row cannot be. "+e);
					return false;
				}
				
				alert(data.message);
				
			}
			
		})
		  .done(function() {
			//alert( "second success" );
		  })
		  .fail(function() {
			alert("Error! File could not be deleted.");
			return false;
		  })
		  .always(function() {
			//alert( "finished" );
		});
				
		return false;
		
	});
	
	$('.scenario_open').click(function(){
	

		
		var jqxhr = $.post( OC.filePath('uvcalc_online', 'ajax', 'uvcscenario.php'), { filename: $(this).attr("id")} , function( data ) {
		  
		  if(data.message){
			
			var obj;
			
			try {
				obj = JSON.parse(data.message);
			} catch (e) {
				alert("Error! Scenario file cannot be read. Please try again or create a new scenario.");
				return false;
			}
			
			//alert(obj.scenario.reactor.lamptypes.bulb_power);
			
			$('#lamp-power').attr("value",obj.scenario.reactor.lamptypes.bulb_power.toFixed(2));
			$('#lamp-efficiency').attr("value",obj.scenario.reactor.lamptypes.bulb_efficiency.toFixed(2));
			$('#lamp-arc-length').attr("value",(obj.scenario.reactor.lamptypes.arc_length*100.0).toFixed(2));
			$('#lamp-diameter').attr("value",(obj.scenario.reactor.lamptypes.sleeve_diameter*100.00).toFixed(2));
		
			if(obj.scenario.reactor.lamptypes.sleeve_material=='quartz'){
				$('#lamp-sleeve-material-quartz').click();
			}
			else if(obj.scenario.reactor.lamptypes.sleeve_material=='glass'){
				$('#lamp-sleeve-material-glass').click();
			}
			else{
				$('#lamp-sleeve-material-other').click();
			}
			
			$('#lamp-sleeve-ri').attr("value",obj.scenario.reactor.lamptypes.sleeve_RI.toFixed(3));
			
			if(obj.scenario.reactor.lamptypes.bulb_pressure=='medium'){
				$('#lamp-pressure-medium').click();
			}
			else{
				$('#lamp-pressure-low').click();
			}
			
			if(obj.scenario.calculation.type=='avg'){
				$('#calculation-type-avg').click();
			}
			else if(obj.scenario.calculation.type=='multilamp'){
				$('#calculation-type-multilamp').click();
			}
			else{
				$('#calculation-type-frd').click();
			}
			
			if(obj.scenario.calculation.output_radial_resolution=='0.01'){
				$('#output-resolution-1').click();
			}
			else if(obj.scenario.calculation.output_radial_resolution=='0.001'){
				$('#output-resolution-01').click();
			}
			else if(obj.scenario.calculation.output_radial_resolution=='0.002'){
				$('#output-resolution-02').click();
			}
			else if(obj.scenario.calculation.output_radial_resolution=='0.005'){
				$('#output-resolution-05').click();
			}
			else{
				$('#output-resolution-001').click();
			}
			
			if(obj.scenario.calculation.output_units=='wm2'){
				$('#output-units-wm2').click();
			}
			else{
				$('#output-units-mwcm2').click();
			}
    
			$('#scenario-name').attr("value",obj.scenario.name);

			if(obj.scenario.reactor.shape=='rectangular'){
				$('#reactor-shape-rectangular').click();
			}
			else{
				$('#reactor-shape-circular').click();
			}
			
			$('#reactor-length').attr("value",(obj.scenario.reactor.length*100.0).toFixed(2));
			$('#reactor-inner-diameter').attr("value",(obj.scenario.reactor.diameter*100.0).toFixed(2));
			$('#reactor-inner-width').attr("value",(obj.scenario.reactor.width*100.0).toFixed(2));
			$('#reactor-inner-height').attr("value",(obj.scenario.reactor.height*100.00).toFixed(2));
						
			if(obj.scenario.reactor.medium.type=='water'){
				$('#medium-type-water').click();
			}
			else if(obj.scenario.reactor.medium.typ=='air'){
				$('#medium-type-air').click();
			}
			else{
				$('#medium-type-other').click();
			}
			
			
			$('#medium-ri').attr("value",obj.scenario.reactor.medium.ri.toFixed(3));
			$('#medium-transmittance').attr("value",obj.scenario.reactor.medium.transmittance.toFixed(2));
			
			if(obj.scenario.reactor.medium.flow_units=='galminus'){
				$('#medium-flow-rate-units-gminus').click();
			}
			else if(obj.scenario.reactor.medium.flow_units=='galminimp'){
				$('#medium-flow-rate-units-gminimp').click();
			}
			else if(obj.scenario.reactor.medium.flow_units=='m3h'){
				$('#medium-flow-rate-units-m3h').click();
			}
			else{
				$('#medium-flow-rate-units-liters-per-minute').click();
			}
			
			$('#medium-flow-rate').attr("value",obj.scenario.reactor.medium.flow_rate.toFixed(2));
			$('#medium-transmittance-min').attr("value",obj.scenario.reactor.medium.transmittance_min.toFixed(2));
			$('#medium-transmittance-maximum').attr("value",obj.scenario.reactor.medium.transmittance_max.toFixed(2));
			$('#medium-trans-increment-step').attr("value",obj.scenario.reactor.medium.transmittance_step_value);
			
			$('#medium-trans-increment-step option:contains('+obj.scenario.reactor.medium.transmittance_step_value+')').attr("selected","selected");

			var index = 0;

			if(obj.scenario.reactor.lamptypes.lamp_center_nodes.length > 0){
			
				$('#ct_table_multilamp').empty();
			
				for (index = 0; index < obj.scenario.reactor.lamptypes.lamp_center_nodes.length; ++index) {
				
					$('#ct_table_multilamp').append('<tr"><td class="uvconline-table-multilamp-td"><input type="button" style="border-radius:25px;font-size:25px;" value="-" class="ct_table_multilamp_delete_lamp"/></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-x[]" value="'+(obj.scenario.reactor.lamptypes.lamp_center_nodes[index].x*100.0)+'"></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-y[]" value="'+(obj.scenario.reactor.lamptypes.lamp_center_nodes[index].y*100.0)+'"></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-powerfactor[]" value="'+obj.scenario.reactor.lamptypes.lamp_center_nodes[index].power_factor+'"></td></tr>');
		
				}
				
				$('#ct_table_multilamp').append('<tr class="uvconline-table-multilamp-last"><td class="uvconline-table-multilamp-td" colspan="5"><input type="button" style="width:100%;border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;font-size: 20px;" value="+" class="ct_table_multilamp_add_lamp"></td></tr>');
			
			}

    
	
	// Medium Pressure Data
	
	for (index = 1; index <= 20; index++){
	
		var ept_label = "#ept-"+index;
		var rle_label = "#rle-"+index;
		var lst_label = "#lst-"+index;
		var gef_label = "#gef-"+index;
		
		$('#ept-'+index).attr("value",obj.scenario.reactor.lamptypes.band_data[index -1].EPT.toFixed(3));
		$('#rle-'+index).attr("value",obj.scenario.reactor.lamptypes.band_data[index -1].RLE.toFixed(3));
		$('#lst-'+index).attr("value",obj.scenario.reactor.lamptypes.band_data[index -1].LST.toFixed(3));	
		$('#gef-'+index).attr("value",obj.scenario.reactor.lamptypes.band_data[index -1].GEF.toFixed(3));
		
	
	}

	
			

			$('#scenario_panel_open').attr("value","Open Scenario");
			
			$('#panel_lc').show();
			$('#panel_lp').show();
    	    $('#panel_ct').show();
    	    $('#panel_rc').show();
    	    $('#panel_mf').show();
    	    $('#panel_sc').show();
			$('#panel_prev').show();
			$('#panel_next').show();
			
			$("#uvcalcpanel").show();
			$("#scenariopanel").hide();
			
		  }

		})
		  .done(function() {
			//alert( "second success" );
		  })
		  .fail(function() {
			alert("Error! Scenario file cannot be read. Please try again or create a new scenario.");
			return false;
		  })
		  .always(function() {
			//alert( "finished" );
		});
		
		return false;
	});
	
	$('#scenario_panel_open').click(function(){
	
		if($(this).attr("value")=="Open Scenario"){
			$("#uvcalcpanel").hide();
			$("#scenariopanel").show();
			$(this).attr("value","New Scenario");
			
			$('#panel_lc').hide();
    	    $('#panel_lp').hide();
    	    $('#panel_ct').hide();
    	    $('#panel_rc').hide();
    	    $('#panel_mf').hide();
    	    $('#panel_sc').hide();
			$('#panel_prev').hide();
			$('#panel_next').hide();
	    
		}
		else if($(this).attr("value")=="New Scenario"){
			$("#uvcalcpanel").show();
			$("#scenariopanel").hide();
			$(this).attr("value","Open Scenario");
			
			$('#panel_lc').show();
			$('#panel_lp').show();
    	    $('#panel_ct').show();
    	    $('#panel_rc').show();
    	    $('#panel_mf').show();
    	    $('#panel_sc').show();
			$('#panel_prev').show();
			$('#panel_next').show();
		}
		return false;
	});
	
	/* Things to hide */
	$("#spinnerpanel").hide();
	$("#uvconline-complete-div").hide();
	$("#scenariopanel").hide();
	
	
	

	OCCategories.app = 'uvcalc_owncloud';
});

$(document).on('click','.ct_table_multilamp_delete_lamp', function()
{
    $(this).closest("tr").remove(); 
    return false;
});

$(document).on('click','.ct_table_multilamp_add_lamp', function()
{	
    $('#ct_table_multilamp tr:last').before('<tr"><td class="uvconline-table-multilamp-td"><input type="button" style="border-radius:25px;font-size:25px;" value="-" class="ct_table_multilamp_delete_lamp"/></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-x[]" value="0.00"></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-y[]" value="0.00"></td><td class="uvconline-table-multilamp-td"><input type="text" class="multilamp-coordinate-text" name="lamp-coordinate-powerfactor[]" value="1.0"></td></tr>');
	return false;
	    
});
