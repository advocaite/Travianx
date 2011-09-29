<?php
	rename("include/constant.php","../GameEngine/config.php");
?>
<div id="content" class="login">

<style>

    span.c3 {position: absolute;right:10%}
    span.c2 {position: absolute;left:10%}
    
</style>
<form action="include/multihunter.php" method="post" id="dataform">
    <span class="f9 c6 c2">Multihunter Password:</span>
    <span class="c3">
        <input type="text" name="mhpw" id="mhpw" value="123456789">
    </span><br /><br />
   	<center>
    <input type="submit" name="Submit" id="Submit" value="Submit"></center>
</form>
    
</div>