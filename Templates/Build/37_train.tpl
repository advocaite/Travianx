<?php

/*-------------------------------------------------------*\
| ********* DO NOT REMOVE THIS COPYRIGHT NOTICE ********* |
+---------------------------------------------------------+
| Developed by:  Manni < manuel_mannhardt@web.de >        |
|                Dzoki < dzoki.travian@gmail.com >        |
| Copyright:     TravianX Project All rights reserved     |
\*-------------------------------------------------------*/


    //check if there is unit needed in the village
    $result = mysql_query("SELECT * FROM ".TB_PREFIX."units WHERE `vref` = ".$village->wid."");
    $units = mysql_fetch_array($result);

?>

    <table cellpadding="1" cellspacing="1" class="build_details">
        <thead>
            <tr>
                <th colspan="2">Train New Hero</th>
            </tr>
        </thead>
            
            <?php if($session->tribe == 1) { ?>
            
            <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u1" src="img/x.gif" alt="Legionnaire" title="Legionnaire" />
						Legionnaire
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u1['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u1['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u1['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u1['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u1['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u1['wood'] OR $village->aclay < $u1['clay'] OR $village->airon < $u1['iron'] OR $village->acrop < $u1['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u1'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=1\">Train</a>";
                } 
                
                ?></center></td>
            </tr>
        
        <?php if($database->checkIfResearched($village->wid, 't2') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u2" src="img/x.gif" alt="Praetorian" title="Praetorian" />
						Praetorian
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u2['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u2['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u2['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u2['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u2['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u2['wood'] OR $village->aclay < $u2['clay'] OR $village->airon < $u2['iron'] OR $village->acrop < $u2['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u2'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=2\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't3') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u3" src="img/x.gif" alt="Imperian" title="Imperian" />
						Imperian
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u3['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u3['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u3['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u3['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u3['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u3['wood'] OR $village->aclay < $u3['clay'] OR $village->airon < $u3['iron'] OR $village->acrop < $u3['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u3'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=3\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't5') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u5" src="img/x.gif" alt="Equites Imperatoris" title="Equites Imperatoris" />
						Equites Imperatoris
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u5['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u5['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u5['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u5['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u5['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u5['wood'] OR $village->aclay < $u5['clay'] OR $village->airon < $u5['iron'] OR $village->acrop < $u5['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u5'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=5\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't6') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u6" src="img/x.gif" alt="Equites Caesaris" title="Equites Caesaris" />
						Equites Caesaris
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u6['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u6['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u6['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u6['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u6['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u6['wood'] OR $village->aclay < $u6['clay'] OR $village->airon < $u6['iron'] OR $village->acrop < $u6['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u6'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=6\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php } if($session->tribe == 2) {?>
            
            <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u11" src="img/x.gif" alt="Clubswinger" title="Clubswinger" />
						Clubswinger
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u11['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u11['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u11['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u11['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u11['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u11['wood'] OR $village->aclay < $u11['clay'] OR $village->airon < $u11['iron'] OR $village->acrop < $u11['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u11'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=11\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        
        <?php if($database->checkIfResearched($village->wid, 't12') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u12" src="img/x.gif" alt="Spearman" title="Spearman" />
						Spearman
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u12['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u12['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u12['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u12['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u12['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u12['wood'] OR $village->aclay < $u12['clay'] OR $village->airon < $u12['iron'] OR $village->acrop < $u12['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u12'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=12\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't13') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u13" src="img/x.gif" alt="Axeman" title="Axeman" />
						Axeman
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u13['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u13['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u13['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u13['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u13['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u13['wood'] OR $village->aclay < $u13['clay'] OR $village->airon < $u13['iron'] OR $village->acrop < $u13['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u13'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=13\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't5') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u15" src="img/x.gif" alt="Paladin" title="Paladin" />
						Paladin
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u15['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u15['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u15['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u15['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u15['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u15['wood'] OR $village->aclay < $u15['clay'] OR $village->airon < $u15['iron'] OR $village->acrop < $u15['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u15'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=15\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't16') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u16" src="img/x.gif" alt="Teutonic Knight" title="Teutonic Knight" />
						Teutonic Knight
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u16['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u16['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u16['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u16['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u16['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u16['wood'] OR $village->aclay < $u16['clay'] OR $village->airon < $u16['iron'] OR $village->acrop < $u16['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u16'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=16\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        
        <?php } if($session->tribe == 3) {?>
            
            <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u21" src="img/x.gif" alt="Phalanx" title="Phalanx" />
						Phalanx
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u21['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u21['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u21['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u21['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u21['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u21['wood'] OR $village->aclay < $u21['clay'] OR $village->airon < $u21['iron'] OR $village->acrop < $u21['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u21'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=21\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        
        <?php if($database->checkIfResearched($village->wid, 't22') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u22" src="img/x.gif" alt="Swordsman" title="Swordsman" />
						Swordsman
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u22['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u22['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u22['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u22['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u22['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u22['wood'] OR $village->aclay < $u22['clay'] OR $village->airon < $u22['iron'] OR $village->acrop < $u22['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u22'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=22\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't24') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u24" src="img/x.gif" alt="Theutates Thunder" title="Theutates Thunder" />
						Theutates Thunder
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u24['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u24['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u24['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u24['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u24['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u24['wood'] OR $village->aclay < $u24['clay'] OR $village->airon < $u24['iron'] OR $village->acrop < $u24['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u24'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=24\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't25') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u25" src="img/x.gif" alt="Druidrider" title="Druidrider" />
						Druidrider
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u25['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u25['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u25['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u25['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u25['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u25['wood'] OR $village->aclay < $u25['clay'] OR $village->airon < $u25['iron'] OR $village->acrop < $u25['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u25'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=25\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php if($database->checkIfResearched($village->wid, 't26') != 0){ ?>
        <tr>
                <td class="desc">
					<div class="tit">
						<img class="unit u26" src="img/x.gif" alt="Haeduan" title="Haeduan" />
						Haeduan
					</div>
					<div class="details">
						<img class="r1" src="img/x.gif" alt="Wood" title="Wood" /><?php echo $u26['wood']; ?>|
                        <img class="r2" src="img/x.gif" alt="Clay" title="Clay" /><?php echo $u26['clay']; ?>|
                        <img class="r3" src="img/x.gif" alt="Iron" title="Iron" /><?php echo $u26['iron']; ?>|
                        <img class="r4" src="img/x.gif" alt="Crop" title="Crop" /><?php echo $u26['crop']; ?>|
                        <img class="r5" src="img/x.gif" alt="Crop consumption" title="Crop consumption" />6|
                        <img class="clock" src="img/x.gif" alt="Duration" title="Duration" />
				        <?php echo $generator->getTimeFormat(round($u26['time'] / SPEED)*3); ?>
                    </div>
				</td>
				
                <td class="val" width="20%"><center><?php 
                
                if($village->awood < $u26['wood'] OR $village->aclay < $u26['clay'] OR $village->airon < $u26['iron'] OR $village->acrop < $u26['crop']) { 
                    echo "<span class=\"none\">No enough resources</span>"; 
                }else if($units['u26'] == 0){ 
                    echo "<span class=\"none\">No available units</span>"; 
                }else {
                    echo "<a href=\"build.php?id=".$id."&train=26\">Train</a>";
                }  
                
                ?></center></td>
            </tr>
        <?php } ?>
        
        <?php } ?>
        
       
       
<?php

        //HERO TRAINING
        if(mysql_num_rows($hero) == 0){
            
        if($session->tribe == 1){
                if($_GET['train'] == 1){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '1', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u1['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id."");                    
                }
                if($_GET['train'] == 2){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '2', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u2['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 3){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '3', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u3['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 5){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '5', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u5['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 6){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '6', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u6['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
            }      
        if($session->tribe == 2){
                if($_GET['train'] == 11){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '11', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u11['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 12){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '12', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u12['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 13){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '13', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u13['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 15){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '15', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u15['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 16){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '16', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u16['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
            }
        if($session->tribe == 3){
                if($_GET['train'] == 21){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '21', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u21['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 22){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '22', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u22['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 24){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '24', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u24['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 25){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '25', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u25['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
                if($_GET['train'] == 26){
                    mysql_query("INSERT INTO ".TB_PREFIX."hero (`uid`, `unit`, `name`, `level`, `points`, `experience`, `dead`, `health`, `attack`, `defence`, `attackbonus`, `defencebonus`, `trainingtime`, `autoregen`) VALUES ('".$session->uid."', '26', '".$session->username."', '0', '10', '0', '0', '100', '0', '0', '0', '0', '".(time() + ($u26['time'] / SPEED)*3)."', '50')");
                    header("Location: build.php?id=".$id.""); 
                }
            }
        }
?>
</table>