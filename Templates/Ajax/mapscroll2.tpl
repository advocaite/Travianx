<?php
include("GameEngine/Session.php");
    if($y < $yy) {
    $y = $y + (($yy - $y) /2);
    }
    else {
    $y = $yy + (($y - $yy) /2);
    }
    $x = $x - (($x - $xx) / 2);
    $x = ($x < -WORLD_MAX)? $x+WORLD_MAX*2+1 : $x;
    $x = ($x > WORLD_MAX)? $x-WORLD_MAX*2-1 : $x;
    $y = ($y < -WORLD_MAX)? $y+WORLD_MAX*2+1 : $y;
    $y = ($y > WORLD_MAX)? $y-WORLD_MAX*2-1 : $y;
$xm6 = ($x-6) < -WORLD_MAX? $x+WORLD_MAX+WORLD_MAX-5 : $x-6;
$xm5 = ($x-5) < -WORLD_MAX? $x+WORLD_MAX+WORLD_MAX-4 : $x-5;
$xm4 = ($x-4) < -WORLD_MAX? $x+WORLD_MAX+WORLD_MAX-3 : $x-4;
$xm3 = ($x-3) < -WORLD_MAX? $x+WORLD_MAX+WORLD_MAX-2 : $x-3;
$xm2 = ($x-2) < -WORLD_MAX? $x+WORLD_MAX+WORLD_MAX-1 : $x-2;
$xm1 = ($x-1) < -WORLD_MAX? $x+WORLD_MAX+WORLD_MAX : $x-1;
$xp1 = ($x+1) > WORLD_MAX? $x-WORLD_MAX-WORLD_MAX : $x+1;
$xp2 = ($x+2) > WORLD_MAX? $x-WORLD_MAX-WORLD_MAX+1 : $x+2;
$xp3 = ($x+3) > WORLD_MAX? $x-WORLD_MAX-WORLD_MAX+2: $x+3;
$xp4 = ($x+4) > WORLD_MAX? $x-WORLD_MAX-WORLD_MAX+3 : $x+4;
$xp5 = ($x+5) > WORLD_MAX? $x-WORLD_MAX-WORLD_MAX+4 : $x+5;
$xp6 = ($x+6) > WORLD_MAX? $x-WORLD_MAX-WORLD_MAX+5: $x+6;
$ym6 = ($y-6) < -WORLD_MAX? $y+WORLD_MAX+WORLD_MAX-5 : $y-6;
$ym5 = ($y-5) < -WORLD_MAX? $y+WORLD_MAX+WORLD_MAX-4 : $y-5;
$ym4 = ($y-4) < -WORLD_MAX? $y+WORLD_MAX+WORLD_MAX-3 : $y-4;
$ym3 = ($y-3) < -WORLD_MAX? $y+WORLD_MAX+WORLD_MAX-2 : $y-3;
$ym2 = ($y-2) < -WORLD_MAX? $y+WORLD_MAX+WORLD_MAX-1 : $y-2;
$ym1 = ($y-1) < -WORLD_MAX? $y+WORLD_MAX+WORLD_MAX : $y-1;
$yp1 = ($y+1) > WORLD_MAX? $y-WORLD_MAX-WORLD_MAX : $y+1;
$yp2 = ($y+2) > WORLD_MAX? $y-WORLD_MAX-WORLD_MAX+1 : $y+2;
$yp3 = ($y+3) > WORLD_MAX? $y-WORLD_MAX-WORLD_MAX+2: $y+3;
$yp4 = ($y+4) > WORLD_MAX? $y-WORLD_MAX-WORLD_MAX+3: $y+4;
$yp5 = ($y+5) > WORLD_MAX? $y-WORLD_MAX-WORLD_MAX+4 : $y+5;
$yp6 = ($y+6) > WORLD_MAX? $y-WORLD_MAX-WORLD_MAX+5: $y+6;
$xarray = array($xm6,$xm5,$xm4,$xm3,$xm2,$xm1,$x,$xp1,$xp2,$xp3,$xp4,$xp5,$xp6);
$yarray = array($ym6,$ym5,$ym4,$ym3,$ym2,$ym1,$y,$yp1,$yp2,$yp3,$yp4,$yp5,$yp6);
	$maparray = array();
$xcount = 0;
for($i=0;$i<=12;$i++) {
    if($xcount != 13) {
    array_push($maparray,$database->getMInfo($generator->getBaseID($xarray[$xcount],$yarray[$i])));
        if($i==12) {
        $i = -1;
        $xcount +=1;
        }
    }
}

$yrow = 0;
$regcount = 0;
header("Content-Type: application/json;");
		echo "[[";
for($h=0;$h<=12;$h++) {
	if($yrow!=13) {
   if($maparray[$regcount]['occupied'] == 1 && $maparray[$regcount]['fieldtype'] > 0) {
	$targetalliance = $database->getUserField($maparray[$regcount]['owner'],"alliance",0);
    $friendarray = array();
    $enemyarray = array();
    $neutralarray = array();
    }
   	$image = ($maparray[$regcount]['occupied'] == 1 && $maparray[$regcount]['fieldtype'] > 0)? (($maparray[$regcount]['owner'] == $session->uid)? ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b30': 'b20' :'b10' : 'b00') : (($targetalliance != 0)? (in_array($targetalliance,$friendarray)? ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b31': 'b21' :'b11' : 'b01') : (in_array($targetalliance,$enemyarray)? ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b32': 'b22' :'b12' : 'b02') : (in_array($targetalliance,$neutralarray)? ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b35': 'b25' :'b15' : 'b05') : ($targetalliance == $session->alliance? ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b33': 'b23' :'b13' : 'b03') : ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b34': 'b24' :'b14' : 'b04'))))) : ($maparray[$regcount]['pop']>=50? $maparray[$regcount]['pop']>= 100?$maparray[$regcount]['pop']>=200? 'b34': 'b24' :'b14' : 'b04'))) : $maparray[$regcount]['image'];
		$text = "[".$maparray[$regcount]['x'].",".$maparray[$regcount]['y'].",".$maparray[$regcount]['fieldtype'].",".$maparray[$regcount]['oasistype'].",\"d=".$maparray[$regcount]['id']."&c=".$generator->getMapCheck($maparray[$regcount]['id'])."\",\"".$image."\"";
		if($maparray[$regcount]['occupied']) {
			if($maparray[$regcount]['fieldtype'] != 0) {
			$text.= ",\"".$maparray[$regcount]['name']."\",\"".$database->getUserField($maparray[$regcount]['owner'],'username',0)."\",\"".$maparray[$regcount]['pop']."\",\"".$database->getUserAlliance($maparray[$regcount]['owner'])."\",\"".$database->getUserField($maparray[$regcount]['owner'],'tribe',0)."\"]";
			}
			else {
				$oasisinfo = $database->getOasisInfo($maparray[$regcount]['id']);
				$oowner = $database->getVillageField($oasisinfo['conqured'],"owner");
				$text.= ",\"\",\"".$database->getUserField($oowner,'username',0)."\",\"-\",\"".$database->getUserAlliance($oowner)."\",\"".$database->getUserField($oowner,'tribe',0)."\"]";
			}
		}
		else {
			$text .= "]";
		}
		echo $text;
		if($h == 12 && $yrow !=12) {
			$h = -1;
			$yrow +=1;
			echo "],[";
		}
		else {
			if($yrow == 12 && $h == 12) {
				echo "]]";
			}
			else {
			echo ",";
			}
		}
		$regcount += 1;
	}

}
?>
