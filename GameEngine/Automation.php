<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       Automation.php                                              ##
##  Developed by:  Dzoki & Dixie Reworked buy Advocaite                        ##
##  Thanks to:     Akakori & Elmar & G3n3s!s & TopErwin & TTMMTT               ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

class Automation {
	
	private $bountyresarray = array();
	private $bountyinfoarray = array();
	private $bountyproduction = array();
	private $bountyocounter = array();
	private $bountyunitall = array();
	private $bountypop;
	
		public function procResType($ref) {
		global $session;
		switch($ref) {
			case 1: $build = "Woodcutter"; break;
			case 2: $build = "Clay Pit"; break;
			case 3: $build = "Iron Mine"; break;
			case 4: $build = "Cropland"; break;
			case 5: $build = "Sawmill"; break;
			case 6: $build = "Brickyard"; break;
			case 7: $build = "Iron Foundry"; break;
			case 8: $build = "Grain Mill"; break;
			case 9: $build = "Bakery"; break;
			case 10: $build = "Warehouse"; break;
			case 11: $build = "Granary"; break;
			case 12: $build = "Blacksmith"; break;
			case 13: $build = "Armoury"; break;
			case 14: $build = "Tournament Square"; break;
			case 15: $build = "Main Building"; break;
			case 16: $build = "Rally Point"; break;
			case 17: $build = "Marketplace"; break;
			case 18: $build = "Embassy"; break;
			case 19: $build = "Barracks"; break;
			case 20: $build = "Stable"; break;
			case 21: $build = "Workshop"; break;
			case 22: $build = "Academy"; break;
			case 23: $build = "Cranny"; break;
			case 24: $build = "Town Hall"; break;
			case 25: $build = "Residence"; break;
			case 26: $build = "Palace"; break;
			case 27: $build = "Treasury"; break;
			case 28: $build = "Trade Office"; break;
			case 29: $build = "Great Barracks"; break;
			case 30: $build = "Great Stable"; break;
			case 31: $build = "City Wall"; break;
			case 32: $build = "Earth Wall"; break;
			case 33: $build = "Palisade"; break;
			case 34: $build = "Stonemason's Lodge"; break;
			case 35: $build = "Brewery"; break;
			case 36: $build = "Trapper"; break;
			case 37: $build = "Hero's Mansion"; break;
			case 38: $build = "Great Warehouse"; break;
			case 39: $build = "Great Granary"; break;
			case 40: $build = "Wonder of the World"; break;
			case 41: $build = "Horse Drinking Trough"; break;
			case 42: $build = "Great Workshop"; break;
			default: $build = "Error"; break;
		}
		return $build;
	}
	
	function recountPop($vid){
    global $database;
		$fdata = $database->getResourceLevel($vid); 
		$popTot = 0;
		
		for ($i = 1; $i <= 40; $i++) {
			$lvl = $fdata["f".$i];
			$building = $fdata["f".$i."t"];
			if($building){
				$popTot += $this->buildingPOP($building,$lvl);
			}       
		}        
		
		$q = "UPDATE ".TB_PREFIX."vdata set pop = $popTot where wref = $vid";
		mysql_query($q);
		
		return $popTot;

	}
  
	function buildingPOP($f,$lvl){
	$name = "bid".$f;
	global $$name;        
		$popT = 0;
		$dataarray = $$name;
	
		for ($i = 0; $i <= $lvl; $i++) {
			$popT += $dataarray[$i]['pop'];
		}
    return $popT;
	}
	
	 public function Automation() {
	 
        $this->ClearUser();
        $this->ClearInactive();
        $this->pruneResource();
        if(!file_exists("GameEngine/Prevention/culturepoints.txt") or time()-filemtime("GameEngine/Prevention/culturepoints.txt")>10) {
            $this->culturePoints();
        }
        if(!file_exists("GameEngine/Prevention/research.txt") or time()-filemtime("GameEngine/Prevention/research.txt")>10) {
            $this->researchComplete();
        }
        if(!file_exists("GameEngine/Prevention/cleardeleting.txt") or time()-filemtime("GameEngine/Prevention/cleardeleting.txt")>10) {
            $this->clearDeleting();
        }
        if(!file_exists("GameEngine/Prevention/build.txt") or time()-filemtime("GameEngine/Prevention/build.txt")>10) {
            $this->buildComplete();
        }
        if(!file_exists("GameEngine/Prevention/market.txt") or time()-filemtime("GameEngine/Prevention/market.txt")>10) {
            $this->marketComplete();
        }
        if(!file_exists("GameEngine/Prevention/training.txt") or time()-filemtime("GameEngine/Prevention/training.txt")>10) {
            $this->trainingComplete();
        }
        if(!file_exists("GameEngine/Prevention/sendunits.txt") or time()-filemtime("GameEngine/Prevention/sendunits.txt")>10) {
            $this->sendunitsComplete();
        }
        if(!file_exists("GameEngine/Prevention/sendreinfunits.txt") or time()-filemtime("GameEngine/Prevention/sendreinfunits.txt")>10) {
            $this->sendreinfunitsComplete();
        }
        if(!file_exists("GameEngine/Prevention/returnunits.txt") or time()-filemtime("GameEngine/Prevention/returnunits.txt")>10) {
            $this->returnunitsComplete();
        }
        if(!file_exists("GameEngine/Prevention/settlers.txt") or time()-filemtime("GameEngine/Prevention/settlers.txt")>10) {
            $this->sendSettlersComplete();
        }    
        if(!file_exists("GameEngine/Prevention/celebration.txt") or time()-filemtime("GameEngine/Prevention/celebration.txt")>10) {  
            $this->celebrationComplete();    
        }
    }  
	
	private function clearDeleting() {
		global $database;
		$ourFileHandle = @fopen("GameEngine/Prevention/cleardeleting.txt", 'w');
		@fclose($ourFileHandle);
		$needDelete = $database->getNeedDelete();
		if(count($needDelete) > 0) {
			foreach($needDelete as $need) {
				$needVillage = $database->getVillagesID($need['uid']); //wref
				foreach($needVillage as $village) {
					$q = "DELETE FROM ".TB_PREFIX."abdata where wref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."bdata where wid = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."enforcement where vref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."fdata where vref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."market where vref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."movement where to = ".$village['wref']." or from = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."odata where wref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."research where vref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."tdata where vref = ".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."training where vref =".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."units where vref =".$village['wref'];
					$database->query($q);
					$q = "DELETE FROM ".TB_PREFIX."vdata where wref = ".$village['wref'];
					$database->query($q);
					$q = "UPDATE ".TB_PREFIX."wdata set occupied = 0 where id = ".$village['wref'];
					$database->query($q);
				}
				$q = "DELETE FROM ".TB_PREFIX."mdata where target = ".$need['uid']." or owner = ".$need['uid'];
				$database->query($q);
				$q = "DELETE FROM ".TB_PREFIX."ndata where uid = ".$need['uid'];
				$database->query($q);
				$q = "DELETE FROM ".TB_PREFIX."users where id = ".$need['uid'];
				$database->query($q);
			}
		}
		if(file_exists("GameEngine/Prevention/cleardeleting.txt")) {
			@unlink("GameEngine/Prevention/cleardeleting.txt");
		}
	}
	
	private function ClearUser() {
		global $database;
		if(AUTO_DEL_INACTIVE) {
			$time = time()+UN_ACT_TIME;
			$q = "DELETE from ".TB_PREFIX."users where timestamp >= $time and act != ''";
			$database->query($q);
		}
	}
	
	private function ClearInactive() {
		global $database;
		if(TRACK_USR) {
			$timeout = time()-USER_TIMEOUT*60;
     		 $q = "DELETE FROM ".TB_PREFIX."active WHERE timestamp < $timeout";
			 $database->query($q);
		}
	}
	
	private function pruneResource() {
		global $database;
		if(!ALLOW_BURST) {
			$q = "UPDATE ".TB_PREFIX."vdata set `wood` = `maxstore` WHERE `wood` > `maxstore`";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `clay` = `maxstore` WHERE `clay` > `maxstore`";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `iron` = `maxstore` WHERE `iron` > `maxstore`";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `crop` = `maxcrop` WHERE `crop` > `maxcrop`";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `crop` = 100 WHERE `crop` < 0";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `wood` = 0 WHERE `wood` < 0";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `clay` = 0 WHERE `clay` < 0";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `iron` = 0 WHERE `iron` < 0";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `maxstore` = 800 WHERE `maxstore` <= 800";
			$database->query($q);
			$q = "UPDATE ".TB_PREFIX."vdata set `maxcrop` = 800 WHERE `maxcrop` <= 800";
			$database->query($q);
		}
	}
	
