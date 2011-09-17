 <?php
//$trainlist = $database->getTraining($village->wid);
$trainlist = $technology->getTrainingList(4);
    if(count($trainlist) > 0) {
    $timer = 2*count($trainlist);
    	echo "
    <table cellpadding=\"1\" cellspacing=\"1\" class=\"under_progress\">
		<thead><tr>
			<td>Training</td>
			<td>Duration</td>
			<td>Finished</td>
		</tr></thead>
		<tbody>";
        foreach($trainlist as $train) {
        echo "<tr><td class=\"desc\">";
        echo "<img class=\"unit u".$train['unit']."\" src=\"img/x.gif\" alt=\"".$technology->getUnitName($train['unit'])."\" title=\"".$technology->getUnitName($train['unit'])."\" />".$train['amt']." ".$technology->getUnitName($train['unit'])."</td>
        <td class=\"dur\"><span id=timer".$timer.">".$generator->getTimeFormat(($train['commence']+($train['eachtime']*$train['amt']))-time())."</span></td>
        <td class=\"fin\">";
        $timer -= 1;
        $time = $generator->procMTime($train['commence']+($train['eachtime']*$train['amt']));
        if($time[0] != "today") {
            echo "on ".$time[0]." at";
            }
            echo $time[1]."</span><span> o'clock</td>
						</tr><tr class=\"next\"><td colspan=\"3\">The next unit will be finished in <span id=timer".$timer.">".$generator->getTimeFormat(($train['commence']+$train['eachtime'])-time())."</span></td></tr>";
        }
        echo "</tbody></table>";
    }
    
    ?>

