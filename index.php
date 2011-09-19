<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       index.php                                                   ##
##  Developed by:  Advocaite                                                      ##
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
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>
            <?php echo SERVER_NAME; ?></title>
        <link rel="stylesheet" type="text/css" href="index.php_files/compact.css"><meta name="content-language" content="au">
	<meta http-equiv="imagetoolbar" content="no">
		<script type="text/javascript" src="uncrypt.js"></script>
</head>
    <body class="gecko LTR">
    	<div id="backgroundLeft"></div>
    	<div id="backgroundRight"></div>
		<div id="background">
	        <div id="navigation-wrapper">
	            <div id="navigation-container">
	            	<div id="country_select">

					</div>	             	
	<div id="top-nav">
	<div id="top-nav-menu">
		<div id="logo">
			<a href="http://www.ragezone.com/f583/"><img src="index.php_files/x.gif" class="logo" alt=""></a>
		</div>
		<ul id="top-navigation">
			<li>
				<a href="#tutorial" class="popcon"><?php echo TOUR ?></a>
			</li>
			<li>
				<a target="blank" href="http://100.100.0.1/foro/forumdisplay.php?27-Travian" id="forum"><?php echo FORUM ?></a>
			</li>
						<li>
				<a href="#moregames" class="popcon"><?php echo MORE_LINKS ?></a>
			</li>
						<li>
				<a id="register" class="popcon" href="#serverRegister"><?php echo REG ?></a>			</li>
		</ul>
	</div>
	<div id="top-nav-login">
		<div id="login">
			<div class="btn-green">
			  <div class="btn-green-l"></div>
			  <div class="btn-green-c">
				<a class="npage popcon" href="#serverLogin"><?php echo LOGIN ?></a>			  </div>
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
	                    <div class="stat type"><?php echo TOTAL_PLAYERS; ?>:</div><div class="stat value"><?php
                        $users = mysql_num_rows(mysql_query("SELECT SQL_CACHE * FROM ".TB_PREFIX."users"));
                        echo $users;
                        ?></div>
	                    <div class="clear"></div>
	                    <div class="stat type"><?php echo ACTIVE_PLAYERS; ?>:</div><div class="stat value"><?php
                        $weekago = time() - 604800;
                        $usersthisweek = mysql_result(mysql_query("SELECT COUNT(*) FROM ".TB_PREFIX."users WHERE lastupdate>$weekago"),0);
                        echo $usersthisweek;
                        ?></div>
	                    <div class="clear"></div>
	                    <div class="stat type"><?php echo ONLINE_PLAYERS; ?>:</div><div class="stat value"><?php
                        $result = mysql_query("SELECT * FROM ".TB_PREFIX."active");
                        $num_rows = mysql_num_rows($result);
                        echo $num_rows;
                        ?></div>
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

                
				
								
               		            </div>
	            <div id="content-main">
	            <div id="wit">
    <div id="wit-top"></div>
    <div id="wit-content" class="with-button">
    	        <div id="hero"></div>
        <h1 class="wit bold"><?php echo MP_STRATEGY_GAME ?></h1>
        <div class="wit-info"><?php echo WHAT_IS ?>
						<div class="playnow playnow-button">
					<div class="playnow-start">
						<h1 class="play white bold"><a id="register" class="popcon play" href="index.php#serverRegister" title="Register here for free!"><?php echo REGISTER_FOR_FREE ?></a></h1>
					</div>
					<div class="playnow-end"></div>
					<div class="clear"></div>
		        </div>
	               </div>

        <div id="stage_space"></div>
        <div id="stage">
            <div id="frame">
            
                <div class="stage-content stage-content0 shown" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/new_world-ltr.jpg); visibility: visible; opacity: 1;">
                		<div style="position:absolute; left:15px; top:170px;"><img alt="" class="bbArrow" src="index.php_files/x.gif"> <span style="color:black;"><span style="font-weight:bold;"><?php echo PLAY_NOW ?></span></span></div>
	<div style="position:absolute; left:15px; top:12px;"><h3><?php echo LATEST_GAME_WORLD ?></h3><br>
<span style="font-weight:bold;"><?php echo LATEST_GAME_WORLD2 ?></span></div>
                    <div class="stage-arrow stage-arrow-0"></div>
				</div>
                <div class="stage-content stage-content1 " style="background-image: url(index.php_files/gpack/main_defailt/img/stage/feature-ltr.jpg); visibility: visible; opacity: 1;">
                		<div style="position:absolute; left:15px; top:170px;"><img alt="" class="bbArrow" src="index.php_files/x.gif"> <span style="color:black;"><span style="font-weight:bold;"><?php echo LEARN_MORE ?></span></span></div>
	<div style="position:absolute; left:15px; top:12px;"><h3><?php echo SERVER_NAME ?></h3><br>
