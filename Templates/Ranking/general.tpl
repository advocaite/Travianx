<?php
$tribe1 = mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 1");
$tribe2 = mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 2");
$tribe3 = mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users WHERE tribe = 3");
$tribes = Array(mysql_num_rows($tribe1),mysql_num_rows($tribe2),mysql_num_rows($tribe3));
$users = mysql_num_rows(mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users")) - 2;
?>
    <table cellpadding="1" cellspacing="1" id="world_player" class="world">
        <thead>
         <tr><th colspan="2">Player</th></tr>
         </thead>
         <tbody>
         <tr>
          <th>Registered players</th>
          <td><?php


			echo $users;

			?>
    </td>
       <!--  </tr>
         <tr>
          <th>Active players</th>
          <td>?
    </td>
         </tr>-->
         <tr>
          <th>Players online</th>
          <td><?php
				$result = mysql_query("SELECT * FROM ".TB_PREFIX."online");
				$num_rows = mysql_num_rows($result);
				echo $num_rows;
				?>
          </td>
         </tr>
        </tbody>
       </table>

       <table cellpadding="1" cellspacing="1" id="world_tribes" class="world">
        <thead>
         <tr><th colspan="3">Tribes</th></tr>
         <tr>
          <td>Tribe</td>
          <td>Registered</td>
          <td>Percent</td>
         </tr>
         </thead>
         <tbody>
         <tr>
          <td>Romans</td>
          <td><?php


    echo $tribes[0];

    ?>
    </td>
          <td><?php


$percents = 100*($tribes[0] / $users);
echo $percents = intval ($percents);
echo "%";
      ?></td>
         </tr>
         <tr>
          <td>Teutons</td>
          <td><?php


    echo $tribes[1];

    ?>
    </td>
          <td><?php



$percents = 100*($tribes[1] / $users);
echo $percents = intval ($percents);
echo "%";
      ?>
          </td>
         </tr>
         <tr>
          <td>Gauls</td>
          <td><?php


    echo $tribes[2];


    ?></td>
          <td><?php


$percents = 100*($tribes[2] / $users);
echo $percents = intval ($percents);
echo "%";
      ?></td>
         </tr>
        </tbody>
       </table>

<!-- NOT DONE       <table cellpadding="1" cellspacing="1" id="world_misc" class="world">
        <thead>
         <tr><th colspan="3">Miscellaneous</th></tr>
         <tr>
          <td>Attacks</td>
          <td>Casualties</td>
          <td>Date</td>
         </tr>
         </thead>
         <tbody>
             <tr>
          <td>7730</td>
          <td>73114</td>
          <td>10. Apr</td>
         </tr>
             <tr>
          <td>41227</td>
          <td>366850</td>
          <td>09. Apr</td>
         </tr>
             <tr>
          <td>41167</td>
          <td>307199</td>
          <td>08. Apr</td>
         </tr>
             <tr>
          <td>41032</td>
          <td>322104</td>
          <td>07. Apr</td>
         </tr>
             <tr>
          <td>42213</td>
          <td>323935</td>
          <td>06. Apr</td>
         </tr>
             <tr>
          <td>40565</td>
          <td>348493</td>
          <td>05. Apr</td>
         </tr>
             <tr>
          <td>39256</td>
          <td>305669</td>
          <td>04. Apr</td>
         </tr>
             </tbody>
       </table> -->
	   
	<div>