<table class="troop_details" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<td class="role"><a href="karte.php?d=<?php echo $village->wid."&c=".$generator->getMapCheck($village->wid); ?>">Nature</a></td><td colspan="10"><a href="spieler.php?uid=0">Nature's troops</a></td></tr></thead><tbody class="units"><tr><th>&nbsp;</th><td><img src="img/x.gif" class="unit u31" title="Rat" alt="Rat" /></td><td><img src="img/x.gif" class="unit u32" title="Spider" alt="Spider" /></td><td><img src="img/x.gif" class="unit u33" title="Snake" alt="Snake" /></td><td><img src="img/x.gif" class="unit u34" title="Bat" alt="Bat" /></td><td><img src="img/x.gif" class="unit u35" title="Wild Boar" alt="Wild Boar" /></td><td><img src="img/x.gif" class="unit u36" title="Wolf" alt="Wolf" /></td><td><img src="img/x.gif" class="unit u37" title="Bear" alt="Bear" /></td><td><img src="img/x.gif" class="unit u38" title="Crocodile" alt="Crocodile" /></td><td><img src="img/x.gif" class="unit u39" title="Tiger" alt="Tiger" /></td><td><img src="img/x.gif" class="unit u40" title="Elephant" alt="Elephant" /></td></tr><tr><th>Troops</th>
           <?php
            for($i=31;$i<=40;$i++) {
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
            <td colspan="10"><?php echo $technology->getUpkeep($village->unitarray,4); ?><img class="r4" src="img/x.gif" title="Crop" alt="Crop" />per hour</td></tr>