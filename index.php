<?php
include './p/pf_card.php';
$current = 'Nykyinen';
if($_GET['lang'] == 'eng') {
    $current = 'Current';
}
?>

<!DOCTYPE html> 
<html lang="fi">
    <!-- head tagit -->
<head>
    <meta charset="utf-8">
    <title>loikkanen.io</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/tyyli.css"> 
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <script src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120952638-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120952638-2');
</script>


</head>
<body>
    <!-- Desktopin vasen menu -->
<div id="menuleft">
    <h1 class="otsikko">Ilpo Loikkanen</h1>
    <a href="javascript:void(0);" onclick="klikkeri()">
    <img class="profkuva" id="profkuva"  src="img/profkuva.jpg" alt="Ilpo Loikkanen">
    </a>
    <h2 id="profilesubtitle" class="profilesubtitle">Entrepreneur and a student at JAMK University of Applied Sciences</h2>
        <div id="menu">
	<ul id="sidebar">
		<li><a href="https://loikkanen.io/index.php?lang=en">In English</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#cv">CV</a></li>
            <li><a href="#taidot">Skills</a></li>
            <li><a href="#minusta">Me</a></li>
            <li><a href="https://github.com/ilp0">GitHub</a></li>
            </ul>
            <table id="social-table">
                <tr>
                    <td>
                        <a href="https://www.facebook.com/1lp0L"><img src="img/fblogo.png" alt="Facebook" width=32 height=32></a>
                    </td>
                    <td>
                        <a href="http://bittimestari.fi"><img src="img/bm.jpg" alt="Bittimestari.fi" width=32 height=32></a>
                    </td>
                    <td>
                            <a href="https://www.linkedin.com/in/ilpo-loikkanen-321553140/"><img src="img/linkedin.png" alt="LinkedIn" width=37 height=32></a>
                    </td>
                </tr>
            </table>
    </div>
</div>

<!-- Mobiili ylämenu sekä kelluva menu -->

<div id="mobileTopBar">

                <h1 class="otsikko">Ilpo Loikkanen</h1>
                <a href="javascript:void(0);" onclick="klikkeri()">
                <img id="profkuva_m" class="profkuva" width=300 height=300 src="img/profkuva.jpg" alt="Ilpo Loikkanen">
                </a> <h2 id="profilesubtitle_m" class="profilesubtitle_m">Entrepreneur and a student at JAMK University of Applied Sciences</h2> 
</div>
<div id="mobMenuContainer">
<div id="mobileNavBar" class="mobnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	<ul id="mobMenuLinks">
	<li><a href="https://loikkanen.io/index.php?lang=en">In English</a></li>
                <li id="portfolio_m"><a href="#portfolio">Portfolio</a></li>
                <li id="cv_m"><a href="#cv">CV</a></li>
                <li id="taidot_m"><a href="#taidot">Skills</a></li>
                <li id="minusta_m"><a href="#minusta">Me</a></li>
		<li id="git_m"><a href="https://github.com/ilp0">GitHub</a></li>
		<li> <a href="https://www.linkedin.com/in/ilpo-loikkanen-321553140/">LinkedIn</a>
		<li> <a href="https://bittimestari.fi"> Bittimestari </a>
		<li> <a href="https://facebook.com/1lp0L">Facebook</a>

            </ul>
            
</div>
</div>

<!-- Sisältö -->

<div class="contact">
📧<span class="contact-i"><a href="mailto:ilpo.loikkanen@bittimestari.fi">ilpo.loikkanen@bittimestari.fi</a></span>
</div>

<div class="contact" style="bottom: 120px;" >
📞<span class="contact-i"><a href="tel:+358400975446">0400975446</a></span>
</div>