	private function culturePoints() {
		global $database;
		$ourFileHandle = @fopen("GameEngine/Prevention/culturepoints.txt", 'w');
		@fclose($ourFileHandle);
		$time = time()-84600;
		$array = array();
		$q = "SELECT id, lastupdate FROM ".TB_PREFIX."users where lastupdate < $time";
		$array = $database->query_return($q);
		
		foreach($array as $indi) {
			if($indi['lastupdate'] < $time){
				$cp = $database->getVSumField($indi['id'], 'cp');
				$newupdate = time();
				$q = "UPDATE ".TB_PREFIX."users set cp = cp + $cp, lastupdate = $newupdate where id = '".$indi['id']."'";
				$database->query($q);
			}
		}
		if(file_exists("GameEngine/Prevention/culturepoints.txt")) {
			@unlink("GameEngine/Prevention/culturepoints.txt");
		}
	}
	
	private function buildComplete() {
		global $database,$bid18,$bid10,$bid11;
		$ourFileHandle = @fopen("GameEngine/Prevention/build.txt", 'w');
		@fclose($ourFileHandle);
		$time = time();
		$array = array();
		$q = "SELECT * FROM ".TB_PREFIX."bdata where timestamp < $time";
		$array = $database->query_return($q);
		foreach($array as $indi) {
			$q = "UPDATE ".TB_PREFIX."fdata set f".$indi['field']." = f".$indi['field']." + 1, f".$indi['field']."t = ".$indi['type']." where vref = ".$indi['wid'];
			if($database->query($q)) {
				$level = $database->getFieldLevel($indi['wid'],$indi['field']);
				$pop = $this->getPop($indi['type'],($level-1));
				$database->modifyPop($indi['wid'],$pop[1],0);
				$database->addCP($indi['wid'],$pop[1]);
				if($indi['type'] == 18) {
					$owner = $database->getVillageField($indi['wid'],"owner");
					$max = $bid18[$level]['attri'];
					$q = "UPDATE ".TB_PREFIX."alidata set max = $max where leader = $owner";
					$database->query($q);
				}

					if($indi['type'] == 10) {
					  $max=$database->getVillageField($indi['wid'],"maxstore");
					  if($level=='1' && $max==800){ $max-=800; }
					  $max-=$bid10[$level-1]['attri'];      
					  $max+=$bid10[$level]['attri'];  
					  $database->setVillageField($indi['wid'],"maxstore",$max);
					}
					
					if($indi['type'] == 11) {
					  $max=$database->getVillageField($indi['wid'],"maxcrop");
					  if($level=='1' && $max==800){ $max-=800; }
					  $max-=$bid11[$level-1]['attri'];      
					  $max+=$bid11[$level]['attri']; 
					  $database->setVillageField($indi['wid'],"maxcrop",$max);
					}	
	      
				$q4 = "UPDATE ".TB_PREFIX."bdata set loopcon = 0 where loopcon = 1 and wid = ".$indi['wid'];
				$database->query($q4);
				$q = "DELETE FROM ".TB_PREFIX."bdata where id = ".$indi['id'];
				$database->query($q);
			}
		}
		if(file_exists("GameEngine/Prevention/build.txt")) {
			@unlink("GameEngine/Prevention/build.txt");
		}
	}
	
	private function getPop($tid,$level) {
		$name = "bid".$tid;
		global $$name,$village;
		$dataarray = $$name;
		$pop = $dataarray[($level+1)]['pop'];
		$cp = $dataarray[($level+1)]['pop'];
		return array($pop,$cp);
	}
	
	private function marketComplete() {
		global $database,$generator;
		$ourFileHandle = @fopen("GameEngine/Prevention/market.txt", 'w');
		@fclose($ourFileHandle);
		$time = time();
		$q = "SELECT * FROM ".TB_PREFIX."movement, ".TB_PREFIX."send where ".TB_PREFIX."movement.ref = ".TB_PREFIX."send.id and ".TB_PREFIX."movement.proc = 0 and sort_type = 0 and endtime < $time";
		$dataarray = $database->query_return($q);
		foreach($dataarray as $data) {
			
			if($data['wood'] >= $data['clay'] && $data['wood'] >= $data['iron'] && $data['wood'] >= $data['crop']){ $sort_type = "11"; }
			elseif($data['clay'] >= $data['wood'] && $data['clay'] >= $data['iron'] && $data['clay'] >= $data['crop']){ $sort_type = "12"; }
			elseif($data['iron'] >= $data['wood'] && $data['iron'] >= $data['clay'] && $data['iron'] >= $data['crop']){ $sort_type = "13"; }
			elseif($data['crop'] >= $data['wood'] && $data['crop'] >= $data['clay'] && $data['crop'] >= $data['iron']){ $sort_type = "14"; }

			$to = $database->getMInfo($data['to']);
			$from = $database->getMInfo($data['from']);
			$database->addNotice($to['owner'],$sort_type,''.addslashes($from['name']).' send resources to '.addslashes($to['name']).'',''.$from['owner'].','.$from['wref'].','.$data['wood'].','.$data['clay'].','.$data['iron'].','.$data['crop'].'',$data['endtime']); 
			if($from['owner'] != $to['owner']) {
				$database->addNotice($from['owner'],$sort_type,''.addslashes($from['name']).' send resources to '.addslashes($to['name']).'',''.$from['owner'].','.$from['wref'].','.$data['wood'].','.$data['clay'].','.$data['iron'].','.$data['crop'].'',$data['endtime']);
			}
			$database->modifyResource($data['to'],$data['wood'],$data['clay'],$data['iron'],$data['crop'],1);
			$tocoor = $database->getCoor($data['from']);
			$fromcoor = $database->getCoor($data['to']);
			$targettribe = $database->getUserField($database->getVillageField($data['from'],"owner"),"tribe",0);
			$endtime = $this->procDistanceTime($tocoor,$fromcoor,$targettribe,0) + $data['endtime'];
			$database->addMovement(2,$data['to'],$data['from'],$data['merchant'],$endtime);
			$database->setMovementProc($data['moveid']);
		}
		$q = "UPDATE ".TB_PREFIX."movement set proc = 1 where endtime < $time and sort_type = 2";
		$database->query($q);
		if(file_exists("GameEngine/Prevention/market.txt")) {
			@unlink("GameEngine/Prevention/market.txt");
		}
	}
	
