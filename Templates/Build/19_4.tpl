<?php
echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u31\" src=\"img/x.gif\" alt=\"".U31."\" title=\"".U31."\" />
						<a href=\"#\" onClick=\"return Popup(31,1);\"> ".U31."</a> <span class=\"info\">(Available: ".$village->unitarray['u31'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />".$u31['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".$u31['clay']."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".$u31['iron']."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".$u31['crop']."|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />".$u31['pop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
				echo $generator->getTimeFormat(round($u31['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t31\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t31.value=".$technology->maxUnit(31)."; return false;\">(".$technology->maxUnit(31).")</a></td></tr></tbody>
				";
                if($technology->getTech(32)) {
                echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u32\" src=\"img/x.gif\" alt=\"".U32."\" title=\"".U32."\" />
						<a href=\"#\" onClick=\"return Popup(32,1);\"> ".U32."</a> <span class=\"info\">(Available: ".$village->unitarray['u32'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />".$u32['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".$u32['clay']."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".$u32['iron']."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".$u32['crop']."|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />".$u32['pop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
                echo $generator->getTimeFormat(round($u32['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t32\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t32.value=".$technology->maxUnit(32)."; return false;\">(".$technology->maxUnit(32).")</a></td></tr></tbody>
				";
                }
                if($technology->getTech(33)){
                echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u33\" src=\"img/x.gif\" alt=\"".U33."\" title=\"".U33."\" />
						<a href=\"#\" onClick=\"return Popup(33,1);\"> ".U33."</a> <span class=\"info\">(Available: ".$village->unitarray['u33'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />".$u33['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".$u33['clay']."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".$u33['iron']."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".$u33['crop']."|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />".$u33['pop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
                echo $generator->getTimeFormat(round($u33['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t33\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t33.value=".$technology->maxUnit(33)."; return false;\">(".$technology->maxUnit(33).")</a></td></tr></tbody>
				";
                }
                if($technology->getTech(34)) {
                echo "<tr><td class=\"desc\">
					<div class=\"tit\">
						<img class=\"unit u34\" src=\"img/x.gif\" alt=\"".U34."\" title=\"".U34."\" />
						<a href=\"#\" onClick=\"return Popup(34,1);\"> ".U34."</a> <span class=\"info\">(Available: ".$village->unitarray['u34'].")</span>
					</div>
					<div class=\"details\">
						<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />".$u34['wood']."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".$u34['clay']."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".$u34['iron']."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".$u34['crop']."|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />".$u34['pop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
                echo $generator->getTimeFormat(round($u34['time'] * ($bid19[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
				echo "</div>
				</td>
				<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t34\" value=\"0\" maxlength=\"4\"></td>
				<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t34.value=".$technology->maxUnit(34)."; return false;\">(".$technology->maxUnit(34).")</a></td></tr></tbody>
				";
}
?>