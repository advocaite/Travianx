<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       index.php                                                   ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
?>
<head>
<title>TravianX Installation</title>
<link rel=stylesheet type="text/css" href="main.css"/>
<meta name="content-language" content="en"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="imagetoolbar" content="no"/>
<style type="text/css" media="screen"></style>
</head>
<body>
<div id="ltop1">
</div><!--End of ltop1-->
<div id="lmidall"><div id="lmidlc">
<div id="lleft">	
<div id="lmenu">
<ul>
<?php
// C2 = Current step
// C3 = Previous step
// C1 = Next step
if(isset($_GET['s'])) {
	switch($_GET['s']) {
		case 1:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c2 f9\">Configuration</li><li class=\"c1 f9\">Database</li><li class= \"c1 f9\">Field</li><li class=\"c1 f9\">End</li>";
		break;
		case 2:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c2 f9\">Database</li><li class= \"c1 f9\">Field</li><li class=\"c1 f9\">End</li>";
		break;
		case 3:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c2 f9\">Field</li><li class=\"c1 f9\">End</li>";
		break;
		case 4:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c3 f9\">Field</li><li class=\"c2 f9\">End</li>";
		break;
	}
}
else {
	echo "<li class=\"c2 f9\">Intro</li><li class=\"c1 f9\">Configuration</li><li class=\"c1 f9\">Database</li><li class= \"c1 f9\">Field</li><li class=\"c1 f9\">End</li>";
}
?>
</ul>
</div></div>
<div id="lmid1">
<div id="lmid2">
<?php 
if(!isset($_GET['s'])) {
include("templates/greet.tpl");
}
else {
	switch($_GET['s']){
		case 1:
		include("templates/config.tpl");
		break;
		case 2:
		include("templates/dataform.tpl");
		break;
		case 3:
		include("templates/field.tpl");
		break;
		case 4:
		include("templates/end.tpl");
		break;
	}
}
?>
</div></div>
<div id="lright1">
</div>
<style media="screen" type="text/css">#lmidall{width:950px;}</style>
</div></div><!--End of lmidall & lmidlc-->
</body></html>