	private function sendunitsComplete() {
		global $bid23,$database,$battle,$village,$technology,$logging;
			$ourFileHandle = @fopen("GameEngine/Prevention/sendunits.txt", 'w');
			@fclose($ourFileHandle);
		$time = time();
		$q = "SELECT * FROM ".TB_PREFIX."movement, ".TB_PREFIX."attacks where ".TB_PREFIX."movement.ref = ".TB_PREFIX."attacks.id and ".TB_PREFIX."movement.proc = '0' and ".TB_PREFIX."movement.sort_type = '3' and ".TB_PREFIX."attacks.attack_type != '2' and endtime < $time";
		$dataarray = $database->query_return($q);
		
		foreach($dataarray as $data) {
			//set base things
			$tocoor = $database->getCoor($data['from']);
			$fromcoor = $database->getCoor($data['to']);
			$owntribe = $database->getUserField($database->getVillageField($data['from'],"owner"),"tribe",0);
			$targettribe = $database->getUserField($database->getVillageField($data['to'],"owner"),"tribe",0);
			$ownally = $database->getUserField($database->getVillageField($data['from'],"owner"),"alliance",0);
            $targetally = $database->getUserField($database->getVillageField($data['to'],"owner"),"alliance",0);
            $to = $database->getMInfo($data['to']);
			$from = $database->getMInfo($data['from']);
			$toF = $database->getVillage($data['to']);
			$fromF = $database->getVillage($data['from']);
			$AttackArrivalTime = $data['endtime'];

			/*--------------------------------
			// Battle part
			--------------------------------*/

								//get defence units
								/*	$q = "SELECT * FROM ".TB_PREFIX."units WHERE vref='".$data['to']."'";
									$unitlist = $database->query_return($q);

									$Defender = array();
												$start = ($targettribe == 1)? 1 : (($targettribe == 2)? 11: 21);
												$end = ($targettribe == 1)? 10 : (($targettribe == 2)? 20: 30);
										for($i=$start;$i<=$end;$i++) {
												if($unitlist)
													$Defender['u'.$i] = $unitlist[0]['u'.$i];
												else
													$Defender['u'.$i] = '';
												}*/
						//get defence units 
						$Defender = array();	$rom = $ger = $gal = $nat = $natar = 0;
						$Defender = $database->getUnit($data['to']);
						$enforcementarray = $database->getEnforceVillage($data['to'],0);
						if(count($enforcementarray) > 0) {
							foreach($enforcementarray as $enforce) {
								for($i=1;$i<=50;$i++) {
									$Defender['u'.$i] += $enforce['u'.$i];
								}
							}
						}
							for($i=1;$i<=50;$i++){
								if(!isset($Defender['u'.$i])){
									$Defender['u'.$i] = '0';
								} else {
								 if($Defender['u'.$i]=='' or $Defender['u'.$i]<='0'){
									$Defender['u'.$i] = '0';								 
								 } else {
												if($i<=10){ $rom='1'; } 
											else if($i<=20){ $ger='1'; } 
											else if($i<=30){ $gal='1'; } 
											else if($i<=40){ $nat='1'; } 
											else if($i<=50){ $natar='1'; } 
								}
								}
							}
									//get attack units			
									        $Attacker = array();
                                            $start = ($owntribe-1)*10+1;
                                            $end = ($owntribe*10);
									        $u = (($owntribe-1)*10);															
                                            $catp =  0;                                
                                            $catapult = array(8,18,28,38,48);
                                            $ram = array(7,17,27,37,47);
                                            $chief = array(9,19,29,39,49);
                                            $spys = array(4,14,23,34,44);
                                        for($i=$start;$i<=$end;$i++) {
                                            $y = $i-$u;
                                            $Attacker['u'.$i] = $dataarray[0]['t'.$y];
                                                //there are catas
                                                if(in_array($i,$catapult)) {
                                                $catp += $Attacker['u'.$i];
                                                $catp_pic = $i;
                                                }
                                                if(in_array($i,$ram)) {
                                                $rams += $Attacker['u'.$i];
                                                $ram_pic = $i;
                                                }
                                                if(in_array($i,$chief)) {
                                                $chiefs += $Attacker['u'.$i];
                                                $chief_pic = $i;
                                                }
                                                if(in_array($i,$spys)) {
                                                $chiefs += $Attacker['u'.$i];
                                                $spy_pic = $i;
                                                }
                                                }		

									//need to set these variables.
									$def_wall = $database->getFieldLevel($data['to'],40);
									$att_tribe = $owntribe;
									$def_tribe = $targettribe;
									$residence = "0";
									$attpop = $fromF['pop'];
									$defpop = $toF['pop']; 
									for ($i=19; $i<40; $i++){
										if ($database->getFieldLevel($data['to'],"".$i."t")=='25' OR $database->getFieldLevel($data['to'],"".$i."t")=='26'){
											$residence = $database->getFieldLevel($data['to'],$i);
											$i=40;
										}
									}
						
									//type of attack
									if($dataarray[0]['attack_type'] == 1){
										$type = 1;
										$scout = 1;
									}
									if($dataarray[0]['attack_type'] == 2){
										$type = 2;
									}
									if($dataarray[0]['attack_type'] == 3){
										$type = 3;
									}
									if($dataarray[0]['attack_type'] == 4){
										$type = 4;
									}
								
									$def_ab = Array (
										"b1" => 0, // Blacksmith level
										"b2" => 0, // Blacksmith level
										"b3" => 0, // Blacksmith level
										"b4" => 0, // Blacksmith level
										"b5" => 0, // Blacksmith level
										"b6" => 0, // Blacksmith level
										"b7" => 0, // Blacksmith level
										"b8" => 0); // Blacksmith level
									
									$att_ab = Array ( 
										"a1" => 0, // armoury level
										"a2" => 0, // armoury level
										"a3" => 0, // armoury level
										"a4" => 0, // armoury level
										"a5" => 0, // armoury level
										"a6" => 0, // armoury level
										"a7" => 0, // armoury level
										"a8" => 0); // armoury level

							//choose a building to attack
                            if($catp > 0 and $type=='3'){
                                if($toF['pop']>'1'){
                                    for ($i=1; $i<2; $i++){
                                        //$rand=rand(1,39);
                                        $basearray = $database->getMInfo($data['to']);
                                        $resarray = $database->getResourceLevel($basearray['wref']);
                                        if($data['ctar1'] == 0){
                                            $rand = 0; 
                                            for($j=19;$j<=40;$j++) {
                                        if($resarray['f'.$j.'t'] != 0 ) {
                                        $rand = $j;
                                            }
                                        }
                                        }else{
                                        //$resarray = $database->getResourceLevel($data['to']);
                                        $rand = 0; 
                                        for($j=19;$j<=40;$j++) {
                                        if($resarray['f'.$j.'t'] == $data['ctar1']) {
                                            
                                            $rand = $j;
                                            }
                                        } 
                                        }
                                        if ($rand == 0){
                                        for($j=19;$j<=40;$j++) {
                                        if($resarray['f'.$j.'t'] != 0 ) {
                                        $rand = $j;
                                            }
                                        }   
                                        }
                                        //$rand=$data['ctar1'];
                                            if ($database->getFieldLevel($basearray['wref'],$rand)!='0'){
                                                $tblevel = $database->getFieldLevel($basearray['wref'],$rand);
                                                $tbgid = $database->getFieldLevel($basearray['wref'],"".$rand."t");
                                                $tbid = $rand;
                                                $i="4";
                                            } else { $i--; }
                                    }
                                } else { $empty='1'; }
                            } else { $tblevel = '0'; }
                                    $stonemason = "1";

							
			/*--------------------------------
			// End Battle part
			--------------------------------*/
		
			$battlepart = $battle->calculateBattle($Attacker,$Defender,$def_wall,$att_tribe,$def_tribe,$residence,$attpop,$defpop,$type,$def_ab,$att_ab,$tblevel,$stonemason);
			
			//units attack string for battleraport
			$unitssend_att = ''.$data['t1'].','.$data['t2'].','.$data['t3'].','.$data['t4'].','.$data['t5'].','.$data['t6'].','.$data['t7'].','.$data['t8'].','.$data['t9'].','.$data['t10'].'';
			
			//units defence string for battleraport 
				$unitssend_def[1] = ''.$Defender['u1'].','.$Defender['u2'].','.$Defender['u3'].','.$Defender['u4'].','.$Defender['u5'].','.$Defender['u6'].','.$Defender['u7'].','.$Defender['u8'].','.$Defender['u9'].','.$Defender['u10'].'';
				$unitssend_def[2] = ''.$Defender['u11'].','.$Defender['u12'].','.$Defender['u13'].','.$Defender['u14'].','.$Defender['u15'].','.$Defender['u16'].','.$Defender['u17'].','.$Defender['u18'].','.$Defender['u19'].','.$Defender['u20'].'';
				$unitssend_def[3] = ''.$Defender['u21'].','.$Defender['u22'].','.$Defender['u23'].','.$Defender['u24'].','.$Defender['u25'].','.$Defender['u26'].','.$Defender['u27'].','.$Defender['u28'].','.$Defender['u29'].','.$Defender['u30'].'';
				$unitssend_def[4] = ''.$Defender['u31'].','.$Defender['u32'].','.$Defender['u33'].','.$Defender['u34'].','.$Defender['u35'].','.$Defender['u56'].','.$Defender['u37'].','.$Defender['u38'].','.$Defender['u39'].','.$Defender['u40'].'';
				$unitssend_def[5] = ''.$Defender['u41'].','.$Defender['u42'].','.$Defender['u43'].','.$Defender['u44'].','.$Defender['u45'].','.$Defender['u46'].','.$Defender['u47'].','.$Defender['u48'].','.$Defender['u49'].','.$Defender['u50'].'';
			    $unitssend_deff[1] = '?,?,?,?,?,?,?,?,?,?,'; 
                $unitssend_deff[2] = '?,?,?,?,?,?,?,?,?,?,'; 
                $unitssend_deff[3] = '?,?,?,?,?,?,?,?,?,?,'; 
                $unitssend_deff[4] = '?,?,?,?,?,?,?,?,?,?,'; 
                $unitssend_deff[5] = '?,?,?,?,?,?,?,?,?,?,'; 
			//how many troops died? for battleraport
			if($battlepart['casualties_attacker'][1] == 0) { $dead1 = 0; } else { $dead1 = $battlepart['casualties_attacker'][1]; }
			if($battlepart['casualties_attacker'][2] == 0) { $dead2 = 0; } else { $dead2 = $battlepart['casualties_attacker'][2]; }
			if($battlepart['casualties_attacker'][3] == 0) { $dead3 = 0; } else { $dead3 = $battlepart['casualties_attacker'][3]; }
			if($battlepart['casualties_attacker'][4] == 0) { $dead4 = 0; } else { $dead4 = $battlepart['casualties_attacker'][4]; }
			if($battlepart['casualties_attacker'][5] == 0) { $dead5 = 0; } else { $dead5 = $battlepart['casualties_attacker'][5]; }
			if($battlepart['casualties_attacker'][6] == 0) { $dead6 = 0; } else { $dead6 = $battlepart['casualties_attacker'][6]; }
			if($battlepart['casualties_attacker'][7] == 0) { $dead7 = 0; } else { $dead7 = $battlepart['casualties_attacker'][7]; }
			if($battlepart['casualties_attacker'][8] == 0) { $dead8 = 0; } else { $dead8 = $battlepart['casualties_attacker'][8]; }
			if($battlepart['casualties_attacker'][9] == 0) { $dead9 = 0; } else { $dead9 = $battlepart['casualties_attacker'][9]; }
			if($battlepart['casualties_attacker'][10] == 0) { $dead10 = 0; } else { $dead10 = $battlepart['casualties_attacker'][10]; }

			
					//kill own defence
					$q = "SELECT * FROM ".TB_PREFIX."units WHERE vref='".$data['to']."'";
					$unitlist = $database->query_return($q); 
                    $start = ($targettribe-1)*10+1;
                    $end = ($targettribe*10);
						
						if($targettribe == 1){ $u = ""; $rom='1'; } else if($targettribe == 2){ $u = "1"; $ger='1'; } else if($targettribe == 3){$u = "2"; $gal='1'; }else if($targettribe == 4){ $u = "3"; $nat='1'; } else { $u = "4"; $natar='1'; }     //FIX
                            for($i=$start;$i<=$end;$i++) { if($i==$end){ $u=$targettribe; }
								if($unitlist){
									$dead[$i]+=round($battlepart[2]*$unitlist[0]['u'.$i]);
									$database->modifyUnit($data['to'],$i,round($battlepart[2]*$unitlist[0]['u'.$i]),0);
								}
							}
			//kill other defence in village
			if(count($database->getEnforceVillage($data['to'],0)) > 0) {
				foreach($database->getEnforceVillage($data['to'],0) as $enforce) {
					$life='';	$notlife=''; $wrong='0';
				    $tribe = $database->getUserField($database->getVillageField($enforce['from'],"owner"),"tribe",0);
					$start = ($tribe-1)*10+1;
                    
                    if($tribe == 1){ $rom='1'; } else if($tribe == 2){ $ger='1'; }else if($tribe == 3){ $gal='1'; }else if($tribe == 4){ $nat='1'; } else { $natar='1'; }
                        for($i=$start;$i<=($start+9);$i++) {
							if($enforce['u'.$i]>'0'){
								$database->modifyEnforce($enforce['id'],$i,round($battlepart[2]*$enforce['u'.$i]),0);
								$dead[$i]+=round($battlepart[2]*$enforce['u'.$i]);
									if($dead[$i]!=$enforce['u'.$i]){
									$wrong='1';
									}
							} else {
								$dead[$i]='0';
							}
						$notlife="".$notlife.",".$dead[$i]."";
						$life="".$life.",".$enforce['u'.$i.'']."";
						}
						//NEED TO SEND A RAPPORTAGE!!!
						$data2 = ''.$database->getVillageField($enforce['from'],"owner").','.$to['wref'].','.addslashes($to['name']).','.$tribe.''.$life.''.$notlife.'';
						$database->addNotice($database->getVillageField($enforce['from'],"owner"),15,'Reinforcement in '.addslashes($to['name']).' was attacked',$data2,$AttackArrivalTime);
						//delete reinf sting when its killed all.
						if($wrong=='0'){ $database->deleteReinf($enforce['id']); }
				}
			}
				$unitsdead_def[1] = ''.$dead['1'].','.$dead['2'].','.$dead['3'].','.$dead['4'].','.$dead['5'].','.$dead['6'].','.$dead['7'].','.$dead['8'].','.$dead['9'].','.$dead['10'].'';
				$unitsdead_def[2] = ''.$dead['11'].','.$dead['12'].','.$dead['13'].','.$dead['14'].','.$dead['15'].','.$dead['16'].','.$dead['17'].','.$dead['18'].','.$dead['19'].','.$dead['20'].'';
				$unitsdead_def[3] = ''.$dead['21'].','.$dead['22'].','.$dead['23'].','.$dead['24'].','.$dead['25'].','.$dead['26'].','.$dead['27'].','.$dead['28'].','.$dead['29'].','.$dead['30'].'';
				$unitsdead_def[4] = ''.$dead['31'].','.$dead['32'].','.$dead['33'].','.$dead['34'].','.$dead['35'].','.$dead['36'].','.$dead['37'].','.$dead['38'].','.$dead['39'].','.$dead['40'].'';
				$unitsdead_def[5] = ''.$dead['41'].','.$dead['42'].','.$dead['43'].','.$dead['44'].','.$dead['45'].','.$dead['46'].','.$dead['47'].','.$dead['48'].','.$dead['49'].','.$dead['50'].'';
			    $unitsdead_deff[1] = '?,?,?,?,?,?,?,?,?,?,';
                $unitsdead_deff[2] = '?,?,?,?,?,?,?,?,?,?,';
                $unitsdead_deff[3] = '?,?,?,?,?,?,?,?,?,?,';
                $unitsdead_deff[4] = '?,?,?,?,?,?,?,?,?,?,';
                $unitsdead_deff[5] = '?,?,?,?,?,?,?,?,?,?,';
			/*
			if($battlepart['casualties_defender'][1] == 0) { $dead11 = 0; } else { $dead11 = $battlepart['casualties_defender'][1]; }
			if($battlepart['casualties_defender'][2] == 0) { $dead12 = 0; } else { $dead12 = $battlepart['casualties_defender'][2]; }
			if($battlepart['casualties_defender'][3] == 0) { $dead13 = 0; } else { $dead13 = $battlepart['casualties_defender'][3]; }
			if($battlepart['casualties_defender'][4] == 0) { $dead14 = 0; } else { $dead14 = $battlepart['casualties_defender'][4]; }
			if($battlepart['casualties_defender'][5] == 0) { $dead15 = 0; } else { $dead15 = $battlepart['casualties_defender'][5]; }
			if($battlepart['casualties_defender'][6] == 0) { $dead16 = 0; } else { $dead16 = $battlepart['casualties_defender'][6]; }
			if($battlepart['casualties_defender'][7] == 0) { $dead17 = 0; } else { $dead17 = $battlepart['casualties_defender'][7]; }
			if($battlepart['casualties_defender'][8] == 0) { $dead18 = 0; } else { $dead18 = $battlepart['casualties_defender'][8]; }
			if($battlepart['casualties_defender'][9] == 0) { $dead19 = 0; } else { $dead19 =  $battlepart['casualties_defender'][9]; }
			if($battlepart['casualties_defender'][10] == 0) { $dead20 = 0; } else { $dead20 = $battlepart['casualties_defender'][10]; }
*/

			// Set units returning from attack 
			$database->modifyAttack($data['ref'],1,$dead1);
			$database->modifyAttack($data['ref'],2,$dead2);
			$database->modifyAttack($data['ref'],3,$dead3);
			$database->modifyAttack($data['ref'],4,$dead4);
			$database->modifyAttack($data['ref'],5,$dead5);
			$database->modifyAttack($data['ref'],6,$dead6);
			$database->modifyAttack($data['ref'],7,$dead7);
			$database->modifyAttack($data['ref'],8,$dead8);
			$database->modifyAttack($data['ref'],9,$dead9);
			$database->modifyAttack($data['ref'],10,$dead10);
			

			$unitsdead_att = ''.$dead1.','.$dead2.','.$dead3.','.$dead4.','.$dead5.','.$dead6.','.$dead7.','.$dead8.','.$dead9.','.$dead10.'';
			//$unitsdead_def = ''.$dead11.','.$dead12.','.$dead13.','.$dead14.','.$dead15.','.$dead16.','.$dead17.','.$dead18.','.$dead19.','.$dead20.'';

			
			//top 10 attack and defence update
			$totaldead_att = $dead1+$dead2+$dead3+$dead4+$dead5+$dead6+$dead7+$dead8+$dead9+$dead10;
			for($i=1;$i<=50;$i++) {
			$totaldead_def += $dead[''.$i.''];
			}
			$database->modifyPoints($toF['owner'],'dpall',$totaldead_att );
			$database->modifyPoints($from['owner'],'apall',$totaldead_def);
			$database->modifyPoints($toF['owner'],'dp',$totaldead_att );
			$database->modifyPoints($from['owner'],'ap',$totaldead_def);
			$database->modifyPointsAlly($targetally,'Adp',$totaldead_att );
            $database->modifyPointsAlly($ownally,'Aap',$totaldead_def);
            $database->modifyPointsAlly($targetally,'dp',$totaldead_att );
            $database->modifyPointsAlly($ownally,'ap',$totaldead_def);    
                	
				
			// get toatal cranny value:
			$buildarray = $database->getResourceLevel($data['to']);
			$cranny = 0;
				
			for($i=19;$i<39;$i++){
				if($buildarray['f'.$i.'t']==23){
				$cranny += $bid23[$buildarray['f'.$i.'']]['attri'];
				}
			}

			//cranny efficiency
			$atk_bonus = ($owntribe == 2)? (4/5) : 1;
			$def_bonus = ($targettribe == 3)? 2 : 1;
			
			$cranny_eff = ($cranny * $atk_bonus)*$def_bonus;
			
			// work out available resources.
			$this->updateRes($data['to']);
			$this->pruneResource();
			
			$totclay = $database->getVillageField($data['to'],'clay');
			$totiron = $database->getVillageField($data['to'],'iron');
			$totwood = $database->getVillageField($data['to'],'wood');
			$totcrop = $database->getVillageField($data['to'],'crop');
						
			$avclay = floor($totclay - $cranny_eff);
			$aviron = floor($totiron - $cranny_eff);
			$avwood = floor($totwood - $cranny_eff);
			$avcrop = floor($totcrop - $cranny_eff);
						
			$avclay = ($avclay < 0)? 0 : $avclay;
			$aviron = ($aviron < 0)? 0 : $aviron;
			$avwood = ($avwood < 0)? 0 : $avwood;
			$avcrop = ($avcrop < 0)? 0 : $avcrop;
			
			
			$avtotal = array($avwood, $avclay, $aviron,  $avcrop);
			
			$av = $avtotal;
			
			// resources (wood,clay,iron,crop)
			$steal = array(0,0,0,0);
			
			//bounty variables
			$btotal = $battlepart['bounty'];
			$bmod = 0;			
			
			
			for($i = 0; $i<5; $i++)
			{
				for($j=0;$j<4;$j++)
				{
					if(isset($avtotal[$j]))
					{
						if($avtotal[$j]<1)
							unset($avtotal[$j]);
					}
				}
				if(!$avtotal)
				{
					// echo 'array empty'; *no resources left to take.
					break;
				}
				if($btotal <1 && $bmod <1)
					break;
				if($btotal<1)
				{
					while($bmod)
					{
						//random select
						$rs = array_rand($avtotal);
						if(isset($avtotal[$rs]))
						{
							$avtotal[$rs] -= 1;
							$steal[$rs] += 1;
							$bmod -= 1;
						}
					}
				}
				
				// handle unballanced amounts.
				$btotal +=$bmod;
				$bmod = $btotal%count($avtotal);
				$btotal -=$bmod;
				$bsplit = $btotal/count($avtotal);
		
				$max_steal = (min($avtotal) < $bsplit)? min($avtotal): $bsplit;
			
				for($j=0;$j<4;$j++)
				{
					if(isset($avtotal[$j]))
					{
						$avtotal[$j] -= $max_steal;
						$steal[$j] += $max_steal;
						$btotal -= $max_steal;
					}
				}
			}
			
			
			//work out time of return
            $start = ($owntribe-1)*10+1;
            $end = ($owntribe*10);
			
			$unitspeeds = array(6,5,7,16,14,10,4,3,4,5,
								7,7,6,9,10,9,4,3,4,5,
								7,6,17,19,16,13,4,3,4,5,
                                7,7,6,9,10,9,4,3,4,5,
                                7,7,6,9,10,9,4,3,4,5);
			
			$speeds = array();
	
			//find slowest unit.
			for($i=1;$i<=10;$i++)
            {
                if ($data['t'.$i] > $battlepart['casualties_attacker'][$i]) {
                if($unitarray) { reset($unitarray); }
                $unitarray = $GLOBALS["u".(($owntribe-1)*10+$i)];
                $speeds[] = $unitarray['speed'];
                 }
            }


// Data for when troops return.
	
				//catapulten kijken :D
			$info_cat = $info_chief = $info_ram = ",";
			if ($type=='3'){
				if ($catp!='0'){
					if (isset($empty)){
						$info_cat = ",".$catp_pic.",Village already destroyed.";
					} else 
					if ($battlepart[4]>$battlepart[3]){
						
						$info_cat = "".$catp_pic.",".$this->procResType($tbgid)." destroyed.";
							$database->setVillageLevel($data['to'],"f".$tbid."",'0');
							if($tbid>=19){ $database->setVillageLevel($data['to'],"f".$tbid."t",'0'); }
							$pop=$this->recountPop($data['to']);
								if($pop=='0'){ //village destroyed!
								$varray = $database->getProfileVillages($to['owner']);
									//kijken of laatste dorp is, of hoofddorp
									if(count($varray)!='1' AND $to['capital']!='1'){
											$q = "DELETE FROM ".TB_PREFIX."abdata where wref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."bdata where wid = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."enforcement where vref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."fdata where vref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."market where vref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."movement where to = ".$data['to']." or from = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."odata where wref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."research where vref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."tdata where vref = ".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."training where vref =".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."units where vref =".$data['to'];
											$database->query($q);
											$q = "DELETE FROM ".TB_PREFIX."vdata where wref = ".$data['to'];
											$database->query($q);
											$q = "UPDATE ".TB_PREFIX."wdata set occupied = 0 where id = ".$data['to'];
											$database->query($q);
											$logging->VillageDestroyCatalog($data['to']);
									}
								}
					}elseif ($battlepart[4]==0){
					
						$info_cat = "".$catp_pic.",".$this->procResType($tbgid)." was not damaged.";
					}else{
			
						$demolish=$battlepart[4]/$battlepart[3];
						$totallvl = round(sqrt(pow(($tblevel+0.5),2)-($battlepart[4]*8)));
					$info_cat = "".$catp_pic.",".$this->procResType($tbgid)." damaged from level <b>".$tblevel."</b> to level <b>".$totallvl."</b>.";
							$database->setVillageLevel($data['to'],"f".$tbid."",$totallvl);

					}
				}
			}
			
			
		//chiefing village
		//there are senators
		if(($data['t9']-$dead9)>0){
			$varray = $database->getProfileVillages($to['owner']);
			//kijken of laatste dorp is, of hoofddorp
			if(count($varray)!='1' AND $to['capital']!='1'){
				//if there is no Palace/Residence
				for ($i=18; $i<39; $i++){
					if ($database->getFieldLevel($data['to'],"".$i."t")==25 or $database->getFieldLevel($data['to'],"".$i."t")==26){
						$nochiefing='1';
							$info_chief = "".$chief_pic.",The Palace/Residence isn\'t destroyed!";
					}
				}
				if(!isset($nochiefing)){
					//$info_chief = "".$chief_pic.",You don't have enought CP to chief a village.";
					for ($i=0; $i<($data['t9']-$dead9); $i++){
					$rand+=rand(15,25);
					}
					//loyalty is more than 0
					if(($toF['loyalty']-$rand)>0){
						$info_chief = "".$chief_pic.",The loyalty was lowered from <b>".$toF['loyalty']."</b> to <b>".($toF['loyalty']-$rand)."</b>.";
						$database->setVillageField($data['to'],loyalty,($toF['loyalty']-$rand));
					} else {
					//you took over the village
						$info_chief = "".$chief_pic.",Inhabitants decided to join your empire.";
						$database->setVillageField($data['to'],loyalty,33);
						$database->setVillageField($data['to'],owner,$database->getVillageField($data['from'],"owner"));
						//destroy wall
						$database->setVillageLevel($data['to'],"f40",0);
						$database->setVillageLevel($data['to'],"f40t",0);
						//kill a chief
						$database->modifyAttack($data['ref'],9,1);
						
						
						$exp1 = $database->getVillageField($data['from'],'exp1');
						$exp2 = $database->getVillageField($data['from'],'exp2');
						$exp3 = $database->getVillageField($data['from'],'exp3');
						
						if($exp1 == 0){
							$exp = 'exp1';
							$value = $data['to'];
						}
						elseif($exp2 == 0){
							$exp = 'exp2';
							$value = $data['to'];
						}
						else{
							$exp = 'exp3';
							$value = $data['to'];
						}
						$database->setVillageField($data['from'],$exp,$value);
						
						
					}
				}
			} else {
				$info_chief = "".$chief_pic.",You cant take over this village.";
			}
		}
		
			
			
			    if($scout){
                if ($data['spy'] == 1){
                $info_spy = "".$spy_pic.",<div class=\"res\"><img class=\"r1\" src=\"img/x.gif\" alt=\"Lumber\" title=\"Lumber\" />".round($totwood)." | 
                 <img class=\"r2\" src=\"img/x.gif\" alt=\"Clay\" title=\"Clay\" />".round($totclay)." | 
                 <img class=\"r3\" src=\"img/x.gif\" alt=\"Iron\" title=\"Iron\" />".round($totiron)." | 
                 <img class=\"r4\" src=\"img/x.gif\" alt=\"Crop\" title=\"Crop\" />".round($totcrop)."</div>
                 <div class=\"carry\"><img class=\"car\" src=\"img/x.gif\" alt=\"carry\" title=\"carry\" />Total Resources : ".round($totwood+$totclay+$totiron+$totcrop)."</div>
    ";
                }else if($data['spy'] == 2){
                $basearray = $database->getMInfo($data['to']);
                $resarray = $database->getResourceLevel($basearray['wref']);
                
                
                $crannylevel =0;
                $rplevel = 0;
                $walllevel = 0;
                for($j=19;$j<=40;$j++) {
                if($resarray['f'.$j.'t'] == 25 || $resarray['f'.$j.'t'] == 26 ) {
                
                $rplevel = $database->getFieldLevel($basearray['wref'],$j);
    
                }
                }
                for($j=19;$j<=40;$j++) {
                if($resarray['f'.$j.'t'] == 40) {
                
                $walllevel = $database->getFieldLevel($basearray['wref'],$j);
    
                }
                }
                for($j=19;$j<=40;$j++) {
                if($resarray['f'.$j.'t'] == 23) {
                
                $crannylevel = $database->getFieldLevel($basearray['wref'],$j);
    
                }
                }
                
               
                
                                        
                $info_spy = "".$spy_pic.",Residance/Palace Level : ".$rplevel.".
                <br>Wall Level : ".$walllevel.".<br>Cranny Level : ".$crannylevel.".";
            
                }
                
                $data2 = ''.$from['owner'].','.$from['wref'].','.$owntribe.','.$unitssend_att.','.$unitsdead_att.',0,0,0,0,0,'.$to['owner'].','.$to['wref'].','.addslashes($to['name']).','.$targettribe.',,,'.$rom.','.$unitssend_def[1].','.$unitsdead_def[1].','.$ger.','.$unitssend_def[2].','.$unitsdead_def[2].','.$gal.','.$unitssend_def[3].','.$unitsdead_def[3].','.$nat.','.$unitssend_def[4].','.$unitsdead_def[4].','.$natar.','.$unitssend_def[5].','.$unitsdead_def[5].','.$info_ram.','.$info_cat.','.$info_chief.','.$info_spy.'';
            }
            else{
                $data2 = ''.$from['owner'].','.$from['wref'].','.$owntribe.','.$unitssend_att.','.$unitsdead_att.','.$steal[0].','.$steal[1].','.$steal[2].','.$steal[3].','.$battlepart['bounty'].','.$to['owner'].','.$to['wref'].','.addslashes($to['name']).','.$targettribe.',,,'.$rom.','.$unitssend_def[1].','.$unitsdead_def[1].','.$ger.','.$unitssend_def[2].','.$unitsdead_def[2].','.$gal.','.$unitssend_def[3].','.$unitsdead_def[3].','.$nat.','.$unitssend_def[4].','.$unitsdead_def[4].','.$natar.','.$unitssend_def[5].','.$unitsdead_def[5].','.$info_ram.','.$info_cat.','.$info_chief.','.$info_spy.'';
            }





			// When all troops die, sends no info.
			$data_fail = ''.$from['owner'].','.$from['wref'].','.$owntribe.','.$unitssend_att.','.$unitsdead_att.','.$steal[0].','.$steal[1].','.$steal[2].','.$steal[3].','.$battlepart['bounty'].','.$to['owner'].','.$to['wref'].','.addslashes($to['name']).','.$targettribe.',,,'.$rom.','.$unitssend_def[1].','.$unitsdead_deff[1].','.$ger.','.$unitssend_def[2].','.$unitsdead_deff[2].','.$gal.','.$unitssend_def[3].','.$unitsdead_deff[3].','.$nat.','.$unitssend_def[4].','.$unitsdead_deff[4].','.$natar.','.$unitssend_def[5].','.$unitsdead_deff[5].',,,';
            
			//Undetected and detected in here.
			if($scout){
				for($i=1;$i<=10;$i++)
				{
					if($battlepart['casualties_attacker'][$i]){
						$database->addNotice($to['owner'],0,''.addslashes($from['name']).' scouts '.addslashes($to['name']).'',$data2,$AttackArrivalTime);
						break;
					}
				}
			}
			else {
                if ($totaldead_def == 0){
				$database->addNotice($to['owner'],4,''.addslashes($from['name']).' attacks '.addslashes($to['name']).'',$data2,$AttackArrivalTime);
			}else {
            $database->addNotice($to['owner'],5,''.addslashes($from['name']).' attacks '.addslashes($to['name']).'',$data2,$AttackArrivalTime);
                }
            }	
			//to here
			
			// If the dead units not equal the ammount sent they will return and report
			if($unitsdead_att != $unitssend_att)
			{
				$endtime = $this->procDistanceTime($from,$to,min($speeds),1) + $AttackArrivalTime;
				//$endtime = $this->procDistanceTime($from,$to,min($speeds),1) + time();
				if($type == 1) {
					$database->addNotice($from['owner'],0,''.addslashes($from['name']).' scouts '.addslashes($to['name']).'',$data2,$AttackArrivalTime);
				}else {
                    if ($totaldead_att == 0){
					$database->addNotice($from['owner'],1,''.addslashes($from['name']).' attacks '.addslashes($to['name']).'',$data2,$AttackArrivalTime);
                    }else{ 
                    $database->addNotice($from['owner'],2,''.addslashes($from['name']).' attacks '.addslashes($to['name']).'',$data2,$AttackArrivalTime);
                    }       
                }
                
				$database->setMovementProc($data['moveid']); 
				$database->addMovement(4,$to['wref'],$from['wref'],$data['ref'],$endtime);
				
				// send the bounty on type 6.
				if($type !== 1)
				{
					$reference = $database->sendResource($steal[0],$steal[1],$steal[2],$steal[3],0,0);
					$database->modifyResource($to['wref'],$steal[0],$steal[1],$steal[2],$steal[3],0);
					$database->addMovement(6,$to['wref'],$from['wref'],$reference,$endtime);
					//$database->updateVillage($to['wref']);
					$totalstolengain=$steal[0]+$steal[1]+$steal[2]+$steal[3];
                    $totalstolentaken=($totalstolentaken-($steal[0]+$steal[1]+$steal[2]+$steal[3]));
                    $database->modifyPoints($from['owner'],'RR',$totalstolengain);
                    $database->modifyPoints($to['owner'],'RR',$totalstolentaken);
                }
			}
			else //else they die and don't return or report.
			{
				$database->setMovementProc($data['moveid']);
				if($type == 1){
					$database->addNotice($from['owner'],0,''.addslashes($from['name']).' scouts '.addslashes($to['name']).'',$data_fail,$AttackArrivalTime);
				}else{
					$database->addNotice($from['owner'],3,''.addslashes($from['name']).' attacks '.addslashes($to['name']).'',$data_fail,$AttackArrivalTime);
			        }
            }
		

			
		}
			if(file_exists("GameEngine/Prevention/sendunits.txt")) {
				@unlink("GameEngine/Prevention/sendunits.txt");
			}
	}
	
