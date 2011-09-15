<?php

/**
 * @author Genesis
 * @copyright 2011
 * @name CropFinder
 * @uses Village
 * @uses Database
 */

include("GameEngine/Village.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title><?php echo SERVER_NAME ?> - Crop finder</title>
    <link REL="shortcut icon" HREF="favicon.ico"/>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="mt-full.js?0faaa" type="text/javascript"></script>
    <script src="unx.js?0faaa" type="text/javascript"></script>
    <script src="new.js?0faaa" type="text/javascript"></script>
    <link href="<?php echo GP_LOCATE; ?>lang/en/compact.css?e21d2" rel="stylesheet" type="text/css" />
    <link href="<?php echo GP_LOCATE; ?>lang/en/lang.css?e21d2" rel="stylesheet" type="text/css" />
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

 
<body class="v35 ie ie8">
<div class="wrapper">
<img style="filter:chroma();" src="img/x.gif" id="msfilter" alt="" />
<div id="dynamic_header">
    </div>
<?php include("Templates/header.tpl"); ?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
<div id="content" class="village1">
    <h1>
    Crop finder
    </h1>
    <img width="150" src="gpack/travian_default/img/g/f6.jpg" />
    <img width="150"  src="gpack/travian_default/img/g/f1.jpg" />
    <br />
    
    <?php
    
    $mc15 = 6; 
    $mc9 = 1;
    
	$thiscoor = mysql_Fetch_Assoc(mysql_query("SELECT x,y FROM ".TB_PREFIX."wdata WHERE id = ".$village->wid));
    
	$x = "IF(ABS(x-".$thiscoor['x'].")<=".WORLD_MAX.",ABS(x-".$thiscoor['x']."),".(WORLD_MAX*2+1)."-ABS(x-".$thiscoor['x']."))";
	$y = "IF(ABS(y-".$thiscoor['y'].")<=".WORLD_MAX.",ABS(y-".$thiscoor['y']."),".(WORLD_MAX*2+1)."-ABS(y-".$thiscoor['y']."))";
	$DistanceCalc = "FORMAT(SQRT(POW(".$x.",2)+POW(".$y.",2)),1) AS Distance";
	$q = "SELECT occupied,fieldtype,x,y,".$DistanceCalc." FROM ".TB_PREFIX."wdata WHERE fieldtype=".$mc15." OR fieldtype=".$mc9." ORDER BY fieldtype DESC,ABS(Distance)";
    $croppers = mysql_query($q);

	echo "<table cellpadding='1' cellspacing='1' class='build_details' border='1' style='border-collapse:collapse'><thead>
            <tr><td>Type</td><td>Occupied</td><td>Position</td><td>Distance</td></tr></thead>
         ";
         
    while($row = mysql_fetch_assoc($croppers)){
        echo "<tbody><tr><td>".($row['fieldtype']==6?'15-cropper':'9-cropper')."</td><td>";
        echo ($row['occupied'] == 1) ? 'Occupied' : 'Free';
        echo "</td><td>".$row['x']."|".$row['y']."</td>
        <td>".$row['Distance']."</td>
        </tr></tbody>";
        $newrow = $row;
    }

    echo '</table>';
    ?>
</div>
<div id="side_info">
<?php
include("Templates/quest.tpl");
include("Templates/news.tpl");
include("Templates/multivillage.tpl");
include("Templates/links.tpl");
?>
</div>
<div class="clear"></div>
</div>
<div class="footer-stopper"></div>
<div class="clear"></div>

<?php 
include("Templates/footer.tpl"); 
include("Templates/res.tpl"); 
?>
<div id="stime">
<div id="ltime">
<div id="ltimeWrap">
Calculated in <b><?php
echo round(($generator->pageLoadTimeEnd()-$start)*1000);
?></b> ms
 
<br />Server time: <span id="tp1" class="b"><?php echo date('H:i:s'); ?></span>
</div>
    </div>
</div>

<div id="ce"></div>
</body>
</html>
