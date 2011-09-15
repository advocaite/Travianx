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
            <?php echo SERVER_NAME; ?> - Browser Game - Powered by TravianX </title>
        <link rel="stylesheet" type="text/css" href="index.php_files/compact.css"><meta name="content-language" content="au">
	<meta http-equiv="imagetoolbar" content="no">
		
		</script><script type="text/javascript" src="uncrypt.js"></script>
        <style type="text/css" charset="utf-8">/* See license.txt for terms of usage */
/** reset styling **/
.firebugResetStyles {
    z-index: 2147483646 !important;
    top: 0 !important;
    left: 0 !important;
    display: block !important;
    border: 0 none !important;
    margin: 0 !important;
    padding: 0 !important;
    outline: 0 !important;
    min-width: 0 !important;
    max-width: none !important;
    min-height: 0 !important;
    max-height: none !important;
    position: fixed !important;
    -moz-transform: rotate(0deg) !important;
    -moz-transform-origin: 50% 50% !important;
    -moz-border-radius: 0 !important;
    -moz-box-shadow: none !important;
    background: transparent none !important;
    pointer-events: none !important;
}

.firebugBlockBackgroundColor {
    background-color: transparent !important;
}

.firebugResetStyles:before, .firebugResetStyles:after {
    content: "" !important;
}
/**actual styling to be modified by firebug theme**/
.firebugCanvas {
    display: none !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBox {
    width: auto !important;
    position: static !important;
}

.firebugLayoutBoxOffset {
    opacity: 0.8 !important;
    position: fixed !important;
}

.firebugLayoutLine {
    opacity: 0.4 !important;
    background-color: #000000 !important;
}

.firebugLayoutLineLeft, .firebugLayoutLineRight {
    width: 1px !important;
    height: 100% !important;
}

.firebugLayoutLineTop, .firebugLayoutLineBottom {
    width: 100% !important;
    height: 1px !important;
}

.firebugLayoutLineTop {
    margin-top: -1px !important;
    border-top: 1px solid #999999 !important;
}

.firebugLayoutLineRight {
    border-right: 1px solid #999999 !important;
}

.firebugLayoutLineBottom {
    border-bottom: 1px solid #999999 !important;
}

.firebugLayoutLineLeft {
    margin-left: -1px !important;
    border-left: 1px solid #999999 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBoxParent {
    border-top: 0 none !important;
    border-right: 1px dashed #E00 !important;
    border-bottom: 1px dashed #E00 !important;
    border-left: 0 none !important;
    position: fixed !important;
    width: auto !important;
}

.firebugRuler{
    position: absolute !important;
}

.firebugRulerH {
    top: -15px !important;
    left: 0 !important;
    width: 100% !important;
    height: 14px !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
    border-top: 1px solid #BBBBBB !important;
    border-right: 1px dashed #BBBBBB !important;
    border-bottom: 1px solid #000000 !important;
}

.firebugRulerV {
    top: 0 !important;
    left: -15px !important;
    width: 14px !important;
    height: 100% !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
    border-left: 1px solid #BBBBBB !important;
    border-right: 1px solid #000000 !important;
    border-bottom: 1px dashed #BBBBBB !important;
}

.overflowRulerX > .firebugRulerV {
    left: 0 !important;
}

.overflowRulerY > .firebugRulerH {
    top: 0 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.fbProxyElement {
    position: fixed !important;
    pointer-events: auto !important;
}</style></head>
    <body class="gecko LTR">
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
				new Travian.Main.Flags(
				{
					container:	'flags',
					currentTld:	'au',
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
							'ba':	'http://www.ragezone.ba/',
							'bg':	'http://www.ragezone.bg/',
							'com':	'http://www.ragezone.com/',
							'cz':	'http://www.ragezone.cz/',
							'de':	'http://www.ragezone.de/',
							'dk':	'http://www.ragezone.dk/',
							'fi':	'http://www.ragezone.fi/',
							'fr':	'http://www.ragezone.fr/',
							'gr':	'http://www.ragezone.gr/',
							'hr':	'http://www.ragezone.com.hr/',
							'hu':	'http://www.ragezone.hu/',
							'il':	'http://www.ragezone.co.il/',
							'it':	'http://www.ragezone.it/',
							'lt':	'http://www.ragezone.lt/',
							'net':	'http://www.ragezone.net/',
							'nl':	'http://www.ragezone.nl/',
							'no':	'http://www.ragezone.no/',
							'pl':	'http://www.ragezone.pl/',
							'pt':	'http://www.ragezone.pt/',
							'ro':	'http://www.ragezone.ro/',
							'rs':	'http://www.ragezone.rs/',
							'ru':	'http://www.ragezone.ru/',
							'se':	'http://www.ragezone.se/',
							'si':	'http://www.ragezone.si/',
							'sk':	'http://www.ragezone.sk/',
							'tr':	'http://www.ragezone.com.tr/',
							'ua':	'http://www.ragezone.com.ua/',
							'uk':	'http://www.ragezone.co.uk/',
							'ee':	'http://www.ragezone.co.ee/',
							'lv':	'http://www.ragezone.lv/'
						},
						'america':
						{
							'ar':	'http://www.ragezone.com.ar/',
							'br':	'http://www.ragezone.com.br/',
							'cl':	'http://www.ragezone.cl/',
							'mx':	'http://www.ragezone.com.mx/',
							'us':	'http://www.ragezone.us/'
						},
						'asia':
						{
							'cn':	'http://www.ragezone.cc/',
							'com':	'http://www.ragezone.com/',
							'hk':	'http://www.ragezone.hk/',
							'in':	'http://www.ragezone.in/',
							'id':	'http://www.ragezone.co.id/',
							'jp':	'http://www.ragezone.jp/',
							'my':	'http://www.ragezone.com.my/',
							'ph':	'http://www.ragezone.ph/',
							'kr':	'http://www.ragezone.co.kr/',
							'asia':	'http://www.ragezone.asia/',
							'vn':	'http://www.ragezone.com.vn/',
							'pk':	'http://www.ragezone.pk/'
						},
						'middleEast':
						{
							'ae':	'http://www.ragezone.ae/',
							'ir':	'http://www.ragezone.ir/',
							'eg':	'http://www.ragezone.com.eg/',
							'sy':	'http://sy.ragezone.com/',
							'sa':	'http://www.ragezone.com.sa/',
							'ma':	'http://www.ragezone.ma/'
						},
						'africa':
						{
							'za':	'http://www.ragezone.co.za/',
							'ma':	'http://www.ragezone.ma/',
							'eg':	'http://www.ragezone.com.eg/'
						},
						'oceania':
						{
							'au':	'http://www.ragezone.com.au/',
							'nz':	'http://www.ragezone.co.nz/'
						}
					}
				});
			});
		</script>
	</div>	             	<div id="top-nav">
	<div id="top-nav-menu">
		<div id="logo">
			<a href="http://www.ragezone.com/f583/"><img src="index.php_files/x.gif" class="logo" alt=""></a>
		</div>
		<ul id="top-navigation">
			<li>
				<a href="#tutorial" class="popcon">Game Tour</a>
			</li>
			<li>
				<a target="blank" href="http:/www.ragezone.com/f583/" id="forum">RageZone</a>
			</li>
						<li>
				<a href="#moregames" class="popcon">More Links</a>
			</li>
						<li>
				<a id="register" class="popcon" href="#serverRegister">Register</a>			</li>
		</ul>
	</div>
	<div id="top-nav-login">
		<div id="login">
			<div class="btn-green">
			  <div class="btn-green-l"></div>
			  <div class="btn-green-c">
				<a class="npage popcon" href="#serverLogin">Login</a>			  </div>
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
        <h1 class="wit bold">TRAVIAN_X - the multiplayer strategy game</h1>
        <div class="wit-info">
			TRAVIAN_X is soon to be one of the most popular Open Sourced browser game Sources in the world. As a 
