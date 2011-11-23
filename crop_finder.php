<?php
/*-------------------------------------------------------*\
| ********* DO NOT REMOVE THIS COPYRIGHT NOTICE ********* |
+---------------------------------------------------------+
| Developed by:  Manni < manuel_mannhardt@web.de >        |
|                Dzoki < dzoki.travian@gmail.com >        |
| Copyright:     TravianX Project All rights reserved     |
\*-------------------------------------------------------*/
include ("GameEngine/Village.php");
if($session->plus == 0) {header("Location: plus.php?id=3");}
if($_POST['type'] == 15) {   header("Location: ".$_SERVER['PHP_SELF']."?s=1&x=" . $_POST['x'] . '&y=' . $_POST['y']);  }
elseif($_POST['type'] == 9) {header("Location: ".$_SERVER['PHP_SELF']."?s=2&x=" . $_POST['x'] . '&y=' . $_POST['y']);}
elseif($_POST['type'] == 'both') { header("Location: ".$_SERVER['PHP_SELF']."?s=3&x=" . $_POST['x'] . '&y=' . $_POST['y']);}
include ("Templates/header.tpl");
include ("Templates/res.tpl");
?>
<div id="mid">
<?php
   include ("Templates/menu.tpl");
   if(is_numeric($_GET['x']) AND is_numeric($_GET['y'])) {
       $coor2['x'] = $_GET['x'];
       $coor2['y'] = $_GET['y'];       
   } else {
       $wref2 = $village->wid;
       $coor2 = $database->getCoor($wref2);      
   }
   
?>
<div id="content"  class="player">

<h1>Crop Finder</h1>
<center>
<img width="200" src="gpack/travian_default/img/g/f6.jpg" />
<img width="200" src="gpack/travian_default/img/g/f1.jpg" />
</center>
<br /><br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?s" method="post">
 <table>
  <tr>
   <td width="100">Search for:</td>
   <td width="250">
    <input type="radio" class="radio" name="type" value="15" <?php if($_GET['s'] == 1) { print 'checked="checked"'; } ?> /> 15 crop
    <input type="radio" class="radio" name="type" value="9" <?php if($_GET['s'] == 2) { print 'checked="checked"'; } ?> /> 9 crop 
    <input type="radio" class="radio" name="type" value="both" <?php if($_GET['s'] == 3) { print 'checked="checked"'; } ?> /> both<br />
   </td>
  </tr>
  <tr>
   <td>Startposition:</td>
   <td>x: <input type="text" name="x" value="<?php print $coor2['x']; ?>" size="3" /> y: <input type="text" name="y" value="<?php print $coor2['y']; ?>"  size="3" />
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Search"></td>
  </tr>
 </table>
</form>

