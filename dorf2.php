<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       dorf2.php                                                   ##
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
include("Templates/res.tpl");
?>
<div id="mid">
	<?php include("Templates/menu.tpl"); ?>
	<div id="content"  class="village2">
		<h1><?php echo $village->vname; ?><br /></h1>

		<?php include("Templates/dorf2.tpl");
		if($building->NewBuilding) {
			include("Templates/Building.tpl");
		}?>
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