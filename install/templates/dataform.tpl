<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANX                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianX)                                 //
//                              - TravianX = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['c']) && $_GET['c'] == 1) {
echo "<div class=\"headline\"><span class=\"f10 c5\">Error importing database. Check configuration.</span></div><br>";
}
?>
<form action="process.php" method="post" id="dataform">
<div class="lbox">
<table><tr>
<td><span class="f9 c6">Create SQL Structure:</span></td><td><input type="submit" name="Submit" id="Submit" value="Create.."></td></tr>
</table>
</div>
<input type="hidden" name="substruc" value="1">
</form>