	private function sendreinfunitsComplete() {
		global $bid23,$database,$battle;
			$ourFileHandle = @fopen("GameEngine/Prevention/sendreinfunits.txt", 'w');
			@fclose($ourFileHandle);
		$time = time();
		$q = "SELECT * FROM ".TB_PREFIX."movement, ".TB_PREFIX."attacks where ".TB_PREFIX."movement.ref = ".TB_PREFIX."attacks.id and ".TB_PREFIX."movement.proc = '0' and ".TB_PREFIX."movement.sort_type = '3' and ".TB_PREFIX."attacks.attack_type = '2' and endtime < $time";
		$dataarray = $database->query_return($q);
		
		foreach($dataarray as $data) {
			//set base things
			$owntribe = $database->getUserField($database->getVillageField($data['from'],"owner"),"tribe",0);
			$targettribe = $database->getUserField($database->getVillageField($data['to'],"owner"),"tribe",0);
			$to = $database->getMInfo($data['to']);
			$from = $database->getMInfo($data['from']);
			$toF = $database->getVillage($data['to']);
			$fromF = $database->getVillage($data['from']);

			//check if there is defence from town in to town
			$check=$database->getEnforce($data['to'],$data['from']);
			if (!isset($check['id'])){
				//no: 
				$database->addEnforce($data);
				} else{
				//yes
                $start = ($owntribe-1)*10+1;
                $end = ($owntribe*10);
				
	
				//add unit.
				$j='1';
				for($i=$start;$i<=$end;$i++){
					$database->modifyEnforce($check['id'],$i,$data['t'.$j.''],1); $j++;
				}
			}
			
			//send rapport
			$unitssend_att = ''.$data['t1'].','.$data['t2'].','.$data['t3'].','.$data['t4'].','.$data['t5'].','.$data['t6'].','.$data['t7'].','.$data['t8'].','.$data['t9'].','.$data['t10'].'';
			$data_fail = ''.$from['wref'].','.$from['owner'].','.$owntribe.','.$unitssend_att.'';
			$database->addNotice($from['owner'],8,''.addslashes($from['name']).' reinforcement '.addslashes($to['name']).'',$data_fail,$AttackArrivalTime);
			$database->addNotice($to['owner'],8,''.addslashes($from['name']).' reinforcement '.addslashes($to['name']).'',$data_fail,$AttackArrivalTime);
			//update status
			$database->setMovementProc($data['moveid']); 

		}
			if(file_exists("GameEngine/Prevention/sendreinfunits.txt")) {
				@unlink("GameEngine/Prevention/sendreinfunits.txt");
			}
	}
	
