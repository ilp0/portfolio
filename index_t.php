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
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="tyyli.css"> 
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <script src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Desktopin vasen menu -->
<div id="menuleft">
    <h1 class="otsikko">Ilpo Loikkanen</h1>
    <a href="javascript:void(0);" onclick="klikkeri()">
    <img class="profkuva" id="profkuva" width=250 height=250  src="profkuva.jpg" alt="Ilpo Loikkanen">
    </a>
    <h2 id="profilesubtitle" class="profilesubtitle">Entrepreneur and a student at JAMK University of Applied Sciences</h2>
        <div id="menu">
        <ul id="sidebar">
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#cv">CV</a></li>
            <li><a href="#taidot">Skills</a></li>
            <li><a href="#minusta">Minä</a></li>
            <li><a href="https://github.com/ilp0">GitHub</a></li>
            </ul>
            <table id="social-table">
                <tr>
                    <td>
                        <a href="https://www.facebook.com/1lp0L"><img src="fblogo.png" alt="Facebook" width=32 height=32></a>
                    </td>
                    <td>
                        <a href="http://bittimestari.fi"><img src="bm.jpg" alt="Bittimestari.fi" width=32 height=32></a>
                    </td>
                    <td>
                            <a href="https://www.linkedin.com/in/ilpo-loikkanen-321553140/"><img src="linkedin.png" alt="LinkedIn" width=37 height=32></a>
                    </td>
                </tr>
            </table>
    </div>
</div>

<!-- Mobiili ylämenu sekä kelluva menu -->

<div id="mobileTopBar">

                <h1 class="otsikko">Ilpo Loikkanen</h1>
                <a href="javascript:void(0);" onclick="klikkeri()">
                <img id="profkuva_m" class="profkuva" width=300 height=300 src="profkuva.jpg" alt="Ilpo Loikkanen">
                </a> <h2 id="profilesubtitle_m" class="profilesubtitle_m">Entrepreneur and a student at JAMK University of Applied Sciences</h2> 
</div>
<div id="mobMenuContainer">
<div id="mobileNavBar" class="mobnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <ul id="mobMenuLinks">
                <li id="portfolio_m"><a href="#portfolio">Portfolio</a></li>
                <li id="cv_m"><a href="#cv">CV</a></li>
                <li id="taidot_m"><a href="#taidot">Taidot</a></li>
                <li id="minusta_m"><a href="#minusta">Minusta</a></li>
                <li id="git_m"><a href="https://github.com/ilp0">GitHub</a></li>
            </ul>
            
</div>
</div>

<!-- Sisältö -->

<div id="main">
        
        <h1>Portfolio</h1>
        <h3 style="text-align:center;">Muutamia projekteja töistä ja vapaa-ajalta</h3>

    <div id="portfolio">
<?php
    createPfCard('varkaudentaekwondo.jpg',
    'http://varkaudentaekwondo.fi',
    'varkaudentaekwondo.fi',
    'Asiakastyö varkautelaiselle taekwondo seuralle',
    'Website for Varkauden Taekwondo');
    
    createPfCard('torvinen-rouvinen.jpg', 
    'http://torvinen-rouvinen.fi', 
    'torvinen-rouvinen.fi', 
    'Asiakastyö taiteilijoille Meeri Torvinen-Rouvinen ja Maria Rouvinen-Mäkelä', 
    'Website for artists Meeri Torvinen-Rouvinen and Maria Rouvinen-Mäkelä');
    
    createPfCard('virevalmennus.jpg', 
    'http://virevalmennus.fi', 
    'virevalmennus.fi', 
    'Asiakastyö varkautelaiselle Personal Trainerille', 
    'Website for a Personal Trainer');
    
    createPfCard('screenshot.png', 
    'https://github.com/ilp0/typest', 
    'Typest (GPLv3)',
    'Komentorivillä toimiva kirjoitusnopeustesti. Ohjelmoitu C++ kielellä linux ympäristössä. Highscore systeemi PHP/MariaDB.', 
    'Typing test in linux terminal. Programmed in C++ using ncurses library. Web based highscores done with PHP/MariaDB');
    
    createPfCard('cliffhanger.jpg', 
    'https://play.google.com/store/apps/details?id=com.Leapsmith.Cliffhanger', 
    'Cliffhanger', 
    'Android-peli ohjelmoitu C#-kielellä Unityssä.<br><b>>2500 latausta<br>4,33/5★</b>', 
    'Android game programmed in C# using Unityssä.<br><b>>2500 Downloads<br>4,33/5★</b>');
    
    createPfCard('drawyourshield.jpg', 
    'https://play.google.com/store/apps/details?id=com.Leapsmith.DrawYourShield', 
    'Draw Your Shield', 
    'Android-peli ohjelmoitu C#-kielellä Unityssä. <br><b>>250 latausta<br>4.43/5★</b>', 
    'Android game programmed in C# using Unity.<br><b>>250 Downloads<br>4,33/5★</b>');
