<?php

/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
|              .: PLEASE DONT'T REMOVE OR CHANGE THIS NOTICE :.               	|
| ---------------------------------------------------------------------------   |
|  Filename       16_5_walking.tpl	                                       	 	|
|  Version        0.5                                                           |
|  Description    show settlers wallking in rallypoint                          |
|  Developed by:  DesPlus <Faralive@gmail.com>                                  |
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
 
$units = $database->getMovement(5,$village->wid,0);
$total_for = count($units);

for($y=0;$y<$total_for;$y++){
$timer += $y+1;
	
?>
<table class="troop_details" cellpadding="1" cellspacing="1">            
	<thead>
		<tr>
			<td class="role"><a href="karte.php?d=<?php echo $village->wid."&c=".$generator->getMapCheck($village->wid); ?>"><?php echo $village->vname; ?></a></td>
			<td colspan="10"><a href="karte.php?d=<?php echo $units[0]['to']."&c=".$generator->getMapCheck($units[0]['to']); ?>"><?php echo $attack_type." ".$to['name']; ?>Found new village.</a></td>
		</tr>
	</thead>
	<tbody class="units">
			<?php
				$tribe = $session->tribe;
                  $start = ($tribe == 1)? 1 : (($tribe == 2)? 11 : 21);
                  echo "<tr><th>&nbsp;</th>";
                  for($i=$start;$i<=($start+9);$i++) {
                  	echo "<td><img src=\"img/x.gif\" class=\"unit u$i\" title=\"".$technology->getUnitName($i)."\" alt=\"".$technology->getUnitName($i)."\" /></td>";	
                  }
			?>
			</tr>
 <tr><th>Troops</th>
            <?php
			$units[$y]['t10']=3;
            for($i=1;$i<11;$i++) {
            	if($units[$y]['t'.$i] == 0) {
                	echo "<td class=\"none\">";
                }
                else {
                echo "<td>";
                }
                echo $units[$y]['t'.$i]."</td>";
            }
            ?>
           </tr></tbody>
		<tbody class="infos">
			<tr>
				<th>Arrival</th>
				<td colspan="10">
				<?php
				    echo "<div class=\"in small\"><span id=timer$timer>".$generator->getTimeFormat($units[$y]['endtime']-time())."</span> h</div>";
				    $datetime = $generator->procMtime($units[$y]['endtime']);
				    echo "<div class=\"at small\">";
				    if($datetime[0] != "today") {
				    echo "on ".$datetime[0]." ";
				    }
				    echo "at ".$datetime[1]."</div>";
    		?>
					<!--<div class="abort"><a href="build.php?id=39&a=4&t=5360004"><img src="img/x.gif" class="del" title="Annuleren" alt="Annuleren" /></a>-->
					</div>
				</td>
			</tr>
		</tbody>
</table>
		<?php
		}
		?>
