<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       config.tpl                                                  ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################


if(isset($_GET['c']) && $_GET['c'] == 1) {
echo "<div class=\"headline\"><span class=\"f10 c5\">Error creating constant.php check cmod.</span></div><br>";
}
?>
<form action="process.php" method="post" id="dataform">



<!-- <LEFT BOX - SERVER RELATED> -->
<div class="lbox">
	<span class="f10 c">SERVER RELATED</span>
	<table><tr>
	<td><span class="f9 c6">Server name:</span></td><td width="140"><input type="text" name="servername" id="servername" value="TravianX"></td></tr><tr>
	<td><span class="f9 c6">Server speed:</span></td><td><input name="speed" type="text" id="speed" value="1"></td></tr><tr>
	<td><span class="f9 c6">Troop speed:</span></td><td width="140"><input type="text" name="incspeed" id="incspeed" value="2"></td></tr><tr>
	<td><span class="f9 c6">World size:</span></td><td><input name="wmax" type="text" id="wmax" value="25"></td></tr><tr></tr>
	<td><span class="f9 c6">Domain:</span></td><td><input name="domain" type="text" id="domain" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td></tr><tr></tr>
	<td><span class="f9 c6">Homepage:</span></td><td><input name="homepage" type="text" id="homepage" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td></tr><tr></tr>
	<td><span class="f9 c6">Language:</span></td><td><select name="lang">
		<option value="en" selected="selected">English</option></select></td></tr>
	<td><span class="f9 c6">Beginners protection lenght:</span></td><td><input name="beginner" type="text" id="autodeltime" value="3600*12" size="15"></td></tr><tr>
	<tr><td><span class="f9 c6">Plus account lenght:</span></td><td><select name="plus_time">
	  <option value="3600*12">12 hours</option>
	  <option value="3600*24">1 day</option>
	  <option value="3600*24*2">2 days</option>
	  <option value="3600*24*3">3 days</option>
	  <option value="3600*24*4">4 days</option>
	  <option value="3600*24*5">5 days</option>
	  <option value="3600*24*6">6 days</option>
	  <option value="3600*24*7" selected="selected">7 days</option></select></td></tr>
	  <tr><td><span class="f9 c6">+25% production lenght:</span></td><td><select name="plus_production">
	  <option value="3600*12">12 hours</option>
	  <option value="3600*24">1 day</option>
	  <option value="3600*24*2">2 days</option>
	  <option value="3600*24*3">3 days</option>
	  <option value="3600*24*4">4 days</option>
	  <option value="3600*24*5">5 days</option>
	  <option value="3600*24*6">6 days</option>
	  <option value="3600*24*7" selected="selected">7 days</option></select></td></tr>
	  </tr>
      <td><span class="f9 c6">Tourn Threshold:</span></td><td width="140"><input type="text" name="ts_threshold" id="ts_threshold" value="30"></td></tr><tr>
      <tr><td><span class="f9 c6">Great Workshop:</span></td><td><select name="great_wks">
      <option value="fale">False</option>
      <option value="true" selected="selected">True</option></select></td></tr>
      </tr>
      <tr><td><span class="f9 c6">WW Statistics:</span></td><td><select name="ww">
      <option value="fale">False</option>
      <option value="true" selected="selected">True</option></select></td></tr>
      </tr>
	</table>
</div>
<!-- </LEFT BOX - SERVER RELATED> -->



<!-- <RIGHT BOX - SQL RELATED> -->
<div class="rbox">
	<span class="f10 c">SQL RELATED</span>
	<table>
	<tr><td><span class="f9 c6">Hostname:</span></td><td><input name="sserver" type="text" id="sserver" value="localhost"></td></tr>
	<tr><td><span class="f9 c6">Username:</span></td><td><input name="suser" type="text" id="suser" value=""></td></tr>
	<tr><td><span class="f9 c6">Password:</span></td><td><input type="text" name="spass" id="spass"></td></tr>
	<tr><td><span class="f9 c6">DB name:</span></td><td><input type="text" name="sdb" id="sdb"></td></tr>
	<tr><td><span class="f9 c6">Prefix:</span></td><td><input type="text" name="prefix" id="prefix" value="s1_"></td>
	<tr><td><span class="f9 c6">Type:</span></td><td><select name="connectt">
	  <option value="0" selected="selected">MYSQL</option>
	  <option value="1" disabled="disabled">MYSQLi</option>
	</select></td></tr>
	</table>
</div>
<!-- </RIGHT BOX - SQL RELATED> -->


<!-- <LEFT BOX - ADMIN RELATED> -->
<div class="lbox">
	<span class="f10 c">ADMIN RELATED</span>
	<table>
	<tr><td><span class="f9 c6">Admin Name:</span></td><td width="140"><input type="text" name="aname" id="aname"></td></tr>
	<tr><td><span class="f9 c6">Admin Email:</span></td><td><input name="aemail" type="text" id="aemail"></td></tr>
	<tr><td><span class="f9 c6">Admin rank:</span></td><td><select name="admin_rank">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	</table>