	private function returnunitsComplete() {
		global $database;
		$ourFileHandle = @fopen("GameEngine/Prevention/returnunits.txt", 'w');
		@fclose($ourFileHandle);
		$time = time();
		$q = "SELECT * FROM ".TB_PREFIX."movement, ".TB_PREFIX."attacks where ".TB_PREFIX."movement.ref = ".TB_PREFIX."attacks.id and ".TB_PREFIX."movement.proc = '0' and ".TB_PREFIX."movement.sort_type = '4' and endtime < $time";
		$dataarray = $database->query_return($q);
		
		foreach($dataarray as $data) {
		
		$tribe = $database->getUserField($database->getVillageField($data['to'],"owner"),"tribe",0);
		
		if($tribe == 1){ $u = ""; } elseif($tribe == 2){ $u = "1"; } elseif($tribe == 3){ $u = "2"; } elseif($tribe == 4){ $u = "3"; } else{ $u = "4"; }
		$database->modifyUnit($data['to'],$u."1",$data['t1'],1);
		$database->modifyUnit($data['to'],$u."2",$data['t2'],1);
		$database->modifyUnit($data['to'],$u."3",$data['t3'],1);
		$database->modifyUnit($data['to'],$u."4",$data['t4'],1);
		$database->modifyUnit($data['to'],$u."5",$data['t5'],1);
		$database->modifyUnit($data['to'],$u."6",$data['t6'],1);
		$database->modifyUnit($data['to'],$u."7",$data['t7'],1);
		$database->modifyUnit($data['to'],$u."8",$data['t8'],1);
		$database->modifyUnit($data['to'],$u."9",$data['t9'],1);
		$database->modifyUnit($data['to'],$tribe."0",$data['t10'],1);
		
		$database->setMovementProc($data['moveid']);
		}
		
		// Recieve the bounty on type 6.
		
		$q = "SELECT * FROM ".TB_PREFIX."movement, ".TB_PREFIX."send where ".TB_PREFIX."movement.ref = ".TB_PREFIX."send.id and ".TB_PREFIX."movement.proc = 0 and sort_type = 6 and endtime < $time";
		$dataarray = $database->query_return($q);
		foreach($dataarray as $data) {
			
			if($data['wood'] >= $data['clay'] && $data['wood'] >= $data['iron'] && $data['wood'] >= $data['crop']){ $sort_type = "11"; }
			elseif($data['clay'] >= $data['wood'] && $data['clay'] >= $data['iron'] && $data['clay'] >= $data['crop']){ $sort_type = "12"; }
			elseif($data['iron'] >= $data['wood'] && $data['iron'] >= $data['clay'] && $data['iron'] >= $data['crop']){ $sort_type = "13"; }
			elseif($data['crop'] >= $data['wood'] && $data['crop'] >= $data['clay'] && $data['crop'] >= $data['iron']){ $sort_type = "14"; }

			$to = $database->getMInfo($data['to']);
			$from = $database->getMInfo($data['from']);
			$database->modifyResource($data['to'],$data['wood'],$data['clay'],$data['iron'],$data['crop'],1);
			//$database->updateVillage($data['to']);
			$database->setMovementProc($data['moveid']);
		}
		$this->pruneResource();
		
		
		if(file_exists("GameEngine/Prevention/returnunits.txt")) {
			@unlink("GameEngine/Prevention/returnunits.txt");
		}
	}		
	
