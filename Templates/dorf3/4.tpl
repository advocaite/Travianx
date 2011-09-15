<?php
include('menu.tpl');
?>
<table id="culture_points" cellpadding="1" cellspacing="1">
<thead><tr>
	<th colspan="5">Culture points</th>
</tr>
<tr>
	<td>Village</td>
	<td>KB/day</td>
	<td>Celebtrations</td>    
	<td>troops</td>
	<td>Slots</td>
</tr></thead><tbody>
<?php

$varray = $database->getProfileVillages($session->uid); 
foreach($varray as $vil){
$vid = $vil['wref'];
$slot1 = $database->getVillageField($vid, 'exp1');
$slot2 = $database->getVillageField($vid, 'exp2');
$slot3 = $database->getVillageField($vid, 'exp3');
$cp = $database->getVillageField($vid, 'cp');
if($slot1 != 0){if($slot2 != 0){If($slot3 != 0){ $exp = 3; }else{ $exp = 2; }}else{ $exp = 1;}}else{ $exp = 0;}

if($vdata['capital'] == 1){$class = 'hl';}else{$class = '';}                  
  echo '<tr class="'.$class.'"><td class="vil fc"><a href="dorf1.php?newdid='.$vid.'">'.$vil['name'].'</a></td>';
		echo '<td class="cps">'.$cp.'</td>';
		echo '<td class="cel"><span class="none">!dont work!</span></td>';
		echo '<td class="tro"><span class="">';
		$unit = $database->getUnit($vid);
		$tribe = $session->tribe;
		if($tribe == 1)
		{
		$siedler = $unit['u10'];
		$siedlerp = '<img src=img/un/u/10.gif>';
		$senator = $unit['u9'];
		$senatorp = '<img src=img/un/u/9.gif>';
		}
		elseif($tribe == 2)
		{
		$siedler = $unit['u20'];
		$siedlerp = '<img src=img/un/u/20.gif>';
		$senator = $unit['u19'];
		$senatorp = '<img src=img/un/u/19.gif>';
		}
		elseif($tribe == 3)
		{
		$siedler = $unit['u30'];
		$siedlerp = '<img src=img/un/u/30.gif>';
		$senator = $unit['u29'];
		$senatorp = '<img src=img/un/u/29.gif>';
		}
		$i=1;
		While($i <=$siedler)
		{
		echo $siedlerp;
		$i++;
		}
		$s=1;
		While($s <=$senator)
		{
		echo $senatorp;
		$s++;
		}		
		
		
		echo '</span></td>';
		echo '<td class="slo lc">'.$exp.'/3</td>';
$gesexp = $gesexp + $exp;
$gesdorf = $gesdorf + 3;
$gescp = $gescp + $cp;
$gessied = $gessied + $siedler;
$gessen = $gessen + $senator;
  echo '</tr>';    
 
 
}
?>

	<tr>
	<td colspan="5" class="empty"></td>
</tr>


<tr class="sum">
	<th class="vil">Sum</th>
	<td class="cps"><?php echo $gescp;?></td>
	<td class="cel none">-</td>

	<td class="tro">
	<?php 	
	echo $gessied;
	echo $siedlerp;
	echo $gessen;
	echo $senatorp;
	?></td>
	<td class="slo"><?php echo $gesexp;echo '/';echo $gesdorf;?></td>
</tr></tbody></table>