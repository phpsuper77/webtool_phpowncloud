<div id="uvconline-page" style="background-color:#EBF4FA;height:50px;width:100%">
    <div id="notification" style="display:none;"></div>
    <div id="wrapper" style="text-align: center"> 
        <div id="controls" style="z:0;left:0px;top:45px;display: inline-block;background-color:#fff; height:50px;">
        	<form id="uvccontrol">
        		<input type="button" style="margin-top:10px;border-top-left-radius: 25px; border-bottom-left-radius: 25px; font-size: 20px;" value="&nbsp;&lt;&nbsp;" id="panel_prev"/>
				<input type="button" style="border-radius: 0px; font-size: 20px; background-color:#ddd" value="Open Scenario" id="scenario_panel_open"/>
        		<input type="button" style="border-radius: 0px; font-size: 20px;" value="Lamp Config" id="panel_lc"/>	
        		<input type="button" style="border-radius: 0px; font-size: 20px;" value="Lamp Pressure" id="panel_lp"/>	
        		<input type="button" style="border-radius: 0px; font-size: 20px;" value="Calc Type" id="panel_ct"/>	
        		<input type="button" style="border-radius: 0px; font-size: 20px;" value="Reactor Config" id="panel_rc"/>	
        		<input type="button" style="border-radius: 0px; font-size: 20px;" value="Medium and Flow" id="panel_mf"/>	
        		<input type="button" style="border-radius: 0px; font-size: 20px;" value="Submit Calc" id="panel_sc"/>
        		<input type="button" style="border-top-right-radius: 25px; border-bottom-right-radius: 25px; font-size: 20px;" value="&nbsp;&gt;&nbsp;" id="panel_next"/>
        	</form>
        </div>
        
    </div>
    <div id="fullcalendar"></div>
    <div id="dialog_holder"></div>
    <div id="appsettings" class="popup topright hidden"></div>
    
</div>

<div id="uvcalcpanel" style="margin-left:5%;margin-top:1%;height:90%;width:90%;border-radius:25px;background-color:#EBF4FA;">
    <div style="width:100%;text-align: center">
        <div id="uvconline-table-div" class="uvconline-table-div">
            <form id="uvc-calculation-form"  action="<?php print_unescaped(OCP\Util::linkTo('uvcalc_online', 'ajax/submit-scenario.php')); ?>" method="post" enctype="multipart/form-data" target="submit_scenario_target">
            <?php include('includes/table_lc.php');?>
            <?php include('includes/table_lp.php');?>
            <?php include('includes/table_ct.php');?>
            <?php include('includes/table_rc.php');?>
            <?php include('includes/table_mf.php');?>
            <?php include('includes/table_sc.php');?>
            </form>
		</div>
    </div>
</div>
<?php include('includes/table_scenario.php');?>
<div id="spinnerpanel" style="margin-left:25%;margin-top:1%;height:90%;width:50%;border-radius:25px;background-color:#EBF4FA;">
    <div style="height:100%; width:100%; text-align: center;vertical-align:middle;">
    <table height="100%" style="width:100%">
        <tr><td height="30%" width="5%">&nbsp;</td></tr>
        <tr><td style="height:20%; text-align: center;vertical-align:middle;" height="20%" >
            <div style="height:100%; text-align: center;vertical-align:middle;display:inline;" id="uvconline-spinner-div">
    		    <img class="gif" src="<?php print_unescaped(OCP\Util::imagePath('calendar', 'loading.gif')); ?>" /> Please wait, submission in progress...<br><br>
<div>Please do not close this tab or navigate away from this page until your calculation is complete. You may safely use other browser tabs and applications while your calculation is in progress.</div><br><br>
<div>For more complex calculations, including large reactors, significant numbers of lamps, and medium pressure lamps, processing could take several minutes. If processing continues for more than 10 minutes please contact support@uvcalc.com.</div>
    	    </div>
    	     <div style="padding-bottom: 50px; height:100%; text-align: center;vertical-align:middle;display:inline;" id="uvconline-complete-div">
<div style="padding-bottom: 50px;">Submission complete.<br></div> 
<div style="padding-bottom: 50px;"><a id="output-data-link" href="/index.php/apps/files?dir=%2FUVC-Scenarios">DOWNLOAD YOUR NEW DATA HERE</a>.<br></div>
<div style="padding-bottom: 50px;">To submit another calculation <a href="<?php print_unescaped($_SERVER["REQUEST_URI"]); ?>">CLICK HERE</a>.<br></div>
    	    </div>
    	</td></tr>
    	<tr><td height="50%" width="5%">&nbsp;</td></tr>
	</table>
    </div>
</div>
		