?>
</div>
<h1>CV</h1>
<div id="cv">
<?php

    createCvCard('storaenso.jpg', 
    'Stora Enso', 
    'It Local Infra Support. Kesän ajan toimihenkilötehtävissä Varkauden Stora Enson IT-tiimissä',
    'IT Local Infra Support at Stora Enso Varkaus', 
    date("m/Y", strtotime("April 2018")), 
    date("m/Y", strtotime("August 2018")));

    createCvCard('jamk-light.png',
    'JAMK', 
    'Tieto- ja viestintätekniikan opiskelija suuntautunut ohjelmistotekniikkaan. Oletettu valmistumisvuosi 2021',
    'Information and Communication Technologies Engineer Student', 
    date("m/Y", strtotime("August 2017")), 
    $current);

    createCvCard('bm_wide.jpg', 
    'Bittimestari', 
    'Toimin yrittäjänä Varkaudessa 8/2017 asti ja siitä eteenpäin Jyväskylässä. Yritykseni tarjoaa tietokone- sekä älylaitehuoltoa, Web-suunnittelua sekä 3D-printtausta.',
    'Sole proprietor providing computer and phone repairs, web-designing and 3D-printing. Currently located in Jyväskylä, Finland.', 
    date("m/Y", strtotime("November 2016")),  
    $current);

    createCvCard('soisalo.jpg',
    'Soisalo-opisto',
    'Pelisuunnittelu ja ohjelmointi -kurssin opettaja.',
    'Lecturer at Soisalo-opisto teching game design principles and programming',
    date("m/Y", strtotime("October 2018")),
    date("m/Y", strtotime("March 2018")));

    createCvCard('matrix_multimedia_logo.gif', 
    'Matrix Technology Solutions', 
    'Kuukauden mittainen kansainvälinen työssäoppmisjakso Matrix Technology Solutionsilla. Työtehtäviin kuului mm. ohjelmistojen tuottaminen mikrocontrollereille sekä uuden softaversion QA-testaus',
    'International month long internship at Matrix Technology Solutions. Work consisted of creating software for microcontrollers and QA-testing the latest version of the software', 
    date("m/Y", strtotime("September 2018")), 
    date("m/Y", strtotime("September 2018")));

    createCvCard('lakiasiaintoimisto-majakka-logo-pieni.jpg',
    'Lakimajakka Oy - Dekkarit-festivaali',
    'Verkkosivujen tuottaminen Dekkarit-festivaaleille sekä tapahtuman live-striimaus youtubeen.',
    'Web-design for Dekkarit-festival and livestreaming the festival to Youtube.',
    date("m/Y", strtotime("May 2016")),
    date("m/Y", strtotime("July 2016")));

    createCvCard('dataenterlogo.svg',
    'Data-Enter Oy',
    'Kolmen kuukauden mittainen ICT-alan työssäoppimisjakso. Tietokonehuoltoja, serverien asennuksia, asiakaspalvelua',
    'Three month internship. Work consisted of computer repairs, server installations and customer service.',
    date("m/Y", strtotime("January 2016")),
    date("m/Y", strtotime("March 2016")));

    createCvCard('sakky.jpg',
    'Savon ammatti- ja aikuisopisto',
    'Tieto- ja tietoliikennetekniikan perustutkinto. ICT-asentaja.',
    'ICT-Technician',
    date("m/Y", strtotime("August 2014")),
    date("m/Y", strtotime("May 2017")));
