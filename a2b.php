<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       a2b.php                                                     ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

include("GameEngine/Village.php");
include("GameEngine/Units.php");

$start = $generator->pageLoadTimeStart();
if(isset($_GET['newdid'])) {$_SESSION['wid'] = $_GET['newdid'];header("Location: ".$_SERVER['PHP_SELF']);}
else {$building->procBuild($_GET);}

if(isset($_GET['id'])){$id = $_GET['id'];}
if(isset($_GET['w'])){$w = $_GET['w'];}
if(isset($_GET['r'])){$r = $_GET['r'];}
if(isset($_GET['o'])){
	$o = $_GET['o'];
	$oid = $_GET['z'];
	$too = $database->getOasisField($oid,"conqured");++$requse;
	if($too['conqured'] == 0){$disabledr ="disabled=disabled";}
	else{$disabledr ="";}
	$disabled ="disabled=disabled";
	$checked  ="checked=checked";
}
$process = $units->procUnits($_POST);

include ("Templates/header.tpl");
include ("Templates/res.tpl");?>
<div id="mid">
	<?php include ("Templates/menu.tpl");?>
    <div id="content"  class="a2b">
	<?php
		if(!empty($id)){include ("Templates/a2b/newdorf.tpl");}
		elseif(isset($w)){
			$enforce = $database->getEnforceArray($w, 0);++$requse;
			if($enforce['vref'] == $village->wid) {
				$to = $database->getVillage($enforce['from']);++$requse;
				$ckey = $w;
				include ("Templates/a2b/sendback_" . $database->getUserField($to['owner'], 'tribe', 0) . ".tpl");++$requse;
			}
			else{
				include ("Templates/a2b/units_" . $session->tribe . ".tpl");
				include ("Templates/a2b/search.tpl");
			}
		}
		elseif(isset($r)){
			$enforce = $database->getEnforceArray($r, 0);++$requse;
			if($enforce['from'] == $village->wid) {
				$to = $database->getVillage($enforce['from']);++$requse;
				$ckey = $r;
				include ("Templates/a2b/sendback_" . $database->getUserField($to['owner'], 'tribe', 0) . ".tpl");++$requse;
			}
			else{
				include ("Templates/a2b/units_" . $session->tribe . ".tpl");
				include ("Templates/a2b/search.tpl");
			}
		}
		else{
			if(isset($process['0'])) {
				$coor = $database->getCoor($process['0']);++$requse;
				include ("Templates/a2b/attack.tpl");
			}
			else{
				include ("Templates/a2b/units_" . $session->tribe . ".tpl");
				include ("Templates/a2b/search.tpl");
			}
		}?>
	</div>
	<div id="side_info"><?php
		include ("Templates/quest.tpl");
		include ("Templates/news.tpl");
		include ("Templates/multivillage.tpl");
		include ("Templates/links.tpl");?>
	</div>
	<div class="clear"></div>
</div>
<?php
include ("Templates/footer.tpl");