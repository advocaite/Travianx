<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANX                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianX)                                 //
//                              - TravianX = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//////////////////////////////////////////////////////////////////////////////////////////////////////

//MAIN MENU
define("TRIBE1","Romains"); 
define("TRIBE2","Teutons");
define("TRIBE3","Gaulois"); 
define("TRIBE4","Nature"); 
define("TRIBE5","Natars");
define("TRIBE6","Monsters");
 
define("HOME","Accueil"); 
define("INSTRUCT","Instructions");
define("ADMIN_PANEL","Admin Panel");
define("MASS_MESSAGE","Mass Message");
define("LOGOUT","Déconexion");
define("PROFILE","Profil");
define("SUPPORT","Support");
define("UPDATE_T_10","Update Top 10");
define("SYSTEM_MESSAGE","System message");
define("TRAVIAN_PLUS","Travian <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");
define("CONTACT","Contact us!");

//MENU
define("REG","Inscription");
define("FORUM","Forum");
define("CHAT","Chat");
define("IMPRINT","Imprint");
define("MORE_LINKS","More Links");
define("TOUR","Tour du jeux");


//ERRORS
define("USRNM_EMPTY","(Nom d'utilisateur vide)");
define("USRNM_TAKEN","(Nom déjà utilisé.)");
define("USRNM_SHORT","(minimum. ".USRNM_MIN_LENGTH." caractère)");
define("USRNM_CHAR","(Invalid caractère)");
define("PW_EMPTY","(Password vide)");
define("PW_SHORT","(minimum. ".PW_MIN_LENGTH." caractère)");
define("PW_INSECURE","(Password insecure. Please choose a more secure one.)");
define("EMAIL_EMPTY","(Email vide)");
define("EMAIL_INVALID","(adresse email invalide)");
define("EMAIL_TAKEN","(Email déjà utilisé)");
define("TRIBE_EMPTY","<li>Veuillez choisir une tribu.</li>");
define("AGREE_ERROR","<li>Vous devez accepter les règles du jeu et les conditions générales de vente afin de vous inscrire.</li>");
define("LOGIN_USR_EMPTY","Entrer un nom.");
define("LOGIN_PASS_EMPTY","Entrer un password.");
define("EMAIL_ERROR","Email does not match existing");
define("PASS_MISMATCH","Passwords do not match");
define("ALLI_OWNER","Please appoint an alliance owner before deleting");
define("SIT_ERROR","Sitter already set");
define("USR_NT_FOUND","Name does not exist.");
define("LOGIN_PW_ERROR","The password is wrong.");
define("WEL_TOPIC","Useful tips & information ");
define("ATAG_EMPTY","Tag empty");
define("ANAME_EMPTY","Name empty");
define("ATAG_EXIST","Tag taken");
define("ANAME_EXIST","Name taken");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","TravianX 100% Open Source Travian Clone.");

//BUILD.TPL
define("CUR_PROD","Current production");
define("NEXT_PROD","Production at level ");

//BUILDINGS
define("B1","Woodcutter");
define("B1_DESC","The Woodcutter cuts down trees in order to produce lumber. The further you extend the bid1 the more lumber is produced by him.");
define("B2","Clay Pit");
define("B2_DESC","Clay is produced here. By increasing its level you increase its clay production.");
define("B3","Iron Mine");
define("B3_DESC","Here miners produce the precious resource iron. By increasing the mine`s level you increase its iron production.");
define("B4","Cropland");
define("B4_DESC","Your population`s food is produced here. By increasing the farm`s level you increase its crop production.");

//DORF1
define("LUMBER","Lumber");
define("CLAY","Clay");
define("IRON","Iron");
define("CROP","Crop");
define("LEVEL","Level");
define("CROP_COM",CROP." consumption");
define("PER_HR","par heure");
define("PROD_HEADER","Production");
define("MULTI_V_HEADER","Villages");
define("ANNOUNCEMENT","Announcement");
define("GO2MY_VILLAGE","Go to my village");
define("VILLAGE_CENTER","Village centre");
define("FINISH_GOLD","Finish all construction and research orders in this village immediately for 2 Gold?");
define("WAITING_LOOP","(waiting loop)");
define("HRS","(hrs.)");
define("DONE_AT","done at");
define("CANCEL","cancel");
define("LOYALTY","Loyalty:"); 
define("CALCULATED_IN","Calculated in");
define("SEVER_TIME","Server time:");  