	private function sendSettlersComplete() {
		global $database, $building;
		$ourFileHandle = @fopen("GameEngine/Prevention/settlers.txt", 'w');
		@fclose($ourFileHandle);
		$time = time();
		$q = "SELECT * FROM ".TB_PREFIX."movement where proc = 0 and sort_type = 5 and endtime < $time";
		$dataarray = $database->query_return($q);
			foreach($dataarray as $data) {
					$to = $database->getMInfo($data['from']);
					$user =	$database->getUserField($to['owner'],'username',0);
					$taken = $database->getVillageState($data['to']);
					if($taken['occupied'] == 0){
						$database->setFieldTaken($data['to']);
						$database->addVillage($data['to'],$to['owner'],$user,'0');
						$database->addResourceFields($data['to'],$database->getVillageType($data['to']));
						$database->addUnits($data['to']);
						$database->addTech($data['to']);
						$database->addABTech($data['to']);
						$database->setMovementProc($data['moveid']);
						
						$exp1 = $database->getVillageField($data['from'],'exp1');
						$exp2 = $database->getVillageField($data['from'],'exp2');
						$exp3 = $database->getVillageField($data['from'],'exp3');
						
						if($exp1 == 0){
							$exp = 'exp1';
							$value = $data['to'];
						}
						elseif($exp2 == 0){
							$exp = 'exp2';
							$value = $data['to'];
						}
						else{
							$exp = 'exp3';
							$value = $data['to'];
						}
						$database->setVillageField($data['from'],$exp,$value);
					}
					else{
						// here must come movement from returning settlers
						$database->setMovementProc($data['moveid']);
					}
			}
			if(file_exists("GameEngine/Prevention/settlers.txt")) {
				@unlink("GameEngine/Prevention/settlers.txt");
			}
	}
	