<span style="font-weight:bold;"><?php echo LEARN_MORE2 ?></span></div>
                    <div class="stage-arrow stage-arrow-1"></div>
                </div>
                <div class="stage-content stage-content2" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/community-ltr.jpg)">
                		<div style="position:absolute; left:15px; top:170px;"><img alt="" class="bbArrow" src="index.php_files/x.gif"> <span style="color:black;"><span style="font-weight:bold;"><?php echo BECOME_COMUNITY ?></span></span></div>
	<div style="position:absolute; left:15px; top:12px;"><h3><?php echo COMUNITY ?></h3><br>
<span style="font-weight:bold;"><?php echo BECOME_COMUNITY2 ?></span></div>
                    <div class="stage-arrow stage-arrow-2"></div>
                </div>

                <div id="stage-nav">
                    <ul id="buttons">
                        <li class="b0 act0" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/new_world_small-ltr.png)">&nbsp;</li>
                        <li class="b1" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/feature_small-ltr.png)">&nbsp;</li>
                        <li class="b2" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/community_small-ltr.png)">&nbsp;</li>
                    </ul>
                </div>
            </div>

            <div style="visibility: hidden; opacity: 0;" id="stage-bg"></div>
            <div id="stage-fg">
            	<div class="stage-links">
	                <a style="visibility: visible; opacity: 1;" class="stage-link stage-link1 shown" href="index.php#serverRegister"></a>					
					<a style="visibility: visible; opacity: 1;" class="stage-link stage-link2 " href="index.php#serverRegister"></a>					
					<a class="stage-link stage-link3" href="http://100.100.0.1/foro/forumdisplay.php?27-Travian"></a>				
				</div>
            	<div id="stage-nav-click">
	           		<ul id="buttons-click">
	                 	<li style="visibility: visible; opacity: 1;" class="b0 act0">&nbsp;</li>
	                    <li style="visibility: visible; opacity: 1;" class="b1 ">&nbsp;</li>
	                    <li class="b2">&nbsp;</li>
	               	</ul>
               	</div>
            </div>
        </div>

    </div>
    <div id="wit-bottom"></div>
</div>

<div id="moreabttravian">
    <div id="find-out-more">
        <div id="strip-head"><div><?php echo LEARN_MORE ?></div></div>
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
                <div class="details-body">
                    <div class="details-body-l" id="strip-c1"></div>
                    <div class="details-body-r"><?php echo LEARN1 ?><br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial"><?php echo TOUR ?></a></div>
                            <div class="btn-green-r"></div>
                        </div>
                    </div>
                </div>
                <div class="details-l-bottom"></div><div class="details-r-bottom"></div>
                <div class="details-bottom"></div>
            </div>
            <div class="details">
                <div class="details-top"></div>
                <div class="details-l-top"></div><div class="details-r-top"></div>
                <div class="details-body">
                    <div class="details-body-l" id="strip-c2"></div>
                    <div class="details-body-r"><?php echo LEARN2 ?><br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial"><?php echo TOUR ?></a></div>
                            <div class="btn-green-r"></div>
                        </div>
                    </div>
                </div>
                <div class="details-l-bottom"></div><div class="details-r-bottom"></div>
                <div class="details-bottom"></div>
            </div>
            <div class="details">
                <div class="details-top"></div>
                <div class="details-l-top"></div><div class="details-r-top"></div>
                <div class="details-body">
                    <div class="details-body-l" id="strip-c3"></div>
                    <div class="details-body-r"><?php echo LEARN3 ?><br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial"><?php echo TOUR ?></a></div>
                            <div class="btn-green-r"></div>
                        </div>
                    </div>
                </div>
                <div class="details-l-bottom"></div><div class="details-r-bottom"></div>
                <div class="details-bottom"></div>
            </div>
            <div class="details">
                <div class="details-top"></div>
                <div class="details-l-top"></div><div class="details-r-top"></div>
                <div class="details-body">
                    <div class="details-body-l" id="strip-c4"></div>
                    <div class="details-body-r"><?php echo LEARN4 ?><br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial"><?php echo TOUR ?></a></div>
                            <div class="btn-green-r"></div>
                        </div>
                    </div>
                </div>
                <div class="details-l-bottom"></div><div class="details-r-bottom"></div>
                <div class="details-bottom"></div>
            </div>
            <div class="details">
                <div class="details-top"></div>
                <div class="details-l-top"></div><div class="details-r-top"></div>
                <div class="details-body">
                    <div class="details-body-l" id="strip-c5"></div>
                    <div class="details-body-r"><?php echo LEARN5 ?><br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial"><?php echo TOUR ?></a></div>
                            <div class="btn-green-r"></div>
                        </div>
                    </div>
                </div>
                <div class="details-l-bottom"></div><div class="details-r-bottom"></div>
                <div class="details-bottom"></div>
            </div>
            <div class="details">
                <div class="details-top"></div>
                <div class="details-l-top"></div><div class="details-r-top"></div>
                <div class="details-body">
                    <div class="details-body-l" id="strip-c6"></div>
                    <div class="details-body-r"><?php echo LEARN6 ?>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial"><?php echo TOUR ?></a></div>
                            <div class="btn-green-r"></div>
                        </div>
                    </div>
                </div>
                <div class="details-l-bottom"></div><div class="details-r-bottom"></div>
                <div class="details-bottom"></div>
            </div>
        </div>
    </div>
