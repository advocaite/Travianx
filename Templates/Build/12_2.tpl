
<table cellpadding="1" cellspacing="1" class="build_details">
	<thead>
		<tr>
			<td>Blacksmith</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>

		<tr>
		<?php
		$i = 11;
echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u".$i."\" src=\"img/x.gif\" alt=\"".$technology->getUnitName($i)."\" title=\"".$technology->getUnitName($i)."\" />
						<a href=\"#\" onClick=\"return Popup(".$i.",1);\">".$technology->getUnitName($i)."</a>
					</div>
					<div class=\"details\"><img class=\"r1\" src=\"img/x.gif\" alt=\"Lumber\" title=\"Lumber\" />".${'bs'.$i}['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".${'bs'.$i}['clay']."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".${'bs'.$i}['iron']."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".${'bs'.$i}['crop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"duration\" title=\"duration\" />";
                    echo $generator->getTimeFormat(round(${'bs'.$i}['time']/SPEED));
                    if($session->userinfo['gold'] >= 3 && $building->getTypeLevel(17) > 1) {
                   echo "|<a href=\"build.php?gid=17&t=3&r1=".${'bs'.$i}['wood']."&r2=".${'bs'.$i}['clay']."&r3=".${'bs'.$i}['iron']."&r4=".${'bs'.$i}['crop']."\" title=\"NPC trade\"><img class=\"npc\" src=\"img/x.gif\" alt=\"NPC trade\" title=\"NPC trade\" /></a>";
                   }
                   if(${'bs'.$i}['wood'] > $village->maxstore || ${'bs'.$i}['clay'] > $village->maxstore || ${'bs'.$i}['iron'] > $village->maxstore) {
                    echo "<br><span class=\"none\">Expand warehouse</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Expand<br>warehouse</div>
				</td></tr>";
                }
                else if(${'bs'.$i}['crop'] > $village->maxcrop) {
                    echo "<br><span class=\"none\">Expand granary</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Expand<br>granary</div>
				</td></tr>";
                }
                   else if(${'bs'.$i}['wood'] > $village->awood || ${'bs'.$i}['clay'] > $village->aclay || ${'bs'.$i}['iron'] > $village->airon || ${'bs'.$i}['crop'] > $village->acrop) {
                   	$time = $technology->calculateAvaliable($i);
                    echo "<br><span class=\"none\">Enough resources ".$time[0]." at ".$time[1]."</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Too few<br>resources</div>
				</td></tr>";
                }
                else {
                     echo "</td>";
                    echo "<td class=\"act\">
					<a class=\"research\" href=\"build.php?id=$id&amp;a=$i&amp;c=".$session->mchecker."\">Research</a></td></tr>";
                }
                
                
		for($i=12;$i<=16;$i++) {
		if($technology->getTech($i)) {
    	echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u".$i."\" src=\"img/x.gif\" alt=\"".$technology->getUnitName($i)."\" title=\"".$technology->getUnitName($i)."\" />
						<a href=\"#\" onClick=\"return Popup(".$i.",1);\">".$technology->getUnitName($i)."</a>
					</div>
					<div class=\"details\"><img class=\"r1\" src=\"img/x.gif\" alt=\"Lumber\" title=\"Lumber\" />".${'bs'.$i}['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".${'bs'.$i}['clay']."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".${'bs'.$i}['iron']."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".${'bs'.$i}['crop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"duration\" title=\"duration\" />";
                    echo $generator->getTimeFormat(round(${'bs'.$i}['time']/SPEED));
                    if($session->userinfo['gold'] >= 3 && $building->getTypeLevel(17) > 1) {
                   echo "|<a href=\"build.php?gid=17&t=3&r1=".${'bs'.$i}['wood']."&r2=".${'bs'.$i}['clay']."&r3=".${'bs'.$i}['iron']."&r4=".${'bs'.$i}['crop']."\" title=\"NPC trade\"><img class=\"npc\" src=\"img/x.gif\" alt=\"NPC trade\" title=\"NPC trade\" /></a>";
                   }
                   if(${'bs'.$i}['wood'] > $village->maxstore || ${'bs'.$i}['clay'] > $village->maxstore || ${'bs'.$i}['iron'] > $village->maxstore) {
                    echo "<br><span class=\"none\">Expand warehouse</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Expand<br>warehouse</div>
				</td></tr>";
                }
                else if(${'bs'.$i}['crop'] > $village->maxcrop) {
                    echo "<br><span class=\"none\">Expand granary</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Expand<br>granary</div>
				</td></tr>";
                }
                   else if(${'bs'.$i}['wood'] > $village->awood || ${'bs'.$i}['clay'] > $village->aclay || ${'bs'.$i}['iron'] > $village->airon || ${'bs'.$i}['crop'] > $village->acrop) {
                   	$time = $technology->calculateAvaliable($i);
                    echo "<br><span class=\"none\">Enough resources ".$time[0]." at ".$time[1]."</span></div></td>";
                    echo "<td class=\"act\">
					<div class=\"none\">Too few<br>resources</div>
				</td></tr>";
                }
                else {
                     echo "</td>";
                    echo "<td class=\"act\">
					<a class=\"research\" href=\"build.php?id=$id&amp;a=$i&amp;c=".$session->mchecker."\">Research</a></td></tr>";
                }
    }
		}

		?>
	</tbody>
</table>