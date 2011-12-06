<?php  
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       dorf3.php                                                   ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
include("GameEngine/Village.php");
$start = $generator->pageLoadTimeStart();
if(isset($_GET['newdid'])){$_SESSION['wid'] = $_GET['newdid'];header("Location: ".$_SERVER['PHP_SELF']);}
include("Templates/header.tpl");
include("Templates/res.tpl");?>
<div id="mid">
	<?php include("Templates/menu.tpl"); ?>
	<div id="content"  class="village3"><?php
	if($session->plus){
		if(isset($_GET['s'])){
			if($_GET['s'] == 2){include("Templates/dorf3/2.tpl");}
			elseif($_GET['s'] == 3){include("Templates/dorf3/3.tpl");}
			elseif($_GET['s'] == 4){include("Templates/dorf3/4.tpl");}
			elseif($_GET['s'] == 5){include("Templates/dorf3/5.tpl");}
			elseif($_GET['s'] == 6){include("Templates/dorf3/noplus.tpl");}
		}
		else{include("Templates/dorf3/1.tpl");}
	}
	else{include("Templates/dorf3/noplus.tpl");}?>
	</div>
	<div id="side_info"><?php
		include("Templates/quest.tpl");
		include("Templates/multivillage.tpl");
		include("Templates/links.tpl");?>
	</div>
	<div class="clear"></div>
</div>
<?php
include("Templates/footer.tpl");?>