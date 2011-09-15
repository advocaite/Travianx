<?php
#####################################################
##                MADE BY: alq0rsan                ##
##          FIXED/CLEANED UP BY: TopErwin          ##
#####################################################
$checkifthereisworking = $database->query("SELECT * FROM ".TB_PREFIX."demolition WHERE `vref`='".$village->wid."'");
$showcheckdata = mysql_fetch_array($checkifthereisworking);
$database->query_return($village->wid,"maxstore",$ttmax);
$golds = $database->getResourceLevel($village->wid);
$pops = $database->getVillage($village->wid);

if($_GET['cancel'] == "1")
{
	if (mysql_num_rows($checkifthereisworking))
	{
		$database->query("DELETE FROM `".TB_PREFIX."demolition` WHERE `vref` = '".$village->wid."'");
	}
}
if($_GET['ok'] == "downgrade1")
{
	if($_POST['type'] != null)
	{
		$type = $_POST['type'];
		$neededtimeinfo = $building->resourceRequired($type,$village->resarray['f'.$type.'t']);
		$database->query("INSERT INTO `".TB_PREFIX."demolition` (`vref` ,`buildnumber` ,`lvl` ,`timetofinish`) VALUES ('".$village->wid."' ,'".$type."' ,'".($golds['f'.$type]-1)."' ,'".(time()+($neededtimeinfo['time']/2))."');");
	}
}
if($showcheckdata['timetofinish']<=time())
{
	if (mysql_num_rows($checkifthereisworking))
	{
		if(($golds['f'.$showcheckdata['buildnumber'].'t'] == "10") OR ($golds['f'.$showcheckdata['buildnumber'].'t'] == "11"))
		{
			$tests = $database->getVillage($village->wid);
			$max = $bid10[$golds['f'.$showcheckdata['buildnumber']]]['attri'];
			$max1 = $bid10[$golds['f'.$showcheckdata['buildnumber']]-1]['attri'];
			$ttmax = $tests['maxstore']-($max-$max1);
			$database->setVillageField($village->wid,"maxstore",$ttmax);
		}
		$database->query("UPDATE ".TB_PREFIX."fdata SET f".$showcheckdata['buildnumber']." = ".($golds['f'.$showcheckdata['buildnumber']]-1)."  where vref = ".$village->wid."");
		$uprequire = $building->resourceRequired($showcheckdata['buildnumber'],$village->resarray['f'.$showcheckdata['buildnumber'].'t']);
		$database->modifyPop($village->wid, $uprequire['pop'], 1);
		$golds = $database->getResourceLevel($village->wid);
		if($golds['f'.$showcheckdata['buildnumber']] <= 0)
		{ 
			$database->query("UPDATE ".TB_PREFIX."fdata set f".$showcheckdata['buildnumber']."t = 0  where vref = ".$village->wid."");
		}
		$database->query("DELETE FROM `".TB_PREFIX."demolition` WHERE `vref` = '".$village->wid."'");
	}
}
$checkifthereisworking = $database->query("SELECT * FROM ".TB_PREFIX."demolition WHERE `vref`='".$village->wid."'");
$showcheckdata = mysql_fetch_array($checkifthereisworking);
$golds = $database->getResourceLevel($village->wid);
$pops = $pops = $database->getVillage($village->wid);
if($village->resarray['f'.$id] >= 10)
{
	echo "<h2>Demolition of the building:</h2><p>If you no longer needed to be built, you can make an order to demolish the building builders.</p>";
	if (mysql_num_rows($checkifthereisworking)) {
		echo "<b>";
		echo "<a href='build.php?id=26&cancel=1'><img src='img/x.gif' class='del' title='cancel' alt='cancel'></a> ";
		echo "Demolition ".$building->procResType($golds['f'.$showcheckdata['buildnumber'].'t'])." <span id=timer1>".$generator->getTimeFormat($showcheckdata['timetofinish']-time())."</span> hour left";
		echo "</b>";
	}
	else
	{
		echo "
		<form action=\"build.php?id=26&ok=downgrade1\" method=\"post\" style=\"display:inline\">
		<select name=\"type\" class=\"dropdown\">";
		for ($i=19; $i<=41; $i++)
		{
			if ($golds['f'.$i.'t'] >= 1)
			{
				echo "<option value=".$i.">".$golds['f'.$i.'t'].".".$building->procResType($golds['f'.$i.'t'])." lvl (".$golds['f'.$i].")</option>";
			}
		}
		echo"
		</select>
		<input id=\"btn_demolish\" name=\"ok\" class=\"dynamic_img\" type=\"image\" src=\"img/x.gif\" alt=\"åÏã\"/>
		</form>";
	}
}
?>