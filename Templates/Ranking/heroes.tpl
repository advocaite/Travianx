<?php
if(!is_numeric($_SESSION['search'])) {
	echo "<p class=\"error\">The user <b>".$_SESSION['search']."</b> does not exist or has no hero.</p>";
    $search = 0;
}
else {
$search = $_SESSION['search'];
}
?>

		<table cellpadding="1" cellspacing="1" id="heroes" class="row_table_data">
			<thead>
				<tr>
					<th colspan="5">
						The most experienced heroes											</th>
				</tr>
		<tr><td></td><td>Hero</td><td>Player</td><td>Level</td><td>Experience</td></tr>
		</thead><tbody>
        <?php /*
  <tr class="">
   <td class="ra ">2.</td>
   <td class="hero "><img class="unit u15" alt="Paladin" title="Paladin" src="img/x.gif"> Ugly Duckling</td>
   <td class="pla "><a href="spieler.php?uid=4379">black swan</a></td>
   <td class="lev ">24</td>
   <td class="xp ">30335</td>
  </tr> */
        if(isset($_GET['rank'])){
		$multiplier = 1;
			if(is_numeric($_GET['rank'])) {
				if($_GET['rank'] > count($ranking->getRank())) {
				$_GET['rank'] = count($ranking->getRank())-1;
				}
				while($_GET['rank'] > (20*$multiplier)) {
					$multiplier +=1;
				}
			$start = 20*$multiplier-19;
			} else { $start = ($_SESSION['start']+1); }
		} else { $start = ($_SESSION['start']+1); }
        if(count($ranking->getRank()) > 0) {
        	$ranking = $ranking->getRank();
            for($i=$start;$i<($start+20);$i++) {
            	if(isset($ranking[$i]['heroname']) && $ranking[$i] != "pad") {
                	if($ranking[$i]['uid'] == $session->uid) {
                    echo "<tr class=\"hl \"><td class=\"ra  fc\" >";
                    }
                    else {
                    echo "<tr><td class=\"ra \" >";
                    }
                    echo $i.".</td>
					<td class=\"hero \">
					<img class=\"unit u".$ranking[$i]['type']."\" alt=\"\" title=\"\" src=\"img/x.gif\"> ".$ranking[$i]['heroname']."</td>
					<td class=\"pla \"><a href=\"spieler.php?uid=".$ranking[$i]['uid']."\">".$ranking[$i]['owner']."</a></td>
					<td class=\"lev \">".$ranking[$i]['level']."</td>
					<td class=\"xp \">".$ranking[$i]['pointused']."</td>
					</tr>
					";
                }
            }
        }
        else {
        	echo "<td class=\"none\" colspan=\"5\">No heros found</td>";
        }
        ?>
 </tbody>
</table>
<?php
include("ranksearch.tpl");
?>