<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       spieler.php                                                 ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################


include("GameEngine/Village.php");
$start = $generator->pageLoadTimeStart();
$profile->procProfile($_POST);
$profile->procSpecial($_GET);
if(isset($_GET['newdid'])) {
	$_SESSION['wid'] = $_GET['newdid'];
	header("Location: ".$_SERVER['PHP_SELF']);
}
include("Templates/header.tpl");
include("Templates/res.tpl");
?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
<script type="text/javascript">
				function getMouseCoords(e) {
					var coords = {};
					if (!e) var e = window.event;
					if (e.pageX || e.pageY) 	{
						coords.x = e.pageX;
						coords.y = e.pageY;
					}
					else if (e.clientX || e.clientY) 	{
						coords.x = e.clientX + document.body.scrollLeft
							+ document.documentElement.scrollLeft;
						coords.y = e.clientY + document.body.scrollTop
							+ document.documentElement.scrollTop;
					}
					return coords;
				}

				function med_mouseMoveHandler(e, desc_string){
					var coords = getMouseCoords(e);
					med_showDescription(coords, desc_string);
				}

				function med_closeDescription(){
					var layer = document.getElementById("medal_mouseover");
					layer.className = "hide";
				}

				function init_local(){
					med_init();
				}

				function med_init(){
					layer = document.createElement("div");
					layer.id = "medal_mouseover";
					layer.className = "hide";
					document.body.appendChild(layer);
				}

				function med_showDescription(coords, desc_string){
					var layer = document.getElementById("medal_mouseover");
					layer.style.top = (coords.y + 25)+ "px";
					layer.style.left = (coords.x - 20) + "px";
					layer.className = "";
					layer.innerHTML = desc_string;
				}
			   </script>
        <div id="content"  class="player">
<?php
if(isset($_GET['uid'])) {
	if($_GET['uid'] >= 2) {
		$user = $database->getUserArray($_GET['uid'],1);
		if(isset($user['id'])){
			include("Templates/Profile/overview.tpl");
		} else {
			include("Templates/Profile/notfound.tpl");
		}
	}
	else {
		include("Templates/Profile/special.tpl");
	}
}
else if (isset($_GET['s'])) {
	if($_GET['s'] == 1) {
		include("Templates/Profile/profile.tpl");
	}
	if($_GET['s'] == 2) {
		include("Templates/Profile/preference.tpl");
	}
	if($_GET['s'] == 3) {
		include("Templates/Profile/account.tpl");
	}
	if($_GET['s'] == 4) {
		include("Templates/Profile/graphic.tpl");
	}
}
?>
</div>

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