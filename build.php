<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       build.php                                                   ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

ob_start();
include_once("GameEngine/Village.php");
include_once("GameEngine/Units.php");
if(isset($_GET['newdid'])) {
	$_SESSION['wid'] = $_GET['newdid'];
	header("Location: ".$_SERVER['PHP_SELF'].(isset($_GET['id'])?'?id='.$_GET['id']:(isset($_GET['gid'])?'?gid='.$_GET['gid']:'')));
}
$start = $generator->pageLoadTimeStart();
$alliance->procAlliForm($_POST);
$technology->procTech($_POST);
$market->procMarket($_POST);	
if(isset($_GET['gid'])) {	$_GET['id'] = strval($building->getTypeField($_GET['gid']));}
elseif(isset($_POST['id'])) {	$_GET['id'] = $_POST['id'];}

if(isset($_POST['t'])){	$_GET['t'] = $_POST['t'];}
if(isset($_GET['id'])) {
	if (!ctype_digit($_GET['id'])){ $_GET['id'] = "1";  }
	if($village->resarray['f'.$_GET['id'].'t'] == 17) {	$market->procRemove($_GET);	}
	if($village->resarray['f'.$_GET['id'].'t'] == 18) {	$alliance->procAlliance($_GET);	}
	if($village->resarray['f'.$_GET['id'].'t'] == 12 || $village->resarray['f'.$_GET['id'].'t'] == 13 || $village->resarray['f'.$_GET['id'].'t'] == 22) {$technology->procTechno($_GET);}
}

if (isset($_POST['a']) == 533374 && isset($_POST['id']) == 39){$units->Settlers($_POST);}

include("Templates/header.tpl");
include("Templates/res.tpl");?>

<div id="mid">
	<?php include("Templates/menu.tpl"); ?>
	<div id="content"  class="build">
	<?php
	if(isset($_GET['id'])){
		if(isset($_GET['s'])){
			if (!ctype_digit($_GET['s'])){$_GET['s'] = NULL;}
		}
		if(isset($_GET['t'])){
			if(!ctype_digit($_GET['t'])) {$_GET['t'] = NULL;}
		}
		if (!ctype_digit($_GET['id'])) {$_GET['id'] = "1";}

		$id = $_GET['id'];

		if($id=='99' AND $village->resarray['f99t'] == 40){include("Templates/Build/ww.tpl");}
		elseif($village->resarray['f'.$_GET['id'].'t'] == 0 && $_GET['id'] >= 19) {include("Templates/Build/avaliable.tpl");}
		else{
			if(isset($_GET['t'])){
				if($_GET['t'] == 1){$_SESSION['loadMarket'] = 1;}
				include("Templates/Build/".$village->resarray['f'.$_GET['id'].'t']."_".$_GET['t'].".tpl");
			}
			elseif(isset($_GET['s'])){
				include("Templates/Build/".$village->resarray['f'.$_GET['id'].'t']."_".$_GET['s'].".tpl");
			}
			else{
				include("Templates/Build/".$village->resarray['f'.$_GET['id'].'t'].".tpl");
			}
		}
	}?>
</div>

<div id="side_info"><?php
	include("Templates/quest.tpl");
	include("Templates/news.tpl");
	include("Templates/multivillage.tpl");
	include("Templates/links.tpl");?>
</div>
<div class="clear"></div>
<?php 
include("Templates/footer.tpl"); 