<?php

 include ("GameEngine/Account.php");

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       multihunter.php                                             ##
##  Made by:       Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

 if($session->access != ADMIN) die("Access Denied: You are not administrator!");

?>
 
 <form action="<?php

 echo $_SERVER['PHP_SELF'];

?>?g" method="post">
 <table id="coords" cellpadding="3" cellspacing="3">
    <tbody>
  <td>User ID:</span>
            <input class="text" name="uid" value="" maxlength="5" type="text">
        </td>
  </tbody>
  </table>
  
  <input type="submit" name="submit" value="OK">
    </form>
    
        
<?php

 if(isset($_POST['submit'])) {

     //User ID
     $uid = $_POST['uid'];

     //Coordinates
     $x = 0;
     $y = 0;

     $q = "SELECT id FROM ".TB_PREFIX."wdata where x = $x and y = $y";
     $result = mysql_query($q, $database->connection);
     $r = mysql_fetch_array($result);
     $wid = $r['id'];

     $status = $database->getVillageState($wid);
     //$status = 0;
     if($status == 0) {
         $database->setFieldTaken($wid);
         $database->addVillage($wid, $uid, 'Multihunter', '0');
         $database->addResourceFields($wid, $database->getVillageType($wid));
         $database->addUnits($wid);
         $database->addTech($wid);
         $database->addABTech($wid);
         echo "You have created village on (".$x."|".$y."). Owner of the village is <a href=\"spieler.php?uid=".$uid."\">".$database->getUserField($uid, "username", 0)."</a>";
     } else
         if($status == 1) {
             echo "Coordinates (".$x."|".$y.") are occupied and you can't create village there!";
         }
 }

?> 