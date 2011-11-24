<?php
/*-------------------------------------------------------*\
| ********* DO NOT REMOVE THIS COPYRIGHT NOTICE ********* |
+---------------------------------------------------------+
| Developed by:  Manni < manuel_mannhardt@web.de >        |
|                Dzoki < dzoki.travian@gmail.com >        |
| Copyright:     TravianX Project All rights reserved     |
\*-------------------------------------------------------*/
include_once("GameEngine/Data/hero_full.php");

if(isset($_POST['name'])){
	mysql_query("UPDATE ".TB_PREFIX."hero SET `name`='".($_POST['name'])."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
	$hero = mysql_query("SELECT * FROM " . TB_PREFIX . "hero WHERE `uid` = " . $session->uid . "");
	$hero_info = mysql_fetch_array($hero);
	echo "Heros name has been changed";
}
$hero = $units->Hero($session->uid);?>

<table id="distribution" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<th colspan="5"><?php
            	if(isset($_GET['rename'])){echo '
				<form action="build.php?id='.$id.'" method="POST">
					<input type="hidden" name="userid" value="'.$session->uid.'">
					<input type="hidden" name="hero" value="1">
					<input type="text" class="text" name="name" maxlength="20" value="'.$hero_info['name'].'">
				</form>';
				}
				else{echo '<a href="build.php?id='.$id.'&rename">'.$hero_info['name'].'</a>';}?> Level <?php echo $hero_info['level']; ?> <span class="info">( <?php echo"<img class=\"unit u".$hero_info['unit']."\" src=\"img/x.gif\" alt=\"".$technology->getUnitName($hero_info['unit'])."\" title=\"".$technology->getUnitName($hero_info['unit'])."\" /> ".$technology->getUnitName($hero_info['unit']); ?> )</span>
			</th>
		</tr>
	</thead>
	<tbody><tr>
		<th>Offence</th>
		<td class="val"><?php echo $hero['atk']; ?></td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo (2*$hero_info['attack'])+1; ?>px;" alt="<?php echo $hero['atk']; ?>" title="<?php echo $hero['atk']; ?>" /></td>
		<td class="up"><span class="none"><?php echo ($hero_info['points'] > 0) ? '<a href="build.php?id='.$id.'&add=off">(<b>+</b>)</a>' : '(+)';?></span></td>
		<td class="po"><?php echo $hero_info['attack']; ?></td>
	</tr>
	<tr>
		<th>Defence</th>
		<td class="val"><?php echo $hero['di'] . "/" . $hero['dc']; ?></td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo (2*$hero_info['defence'])+1; ?>px;" alt="<?php echo $hero['di'] . "/" . $hero['dc']; ?>"  title="<?php echo $hero['di'] . "/" . $hero['dc']; ?>" /></td>
		<td class="up"><span class="none"><?php echo ($hero_info['points'] > 0) ? '<a href="build.php?id='.$id.'&add=deff">(<b>+</b>)</a>' : '(+)';?></span></td>
		<td class="po"><?php echo $hero_info['defence']; ?></td>
	</tr>
		<tr>
		<th>Off-Bonus</th>
		<td class="val"><?php echo ($hero['ob']-1)*100; ?>%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo ($hero['ob']-1)*1000+1; ?>px;" alt="<?php echo ($hero['ob']-1)*100; ?>%" title="<?php echo ($hero['ob']-1)*100; ?>%" /></td>
		<td class="up"><span class="none"><?php echo ($hero_info['points'] > 0) ? '<a href="build.php?id='.$id.'&add=obonus">(<b>+</b>)</a>' : '(+)';?></span></td>
		<td class="po"><?php echo $hero_info['attackbonus']; ?></td>
	</tr>
	<tr>
		<th>Def-Bonus</th>
		<td class="val"><?php echo ($hero['db']-1)*100; ?>%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo ($hero['db']-1)*1000+1; ?>px;" alt="<?php echo ($hero['db']-1)*100; ?>%" title="<?php echo ($hero['db']-1)*100; ?>%" /></td>
		<td class="up"><span class="none"><?php echo ($hero_info['points'] > 0) ? '<a href="build.php?id='.$id.'&add=dbonus">(<b>+</b>)</a>': '(+)';?></span></td>
		<td class="po"><?php echo $hero_info['defencebonus']; ?></td>
	</tr>
	<tr>
		<th>Regeneration</th>
		<td class="val"><?php echo ($hero_info['regeneration']*100*.05*SPEED); ?>%/Day</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo ($hero_info['regeneration']*2)+1; ?>px;" alt="<?php echo ($hero_info['regeneration']*100*.05*SPEED); ?>%/Day" title="<?php echo ($hero_info['regeneration']*100*.05*SPEED); ?>%/Day" /></td>
		<td class="up"><span class="none"><?php echo ($hero_info['points'] > 0) ? '<a href="build.php?id='.$id.'&add=reg">(<b>+</b>)</a>': '(+)';?></span></td>
		<td class="po"><?php echo $hero_info['regeneration']; ?></td>
	</tr>
	<tr>
		<td colspan="5" class="empty"></td>
	</tr>
	<tr>
		<th title="until the next level">Experience:</th>
		<td class="val"><?php echo floor(($hero_info['experience']-$hero_levels[$hero_info['level']])/($hero_levels[$hero_info['level']+1]-$hero_levels[$hero_info['level']])*100)."%"; ?></td>
        <td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo floor(($hero_info['experience']-$hero_levels[$hero_info['level']])/($hero_levels[$hero_info['level']+1]-$hero_levels[$hero_info['level']])*100)."%"; ?>;" alt="<?php floor(($hero_info['experience']-$hero_levels[$hero_info['level']])/($hero_levels[$hero_info['level']+1]-$hero_levels[$hero_info['level']])*100)."%" ?>" title="<?php echo floor(($hero_info['experience']-$hero_levels[$hero_info['level']])/($hero_levels[$hero_info['level']+1]-$hero_levels[$hero_info['level']])*100)."%" ?>" /></td>		<td class="up"></td>
		<td class="rem"><?php echo $hero_info['points']; ?></td>
	</tr>
	</tbody>
</table>
<?php

if(isset($_GET['e'])){echo "<p><font size=\"1\" color=\"red\"><b>Error: name too short</b></font></p>";}
if($hero_info['level'] <= 3){ ?><p>You can <a href="build.php?id=<?php echo $id; ?>&add=reset">reset</a> your points until you are level <b>3</b> or lower!</p><?php } ?>
<p>Your hero has <b><?php echo floor($hero_info['health']); ?></b>% of his hit points.<br/>
Your hero has conquered <b><?php echo $database->VillageOasisCount($village->wid); ?></b> <a href="build.php?id=<?php echo $id; ?>&land">oases</a>.</p>
<?php
if(isset($_GET['add'])){
	// Reset Héro points
	if($_GET['add'] == "reset" && $hero_info['level'] <= 3){
		if($hero_info['attack'] !=0 or $hero_info['defence']!=0 or $hero_info['attackbonus']!=0 or $hero_info['defencebonus']!=0 or $hero_info['regeneration'] !=0){
			mysql_query('UPDATE '.TB_PREFIX.'hero SET
							points ='.(($hero_info['level']*5)+10).', attack=0, defence=0, attackbonus=0, defencebonus=0, regeneration=0 WHERE uid='.$session->uid);
			header('Location: build.php?id='.$id);
		}
	}
	// Add 1 point attack
	if($_GET['add'] == "off" && $hero_info['points'] > 0){
		mysql_query('UPDATE '.TB_PREFIX.'hero SET attack = attack + 1, points = points - 1 WHERE uid = '.$session->uid);
		header('Location: build.php?id='.$id);
	}
	// Add 1 point deffence
	if($_GET['add'] == "deff" && $hero_info['points'] > 0){
		mysql_query('UPDATE '.TB_PREFIX.'hero SET defence = defence + 1, points = points - 1 WHERE uid = '.$session->uid);
		header('Location: build.php?id='.$id);
	}
	// Add point bonus attack
	if($_GET['add'] == "obonus" && $hero_info['points'] > 0){
		mysql_query('UPDATE '.TB_PREFIX.'hero SET attackbonus = attackbonus + 1, points = points - 1 WHERE uid = '.$session->uid);
		header('Location: build.php?id='.$id);
	}
	// Add point bonus defence
	if($_GET['add'] == "dbonus" && $hero_info['points'] > 0){
		mysql_query('UPDATE '.TB_PREFIX.'hero SET defencebonus = defencebonus + 1, points = points - 1 WHERE uid = '.$session->uid);
		header('Location: build.php?id='.$id);
	}
	// Add point regeneration
	if($_GET['add'] == "reg" && $hero_info['points'] > 0){
		mysql_query('UPDATE '.TB_PREFIX.'hero SET regeneration = regeneration + 1, points = points - 1 WHERE uid = '.$session->uid);
		header('Location: build.php?id='.$id);
	}
}