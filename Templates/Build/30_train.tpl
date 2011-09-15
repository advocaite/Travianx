<?php 
  
    for ($i=($session->tribe-1)*10+3;$i<=($session->tribe-1)*10+6;$i++) {
        if ($i <> 3 && $i <> 13 && i <> 14 && $technology->getTech($i)) {
  
echo "<tr><td class=\"desc\">
<div class=\"tit\">
<img class=\"unit u".$i."\" src=\"img/x.gif\" alt=\"".$technology->getUnitName($i)."\" title=\"".$technology->getUnitName($i)."\" />
<a href=\"#\" onClick=\"return Popup(".$i.",1);\"> ".$technology->getUnitName($i)."</a> <span class=\"info\">(Available: ".$village->unitarray['u'.$i].")</span>
</div>
<div class=\"details\">
<img class=\"r1\" src=\"img/x.gif\" alt=\"Wood\" title=\"Wood\" />".(${'u'.$i}['wood']*3)."|<img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".(${'u'.$i}['clay']*3)."|<img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".(${'u'.$i}['iron']*3)."|<img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".(${'u'.$i}['crop']*3)."|<img class=\"r5\" src=\"img/x.gif\" alt=\"Crop consumption\" title=\"Crop consumption\" />".${'u'.$i}['pop']."|<img class=\"clock\" src=\"img/x.gif\" alt=\"Duration\" title=\"Duration\" />";
echo $generator->getTimeFormat(round(${'u'.$i}['time'] * ($bid30[$village->resarray['f'.$id]]['attri'] / 100) / SPEED));
echo "</div>
</td>
<td class=\"val\"><input type=\"text\" class=\"text\" name=\"t".$i."\" value=\"0\" maxlength=\"4\"></td>
<td class=\"max\"><a href=\"#\" onClick=\"document.snd.t".$i.".value=".$technology->maxUnit($i,true)."; return false;\">(".$technology->maxUnit($i,true).")</a></td></tr></tbody>";
        }
    }
?>