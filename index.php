<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       index.php                                                   ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

error_reporting(E_ALL);
if (!file_exists('GameEngine/config.php')) {
header("Location: install/");
}
include("GameEngine/config.php");
include("GameEngine/Database.php");
include("GameEngine/Lang/".LANG.".php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            Powered by TravianX - <?php echo SERVER_NAME; ?>        </title>
        <link rel="stylesheet" type="text/css" href="gpack/travian_homepage/lang/en/compact.css"/>
		<meta name="content-language" content="en"/>
	<meta http-equiv="imagetoolbar" content="no"/>
		
					<script type="text/javascript" src="crypt.js^1302263420"></script>
		    </head>
    <body class=" LTR">
    	<div id="backgroundLeft"></div>
    	<div id="backgroundRight"></div>
		<div id="background">
	        <div id="navigation-wrapper">
	            <div id="navigation-container">
	            	<div id="country_select">
			<div id="flags"></div>
		<script type="text/javascript">
			window.addEvent('domready', function()
			{
				new Travian.Flags(
				{
					container:	'flags',
					currentTld:	'com',
					adCode:		'',
					regions:
					{
						'europe':		'Europe',
						'america':		'America',
						'asia':			'Asia',
						'middleEast':	'Middle East',
						'africa':		'Africa',
						'oceania':		'Oceania'
					},
					flags:
					{
						'europe':
						{
							'ba':	'../www.travian.ba/default.htm',
							'bg':	'../www.travian.bg/default.htm',
							'com':	'default.htm',
							'cz':	'../www.travian.cz/default.htm',
							'de':	'../www.travian.de/default.htm',
							'dk':	'../www.travian.dk/default.htm',
							'fi':	'../www.travian.fi/default.htm',
							'fr':	'../www.travian.fr/default.htm',
							'gr':	'../www.travian.gr/default.htm',
							'hr':	'../www.travian.com.hr/default.htm',
							'hu':	'../www.travian.hu/default.htm',
							'il':	'../www.travian.co.il/default.htm',
							'it':	'../www.travian.it/default.htm',
							'lt':	'../www.travian.lt/default.htm',
							'net':	'../www.travian.net/default.htm',
							'nl':	'../www.travian.nl/default.htm',
							'no':	'../www.travian.no/default.htm',
							'pl':	'../www.travian.pl/default.htm',
							'pt':	'../www.travian.pt/default.htm',
							'ro':	'../www.travian.ro/default.htm',
							'rs':	'../www.travian.rs/default.htm',
							'ru':	'../www.travian.ru/default.htm',
							'se':	'../www.travian.se/default.htm',
							'si':	'../www.travian.si/default.htm',
							'sk':	'../www.travian.sk/default.htm',
							'tr':	'../www.travian.com.tr/default.htm',
							'ua':	'../www.travian.com.ua/default.htm',
							'uk':	'../www.travian.co.uk/default.htm',
							'ee':	'../www.travian.co.ee/default.htm',
							'lv':	'../www.travian.lv/default.htm'
						},
						'america':
						{
							'ar':	'../www.travian.com.ar/default.htm',
							'br':	'../www.travian.com.br/default.htm',
							'cl':	'../www.travian.cl/default.htm',
							'mx':	'../www.travian.com.mx/default.htm',
							'us':	'../www.travian.us/default.htm'
						},
						'asia':
						{
							'cn':	'../www.travian.cc/default.htm',
							'com':	'default.htm',
							'hk':	'../www.travian.hk/default.htm',
							'in':	'../www.travian.in/default.htm',
							'id':	'../www.travian.co.id/default.htm',
							'jp':	'../www.travian.jp/default.htm',
							'my':	'../www.travian.com.my/default.htm',
							'ph':	'../www.travian.ph/default.htm',
							'kr':	'../www.travian.co.kr/default.htm',
							'asia':	'../www.travian.asia/default.htm',
							'vn':	'../www.travian.com.vn/default.htm',
							'pk':	'../www.travian.pk/default.htm'
						},
						'middleEast':
						{
							'ae':	'../www.travian.ae/default.htm',
							'ir':	'../www.travian.ir/default.htm',
							'eg':	'../www.travian.com.eg/default.htm',
							'sy':	'../sy.travian.com/default.htm',
							'sa':	'../www.travian.com.sa/default.htm',
							'ma':	'../www.travian.ma/default.htm'
						},
						'africa':
						{
							'za':	'../www.travian.co.za/default.htm',
							'ma':	'../www.travian.ma/default.htm',
							'eg':	'../www.travian.com.eg/default.htm'
						},
						'oceania':
						{
							'au':	'../www.travian.com.au/default.htm',
							'nz':	'../www.travian.co.nz/default.htm'
						}
					}
				});
			});
		</script>
	</div>	             	<div id="top-nav">
	<div id="top-nav-menu">
		<div id="logo">
			<a href="<?php echo HOMEPAGE; ?>"><img src="img/x.gif" class="logo" alt="" /></a>
		</div>
		<ul id="top-navigation">
			<li>
				<a href="anleitung.php" class="popcon"><?php echo TUTORIAL; ?></a
			</li>
			<li>
				<a target="blank" href="#" id="forum"><?php echo FORUM; ?></a>
			</li>
						<!--<li>
				<a href="#" class="popcon">More games</a>
			</li>-->
						<li>
				<a href="anmelden.php" class="popcon" id="register"><?php echo REG; ?></a>
			</li>
		</ul>
	</div>
	<div id="top-nav-login">
		<div id="login">
				<div class="btn-green">
				  <div class="btn-green-l"></div>
				  <div class="btn-green-c"><a class="npage popcon" href="login.php"><?php echo LOGIN; ?></a></div>
				  <div class="btn-green-r"></div>
				  <div class="clear"></div>
				</div>
		</div>
	</div>
</div>	            </div>
	        </div>

	       <div id="content-container">
	            <div id="content-menu">
	                                <div id="statistics">
                    <div id="stat-top"></div>
                    <div id="stat_bottom"></div>

                    <h3 class="stat bold grey"><?php echo PLAYER_STATISTICS; ?> </h3>
                    <div>
	                    <div class="stat type"><?php echo TOTAL_PLAYERS; ?>:</div><div class="stat value">
						<?php
						//TOTAL PLAYERS STATISTICS
						$users = mysql_num_rows(mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users"));
						echo $users;
						?>
						</div>
	                    <div class="clear"></div>
	                    <div class="stat type"><?php echo ACTIVE_PLAYERS; ?>:</div><div class="stat value">0</div>
	                    <div class="clear"></div>
	                    <div class="stat type"><?php echo ONLINE_PLAYERS; ?>:</div><div class="stat value">
						<?php
						// ONLINE PLAYERS STATISTICS
						$result = mysql_query("SELECT * FROM ".TB_PREFIX."active");
						$num_rows = mysql_num_rows($result);
						echo $num_rows;
						?>
						</div>
						<div class="clear"></div>
	                </div>
                </div>

                <div id="news">
                    <div id="news-head"></div>
                    <div id="news-content">
                        <h3 class="news bold"><?php echo NEWS; ?> </h3>
						<!-- NEWSBOX1 - START -->
                        		<div class="news-items">
									<?php if(HOME1 == true){
									include("Templates/News/home/home1.tpl");
									} 
									?>
									</div>
						<!-- NEWSBOX1 - END -->
						
						
		                       <?php if(HOME2 & HOME1 == true){
									echo '<div class="news-divider"></div>';
									} 
									else if(HOME1 & HOME3 == true){
									echo '<div class="news-divider"></div>';
									}
									else echo '';
									?>
									
									
						<!-- NEWSBOX2 - START -->
								<div class="news-items">
									<?php if(HOME2 == true){
									include("Templates/News/home/home2.tpl");
									} 
									?>
									</div>
						<!-- NEWSBOX2 - END -->
						
						
									<?php if(HOME3 & HOME2 == true){
									echo '<div class="news-divider"></div>';
									} 
									else echo '';
									?>
									
						<!-- NEWSBOX3 - START -->			
								<div class="news-items">
									<?php if(HOME3 == true){
									include("Templates/News/home/home3.tpl");
									} 
									?>
									</div>
						<!-- NEWSBOX3 - END -->			
		                                             </div>
                    <div id="news-bottom"> </div>
                </div>

                
					                <!--<div id="shop">
	                	<div class="article">T-shirt<br/>$ 15.99</div>
	                	<div class="link">
							<img class="ticker-btn" alt="" src="img/x.gif" />
							<a target="blank" class="tlink" href="../www.cafepress.com/travianshop/4938069/default.htm">Go to shop</a>
						</div>
	                </div>-->
                
									<!--<div id="fb-widget">
						<div id="fb-widget-head"></div>
						<div id="fb-widget-content">
							<iframe
								id="fb-container"
								src="../www.facebook.com/plugins/likebox.php^href=http_/_www.facebook.com/traviannews&width=182&colorscheme=light&connections=9&stream=false&header=false&height=260/default.htm"
								scrolling="no"
								frameborder="0"
							></iframe>
						</div>
						<div id="fb-widget-bottom"></div>
	                </div>-->
               		            </div>
	            <div id="content-main">
	            <div id="wit">
    <div id="wit-top"></div>
    <div id="wit-content" class="with-button">
    	        <div id="hero"></div>
        <h1 class="wit bold"><?php echo MP_STRATEGY_GAME; ?></h1>
        <div class="wit-info">
			<?php echo WHAT_IS; ?>							<div class="playnow playnow-button">
					<div class="playnow-start">
						<h1 class="play white bold"><a class="popcon play" href="anmelden.php" title="<?php echo REGISTER_FOR_FREE; ?>"><?php echo REGISTER_FOR_FREE; ?></a></h1>
					</div>
					<div class="playnow-end"></div>
					<div class="clear"></div>
		        </div>
	               </div>

        <div id="stage_space"></div>
        <div id="stage">
            <div id="frame">

                <div class="stage-content shown">
                    <h3 class="stage white bold"><?php echo LATEST_GAME_WORLD; ?></h3>
                    <b><?php echo LATEST_GAME_WORLD2; ?></b>
                    <div class="ticker-con">
                        <div class="ticker-wrap">
                            <div class="ticker">
                                <div>
                                	                                    <img src="img/x.gif" alt="" id="ticker-tp" /><?php echo PLAYERS; ?> 
																						<?php
																						$users = mysql_num_rows(mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users"));
																						echo $users;
																						?>                                   
																						<img src="img/x.gif" alt="" id="ticker-ap" /><?php echo ONLINE; ?>
																						<?php
																						$result = mysql_query("SELECT * FROM ".TB_PREFIX."online");
																						$num_rows = mysql_num_rows($result);
																						echo $num_rows;
																						?>                                                                    </div>
                                <div>
                                	<img src="img/x.gif" alt="" class="ticker-btn" /> <a href="anmelden.php" class="popcon tlink" title="<?php echo PLAY_NOW; ?>"><?php echo PLAY_NOW; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stage-content">
                    <h3 class="stage white bold">The new TRAVIAN 4</h3>
                    <b>Now with a revolutionized<br/> hero system, <br/>completely new graphics<br/>and an interactive<br/>map!</b>
                    <div class="ticker-con">
                        <div class="ticker-wrap">
                            <div class="ticker">
                              <img src="img/x.gif" alt="" class="ticker-btn" /> <a href="#serverRegister" class="popcon tlink" title="Explore the new TRAVIAN 4">Explore the new TRAVIAN 4</a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="stage-content">
                    <h3 class="stage white bold">Community</h3>
                    <b>Become a part of one<br/>of the biggest gaming<br/> communities in the<br/>world.</b>
                    <div class="ticker-con">
                        <div class="ticker-wrap">
                            <div class="ticker">
                              <img src="img/x.gif" alt="" class="ticker-btn" /> <a target="blank" href="../forum.travian.com/default.htm" class="tlink" title="Become part of our community now!">Become part of our community now!</a>                            </div>
                        </div>
                    </div>
                </div>

                <div id="stage-nav">
                    <ul id="buttons">
                        <li class="b0 act0">&nbsp;</li>
                        <li class="b1">&nbsp;</li>
                        <li class="b2">&nbsp;</li>
                    </ul>
                </div>

            </div>

            <div id="stage-bg"></div>

        </div>

    </div>
    <div id="wit-bottom"></div>
</div>

<div id="moreabttravian">
    <div id="find-out-more">
        <div id="strip-head"><div><?php echo LEARN_MORE; ?></div></div>
        <div id="strip">
            <ul id="strips">
                <li class="stip0">&nbsp;</li>
                <li class="stip1">&nbsp;</li>
                <li class="stip2">&nbsp;</li>
                <li class="stip3">&nbsp;</li>
                <li class="stip4">&nbsp;</li>
                <li class="stip5">&nbsp;</li>
            </ul>
        </div>

        <div id="strip-details">
            <div class="details">
                <div class="details-top"></div>
                <div class="details-l-top"></div><div class="details-r-top"></div>
