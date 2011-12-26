<?php

#################################################################################
##              Robertas                                                       ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
#################################################################################

include_once("../../Account.php");

mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysql_select_db(SQL_DB);

if ($session->access < ADMIN) die("Access Denied: You are not Admin!");


// village id
if (isset($_POST['id'])) {
  $vid = $_POST['id'];
  $wood = (isset($_POST['wood']) && is_numeric($_POST['wood'])) ? $_POST['wood'] : 0;
  $clay = (isset($_POST['clay']) && is_numeric($_POST['clay'])) ? $_POST['clay'] : 0;
  $iron = (isset($_POST['iron']) && is_numeric($_POST['iron'])) ? $_POST['iron'] : 0;
  $crop = (isset($_POST['crop']) && is_numeric($_POST['crop'])) ? $_POST['crop'] : 0;


	$q = "UPDATE " . TB_PREFIX . "vdata set wood = wood + $wood, clay = clay + $clay, iron = iron + $iron, crop = crop + $crop where wref = $vid";
	  
  mysql_query($q);

}

header("Location: ../../../Admin/admin.php?p=village&did=".$vid."&d");
