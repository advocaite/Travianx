<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       Battle.php                                                  ##
##  Developed by:  Dzoki & Dixie  Reworked buy Advocaite love it or hate it    ##
##  Thanks to:     Akakori & Elmar                                             ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

class Battle {
	
	public function procSim($post) {
		global $form;
		// Recivimos el formulario y procesamos
		if(isset($post['a1_v']) && (isset($post['a2_v1']) || isset($post['a2_v2']) || isset($post['a2_v3']) || isset($post['a2_v4']))) {
				$_POST['mytribe'] = $post['a1_v'];
				$target = array();
				if(isset($post['a2_v1'])) {
					array_push($target,1);
				}
				if(isset($post['a2_v2'])) {
					array_push($target,2);
				}
				if(isset($post['a2_v3'])) {
					array_push($target,3);
				}
				if(isset($post['a2_v4'])) {
					array_push($target,4);
				}
                if(isset($post['a2_v5'])) {
                    array_push($target,5);
                }
				$_POST['target'] = $target;
				if(isset($post['a1_1'])) {
					$sum = $sum2 = 0;
					for($i=1;$i<=10;$i++) {
						$sum += $post['a1_'.$i];
					}
					if($sum > 0) {
						if($post['palast'] == "") {
							$post['palast'] = 0;
						}
						if(isset($post['wall1']) && $post['wall1'] == "") {
							$post['wall1'] = 0;
						}
						if(isset($post['wall2']) && $post['wall2'] == "") {
							$post['wall2'] = 0;
						}
						if(isset($post['wall3']) && $post['wall3'] == "") {
							$post['wall3'] = 0;
						}if(isset($post['wall4']) && $post['wall4'] == "") {
                            $post['wall4'] = 0;
                        }if(isset($post['wall5']) && $post['wall5'] == "") {
                            $post['wall5'] = 0;
                        }
						$post['tribe'] = $target[0];
						$_POST['result'] = $this->simulate($post);
						$form->valuearray = $post;
					}
				}
		}
	}
	