<?php

   define('PREFIX', TB_PREFIX);
   $type15 = mysql_query("SELECT id,x,y,occupied FROM ".PREFIX."wdata WHERE fieldtype = 6");
   $type9 = mysql_query("SELECT id,x,y,occupied FROM ".PREFIX."wdata WHERE fieldtype = 1");
   $type_both = mysql_query("SELECT id,x,y,occupied,fieldtype FROM ".PREFIX."wdata WHERE fieldtype = 1 OR fieldtype = 6");
   
   if(is_numeric($_GET['x']) AND is_numeric($_GET['y'])) {
       $coor['x'] = $_GET['x'];
       $coor['y'] = $_GET['y'];
   } else {
       $wref = $village->wid;
       $coor = $database->getCoor($wref);   
   }

      function getDistance($coorx1, $coory1, $coorx2, $coory2) {
   $max = 2 * WORLD_MAX + 1;
   $x1 = intval($coorx1);
   $y1 = intval($coory1);
   $x2 = intval($coorx2);
   $y2 = intval($coory2);
   $distanceX = min(abs($x2 - $x1), abs($max - abs($x2 - $x1)));
   $distanceY = min(abs($y2 - $y1), abs($max - abs($y2 - $y1)));
   $dist = sqrt(pow($distanceX, 2) + pow($distanceY, 2));
   return round($dist, 1);
   }

   if($_GET['s'] == 1) {

?>
 <table id="member">
    <thead>
    <tr>
        <th colspan='5'>Crop Finder - 15c</th>
    </tr>
    <tr>
        <td>Type</td>
        <td>Coordinates</td>
        <td>Owner</td>
        <td>Occupied</td>
        <td>Distance</td>
    </tr>
    </thead><tbody>


</td></tr><br>

<?php

   while($row = mysql_fetch_array($type15)) {
       $dist = getDistance($coor['x'], $coor['y'], $row['x'], $row['y']);

       $rows[$dist] = $row;

   }
   ksort($rows);
   foreach($rows as $dist => $row) {

       echo "<tr>";
       echo "<td>15c</td>";
       if($row['occupied'] == 0) {
           echo "<td>(".$row['x']."|".$row['y'].")</td>";
           echo "<td>-</td>";
           echo "<td><b><font color=\"green\">Unoccupied</b></font></td>";
       } else {
           echo "<td><a href=\"karte.php?d=".$row['id']."&c=".$generator->getMapCheck($row['id'])."\">".$database->getVillageField($row['id'], "name")." (".$row['x']."|".$row['y'].")</a></td>";
           echo "<td><a href=\"spieler.php?uid=".$database->getVillageField($row['id'], "owner")."\">".$database->getUserField($database->getVillageField($row['id'], "owner"), "username", 0)."</a></td>";
           echo "<td><b><font color=\"red\">Occupied</b></font></td>";
       }
       echo "<td><center>".getDistance($coor['x'], $coor['y'], $row['x'], $row['y'])."</center></td>";
   }

?>

</tbody></table>

<?php

   }
   else if($_GET['s'] == 2) {

?>
<table id="member">
    <thead>
    <tr>
        <th colspan='5'>Crop Finder - 9c</th>
    </tr>
    <tr>
        <td>Type</td>
        <td>Coordinates</td>
        <td>Owner</td>
        <td>Occupied</td>
        <td>Distance</td>
    </tr>
    </thead><tbody>


</td></tr><br>
<?php

   unset($rows);
   while($row = mysql_fetch_array($type9)) {
       $dist = getDistance($coor['x'], $coor['y'], $row['x'], $row['y']);

       $rows[$dist] = $row;

   }
   ksort($rows);
   foreach($rows as $dist => $row) {


       echo "<tr>";
       echo "<td>9c</td>";
       if($row['occupied'] == 0) {
           echo "<td>(".$row['x']."|".$row['y'].")</td>";
           echo "<td>-</td>";
           echo "<td><b><font color=\"green\">Unoccupied</b></font></td>";
       } else {
           echo "<td><a href=\"karte.php?d=".$row['id']."&c=".$generator->getMapCheck($row['id'])."\">".$database->getVillageField($row['id'], "name")." (".$row['x']."|".$row['y'].")</a></td>";
           echo "<td><a href=\"spieler.php?uid=".$database->getVillageField($row['id'], "owner")."\">".$database->getUserField($database->getVillageField($row['id'], "owner"), "username", 0)."</a></td>";
           echo "<td><b><font color=\"red\">Occupied</b></font></td>";
       }
       echo "<td><center>".getDistance($coor['x'], $coor['y'], $row['x'], $row['y'])."</center></td>";
   }

?>
    
</tbody></table>

<?php

   }
   else if($_GET['s'] == 3) {

?>
<table id="member">
    <thead>
    <tr>
        <th colspan='5'>Crop Finder - 9c and 15c</th>
    </tr>
    <tr>
        <td>Type</td>
        <td>Coordinates</td>
        <td>Owner</td>
        <td>Occupied</td>
        <td>Distance</td>
    </tr>
    </thead><tbody>


</td></tr><br>
<?php

   unset($rows);
   while($row = mysql_fetch_array($type_both)) {
       $dist = getDistance($coor['x'], $coor['y'], $row['x'], $row['y']);

       $rows[$dist] = $row;

   }
   ksort($rows);
   foreach($rows as $dist => $row) {

       if($row['fieldtype'] == 1) {
           $field = '9c';
       } elseif($row['fieldtype'] == 6) {
           $field = '15c';
       }
   
       echo "<tr>";
       echo "<td>" . $field . "</td>";
       if($row['occupied'] == 0) {
           echo "<td>(".$row['x']."|".$row['y'].")</td>";
           echo "<td>-</td>";
           echo "<td><b><font color=\"green\">Unoccupied</b></font></td>";
       } else {
           echo "<td><a href=\"karte.php?d=".$row['id']."&c=".$generator->getMapCheck($row['id'])."\">".$database->getVillageField($row['id'], "name")." (".$row['x']."|".$row['y'].")</a></td>";
           echo "<td><a href=\"spieler.php?uid=".$database->getVillageField($row['id'], "owner")."\">".$database->getUserField($database->getVillageField($row['id'], "owner"), "username", 0)."</a></td>";
           echo "<td><b><font color=\"red\">Occupied</b></font></td>";
       }
       echo "<td><center>".getDistance($coor['x'], $coor['y'], $row['x'], $row['y'])."</center></td>";
   }

?>
    
</tbody></table>

<?php

   }
?>
</div>
<div id="side_info"><?php
   include("Templates/quest.tpl");
	include("Templates/news.tpl");
	include("Templates/multivillage.tpl");
	include("Templates/links.tpl");?>
</div>
<div class="clear"></div>
</div>
<?php
include("Templates/footer.tpl");