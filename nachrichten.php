<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       nachrichten.php                                             ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################
include("GameEngine/Village.php");
$start = $generator->pageLoadTimeStart();
$message->procMessage($_POST);
include("Templates/header.tpl");
include("Templates/res.tpl");?>
 
<div id="mid">
<?php include("Templates/menu.tpl"); 
if(isset($_GET['id']) && !isset($_GET['t'])) {
	$message->loadMessage($_GET['id']);
	include("Templates/Message/read.tpl");
}
elseif(isset($_GET['t'])){
	switch($_GET['t']) {
		case 1:if(isset($_GET['id'])){$id = $_GET['id'];}include("Templates/Message/write.tpl");break;
		case 2:	include("Templates/Message/sent.tpl");	break;
		case 3:	if($session->plus) {include("Templates/Message/archive.tpl");}break;
		case 4:if($session->plus) {	$message->loadNotes();include("Templates/Message/notes.tpl");}break;
		default:include("Templates/Message/inbox.tpl");break;
	}
}
else {include("Templates/Message/inbox.tpl");}?>
            
<div id="side_info">
<?php
include("Templates/quest.tpl");
include("Templates/news.tpl");
include("Templates/multivillage.tpl");
include("Templates/links.tpl");
?>
</div>
<div class="clear"></div>
</div>
<?php 
include("Templates/footer.tpl"); 