player in TRAVIAN_X, you will build your own empire, recruit a mighty 
army, and fight with your allies for game world hegemony.
						<div class="playnow playnow-button">
					<div class="playnow-start">
						<h1 class="play white bold"><a id="register" class="popcon play" href="index.php#serverRegister" title="Register here for free!">Register here for free!</a></h1>
					</div>
					<div class="playnow-end"></div>
					<div class="clear"></div>
		        </div>
	               </div>

        <div id="stage_space"></div>
        <div id="stage">
            <div id="frame">
            
                <div class="stage-content stage-content0 shown" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/new_world-ltr.jpg); visibility: visible; opacity: 1;">
                		<div style="position:absolute; left:15px; top:170px;"><img alt="" class="bbArrow" src="index.php_files/x.gif"> <span style="color:black;"><span style="font-weight:bold;">Play TRAVIAN_X 4.8.5 now</span></span></div>
	<div style="position:absolute; left:15px; top:12px;"><h3>Latest game world</h3><br>
<span style="font-weight:bold;">Register on the latest<br>
game world and enjoy<br>
the advantages of being<br>
one of the first players.</span></div>
                    <div class="stage-arrow stage-arrow-0"></div>
				</div>
                <div class="stage-content stage-content1 " style="background-image: url(index.php_files/gpack/main_defailt/img/stage/feature-ltr.jpg); visibility: visible; opacity: 1;">
                		<div style="position:absolute; left:15px; top:170px;"><img alt="" class="bbArrow" src="index.php_files/x.gif"> <span style="color:black;"><span style="font-weight:bold;">Find out more about the new TRAVIAN_X</span></span></div>
	<div style="position:absolute; left:15px; top:12px;"><h3>Rage Zones TRAVIAN_X</h3><br>
