<?php 
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       multivillage.tpl                                            ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

if(count($session->villages) > 1){?>
<table id="vlist" cellpadding="1" cellspacing="1">
   <thead>
		<tr><td colspan="3"><a href="dorf3.php" accesskey="9"><?php echo MULTI_V_HEADER; ?>:</a></td></tr>
	</thead>
	<tbody><?php
	for($i=1;$i<=count($session->villages);++$i){++$requse;++$requse;
		$select = ($session->villages[$i-1] == $village->wid) ? "hl" : "";
		$coorproc = $database->getCoor($session->villages[$i-1]);echo '
		<tr>
			<td class="dot '.$select.'">●</td>
			<td class="link"><a href="?newdid='.$session->villages[$i-1].(($id>=19) ? "&id=".$id : "&id=0").'">'.$database->getVillageField($session->villages[$i-1],'name').'</a></td>
			<td class="aligned_coords"><div class="cox">('.$coorproc['x'].'</div><div class="pi">|</div><div class="coy">'.$coorproc['y'].')</div></td></tr>';
	}?>
	</tbody>
</table>
<?php
}