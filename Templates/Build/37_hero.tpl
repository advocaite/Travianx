<?php

/*-------------------------------------------------------*\
| ********* DO NOT REMOVE THIS COPYRIGHT NOTICE ********* |
+---------------------------------------------------------+
| Developed by:  Manni < manuel_mannhardt@web.de >        |
|                Dzoki < dzoki.travian@gmail.com >        |
| Copyright:     TravianX Project All rights reserved     |
\*-------------------------------------------------------*/
        
        if($hero_info['unit'] == 1) {
        	$name = "Legionnaire";
        } else if($hero_info['unit'] == 2) {
        	$name = "Praetorian";
        } else if($hero_info['unit'] == 3) {
        	$name = "Imperian";
        } else if($hero_info['unit'] == 5) {
        	$name = "Equites Imperatoris";
        } else if($hero_info['unit'] == 6) {
        	$name = "Equites Caesaris";
        } else if($hero_info['unit'] == 11) {
        	$name = "Clubswinger";
        } else if($hero_info['unit'] == 12) {
        	$name = "Spearman";
        } else if($hero_info['unit'] == 13) {
        	$name = "Axeman";
        } else if($hero_info['unit'] == 15) {
        	$name = "Paladin";
        } else if($hero_info['unit'] == 16) {
        	$name = "Teutonic Knight";
        } else if($hero_info['unit'] == 21) {
        	$name = "Phalanx";
        } else if($hero_info['unit'] == 22) {
        	$name = "Swordsman";
        } else if($hero_info['unit'] == 24) {
        	$name = "Theutates Thunder";
        } else if($hero_info['unit'] == 25) {
        	$name = "Druidrider";
        } else if($hero_info['unit'] == 26) {
        	$name = "Haeduan";
        }

        if($hero_info['attack'] >= 1) {
        	$h_attack = round((${'u' . $hero_info['unit']}['atk'] / 50) * (100 + $hero_info['attack']));
        } else {
        	$h_attack = round(${'u' . $hero_info['unit']}['atk']);
        }
        
        if($hero_info['defence'] >= 1) {
        	$h_def1 = round((${'u' . $hero_info['unit']}['di'] / 50) * (100 + $hero_info['defence']));
        	$h_def2 = round((${'u' . $hero_info['unit']}['dc'] / 50) * (100 + $hero_info['defence']));
        } else {
        	$h_def1 = round(${'u' . $hero_info['unit']}['di']);
        	$h_def2 = round(${'u' . $hero_info['unit']}['dc']);
        }
        
?>
    <table id="distribution" cellpadding="1" cellspacing="1">
	<thead><tr>
		<th colspan="5"><?php 
        
        if(isset($_GET['rename'])){
            echo "<form action=\"build.php\" method=\"POST\"><input type=\"hidden\" name=\"userid\" value=\"".$session->uid."\"><input type=\"hidden\" name=\"hero\" value=\"1\"><input type=\"text\" class=\"text\" name=\"name\" maxlength=\"20\" value=\"".$hero_info['name']."\">";            
        }else{
            echo "<a href=\"build.php?id=".$id."&rename\">".$hero_info['name']."</a></form>";
        }
        
        ?> Level <?php echo $hero_info['level']; ?> <span class="info">(<?php echo $name; ?>)</span></th>
	</tr></thead>
	<tbody><tr>
		<th>Offence</th>
		<td class="val"><?php echo $h_attack; ?></td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo (2*$hero_info['attack'])+1; ?>px;" alt="<?php echo $h_attack; ?>" title="<?php echo $h_attack; ?>" /></td>
		<td class="up"><span class="none">
        <?php
        if($hero_info['points'] > 0){
            echo "<a href=\"build.php?id=".$id."&add=off\">(<b>+</b>)</a>";
        }else {
            echo "<span class=\"none\">(+)</span>";
        }
        ?>
        </td>
		<td class="po"><?php echo $hero_info['attack']; ?></td>
	</tr>
	<tr>
		<th>Defence</th>
		<td class="val"><?php echo $h_def1 . "/" . $h_def2; ?></td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo (2*$hero_info['defence'])+1; ?>px;" alt="<?php echo $h_def1 . "/" . $h_def2; ?>"  title="<?php echo $h_def1 . "/" . $h_def2; ?>" /></td>
		<td class="up"><span class="none">
        <?php
        if($hero_info['points'] > 0){
            echo "<a href=\"build.php?id=".$id."&add=deff\">(<b>+</b>)</a>";
        }else {
            echo "<span class=\"none\">(+)</span>";
        }
        ?>
        </td>
		<td class="po"><?php echo $hero_info['defence']; ?></td>
	</tr>
		<tr>
		<th>Off-Bonus</th>
		<td class="val"><?php echo ($hero_info['attackbonus'] * 0.2); ?>%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo ($hero_info['attackbonus'] * 2)+1; ?>px;" alt="<?php echo ($hero_info['attackbonus'] * 0.2); ?>%" title="<?php echo ($hero_info['attackbonus'] * 0.2); ?>%" /></td>
		<td class="up"><span class="none">
        <?php
        if($hero_info['points'] > 0){
            echo "<a href=\"build.php?id=".$id."&add=obonus\">(<b>+</b>)</a>";
        }else {
            echo "<span class=\"none\">(+)</span>";
        }
        ?>
        </td>
		<td class="po"><?php echo $hero_info['attackbonus']; ?></td>
	</tr>
	<tr>
		<th>Def-Bonus</th>
		<td class="val"><?php echo ($hero_info['defencebonus'] * 0.2); ?>%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo ($hero_info['defencebonus'] * 2)+1; ?>px;" alt="<?php echo ($hero_info['defencebonus'] * 0.2); ?>%" title="<?php echo ($hero_info['defencebonus'] * 0.2); ?>%" /></td>
		<td class="up"><span class="none">
        <?php
        if($hero_info['points'] > 0){
            echo "<a href=\"build.php?id=".$id."&add=dbonus\">(<b>+</b>)</a>";
        }else {
            echo "<span class=\"none\">(+)</span>";
        }
        ?>
        </td>
		<td class="po"><?php echo $hero_info['defencebonus']; ?></td>
	</tr>
	<tr>
		<th>Regeneration</th>
		<td class="val"><?php echo ($hero_info['autoregen'] + ($hero_info['regeneration']*15)); ?>/Day</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:<?php echo ($hero_info['regeneration']*2)+1; ?>px;" alt="<?php echo ($hero_info['autoregen'] + ($hero_info['regeneration']*15)); ?>/Day" title="<?php echo ($hero_info['autoregen'] + ($hero_info['regeneration']*15)); ?>/Day" /></td>
		<td class="up"><span class="none">
        <?php
        if($hero_info['points'] > 0){
            echo "<a href=\"build.php?id=".$id."&add=reg\">(<b>+</b>)</a>";
        }else {
            echo "<span class=\"none\">(+)</span>";
        }
        ?>
        </td>
		<td class="po"><?php echo $hero_info['regeneration']; ?></td>
	</tr>
	<tr>
		<td colspan="5" class="empty"></td>
	</tr>
	<tr>
		<th title="until the next level">Experience:</th>
		<td class="val">0%</td>
		<td class="xp"><img class="bar" src="img/x.gif" style="width:1px;" alt="0%" title="0%" /></td>
		<td class="up"></td>
		<td class="rem"><?php echo $hero_info['points']; ?></td>
	</tr>
	</tbody>
