			<?php
				$tribe = 2;
                  $start = ($tribe == 1)? 1 : (($tribe == 2)? 11 : 21);
                  echo "<tr><th>&nbsp;</th>";
                  for($i=$start;$i<=($start+9);$i++) {
                  	echo "<td><img src=\"img/x.gif\" class=\"unit u$i\" title=\"".$technology->getUnitName($i)."\" alt=\"".$technology->getUnitName($i)."\" /></td>";	
                  }
			?>
			</tr><tr><th>Troops</th>
            <?php
            for($i=11;$i<=20;$i++) {
            	if($village->unitarray['u'.$i] == 0) {
                	echo "<td class=\"none\">";
                }
                else {
                echo "<td>";
                }
                echo $village->unitarray['u'.$i]."</td>";
            }
            ?>
           </tr></tbody>
            <tbody class="infos"><tr><th>Upkeep</th>
            <td colspan="10"><?php echo $technology->getUpkeep($village->unitarray,2); ?><img class="r4" src="img/x.gif" title="Crop" alt="Crop" />per hour</td></tr>