//QUEST
define("Q_CONTINUE","Continue with the next task.");
define("Q_REWARD","Your reward:");
define("Q0","Welcome to ");
define("Q0_DESC","As I see you have been made chieftain of this little village. I will be your counselor for the first few days and never leave your (right hand) side.");
define("Q0_OPT1","To the first task.");
define("Q0_OPT2","Look around on your own.");
define("Q0_OPT3","Play no tasks.");

define("Q1","Task 1: Woodcutter");
define("Q1_DESC","There are four green forests around your village. Construct a woodcutter on one of them. Lumber is an important resource for our new settlement.");
define("Q1_ORDER","Order:<\/p>Construct a woodcutter.");
define("Q1_RESP","Yes, that way you gain more lumber.I helped a bit and completed the order instantly.");
define("Q1_REWARD","Woodcutter instantly completed.");

define("Q2","Task 2: Crop");
define("Q2_DESC","Now your subjects are hungry from working all day. Extend a cropland to improve your subjects' supply. Come back here once the building is complete.");
define("Q2_ORDER","Order:<\/p>Extend one cropland.");
define("Q2_RESP","Very good. Now your subjects have enough to eat again...");

define("Q3","Task 3: Your Village's Name");
define("Q3_DESC","Creative as you are you can grant your village the ultimate name.\r\n<br \/><br \/>\r\nClick on 'profile' in the left hand menu and then select 'change profile'...");
define("Q3_ORDER","Order:<\/p>Change your village's name to something nice.");
define("Q3_RESP","Wow, a great name for their village. It could have been the name of my village!...");

define("Q4","Task 4: Other Players");
define("Q4_DESC","In ". SERVER_NAME ." you play along with billions of other players. Click 'statistics' in the top menu to look up your rank and enter it here.");
define("Q4_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q4_BUTN","complete task");
define("Q4_RESP","Exactly! That's your rank.");

