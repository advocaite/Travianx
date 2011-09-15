<?php
echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u21\" src=\"img/x.gif\" alt=\"Phalanx\" title=\"Phalanx\" />
						<a href=\"#\" onClick=\"return Popup(21,1);\"> Phalanx</a> <span class=\"info\">(Available: ".$village->unitarray['u21'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />100|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />130|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />55|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />30|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />1|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
				echo $generator->getTimeFormat(round($u21['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t21\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t21.value=".$technology->maxUnit(21)."; return false;\">(".$technology->maxUnit(21).")</a></td></tr></tbody>
				";
    if($technology->getTech(22)) {
        echo "<tbody><tr><td class=\"desc\"><div class=\"tit\">
            <img class=\"unit u22\" src=\"img/x.gif\" alt=\"Swordsman\" title=\"Swordsman\" />
                <a href=\"#\" onClick=\"return Popup(22,1);\"> Swordsman</a> <span class=\"info\">(Available: ".$village->unitarray['u22'].")</span>
                </div>
            <div class=\"details\">
            <img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />140|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />150|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />185|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />60|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />1|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
            echo $generator->getTimeFormat(round($u22['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
            echo "</div></td>
               <td class=\"val\"><input type=\"text\" class=\"text\" name=\"t22\" value=\"0\" maxlength=\"4\"></td>
            <td class=\"max\"><a href=\"#\" onClick=\"document.snd.t22.value=".$technology->maxUnit(22)."; return false;\">(".$technology->maxUnit(22).")</a></td>
               </tr></tbody>";
    }
    ?>