</div>


<div id="ssc-bg">
    <div id="ss-head">
        <div id="ss-head-left"></div>
        <div id="ss-head-right"></div>
        <h3 class="ss bold white"><?php echo SCREENSHOTS ?></h3></div>

	<div id="ss-container">
	    <div id="g-widget">
	        <a class="browse next disabled"></a>
	        <div id="gallery">
	            <div style="width: 1568px;" id="g-items">
	                <img src="index.php_files/x.gif" class="screen1" alt="">
	                <img src="index.php_files/x.gif" class="screen2" alt="">
	                <img src="index.php_files/x.gif" class="screen3" alt="">
	                <img src="index.php_files/x.gif" class="screen4" alt="">
	                <img src="index.php_files/x.gif" class="screen5" alt="">
	                <img src="index.php_files/x.gif" class="screen6" alt="">
	                <img src="index.php_files/x.gif" class="screen7" alt="">
	                <img src="index.php_files/x.gif" class="screen8" alt="">
	            </div>
	        </div>
	        <a class="browse prev"></a>
	    </div>
	</div>
</div>
<script type="text/javascript">
	window.addEvent('domready', function()
	{
	    //stage
	    var stagewidget = new stageWidget({
	        stagebg:$('stage-bg'),
	        stageduration: {
	            0:5000,
	            1:5000,
	            2:5000	        },
	        stagecon:$$(".stage-content"),
	        stagenav:$$("#buttons-click li"),
	        stagelink:$$(".stage-link"),
	    });

	    //tooltip
	    var tooltipwidget = new tooltipWidget({
	        tips: $$("#strips li"),
	        details:$$(".details")
	    });
	    //slider
	    var sliderwidget = new sliderWidget({
	        container: $$('#g-widget'),
	        pimgwidth:520,
	        head:$('prev_head'),
	        desc:$('prev_desc'),
	        prev_bg:$('overlaybg'),
	        prev_container:$('preview_container'),
	        prev_stage_container:$$('#preview_stage'),
	        prev_items:$('preview_items'),
	        close:$('close')
	    });

	    //slideshow [footer]
	    $('screenshotp').addEvents(
	    {
	    	'click': function(e) {
	    		e.stop();
	    		this.fireEvent('show');
	    	},
	    	'show':function(e){
		        new sliderWidget({
		            container: $$('#g-widget'),
		            preview: false,
		            inpreview:true,
		            pimgwidth:520,
		            head:$('prev_head'),
		            desc:$('prev_desc'),
		            prev_bg:$('overlaybg'),
		            prev_container:$('preview_container'),
		            prev_stage_container:$$('#preview_stage'),
		            prev_items:$('preview_items'),
		            close:$('close'),
		            directcall:true
		        });

		    }
	    });

	    //popup anchor
	    var url = new URI();
	    var anchor = url.get('fragment');
	    if (anchor && anchor == 'screenshots')
	    {
	    	$('screenshotp').fireEvent('show');
	    }
	});
