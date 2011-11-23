<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       activate.php                                                ##
##  Developed by:  Dixie                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

include('GameEngine/Account.php');
include('Templates/header.tpl');?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
<div id="content"  class="activate">
<?php
if(isset($_GET['e'])) {
	switch($_GET['e']) {
		case 1:
		include("Templates/activate/delete.tpl");
		break;
		case 2:
		include("Templates/activate/activated.tpl");
		break;
		case 3:
		include("Templates/activate/cantfind.tpl");
		break;
	}
} else if(isset($_GET['id']) && isset($_GET['c'])) {
	$c=$database->getActivateField($_GET['id'],"email",0);
	if($_GET['c'] == $generator->encodeStr($c,5)){
		include("Templates/activate/delete.tpl");
	} else { include("Templates/activate/activate.tpl"); }
} else {
include("Templates/activate/activate.tpl");
}

/*if(isset($_GET['e'])) {
	switch($_GET['e']) {
		case 1:
		include("Templates/activate/delete.tpl");
		break;
		case 2:
		include("Templates/activate/activated.tpl");
		break;
		case 3:
		include("Templates/activate/cantfind.tpl");
		break;
	}
} else
if(isset($_GET['id']) && isset($_GET['c']) && $_GET['c'] == $generator->encodeStr($_COOKIE['COOKEMAIL'],5)) {
	include("Templates/activate/delete.tpl");
} else
if(isset($_GET['id']) && !isset($_GET['c']) && !isset($_GET['e'])) {
	include("Templates/activate/activate.tpl");
}
else if(isset($_GET['usr']) && !isset($_GET['c']) && !isset($_GET['e'])) {
	$_COOKIE['COOKUSR'] = $_GET['usr'];
	$_COOKIE['COOKEMAIL'] = $database->getUserField($_GET['usr'],"email",1);
	include("Templates/activate/activate.tpl");
} else
if(isset($_GET['npw'])) {
} else  {

}*/

?>
</div>
<div id="side_info" class="outgame">
</div>

<div class="clear"></div>
			</div>
<?php
include("Templates/footer.tpl");