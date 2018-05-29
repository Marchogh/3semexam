<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Lestragon' />
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant - L'estragon</title>
    <meta name="description" content="Eksklusiv restaurant Med plads til bare 22 gæster giver det lille fransk inspirede lokale gode rammer for nydelsen af vore udsøgte retter og vine."/>
    <link rel="stylesheet" href="../3semexam/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
    
    <!-- Header starts here -->
    <header id="top" class="header">
        <div class="logo">
        <img  src="images/lestragon-logo.png" alt="Logo L'estragon">
    </div>
    <!-- Navbar -->
        <nav id="header__nav">
            <ul>
                <li><a data-scroll href="#menucard">Menukort</a></li>
                <li><a data-scroll href="#booking">Bestil Bord</a></li>
                <li><a data-scroll href="#location">Find os her</a></li>
                <li><a data-scroll href="#party">Selskaber</a></li>
                <li><a data-scroll href="#contact">Kontakt</a></li>
            </ul>
        </nav>  
    <div class="header__content">
        <h1><span>Velkommen til</span>Restaurant L'estragon</h1>
        <a class="btn btn__header" href="https://module.lafourchette.com/da_DK/module/74381-603a4#/1293324/dhp" target="_blank">Bestil bord</a>
    </div>    
    </header>

    <!-- Menucard section starts here -->
    <section id="menucard" class="menucard">
        <div class="menucard__wrapper">
        <div class="menucard__leftside">
            <div class="menucard__visions">
            <cms:editable name='vision' type='richtext'>
            <h2>Restaurant L’estragon</h2>
            <h3 class="menucard__tagline">En intim og imødekommende restaurant</h3>
            <p>Vores vision er at skabe sanselige oplevelser ud fra lokale råvarer i sæson, hvor det grønne får lov at fylde. Tilberedning og godt håndværk giver stor kompleksitet og nyskabelse i vores menu.</p>
            <p>Vores fokus er at arbejde bæredygtigt. Menuerne bliver planlagt ud fra sæson, dyrkningsmetoder og dyrevelfærd. Vi sælger ikke flaskevand og vi sorterer vores affald.</p>
            <p>Vi forhandler vin fra små vinbønder med godt håndværk og ingen sprøjtemidler.</p>
            <p>Vores drøm er at skabe mindeværdige oplevelser gennem omsorg, godt håndværk, mod til fornyelse og ansvarlige valg.</p>
            </cms:editable>
        </div>

        <div class="menucard__menu">
            <img src="../3semexam/images/menucard/Flower.png" alt="Flower">
            <cms:editable name='menukort' type='richtext'>
            <h3>Maj-menu</h3>
            <h4>Start aftenen med bobler og snacks 115 kr.</h4>
            <h4>Menu Complete</h4>
            <p>Kartoffel-terrin, asparges, skalotteløg & peberrod Skærising, stenbiderrogn, hjertesalat & urter fra MolsTorsk, gule beder, peberfrugt samt rosmarin sauceRabarber, kærnemælk, estragon & macadamianødder</p>
            <p>350 kr.</p>

            <h4>Menu Grande</h4>
            <p>Kartoffel-terrin, asparges, skalotteløg & peberrod Skærising, stenbiderrogn, hjertesalat & urter fra mols Torsk, gule beder, peberfrugt samt rosmarin sauceFrikassé med dansk lam, ramsløg, knoldselleri & røgRabarber, kærnemælk, estragon & macadamianødder</p>
            <p>475 kr.</p>

            <h4>Hele pakken – kr. 1100 kr.</h4>
            <p>Bobler og snacks, 5 retter, 3 danske oste, vinmenu à 6 glas, kaffe og petits fours</p>

            <h4>Vinmenu</h4>
            <p>2 glas 175 kr.  /  3 glas 250 kr.  /  4 glas 325 kr. / 5 glas 400 kr. / 6 glas 450 kr.</p>
            <p>Oste med tilbehør og knækbrød. 75 kr.</p>
            <p>Kaffe og hjemmelavede petits fours til 75 kr.</p>

            <h4>Menu Petite – fra tirsdag til torsdag – kr. 350 kr.</h4>
            <p>To retter efter kokkens valg med to glas vin</p>
            <p>Vi har diverse saft, sodavand, øl og avec – spørg tjeneren</p>
            <p>Om søndagen har vi kun én menu: 5 retter og 3 glas vin til kr. 444 kr.</p>
            <p>Vi holder åbent til frokost hver lørdag kl. 12-15</p>
            <p>Vi har guldmærket i økologi.</p>
            </cms:editable>

            <a class="btn menucard__btn" href="http://www.lestragon.dk/wp-content/uploads/2017/12/lEstragons-vinkort.pdf.pdf" target="_blank">Se vores vinkort</a>

            </div>
         </div>

         <div class="menucard__rightside">
         </div>

         <img class="menucard__ecology" src="../3semexam/images/menucard/eoko_guld.svg" alt="Guldmærke økologi">
        </div>
    </section>

    <section id="booking" class="booking">
        <div class="booking__container">
            <h1 class="booking__container__h1">Bestil bord</h1>
            <p class="booking__container__p">Ønsker du at bestille bord til flere end 6 personer <br> Så kontakt os venligst på Tlf: 86 12 40 66</p>
            <a class="booking__container__button" href="https://module.lafourchette.com/da_DK/module/74381-603a4#/1293324/dhp" target="_blank">Bestil bord</a>
        </div>
    </section>

    <section id="location" class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2221.8893188186526!2d10.206939916074464!3d56.15901826805583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f968fcb06f9%3A0x99aa4692bc06b1fd!2sL&#39;estragon!5e0!3m2!1sda!2sdk!4v1527087840530" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <section id="party" class="party">
        <div class="party__wrapper">
            
        <img class="party__image" src="../3semexam/images/party/facade.png" alt="Facade af Lestragon">
      
        <div class="party__text">
        <cms:editable name='selskaber' type='richtext'>
            <h1>Fest og Selskaber</h1>
            <p>Vi åbner rigtig gerne op for selskaber både i dag- og aftentimerne. Restauranten danner en smuk ramme om selskaber på op til 28 personer.</p>
            <p>Vi tilbyder alt, rangerende fra hele pakken med tjenere, servering og køkkenpersonale på lokalisationen, til små fad-anretninger og selv-hent fra køkkenet.</p>
            <p>Kontakt os for mere info, så strikker vi et selskab sammen til jer.</p>
            </cms:editable>
        </div>  
    </div>

        <div class="video">
        <h2 class="video__headline">Video om restaurant L'estragon</h2>
        <p class="video__p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor delectus id soluta. Nam, quae corporis!</p>
       
        <iframe class="video__iframe" src="https://player.vimeo.com/video/271854752" width="840" height="560" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
     

        <h3 class="video__social">Følg os på de sociale medier</h3>
        <p class="video__p">Du kan finde os på Facebook og Instagram</p>
        <a class="video__btn facebook" href="https://www.facebook.com/Restaurant-Lestragon-168477629852832/">Facebook</a>
        <a class="video__btn instagram" href="https://www.instagram.com/lestragonaarhus/">Instagram</a>
    </div>
