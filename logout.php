<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       logout.php                                                  ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
include("GameEngine/Account.php");
$start = $generator->pageLoadTimeStart();
include("Templates/header.tpl");?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
		<div id="content"  class="logout">
<h1>Logout successful.</h1><img class="roman" src="img/x.gif" alt=""><p>Thank you for your visit.</p>

		<p>If other people use this computer too, you should delete your cookies for your own safety:<br /><a href="login.php?del_cookie">&raquo; delete cookies</a></p>
</div>

<div id="side_info">
<?php
include("Templates/news.tpl");
?>
</div>
<div class="clear"></div>
</div>
<?php
include("Templates/footer.tpl");