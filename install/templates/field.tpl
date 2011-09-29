<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANX                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianX)                                 //
//                              - TravianX = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//////////////////////////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['c']) && $_GET['c'] == 1) {
echo "<div class=\"headline\"><span class=\"f10 c5\">Error creating wdata. Check configuration or file.</span></div><br>";
}
?>
<div id="content" class="login">
<form action="process.php" method="post" id="dataform">
<div class="lbox">
<tr>
<td><span class="f9 c6">Create World Data:</span></td><td> <input type="submit" name="Submit" id="Submit" value="Create.."></td></tr>

<br /><br /><font color="Red"><b>NOTICE:</b> This could take some time!</font>
</div>
<input type="hidden" name="subwdata" value="1">
</form>
</div>