<div id="main">	
	<div id="bio">
	<h1>Bio</h1>
	<p> <?php
	 if($_GET['lang'] === 'en'){
		 echo('
	Currently an Engineer student at JAMK University of Applied Sciences and a sole proprietor operating under Bittimestari. I love to build, experiment, prototype and learn new things.<br>
	A life long intrest in technology combined with great problem solving, people skills and IT-experience in companies ranging from multi-national organisation to sole proprietor are the qualities what might make me the best fit for your company. <br> Currently looking for a part-time job in Jyväskylä in the IT industry.
	');	 
	 }else{
		 echo('
    Opiskelen tällä hetkellä Jyväskylän Ammattikorkeakoulussa Tieto- ja viestintätekiikan <b>insinööriksi</b> ja toimin yrittäjänä Bittimestari nimellä. Vapaa-ajallani tykkään suunnitella ja toteuttaa erinäisiä projekteja oli ne sitten elektroniikka, ohjelmointi tai palvelinhommia.<br> Olen työskennellyt niin suurissa, kuin pienissä yrityksissä. <br>
    Erinomaisten <b>ongelmanratkaisutaitojeni, kokemukseni ja ihmistaitojeni</b> ansiosta saatan olla juuri oikea henkilö teidän <b>firmaanne!</b><br><br>
    Haen osa-aikatyötä opiskelujen ohelle Jyväskylän alueella. 
	');	
	}
	?>
        </div>
        <h1>Portfolio</h1>
	<h3 style="text-align:center;">
	<?php
	 if($_GET['lang'] === 'en'){
		 echo('
	Selected professional and hobby -projects
	');	 
	 }else{
	echo('Valikoituja projekteja töistä ja vapaa-ajalta');
	}
	?>
	</h3>

    <div id="portfolio"> 
<?php
   
      createPfCard('img/qkop.jpg',
	   'http://qkop.io',
	   'qkop.io ',
	   'Tiedostonsiirtopalvelu. Voit jakaa tiedoston 5-merkkisen koodin avulla. Pääkäyttötarkoitus on nopea ja helppo tiedoston siirto esim. puhelimelta tietokoneelle ilman että joudut kirjautumaan pilvipalveluihin yms. Tiedosto pysyy palvelimella 5 minuttia jonka jälkeen se poistuu lopullisesti.',
	   'QKOP.IO is a short term file storage service. After uploading a max 5MB file, you can download it file with a 5 character code. Your uploaded file will stay on the server for 5 minutes and after that the file will be permanently deleted');
	   
    createPfCard('img/screenshot.png', 
    'https://github.com/ilp0/typest', 
    'Typest (GPLv3)',
    'Komentorivillä toimiva kirjoitusnopeustesti. Ohjelmoitu C++ kielellä linux ympäristössä. Highscore systeemi PHP/MariaDB.', 
    'Typing test in linux terminal. Programmed in C++ using ncurses library. Web based highscores done with PHP/MariaDB');

    createPfCard('img/kotiverkko.jpg',
	    '',
	    'Homelab',
	    'Kotilabra joka sisältää muun muassa: <br>
	    HP DL380 w/ proxmox virtuaalisointialusta<br>
	    DD-WRT -firmiksellä pyörivä reititin <br>
	    Pari "tyhmää" 1Gb kytkintä <br>
	    Päätelaitteita vaikka muille jakaa',
	    'Homelab with equipment: <br>
	    HP DL380 w/ proxmox virtualization platform(this website is running on this server!)<br>
	    Router with DD-WRT firmware.<br>
	    Couple dumb 1Gb switches. <br>
	    Too many clients to count');
	   
    
    createPfCard('img/cliffhanger.jpg', 
    'https://play.google.com/store/apps/details?id=com.Leapsmith.Cliffhanger', 
    'Cliffhanger', 
    'Android-peli ohjelmoitu C#-kielellä Unityssä.<br><b>>2500 latausta<br>4,33/5★</b>', 
    'Android game programmed in C# using Unity.<br><b>>2500 Downloads<br>4,33/5★</b>');
    
    createPfCard('img/drawyourshield.jpg', 
    'https://play.google.com/store/apps/details?id=com.Leapsmith.DrawYourShield', 
    'Draw Your Shield', 
    'Android-peli ohjelmoitu C#-kielellä Unityssä. <br><b>>250 latausta<br>4.43/5★</b>', 
    'Android game programmed in C# using Unity.<br><b>>250 Downloads<br>4,33/5★</b>');
    
	createPfCard('img/splitterino.jpg',
   'https://github.com/ilp0/splitterino',
   'Splitterino (GPLv3)',
   'Speedrun ajastin ohjelmoitu C#-kielellä käyttäen WPF-kirjastoa.',
   'Speedrun timer programmed in C# and WPF.');


    createPfCard('img/kiekko.jpg', 
    'https://github.com/ilp0/kiekko',
    'Kiekko (GPLv3) WiP',
    'Pyöritä haluamaasi kiekkoa haluamasi ajan välein. Kontrolloi kiekkoa älypuhelimella tai tietokoneella web-selaimen avulla',
    'Spin a desired disk after a desired amount of time. Control the disc with your smartphone or computer via a web-browser');

    createPfCard('img/varkaudentaekwondo.jpg',
    'http://varkaudentaekwondo.fi',
    'varkaudentaekwondo.fi',
    'Asiakastyö varkautelaiselle taekwondo seuralle',
    'Website for Varkauden Taekwondo');
    
    createPfCard('img/torvinen-rouvinen.jpg', 
    'http://torvinen-rouvinen.fi', 
    'torvinen-rouvinen.fi', 
    'Asiakastyö taiteilijoille Meeri Torvinen-Rouvinen ja Maria Rouvinen-Mäkelä', 
    'Website for artists Meeri Torvinen-Rouvinen and Maria Rouvinen-Mäkelä');
    
    createPfCard('img/virevalmennus.jpg', 
    'http://virevalmennus.fi', 
    'virevalmennus.fi', 
    'Asiakastyö varkautelaiselle Personal Trainerille', 
    'Website for a Personal Trainer');


    if($_GET['lang'] === 'en'){
    echo('<div class="kortti">
                <div class="web_korttiImg">
                    <iframe width="350" height="250" src="https://www.youtube.com/embed/I5RO4G2qpZM"  allowfullscreen></iframe>
                    </div>
                <div class="korttiContainer">
                    <h3>LED-panel demo</h3>
                        <p>LED-panel demo programmed on Flowcode 7 to a microcontroller.</p>
                </div>
        </div>');  
    } else {
    echo('<div class="kortti">
                <div class="web_korttiImg">
                    <iframe width="350" height="250" src="https://www.youtube.com/embed/I5RO4G2qpZM"  allowfullscreen></iframe>
                    </div>
                <div class="korttiContainer">
                    <h3>LED-valotaulu demo</h3>
                        <p>LED-valotaulun ohjelmointi ja demon tuottaminen Flowcode 7:llä. Yksi töistä Matrix Technology Solutionsilla.</p>
                </div>
        </div>');     
    }
?>
    
</div>
<h1>CV</h1>
<div id="cv">
<?php

    createCvCard('img/storaenso.jpg', 
    '', 
    'It Local Infra Support. Kesän ajan toimihenkilötehtävissä Varkauden Stora Enson IT-tiimissä',
    'IT Local Infra Support at Stora Enso Varkaus', 
    date("m/Y", strtotime("April 2018")), 
    date("m/Y", strtotime("August 2018")));

    createCvCard('img/jamk-light.png',
    'JAMK', 
    'Tieto- ja viestintätekniikan opiskelija suuntautunut ohjelmistotekniikkaan. Oletettu valmistumisvuosi 2021',
    'Information and Communication Technologies Engineer Student', 
    date("m/Y", strtotime("August 2017")), 
    $current);

    createCvCard('img/bm_wide.jpg', 
    'Bittimestari', 
    'Toimin yrittäjänä Varkaudessa 8/2017 asti ja siitä eteenpäin Jyväskylässä. Yritykseni tarjoaa tietokone- sekä älylaitehuoltoa, Web-suunnittelua sekä 3D-printtausta.',
    'Sole proprietor providing computer and phone repairs, web-designing and 3D-printing. Currently located in Jyväskylä, Finland.', 
    date("m/Y", strtotime("November 2016")),  
    $current);

    createCvCard('img/soisalo.jpg',
    'Soisalo-opisto',
    'Pelisuunnittelu ja ohjelmointi -kurssin opettaja.',
    'Lecturer at Soisalo-opisto teching game design principles and programming',
    date("m/Y", strtotime("October 2018")),
    date("m/Y", strtotime("March 2018")));

    createCvCard('img/matrix_multimedia_logo.gif', 
    'Matrix Technology Solutions', 
    'Kuukauden mittainen kansainvälinen työssäoppmisjakso Matrix Technology Solutionsilla. Työtehtäviin kuului mm. ohjelmistojen tuottaminen mikrocontrollereille sekä uuden softaversion QA-testaus',
    'International month long internship at Matrix Technology Solutions. Work consisted of creating software for microcontrollers and QA-testing the latest version of the software', 
    date("m/Y", strtotime("September 2018")), 
    date("m/Y", strtotime("September 2018")));

    createCvCard('img/lakiasiaintoimisto-majakka-logo-pieni.jpg',
    'Lakimajakka Oy - Dekkarit-festivaali',
    'Verkkosivujen tuottaminen Dekkarit-festivaaleille sekä tapahtuman live-striimaus youtubeen.',
    'Web-design for Dekkarit-festival and livestreaming the festival to Youtube.',
    date("m/Y", strtotime("May 2016")),
    date("m/Y", strtotime("July 2016")));

    createCvCard('img/dataenterlogo.svg',
    'Data-Enter Oy',
    'Kolmen kuukauden mittainen ICT-alan työssäoppimisjakso. Tietokonehuoltoja, serverien asennuksia, asiakaspalvelua',
    'Three month internship. Work consisted of computer repairs, server installations and customer service.',
    date("m/Y", strtotime("January 2016")),
    date("m/Y", strtotime("March 2016")));

    createCvCard('img/sakky.jpg',
    'Savon ammatti- ja aikuisopisto',
    'Tieto- ja tietoliikennetekniikan perustutkinto. ICT-asentaja.',
    'ICT-Technician',
    date("m/Y", strtotime("August 2014")),
    date("m/Y", strtotime("May 2017")));
?>
</div>
 <h1>Skills</h1>
        <div id="taidot">
        <h2></h2> 

        <div class="kortti">
                <div class="korttiContainer">
                    <table class="workTable">
                            <tr>
                                    <td colspan="2"><h3>Development</h3></td>
                                </tr>
                        <tr><td style="text-align:right;"><p>C#</p></td><td><progress max="100" value="70"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>C++</p></td><td><progress max="100" value="50"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Java</p></td><td><progress max="100" value="15"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Git</p></td><td><progress max="100" value="50"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Unity</p></td><td><progress max="100" value="70"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Olio-ohjelmointi</p></td><td><progress max="100" value="65"></progress></td></tr>
           
                    </table>
                </div>
            </div>
            <div class="kortti">
                <div class="korttiContainer">
                    <table class="workTable">
                            <tr>
                                    <td colspan="3"><h3>Web</h3></td>
				</tr>
                        <tr><td style="text-align:right;"><p>HTML5</p></td><td><progress max="100" value="90"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>CSS</p></td><td><progress max="100" value="90"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>MySQL/MariaDB</p></td><td><progress max="100" value="60"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>WordPress</p></td><td><progress max="100" value="80"></progress></td></tr>                    
                        <tr><td style="text-align:right;"><p>PHP</p></td><td><progress max="100" value="50"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Javascript</p></td><td><progress max="100" value="40"></progress></td></tr>
                    </table>
                    </div>
		</div>
            <div class="kortti">
                <div class="korttiContainer">
                    <table class="workTable">
                            <tr>
                                    <td colspan="3"><h3>Network related</h3></td>
				</tr>
                        <tr><td style="text-align:right;"><p>HP-switches</p></td><td><progress max="100" value="40"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Cisco-switches</p></td><td><progress max="100" value="30"></progress></td></tr>
			<tr><td style="text-align:right;"><p>Basic network understanding (Switches, Routing, DNS, etc.)</p></td><td><progress max="100" value="95"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Cloudflare</p></td><td><progress max="100" value="80"></progress></td></tr>                    
                        <tr><td style="text-align:right;"><p>AWS (EC2, LS, R53, SES)</p></td><td><progress max="100" value="60"></progress></td></tr>
                    </table>
                    </div>
                </div>
 
                <div class="kortti">
                    <div class="korttiContainer">
                        <table class="workTable">
                                <tr>
                                        <td colspan="3"><h3>Office skills</h3></td>
                                    </tr>
                            <tr><td style="text-align:right;"><p>Excel</p></td><td><progress max="100" value="85"></progress></td></tr>
                            <tr><td style="text-align:right;"><p>Word</p></td><td><progress max="100" value="85"></progress></td></tr>
                            <tr><td style="text-align:right;"><p>Access</p></td><td><progress max="100" value="60"></progress></td></tr>
                            <tr><td style="text-align:right;"><p>PowerPoint</p></td><td><progress max="100" value="70"></progress></td></tr>
                            <tr><td style="text-align:right;"><p>UML</p></td><td><progress max="100" value="50"></progress></td></tr>

                        </table>
                    </div>
                    </div>
                    <div class="kortti">
                            <div class="korttiContainer">
                                <table class="workTable">
                                        <tr>
                                                <td colspan="3"><h3>Operating Systems</h3></td>
                                            </tr>
                                    <tr><td style="text-align:right;"><p>Linux</p></td><td><progress max="100" value="85"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>Windows 7/8/10</p></td><td><progress max="100" value="100"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>Windows Server</p></td><td><progress max="100" value="70"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>macOS/OSX</p></td><td><progress max="100" value="80"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>Android</p></td><td><progress max="100" value="90"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>iOS</p></td><td><progress max="100" value="90"></progress></td></tr>

                                </table>
                            </div>
                            </div>
		   
			 <div class="kortti">
                            <div class="korttiContainer">
                                <table class="workTable">
                                        <tr>
                                                <td colspan="3"><h3>Human Languages</h3></td>
                                            </tr>
                                    <tr><td style="text-align:right;"><p>Finnish</p></td><td><progress max="100" value="100"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>English</p></td><td><a href="docs/en-skill.pdf" style="color:black;"><u>EU framework C2 </u></a><a style="color:black;" href="https://en.wikipedia.org/wiki/Common_European_Framework_of_Reference_for_Languages#Common_reference_levels"><u>(Explanation)</u></a></td></tr>
                                    <tr><td style="text-align:right;"><p>Swedish</p></td><td><progress max="100" value="15"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>Russian</p></td><td><progress max="100" value="15"></progress></td></tr>
                                    <tr><td style="text-align:right;"><p>Chinese(currenlty studying)</p></td><td><progress max="100" value="10"></progress></td></tr>

                                </table>
                            </div>
                            </div>

				 <div class="kortti">
                            <div class="korttiContainer">
                                <table class="workTable">

                                            <h3 style="text-align:center;">Muut</h3>
                                      <br>
                                      <ul id="muut-lista">
                                      <?php 
                                        if($_GET["lang"] === "en") {
                                            echo('
                                             <li>
                                            <p>📚Fast learner</p>
                                            </li>
                                            <li>
                                            <p>🤝Trustworthy</p>
					    </li>   
                                            <li>
                                            <p>👌I\'m pretty chill and flexible person with a good sense of humor</p>
                                            </li>');
                                            } else {
                                            echo('
                                            <li>
                                            <p>📚Nopea oppimaan</p>
                                            </li>
                                            <li>
                                            <p>🤝Luotettava</p>
                                            </li>  
                                            <li>
                                            <p>🤙Oma-aloitteinen</p>
                                            </li>    
                                            <li>
                                                <p>👌Luonteelta rento ja huumorintajuinen</p>
                                            </li>');
                                            }
                                        ?>
                                      </ul>

                                </table>
                            </div>
                            </div>     
            </div>
        <div>
        <h1>About Me</h1>
        <h3 style="text-align:center;">Hobbies</h3>
<div id="minusta">
<?php
    createHobbyCard('img/ilpon-motskari.jpg',
	    'Motorcycles',
	    'Tämänhetkinen pärrä: Suzuki GS 500 F -04',
	    'Current bike: Suzuki GS 500 F -04');

    createHobbyCard('img/pelit1.jpg', 
'Retro & PC-games', 
'Tykkään vapaa-ajalla rentoutua ja pelata pelejä sohvalta tai PC-nurkkauksessa', 
'On my free time I like to relax and play games on retro consoles(SNES is my favourite!) or on my PC.');

createHobbyCard('img/frisbeegolf.jpg',
	'Disc Golf',
	'',	
	'');
createHobbyCard('img/golf.jpg',
'Golf',
'Harrastuksiini kuuluu myös golfaaminen. "Kotikenttä" Joroisissa Kartanogolf.',
'In the summer I like to golf. I\'m not very good, but just walking around in beautiful scenery gives me great joy.');

createHobbyCard('img/3dprinttaus.JPG',
'3D-printing',
'Harrastan 3D-printtaamista, kotoa löytyy oma 3D-printteri. Mallinnuksessa käytän Fusion360(cad), Innovator(cad), Blender ja Medium(VR-mallinnus) ohjelmistoja',
'One of my hobbies are 3D-printing. For modeling I use Fusion360(cad), Innovator(cad), Blender and Medium(VR-sculpting)');
?>
<br>
</div>
</div>
</div>§
