<?php
$maxherolevel = 100;
$see = 1;
$resetlevelreq = 3;
    $getheroinfo1 = mysql_query("SELECT * FROM ".TB_PREFIX."hero  WHERE `uid`='".$session->uid."'") or die(mysql_error());
    $heroinfo1 = mysql_fetch_array($getheroinfo1);

    if ( isset($_POST['changename'])) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `heroname`='".($_POST['changename'])."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
$see = 0;
$message = "Heros name has been changed.";

}
// revive hero
if(mysql_num_rows($getheroinfo1) == 1) {
if($heroinfo1['dead'] == 1) {
if ( $_GET['revive'] == 1) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `timetoborn`='".(time()+${'u'.$heroinfo1['type']}['time'])."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `dead`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
}

// train new hero
if(mysql_num_rows($getheroinfo1) == 0) {
if ($session->tribe == 1) {
if(isset ($_GET['train'])) {
if ( $_GET['train'] == 1) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'1' ,'100' ,'".(time()+${'u1'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 2) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'2' ,'100' ,'".(time()+${'u2'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 3) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'3' ,'100' ,'".(time()+${'u3'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 5) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'5' ,'100' ,'".(time()+${'u5'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 6) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'6' ,'100' ,'".(time()+${'u6'}['time'])."');") or die("ERROR:".mysql_error());
}
}
}
if ($session->tribe == 2) {
if(isset ($_GET['train'])) {
if ( $_GET['train'] == 1) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'11' ,'100' ,'".(time()+${'u11'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 2) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'12' ,'100' ,'".(time()+${'u12'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 3) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'13' ,'100' ,'".(time()+${'u13'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 5) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'15' ,'100' ,'".(time()+${'u15'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 6) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'16' ,'100' ,'".(time()+${'u16'}['time'])."');") or die("ERROR:".mysql_error());
}
}
}
if ($session->tribe == 3) {
if(isset ($_GET['train'])) {
if ( $_GET['train'] == 1) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'21' ,'100' ,'".(time()+${'u21'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 2) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'22' ,'100' ,'".(time()+${'u22'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 3) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'24' ,'100' ,'".(time()+${'u24'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 5) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'25' ,'100' ,'".(time()+${'u25'}['time'])."');") or die("ERROR:".mysql_error());
}
if ( $_GET['train'] == 6) {
mysql_query("INSERT INTO `".TB_PREFIX."hero` (`uid` ,`heroname` ,`type` ,`healthofhero` ,`timetoborn`) VALUES ('".$session->uid."' ,'".$session->username."' ,'26' ,'100' ,'".(time()+${'u26'}['time'])."');") or die("ERROR:".mysql_error());
}
}
}
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointgain`='10000' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}

// add point and reset it
if(isset($_GET['add'])) {
if ( $_GET['add'] == reset) {
if ( round(($heroinfo1['attackpower']+$heroinfo1['defpower']+$heroinfo1['attackbonus']+$heroinfo1['defbonus']+$heroinfo1['regspeed'])/5) <= $resetlevelreq ) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `attackpower`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `defpower`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `attackbonus`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `defbonus`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `regspeed`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointused`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
if ( $_GET['add'] == attackpower) {
if ($heroinfo1['attackpower'] >= $maxherolevel) {
} else {
if ( round(($heroinfo1['pointgain']-$heroinfo1['pointused'])/1000) >= 1 ) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `attackpower`='".($heroinfo1['attackpower']+1)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointused`='".($heroinfo1['pointused']+1000)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
}
if ( $_GET['add'] == defpower) {
if ($heroinfo1['defpower'] >= $maxherolevel) {
} else {
if ( round(($heroinfo1['pointgain']-$heroinfo1['pointused'])/1000) >= 1 ) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `defpower`='".($heroinfo1['defpower']+1)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointused`='".($heroinfo1['pointused']+1000)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
}
if ( $_GET['add'] == attackbonus) {
if ($heroinfo1['attackbonus'] >= $maxherolevel) {
} else {
if ( round(($heroinfo1['pointgain']-$heroinfo1['pointused'])/1000) >= 1 ) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `attackbonus`='".($heroinfo1['attackbonus']+1)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointused`='".($heroinfo1['pointused']+1000)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
}
if ( $_GET['add'] == defbonus) {
if ($heroinfo1['defbonus'] >= $maxherolevel) {
} else {
if ( round(($heroinfo1['pointgain']-$heroinfo1['pointused'])/1000) >= 1 ) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `defbonus`='".($heroinfo1['defbonus']+1)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointused`='".($heroinfo1['pointused']+1000)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
}
if ( $_GET['add'] == regspeed) {
if ($heroinfo1['regspeed'] >= $maxherolevel) {
} else {
if ( round(($heroinfo1['pointgain']-$heroinfo1['pointused'])/1000) >= 1 ) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `regspeed`='".($heroinfo1['regspeed']+1)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."hero SET `pointused`='".($heroinfo1['pointused']+1000)."' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
}
}
}
}


    $getheroinfo = mysql_query("SELECT * FROM ".TB_PREFIX."hero  WHERE `uid`='".$session->uid."'") or die(mysql_error());
    $heroinfo = mysql_fetch_array($getheroinfo);

$heropoint = round(($heroinfo['pointgain']-$heroinfo['pointused'])/1000);
$expernce = round(($heroinfo['attackpower']+$heroinfo['defpower']+$heroinfo['attackbonus']+$heroinfo['defbonus']+$heroinfo['regspeed'])/5);
$level = round(($heroinfo['attackpower']+$heroinfo['defpower']+$heroinfo['attackbonus']+$heroinfo['defbonus']+$heroinfo['regspeed'])/5);

// type to name hero
if ( $heroinfo['type'] == 1 ) {
$heronames = "Legionnaire";
} elseif ( $heroinfo['type'] == 2 ) {
$heronames = "Praetorian";
} elseif ( $heroinfo['type'] == 3 ) {
$heronames = "Imperian";
} elseif ( $heroinfo['type'] == 5 ) {
$heronames = "Equites Imperatoris";
} elseif ( $heroinfo['type'] == 6 ) {
$heronames = "Equites Caesaris";
} elseif ( $heroinfo['type'] == 11 ) {
$heronames = "Clubswinger";
} elseif ( $heroinfo['type'] == 12 ) {
$heronames = "Spearman";
} elseif ( $heroinfo['type'] == 13 ) {
$heronames = "Axeman";
} elseif ( $heroinfo['type'] == 15 ) {
$heronames = "Paladin";
} elseif ( $heroinfo['type'] == 16 ) {
$heronames = "Teutonic Knight";
} elseif ( $heroinfo['type'] == 21 ) {
$heronames = "Phalanx";
} elseif ( $heroinfo['type'] == 22 ) {
$heronames = "Swordsman";
} elseif ( $heroinfo['type'] == 24 ) {
$heronames = "Theutates Thunder";
} elseif ( $heroinfo['type'] == 25 ) {
$heronames = "Druidrider";
} elseif ( $heroinfo['type'] == 26 ) {
$heronames = "Haeduan";
}

$typercheck['1'] = "Legionnaire";
$typercheck['2'] = "Praetorian";
$typercheck['3'] = "Imperian";
$typercheck['5'] = "Equites Imperatoris";
$typercheck['6'] = "Equites Caesaris";
$typercheck['11'] = "Clubswinger";
$typercheck['12'] = "Spearman";
$typercheck['13'] = "Axeman";
$typercheck['15'] = "Paladin";
$typercheck['16'] = "Teutonic Knight";
$typercheck['21'] = "Phalanx";
$typercheck['22'] = "Swordsman";
$typercheck['24'] = "Theutates Thunder";
$typercheck['25'] = "Druidrider";
$typercheck['26'] = "Haeduan";

if( $heroinfo['attackpower'] >= 1) {
$heroattackpower = round((${'u'.$heroinfo['type']}['atk']/100)*(100+$heroinfo['attackpower']));
} else {
$heroattackpower = round(${'u'.$heroinfo['type']}['atk']);
}

if( $heroinfo['defpower'] >= 1) {
$herodefpower1 =round((${'u'.$heroinfo['type']}['di']/100)*(100+$heroinfo['defpower']));
$herodefpower2 = round((${'u'.$heroinfo['type']}['dc']/100)*(100+$heroinfo['defpower']));
} else {
$herodefpower1 = round(${'u'.$heroinfo['type']}['di']);
$herodefpower2 = round(${'u'.$heroinfo['type']}['dc']);
}
?>
<div id="build" class="gid37"><a href="#" onClick="return Popup(37,4, 'gid');" class="build_logo">
<img class="building g37" src="img/x.gif" alt="Heldenhof" title="Heldenhof" /> </a>

<h1>Hero's Mansion <span class="level">Level <?php echo $village->resarray['f'.$id]; ?></span></h1>
<p class="build_desc">In the Hero's mansion you can train your own hero and at level 10, 15 and 20 you can conquer oases with Hero in the immediate vicinity.</p>

<?php
if(mysql_num_rows($getheroinfo) == 0) {
// here code to train hero
?>

<table id="distribution" cellpadding="1" cellspacing="1" width="100%">
	<thead><tr><th colspan="2">Train New Hero</th></tr></thead>
<?php
if ($session->tribe == 1) {
?>
<tr>
<th width='75%'><img class="unit u1" src="img/x.gif"><?php echo $typercheck['1']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=1'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u2" src="img/x.gif"><?php echo $typercheck['2']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=2'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u3" src="img/x.gif"><?php echo $typercheck['3']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=3'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u5" src="img/x.gif"><?php echo $typercheck['5']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=4'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u6" src="img/x.gif"><?php echo $typercheck['6']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=5'>Train</a></th>
</tr>
<?php
}
if ($session->tribe == 2) {
?>
<tr>
<th width='75%'><img class="unit u11" src="img/x.gif"><?php echo $typercheck['11']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=1'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u12" src="img/x.gif"><?php echo $typercheck['12']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=2'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u13" src="img/x.gif"><?php echo $typercheck['13']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=3'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u15" src="img/x.gif"><?php echo $typercheck['15']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=4'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u16" src="img/x.gif"><?php echo $typercheck['16']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=5'>Train</a></th>
</tr>
<?php
}
if ($session->tribe == 3) {
?>
<tr>
<th width='75%'><img class="unit u21" src="img/x.gif"><?php echo $typercheck['21']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=1'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u22" src="img/x.gif"><?php echo $typercheck['22']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=2'>Train</a></th>
</tr>
<tr>
<th width='75%'><img class="unit u24" src="img/x.gif"><?php echo $typercheck['24']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=3'>Train</a></th>
</tr>
<?php
if ($database->checkIfResearched($village->wid,'t25')) { ?>
<tr>
<th width='75%'><img class="unit u25" src="img/x.gif"><?php echo $typercheck['25']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=4'>Train</a></th>
</tr>
<?php }
if ($database->checkIfResearched($village->wid,'t26')) { ?>
<tr>
<th width='75%'><img class="unit u26" src="img/x.gif"><?php echo $typercheck['26']; ?></th>
<th width='25%'><a href='build.php?id=<?php echo "$id"; ?>&train=5'>Train</a></th>
</tr>
<?php }
}
?>

</table>

<?php
} else {
if($heroinfo['timetoborn'] <= time()) {
if(!$heroinfo['timetoborn'] == 0) {
if($heroinfo['dead'] == 0) {
mysql_query("UPDATE ".TB_PREFIX."hero SET `timetoborn`='0' where `uid`='".$session->uid."'") or die("ERROR:".mysql_error());
mysql_query("UPDATE ".TB_PREFIX."units SET `hero`='1' where `vref`='".$village->wid."'") or die("ERROR:".mysql_error());
}
}
}


if($heroinfo['timetoborn'] >= 1) {
$sewtime = $generator->getTimeFormat($heroinfo['timetoborn']-time());
?>
<table id="distribution" cellpadding="1" cellspacing="1">
	<thead><tr>
<?php
echo "<tr class='next'><th>hero will be ready in <span id=timer1>".$sewtime."</span></th></tr>";
?>
</table>
<?php
}


if($heroinfo['timetoborn'] == 0) 
if($heroinfo['dead'] == 1) {
?>
<table id="distribution" cellpadding="1" cellspacing="1">
	<thead><tr>
<?php
echo "<tr class='next'><th>hero is dead want to revive him?</th></tr>";
echo "<tr class='next'><td><a href='build.php?id=".$id."&revive=1'>Press here to revive</a></td></tr>";
?>
</table>
<?php
} else {
?>


<table id="distribution" cellpadding="1" cellspacing="1">
    <thead><?php echo $message; ?><tr>
    <?php if (isset($_GET['rename'])){?>
    <th colspan="5"><?php if ($see == 1){?><form action="" method="POST">
<input type=text name=changename value=<?php echo $heroinfo['heroname']; ?>><form><?php }else{ ?><a href="build.php?id=<?php echo "$id"; ?>&rename"><?php echo $heroinfo['heroname']; ?></a><?php } ?><span class="info"> Level <?php echo $level; ?> (<img class="unit u<?php echo $heroinfo['type']; ?>" src="img/x.gif" alt="<?php echo $heronames; ?>" title="<?php echo $heronames; ?>" /><?php echo $heronames; ?>)</span></th>
     <?php }else{?>
        <th colspan="5"><a href="build.php?id=<?php echo "$id"; ?>&rename"><?php echo $heroinfo['heroname']; ?></a><span class="info"> Level <?php echo $level; ?> (<img class="unit u<?php echo $heroinfo['type']; ?>" src="img/x.gif" alt="<?php echo $heronames; ?>" title="<?php echo $heronames; ?>" /><?php echo $heronames; ?>)</span></th>
    <?php  }?>
    </tr></thead>

	<tbody><tr>
		<th>Attack</th>
		<td class="val"><?php echo $heroattackpower; ?></td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo $heroinfo['attackpower']; ?>%;" alt="<?php echo $heroattackpower; ?>" title="<?php echo $heroattackpower; ?>" /></td>
<?php
if ($heropoint >= 1) {
if ($heroinfo['attackpower'] == $maxherolevel) {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
} else {
echo "<td class='up'><a href='build.php?id=".$id."&add=attackpower'>(<b>+</b>)</a></td>";
}
} else {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
}
?>
		<td class="po"><?php echo $heroinfo['attackpower']; ?></td>

	</tr>
	<tr>
		<th>Defense</th>
		<td class="val"><?php echo  $herodefpower1."/".$herodefpower2; ?></td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo $heroinfo['defpower']; ?>%;" alt='<?php echo  $herodefpower1."/".$herodefpower2; ?>'  title='<?php echo  $herodefpower1."/".$herodefpower2; ?>' /></td>
<?php
if ($heropoint >= 1) {
if ($heroinfo['defpower'] == $maxherolevel) {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
} else {
echo "<td class='up'><a href='build.php?id=".$id."&add=defpower'>(<b>+</b>)</a></td>";
}
} else {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
}
?>
		<td class="po"><?php echo $heroinfo['defpower']; ?></td>
	</tr>
	<tr>
		<th>Attack-Bonus:</th>
		<td class="val"><?php echo ($heroinfo['attackbonus']*0.2); ?>%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo $heroinfo['attackbonus']; ?>%;" alt="<?php echo ($heroinfo['attackbonus']*0.2); ?>%" title="<?php echo ($heroinfo['attackbonus']*0.2); ?>%" /></td>
<?php
if ($heropoint >= 1) {
if ($heroinfo['attackbonus'] == $maxherolevel) {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
} else {
echo "<td class='up'><a href='build.php?id=".$id."&add=attackbonus'>(<b>+</b>)</a></td>";
}
} else {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
}
?>
		<td class="po"><?php echo $heroinfo['attackbonus']; ?></td>
	</tr>
	<tr>
		<th>Defense-Bonus:</th>
		<td class="val"><?php echo ($heroinfo['defbonus']*0.2); ?>%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo $heroinfo['defbonus']; ?>%;" alt="<?php echo ($heroinfo['defbonus']*0.2); ?>%" title="<?php echo ($heroinfo['defbonus']*0.2); ?>%" /></td>
<?php
if ($heropoint >= 1) {
if ($heroinfo['defbonus'] == $maxherolevel) {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
} else {
echo "<td class='up'><a href='build.php?id=".$id."&add=defbonus'>(<b>+</b>)</a></td>";
}
} else {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
}
?>
		<td class="po"><?php echo $heroinfo['defbonus']; ?></td>
	</tr>
	<tr>
		<th>Regeneration:</th>
		<td class="val"><?php echo ($heroinfo['regspeed']*1); ?>/day</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo $heroinfo['regspeed']; ?>%;" alt="<?php echo ($heroinfo['regspeed']*1); ?>/dag" title="45/dag" /></td>
<?php
if ($heropoint >= 1) {
if ($heroinfo['regspeed'] == $maxherolevel) {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
} else {
echo "<td class='up'><a href='build.php?id=".$id."&add=regspeed'>(<b>+</b>)</a></td>";
}
} else {
echo "<td class='up'><span class='none'>(<b>+</b>)</span></td>";
}
?>
		<td class="po"><?php echo $heroinfo['regspeed']; ?></td>
	</tr>
	<tr>
		<td colspan="5" class="empty"></td>
	</tr>
	<tr>
		<th title="hero is health">Experience:</th>
		<td class="val"><?php echo $expernce; ?>%</td>

		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo $expernce; ?>%;" alt="<?php echo $expernce; ?>%" title="<?php echo $expernce; ?>%" /></td>
		<td class="up"></td>
		<td class="rem"><?php
if ( $heropoint >=0 ) {
echo $heropoint;
} else {
echo "0";
}
?></td>
	</tr>
	</tbody></table>
<?php
if ($level <= $resetlevelreq) {
echo "<br>";
echo "If your hero under level ".$resetlevelreq." you can reset the point by press <a href='build.php?id=".$id."&add=reset'>here</a>";
}
?>
<p>Your hero have <b><?php echo $heroinfo['healthofhero']; ?></b>% of his power<br/></p>
<?php 
}
}
include("upgrade.tpl");
?>
</p></div>