</script>	            </div>
	            <div class="clear"></div>
	        </div>

	       <div id="footer-container">
	            <div id="footer">
					<a class="flink popcon" href="#help"><?php echo SUPPORT ?></a>&nbsp;|&nbsp;
	                <a target="blank" class="flink" href="http://100.100.0.1/foro/forumdisplay.php?27-Travian"><?php echo FORUM ?></a>&nbsp;|&nbsp;
	                <a class="flink popcon" href="#moregames"><?php echo MORE_LINKS ?></a>&nbsp;|&nbsp;
	                <a target="blank" class="flink" href="#screenshots" id="screenshotp"><?php echo SCREENSHOTS ?></a>&nbsp;|&nbsp;

	                <br>
	                <a target="blank" class="flink" href="http://forum.ragezone.com/f583/">TravianX 4.8.5</a> - 2011 
				</div>
	        </div>

	        <div id="preview_container">
	            <div id="p-top"></div>
	            <div id="p-bg"></div>
	            <div id="p-bottom"></div>
	            <a class="close"></a>
	            <div id="p-content">
	                <div id="prev_head">
	                    <h3><?php echo SCREENSHOTS ?></h3>
	                </div>
	                <div id="preview_stage">
	                    <a class="browse next"></a>
	                    <div id="preview_img">
	                        <div id="preview_items"></div>
	                    </div>
	                    <a class="browse prev"></a>
	                    <div class="clear"></div>
					</div>
	                <div id="prev_desc"></div>
	            </div>
	        </div>

	                                      <div class="serverLogin" style="display: none; visibility: visible; left: 246px; top: 100px;" id="popup">
                <div id="popup-top"><a class="pclose"></a></div>
                <div id="popup-content"><h3 class="pop popgreen bold"><?php echo CHOOSE ?></h3>
                
	<div id="t3Divider"></div>

	<div id="t3Area">
		<div id="t3AreaTop" class="openedClosedSwitch switchOpened">
			<a class="link" title="" href="#" onclick="
				$('t3AreaContent').toggleClass('hide');
				$('t3AreaBottom').toggleClass('hide');
				$('t3AreaTop').toggleClass('switchClosed');
				$('t3AreaTop').toggleClass('switchOpened');
			"><span class="switch" src="img/x.gif">Travian Classic</span></a>
		</div>
		<div id="t3AreaContent">
		

			<div class="clear"></div>
		</div>
		<div id="t3AreaBottom"></div>
	</div>
<div class="clear"></div></div>
	            <div id="popup-bottom"></div>
	        </div>
	        <div style="visibility: visible; opacity: 0.7; display: none; height: 1140px;" id="overlaybg"></div>
	        <script type="text/javascript">
	            var screenshots = [
	                {'img':'screenBig screenBig1','hl':'Village centre', 'desc':'Your village could be like this one day, becoming the starting point for your vast empire.'},
	                {'img':'screenBig screenBig2','hl':'Village overview', 'desc':'Lumber, clay, iron and crop are the vital resources which will fuel the economy of your village and feed your people; they will provide you with the materials necessary for construction and war. With these valuable resources, you can train a powerful conquering army.'},
	                {'img':'screenBig screenBig3','hl':'The hero', 'desc':'You can send your hero to adventures, where he will have to face great danger and pass difficult challenges. If your hero is successful, he stands a chance of bringing something valuable home.'},
	                {'img':'screenBig screenBig4','hl':'Building information', 'desc':'For it to become powerful and productive, your village will need a great number of buildings. At the beginning, choose well what you want to construct first, as resources are scarce.'},
	                {'img':'screenBig screenBig5','hl':'Surrounding territories', 'desc':'Explore your surrounding territories in order to get to know your neighbors; you can opt for a path of peace, creating alliances and confederacies, or you can wage war and conquer the surrounding lands. There may be rich oases in your vicinity; conquer them to gain various valuable bonuses, but always be aware of the dangerous wild animals that inhabit them.'},
	                {'img':'screenBig screenBig6','hl':'Battle report', 'desc':'It is wise to train your army early on, so you can defend yourself and attack others. This way, you can raid more resources and build up your empire more quickly.'},
	                {'img':'screenBig screenBig7','hl':'Medals system', 'desc':'At the end of every week, the very best 10 players and alliances will be elected, topping in different categories; as a reward for their prowess they will receive medals, celebrating their achievements.'},
	                {'img':'screenBig screenBig8','hl':'Task system', 'desc':'To assist you when you first start managing your empire, we have sent the Taskmaster; he will guide you with tips and advice in order to help you build up your village. Just click on the image of the Taskmaster to your left to activate him.'}
	            ];
	        </script>

								</div>

		    
</body></html>