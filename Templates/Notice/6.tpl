<?php
$dataarray = explode(",",$message->readingNotice['data']);
?>
<table cellpadding="1" cellspacing="1" id="report_surround">
			<thead>
				<tr>
					<th>Subject:</th>
					<th><?php echo $message->readingNotice['topic']; ?></th>
				</tr>
 
				<tr>
					<?php
                $date = $generator->procMtime($message->readingNotice['time']); ?>
					<td class="sent">Sent:</td>
					<td>on <?php echo $date[0]."<span> at ".$date[1]; ?></span><span> </span></td>
				</tr>
			</thead>
			<tbody>
				<tr><td colspan="2" class="empty"></td></tr>
				<tr><td colspan="2" class="report_content">
		<table cellpadding="1" cellspacing="1" id="attacker"><thead>
<tr>
<td class="role">Attacker</td>
<td colspan="10"><a href="spieler.php?uid=7101">Rajewski</a> from the village <a href="karte.php?d=410751&amp;c=c6">New village</a></td>
</tr>
</thead>
<tbody class="units">
<tr>
<td>&nbsp;</td><td><img src="img/x.gif" class="unit u21" title="Phalanx" alt="Phalanx" /></td><td><img src="img/x.gif" class="unit u22" title="Swordsman" alt="Swordsman" /></td><td><img src="img/x.gif" class="unit u23" title="Pathfinder" alt="Pathfinder" /></td><td><img src="img/x.gif" class="unit u24" title="Theutates Thunder" alt="Theutates Thunder" /></td><td><img src="img/x.gif" class="unit u25" title="Druidrider" alt="Druidrider" /></td><td><img src="img/x.gif" class="unit u26" title="Haeduan" alt="Haeduan" /></td><td><img src="img/x.gif" class="unit u27" title="Ram" alt="Ram" /></td><td><img src="img/x.gif" class="unit u28" title="Trebuchet" alt="Trebuchet" /></td><td><img src="img/x.gif" class="unit u29" title="Chieftain" alt="Chieftain" /></td><td><img src="img/x.gif" class="unit u30" title="Settler" alt="Settler" /></td></tr><tr><th>Troops</th><td class="none">0</td><td class="none">0</td><td class="none">0</td><td>220</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td></tr><tr><th>Casualties</th><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td></tr></tbody><tbody class="goods"><tr>
	<th>Bounty</th>
	<td colspan="10">
	<div class="res"><img class="r1" src="img/x.gif" alt="Lumber" title="Lumber" />1 | <img class="r2" src="img/x.gif" alt="Clay" title="Clay" />0 | <img class="r3" src="img/x.gif" alt="Iron" title="Iron" />0 | <img class="r4" src="img/x.gif" alt="Crop" title="Crop" />208</div><div class="carry"><img class="car" src="img/x.gif" alt="carry" title="carry" />209/16500</div></td></tr></tbody></table><table cellpadding="1" cellspacing="1" class="defender">
	<thead>
	<tr>
	<td class="role">Defender</th>
	<td colspan="10"><a href="spieler.php?uid=73101">akakori</a> from the village <a href="karte.php?d=401946&amp;c=ac">tes121</a></td>
	</tr></thead>
	<tbody class="units">
	<tr>
	<td>&nbsp;</td><td><img src="img/x.gif" class="unit u1" title="Legionnaire" alt="Legionnaire" /></td><td><img src="img/x.gif" class="unit u2" title="Praetorian" alt="Praetorian" /></td><td><img src="img/x.gif" class="unit u3" title="Imperian" alt="Imperian" /></td><td><img src="img/x.gif" class="unit u4" title="Equites Legati" alt="Equites Legati" /></td><td><img src="img/x.gif" class="unit u5" title="Equites Imperatoris" alt="Equites Imperatoris" /></td><td><img src="img/x.gif" class="unit u6" title="Equites Caesaris" alt="Equites Caesaris" /></td><td><img src="img/x.gif" class="unit u7" title="Battering Ram" alt="Battering Ram" /></td><td><img src="img/x.gif" class="unit u8" title="Fire Catapult" alt="Fire Catapult" /></td><td><img src="img/x.gif" class="unit u9" title="Senator" alt="Senator" /></td><td><img src="img/x.gif" class="unit u10" title="Settler" alt="Settler" /></td></tr><tr><th>Troops</th><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td></tr><tr><th>Casualties</th><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td></tr></tbody></table><table cellpadding="1" cellspacing="1" class="defender">
	<thead>
	<tr>
	<td class="role">Defender</th>
	<td colspan="10">Reinforcement</td>
	</tr></thead>
	<tbody class="units">
	<tr>
	<td>&nbsp;</td><td><img src="img/x.gif" class="unit u31" title="Rat" alt="Rat" /></td><td><img src="img/x.gif" class="unit u32" title="Spider" alt="Spider" /></td><td><img src="img/x.gif" class="unit u33" title="Snake" alt="Snake" /></td><td><img src="img/x.gif" class="unit u34" title="Bat" alt="Bat" /></td><td><img src="img/x.gif" class="unit u35" title="Wild Boar" alt="Wild Boar" /></td><td><img src="img/x.gif" class="unit u36" title="Wolf" alt="Wolf" /></td><td><img src="img/x.gif" class="unit u37" title="Bear" alt="Bear" /></td><td><img src="img/x.gif" class="unit u38" title="Crocodile" alt="Crocodile" /></td><td><img src="img/x.gif" class="unit u39" title="Tiger" alt="Tiger" /></td><td><img src="img/x.gif" class="unit u40" title="Elephant" alt="Elephant" /></td></tr><tr><th>Troops</th><td>1</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td></tr><tr><th>Casualties</th><td>1</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td><td class="none">0</td></tr></tbody></table></td></tr></tbody></table>
