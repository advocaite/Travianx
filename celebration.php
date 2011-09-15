<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       celebration.php                                             ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################


include("GameEngine/Village.php");

if(isset($_GET['newdid'])) {
	$_SESSION['wid'] = $_GET['newdid'];
	header("Location: ".$_SERVER['PHP_SELF']);
}
	$bla = 0;
	$id= 0;
	$type= 0;
	$town = 0;
	$vil = 0;
	$woodold = 0;
	$clayold = 0;
	$ironold = 0;
	$cropold = 0;
	$feld = 0;
	$level = 0;
	$time = 0;

	$id=$_GET['id'];
	$type=$_GET['type'];
	$town = $database->getVillageField($village->wid, 'wref');
	$vil = $database->getResourceLevel($village->wid);
	$woodold = $database->getVillageField($village->wid, 'wood');
	$clayold = $database->getVillageField($village->wid, 'clay');
	$ironold = $database->getVillageField($village->wid, 'iron');
	$cropold = $database->getVillageField($village->wid, 'crop');
	
	
	
	$feld = $vil['f'.$id.'t'];
	$level = $vil['f'.$id];
	$time = Time();
if($feld == 24)
{
	if($type == 1)
	{
		if(6400 < $woodold|| 6650 < $clayold || 5940 < $ironold || 1340 < $cropold) {
			$endtime = ($sc[$level]/ SPEED) + $time;
			$wood = 6400;
			$clay = 6650;		
			$iron = 5940;
			$crop = 1340;
			
			$database->modifyResource($town,$wood,$clay,$iron,$crop,$mode);
			$database->addCel($town,$endtime,$type);

		}
	}
	else if($type == 2)
	{
			if(29700 < $woodold || 33250 < $clayold || 32000 < $ironold || 6700 < $cropold) {
			
			$endtime = ($gc[$level]/ SPEED) + $time;
			$wood= 29700;
			$clay= 33250;
			$iron= 32000;
			$crop= 6700;
			$database->modifyResource($town,$wood,$clay,$iron,$crop,$mode);
			$database->addCel($town,$endtime,$type);
		}
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo SERVER_NAME ?></title>
    <link REL="shortcut icon" HREF="favicon.ico"/>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="refresh" content="0; URL=dorf2.php">
	<script src="mt-full.js?ebe79" type="text/javascript"></script>
	<script src="unx.js?ebe79" type="text/javascript"></script>
	<script src="new.js?ebe79" type="text/javascript"></script>
	<link href="<?php echo GP_LOCATE; ?>lang/en/lang.css?f4b7c" rel="stylesheet" type="text/css" />
	<link href="<?php echo GP_LOCATE; ?>lang/en/compact.css?f4b7c" rel="stylesheet" type="text/css" />
	<?php
	if($session->gpack == null || GP_ENABLE == false) {
	echo "
	<link href='".GP_LOCATE."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".GP_LOCATE."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	} else {
	echo "
	<link href='".$session->gpack."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".$session->gpack."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	}
	?>
	<script type="text/javascript">

		window.addEvent('domready', start);
	</script>
</head>

</html>