	private function researchComplete() {
		global $database;
		$ourFileHandle = @fopen("GameEngine/Prevention/research.txt", 'w');
		@fclose($ourFileHandle);
		$time = time();
		$q = "SELECT * FROM ".TB_PREFIX."research where timestamp < $time";
		$dataarray = $database->query_return($q);
		foreach($dataarray as $data) {
			$sort_type = substr($data['tech'],0,1);
			switch($sort_type) {
				case "t":
				$q = "UPDATE ".TB_PREFIX."tdata set ".$data['tech']." = 1 where vref = ".$data['vref'];
				break;
				case "a":
				case "b":
				$q = "UPDATE ".TB_PREFIX."abdata set ".$data['tech']." = ".$data['tech']." + 1 where vref = ".$data['vref'];
				break;
			}
			$database->query($q);
			$q = "DELETE FROM ".TB_PREFIX."research where id = ".$data['id'];
			$database->query($q);
		}
		if(file_exists("GameEngine/Prevention/research.txt")) {
			@unlink("GameEngine/Prevention/research.txt");
		}
	}
	
	private function updateRes($bountywid) {
		global $session;
				

		$this->bountyLoadTown($bountywid);
		$this->bountycalculateProduction($bountywid);
		$this->bountyprocessProduction($bountywid);
	}
	
	private function bountyLoadTown($bountywid) {
		global $database,$session,$logging,$technology;
		$this->bountyinfoarray = $database->getVillage($bountywid);
		$this->bountyresarray = $database->getResourceLevel($bountywid);
		$this->bountyoasisowned = $database->getOasis($bountywid);
		$this->bountyocounter = $this->bountysortOasis();
		$this->bountypop = $this->bountyinfoarray['pop'];
		
		//$unitarray = $database->getUnit($bountywid);
		//if(count($unitarray) > 0) {
		//	for($i=1;$i<=50;$i++) {
		//		$this->bountyunitall['u'.$i] = $unitarray['u'.$i];
		//	}
		//}
		//$enforcearray = $database->getEnforceVillage($bountywid,0);
		//if(count($enforcearray) > 0) {
		//	foreach($enforcearray as $enforce) {
		//		for($i=1;$i<=50;$i++) {
		//			$this->bountyunitall['u'.$i] += $enforce['u'.$i];
		//		}
		//	}
		//}
	}
	
	private function bountysortOasis() {
		$crop = $clay = $wood = $iron = 0;
		foreach ($this->bountyoasisowned as $oasis) {
		switch($oasis['type']) {
				case 1:
				case 2:
				$wood += 1;
				break;
				case 3:
				$wood += 1;
				$crop += 1;
				break;
				case 4:
				case 5:
				$clay += 1;
				break;
				case 6:
				$clay += 1;
				$crop += 1;
				break;
				case 7:
				case 8:
				$iron += 1;
				break;
				case 9:
				$iron += 1;
				$crop += 1;
				break;
				case 10:
				case 11:
				$crop += 1;
				break;
				case 12:
				$crop += 2;
				break;
			}
		}
		return array($wood,$clay,$iron,$crop);
	}
	
	private function bountycalculateProduction($bountywid) { 
		global $technology,$database;
		$this->bountyproduction['wood'] = $this->bountyGetWoodProd();
		$this->bountyproduction['clay'] = $this->bountyGetClayProd();
		$this->bountyproduction['iron'] = $this->bountyGetIronProd();
		$this->bountyproduction['crop'] = $this->bountyGetCropProd()-$this->bountypop-$technology->getUpkeep($technology->getAllUnits($bountywid),0);
	}
	
	private function bountyprocessProduction($bountywid) {
		global $database;
		$timepast = time() - $this->bountyinfoarray['lastupdate'];
		$nwood = ($this->bountyproduction['wood'] / 3600) * $timepast;
		$nclay = ($this->bountyproduction['clay'] / 3600) * $timepast;
		$niron = ($this->bountyproduction['iron'] / 3600) * $timepast;
		$ncrop = ($this->bountyproduction['crop'] / 3600) * $timepast;
		$database->modifyResource($bountywid,$nwood,$nclay,$niron,$ncrop,1);
		$database->updateVillage($bountywid);
	}
	
