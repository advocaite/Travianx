<table cellpadding="1" cellspacing="1" class="build_details">
	<thead>
		<tr>
			<td>Celebrations</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>

		<tr>
		<?php
		$level = $village->resarray['f'.$id];
		$inuse = $database->getVillageField($village->wid, 'celebration');
		$time = Time();
			echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						Small celebration (500 culture points)
					</div>
					<div class=\"details\"><img class=\"r1\" src=\"img/x.gif\" alt=\"Lumber\" title=\"Lumber\" />6400|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />6650|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />5940|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />1340|<img class=\"clock\" src=\"img/x.gif\" alt=\"duration\" title=\"duration\" />";
                    echo $generator->getTimeFormat(round($sc[$level]));
                    if($session->userinfo['gold'] >= 3 && $building->getTypeLevel(17) > 1) {
                   echo "|<a href=\"build.php?gid=17&t=3&r1=6400&r2=6650&r3=5940&r4=1340\" title=\"NPC trade\"><img class=\"npc\" src=\"img/x.gif\" alt=\"NPC trade\" title=\"NPC trade\" /></a>";
                   }		   
				if($inuse > $time){
					echo "<td class=\"act\">
					<div class=\"none\">There is still</br> a celebration</div>
					</td></tr>";
					}				
                  else if(6400 > $village->awood || 6650 > $village->aclay || 5940 > $village->airon || 1340 > $village->acrop) {
                   	$time = $technology->calculateAvaliable($i);
                    echo "<br><span class=\"none\">Enough resources ".$time[0]." at ".$time[1]."</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Too few<br>resources</div>
				</td></tr>";
                }
                else {
					echo "</td>";
                    echo "<td class=\"act\">";
					if ($building->getTypeLevel(24) > 0) {
						echo "<a class=\"research\" href=\"celebration.php?type=1&id=$id\">hold</a></td></tr>";
					} else {
						echo "Under construction";
					}
                }
				
			if($level >= 10){	
		$level = $village->resarray['f'.$id];
			echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						Great celebration (2000 culture points)
					</div>
					<div class=\"details\"><img class=\"r1\" src=\"img/x.gif\" alt=\"Lumber\" title=\"Lumber\" />29700|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />33250|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />32000|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />6700|<img class=\"clock\" src=\"img/x.gif\" alt=\"duration\" title=\"duration\" />";
                    echo $generator->getTimeFormat(round($gc[$level]));
                    if($session->userinfo['gold'] >= 3 && $building->getTypeLevel(17) > 1) {
                   echo "|<a href=\"build.php?gid=17&t=3&r1=29700&r2=33250&r3=32000&r4=6700\" title=\"NPC trade\"><img class=\"npc\" src=\"img/x.gif\" alt=\"NPC trade\" title=\"NPC trade\" /></a>";
                   }
                	if($inuse > $time){
					echo "<td class=\"act\">
					<div class=\"none\">There is still</br> a celebration</div>
					</td></tr>";
					}	
                  else if(29700 > $village->awood || 33250 > $village->aclay || 32000 > $village->airon || 6700 > $village->acrop) {
                   	$time = $technology->calculateAvaliable($i);
                    echo "<br><span class=\"none\">Enough resources ".$time[0]." at ".$time[1]."</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Too few<br>resources</div>
				</td></tr>";
                }
                else {
                     echo "</td>";
                    echo "<td class=\"act\">
					<a class=\"research\" href=\"celebration.php?type=2&id=$id\">hold</a></td></tr>";
                }
			}
?>
	</tbody>
</table>