</table>

    <?php if(isset($_GET['e'])){
        echo "<p><font size=\"1\" color=\"red\"><b>Error: name too short</b></font></p>";
    }
    ?>
    <?php if($hero_info['level'] <= 3){ ?>
        <p>You can <a href="build.php?id=<?php echo $id; ?>&add=reset">reset</a> your points until you are level <b>3</b> or lower!</p>
    <?php } ?>
    <p>Your hero has <b><?php echo $hero_info['health']; ?></b>% of his hit points.<br/>
    Your hero has conquered <b>0</b> <a href="build.php?id=<?php echo $id; ?>&land">oases</a>.</p>
    
    
    
    <?php 
    
    if(isset($_GET['add'])) {
        	if($_GET['add'] == "reset") {
        		if($hero_info['level'] <= 3){
  		            if($hero_info['attack'] != 0 OR $hero_info['defence'] != 0 OR $hero_info['attackbonus'] != 0 OR $hero_info['defencebonus'] != 0 OR $hero_info['regeneration'] != 0){
                    mysql_query("UPDATE " . TB_PREFIX . "hero SET `points` = '".(($hero_info['level']*5)+10)."' WHERE `uid` = '" . $session->uid . "'");
                    mysql_query("UPDATE " . TB_PREFIX . "hero SET `attack` = '0' WHERE `uid` = '" . $session->uid . "'");
        			mysql_query("UPDATE " . TB_PREFIX . "hero SET `defence` = '0' WHERE `uid` = '" . $session->uid . "'");
        			mysql_query("UPDATE " . TB_PREFIX . "hero SET `attackbonus` = '0' WHERE `uid` = '" . $session->uid . "'");
        			mysql_query("UPDATE " . TB_PREFIX . "hero SET `defencebonus` = '0' WHERE `uid` = '" . $session->uid . "'");
        			mysql_query("UPDATE " . TB_PREFIX . "hero SET `regeneration` = '0' WHERE `uid` = '" . $session->uid . "'");
                    header("Location: build.php?id=".$id."");
        		}
        	}
         }
        	if($_GET['add'] == "off") {
        			if($hero_info['points'] > 0) {
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `attack` = `attack` + 1 WHERE `uid` = '" . $session->uid . "'");
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `points` = `points` - 1 WHERE `uid` = '" . $session->uid . "'");
                        header("Location: build.php?id=".$id."");
        			}
        		}
            if($_GET['add'] == "deff") {
        			if($hero_info['points'] > 0) {
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `defence` = `defence` + 1 WHERE `uid` = '" . $session->uid . "'");
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `points` = `points` - 1 WHERE `uid` = '" . $session->uid . "'");
                        header("Location: build.php?id=".$id."");
        			}
        		}
          if($_GET['add'] == "obonus") {
        			if($hero_info['points'] > 0) {
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `attackbonus` = `attackbonus` + 1 WHERE `uid` = '" . $session->uid . "'");
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `points` = `points` - 1 WHERE `uid` = '" . $session->uid . "'");
                        header("Location: build.php?id=".$id."");
        			}
        		}
          if($_GET['add'] == "dbonus") {
        			if($hero_info['points'] > 0) {
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `defencebonus` = `defencebonus` + 1 WHERE `uid` = '" . $session->uid . "'");
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `points` = `points` - 1 WHERE `uid` = '" . $session->uid . "'");
                        header("Location: build.php?id=".$id."");
        			}
        		}
          if($_GET['add'] == "reg") {
        			if($hero_info['points'] > 0) {
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `regeneration` = `regeneration` + 1 WHERE `uid` = '" . $session->uid . "'");
        				mysql_query("UPDATE " . TB_PREFIX . "hero SET `points` = `points` - 1 WHERE `uid` = '" . $session->uid . "'");
                        header("Location: build.php?id=".$id."");
        			}
        		}
          }
          
         ?>