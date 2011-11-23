<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       karte.php                                                   ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
include("GameEngine/Village.php");
$start = $generator->pageLoadTimeStart();
if(isset($_GET['newdid'])) {	$_SESSION['wid'] = $_GET['newdid'];	header("Location: ".$_SERVER['PHP_SELF']);}
else {	$building->procBuild($_GET);}

include("Templates/header.tpl");
include("Templates/res.tpl");  ?>
<div id="mid">
	<?php include("Templates/menu.tpl");
	if(isset($_GET['d']) && isset($_GET['c'])){
		if($generator->getMapCheck($_GET['d']) == $_GET['c']){include("Templates/Map/vilview.tpl");}
		else{header("Location: dorf1.php");}
	}
	else{include("Templates/Map/mapview.tpl");}
	?>
	<div id="side_info"><?php
		include("Templates/quest.tpl");
		include("Templates/news.tpl");
		include("Templates/multivillage.tpl");
		include("Templates/links.tpl");?>
	</div>
	<div class="clear"></div>
</div>
<?php 
include("Templates/footer.tpl"); 