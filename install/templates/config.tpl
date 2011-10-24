<?php

if(isset($_GET['c']) && $_GET['c'] == 1) {
echo "<div class=\"headline\"><span class=\"f10 c5\">Error creating constant.php check cmod.</span></div><br>";
}
?>
<form action="process.php" method="post" id="dataform">

<style>

    span.c3 {position: absolute;right:10%}
    span.c2 {position: absolute;left:10%}
    
</style>
<div id="content" class="login">
<!-- <LEFT BOX - SERVER RELATED> -->

	<span><center><strong>SERVER RELATED</strong></center></span><br />
    <span class="f9 c6 c2">Server name:</span><span class="c3"><input type="text" name="servername" id="servername" value="TravianX"></span><br /><br />
    <span class="f9 c6 c2">Server speed:</span><span class="c3"><input name="speed" type="text" id="speed" value="1"></span><br /><br />
    
	<span class="f9 c6 c2">Troop speed:</span><span class="c3"><td width="140"><input type="text" name="incspeed" id="incspeed" value="2"></span><br /><br />
	<span class="f9 c6 c2">World size:</span><span class="c3" style="position: absolute;right:20%;">
    <select name="wmax">
		<option value="100" selected="selected">100x100</option>
        <option value="150">150x150</option>
        <option value="200">200x200</option>
        <option value="250">250x250</option>
        <option value="300">300x300</option>
        <option value="350">350x350</option>
        <option value="400">400x400</option></select></span><br /><br />
    <span class="f9 c6 c2">Homepage:</span><span class="c3"><input name="homepage" type="text" id="homepage" value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></span><br /><br />
	<span class="f9 c6 c2">Language:</span><span class="c3" style="position: absolute;right:20%;"><select name="lang">
		<option value="en" selected="selected">English</option></select></span><br /><br />
        
	<span class="f9 c6 c2">Beginners protection length:</span><span class="c3" style="position: absolute;right:15%;"><input name="beginner" type="text" id="autodeltime" value="3600*12" size="15"></span><br /><br />
	<span class="f9 c6 c2">Plus account length:</span><span class="c3" style="position: absolute;right:19%;"><select name="plus_time">
	  <option value="3600*12">12 hours</option>
	  <option value="3600*24">1 day</option>
	  <option value="3600*24*2">2 days</option>
	  <option value="3600*24*3">3 days</option>
	  <option value="3600*24*4">4 days</option>
	  <option value="3600*24*5">5 days</option>
	  <option value="3600*24*6">6 days</option>
	  <option value="3600*24*7" selected="selected">7 days</option></select></span><br /><br />
      
	  <span class="f9 c6 c2">+25% production length:</span><span class="c3" style="position: absolute;right:19%;"><select name="plus_production">
	  <option value="3600*12">12 hours</option>
	  <option value="3600*24">1 day</option>
	  <option value="3600*24*2">2 days</option>
	  <option value="3600*24*3">3 days</option>
	  <option value="3600*24*4">4 days</option>
	  <option value="3600*24*5">5 days</option>
	  <option value="3600*24*6">6 days</option>
	  <option value="3600*24*7" selected="selected">7 days</option></select></span><br /><br />
	  </tr>
      
	  <span class="f9 c6 c2">Storage Multipler:</span><span class="c3"><td width="140"><input type="text" name="storage_multiplier" id="storage_multiplier" value="1"></span><br /><br />
      <span class="f9 c6 c2">Tourn Threshold:</span><span class="c3"><input type="text" name="ts_threshold" id="ts_threshold" value="30"></span><br /><br />
      <span class="f9 c6 c2">Great Workshop:</span><span class="c3" style="position: absolute;right:21%;"><select name="great_wks">
      <option value="fale">False</option>
      <option value="true" selected="selected">True</option></select></span><br /><br />
      </tr>
      <span class="f9 c6 c2">WW Statistics:</span><span class="c3" style="position: absolute;right:21%;"><select name="ww">
      <option value="fale">False</option>
      <option value="true" selected="selected">True</option></select></span><br /><br />
      </tr>
<!-- </LEFT BOX - SERVER RELATED> -->


<br />
<!-- <RIGHT BOX - SQL RELATED> -->
	<span><center><strong>SQL RELATED</strong></center></span><br />
	<span class="f9 c6 c2">Hostname:</span><span class="c3"><input name="sserver" type="text" id="sserver" value="localhost"></span><br /><br />
	<span class="f9 c6 c2">Username:</span><span class="c3"><input name="suser" type="text" id="suser" value=""></span><br /><br />
	<span class="f9 c6 c2">Password:</span><span class="c3"><input type="text" name="spass" id="spass"></span><br /><br />
	<span class="f9 c6 c2">DB name:</span><span class="c3"><input type="text" name="sdb" id="sdb"></span><br /><br />
	<span class="f9 c6 c2">Prefix:</span><span class="c3"><input type="text" name="prefix" id="prefix" value="s1_"></span><br /><br />
	<span class="f9 c6 c2">Type:</span><span class="c3" style="position: absolute;right:18%;"><select name="connectt">
	  <option value="0" selected="selected">MYSQL</option>
	  <option value="1" disabled="disabled">MYSQLi</option>
	</select></span><br /><br />
<!-- </RIGHT BOX - SQL RELATED> -->

