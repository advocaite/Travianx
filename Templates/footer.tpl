<?php 
/** --------------------------------------------------- **\
| ********* DO NOT REMOVE THIS COPYRIGHT NOTICE ********* |
+---------------------------------------------------------+
| Credits:     All the developers including the leaders:  |
|              Advocaite & Dzoki & Donnchadh              |
|                                                         |
| Copyright:   TravianX Project All rights reserved       |
\** --------------------------------------------------- **/
?>
<div class="footer-stopper"></div>
<div class="clear"></div>

<div id="footer">
	<div id="mfoot">
		<div class="footer-menu">
			<div class="copyright">&copy; 2010 - 2011 TravianX All rights reserved</div>
			<div class="copyright">Server running on: <b><font color="Red">v6.0.0</font></b><br />Nbr query : <?php echo $requse;?></div>
		</div>
	</div>
	<div id="cfoot"></div>
</div>
        
<div id="stime">
	<div id="ltime">
		<div id="ltimeWrap">
			<?php echo CALCULATED_IN.' <b>'.round(($generator->pageLoadTimeEnd()-$start)*1000).'</b> ms';?><br />
			<?php echo SEVER_TIME.'<span id="tp1" class="b">'.date('H:i:s').'</span>'?>
		</div>
	</div>
</div>
<div id="ce"></div>
</body>
</html>