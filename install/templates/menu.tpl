<?php
	if(isset($_GET['s'])) {
	switch($_GET['s']) {
		case 1:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c2 f9\">Configuration</li><li class=\"c1 f9\">Database</li><li class= \"c1 f9\">Field</li><li class=\"c1 f9\">Multihunter</li><li class=\"c1 f9\">End</li>";
		break;
		case 2:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c2 f9\">Database</li><li class= \"c1 f9\">Field</li><li class=\"c1 f9\">Multihunter</li><li class=\"c1 f9\">End</li>";
		break;
		case 3:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c2 f9\">Field</li><li class=\"c1 f9\">Multihunter</li><li class=\"c1 f9\">End</li>";
		break;
		case 4:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c3 f9\">Field</li><li class=\"c2 f9\">Multihunter</li><li class=\"c1 f9\">End</li>";
		break;
        case 5:
		echo "<li class=\"c3 f9\">Intro</li><li class=\"c3 f9\">Configuration</li><li class=\"c3 f9\">Database</li><li class= \"c3 f9\">Field</li><li class=\"c3 f9\">Multihunter</li><li class=\"c2 f9\">End</li>";
		break;
	}
}
else {
	echo "<li class=\"c2 f9\">Intro</li><li class=\"c1 f9\">Configuration</li><li class=\"c1 f9\">Database</li><li class= \"c1 f9\">Field</li><li class=\"c1 f9\">End</li>";
}
?>