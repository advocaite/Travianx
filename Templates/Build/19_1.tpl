  <?php 
  echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u1\" src=\"img/x.gif\" alt=\"Legionnaire\" title=\"Legionnaire\" />
						<a href=\"#\" onClick=\"return Popup(1,1);\"> Legionnaire</a> <span class=\"info\">(Available: ".$village->unitarray['u1'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />".$u1['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />100|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />150|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />30|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />1|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
				echo $generator->getTimeFormat(round($u1['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t1\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t1.value=".$technology->maxUnit(1)."; return false;\">(".$technology->maxUnit(1).")</a></td></tr></tbody>
				";
                if($technology->getTech(2)) {
                 echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u2\" src=\"img/x.gif\" alt=\"Praetorian\" title=\"Praetorian\" />
						<a href=\"#\" onClick=\"return Popup(2,1);\"> Praetorian</a> <span class=\"info\">(Available: ".$village->unitarray['u2'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />100|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />130|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />160|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />70|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />1|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
				echo $generator->getTimeFormat(round($u2['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t2\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t2.value=".$technology->maxUnit(2)."; return false;\">(".$technology->maxUnit(2).")</a></td></tr></tbody>
				";
                }
                if($technology->getTech(3)) {
                 echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u3\" src=\"img/x.gif\" alt=\"Imperian\" title=\"Imperian\" />
						<a href=\"#\" onClick=\"return Popup(3,1);\"> Imperian</a> <span class=\"info\">(Available: ".$village->unitarray['u3'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />150|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />160|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />210|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />80|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />1|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
				echo $generator->getTimeFormat(round($u3['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t3\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t3.value=".$technology->maxUnit(3)."; return false;\">(".$technology->maxUnit(3).")</a></td></tr></tbody>
				";
                }   
                ?>