<span style="font-weight:bold;">Now with a revolutionised<br>
server system, completely new<br>
graphics <br>This clone is The Shiz!</span></div>
                    <div class="stage-arrow stage-arrow-1"></div>
                </div>
                <div class="stage-content stage-content2" style="background-image: url(index.php_files/gpack/main_defailt/img/stage/community-ltr.jpg)">
                		<div style="position:absolute; left:15px; top:170px;"><img alt="" class="bbArrow" src="index.php_files/x.gif"> <span style="color:black;"><span style="font-weight:bold;">Become part of our community now!</span></span></div>
	<div style="position:absolute; left:15px; top:12px;"><h3>Community</h3><br>
<span style="font-weight:bold;">Become a part of one of<br>
the biggest gaming<br>
communities in the<br>
world.</span></div>
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
	                <a style="visibility: visible; opacity: 1;" class="stage-link stage-link1 shown" href="/index.php#serverRegister"></a>					<a style="visibility: visible; opacity: 1;" class="stage-link stage-link2 " href="http://www.travian.com.au/serverRegister.php"></a>					<a class="stage-link stage-link3" href="http://forum.ragezone.com/f583/"></a>				</div>
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
        <div id="strip-head"><div>Learn more<br>
about TRAVIAN_X Open Source!</div></div>
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
                    <div class="details-body-r">Upgrade your fields and 
mines to increase your resource production. You will need resources to 
construct buildings and train soldiers.                        <br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial">Game Tour</a></div>
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
                    <div class="details-body-r">Construct and expand the
 buildings in your village. Buildings improve your overall 
infrastructure, increase your resource production and allow you to 
research, train and upgrade your troops.                        <br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial">Game Tour</a></div>
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
                    <div class="details-body-r">View and interact with 
your surroundings. You can make new friends or new enemies, make use of 
the nearby oases and observe as your empire grows and becomes stronger. 
                       <br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial">Game Tour</a></div>
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
                    <div class="details-body-r">Follow your improvement 
and success and compare yourself to other players. Look at the Top 10 
rankings and fight to win a weekly medal.                        <br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial">Game Tour</a></div>
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
                    <div class="details-body-r">Receive detailed reports
 about your adventures, trades and battles. Don't forget to check the 
brand new reports about the happenings taking place in your 
surroundings.                        <br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial">Game Tour</a></div>
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
                    <div class="details-body-r">Exchange information and
 conduct diplomacy with other players. Always remember that 
communication is the key to winning new friends and solving old 
conflicts.                        <br><br>
                        <div class="btn-green">
                            <div class="btn-green-l"></div>
                            <div class="btn-green-c"><a class="npage popcon" href="/index.php#tutorial">Game Tour</a></div>
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
        <h3 class="ss bold white">Screenshots</h3></div>

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
	            		                <a class="flink popcon" href="#help">Support</a>&nbsp;|&nbsp;
	                <a target="blank" class="flink" href="http://forum.ragezone.com/f583/">RageZone</a>&nbsp;|&nbsp;
	                <a class="flink popcon" href="#moregames">Links</a>&nbsp;|&nbsp;
	                <a target="blank" class="flink" href="#screenshots" id="screenshotp">Screenshots</a>&nbsp;|&nbsp;

	                <br>
	                © 20011 <a target="blank" class="flink" href="http://forum.ragezone.com/f583/">TravianX 4.8.5</a>
	                100% Open Source Travian Clone.  </div>
	        </div>

	        <div id="preview_container">
	            <div id="p-top"></div>
	            <div id="p-bg"></div>
	            <div id="p-bottom"></div>
	            <a class="close"></a>
	            <div id="p-content">
	                <div id="prev_head">
	                    <h3>Screenshots</h3>
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
                <div id="popup-content"><h3 class="pop popgreen bold">Please choose a server.</h3>
                
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