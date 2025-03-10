// Author Notes:
// This file has been translated from English to Dutch by GameFreak from www.amxbans.de.

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1");
define("_LOCALE","nl_NL");

//default
define("_SHORTSECONDS","Sec.");
define("_NOACCESS","Je hebt niet de bevoegdheid om deze pagina te bekijken!");
define("_LOADTIME","Pagina geladen in");
define("_BANSINDB","Verbanningen in de Database");
define("_BY","door");
define("_OR","of");
define("_ON","aan");
define("_OFF","uit");
define("_YES","Ja");
define("_NO","Neen");
define("_OWN","eigen");
define("_CLEAR","Ledig Velden");
define("_OPENSTEAMCOMSITE","Bezoek de Steam Gemeenschap Pagina");
define("_ADMINAREA","Beheerderspagina");
define("_NOSITE","Pagina bestaat niet!");
define("_DELETE","Verwijder");
define("_ADD","Voeg toe");
define("_EDIT","Wijzig");
define("_DEFAULTLANG","Standaard Taal");
define("_OTHER","Overige");
define("_VIEWIP","toon IP");
define("_LEVEL","Level");
define("_DETAILS","Weergeef Details");
define("_SYSTEMSETTINGS","Systeem");
define("_VIEWSETTINGS","Bekijk");
define("_COMMENTSETTINGS","Reacties");
define("_FILESETTINGS","Documenten");
define("_BANLISTSETTINGS","Verbanlijst");
define("_CONFIGURATION","Configuratie");
define("_REPAIR","Repareer");
define("_AUTO","Automatisch");
define("_TEST","Test");
//user menu
define("_HOME","Hoofdpagina");
define("_BANLIST","Verbanlijst");
define("_SEARCH","Zoek");
define("_SERVER","Server");
//info amxaccess
define("_INFO_ACCESS","Toegang Informatie");
define("_ACCESSFLAGS","Toegang Vlaggen");
define("_ACCESSPERMS","Toegang Permissies");
define("_ACCESS_FLAGS","a - Immuniteit (kan niet worden verwijderd / verbannen enz.)<br />b - Gereserveerde Plaats in de server (kan deze gebruiken)<br />c - amx_kick commando<br />d - amx_ban en amx_unban commando<br />e - amx_slay en amx_slap commando<br />f - amx_map commando<br />g - amx_cvar commando (niet alle cvars beschikbaar)<br />h - amx_cfg commando<br />i - amx_chat en andere chat commando's<br />j - amx_vote en andere poll commando's<br />k - Toegang tot sv_password cvar (d.m.v. amx_cvar commando)<br />l - Toegang tot amx_rcon commando en rcon_password cvar (d.m.v. amx_cvar commando)<br />m - Gebruikersverzonnen Level A (voor andere plugins)<br />n - Gebruikersverzonnen Level B<br />o - Gebruikersverzonnen Level C<br />p - Gebruikersverzonnen Level D<br />q - Gebruikersverzonnen Level E<br />r - Gebruikersverzonnen Level F<br />s - Gebruikersverzonnen Level G<br />t - Gebruikersverzonnen Level H<br />u - Menu Toegang<br />z - Gebruiker (geen Beheerder)");
define("_FLAG_FLAGS","a - verwijder Speler bij verkeerd Wachtwoord<br />b - Clan Tussenvoegsel<br />c - dit is een SteamID<br />d - dit is een IP<br />e - geen Wachtwoord (alleen SteamID / IP nodig)<br />k - Naam of Tussenvoegsel (Gevaarlijk om te gebruiken!).");
define("_ADDADMINTOSERVERS","Voeg Beheerders toe aan server");
define("_WITHSTATICBANTIME","bekijk statistische verbantijd");
//main header
define("_LOGGED","Ingelogd als");
define("_NOTLOGGED","Niet Ingelogd");
define("_LOGOUT","Uitloggen");
define("_LOGIN","Inloggen");
define("_MENU","Menu");
//ban list
define("_DATE","Datum");
define("_PLAYER","Speler");
define("_ADMIN","Beheerder");
define("_REASON","Reden");
define("_LENGHT","Duur");
define("_SITE","Pagina");
define("_BANS","Verbanningen nr.");
define("_BL_COMMENTS","Reacties");
define("_BL_FILES","Bestanden");
define("_BL_KICKS","Verwijderd");
define("_TO","tot");
define("_YEAR","jaar");
define("_YEARS","jaren");
define("_MONTH","maand");
define("_MONTHS","maanden");
define("_WEEK","week");
define("_WEEKS","weken");
define("_DAY","dag");
define("_DAYS","dagen");
define("_HOUR","uur");
define("_HOURS","uren");
define("_MIN","minuut");
define("_MINS","minuten");
define("_OF","van");
define("_REMAINING","overig");
//ban list details
define("_PERMANENT","Permanent");
define("_BANDETAILS","Verbanning Details");
define("_STEAMID","SteamID");
define("_STEAMCOMID","SteamCommunity ID");
define("_NOTAVAILABLE","Niet Beschikbaar");
define("_NOSTEAMID","geen SteamID");
define("_STEAMID&IP","IP");
define("_HIDDEN","verstopt");
define("_INVOKED","Ingeroepen op");
define("_BANLENGHT","Lengte van de verbanning");
define("_EXPIRES","Verloopt op");
define("_NOTAPPLICABLE","Niet Toepasselijk");
define("_ALREADYEXP","reeds afgelopen");
define("_IP","IP Adres");
define("_BANTYPE","Verban Type");
define("_BANBY","Verbannen door");
define("_BANON","Verbannen op");
define("_FILE_TOBIG","Document is te groot");
define("_FILE_TYPENOTALLOWED","Extensie is niet toegestaan");
define("_FROM","van");
define("_DOWNLOAD","Download");
define("_DOWNLOADS","Downloads");
define("_FILE","Document");
define("_NEWFILE","Nieuw Document");
define("_COMMENT","Reactie");
define("_COMMENTS","Reacties");
define("_NEWCOMMENT","Nieuwe Reactie");
define("_NOCOMMENTS","Geen Reacties");
define("_BACK","terug");
define("_TIP_EDIT","Wijzig");
define("_TIP_DEL","Verwijder");
define("_TIP_DOWNLOAD","Download");
define("_TIP_BACK","terug");
define("_TIP_SENDMAIL","Stuur een E-mail");
define("_EMAIL","E-mail");
define("_FILEUPLOAD","Upload het Document");
define("_UPLOAD","Upload");
define("_ENTRYEDIT","Wijzig Wijziging");
define("_EDITBAN","Wijzig Verbanning");
define("_TOTALEXPBANS","Totale verlopen Verbanningen");
define("_EDITCOMMENT","Wijzig Reactie");
define("_ADDCOMMENT","Voeg Reactie Toe");
define("_NOFILES","Geen Documenten");
define("_BANDETAILSEDITS","Wijzigingen in het verleden");
define("_EDITREASON","Wijzig Reden");
define("_UNBANPLAYER","Ontban");
define("_UNBANNED","Niet meer verbannen");
define("_BANHISTORY","Verbangeschiedenis");
//Login
define("_USERNAME","Gebruikersnaam");
define("_PASSWORD","Wachtwoord");
define("_REMEMBERME","Blijf Ingelogd");
define("_LOGINBLOCKED","Inloggen geblokkeerd!");
define("_LOGINFAILEDPW","Herlees Wachtwoord!");
define("_LOGINFAILED","Inloggen mislukt!");
define("_LOGINTRY","Probeer");
define("_SEC","Seconde");
define("_SECS","Seconden");
//admins amxx
define("_AMXADMINSETTINGS","AMX Mod X Beheerder Opties");
define("_NAME","Naam");
define("_NICKNAME","Bijnaam");
define("_MANAGEAMXADMINS","AMX Mod X Beheerders");
define("_ADDAMXADMINS","Voeg een AMX Mod X Beheerder toe");
define("_ACCESS","Toegang");
define("_FLAGS","Vlaggen");
define("_SETTINGS","Instellingen");
define("_SAVE","Opslaan");
define("_EVER","permanent");
define("_SHOWINADMINLIST","Toon in Beheerderslijst");
define("_ADMINVALIDITY","Geldig voor");
define("_ADMINEXPIRATION","Geldig tot");
define("_CREATED","Aangemaakt");
define("_EXTENDWITH","verleng");
define("_STEAMIDIPNAME","SteamID / IP / Naam");
//server
define("_SERVERSETTINGS","Server Instellingen");
define("_MOD","Modus");
define("_RCONPW","RCON Wachtwoord");
define("_DEL","Verwijder");
define("_MOTDURL","motd URL");
define("_MOTDDELAY","motd Vertraging");
define("_SERVERMENU","Server Menu");
define("_REASONSSET","Banreden Ingesteld");
define("_HOSTNAME","Naam van de Server");
define("_VERSION","Versie");
define("_LASTSEEN","Laatst gezien");
define("_TIMEZONEFIXX","Tijdzone Verzet");
define("_SERVERRCON","Verzend Server Commando's (RCON)");
define("_RCON_RELOADADMINS","Herlaad Beheerders");
define("_RCON_RESTARTMAP","Herlaad Map / Plugins");
define("_RCON_STATUS","Status Commando");
define("_RCON_PLUGINS","Toon AMXX Plugins lijst");
define("_RCON_MODULES","Toon AMXX Module lijst");
define("_RCON_METALIST","Toon Metamod Lijst");
define("_RCON_PREDEFINED","Vooraf Gedefinieerd");
define("_RCON_USERDEFINED","Gebruiker Gedefinieerd");
define("_RCON_SEND","Verstuur");
define("_RCON_SERVERRESPONSE","Antwoord van de Server:");
define("_RCON_MAPRESTARTED","Map zal herstart worden (Commando: ‘restart’).");
define("_RCON_TIMEDOUT","Geen antwoord van de server!");
define("_RCON_CMDDENIED","Dit RCON Commando is verboden!");
//server admins
define("_SERVERADMINSETTINGS","Serverbeheerders Instellingen");
define("_ADMINS","Beheerders");
define("_ACTIV","actief");
define("_CUSTOMFLAGS","vlaggen");
define("_STATICBANTIME","statische Verbantijd");
define("_EDITADMINS","Wijzig Beheerders");
define("_SPECIALS","Speciaal aan de Server");
//reasons
define("_REASONSSETTINGS","Verbanreden Opties");
define("_REASONSSETS","Verbanredenen Groepen");
define("_NEWREASON","Nieuwe Reden");
define("_SAVESET","Sla de groep op");
define("_EDITSET","Wijzig Groep");
define("_REASONS","Redenen");
//settings
define("_SITESETTINGS","Website Opties");
define("_BANNER","Banner");
define("_BANNERURL","URL van de Banner");
define("_DESIGN","Uiterlijk");
define("_BANSPERPAGE","Verbanningen per Pagina");
define("_NEWSET","Nieuwe Groep");
define("_COOKIENAME","Naam van de Cookies");
define("_STARTPAGE","Startpagina");
define("_SHOWCOMMENTSCOUNT","Toon het Aantal Reacties");
define("_SHOWFILESCOUNT","Toon het Aantal Documenten");
define("_SHOWKICKCOUNT","Toon het Aantal Verwijderingen");
define("_FILE_USERUPLOADALLOWED","Zijn gebruikers toegestaan om Documenten op te slagen?");
define("_MAXFILESIZE","max. Document Grootte"); 
define("_FILE_ALLOWEDTYPES","Toegestane extensies (geen spaties)");
define("_COMMENTUSERALLOWEDWRITE","Zijn gebruikers toegestaan om Reacties te schrijven?");
define("_USECAPTURE","Gebruik Captcha");
define("_AUTOPRUNE","Automatische Opschoning van de DB");
define("_USECOMMENTSYSTEM","Gebruik het Reactie Systeem");
define("_USEFILESYSTEM","Gebruik het Document Systeem");
define("_AUTOPRUNE_MAXOFFENCES","Maximum aantal verlopen verbanningen totdat speler permanent verbannen is");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Reden voor verbanning bij max. verlopen verbanningen");
define("_MUSTBEON","moet aan staan!");
//admin list
define("_ADMINSINCE","Beheerder sinds");
define("_ADMINTO","Beheerder tot");
define("_UNLIMITED","Permanent");
//admins web
define("_WEBADMINADD","Voeg Web Beheerder toe");
define("_WEBADMINSSETTINGS","Web Beheerder Opties");
define("_WEBADMINS","Web Beheerders");
define("_LASTLOGIN","laatste Login");
define("_PASSWORD2","Voer Wachtwoord opnieuw in");
define("_WADMINADDEDFAILED","Toevoegen gefaald. Zijn er dubbele waarden?");
define("_NEVER","nooit");
define("_YOURPASSWORD","Voor veiligheidsredenen zal je uitloggen nadat je je wachtwoord hebt veranderd!");
define("_ENTERPASSWORD","Voeg Nieuw Wachtwoord in:");
define("_NEWPASSWORD","Wachtwoord Wijzigen");
define("_PASSWORDCHANGED","Wachtwoord is veranderd!");
define("_PASSWORDCHANGEDFAILED","Het veranderen van uw wachtwoord is mislukt!");
define("_EMAILSENT","Een E-mail is verzonden naar het e-mailaccount die u hebt ingevoerd.");
//search
define("_SEARCHRESULT","Zoek Resultaten");
define("_SEARCHWITH","Zoek met");
define("_SEARCHFOR","Zoek voor");
define("_PLAYERSWITH","Spelers met");
define("_MOREBANSHIS","of meer Verbanningen in de Geschiedenis");
define("_ACTIVEBANS","Actieve Verbanningen");
define("_EXPIREDBANS","Verlopen Verbanningen");
//Admin list
define("_ADMLIST","Beheerderslijst");
//captcha
define("_SCODE","Beveiligingscode:");
define("_SCODEENTER","Gelieve de Beveiligingscode in te voeren:");
//update
define("_WEBVERSIONINFO","Website Versie Informatie");
define("_PLUGINVERSIONINFO","Plugin Versie Informatie");
define("_VERSION_CURRENT","Momenteel");
define("_VERSION_RELEASE","Nieuwste Editie");
define("_VERSION_BETA","Laatste Beta");
define("_LASTCHANGELOG","Changelog");
define("_WEB","Website");
define("_YOURWEB","Jouw Website");
define("_PLUGIN","AMX Mod X Plugin");
define("_UPDATE_RECOMMENDED","Update Nodig!");
define("_UPDATE_NOTNEEDED","Update niet nodig");
define("_WEBUPDATE_RECOMMENDED","Web Update Nodig!");
define("_PLUGINUPDATE_RECOMMENDED","AMX Mod X Plugin Update Nodig!");
//admin menu
define("_MENUHOME","Home");
define("_MENUMAINSERVER","Server");
define("_MENUMAINWEB","Website");
define("_MENUMAINOTHER","overige");
define("_MENUMAINMODULE","Module");
define("_MENUSERVER","Server");
define("_MENUAMXADMINS","AMXBeheerders");
define("_MENUSERVERADMINS","AMXBeheerders van Server");
define("_MENUREASONS","Verbanredenen");
define("_MENUWEBCONFIG","Instellingen");
define("_MENUUSERLEVEL","Gebruiker Levels");
define("_MENUWEBADMINS","Web Beheerders");
define("_MENUUSERMENU","Gebruiker Menu");
define("_MENUMODULE","Module");
define("_MENUUPDATE","Update");
define("_MENUINFO","Systeem Informatie");
define("_MENULOGS","Logboek");
//admin user menu
define("_USERMENU","Gebruiker Menu");
define("_USERMENUSETTINGS","Gebruiker Menu Instellingen");
define("_MENULOGGEDIN","Gebruiker ingelogd");
define("_MENULOGGEDOUT","Gebruiker uitgelogd");
define("_POSITION","Positie");
define("_LANGKEY1","Taal Toets 1");
define("_LANGKEY2","Taal Toets 2");
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Nieuw Gebruiker Menu");
//admin module
define("_MODULSETTINGS","Module Opties");
define("_MODULSETTINGS2","Module Instellingen");
define("_NAMELANGKEY","Talen Toets voor Menu");
define("_INDEXSITE","Index Pagina");
define("_ADMINSITE","Beheerders Pagina");
define("_TEMPLATE","Uiterlijk");
//admin info
define("_SERVERINFO","Server Informatie");
define("_SERVERSETUP","Server Instellingen");
define("_PHPMODULES","PHP Module");
define("_OTHERFUNCTIONS","Andere Functies");
define("_STATISTIK","Statistieken");
define("_CLEARCACHE","Leeg Pagina Cache");
define("_DBSIZE","Database Grootte");
define("_DBOPTIMIZE","Optimaliseer DB");
define("_OPTIMIZE","Optimaliseer");
define("_PRUNEDB","Verwijder inactieve Verbanningen");
define("_PRUNE","Verschoon");
define("_DBPRUNED","Verbanningen verschoont");
//user level
define("_ADMINLEVELSETTINGS","Web Beheerder Level Opties");
define("_AMXADMINS","AMX Beheerders");
define("_WEBSETTINGS","Web Instellingen");
define("_LEVELVIEW","Toon");
define("_LEVELUNBAN","Ontban");
define("_LEVELIMPORT","Importeer");
define("_LEVELEXPORT","Exporteer");
define("_PERM","Gebruiker Levels");
define("_DBPRUNE","Verschoon DB");
define("_SERVEREDIT","Wijzig Server");
define("_NEWLEVEL","Nieuw Level");
define("_YOURLEVEL","Jouw Level: Je zal uitgelogd worden wanneer je opslaat");
//admin logs
define("_LOGS","Website Log");
define("_FILTER","Filter");
define("_ALL","Alle Logs");
define("_OLDERTHEN","Logs ouder dan");
define("_GO","Ga");
define("_ACTION","Actie");
define("_ACTIONLOGS","Uitgevoerde Acties");
define("_REMARKS","Beschrijving");
define("_USER","Gebruiker");
//add ban
define("_ADDBAN","Voeg een Verbanning Toe");
define("_NEWBAN","Voeg een Nieuwe Verbanning Toe");
define("_NOBANNAME","Geen naam ingevoerd!");
define("_ACTIVBANEXISTS","Er is reeds een actieve verbanning!");
//messages
define("_BANADDSUCCESS","Verbanning succesvol toegevoegd");
define("_BANEDITED","Verbanning opgeslagen");
define("_AMXADMINSAVESUCCESS","AMX Mod X Beheerder succesvol opgeslagen");
define("_AMXADMINDELETED","AMX Mod X Beheerder verwijderd");
define("_AMXADMINADDED","AMX Mod X Beheerder toegevoegd");
define("_NONAME","Geen Naam ingevoerd!");
define("_NOFLAGS","Vlaggen niet ingevoerd!");
define("_NOSTEAM","Geen SteamID ingevoerd");
define("_NOVALIDTIME","Geldigheids Tijd niet ingevoerd!");
define("_REASONSETADDED","Reden Groep toegevoegd");
define("_REASONSETDELETED","Reden Groep verwijderd");
define("_REASONSSETSAVED","Reden Groep opgeslagen");
define("_REASONADDED","Reden Toegevoegd");
define("_REASONDELETED","Reden Verwijderd");
define("_REASONSAVED","Reden Opgeslagen");
define("_SADMINSAVED","Server Beheerder Opgeslagen");
define("_SERVERSAVED","Server Instellingen opgeslagen");
define("_SERVERDELETED","Server verwijderd");
define("_CACHEDELETED","Website Cache verwijderd");
define("_LOGDELETED","Logs verwijderd");
define("_MODULSAVED","Module Instellingen opgeslagen");
define("_CONFIGSAVED","Instellingen opgeslagen");
define("_LEVELADDED","Level aangemaakt");
define("_LEVELDELFAILED","Fout:<br><br>WebBeheerder(s) met dit level bestaat reeds!<br>Level kan niet verwijderd worden.");
define("_LEVELDELETED","Level verwijderd");
define("_LEVELSAVED","Level opgeslagen");
define("_USERMENUDELETED","Gebruikers Menu verwijderd");
define("_USERMENUADDED","Gebruikers Menu toegevoegd");
define("_USERMENUPOSSAVED","Gebruikers Menu Positie opgeslagen");
define("_USERMENUSAVED","Gebruiker Menu opgeslagen");
define("_WADMINSAVED","Web Beheerder Opgeslagen");
define("_WADMINDELETED","Web Beheerder Verwijderd");
define("_WADMINADDED","Web Beheerder toegevoegd");
define("_COMDELETED","Reactie Verwijderd");
define("_COMADDED","Reactie Toegevoegd");
define("_COMEDITED","Reactie Opgeslagen");
define("_WRONGCAPTCHA","Verkeerde Veiligheidscode!");
define("_FILEDELFAILED","Document kan niet verwijderd worden!");
define("_FILENOTFOUND","Document niet gevonden!");
define("_ERROR","Fout");
define("_FILEEDITED","Wijzigingen bewaard");
define("_FILENOFILE","Geen Document!");
define("_FILETYPENOTALLOWED","Document Extensie niet toegestaan!");
define("_FILETOBIG","Document is te groot!");
define("_FILEUPLOADFAIL","Upload-Fout!");
define("_FILEUPLOADSUCCESS","Document Succesvol Geupload");
define("_FILENOTAVAILABLE","Document niet beschikbaar!");
define("_FILEDELSUCCESS","Document Succesvol verwijderd");
define("_NOREQUIREDFIELDS","Benodigde velden zijn er niet!");
define("_DBOPTIMIZED","Database geoptimaliseerd");
//live viewer
define("_SELECTSERVER","Selecteer een Server");
define("_ADDHLSW","Toevoegen aan HLSW");
define("_CONNECT","Connecteer");
define("_NUMBER","#");
define("_FRAGS","Frags");
define("_ONLINE","Tijd");
define("_ADDRESS","Adres");
define("_MAP","Map");
define("_NEXTMAP","Volgende Map");
define("_TIMELEFT","Tijd Over");
define("_TIMELIMIT","Tijd Limiet");
define("_FRIENDLYFIRE","Vrienden Aanvallen");
define("_GAMETYPE","Spel");
define("_ANTICHEAT","Anticheat Programma");
define("_ADDONS","Addons");
define("_PROTOCOL","Protocol");
define("_NOPLAYERS","Geen spelers");
define("_PLAYERCONNECTING","Spelers aan het connecteren...");
define("_SERVEROFFLINE","Server is niet beschikbaar");
define("_REFRESH","Vernieuw");
define("_NOTIMELIMIT","geen Tijdslimiet");
//live ban
define("_ADDBANONLINE","Voeg een Online Verbanning Toe");
define("_BANSETTINGS","Verban / Verwijder Instellingen");
define("_SHOW","Toon");
define("_USERID","GebruikersID");
define("_STATUSNAME","Statusnaam");
define("_BOT","Computer");
define("_PLAYER","Speler");
define("_HLTV","HLTV");
define("_UNKNOWN","onbekend");
define("_BAN","Verban");
define("_KICK","Verwijder");
define("_WRONGRCON","Verkeerd RCON Wachtwoord!");
define("_PLAYERKICKED","Speler verwijderd!");
define("_ADDBANSUCCESSKICK","Verbanning toegevoegd. Speler zal verwijderd worden!");
define("_BANANDKICK","verwijder Speler na verbanning");
define("_BANPLAYER","Weet je zeker dat je deze speler wilt verbannen?");
define("_KICKPLAYER","Weet je zeker dat je deze speler wilt verwijderen?");
//title
define("_TITLEADMIN","Beheerder");
define("_TITLEADMINLIST","Beheerderslijst");
define("_TITLEBANLIST","Banlijst");
define("_TITLELOGIN","Login");
define("_TITLESEARCH","Zoek");
define("_TITLEVIEW","Live Server Status");
define("_TITLEBANDETAIL","Details");
define("_TITLEBANADD","Voeg een Verbanning toe");
define("_TITLEBANADDONLINE","Voeg een Online Verbanning toe");
define("_TITLEAMXADMINS","AMXModX Beheerders");
define("_TITLEREASONS","Verbanredenen");
define("_TITLESERVERADMINS","Serverbeheerders");
define("_TITLESERVER","Server");
define("_TITLEINFO","Informatie");
define("_TITLELOGS","Logs");
define("_TITLEMODULE","Module");
define("_TITLEUPDATE","Versiecheck");
define("_TITLEUSERLEVEL","Gebruikerslevel");
define("_TITLESITE","Pagina Instellingen");
define("_TITLEUSERMENU","GebruikersMenu");
define("_TITLEWEBADMIN","Webbeheerder");
//value check
define("_NOUSERNAME","Geen Gebruikernaam ingevoegd!");
define("_NOPASSWORD","Geen Wachtwoord ingevoegd!");
define("_ACCESSINVALID","Toegang ongeldig!");
define("_FLAGSBCDMISSING","Vlag moet B, C of D zijn!");
define("_NONICKNAME","Geen bijnaam ingevoerd!");
define("_NOTAG","Geen Clan Tussenvoegsel / Naam ingevoerd!");
define("_EMAILINVALID","E-mail Adres is niet geldig!");
define("_STEAMIDINVALID","SteamID is niet geldig!");
define("_IPINVALID","IP Adres is niet geldig!");
define("_FLAGSINVALID","Vlaggen zijn niet geldig!");
define("_USERNAMETOSHORT","Naam is te kort!");
define("_USERNAMETOLONG","Naam is te lang!");
define("_NICKNAMETOSHORT","Bijnaam is te kort!");
define("_NICKNAMETOLONG","Bijnaam is te lang!");
define("_PASSWORDTOSHORT","Wachtwoord is te kort!");
define("_PASSWORDTOLONG","Wachtwoord is te lang!");
define("_NOREASONSET","Geen Reden ingevoegd!");
define("_REASONSETTOSHORT","Redengroep Naam is te kort!");
define("_REASONSETTOLONG","Redengroep Naam is te lang!");
define("_NOREASON","Geen Banreden ingevoegd!");
define("_REASONTOSHORT","Banreden is te kort!");
define("_REASONTOLONG","Banreden is te lang!");
define("_PASSWORDNOTMATCH","Wachtwoorden komen niet met elkaar overeen!");
define("_NOCOMMENT","Geen Commentaar ingevoerd!");
define("_NOEDITREASON","Geen Wijzig-Reden Ingevoerd!");
define("_COMMENTTOSHORT","Commentaar is te kort!");
define("_COMMENTTOLONG","Commentaar is te lang!");
define("_STEAMTOLONG","SteamID is te lang!");
define("_STEAMTOSHORT","SteamID is te kort!");
define("_NOIP","Geen IP ingevoegd!");
define("_IPTOLONG","IP is te lang!");
define("_IPTOSHORT","IP is te kort!");
//alerts
define("_SAVEEDIT","Bewaar veranderingen?");
define("_DELBAN","Weet je zeker dat je deze verbanning wilt verwijderen?");
define("_DELDEMO","Weet je zeker dat je dit document wilt verwijderen?");
define("_DELCOMMENT","Weet je zeker dat je deze reactie wilt verwijderen?");
define("_DELADMIN","Weet je zeker dat je deze beheerder wilt verwijderen?");
define("_DELLEVEL","Weet je zeker dat je dit level wilt verwijderen?");
define("_DELLOGSALL","Weet je zeker dat je alle logs wilt verwijderen?");
define("_DELLOGS","Weet je zeker dat je deze log(s) wilt verwijderen?");
define("_SAVESETTINGS","Wil je deze instellingen bewaren en doorgaan?");
define("_DATALOSS","\nDe data kan NIET worden opgehaald!");
define("_DELSERVER","Weet je zeker dat je deze server wilt verwijderen?");
//motd
define("_NOEXPIREDBANS","Geen verlopen verbanningen");
define("_YOUAREBANNED","U bent verbannen!!");
//new design related
define("_OS", "OS");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "N/T");
define("_STATS", "Statistieken");
define("_PERM_BANS", "Permanente Verbanningen");
define("_TEMP_BANS", "Tijdelijke Verbanningen");
define("_ACTIVE_SERVERS", "Actieve Servers");
define("_LATEST_BAN", "Laatste Verbanning");
define("_LATEST_KICKS", "Laatste Verwijderingen");
define("_BROWSE_ALL", "Bekijk Alles");
define("_POWERED_BY", "Ondersteund door");
define("_DESIGN_BY", "Stijl door");
define("_NO_BANS", "Geen Verbanningen in de Database");
define("_FIRST_PAGE", "Eerste Pagina");
define("_LAST_PAGE", "Laatste Pagina");
define("_PREVIOUS_PAGE", "Vorige Pagina");
define("_NEXT_PAGE", "Volgende Pagina");
define("_PICK_DATE", "Kies een Datum");
define("_WEB_VERSION", "Website Versie");
define("_WEBSERVER", "Webserver");
define("_MODULES", "Modules");
define("_MIN_OR", "minuten of");
define("_SIZE", "Grootte");
define("_UPD_CONNECT_ERROR", "Er kon geen verbinding gemaakt worden met de update server!");
define("_UPD_DB_ERROR", "The Update-Database could not be found.");
define("_UPD_SELECT_ERROR", "The Update-Database could not be selected.");
define("_ADMINID", "Beheerders' SteamID");
define("_TRACKBACK", "Trackback");
define("_YOUNOTBANNED", "Alles is goed, je bent niet verboden");
?>