define("Q5","Task 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ".SERVER_NAME." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

define("Q6","Message From The Taskmaster");
define("Q6_DESC","You are to be informed that a nice reward is waiting for you at the taskmaster.<br /><br />Hint: The message has been generated automatically. An answer is not necessary.");

define("Q5","Task 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define("U0","Hero");

//ROMAN UNITS
define("U1","Legionnaire");
define("U2","Praetorian");
define("U3","Imperian");
define("U4","Equites Legati");
define("U5","Equites Imperatoris");
define("U6","Equites Caesaris");
define("U7","Battering Ram");
define("U8","Fire Catapult");
define("U9","Senator");
define("U10","Settler");

//TEUTON UNITS
define("U11","Clubswinger");
define("U12","Spearman");
define("U13","Axeman");
define("U14","Scout");
define("U15","Paladin");
define("U16","Teutonic Knight");
define("U17","Ram");
define("U18","Catapult");
define("U19","Chief");
define("U20","Settler");

//GAUL UNITS
define("U21","Phalanx");
define("U22","Swordsman");
define("U23","Pathfinder");
define("U24","Theutates Thunder");
define("U25","Druidrider");
define("U26","Haeduan");
define("U27","Ram");
define("U28","Trebuchet");
define("U29","Chieftain");
define("U30","Settler");

//NATURE UNITS
define("U31","Rat");
define("U32","Spider");
define("U33","Snake");
define("U34","Bat");
define("U35","Wild Boar");
define("U36","Wolf");
define("U37","Bear");
define("U38","Crocodile");
define("U39","Tiger");
define("U40","Elephant");

//NATARS UNITS
define("U41","Pikeman");
define("U42","Thorned Warrior");
define("U43","Guardsman");
define("U44","Birds Of Prey");
define("U45","Axerider");
define("U46","Natarian Knight");
define("U47","War Elephant");
define("U48","Ballista");
define("U49","Natarian Emperor");
define("U50","Natarian Settler");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

//INDEX.php
define("LOGIN","Login");
define("PLAYERS","Players");
define("ONLINE","Online");
define("TUTORIAL","Tutorial");
define("PLAYER_STATISTICS","Player statistics");
define("TOTAL_PLAYERS", PLAYERS." in total");
define("ACTIVE_PLAYERS","Active players");
define("ONLINE_PLAYERS", PLAYERS." online");
define("MP_STRATEGY_GAME", SERVER_NAME." - the multiplayer strategy game");
define("WHAT_IS", SERVER_NAME." is one of the most popular browser games in the world. As a player in ".SERVER_NAME.", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.");
define("REGISTER_FOR_FREE","Register here for free!");
define("LATEST_GAME_WORLD","Latest game world");
define("LATEST_GAME_WORLD2","Register on the latest<br/>game world and enjoy<br/>the advantages of<br/>being one of the<br/>first players.");
define("PLAY_NOW","Play ".SERVER_NAME." now");
define("LEARN_MORE","Learn more <br/>about ".SERVER_NAME."!");
define("LEARN_MORE2","Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!");
define("COMUNITY","Community");
define("BECOME_COMUNITY","Become part of our community now!");
define("BECOME_COMUNITY2","Become a part of one of<br>the biggest gaming<br>communities in the<br>world.");
define("NEWS","News");
define("SCREENSHOTS","Screenshots");
define("LEARN1","Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.");
define("LEARN2","Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.");
define("LEARN3","View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.");
define("LEARN4","Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.");
define("LEARN5","Receive detailed reports about your adventures, trades and battles. Don't forget to check the brand new reports about the happenings taking place in your surroundings.");
define("LEARN6","Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.");
define("LOGIN_TO","Log in to ". SERVER_NAME);
define("REGIN_TO","Register in ". SERVER_NAME);
define("P_ONLINE","Players online: ");
define("P_TOTAL","Players in total: ");
define("CHOOSE","Please choose a server.");
define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");

//ANMELDEN.php
define("NICKNAME","Pseudo");
define("EMAIL","Email");
define("PASSWORD","Password");
define("ROMANS","Romains");
define("TEUTONS","Germains");
define("GAULS","Gaulois");
define("NW","Nord Ouest");
define("NE","Nord Est");
define("SW","Sud Ouest");
define("SE","Sud Est");
define("RANDOM","aléatoire");
define("ACCEPT_RULES"," J'accepte les règles du jeu et conditions générales.");
define("ONE_PER_SERVER","Chaque joueur ne peut posséder un compte par serveur.");
define("BEFORE_REGISTER","Avant de vous inscrire un compte, vous devriez lire les <a href=''>instructions</a> de ... pour voir les avantages et inconvénients des trois tribus.");
define("BUILDING_UPGRADING","Building:");
define("HOURS","hours");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","Troop Movements:");
define("ARRIVING_REINF_TROOPS","Arriving reinforcing troops");
define("ARRIVING_REINF_TROOPS_SHORT","Reinf.");
define("OWN_ATTACKING_TROOPS","Own attacking troops");
define("ATTACK","Attack");
define("OWN_REINFORCING_TROOPS","Own reinforcing troops");
define("TROOPS_DORF","Troops:");


//LOGIN.php
define("COOKIES","Vous devez activer les cookies pour être capable de vous connecter si vous partagez cet ordinateur avec d'autres personnes vous devez vous déconnecter après chaque session pour votre propre sécurité.");
define("NAME","Nom");
define("PW_FORGOTTEN","Mot de passe perdu ?");
define("PW_REQUEST","Then you can request a new one which will be sent to your email address.");
define("PW_GENERATE","Tous les champs sont requis");
define("EMAIL_NOT_VERIFIED","Email non verifier!");
define("EMAIL_FOLLOW","Suivé celien pour activé votre compte.");
define("VERIFY_EMAIL","Verifier l'Email.");


//404.php
define("NOTHING_HERE","Nothing here!");
define("WE_LOOKED","We looked 404 times already but can't find anything");

//TIME RELATED
define("CALCULATED","Calculater en");
define("SERVER_TIME","Temps du serveur : ");

//MASSMESSAGE.php
define("MASS","Message Content");
define("MASS_SUBJECT","Subject:");
define("MASS_COLOR","Message color:");
define("MASS_REQUIRED","All fields required");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Show/Hide");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","Confirmation");
define("MASS_REALLY","Do you really want to send MassIGM?");
define("MASS_ABORT","Aborting right now");
define("MASS_SENT","Mass IGM was sent");



//Index 
$lang['index'][0][1] = "Bienvenue sur ".SERVER_NAME;
$lang['index'][0][2] = "Manuel";
$lang['index'][0][3] = "Jouer maintenant, c'est Gratuit!";
$lang['index'][0][4] = "C'est quoi ".SERVER_NAME;
$lang['index'][0][5] = SERVER_NAME." et un <b>Jeux par navigateur</b> dans un monde antique ou s'afronte des milliers de joueurs réels.</p><p>C'est <strong>gratuit pour jouer</strong> et aucun <strong>téléchargement</strong> n'est requits.";
$lang['index'][0][6] = "Click ici pour jouer à ".SERVER_NAME;
$lang['index'][0][7] = "Total de joueur";
$lang['index'][0][8] = "Joueur actif";
$lang['index'][0][9] = "Joueur en ligne";
$lang['index'][0][10] = "A propos du jeux";
$lang['index'][0][11] = "Vous commencerez en tant que chef d'un petit village et vous vous lancerais dans une quête passionnante pour conquérir du térritoire.";
$lang['index'][0][12] = "Construisez des villages, Faite la guerres ou d'établissez des routes commerciales avec vos voisins.";
$lang['index'][0][13] = "Jouez avec et contre des milliers d'autres joueurs réels et conquérissez le monde de ".SERVEUR_NAME.".";
$lang['index'][0][14] = "Nouvelle";
$lang['index'][0][15] = "FAQ";
$lang['index'][0][16] = "Screenshots";
$lang['forum'] = "Forum";
$lang['register'] = "Inscription";
$lang['login'] = "Connexion";

// ALL building
define('Build_Woodcutter', 'bûcheron');
define('Build_ClayPit', 'Carrière d\'argile');
define('Build_IronMine', 'Mine de fer');
define('Build_Cropland', 'Terres cultivées');
define('Build_Sawmill', 'Scierie');
define('Build_Brickyard', 'Usine de poterie');
define('Build_IronFoundry' , 'Fonderie');
define('Build_GrainMill', 'Moulin à grain');
define('Build_Bakery', 'Boulangerie');
define('Build_Warehouse', 'Entrepôt');
define('Build_Granary', 'Silo à céréales');
define('Build_Blacksmith', 'Forge');
define('Build_Armoury', 'Armurerie');
define('Build_TournamentSquare', 'Place du tournoi');
define('Build_MainBuilding', 'Bâtiment principal');
define('Build_RallyPoint', 'Place de rassemblement');
define('build_Marketplace', 'Place du marché');
define('Build_Embassy', 'Ambassade ');
define('Build_Barracks', 'Caserne');
define('Build_Stable', 'Écurie');
define('Build_Workshop','Atelier');
define('Build_Academy', 'Académie');
define('Build_Cranny', 'Cachette');
define('Build_TownHall', 'Hôtel de ville');
define('Build_Residence', 'Résidence');
define('Build_Palace', 'Palais');
define('Build_Treasury', 'Chambre du Trésor');
define('Build_TradeOffice', 'Comptoir de commerce');
define('Build_GreatBarracks', 'Grande caserne');
define('Build_GreatStable', 'Grange écurie');
define('Build_CityWall', 'Mur d\'enceinte');
define('Build_EarthWall', 'Mur de terre');
define('Build_Palisade', 'Palissade');
define('Build_StonemasonsLodge', 'Tailleur de pierre');
define('Build_Brewery', 'Brasserie');
define('Build_Trapper', 'Fabricant de pièges');
define('Build_HerosMansion', 'Manoir du héros');
define('Build_GreatWarehouse', 'Grand Entrepôt');
define('Build_GreatGranary', 'Grand grenier');
define('Build_WonderOfTheWorld', 'Merveille du monde');
define('Build_HorseDrinkingTrough', 'Abreuvoir');
define('Build_GreatWorkshop', 'Grand atelier');