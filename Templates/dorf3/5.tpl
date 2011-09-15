<?php
include('menu.tpl');
?>
<table id="troops" cellpadding="1" cellspacing="1">
<thead><tr>
	<th colspan="11">Own troops</th>
</tr>
<tr>
<?php
$varray = $database->getProfileVillages($session->uid);  
$tribe = $session->tribe;
if($tribe == 1){$t = 1;}elseif($tribe == 2){$t = 11;}elseif($tribe == 3){$t = 21;}elseif($tribe == 4){$t = 41;} 
?>
<td>Village</td>
	<?php        
  for ($i = $t; $i <= $t+9; $i++) {
    echo '<td><img class="unit u'.$i.'" src="img/x.gif"></td>';
  }
  ?>
</tr></thead><tbody>
<?php
foreach($varray as $vil){
$vid = $vil['wref'];
if($vdata['capital'] == 1){$class = 'hl';}else{$class = '';}        
  $unit = $database->getUnit($vid);            
  echo '<tr class="'.$class.'"><td class="vil fc"><a href="dorf1.php?newdid='.$vid.'">'.$vil['name'].'</a></td>';
  for ($i = $t; $i <= $t+9; $i++) {
    $uni[$i] += $unit['u'.$i];
    if($unit['u'.$i] !=0){$cl = '';}else{$cl = 'none';}
    echo '<td class="'.$cl.'">'.$unit['u'.$i].'</td>';
  }       
  echo '</tr>';    
}
?>

<tr>
<th>Sum</th>
<?php
foreach($uni as $u){
if($u !=0){$cl = '';}else{$cl = 'none';}
echo '<td class="'.$cl.'">'.$u.'</td>';
}
?>
</tr></tbody></table>