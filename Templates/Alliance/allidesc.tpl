<?php
if(isset($aid)) {
$aid = $aid;
}
else {
$aid = $session->alliance;
}
$allianceinfo = $database->getAlliance($aid);
$memberlist = $database->getAllMember($aid);
$totalpop = 0;
foreach($memberlist as $member) {
	$totalpop += $database->getVSumField($member['id'],"pop");
}

echo "<h1>".$allianceinfo['tag']." - ".$allianceinfo['name']."</h1>";
include("alli_menu.tpl"); 
?>
<table cellpadding="1" cellspacing="1" id="edit"><thead>
<form method="post" action="allianz.php">
<input type="hidden" name="a" value="3">
<input type="hidden" name="o" value="3">
<input type="hidden" name="s" value="5">
<tr>
<th colspan="3">Alliance</th>
</tr><tr>
<td colspan="2">Details</td>
<td>Description</td>
</tr></thead>
<tbody>

<tr><td colspan="2"></td><td class="empty"></td></tr>

<tr>
<th>Tag</td><td class="s7"><?php echo $allianceinfo['tag']; ?></th>
<td rowspan="8" class="desc1"><textarea tabindex="1" name="be1"><?php echo $allianceinfo['desc']; ?></textarea></td>
</tr>

<tr>
<th>Name</th><td><?php echo $allianceinfo['name']; ?></td>
</tr>

<tr><td colspan="2" class="empty"></td></tr>

<tr>
<th>Rank</th><td><?php echo $ranking->getAllianceRank($aid); ?>.</td>
</tr>

<tr>
<th>Points</th><td><?php echo $totalpop; ?></td>
</tr>

<tr>
<th>Members</th><td><?php echo count($memberlist); ?></td>
</tr>

<tr><td colspan="2" class="empty"></td></tr>

<tr><td colspan="2" class="desc2"><textarea tabindex="2" name="be2"><?php echo $allianceinfo['notice']; ?></textarea></td></tr>
</table><p class="btn"><input tabindex="3" type="image" value="" name="s1" id="btn_save" class="dynamic_img" src="img/x.gif" alt="save" /></p></form>
</div>