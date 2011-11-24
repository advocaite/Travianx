<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       dorf1.php                                                   ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
include("GameEngine/Village.php");
$start = $generator->pageLoadTimeStart();
if(isset($_GET['ok'])){	$database->updateUserField($session->username,'ok','0','0'); $_SESSION['ok'] = '0'; }
if(isset($_GET['newdid'])){	$_SESSION['wid'] = $_GET['newdid'];	header("Location: ".$_SERVER['PHP_SELF']);}
else{	$building->procBuild($_GET);}

//Include Header général
include("Templates/header.tpl");

//Include Poduction
include("Templates/res.tpl");
?>
<div id="mid">
	<?php include("Templates/menu.tpl"); ?>
	<div id="content"  class="village1">
		<h1><?php echo $village->vname;
		if($village->loyalty!='100'){ echo '<div id="loyality" class="'.(($village->loyalty>'33') ? "gr" : "re").'">'.LOYALTY.' '.floor($village->loyalty).'%</div>';}?>
		</h1>
		<?php include("Templates/field.tpl");
		$timer = 1;?>
		<div id="map_details"><?php
			include("Templates/movement.tpl");
			include("Templates/production.tpl");
			include("Templates/troops.tpl"); 
			if($building->NewBuilding) {include("Templates/Building.tpl");}?>
		</div>

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