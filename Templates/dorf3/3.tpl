<?php
include('menu.tpl');
?>
Time is not working...
<table id="warehouse" cellpadding="1" cellspacing="1">
<thead><tr>
	<th colspan="7">Warehouse</th>
</tr>
<tr>
	<td>Village</td>
	<td><img class="r1" src="img/x.gif" title="Dřevo" alt="Dřevo"></td>

	<td><img class="r2" src="img/x.gif" title="Hlína" alt="Hlína"></td>
	<td><img class="r3" src="img/x.gif" title="Železo" alt="Železo"></td>
	<td><img class="clock" src="img/x.gif" title="doba" alt="doba"></td>
	<td><img class="r4" src="img/x.gif" title="Obilí" alt="Obilí"></td>
	<td><img class="clock" src="img/x.gif" title="doba" alt="doba"></td>
</tr></thead><tbody>
<?php
$varray = $database->getProfileVillages($session->uid);  
$timer = 1;
foreach($varray as $vil){  
  $vid = $vil['wref'];
  $vdata = $database->getVillage($vid);  
  $wood = floor($vdata['wood']);
  $clay = floor($vdata['clay']);
  $iron = floor($vdata['iron']);
  $crop = floor($vdata['crop']);
  $maxs = $vdata['maxstore'];
  $maxc = $vdata['maxcrop'];
  
  $percentW = round($wood/($maxs/100));
  $percentC = round($clay/($maxs/100));
  $percentI = round($iron/($maxs/100));
  $percentCr = round($crop/($maxs/100));
  
  if($vdata['capital'] == 1){$class = 'hl';}else{$class = '';}  
  $cr = 95;   //how much percent   
  if($percentW >= $cr){$critW = 'crit';}else{$critW = '';}
  if($percentC >= $cr){$critC = 'crit';}else{$critC = '';}
  if($percentI >= $cr){$critI = 'crit';}else{$critI = '';}
  if($percentCr >= $cr){$critCR = 'crit';}else{$critCR = '';}
  
  $timer1 = '3:06:5?';
  $timer2 = '0:32:2?';
  
  echo '
  <tr class="'.$class.'">
		<td class="vil fc"><a href="dorf1.php?newdid='.$vid.'">'.$vdata['name'].'</a></td>
		<td class="lum '.$critW.'" title="'.$wood.'/'.$maxs.'">'.$percentW.'%</td> 
		<td class="clay '.$critC.'" title="'.$clay.'/'.$maxs.'">'.$percentC.'%</td>
		<td class="iron '.$critI.'" title="'.$iron.'/'.$maxs.'">'.$percentI.'%</td>
		<td class="max123"><span id="timer'.$timer.'">'.$timer1.'</span></td>'; $timer++;  		
	echo '	
		<td class="crop '.$critCR.'" title="'.$crop.'/'.$maxc.'">'.$percentCr.'%</td>
		<td class="max4 lc"><span id="timer'.$timer.'">'.$timer2.'</span></td>
  </tr>
  '; $timer++;  
  }

?>
  

  
</tbody></table