	private function bountyGetWoodProd() {
		global $bid1,$bid5,$session;
		$wood = $sawmill = 0;
		$woodholder = array();
		for($i=1;$i<=38;$i++) {
			if($this->bountyresarray['f'.$i.'t'] == 1) {
				array_push($woodholder,'f'.$i);
			}
			if($this->bountyresarray['f'.$i.'t'] == 5) {
				$sawmill = $this->bountyresarray['f'.$i];
			}
		}
		for($i=0;$i<=count($woodholder)-1;$i++) { $wood+= $bid1[$this->bountyresarray[$woodholder[$i]]]['prod']; }
		if($sawmill >= 1) {
			$wood += $wood /100 * $bid5[$sawmill]['attri'];
		}
		if($this->bountyocounter[0] != 0) {
			$wood += $wood*0.25*$this->bountyocounter[0];
		}
//		$wood += $wood*$this->bountyocounter[0]*0.25;
		$wood *= SPEED;
		return round($wood);
	}
	
	private function bountyGetClayProd() {
		global $bid2,$bid6,$session;
		$clay = $brick = 0;
		$clayholder = array();
		for($i=1;$i<=38;$i++) {
			if($this->bountyresarray['f'.$i.'t'] == 2) {
				array_push($clayholder,'f'.$i);
			}
			if($this->bountyresarray['f'.$i.'t'] == 6) {
				$brick = $this->bountyresarray['f'.$i];
			}
		}
		for($i=0;$i<=count($clayholder)-1;$i++) { $clay+= $bid2[$this->bountyresarray[$clayholder[$i]]]['prod']; }
		if($brick >= 1) {
			$clay += $clay /100 * $bid6[$brick]['attri'];
		}
		if($this->bountyocounter[1] != 0) {
			$clay += $clay*0.25*$this->bountyocounter[1];
		}
//		$clay += $clay*$this->bountyocounter[1]*0.25;
		$clay *= SPEED;
		return round($clay);
	}
	
	private function bountyGetIronProd() {
		global $bid3,$bid7,$session;
		$iron = $foundry = 0;
		$ironholder = array();
		for($i=1;$i<=38;$i++) {
			if($this->bountyresarray['f'.$i.'t'] == 3) {
				array_push($ironholder,'f'.$i);
			}
			if($this->bountyresarray['f'.$i.'t'] == 7) {
				$foundry = $this->bountyresarray['f'.$i];
			}
		}
		for($i=0;$i<=count($ironholder)-1;$i++) { $iron+= $bid3[$this->bountyresarray[$ironholder[$i]]]['prod']; }
		if($foundry >= 1) {
			$iron += $iron /100 * $bid7[$foundry]['attri'];
		}
		if($this->bountyocounter[2] != 0) {
			$iron += $iron*0.25*$this->bountyocounter[2];
		}
//		$iron += $iron*$this->bountyocounter[2]*0.25;
		$iron *= SPEED;
		return round($iron);
	}
	
	private function bountyGetCropProd() {
		global $bid4,$bid8,$bid9,$session;
		$crop = $grainmill = $bakery = 0;
		$cropholder = array();
		for($i=1;$i<=38;$i++) {
			if($this->bountyresarray['f'.$i.'t'] == 4) {
				array_push($cropholder,'f'.$i);
			}
			if($this->bountyresarray['f'.$i.'t'] == 8) {
				$grainmill = $this->bountyresarray['f'.$i];
			}
			if($this->bountyresarray['f'.$i.'t'] == 9) {
				$bakery = $this->bountyresarray['f'.$i];
			}
		}
		for($i=0;$i<=count($cropholder)-1;$i++) { $crop+= $bid4[$this->bountyresarray[$cropholder[$i]]]['prod']; }
		if($grainmill >= 1) {
			$crop += $crop /100 * $bid8[$grainmill]['attri'];
		}
		if($bakery >= 1) {
			$crop += $crop /100 * $bid9[$bakery]['attri'];
		}
		if($this->bountyocounter[3] != 0) {
			$crop += $crop*0.25*$this->bountyocounter[3];
		}
		
//		$crop += $crop*$this->bountyocounter[3]*0.25;
		$crop *= SPEED;
		return round($crop);
	}

	private function trainingComplete() {
		global $database;
		$ourFileHandle = @fopen("GameEngine/Prevention/training.txt", 'w');
		@fclose($ourFileHandle);
		$trainlist = $database->getTrainingList();
		if(count($trainlist) > 0) {
			foreach($trainlist as $train) {
				$database->updateTraining($train['id'],0);
				$trained = 0;
				if($train['eachtime'] == 0) { $train['eachtime'] = 1; }
				$timepast = $train['timestamp'] - $train['commence'];
				if ($timepast >= 0) {
					$trained = floor($timepast/$train['eachtime']);
					$pop = $train['pop'] * $trained;
					if($trained >= $train['amt']) {
						$trained = $train['amt'];
					}
					$database->modifyUnit($train['vref'],($train['unit']>60?$train['unit']-60:$train['unit']),$trained,1);
					if($train['amt']-$trained <= 0) {
						$database->trainUnit($train['id'],0,0,0,0,1,1);
					}
					if($trained > 0) {
						$database->modifyCommence($train['id']);
					}
					$database->updateTraining($train['id'],$trained);
				}
			}
		}
		if(file_exists("GameEngine/Prevention/training.txt")) {
			@unlink("GameEngine/Prevention/training.txt");
		}
	}
	
	private function procDistanceTime($coor,$thiscoor,$ref,$mode) {
		global $bid14,$database,$generator;
		$resarray = $database->getResourceLevel($generator->getBaseID($coor['x'],$coor['y']));
		$xdistance = ABS($thiscoor['x'] - $coor['x']);
		if($xdistance > WORLD_MAX) {
			$xdistance = (2*WORLD_MAX+1) - $xdistance;
		}
		$ydistance = ABS($thiscoor['y'] - $coor['y']);
		if($ydistance > WORLD_MAX) {
			$ydistance = (2*WORLD_MAX+1) - $ydistance;
		}
		$distance = SQRT(POW($xdistance,2)+POW($ydistance,2));
		 if(!$mode) {
			if($ref == 1) {
				$speed = 16;
			}
			else if($ref == 2) {
				$speed = 12;
			}
			else if($ref == 3) {
				$speed = 24;
			}
			else if($ref == 300) {
				$speed = 5;
			}
			else {
				$speed = 1;
			}
		}
		else {
			$speed = $ref;
			if($this->getsort_typeLevel(14,$resarray) != 0) {
				$speed = $distance <= TS_THRESHOLD ? $speed : $speed * ( ( TS_THRESHOLD + ( $distance - TS_THRESHOLD ) * $bid14[$this->getsort_typeLevel(14,$resarray)]['attri'] / 100 ) / $distance ) ;
			}
		}
		
		
		return round(($distance/$speed) * 3600 / INCREASE_SPEED);

	}
	
	private function getsort_typeLevel($tid,$resarray) {
	
		
		global $village;
		$keyholder = array();
		foreach(array_keys($resarray,$tid) as $key) {
			if(strpos($key,'t')) { 
				$key = preg_replace("/[^0-9]/", '', $key);
				array_push($keyholder, $key);
			} 
		}
		$element = count($keyholder);
		if($element >= 2) {
			if($tid <= 4) {
				$temparray = array();
				for($i=0;$i<=$element-1;$i++) {
					array_push($temparray,$resarray['f'.$keyholder[$i]]);
				}
				foreach ($temparray as $key => $val) {
					if ($val == max($temparray)) 
					$target = $key; 
				}
			}
			else {
				for($i=0;$i<=$element-1;$i++) {
					//if($resarray['f'.$keyholder[$i]] != $this->getsort_typeMaxLevel($tid)) {
					//	$target = $i;
					//}
				}
			}
		}
		else if($element == 1) {
			$target = 0;
		}
		else {
			return 0;
		}
		if($keyholder[$target] != "") {
			return $resarray['f'.$keyholder[$target]];
		}
		else {
			return 0;
		}
	}
	
	private function celebrationComplete() {
		global $database;
		$ourFileHandle = @fopen("GameEngine/Prevention/celebration.txt", 'w');
		@fclose($ourFileHandle);

		$varray = $database->getCel(); 
			foreach($varray as $vil){
				$id = $vil['wref'];
				$type = $vil['type'];
				$user = $vil['owner'];
				if($type == 1){$cp = 500;}else if($type == 2){$cp = 2000;}
				$database->clearCel($id);
				$database->setCelCp($user,$cp);
			}
		if(file_exists("GameEngine/Prevention/celebration.txt")) {
			@unlink("GameEngine/Prevention/celebration.txt");
		}
	}
	
	};

	
$automation = new Automation;
?>