?>
</div>
 <h1>Taidot</h1>
        <div id="taidot">
        

        <div class="kortti">
                <div class="korttiContainer">
                    <table class="workTable">
                            <tr>
                                    <td colspan="2"><h3>Development</h3></td>
                                </tr>
                        <tr><td style="text-align:right;"><p>C#</p></td><td><progress max="100" value="85"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>C++</p></td><td><progress max="100" value="50"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Java</p></td><td><progress max="100" value="20"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Git</p></td><td><progress max="100" value="60"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Unity</p></td><td><progress max="100" value="60"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Olio-ohjelmointi</p></td><td><progress max="100" value="80"></progress></td></tr>
           
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
                        <tr><td style="text-align:right;"><p>MySQL/MariaDB</p></td><td><progress max="100" value="75"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>WordPress</p></td><td><progress max="100" value="80"></progress></td></tr>                    
                        <tr><td style="text-align:right;"><p>PHP</p></td><td><progress max="100" value="60"></progress></td></tr>
                        <tr><td style="text-align:right;"><p>Javascript</p></td><td><progress max="100" value="60"></progress></td></tr>
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

                                            <h3 style="text-align:center;">Muut</h3>
                                      <br>
                                      <ul>
                                      <?php 
                                        if($_GET["lang"] === "en") {
                                            echo('
                                             <li>
                                            <p>Fast learner</p>
                                            </li>
                                            <li>
                                            <p>Trustworthy</p>
                                            </li>   
                                            <li>
                                            <p>I can work alone and in a group</p>
                                            </li> 
                                            <li>
                                            <p>I\'m pretty chill and flexible person and I can keep my cool in a tough situation.</p>
                                            </li>');
                                            } else {
                                            echo('
                                            <li>
                                            <p>Nopea oppimaan</p>
                                            </li>
                                            <li>
                                            <p>Luotettava</p>
                                            </li>  
                                            <li>
                                            <p>Oma-aloitteinen</p>
                                            </li>   
                                            <li>
                                            <p>Osaan työskennellä yksin sekä ryhmässä</p>
                                            </li> 
                                            <li>
                                                <p>Luonteelta rento ja joustava</p>
                                            </li>');
                                            }
                                        ?>
                                      </ul>

                                </table>
                            </div>
                            </div>     
            </div>
        <div>
        <h1>Minä</h1>
        <h3 style="text-align:center;">Harrastukset</h3>
        <p style="text-align:center;">Harrastuksiini kuuluu retro- ja PC-pelaaminen, ohjelmointi, elektroniikka, mekaaniset näppäimistöt, golf sekä kahvihifistely.</p>
<div id="minusta">
<?php
createHobbyCard('pelit1.jpg', 
'Retro- ja PC-pelit', 
'Tykkään vapaa-ajalla rentoutua ja pelata pelejä sohvalta tai PC-nurkkauksessa', 
'On my free time I like to relax and play games on retro consoles(SNES is my favourite!) or on my PC.');

createHobbyCard('golf.jpg',
'Golf',
'Harrastuksiini kuuluu myös golfaaminen. "Kotikenttä Joroisissa Kartanogolf.',
'In the summer I like to golf. I\'m not very good, but just walking around in beautiful scenery gives me great joy.');

createHobbyCard('3dprinttaus.JPG',
'3D-printing',
'Harrastan 3D-printtaamista, kotoa löytyy oma 3D-printteri. Mallinnuksessa käytön Fusion360(cad), Innovator(cad), Blender ja Medium(VR-mallinnus) ohjelmistoja',
'One of my hobbies are 3D-printing. For modeling I use Fusion360(cad), Innovator(cad), Blender and Medium(VR-sculpting)');
?>
<br>

<h1> Ota yhteyttä! </h1>
<h3> Jos kiinnostuit tai haluat lisätietoja minusta tai töistäni, haluat palkata minut tai muuten vaan rupatella niin soita tai laita sähköpostia!</h3>
<h2> 0400975446 </h2>
<h2> ilpo.loikkanen@bittimestari.fi </h2>
</div>
</div>


