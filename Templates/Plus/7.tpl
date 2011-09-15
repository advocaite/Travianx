<?php
//////////////     made by alq0rsan   /////////////////////////

    $MyGold = mysql_query("SELECT * FROM ".TB_PREFIX."users WHERE `username`='".$session->username."'") or die(mysql_error());
    $golds = mysql_fetch_array($MyGold);

    $MyId = mysql_query("SELECT * FROM ".TB_PREFIX."users WHERE `username`='".$session->username."'") or die(mysql_error());
    $uuid = mysql_fetch_array($MyId);


    $MyVilId = mysql_query("SELECT * FROM ".TB_PREFIX."bdata WHERE `wid`='".$village->wid."'") or die(mysql_error());
    $uuVilid = mysql_fetch_array($MyVilId);


    $goldlog = mysql_query("SELECT * FROM ".TB_PREFIX."gold_fin_log") or die(mysql_error());

        $today = date("mdHi");

if (mysql_num_rows($MyGold)) {
	if($golds['6'] > 2) {

if (mysql_num_rows($MyVilId)) {

mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '1'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '2'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '3'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '4'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '5'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '6'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '7'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '8'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '9'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '10'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '11'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '12'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '13'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '14'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '15'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '16'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '17'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '18'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '19'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '20'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '21'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '22'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '23'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '24'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '27'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '28'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '29'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '30'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '31'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '32'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '33'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '34'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '35'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '36'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '37'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '38'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '39'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '40'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '41'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '42'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '43'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '44'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '45'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '46'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '47'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '48'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '49'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '50'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '51'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '52'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '53'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '54'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '55'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '56'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '57'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '58'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '59'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '60'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '61'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '62'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '63'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '64'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '65'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '66'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '67'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '68'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '69'") or die(mysql_error());
mysql_query("UPDATE ".TB_PREFIX."bdata set timestamp = '1' where wid = ".$village->wid." AND type = '70'") or die(mysql_error());


$done1 = "&nbsp;&nbsp; All construction orders and researches in this village has been Completed";
    mysql_query("UPDATE ".TB_PREFIX."users set gold = ".($session->gold-2)." where `username`='".$session->username."'") or die(mysql_error());
    mysql_query("INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysql_num_rows($goldlog)+1)."', '".$village->wid."', 'Finish construction and research with gold')") or die(mysql_error());

} else {
$done1 = "&nbsp;&nbsp; Nothing has been Completed";
    mysql_query("INSERT INTO ".TB_PREFIX."gold_fin_log VALUES ('".(mysql_num_rows($goldlog)+1)."', '".$village->wid."', 'Failed construction and research with gold')") or die(mysql_error());

}
} else {
		$done1 = "&nbsp;&nbsp;You need more gold";
}
}


print "<BR><BR><BR><BR>";

echo $done1;

print "<BR>";

include("Templates/Plus/3.tpl");

 ?>