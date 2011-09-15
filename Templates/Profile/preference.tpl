<h1>Player profile</h1>

<?php include("menu.tpl"); ?>
<form action="spieler.php" method="POST">
<input type="hidden" name="ft" value="p2">
<input type="hidden" name="uid" value="<?php echo $session->uid; ?>" />
<table cellpadding="1" cellspacing="1" id="links"><thead>
<tr>
    <th>
        <a href="#" onClick="return Popup(1,5);">
        <img class="help" src="img/x.gif" alt="Manual" title="Manual" /></a>
    </th>
    <th colspan="2">Direct links</th>
</tr>

<tr>
    <td>No.</td>
    <td>Link name</td>
    <td>Link target</td>
</tr>
</thead>
<tbody><tr>
    <td class="nr"><input class="text" type="text" name="nr0" value="0" size="1" maxlength="3"></td>
    <td class="nam"><input class="text" type="text" name="linkname0" value="" maxlength="30"></td>

    <td class="link"><input class="text" type="text" name="linkziel0" value="" maxlength="255"></td>
</tr>
</tbody>
</table><table cellpadding="1" cellspacing="1" id="completion" class="set"><thead>
    <tr>
        <th colspan="2">Auto completion</th>
    </tr>
    <tr>
        <td colspan="2">Used for rally point and marketplace:</td>

    </tr>
    </thead><tbody>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="v1" value="1" checked></td>
        <td>own villages</td>
    </tr>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="v2" value="1" ></td>

        <td>villages of the surroundings</td>
    </tr>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="v3" value="1" ></td>
        <td>villages from players of the alliance</td>
    </tr>
    </tbody></table><table cellpadding="1" cellspacing="1" id="big_map" class="set"><thead>
    <tr>

        <th colspan="2">Large map</th>
    </tr>
    </thead><tbody>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="map" ></td>
        <td>Show the large map in an extra window.</td>
    </tr>
    </tbody>

    </table><table cellpadding="1" cellspacing="1" id="report_filter" class="set"><thead>
    <tr>
        <th colspan="2">Report filter</th>
    </tr>
    </thead><tbody>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="v4" value="1" ></td>
        <td>No reports for transfers to own villages.</td>

    </tr>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="v5" value="1" ></td>
        <td>No reports for transfers to foreign villages.</td>
    </tr>
    <tr>
        <td class="sel"><input class="check" type="checkbox" name="v6" value="1" ></td>
        <td>No reports for transfers from foreign villages.</td>

    </tr>
    </tbody>
    </table><table cellpadding="1" cellspacing="1" id="time" class="set"><thead>
<tr>
    <th colspan="2">Time preferences</th>
</tr>
<tr>
    <td colspan="2">Here you can change Travian's displayed time to fit your time zone.</td>
</tr>
</thead><tbody>

<tr>
    <th>Time zones</th>
    <td><select name="timezone" class="dropdown">
        <optgroup label="local time zones"><option value="495">Europe</option>
<option value="99" selected="selected">UK</option>
<option value="492">Turkey</option>
<option value="328">Asia/Kolkata</option>
<option value="345">Asia/Bangkok</option>

<option value="257">USA/New York</option>
<option value="189">USA/Chicago</option>
<option value="474">New Zealand</option></optgroup><optgroup label="general time zones"><option value="12">UTC-11</option>
           <option value="13">UTC-10</option>
           <option value="14">UTC-9</option>
           <option value="15">UTC-8</option>
           <option value="16">UTC-7</option>

           <option value="17">UTC-6</option>
           <option value="18">UTC-5</option>
           <option value="19">UTC-4</option>
           <option value="20">UTC-3</option>
           <option value="21">UTC-2</option>
           <option value="22">UTC-1</option>

           <option value="23">UTC</option>
           <option value="0">UTC+1</option>
           <option value="1">UTC+2</option>
           <option value="2">UTC+3</option>
           <option value="3">UTC+4</option>
           <option value="4">UTC+5</option>

           <option value="5">UTC+6</option>
           <option value="6">UTC+7</option>
           <option value="7">UTC+8</option>
           <option value="8">UTC+9</option>
           <option value="9">UTC+10</option>
           <option value="10">UTC+11</option>

           <option value="11">UTC+12</option>
           
        </optgroup></select>

    </td>
</tr><tr>
    <th>Date</th>
    <td>
        <label><input class="radio" type="Radio" name="tformat" value="0" checked> EU (dd.mm.yy 24h)</label><br />

        <label><input class="radio" type="Radio" name="tformat" value="1"> US (mm/dd/yy 12h)</label><br />
        <label><input class="radio" type="Radio" name="tformat" value="2"> UK (dd/mm/yy 12h)</label><br />
        <label><input class="radio" type="Radio" name="tformat" value="3"> ISO (yy/mm/dd 24h)</label>
    </td>
</tr>
</tbody>
</table><p class="btn"><input type="image" value="" name="s1" id="btn_ok" class="dynamic_img" src="img/x.gif" alt="OK" /></p>

</form>