</section>
        

    <section class="images">
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img  src="../3semexam/images/instagram/insta1.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta2.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta3.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta4.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta5.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta6.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta7.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta8.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta9.jpg" alt="Instragram billede"></a>
    <a class="images__fixborder" href="https://www.instagram.com/lestragonaarhus/"><img src="../3semexam/images/instagram/insta10.jpg" alt="Instragram billede"></a>
    </section>
<a data-scroll id="back-to-top__a" href="#top">
    <section id="back-to-top">
            <img class="arrow-top" src="images/arrow-up.svg" alt="Go back to top">
    </section>
</a>
    <footer id="contact" class="footer">

       <a href="https://www.facebook.com/Restaurant-Lestragon-168477629852832/" target="_blank"><img class="footer__social" src="../3semexam/images/social/facebook.svg" alt="Facebook L'estragon"></a>
       <a href="https://www.instagram.com/lestragonaarhus/" target="_blank"><img class="footer__social" src="../3semexam/images/social/instagram.svg" alt="Instagram L'estragon"></a>
    
        <div class="footer__content">
    <div class="location">
        <img class="footer__image" src="../3semexam/images/social/location.svg" alt="">
        <p>Restaurant L'estragon</p>
        <p>Klostergade 6,</p>
        <p>8000 Aarhus C</p>
    </div>

    <div class="opening">
        <img class="footer__image" src="../3semexam/images/social/clock.svg" alt="">
        <p>Åbningstider</p>
        <p>Man-Søn: 18:00-02:00</p>
        <p>Lørdag: Frokost 12:00-15:00</p>
     </div>

    <div class="contact">
        <img class="footer__image" src="../3semexam/images/social/phone.svg" alt="">
        <p>Kontakt</p>
        <p>Tlf: 86 12 40 66</p>
        <p>info@lestragon.dk</p>
    </div>
</div>
    </footer>
    
    <script src="js/to-top.js"></script>
    <script src="js/sticky-navigation.js"></script>
    <script src="js/smooth-scroll.js"></script>
  
</body>
</html>
<?php COUCH::invoke(); ?>
