<?php
session_start();
$page="filmek";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navStyle.css">
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="img/614731-cinema-512.png">
    <link rel="stylesheet" href="css/formStyle.css">
    <title>Főoldal</title>
    <link rel="stylesheet" href="css/filmekStyle.css">


</head>
<body onload="loginClose(); trailerAnim()" id="body">

<?php
include "menu.php"
?>
<header>
    <h1>Műsoron lévő filmek:</h1>
</header>
<main>
    <div class="framek">
        <h2>007 Nincs idő meghalni</h2>
        <iframe width="404" height="222" src="https://www.youtube.com/embed/bNonluc1hjU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <article> <h5>Öt évvel Ernst Stavro Blofeld elfogása után James Bond kilépett az aktív szolgálatból. Megkeresi barátja és
            CIA-tisztje, Felix Leiter, aki segítségét kéri Valdo Obruchev, egy eltűnt tudós felkutatásában. Amikor kiderül,
            hogy Obruchevet elrabolták, Bondnak szembe kell szállnia egy gazemberrel, akinek tervei milliók halálát okozhatják.<sup><strong>16+</strong></sup></h5> </article>
    </div>
    <div class="framek">
        <h2>Megjött apuci 2.</h2>
        <iframe width="404" height="222" src="https://www.youtube.com/embed/fqSPBaV74Dw" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <article><h5>A 2015-ben bemutatott Megjött apuci! című film folytatása.
            A közelgő ünnepek alatt Bradnek és Dustynak
            (Will Ferrell, Mark Wahlberg) foglalkozniuk kell a távolról
            érkező, tolakodó apáikkal is (Mel Gibson, John Lithgow).<sup><strong>12+</strong></sup></h5> </article>
    </div>
    <div class="framek">
        <h2>Dűne</h2>
        <iframe width="404" height="222" src="https://www.youtube.com/embed/o72DLfyAG2c" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <article><h5>10191-ben IV. Shaddam Padisah császár megbízza
            az Atreides-ház I. Leto hercegét, a Caladan óceánbolygó uralkodóját, hogy felügyelje az Arrakist, egy zord sivatagi bolygót.
            Az Arrakis az egyetlen forrása egy felbecsülhetetlen értékű anyagnak, a „fűszernek”, amely meghosszabbítja használójának életét és rövidtávú jövőbelátást biztosít, ezért
            nélkülözhetetlen a csillagközi űrhajózáshoz az űrnavigátorok számára.<sup><strong>16+</strong></sup></h5> </article>
    </div>
    <div class="framek">
        <h2>Pókember: Nincs hazaút</h2>
        <iframe width="404" height="222" src="https://www.youtube.com/embed/9coHr2jyBBk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <article><h5>Miután Quentin Beck gyilkossággal vádolta meg Peter Parkert, felfedte a fiú kilétét a világ előtt.
            Petert, nagynénjét, Mayt, MJ-t és Ned Leeds-t kihallgatja a Kárelhárítási Hivatal, azonban Matt Murdock ügyvéd segítségével minden vádat ejtenek.
            Peter, MJ és Ned levelet kapnak az MIT-től; mindannyiójuk jelentkezési kérelmét elutasítják a Pókemberrel való kapcsolatuk miatt.<sup><strong>12+</strong></sup></h5> </article>
    </div>
    <div class="framek">
        <h2>Szökés Pretoriából</h2>
        <iframe width="404" height="222" src="https://www.youtube.com/embed/qkgf7FmnBBU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <article><h5>Két férfit, Tim Jenkin-t és Stephen Lee-t bíróság elé állítják, mert több alkalommal apartheidellenes röplapokat terjesztettek.
            Jenkint tizenkét évre, Lee-t pedig nyolcra ítélik. A bíróságon Lee ösztönösen megpróbál menekülni, de eredménytelenül.
            A pretoriai börtön fehér rabok számára fenntartott részébe szállítják őket.
            Találkoznak egy idősebb politikai fogollyal, Denis Goldberggel, aki négyszeres életfogytiglanit kapott.<sup><strong>12+</strong></sup></h5> </article>
    </div>
    <div class="framek">
        <h2>Egy élet a bolygónkon</h2>
        <iframe width="404" height="222" src="https://www.youtube.com/embed/LWyqjrGLMZQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <article><h5>A legendás műsorvezető elmeséli életének és a Föld evolúciójának a történetét, miközben gyászolja az elveszett vadont, és elmondja, hogyan képzeli el a jövőt.
            Szereplők: David Attenborough <sup><strong>6+</strong></sup></h5></article>
    </div>
</main>
<?php
include "login.php";
?>
<?php
include "register.php";
?>
<?php
include "footer.php";
?>
</body>
</html>