	private function simulate($post) {
		// Establecemos los arrays con las unidades del atacante y defensor
		$attacker = array('u1'=>0,'u2'=>0,'u3'=>0,'u4'=>0,'u5'=>0,'u6'=>0,'u7'=>0,'u8'=>0,'u9'=>0,'u10'=>0,'u11'=>0,'u12'=>0,'u13'=>0,'u14'=>0,'u15'=>0,'u16'=>0,'u17'=>0,'u18'=>0,'u19'=>0,'u20'=>0,'u21'=>0,'u22'=>0,'u23'=>0,'u24'=>0,'u25'=>0,'u26'=>0,'u27'=>0,'u28'=>0,'u29'=>0,'u30'=>0,'u31'=>0,'u32'=>0,'u33'=>0,'u34'=>0,'u35'=>0,'u36'=>0,'u37'=>0,'u38'=>0,'u39'=>0,'u40'=>0,'u41'=>0,'u42'=>0,'u43'=>0,'u44'=>0,'u45'=>0,'u46'=>0,'u47'=>0,'u48'=>0,'u49'=>0,'u50'=>0);
		$start = ($post['a1_v']-1)*10+1;
		$att_ab = array('a1'=>0,'a2'=>0,'a3'=>0,'a4'=>0,'a5'=>0,'a6'=>0,'a7'=>0,'a8'=>0);
		$def_ab = array('b1'=>0,'b2'=>0,'b3'=>0,'b4'=>0,'b5'=>0,'b6'=>0,'b7'=>0,'b8'=>0);
		$index = 1;
		for($i=$start;$i<=($start+9);$i++) {
			$attacker['u'.$i] = $post['a1_'.$index];
			if($index <=8) {
				$att_ab['a'.$index] = $post['f1_'.$index];
			}
			$index += 1;
		}
		$defender = array();
		for($i=1;$i<=50;$i++) {
			if(isset($post['a2_'.$i]) && $post['a2_'.$i] != "") {
				$defender['u'.$i] = $post['a2_'.$i];
			}
			else {
				$defender['u'.$i] = 0;
			}
		}
		$deftribe = $post['tribe'];
		$wall = 0;
		switch($deftribe) {
			case 1:
			for($i=1;$i<=8;$i++) {
				$def_ab['b'.$i] = $post['f2_'.$i];
			}
			$wall = $post['wall1'];
			break;
			case 2:
			for($i=11;$i<=18;$i++) {
				$def_ab['b'.$i] = $post['f2_'.$i];
			}
			$wall = $post['wall2'];
			break;
			case 3:
			for($i=21;$i<=28;$i++) {
				$def_ab['b'.$i] = $post['f2_'.$i];
			}
			$wall = $post['wall3'];
			break;
            case 4:
            for($i=31;$i<=38;$i++) {
                $def_ab['b'.$i] = $post['f2_'.$i];
            }
            $wall = $post['wall4'];
            break;
            case 5:
            for($i=41;$i<=48;$i++) {
                $def_ab['b'.$i] = $post['f2_'.$i];
            }
            $wall = $post['wall5'];
            break;
		}
		if($post['kata'] == "") {
			$post['kata'] = 0;
		}
		
		// check scout
		
		$scout = 1;		
		for($i=$start;$i<=($start+9);$i++) {
			if($i == 4 || $i == 14 || $i == 23 || $i == 34 || $i == 44)
			{}
			else{
				if($attacker['u'.$i]>0) {
					$scout = 0;
					break;
				}
			}
		}
		
		if(!$scout)
			return $this->calculateBattle($attacker,$defender,$wall,$post['a1_v'],$deftribe,$post['palast'],$post['ew1'],$post['ew2'],$post['ktyp']+3,$def_ab,$att_ab,$post['kata'],1);
		else
			return $this->calculateBattle($attacker,$defender,$wall,$post['a1_v'],$deftribe,$post['palast'],$post['ew1'],$post['ew2'],1,$def_ab,$att_ab,$post['kata'],1);
	}

	
	//1 raid 0 normal
	function calculateBattle($Attacker,$Defender,$def_wall,$att_tribe,$def_tribe,$residence,$attpop,$defpop,$type,$def_ab,$att_ab,$tblevel,$stonemason) {
		global $bid34;
		// Definieer de array met de eenheden
		$calvary = array(4,5,6,15,16,23,24,25,26,35,36,45,46);
		$catapult = array(8,18,28,38,48);
		$rams = array(7,17,27,37,47);		
		$catp = $ram = 0;
		// Array om terug te keren met het resultaat van de berekening
		$result = array();
		$involve = 0;
		$winner = false;
		// bij 0 alle deelresultaten
		$cap = $ap = $dp = $cdp = $rap = $rdp = 0;
		
		//
		// Berekenen het totaal aantal punten van Aanvaller
		//
        $start = ($att_tribe-1)*10+1;
        $end = ($att_tribe*10);
		
		$abcount = 1;
		
		if($type == 1)
		{
			for($i=$start;$i<=$end;$i++) {
				global ${'u'.$i};

				if($abcount <= 8 && $att_ab['a'.$abcount] > 0) {
					
					$ap += (35 + ( 35 + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $att_ab['a'.$abcount]) - 1)) * $Attacker['u'.$i];
					
				}
				else {
					$ap += $Attacker['u'.$i] * 35;
				}

				$abcount +=1;
				
				$units['Att_unit'][$i] = $Attacker['u'.$i];
			}
		}
		else
		{
			for($i=$start;$i<=$end;$i++) {
				global ${'u'.$i};

				if($abcount <= 8 && $att_ab['a'.$abcount] > 0) {
					if(in_array($i,$calvary)) {
						$cap += (${'u'.$i}['atk'] + (${'u'.$i}['atk'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $att_ab['a'.$abcount]) - 1)) * $Attacker['u'.$i];
					}
					else {
						$ap += (${'u'.$i}['atk'] + (${'u'.$i}['atk'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $att_ab['a'.$abcount]) - 1)) * $Attacker['u'.$i];
					}
				}
				else {
					if(in_array($i,$calvary)) {
						$cap += $Attacker['u'.$i]*${'u'.$i}['atk'];
					}
					else {
						$ap += $Attacker['u'.$i]*${'u'.$i}['atk'];
					}
				}

				
				$abcount +=1;
				// Punten van de catavult van de aanvaller
				if(in_array($i,$catapult)) {
					$catp += $Attacker['u'.$i];
				}
				// Punten van de Rammen van de aanvaller
				if(in_array($i,$rams)) {
					$ram += $Attacker['u'.$i];
				}
				$involve += $Attacker['u'.$i]; 
				$units['Att_unit'][$i] = $Attacker['u'.$i];
			}
		}
		
