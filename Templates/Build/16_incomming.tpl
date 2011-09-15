<?php

$units = $database->getMovement("34",$village->wid,1);
$total_for = count($units);

for($y=0;$y < $total_for;$y++){
$timer = $y+1;
if ($units[$y]['sort_type']==3){
	if ($units[$y]['attack_type']==3){
		$actionType = "Attack on ";
	} else if ($units[$y]['attack_type']==4){
		$actionType = "Raid on ";
	}

	if($units[$y]['attack_type'] != 1){
		echo "<table class=\"troop_details\" cellpadding=\"1\" cellspacing=\"1\"><thead><tr><td class=\"role\">
                  <a href=\"karte.php?d=".$units[$y]['from']."&c=".$generator->getMapCheck($units[$y]['from'])."\">".$database->getVillageField($units[$y]['from'],"name")."</a></td>
                  <td colspan=\"10\">";
                  echo "<a href=\"spieler.php?uid=".$database->getVillageField($units[$y]['from'],"owner")."\">".$database->getUserField($database->getVillageField($units[$y]['from'],"owner"),"username",0)."'s troops</a>";
                  echo "</td></tr></thead><tbody class=\"units\">";
                  $tribe = $database->getUserField($database->getVillageField($units[$y]['from'],"owner"),"tribe",0);
                  $start = ($tribe == 1)? 1 : (($tribe == 2)? 11 : 21);
                  echo "<tr><th>&nbsp;</th>";
                  for($i=$start;$i<=($start+9);$i++) {
                  	echo "<td><img src=\"img/x.gif\" class=\"unit u$i\" title=\"".$technology->getUnitName($i)."\" alt=\"".$technology->getUnitName($i)."\" /></td>";	
                  }
                  echo "</tr><tr><th>Troops</th>";
                  for($i=$start;$i<=($start+9);$i++) {
                 		echo "<td class=\"none\">?</td>";
                  }
                  echo "</tr></tbody>";
                  echo '
                  <tbody class="infos">
									<tr>
										<th>Arrival</th>
										<td colspan="10">
										<div class="in small"><span id=timer$timer>'.$generator->getTimeFormat($units[$y]['endtime']-time()).'</span> h</div>';
										    $datetime = $generator->procMtime($units[$y]['endtime']);
										    echo "<div class=\"at small\">";
										    if($datetime[0] != "today") {
										    echo "on ".$datetime[0]." ";
										    }
										    echo "at ".$datetime[1]."</div>
											</div>
										</td>
									</tr>
								</tbody>";
		echo "</table>";
	}
}else if ($units[$y]['sort_type']==4){
	if ($units[$y]['attack_type']==1){
		$actionType = "Return from ";
	} else if ($units[$y]['attack_type']==2){
		$actionType = "Reinforment for ";
	} else if ($units[$y]['attack_type']==3){
		$actionType = "Return from ";
	} else if ($units[$y]['attack_type']==4){
		$actionType = "Return from ";
	}


$to = $database->getMInfo($units[$y]['vref']);
?>
<table class="troop_details" cellpadding="1" cellspacing="1">            
	<thead>
		<tr>
			<td class="role"><a href="karte.php?d=<?php echo $village->wid."&c=".$generator->getMapCheck($village->wid); ?>"><?php echo $village->vname; ?></a></td>
			<td colspan="10"><a href="karte.php?d=<?php echo $to['wref']."&c=".$generator->getMapCheck($to['wref']); ?>"><?php echo "Returning to ".$to['name']; ?></a></td>
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
					</div>
				</td>
			</tr>
		</tbody>
</table>
<?php	
	}
	
	
	}

//}
		?>