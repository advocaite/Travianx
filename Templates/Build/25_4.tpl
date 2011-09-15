<div id="build" class="gid26"><h1>Residence <span class="level">level <?php echo $village->resarray['f'.$id]; ?></span></h1>
<p class="build_desc">
	<a href="#" onClick="return Popup(25,4, 'gid');"
		class="build_logo"> <img
		class="building g25"
		src="img/x.gif" alt="Residence"
		title="Residence" /> </a>
	The residence is a small palace, where the king or queen lives when (s)he visits the village. The residence protects the village against enemies who want to conquer it.</p>

<?php include("25_menu.tpl"); ?>

<table cellpadding="1" cellspacing="1" id="expansion">
<thead><tr>
	<th colspan="6"><a name="h2"></a>Villages founded or conquered by this village</th>
</tr>
<tr>
	<td colspan="2">Village</td>
	<td>Player</td>
	<td>Inhabitants</td>
	<td>Coordinates</td>
	<td>Date</td>
</tr></thead>
<tbody>
<?php
$slot1 = $database->getVillageField($village->wid, 'exp1');
$slot2 = $database->getVillageField($village->wid, 'exp2');
$slot3 = $database->getVillageField($village->wid, 'exp3');
$data = $database->getProfileVillages($session->uid);

if($slot1 != 0){
	$total = 1;
}
if($slot2 != 0){
	$total += 1;
}
if($slot3 != 0){
	$total += 1;
}
if($total >= 1){
	for($i=1; $i <= $total; $i++){
	$coor = $database->getCoor($data[$i]['wref']);
	$owner = $database->getVillageField($data[$i]['wref'],'owner');
	$ownername = $database->getUserField($owner,'username',0);


		echo '
		<tr>
			<td class="ra">'.$i.'.</td>
			<td class="vil"><a href="karte.php?d='.$data[$i]['wref'].'&c='.$generator->getMapCheck($data[$i]['wref']).'">'.$data[$i]['name'].'</a></td>
			<td class="pla"><a href="spieler.php?uid='.$owner.'">'.$ownername.'</a></td>
			<td class="ha">'.$data[$i]['pop'].'</td>
			<td class="aligned_coords">
					<div class="cox">('.$coor['x'].'</div>
					<div class="pi">|</div>
					<div class="coy">'.$coor['y'].')</div>
			</td>
			<td class="dat">'.date('d-m-Y',$data[$i]['created']).'</td>
		</tr>';
	}
}
else{
echo '<tr><td colspan="6" class="none">No other village has been founded or conquered by this village yet.</td></tr>';
}
?>
</tbody></table></div>