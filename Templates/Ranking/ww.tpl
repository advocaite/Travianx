  <?php
    $db_host=SQL_SERVER; $db_user=SQL_USER; $db_pass=SQL_PASS; $db_name=SQL_DB;

    $con = mysql_connect($db_host, $db_user, $db_pass);
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    for($i=1;$i<=0;$i++) {
    echo "Row ".$i;
    }
             
    mysql_select_db($db_name, $con);

    $result = mysql_query("SELECT * FROM `s1_users` , `s1_fdata` WHERE `s1_fdata`.`f99t` = 0 ORDER BY `s1_fdata`.`f99` ASC");
	?>
<table cellpadding="1" cellspacing="1" id="villages" class="row_table_data">
			<thead>
				<tr>
					<th colspan="6">
						Wonder of the world								    
					</th>
				</tr>
		<tr>
				<td></td>
				<td>Player</td>
				<td>Name</td>
				<td>Alliance</td>
				<td>Level</td>
				<td></td>
		</tr>
		
		</thead><tbody> 