<br />
<!-- <LEFT BOX - ADMIN RELATED> -->

	<span><center><strong>ADMIN RELATED</strong></center></span><br />
	<span class="f9 c6 c2">Admin Name:</span><span class="c3"><input type="text" name="aname" id="aname"></span><br /><br />
	<span class="f9 c6 c2">Admin Email:</span><span class="c3"><input name="aemail" type="text" id="aemail"></span><br /><br />
	<span class="f9 c6 c2">Admin rank:</span><span class="c3" style="position: absolute;right:20%;"><select name="admin_rank">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />

<!-- </LEFT BOX - ADMIN RELATED> -->

<br />
<!-- <RIGHT BOX - GPACK RELATED> 

	<span><center><strong>GPACK RELATED</strong></center></span><br />

	
	<span class="f9 c6 c2">GPack:</span><span class="c3"><select name="gpack">
	  <option value="false" selected="selected">No</option>
	  <option value="true" disabled="disabled">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">GPack Design:</span><span class="c3"><select name="gp_locate">
	  <option value="gpack/travian_default/" selected="selected">Travian Default
	  <option value="gpack/travianx_v1/">TravianX v1 by Dzoki</option></select></span><br /><br />
	
-->
<!-- </RIGHT BOX - GPACK RELATED> -->

<br />
 <!-- <LEFT BOX - NEWSBOX OPTIONS> -->
	 

	<span><center><strong>NEWSBOX OPTIONS</strong></center></span><br />

	<span class="f9 c6 c2">Newsbox 1:</span><span class="c3" style="position: absolute;right:18%;"><select name="box1">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></span><br /><br />
	  	<span class="f9 c6 c2">Newsbox 2:</span><span class="c3" style="position: absolute;right:18%;"><select name="box2">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></span><br /><br />
	  	<span class="f9 c6 c2">Newsbox 3:</span><span class="c3" style="position: absolute;right:18%;"><select name="box3">
	  <option value="true">Enabled</option>
	  <option value="false" selected="selected">Disabled</option></select></span><br /><br />

	  <!-- </LEFT BOX - NEWSBOX OPTIONS> -->

<br />
<!-- <LEFT BOX - LOG RELATED> -->

	<span><center><strong>LOG RELATED</strong></center></span><br />

	
	<span class="f9 c6 c2">Log Building:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_build">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Log Tech:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_tech">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Log Login:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_login">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Log Gold:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_gold_fin">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Log Admin:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_admin">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option>	</select></span><br /><br />
	<span class="f9 c6 c2">Log War:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_war">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Log Market:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_market">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Log Illegal:</span><span class="c3" style="position: absolute;right:18%;"><select name="log_illegal">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
 	 

<!-- </LEFT BOX - LOG RELATED> -->


<br />
<!-- <RIGHT BOX - EXTRA OPTIONS> -->

	<span><center><strong>EXTRA OPTIONS</strong></center></span><br />

	<span class="f9 c6 c2">Quest:</span><span class="c3" style="position: absolute;right:18%;"><select name="quest">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Activate:</span><span class="c3" style="position: absolute;right:18%;"><select name="activate">
	  <option value="false" selected="selected">No</option>
	  <option value="true">Yes</option></select></span><br /><br />
	<!--<span class="f9 c6 c2">Subdomain:</span><span class="c3"><select name="subdom">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />-->
	<span class="f9 c6 c2">Limit Mailbox:</span><span class="c3" style="position: absolute;right:18%;"><select name="limit_mailbox">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option></select></span><br /><br />
	<span class="f9 c6 c2">Max mails:</span><span class="c3"><input name="max_mails" type="number" id="max_mails" value="30" size="15"></span><br /><br />
	<span class="f9 c6 c2">Demolish - lvl required:</span><span class="c3" style="position: absolute;right:18%;"><select name="demolish">
	  <option value="5">5</option>
	  <option value="10" selected="selected">10</option>
	  <option value="15">15</option>
	  <option value="20">20</option></select></span><br /><br />
	<span class="f9 c6 c2">Village Expand:</span><span class="c3" style="position: absolute;right:18%;"><select name="village_expand">
	  <option value="1" selected="selected">Slow</option>
	  <option value="0">Fast</option></select></span><br /><br />
	<span class="f9 c6 c2">Error Reporting:</span><span class="c3" style="position: absolute;right:18%;"><select name="error">
	  <option value="error_reporting (E_ALL ^ E_NOTICE);" selected="selected">Yes</option>
	  <option value="error_reporting (0); ">No</option></select></span><br /><br />

	  <!--<span class="f9 c6 c2">Auto del. User:</span><span class="c3"><select name="autodel">
	  <option value="false">No</option>
	  <option value="true" selected="selected">Yes</option>
	</select>
	</span><br /><br /><tr>
	<span class="f9 c6 c2">Auto del. Users (days):</span><span class="c3"><input name="autodeltime" type="text" id="autodeltime" value="3600*24*7" size="15"></span><br /><br /><tr>
</tr>
<tr>
<tr>
		<span class="f9 c6 c2">Track User:</span><span class="c3"><select name="trackusers">
	  <option value="false" selected="selected">No</option>
	  <option value="true">Yes</option>
	</select>
	</span><br /><br />
	<tr>
	<span class="f9 c6 c2">User Timeout(min):</span><span class="c3"><input name="timeout" type="text" id="timeout" value="10" size="15"></span><br /><br /><tr>
	-->

	  <!-- </RIGHT BOX - EXTRA OPTIONS> -->
	  
	  
<br />
	<input type="submit" name="Submit" id="Submit" value="Submit">
	<input type="hidden" name="subconst" value="1">
	</form>

</div>
