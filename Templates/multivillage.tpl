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
?>
<?php if(count($session->villages) > 1) { 
?> 
<table id="vlist" cellpadding="1" cellspacing="1"><thead> 
   <tr><td colspan="3"> 
    <a href="dorf3.php" accesskey="9"><?php echo MULTI_V_HEADER; ?>:</a> 
   </td></tr> 
   </thead><tbody> 
    <?php 
    for($i=1;$i<=count($session->villages);$i++) { 
    if($session->villages[$i-1] == $village->wid){$select = "hl";}else{$select = "";} 
    echo "<tr><td class=\"dot ".$select."\">●</td><td class=\"link\">"; 
    echo "<a href=\"?newdid=".$session->villages[$i-1].($id>=19?'&amp;id='.$id:'&amp;id=0')."\">".$database->getVillageField($session->villages[$i-1],'name')."</a></td>";
    $coorproc = $database->getCoor($session->villages[$i-1]); 
    echo "<td class=\"aligned_coords\"><div class=\"cox\">(".$coorproc['x']."</div><div class=\"pi\">|</div><div class=\"coy\">".$coorproc['y'].")</div></td></tr>"; 
    } 
    ?> 
 </tbody></table> 
 <?php 
 } 
?> 
