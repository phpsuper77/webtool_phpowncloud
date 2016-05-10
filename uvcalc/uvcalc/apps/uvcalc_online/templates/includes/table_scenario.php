<?php

$user_scenario_directory = OC_Config::getValue( "datadirectory", OC::$SERVERROOT."/data" )."/".OCP\USER::getUser()."/files/UVC-Scenarios/json-in/";

$user_scenario_files = scandir($user_scenario_directory);

?>

<div id="scenariopanel" style="margin-left:5%;margin-top:1%;height:90%;width:90%;border-radius:25px;background-color:#EBF4FA;">
    <div style="height:100%; width:100%; text-align: center;vertical-align:middle;">
    <table style="margin-left:25%;width:50%">
	<tr>
	<th width="5%">&nbsp;</th>
	<th style="text-align: center;vertical-align:middle;border: solid 1px black" >Scenario Name</th>
	<th style="text-align: center;vertical-align:middle;border: solid 1px black" >Date Modified</th>
	<th width="5%">&nbsp;</th>
	    <?php 
		foreach($user_scenario_files as $user_scenario_file){
		
			if(!is_dir($user_scenario_file))
			{
			
				$json_file = $user_scenario_directory."/".$user_scenario_file;
				$json = json_decode(file_get_contents($json_file));
				
			?>
				<tr>
				
				<td width="5%"><input type="button" style="border-radius: 25px; font-size: 12px;" value="OPEN" class="scenario_open"/ id="<?php echo $user_scenario_file ?>"></td>
				<td style="text-align: center;vertical-align:middle;border: solid 1px black" >
				<?php 

					printf("%s",$json->scenario->name);
							 
				?>   
				</td>
				<td style="text-align: center;vertical-align:middle;border: solid 1px black">
				<?php 
				
					$datetime = date ("F d Y H:i:s", filemtime($json_file));
										
					printf("%s",$datetime);

							 
				?>  
				</td>
				<td width="5%"><input type="button" style="border-radius: 0px; font-size: 12px;" value="DELETE" class="scenario_delete"/ delete="<?php echo $user_scenario_file ?>"></td>
				
				</tr>
			<?php 
			}
		} 
		?>
	</table>
    </div>
</div>