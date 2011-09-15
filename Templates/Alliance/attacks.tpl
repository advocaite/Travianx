<?php
if(isset($aid)) {
$aid = $aid;
}
else {
$aid = $session->alliance;
}
$allianceinfo = $database->getAlliance($aid);
echo "<h1>".$allianceinfo['tag']." - ".$allianceinfo['name']."</h1>";
include("alli_menu.tpl"); 
echo "This System don´t work, cooming soon...";
?>
<table cellpadding="1" cellspacing="1" id="offs"><thead>
<tr>
	<th colspan="4">
		Military events
		<div id="submenu">
			<a href="allianz.php?s=3&f=32">
				<img src="img/x.gif" class="btn_def" alt="Defender" title="Defender" />
			</a>

			<a href="allianz.php?s=3&f=31">
				<img src="img/x.gif" class="btn_off" alt="Attacker" title="Attacker" />
			</a>
		</div>
	</th>
</tr>
<tr>
<td>Player</td>
<td>Alliance</td>
<td>Date</td>

</tr></thead><tbody><tr class="none"><td colspan="4">There are no reports available.</td></tr></tbody></table>