		//
		// Berekent het totaal aantal punten van de Defender
		//
        $start = ($def_tribe-1)*10+1;
        $end = ($def_tribe*10);

        $abcount = 1;
		
		if($type == 1)
		{
			for($y=4;$y<=44;$y++) {
				if($y == 4 || $y == 14 || $y == 23 || $y == 34 || $y == 44)
				{
					global ${'u'.$y};
					if($y >= $start && $y <= ($end-2) && $def_ab['b'.$abcount] > 0) {
						$dp +=  (20 + (20 + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $def_ab['b'.$y]) - 1)) * $Defender['u'.$y];
						$abcount +=1;
					}
					else {
						$dp += $Defender['u'.$y]*20;
					}
					$units['Def_unit'][$y] = $Defender['u'.$y];
				}
			}
		}
		
		else
		{
			for($y=1;$y<=50;$y++) {
				global ${'u'.$y};
				if($y >= $start && $y <= ($end-2) && $def_ab['b'.$abcount] > 0) {
					$dp +=  (${'u'.$y}['di'] + (${'u'.$y}['di'] + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $def_ab['b'.$y]) - 1)) * $Defender['u'.$y];
					$cdp += (${'u'.$y}['dc'] + (${'u'.$y}['dc'] + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $def_ab['b'.$y]) - 1)) * $Defender['u'.$y];
					$abcount +=1;
				}
				else {
					$dp += $Defender['u'.$y]*${'u'.$y}['di'];
					$cdp += $Defender['u'.$y]*${'u'.$y}['dc'];
				}
				$involve += $Defender['u'.$y]; 
				$units['Def_unit'][$y] = $Defender['u'.$y];
			}
		}
		
		//
		// Formule voor de berekening van de bonus verdedigingsmuur "en" Residence ";
		//		
		if($def_wall > 0) {
			// Stel de factor berekening voor de "Muur" als het type van de beschaving
			// Factor = 1030 Romeinse muur
			// Factor = 1020 Wall Germanen
			// Factor = 1025 Wall Galliers						
			$factor = ($def_tribe == 1)? 1.030 : (($def_tribe == 2)? 1.020 : 1.025);
			// Defense Infanterie = infanterie * Muur (%)
			$dp *= pow($factor,$def_wall);
			// Defensa Cavelerie = Cavelerie * Muur (%)
			$cdp *= pow($factor,$def_wall);
			
			// Berekening van de Basic defence bonus "Residence" 
			$dp += ((2*(pow($residence,2)))*(pow($factor,$def_wall)));
			$cdp += ((2*(pow($residence,2)))*(pow($factor,$def_wall)));
		}
		else {
			// Berekening van de Basic defence bonus "Residence" 			
			$dp += (2*(pow($residence,2)));
			$cdp += (2*(pow($residence,2)));
		}
		
		//
		// Formule voor het berekenen van punten aanvallers (Infanterie & Cavalry)
		//
			$rap = $ap+$cap;
		//
		// Formule voor de berekening van Defensive Punten
		//
			$rdp = ($dp * ($ap/$rap)) + ($cdp * ($cap/$rap)) + 10;
		//
		// En de Winnaar is....:
		//
		$result['Attack_points'] = $rap;
		$result['Defend_points'] = $rdp;
		
		$winner = ($rap > $rdp);

		$result['Winner'] = ($winner)? "attacker" : "defender";
		
		// Formule voor de berekening van de Moraal
		if($attpop > $defpop) {
			if ($rap < $rdp) {
				$moralbonus = min(1.5, pow($attpop / $defpop, (0.2*($rap/$rdp))));
			}
			else {
				$moralbonus = min(1.5, pow($attpop / $defpop, 0.2));
			}
		}
		else {
			$moralbonus = 1.0;
		}

		if($involve >= 1000) {
			$Mfactor = round(2*(1.8592-pow($involve,0.015)),4);
		}
		else {
			$Mfactor = 1.5;
		}
		// Formule voor het berekenen verloren drives
		// $type = 1 Raid, 0 Normal
		if($type == 1)
		{
			$holder = pow((($rdp*$moralbonus)/$rap),$Mfactor);
			$holder = $holder / (1 + $holder);
			// Attacker
			$result[1] = $holder;
	
			// Defender
			$result[2] = 0;
		}
		else if($type == 2)
		{
			
		}
		else if($type == 4) {
			$holder = ($winner) ? pow((($rdp*$moralbonus)/$rap),$Mfactor) : pow(($rap/($rdp*$moralbonus)),$Mfactor);
			$holder = $holder / (1 + $holder);
			// Attacker
			$result[1] = $winner ? $holder : 1 - $holder;
			// Defender
			$result[2] = $winner ? 1 - $holder : $holder;
			$catp -= round($catp*$result[1]/100);
		}
		else if($type == 3) {
			// Attacker
			$result[1] = ($winner)? pow((($rdp*$moralbonus)/$rap),$Mfactor) : 1;
			$result[1] = round($result[1],8);
			// Defender
			$result[2] = (!$winner)?  pow(($rap/($rdp*$moralbonus)),$Mfactor) : 1;
			$result[2] = round($result[2],8);
			// Als aangevallen met "Hero"
			$ku = ($att_tribe-1)*10+9;
            $kings = $Attacker['u'.$ku];    
            
            $aviables= $kings-round($kings*$result[1]);
			if ($aviables>0){
				switch($aviables){
				case 1:
				$fealthy = rand(20,30);
				break;
				case 2:
				$fealthy = rand(40,60);				
				break;
				case 3:
				$fealthy = rand(60,80);				
				break;
				case 4:
				$fealthy = rand(80,100);				
				break;
				default:
				$fealthy = 100;
				break;														
				}
				$result['hero_fealthy'] = $fealthy;
			}
			$catp -= ($winner)? round($catp*$result[1]/100) : round($catp*$result[2]/100);
		}
		// Formule voor de berekening van katapulten nodig
		if($catp > 0 && $tblevel != 0) {
			$wctp = pow(($rap/$rdp),1.5);
			$wctp = ($wctp >= 1)? 1-0.5/$wctp : 0.5*$wctp;
			$wctp *= $catp;

			$need = round((($moralbonus * (pow($tblevel,2) + $tblevel + 1)) / (8 * (round(200 * pow(1.0205,$att_ab['a8']))/200) / (1 * $bid34[$stonemason]['attri']/100))) + 0.5);
			// Aantal katapulten om het gebouw neer te halen
			$result[3] = $need;
			// Aantal Katapulten die handeling
			$result[4] = $wctp;
		}
		
		$result[6] = pow($rap/$rdp*$moralbonus,$Mfactor);		

		$total_att_units = count($units['Att_unit']);
		$start = ($att_tribe-1)*10+1;
        $end = ($att_tribe*10);
        
		for($i=$start;$i <= $end;$i++){
			$y = $i-(($att_tribe-1)*10);
			$result['casualties_attacker'][$y] = round($result[1]*$units['Att_unit'][$i]);
		}
		
		// Work out bounty
        $start = ($att_tribe-1)*10+1;
        $end = ($att_tribe*10);
		
        $max_bounty = 0;
		
		for($i=$start;$i<=$end;$i++) {
            $y = $i-(($att_tribe-1)*10);  
						
			$max_bounty += ($Attacker['u'.$i]-$result['casualties_attacker'][$y])*${'u'.$i}['cap'];
		
		}
				
		$result['bounty'] = $max_bounty;

	
		return $result;
	}

	
};

$battle = new Battle;
?>