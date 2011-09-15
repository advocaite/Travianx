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
?>
<form method="post" action="allianz.php">
<input type="hidden" name="a" value="6">
<input type="hidden" name="o" value="6">
<input type="hidden" name="s" value="5">

<table cellpadding="1" cellspacing="1" id="diplomacy" class="dipl"><thead>
<tr><th colspan="2">Alliance diplomacy</th></tr>
</thead><tbody>

<tr>
<th>Alliance</th>

<td><input class="ally text" type="text" name="a_name" maxlength="8"></td>
</tr>

<tr>
<td colspan="2" class="empty"></td>
</tr>

<tr>
<td colspan="2"><label><input class="radio" type="radio" name="dipl" value="1"> offer a confederation</label></td>
</tr>

<tr>
<td colspan="2"><label><input class="radio" type="radio" name="dipl" value="2"> offer non-aggression pact</label></td>

</tr>

<tr>
<td colspan="2"><label><input class="radio" type="radio" name="dipl" value="3"> declare war</label></td>
</tr>
</tbody></table><table cellpadding="1" cellspacing="1" id="hint" class="infos"><thead>
<tr>
<th colspan="2">Hint</th>
</tr>
</thead><tbody>
<tr>
<td colspan="2">It's part of diplomatic etiquette to talk to another alliance and negotiate before sending an offer for a non-aggression pact or a confederation.</td>
</tr></tbody>

</table><div id="box"><p><input type="image" value="ok" name="s1" id="btn_ok" class="dynamic_img" src="img/x.gif" alt="OK" /></p>
<p class="error"></p></div></form><div class="clear"></div><table cellpadding="1" cellspacing="1" id="own" class="dipl"><thead>
<tr><th colspan="3">Own offers</th></tr></thead><tbody><tr><td colspan="3" class="none">none</td></tr></tbody></table><table cellpadding="1" cellspacing="1" id="tip" class="infos"><thead>
<tr>
<th colspan="2">Tip</th>
</tr></thead><tbody>
<tr>
<td colspan="2">If you want to see connections in the alliance description automatically, type <span class="e">[diplomatie]</span> into the description, <span class="e">[ally]</span>, <span class="e">[nap]</span> and <span class="e">[war]</span> are also possible.</td>

</tr>
</tbody></table><table cellpadding="1" cellspacing="1" id="foreign" class="dipl"><thead>
<tr>
<th colspan="3">Foreign offers</th>
</tr></thead><tbody><tr><td colspan="3" class="none">none</td></tr></tbody></table><table cellpadding="1" cellspacing="1" id="existing" class="dipl"><thead>
<tr>
<th colspan="2">Existing relationships</th>
</tr></thead><tbody><tr><td colspan="2" class="none">none</td></tr></tbody></table>
</div>