</div>
<!-- </LEFT BOX - ADMIN RELATED> -->


<!-- <RIGHT BOX - GPACK RELATED> -->
<div class="rbox">
	<span class="f10 c">GPACK RELATED</span>
	<table>
	
	<tr><td><span class="f9 c6">GPack:</span></td><td><select name="gpack">
	  <option value="false" selected="selected">No</option>
	  <option value="true" disabled="disabled">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">GPack Design:</span></td><td><select name="gp_locate">
	  <option value="gpack/travian_default/" selected="selected">Travian Default
	  <option value="gpack/travianx_v1/">TravianX v1 by Dzoki</option></select></td></tr>
	
	</table>
</div>
<!-- </RIGHT BOX - GPACK RELATED> -->

 <!-- <LEFT BOX - NEWSBOX OPTIONS> -->
	 
	  <div class="lbox">
	<span class="f10 c">NEWSBOX OPTIONS</span>
	<table>
	<tr><td><span class="f9 c6">Newsbox 1:</span></td><td><select name="box1">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></td></tr>
	  	<tr><td><span class="f9 c6">Newsbox 2:</span></td><td><select name="box2">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></td></tr>
	  	<tr><td><span class="f9 c6">Newsbox 3:</span></td><td><select name="box3">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></td></tr>
	  	<tr><td><span class="f9 c6">Home 1:</span></td><td><select name="home1">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></td></tr>
	  	<tr><td><span class="f9 c6">Home 2:</span></td><td><select name="home2">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></td></tr>
	  	<tr><td><span class="f9 c6">Home 3:</span></td><td><select name="home3">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></td></tr>
	  </table></div>
	  <!-- </LEFT BOX - NEWSBOX OPTIONS> -->


<!-- <LEFT BOX - LOG RELATED> -->
<div class="lbox">
	<span class="f10 c">LOG RELATED</span>
	<table>
	
	<tr><td><span class="f9 c6">Log Building:</span></td><td><select name="log_build">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Log Tech:</span></td><td><select name="log_tech">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Log Login:</span></td><td><select name="log_login">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Log Gold:</span></td><td><select name="log_gold_fin">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Log Admin:</span></td><td><select name="log_admin">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option	</select></td></tr>
	<tr><td><span class="f9 c6">Log War:</span></td><td><select name="log_war">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Log Market:</span></td><td><select name="log_market">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Log Illegal:</span></td><td><select name="log_illegal">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	  
	</table>
</div>
<!-- </LEFT BOX - LOG RELATED> -->



<!-- <RIGHT BOX - EXTRA OPTIONS> -->
<div class="rbox">
	<span class="f10 c">EXTRA OPTIONS</span>
	<table>
	<tr><td><span class="f9 c6">Quest:</span></td><td><select name="quest">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Activate:</span></td><td><select name="activate">
	  <option value="false" selected="selected">No</option>
	  <option value="true">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Subdomain:</span></td><td><select name="subdom">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<tr><td><span class="f9 c6">Limit Mailbox:</span></td><td><select name="limit_mailbox">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></td></tr>
	<td><span class="f9 c6">Max mails:</span></td><td><input name="max_mails" type="number" id="max_mails" value="30" size="15"></td></tr><tr></tr>
	<tr><td><span class="f9 c6">Demolish - lvl required:</span></td><td><select name="demolish">
	  <option value="5">5</option>
	  <option value="10" selected="selected">10</option>
	  <option value="15">15</option>
	  <option value="20">20</option></select></td></tr>
	<tr><td><span class="f9 c6">Village Expand:</span></td><td><select name="village_expand">
	  <option value="1" selected="selected">Slow</option>
	  <option value="0">Fast</option>
	<tr><td><span class="f9 c6">Error Reporting:</span></td><td><select name="error">
	  <option value="error_reporting (E_ALL ^ E_NOTICE);" selected="selected">Yes</option>
	  <option value="error_reporting (0); ">No</option>

	  <!--<td><span class="f9 c6">Auto del. User:</span></td><td><select name="autodel">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option>
	</select>
	</td></tr><tr>
	<td><span class="f9 c6">Auto del. Users (days):</span></td><td><input name="autodeltime" type="text" id="autodeltime" value="3600*24*7" size="15"></td></tr><tr>
</tr>
<tr>
<tr>
		<td><span class="f9 c6">Track User:</span></td><td><select name="trackusers">
	  <option value="false" selected="selected">No</option>
	  <option value="true">Yes</option>
	</select>
	</td></tr>
	<tr>
	<td><span class="f9 c6">User Timeout(min):</span></td><td><input name="timeout" type="text" id="timeout" value="10" size="15"></td></tr><tr>
	-->
	  </table>	
	  <!-- </RIGHT BOX - EXTRA OPTIONS> -->
	  
	  
	  <br />
	<input type="submit" name="Submit" id="Submit" value="Submit">
	<input type="hidden" name="subconst" value="1">
	</form>
</div>

